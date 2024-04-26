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

/* message/input_message.html.twig */
class __TwigTemplate_3972caa57c778db5298220797a2c2ce4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/input_message.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/input_message.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
<!-- <div class=\"w3-container w3-card w3-white w3-round w3-margin-bottom\">


</div> -->



<!-- Header -->
<div class=\"w3-container w3-text-theme \" style=\"margin-top:80px\">
    <h1 class=\"w3-center\">My MailBox </h1>
</div>


<div class=\"w3-container w3-content\" style=\"max-width: 1400px; margin-top: 80px;\">


    <div class=\"w3-third\">
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inbox-messages");
        echo "\" style=\"text-decoration: none;\" >
        <div class=\"w3-white w3-text w3-card-4 w3-right ";
        // line 25
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 25, $this->source); })()) == "in")) {
            echo " w3-gray w3-hover-gray  ";
        }
        echo " w3-button \" style=\"width: 300px;\">
            <div class=\"w3-container\">
                <h2 class=\"w3-text-theme w3-center\">Inbox</h2>
                ";
        // line 28
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()) == "in")) {
            // line 29
            echo "                <p class=\" w3-center w3-small\">You have (";
            echo twig_escape_filter($this->env, (isset($context["unread"]) || array_key_exists("unread", $context) ? $context["unread"] : (function () { throw new RuntimeError('Variable "unread" does not exist.', 29, $this->source); })()), "html", null, true);
            echo ") unread message</p>
                ";
        }
        // line 31
        echo "            </div>
        </div>
        </a>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("outbox-messages");
        echo "\" style=\"text-decoration: none;\" >
            <div class=\"w3-white w3-text w3-card-4 w3-right w3-button ";
        // line 35
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()) == "out")) {
            echo " w3-gray w3-hover-gray  ";
        }
        echo " \" style=\"width: 300px;\">
                <div class=\"w3-container\">
                <h2 class=\"w3-text-theme w3-center\">Outbox</h2>
                ";
        // line 39
        echo "            </div>
        </div>
        </a>
    </div>
    


<!-- Message List -->
<div class=\"w3-twothird\">
    <div class=\"w3-container w3-card w3-white w3-margin-bottom\">

    <!-- Message 1 -->
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mess"]) {
            // line 52
            echo "    
    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages", ["id" => twig_get_attribute($this->env, $this->source, $context["mess"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" style=\"text-decoration: none;\">
        <div class=\"w3-container w3-margin w3-padding ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["mess"], "is_read", [], "any", false, false, false, 54) == false)) {
                echo " w3-theme-l4  ";
            } else {
                echo " w3-strong ";
            }
            echo "\"
        ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["mess"], "is_read", [], "any", false, false, false, 55) == false)) {
                echo " style=\"  font-weight: bold;  \" ";
            }
            echo ">
            <p class=\"w3-right\">";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mess"], "created", [], "any", false, false, false, 56), "date", [], "any", false, false, false, 56), "d/m/Y H:i"), "html", null, true);
            echo "</p>


            <h3> From ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mess"], "sender", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mess"], "sender", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mess"], "getEmail", [], "any", false, false, false, 59), "html", null, true);
                echo " ";
            }
            echo " </h3>
            ";
            // line 60
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()) == "out")) {
                // line 61
                echo "                <h3> To  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mess"], "recipient", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                echo " </h3>
            ";
            }
            // line 63
            echo "
            
            <p style=\"font-weight: bold;\" >Subject : ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mess"], "subject", [], "any", false, false, false, 65), "html", null, true);
            echo " </p>
            <p >";
            // line 66
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mess"], "text", [], "any", false, false, false, 66), 0, 120), "html", null, true);
            echo "</p>
        </div>
    </a>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</div>
    


    
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
        return "message/input_message.html.twig";
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
        return array (  200 => 71,  189 => 66,  185 => 65,  181 => 63,  175 => 61,  173 => 60,  161 => 59,  155 => 56,  149 => 55,  141 => 54,  137 => 53,  134 => 52,  130 => 51,  116 => 39,  108 => 35,  104 => 34,  99 => 31,  93 => 29,  91 => 28,  83 => 25,  79 => 24,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

<!-- <div class=\"w3-container w3-card w3-white w3-round w3-margin-bottom\">


</div> -->



<!-- Header -->
<div class=\"w3-container w3-text-theme \" style=\"margin-top:80px\">
    <h1 class=\"w3-center\">My MailBox </h1>
</div>


<div class=\"w3-container w3-content\" style=\"max-width: 1400px; margin-top: 80px;\">


    <div class=\"w3-third\">
        <a href=\"{{ path ('inbox-messages') }}\" style=\"text-decoration: none;\" >
        <div class=\"w3-white w3-text w3-card-4 w3-right {% if page == 'in' %} w3-gray w3-hover-gray  {% endif %} w3-button \" style=\"width: 300px;\">
            <div class=\"w3-container\">
                <h2 class=\"w3-text-theme w3-center\">Inbox</h2>
                {% if page == 'in'  %}
                <p class=\" w3-center w3-small\">You have ({{unread}}) unread message</p>
                {% endif %}
            </div>
        </div>
        </a>
        <a href=\"{{ path ('outbox-messages') }}\" style=\"text-decoration: none;\" >
            <div class=\"w3-white w3-text w3-card-4 w3-right w3-button {% if page == 'out' %} w3-gray w3-hover-gray  {% endif %} \" style=\"width: 300px;\">
                <div class=\"w3-container\">
                <h2 class=\"w3-text-theme w3-center\">Outbox</h2>
                {# <!-- <p class=\" w3-center\">You have ({{unread}}) unread message{{unread|pluralize:\"s\"}}</p> --> #}
            </div>
        </div>
        </a>
    </div>
    


<!-- Message List -->
<div class=\"w3-twothird\">
    <div class=\"w3-container w3-card w3-white w3-margin-bottom\">

    <!-- Message 1 -->
    {% for mess in messages %}
    
    <a href=\"{{ path ('messages', { 'id' : mess.id } ) }}\" style=\"text-decoration: none;\">
        <div class=\"w3-container w3-margin w3-padding {% if mess.is_read == false %} w3-theme-l4  {% else %} w3-strong {% endif %}\"
        {% if mess.is_read == false %} style=\"  font-weight: bold;  \" {% endif %}>
            <p class=\"w3-right\">{{   (mess.created.date|date(\"d/m/Y H:i\"))   }}</p>


            <h3> From {% if mess.sender.name %} {{mess.sender.name }} {% else %} {{mess.getEmail}} {% endif %} </h3>
            {% if page == 'out' %}
                <h3> To  {{mess.recipient.name}} </h3>
            {% endif %}

            
            <p style=\"font-weight: bold;\" >Subject : {{mess.subject}} </p>
            <p >{{mess.text|slice(0,120)}}</p>
        </div>
    </a>
    
    {% endfor %}
</div>
    


    
</div>
</div>


{% endblock %}", "message/input_message.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/message/input_message.html.twig");
    }
}
