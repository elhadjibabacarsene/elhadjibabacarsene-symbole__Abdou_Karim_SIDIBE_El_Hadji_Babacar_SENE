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

/* etudiant/index.html.twig */
class __TwigTemplate_08272db1112c19ff5592a2ede70c6f08e608a8bd472f21432ffdb6613f7359a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello EtudiantController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"babs prend ca\">
        <div class=\"row border-bottom mb-4\">
            <div class=\"col-6 d-flex justify-content-start align-items-center\">
                <h4 class=\"color-general mt-5 mb-5 font-weight-normal\">Lister, modifier ou supprimer<span class=\"font-weight-light\"> étudiants</span></h4>
            </div>
            <div class=\"col-6 d-flex justify-content-end align-items-center\">
                <img src=\"<?=URL?>public/source/icones/bed.png\" class=\"icone-menu\" alt=\"\">
            </div>
        </div>
        <div class=\"row justify-content-center align-item-center p-2\">
            <div class=\"col-xl-3\">

                <form class=\"form-inline ml-3 \">

                    <div class=\"input-group d-none\" id=\"searchDiv\">
                        <!--input-group permet de regroupet le button et la zone de recherche -->
                        <input type=\"text\" class=\"form-control\" placeholder=\"search\" id=\"inputSearch\">
                        <div class=\"input-group-append\">
                            <button type=\"button\" class=\"btn bg-light\"><i class=\"fas fa-search text-muted\"></i></button>
                        </div>

                    </div>
                </form>
            </div>
            <div class=\"mt-4 col-12 text-center\">
                <div class=\"form-radio mb-3 mr-sm-2\">
                    <form id=\"my-radio\">
                        <input class=\"form-radio-input\" type=\"radio\" id=\"matricule\" name=\"searchBy\">
                        <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"inlineFormCheck\">
                            Matricule
                        </label>
                        <input class=\"form-radio-input\" type=\"radio\" id=\"id_type_bourse\" name=\"searchBy\">
                        <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"inlineFormCheck\">
                            Boursier
                        </label>

                        <input class=\"form-radio-input\" type=\"radio\" id=\"inshoused\" name=\"searchBy\">
                        <label class=\"form-radio-label font-weight-bold mr-2\" for=\"m\">
                            Logier
                        </label>

                        <input class=\"form-radio-input\" type=\"radio\" id=\"numero_chambre\" name=\"searchBy\">
                        <label class=\"form-radio-label font-weight-bold \" for=\"n\">
                            Chambre
                        </label>
                        <input class=\"form-radio-input\" type=\"radio\" id=\"toute_la_liste\" name=\"searchBy\">
                        <label class=\"form-radio-label font-weight-bold \" for=\"n\">
                            Toute la liste
                        </label>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"row justify-content-center align-item-center\">
            <div id=\"scrollZone\" class=\"w-100\">
                <table class=\"table table-striped table-bordered text-center table-hover\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">Matricule</th>
                        <th scope=\"col\">Prenom</th>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Boursier</th>
                        <th scope=\"col\">Logier</th>
                        <th scope=\"col\">Chambre</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody id=\"list-etudiant\">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--<button type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">Open Modal</button>-->
    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <form method=\"POST\" action=\"\" id=\"form-modify\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Modal title</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer modification</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModalSuccess\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <h5 class=\"text-success text-center font-weight-light\" id=\"exampleModalLabel\">Votre modification a été enregistrée avec succès !</h5>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Poursuivre</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EtudiantController!{% endblock %}

{% block body %}
    <div class=\"babs prend ca\">
        <div class=\"row border-bottom mb-4\">
            <div class=\"col-6 d-flex justify-content-start align-items-center\">
                <h4 class=\"color-general mt-5 mb-5 font-weight-normal\">Lister, modifier ou supprimer<span class=\"font-weight-light\"> étudiants</span></h4>
            </div>
            <div class=\"col-6 d-flex justify-content-end align-items-center\">
                <img src=\"<?=URL?>public/source/icones/bed.png\" class=\"icone-menu\" alt=\"\">
            </div>
        </div>
        <div class=\"row justify-content-center align-item-center p-2\">
            <div class=\"col-xl-3\">

                <form class=\"form-inline ml-3 \">

                    <div class=\"input-group d-none\" id=\"searchDiv\">
                        <!--input-group permet de regroupet le button et la zone de recherche -->
                        <input type=\"text\" class=\"form-control\" placeholder=\"search\" id=\"inputSearch\">
                        <div class=\"input-group-append\">
                            <button type=\"button\" class=\"btn bg-light\"><i class=\"fas fa-search text-muted\"></i></button>
                        </div>

                    </div>
                </form>
            </div>
            <div class=\"mt-4 col-12 text-center\">
                <div class=\"form-radio mb-3 mr-sm-2\">
                    <form id=\"my-radio\">
                        <input class=\"form-radio-input\" type=\"radio\" id=\"matricule\" name=\"searchBy\">
                        <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"inlineFormCheck\">
                            Matricule
                        </label>
                        <input class=\"form-radio-input\" type=\"radio\" id=\"id_type_bourse\" name=\"searchBy\">
                        <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"inlineFormCheck\">
                            Boursier
                        </label>

                        <input class=\"form-radio-input\" type=\"radio\" id=\"inshoused\" name=\"searchBy\">
                        <label class=\"form-radio-label font-weight-bold mr-2\" for=\"m\">
                            Logier
                        </label>

                        <input class=\"form-radio-input\" type=\"radio\" id=\"numero_chambre\" name=\"searchBy\">
                        <label class=\"form-radio-label font-weight-bold \" for=\"n\">
                            Chambre
                        </label>
                        <input class=\"form-radio-input\" type=\"radio\" id=\"toute_la_liste\" name=\"searchBy\">
                        <label class=\"form-radio-label font-weight-bold \" for=\"n\">
                            Toute la liste
                        </label>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"row justify-content-center align-item-center\">
            <div id=\"scrollZone\" class=\"w-100\">
                <table class=\"table table-striped table-bordered text-center table-hover\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">Matricule</th>
                        <th scope=\"col\">Prenom</th>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Boursier</th>
                        <th scope=\"col\">Logier</th>
                        <th scope=\"col\">Chambre</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody id=\"list-etudiant\">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--<button type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">Open Modal</button>-->
    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <form method=\"POST\" action=\"\" id=\"form-modify\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Modal title</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer modification</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModalSuccess\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <h5 class=\"text-success text-center font-weight-light\" id=\"exampleModalLabel\">Votre modification a été enregistrée avec succès !</h5>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Poursuivre</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "etudiant/index.html.twig", "/Library/WebServer/Documents/sa/projets/appchambre/templates/etudiant/index.html.twig");
    }
}
