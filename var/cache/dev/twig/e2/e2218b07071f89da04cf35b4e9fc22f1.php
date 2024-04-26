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

/* message/create.html.twig */
class __TwigTemplate_951cefc8be036d5776f2bf01410fbd02 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Create message";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"w3-container w3-content\" style=\"max-width: 1400px; margin-top: 80px;\">
    <div class=\"w3-row-padding\">

        <div class=\"w3-twothird\" >
            <div class=\"w3-container w3-card w3-white w3-margin-bottom\">


            <h1 class=\"w3-text-theme w3-padding-16 w3-center\">Send message</h1>


                <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Subject: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"subject\"
                            placeholder=\"Enter subject...\"
                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#textArea\">Message: </label>
                        <textarea
                            id=\"formInput#textarea\"
                            type=\"textArea\"
                            name=\"text\"
                            placeholder=\"Enter your text...\"
                        ></textarea>
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\" Send\"></input>
                            <br>
                        </div>

                    </form>
            
            

            </div>
        </div>
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
        return "message/create.html.twig";
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
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create message{% endblock %}

{% block body %}

<div class=\"w3-container w3-content\" style=\"max-width: 1400px; margin-top: 80px;\">
    <div class=\"w3-row-padding\">

        <div class=\"w3-twothird\" >
            <div class=\"w3-container w3-card w3-white w3-margin-bottom\">


            <h1 class=\"w3-text-theme w3-padding-16 w3-center\">Send message</h1>


                <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Subject: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"subject\"
                            placeholder=\"Enter subject...\"
                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#textArea\">Message: </label>
                        <textarea
                            id=\"formInput#textarea\"
                            type=\"textArea\"
                            name=\"text\"
                            placeholder=\"Enter your text...\"
                        ></textarea>
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\" Send\"></input>
                            <br>
                        </div>

                    </form>
            
            

            </div>
        </div>
    </div>
</div>  
{% endblock %}
", "message/create.html.twig", "/Users/andriiirkha/Documents/Symfony/blog-front/blog-front/templates/message/create.html.twig");
    }
}
