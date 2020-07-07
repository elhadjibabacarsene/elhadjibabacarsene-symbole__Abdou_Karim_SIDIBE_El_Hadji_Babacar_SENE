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

/* chambre/index.html.twig */
class __TwigTemplate_0a91212e1377f2f79557f7c8b30dbe09f60ea30f57207a4fa1cdf9e9325db1a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/index.html.twig", 1);
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

        echo "Hello ChambreController!";
        
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
        echo "    <div class=\"row border-bottom mb-4\">
        <div class=\"col-6 d-flex justify-content-start align-items-center\">
            <h4 class=\"color-general mt-5 mb-5 font-weight-normal\">Enregistrer<span
                        class=\"font-weight-light\"> une chambre</span></h4>
        </div>
        <div class=\"col-6 d-flex justify-content-end align-items-center\">
            <img src=\"public/source/icones/bed.png\" class=\"icone-menu\" alt=\"\">
        </div>
    </div>
    <div class=\"babs prends ca \">
        <div class=\"alert\" role=\"alert\" id=\"alert\">
        </div>
        <form method=\"POST\" action=\"<?= URL ?>chambre/formAddChambre\" id=\"formEnregister\">
            <div class=\"row mb-3\">
                <div class=\"col-lg-9 text-center\">

                    <div>Type de Chambre</div>
                    <div class=\"form-radio mb-5 mt-3\">
                        <input class=\"form-radio-input\" type=\"radio\" id=\"inlineFormCheck\" name=\"typeChambre\"
                               value=\"\">
                        <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"inlineFormCheck\">

                        </label>
                        <input class=\"form-radio-input ml-5\" type=\"radio\" id=\"m\" name=\"typeChambre\"
                               value=\"\">
                        <label class=\"form-radio-label font-weight-bold mr-2\" for=\"m\" id=\"typeChambre\">

                        </label>
                        <small id=\"\" class=\"form-text text-danger comments\"></small>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-4\"></div>
                        <div class=\"col-4\">
                            <div class=\"mb-2 font-weight-bold\">Batiment</div>
                            <select class=\"mdb-select md-form form-control\" searchable=\"Search here..\"
                                    name=\"numeroBatiment\" id=\"selectBatiment\">
                                <option value=\"\" disabled selected>Choisissez un batiment</option>

                            </select>
                            <small id=\"\" class=\"form-text text-danger comments\"></small>
                        </div>
                        <div class=\"col-4\"></div>
                    </div>
                </div>
                <div class=\"col-lg-3 text-center\">
                    <div class=\"color-general font-weight-bold d-block\">Numero</div>
                    <span class=\"text-success\" id=\"spanNumero\">0011234</span>
                </div>
            </div>
            <div class=\"row d-flex justify-content-start\">
                <div class=\"col-lg-8\">
                    <button type=\"submit\" name=\"enregistrer\" id=\"btn-submit-form\"
                            class=\" mt-5 w-100 border-0 rounded-lg text-white\">Enregistrer
                    </button>
                </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chambre/index.html.twig";
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

{% block title %}Hello ChambreController!{% endblock %}

{% block body %}
    <div class=\"row border-bottom mb-4\">
        <div class=\"col-6 d-flex justify-content-start align-items-center\">
            <h4 class=\"color-general mt-5 mb-5 font-weight-normal\">Enregistrer<span
                        class=\"font-weight-light\"> une chambre</span></h4>
        </div>
        <div class=\"col-6 d-flex justify-content-end align-items-center\">
            <img src=\"public/source/icones/bed.png\" class=\"icone-menu\" alt=\"\">
        </div>
    </div>
    <div class=\"babs prends ca \">
        <div class=\"alert\" role=\"alert\" id=\"alert\">
        </div>
        <form method=\"POST\" action=\"<?= URL ?>chambre/formAddChambre\" id=\"formEnregister\">
            <div class=\"row mb-3\">
                <div class=\"col-lg-9 text-center\">

                    <div>Type de Chambre</div>
                    <div class=\"form-radio mb-5 mt-3\">
                        <input class=\"form-radio-input\" type=\"radio\" id=\"inlineFormCheck\" name=\"typeChambre\"
                               value=\"\">
                        <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"inlineFormCheck\">

                        </label>
                        <input class=\"form-radio-input ml-5\" type=\"radio\" id=\"m\" name=\"typeChambre\"
                               value=\"\">
                        <label class=\"form-radio-label font-weight-bold mr-2\" for=\"m\" id=\"typeChambre\">

                        </label>
                        <small id=\"\" class=\"form-text text-danger comments\"></small>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-4\"></div>
                        <div class=\"col-4\">
                            <div class=\"mb-2 font-weight-bold\">Batiment</div>
                            <select class=\"mdb-select md-form form-control\" searchable=\"Search here..\"
                                    name=\"numeroBatiment\" id=\"selectBatiment\">
                                <option value=\"\" disabled selected>Choisissez un batiment</option>

                            </select>
                            <small id=\"\" class=\"form-text text-danger comments\"></small>
                        </div>
                        <div class=\"col-4\"></div>
                    </div>
                </div>
                <div class=\"col-lg-3 text-center\">
                    <div class=\"color-general font-weight-bold d-block\">Numero</div>
                    <span class=\"text-success\" id=\"spanNumero\">0011234</span>
                </div>
            </div>
            <div class=\"row d-flex justify-content-start\">
                <div class=\"col-lg-8\">
                    <button type=\"submit\" name=\"enregistrer\" id=\"btn-submit-form\"
                            class=\" mt-5 w-100 border-0 rounded-lg text-white\">Enregistrer
                    </button>
                </div>
        </form>
    </div>
{% endblock %}
", "chambre/index.html.twig", "/Library/WebServer/Documents/sa/projets/appchambre/templates/chambre/index.html.twig");
    }
}
