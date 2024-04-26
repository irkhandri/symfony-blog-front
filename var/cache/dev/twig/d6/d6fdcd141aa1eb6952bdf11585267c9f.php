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

/* profiles/edit.html.twig */
class __TwigTemplate_7b9667834fab6a4b08696aac54b41433 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profiles/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profiles/edit.html.twig", 1);
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
        <h2  class=\"w3-text-theme w3-center\"> Edit profile </h2>
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
                            placeholder=\"Enter name...\"
                            value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Username: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"username\"
                            value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
                            placeholder=\"Enter username...\"
                        />
                        </div>

                        ";
        // line 45
        echo "
                         <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Image: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"imageUrl\"
                            value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 52, $this->source); })()), "imageUrl", [], "any", false, false, false, 52), "html", null, true);
        echo "\"
                            placeholder=\"Enter image IRL...\"
                        />
                        </div>


                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Intro: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"intro\"
                            value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 64, $this->source); })()), "intro", [], "any", false, false, false, 64), "html", null, true);
        echo "\"
                            placeholder=\"Enter intro...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Biography: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"bio\"
                            value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 75, $this->source); })()), "bio", [], "any", false, false, false, 75), "html", null, true);
        echo "\"
                            placeholder=\"Enter bio...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Number: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"number\"
                            value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 86, $this->source); })()), "number", [], "any", false, false, false, 86), "html", null, true);
        echo "\"
                            placeholder=\"Enter number...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Location: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"location\"
                            value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 97, $this->source); })()), "location", [], "any", false, false, false, 97), "html", null, true);
        echo "\"
                            placeholder=\"Enter location...\"
                        />
                        </div>

                       

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Facebook: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"socFacebook\"
                            value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 110, $this->source); })()), "soc_facebook", [], "any", false, false, false, 110), "html", null, true);
        echo "\"
                            placeholder=\"Enter facebook link...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Linkedin: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"socLinkedin\"
                            value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 121, $this->source); })()), "soc_linkedin", [], "any", false, false, false, 121), "html", null, true);
        echo "\"
                            placeholder=\"Enter linkedin...\"
                        />
                        </div>


                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"Edit profile\"></input>
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
        return "profiles/edit.html.twig";
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
        return array (  194 => 121,  180 => 110,  164 => 97,  150 => 86,  136 => 75,  122 => 64,  107 => 52,  98 => 45,  90 => 30,  77 => 20,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"w3-container w3-white w3-card  w3-content w3-padding-24\" style=\"max-width: 600px; margin-top: 80px;\">
        <h2  class=\"w3-text-theme w3-center\"> Edit profile </h2>
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
                            placeholder=\"Enter name...\"
                            value=\"{{profile.name}}\"
                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Username: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"username\"
                            value=\"{{profile.username}}\"
                            placeholder=\"Enter username...\"
                        />
                        </div>

                        {# <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Email: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"email\"
                            value=\"{{profile.email}}\"
                            placeholder=\"Enter username...\"
                        />
                        </div> #}

                         <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Image: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"imageUrl\"
                            value=\"{{profile.imageUrl}}\"
                            placeholder=\"Enter image IRL...\"
                        />
                        </div>


                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Intro: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"intro\"
                            value=\"{{profile.intro}}\"
                            placeholder=\"Enter intro...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Biography: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"bio\"
                            value=\"{{profile.bio}}\"
                            placeholder=\"Enter bio...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Number: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"number\"
                            value=\"{{profile.number}}\"
                            placeholder=\"Enter number...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Location: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"location\"
                            value=\"{{profile.location}}\"
                            placeholder=\"Enter location...\"
                        />
                        </div>

                       

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Facebook: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"socFacebook\"
                            value=\"{{profile.soc_facebook}}\"
                            placeholder=\"Enter facebook link...\"
                        />
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Linkedin: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"socLinkedin\"
                            value=\"{{profile.soc_linkedin}}\"
                            placeholder=\"Enter linkedin...\"
                        />
                        </div>


                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"Edit profile\"></input>
                            <br>
                        </div>

                    </form>

                </div>
    </div>


{% endblock %}", "profiles/edit.html.twig", "/Users/andriiirkha/Documents/Symfony/blog-front/blog-front/templates/profiles/edit.html.twig");
    }
}
