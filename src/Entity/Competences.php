<?php

namespace App\Entity;

use App\Repository\CompetencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetencesRepository::class)
 */
class Competences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveauCompetence;

    /**
     * @ORM\ManyToOne(targetEntity=CompetencesCategories::class, inversedBy="competences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competence_categories;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNiveauCompetence(): ?int
    {
        return $this->niveauCompetence;
    }

    public function setNiveauCompetence(int $niveauCompetence): self
    {
        $this->niveauCompetence = $niveauCompetence;

        return $this;
    }

    public function getCompetenceCategoriesId(): ?CompetencesCategories
    {
        return $this->competence_categories;
    }

    public function setCompetenceCategoriesId(?CompetencesCategories $competence_categories): self
    {
        $this->competence_categories = $competence_categories;

        return $this;
    }
}
