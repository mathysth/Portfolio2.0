<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210307123834 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competences DROP FOREIGN KEY FK_DB2077CE8CED3CBF');
        $this->addSql('DROP INDEX IDX_DB2077CE8CED3CBF ON competences');
        $this->addSql('ALTER TABLE competences CHANGE competence_categories_id_id competence_categories_id INT NOT NULL');
        $this->addSql('ALTER TABLE competences ADD CONSTRAINT FK_DB2077CED33DD65C FOREIGN KEY (competence_categories_id) REFERENCES competences_categories (id)');
        $this->addSql('CREATE INDEX IDX_DB2077CED33DD65C ON competences (competence_categories_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competences DROP FOREIGN KEY FK_DB2077CED33DD65C');
        $this->addSql('DROP INDEX IDX_DB2077CED33DD65C ON competences');
        $this->addSql('ALTER TABLE competences CHANGE competence_categories_id competence_categories_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE competences ADD CONSTRAINT FK_DB2077CE8CED3CBF FOREIGN KEY (competence_categories_id_id) REFERENCES competences_categories (id)');
        $this->addSql('CREATE INDEX IDX_DB2077CE8CED3CBF ON competences (competence_categories_id_id)');
    }
}
