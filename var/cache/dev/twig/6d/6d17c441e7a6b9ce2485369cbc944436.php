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

/* interest/interest.html.twig */
class __TwigTemplate_e5f5fc1ac53ae67b7ab8efba706173b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interest/interest.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interest/interest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"w3-container w3-white w3-card  w3-content w3-padding-24\" style=\"max-width: 600px; margin-top: 80px;\">
        <h2  class=\"w3-text-theme w3-center\"> ";
        // line 6
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()) == "create")) {
            echo " Create ";
        } else {
            echo " Edit ";
        }
        echo " interest</h2>
            <br>
                <div class=\"w3-container\" >
               
                <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Name: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"name\"
                            ";
        // line 19
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()) == "create")) {
            // line 20
            echo "                            placeholder=\"Enter name...\"
                            ";
        } else {
            // line 22
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interest"]) || array_key_exists("interest", $context) ? $context["interest"] : (function () { throw new RuntimeError('Variable "interest" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "
                            ";
        }
        // line 24
        echo "                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Description: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"description\"
                             ";
        // line 33
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 33, $this->source); })()) == "create")) {
            // line 34
            echo "                            placeholder=\"Enter description...\"
                            ";
        } else {
            // line 36
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interest"]) || array_key_exists("interest", $context) ? $context["interest"] : (function () { throw new RuntimeError('Variable "interest" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
            echo "
                            ";
        }
        // line 38
        echo "                        />
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"";
        // line 42
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 42, $this->source); })()) == "create")) {
            echo " Add ";
        } else {
            echo " Edit ";
        }
        echo " interest\"></input>
                            <br>
                        </div>

                    </form>

                </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "interest/interest.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  124 => 42,  118 => 38,  112 => 36,  108 => 34,  106 => 33,  95 => 24,  89 => 22,  85 => 20,  83 => 19,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"w3-container w3-white w3-card  w3-content w3-padding-24\" style=\"max-width: 600px; margin-top: 80px;\">
        <h2  class=\"w3-text-theme w3-center\"> {% if page == 'create'%} Create {% else %} Edit {% endif %} interest</h2>
            <br>
                <div class=\"w3-container\" >
               
                <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Name: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"name\"
                            {% if  page == 'create'%}
                            placeholder=\"Enter name...\"
                            {% else %}
                            value={{interest.name}}
                            {% endif %}
                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Description: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"description\"
                             {% if  page == 'create'%}
                            placeholder=\"Enter description...\"
                            {% else %}
                            value={{interest.description}}
                            {% endif %}
                        />
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"{% if page == 'create'%} Add {% else %} Edit {% endif %} interest\"></input>
                            <br>
                        </div>

                    </form>

                </div>
    </div>


{% endblock %}", "interest/interest.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/interest/interest.html.twig");
    }
}
