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

/* message/index.html.twig */
class __TwigTemplate_4112b57236164257ed074ae5d932a67e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/index.html.twig", 1);
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
<!-- Header -->
<div class=\"w3-container w3-text-theme w3-padding\" style=\"margin-top:90px\">
    <h1 class=\"w3-center\">Messssaaaaageee</h1>
</div>

<!-- Current Message -->
<div  style=\"position: absolute;
top:40%;
left: 50%;
transform: translate(-50%, -50%);\">
    
    <div class=\"w3-container w3-card w3-white w3-margin-left   \" style=\"width: 900px;\">
        <div class=\"w3-container w3-padding\">
            <p class=\"w3-right\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 18, $this->source); })()), "created", [], "any", false, false, false, 18), "date", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true);
        echo "</p>

            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 20, $this->source); })()), "sender", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <p>From: <a style=\"text-decoration: none;font-weight: bold;\" href=\"/profiles/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 21, $this->source); })()), "sender", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 21, $this->source); })()), "sender", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></p> 
            ";
        } else {
            // line 23
            echo "            <p>From: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</p> 
            ";
        }
        // line 25
        echo "            <p>To: <a style=\"text-decoration: none;font-weight: bold;\" href=\"/profiles/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 25, $this->source); })()), "recipient", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 25, $this->source); })()), "recipient", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></p> 
            <p >Subject: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 26, $this->source); })()), "subject", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            <hr>
            <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 28, $this->source); })()), "text", [], "any", false, false, false, 28), "html", null, true);
        echo "   </p>
        </div>
    </div>
    <div class=\"w3-container w3-center \">
        ";
        // line 37
        echo "
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
        return "message/index.html.twig";
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
        return array (  115 => 37,  108 => 28,  103 => 26,  96 => 25,  90 => 23,  82 => 21,  80 => 20,  75 => 18,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<!-- Header -->
<div class=\"w3-container w3-text-theme w3-padding\" style=\"margin-top:90px\">
    <h1 class=\"w3-center\">Messssaaaaageee</h1>
</div>

<!-- Current Message -->
<div  style=\"position: absolute;
top:40%;
left: 50%;
transform: translate(-50%, -50%);\">
    
    <div class=\"w3-container w3-card w3-white w3-margin-left   \" style=\"width: 900px;\">
        <div class=\"w3-container w3-padding\">
            <p class=\"w3-right\">{{(mess.created.date|date(\"d/m/Y H:i\")) }}</p>

            {% if mess.sender.name %}
            <p>From: <a style=\"text-decoration: none;font-weight: bold;\" href=\"/profiles/{{mess.sender.id}}\">{{mess.sender.name}}</a></p> 
            {% else %}
            <p>From: {{mess.email}}</p> 
            {% endif %}
            <p>To: <a style=\"text-decoration: none;font-weight: bold;\" href=\"/profiles/{{mess.recipient.id}}\">{{mess.recipient.name}}</a></p> 
            <p >Subject: {{mess.subject}}</p>
            <hr>
            <p>{{mess.text }}   </p>
        </div>
    </div>
    <div class=\"w3-container w3-center \">
        {# {% if request.GET.next %}
        <a href=\"{{request.GET.next}}\" class=\"w3-button w3-theme-d1\">Back to Inbox</a>
        {% else %}
        <a href=\"{% url 'input' %}\" class=\"w3-button w3-theme-d1\">Back to Inbox</a>
        {% endif %} #}

    </div>
</div>





{% endblock %}", "message/index.html.twig", "/Users/andriiirkha/Documents/Symfony/blog-front/blog-front/templates/message/index.html.twig");
    }
}
