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

/* partials/header.html.twig */
class __TwigTemplate_2c7e9f4bff81afa50cacefc8749f7982eda84014db4c7b23156df3c2ed34e465 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body>
";
        // line 18
        $this->displayBlock('nav', $context, $blocks);
        // line 42
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-3\">
            ";
        // line 45
        $this->displayBlock('menu', $context, $blocks);
        // line 79
        echo "        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\"
              integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\"
              crossorigin=\"anonymous\">
        ";
        // line 11
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        <!-- Renders a link tag (if your module requires any CSS)
             <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-2\">
        <a class=\"navbar-brand\" href=\"#\"><span class=\"font-weight-bold color-general\">Symbole</span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto d-lg-none\" id=\"menu-big\">
                <li class=\"nav-item active d-lg-none\">
                    <a class=\"nav-link\" href=\"\" >Ajouter un étudiant<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"Etudiant/listeetudiant\">Liste étudiants</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"<?=URL?>Chambre/addchambre\">Ajouter une chambre</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"<?=URL?>Chambre/listechambre\">Liste chambre</a>
                </li>
            </ul>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "                <div class=\"d-none d-lg-block\">
                    <div class=\"row mt-4 ml-1 mb-4\">
                        <h5 class=\"font-weight-normal color-general\">Menu</h5>
                    </div>
                    <div class=\"row ml-1 d-block mb-5\">
                        <div>
                            <h6 class=\"font-weight-bold text-secondary\">Etudiant</h6>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/source/image/icones/student.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"color-general font-weight-bold\">Ajouter un étudiant</span>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/source/image/icones/list.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"text-secondary\">Liste étudiants</span>
                        </div>
                    </div>
                    <div class=\"row ml-1 d-block mb-3\">
                        <div>
                            <h6 class=\"font-weight-bold text-secondary\">Chambres</h6>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/source/image/icones/bed.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"text-secondary\">Ajouter une chambre</span>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/source/image/icones/list.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"text-secondary\">Liste chambres</span>
                        </div>
                    </div>
                    <div class=\"row\"></div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 72,  214 => 68,  202 => 59,  195 => 55,  184 => 46,  174 => 45,  142 => 19,  132 => 18,  116 => 11,  111 => 7,  101 => 6,  82 => 5,  72 => 79,  70 => 45,  65 => 42,  63 => 18,  59 => 16,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\"
              integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\"
              crossorigin=\"anonymous\">
        {# 'app' must match the first argument to addEntry() in webpack.config.js #}
        {{ encore_entry_link_tags('app') }}

        <!-- Renders a link tag (if your module requires any CSS)
             <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    {% endblock %}
</head>
<body>
{% block nav %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-2\">
        <a class=\"navbar-brand\" href=\"#\"><span class=\"font-weight-bold color-general\">Symbole</span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto d-lg-none\" id=\"menu-big\">
                <li class=\"nav-item active d-lg-none\">
                    <a class=\"nav-link\" href=\"\" >Ajouter un étudiant<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"Etudiant/listeetudiant\">Liste étudiants</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"<?=URL?>Chambre/addchambre\">Ajouter une chambre</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"<?=URL?>Chambre/listechambre\">Liste chambre</a>
                </li>
            </ul>
        </div>
    </nav>
{% endblock %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-3\">
            {% block menu %}
                <div class=\"d-none d-lg-block\">
                    <div class=\"row mt-4 ml-1 mb-4\">
                        <h5 class=\"font-weight-normal color-general\">Menu</h5>
                    </div>
                    <div class=\"row ml-1 d-block mb-5\">
                        <div>
                            <h6 class=\"font-weight-bold text-secondary\">Etudiant</h6>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"{{ asset('/source/image/icones/student.png') }}\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"color-general font-weight-bold\">Ajouter un étudiant</span>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"{{ asset('/source/image/icones/list.png') }}\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"text-secondary\">Liste étudiants</span>
                        </div>
                    </div>
                    <div class=\"row ml-1 d-block mb-3\">
                        <div>
                            <h6 class=\"font-weight-bold text-secondary\">Chambres</h6>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"{{ asset('/source/image/icones/bed.png') }}\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"text-secondary\">Ajouter une chambre</span>
                        </div>
                        <div class=\"d-inline d-block mb-3\">
                            <img src=\"{{ asset('/source/image/icones/list.png') }}\" alt=\"\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
                            <span class=\"text-secondary\">Liste chambres</span>
                        </div>
                    </div>
                    <div class=\"row\"></div>
                </div>
            {% endblock %}
        </div>", "partials/header.html.twig", "/Library/WebServer/Documents/sa/projets/appchambre/templates/partials/header.html.twig");
    }
}
