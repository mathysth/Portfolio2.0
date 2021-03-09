<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_2ce39af4e411e07291362ef8958b7b2d830a16b6aaaf105df93bc11a96998346 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"/build/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/bootstrap-grid.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/bootstrap-reboot.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/style.css\">

    <!-- Font / ScrollTools  -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/54309b8d30.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <script src=\"/build/js/scrollreveal.js\"></script>
    <!-- <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script> -->
    <script>
        function alertPlugin(title,content,type){
            swal(title, content, type);
        }
    </script>
    <title>";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


</head>
<body>
<div id=\"page\">
    <header id=\"animation\">
        <div class=\"bg\" style=\"background-image: url('/build/img/slide-bg.jpg');background-attachment: fixed;    box-shadow: 0 3px 10px 0 rgba(1, 3, 4, 0.35);\"></div>
        <nav id=\"navbar\" class=\"navbar navbar-expand-lg navbar-light navbar-right\">
            <a class=\"navbar-brand\" href=\"#\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>


            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"> gvb </a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\"> oik </a>

                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Membre <i class=\"fas fa-sort-down\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Espace Membre</a>
                            <a class=\"dropdown-item\" href=\"#\">Déconnexion</a>
                        </div>
                    </li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Admin</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Connexion</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Inscription</a></li>

                    <li class=\"nav-item\"><a href=\"mailto:mathystheolade973@gmail.com\" class=\"nav-link\">Contact</a></li>


                </ul>
            </div>


        </nav>
    </header>

    ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "


    <footer id=\"footer\" class=\"mainFooter bg\" style=\"background-image: url('<?= \\School\\Chemins\\Chemins::IMAGES ?>slide-bg.jpg');background-attachment: fixed; height: auto;opacity: 1 !important;    box-shadow: 0 -10px 10px 0 rgba(1, 3, 4, 0.35);\">

        <p id=\"footer\" style=\"opacity: 1 !important;\">Mathys Theolade | Etudiant en BTSSIO</p>

    </footer>

    <!-- JS -->
    <script>
        function sendAjaxRequest(\$url,\$param = null,\$method = \"POST\"){
            return \$.ajax({
                url: \"/api/\"+\$url,
                method: \$method,
                data: {
                    explode: \$param
                },
                dataType: \"html\",
                async: true
            })
        }
    </script>
    <script src=\"/build/js/main.js\" charset=\"utf-8\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    ";
        // line 105
        $this->displayBlock('script', $context, $blocks);
        // line 106
        echo "</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Mathys Theolade ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 105,  192 => 77,  173 => 27,  160 => 106,  158 => 105,  129 => 78,  127 => 77,  74 => 27,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"/build/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/bootstrap-grid.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/bootstrap-reboot.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/style.css\">

    <!-- Font / ScrollTools  -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/54309b8d30.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <script src=\"/build/js/scrollreveal.js\"></script>
    <!-- <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script> -->
    <script>
        function alertPlugin(title,content,type){
            swal(title, content, type);
        }
    </script>
    <title>{% block title %}Portfolio Mathys Theolade {% endblock %}</title>


</head>
<body>
<div id=\"page\">
    <header id=\"animation\">
        <div class=\"bg\" style=\"background-image: url('/build/img/slide-bg.jpg');background-attachment: fixed;    box-shadow: 0 3px 10px 0 rgba(1, 3, 4, 0.35);\"></div>
        <nav id=\"navbar\" class=\"navbar navbar-expand-lg navbar-light navbar-right\">
            <a class=\"navbar-brand\" href=\"#\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>


            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"> gvb </a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\"> oik </a>

                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Membre <i class=\"fas fa-sort-down\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Espace Membre</a>
                            <a class=\"dropdown-item\" href=\"#\">Déconnexion</a>
                        </div>
                    </li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Admin</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Connexion</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Inscription</a></li>

                    <li class=\"nav-item\"><a href=\"mailto:mathystheolade973@gmail.com\" class=\"nav-link\">Contact</a></li>


                </ul>
            </div>


        </nav>
    </header>

    {% block body %} {%  endblock %}



    <footer id=\"footer\" class=\"mainFooter bg\" style=\"background-image: url('<?= \\School\\Chemins\\Chemins::IMAGES ?>slide-bg.jpg');background-attachment: fixed; height: auto;opacity: 1 !important;    box-shadow: 0 -10px 10px 0 rgba(1, 3, 4, 0.35);\">

        <p id=\"footer\" style=\"opacity: 1 !important;\">Mathys Theolade | Etudiant en BTSSIO</p>

    </footer>

    <!-- JS -->
    <script>
        function sendAjaxRequest(\$url,\$param = null,\$method = \"POST\"){
            return \$.ajax({
                url: \"/api/\"+\$url,
                method: \$method,
                data: {
                    explode: \$param
                },
                dataType: \"html\",
                async: true
            })
        }
    </script>
    <script src=\"/build/js/main.js\" charset=\"utf-8\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    {% block script %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\www\\Ecole\\PPE\\mainSite\\templates\\base.html.twig");
    }
}
