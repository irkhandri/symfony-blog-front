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
class __TwigTemplate_f4031dc0c200fb0ba82729d168fe1d39 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "message/input_message.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((($context["page"] ?? null) == "in")) {
            echo " w3-gray w3-hover-gray  ";
        }
        echo " w3-button \" style=\"width: 300px;\">
            <div class=\"w3-container\">
                <h2 class=\"w3-text-theme w3-center\">Inbox</h2>
                ";
        // line 28
        if ((($context["page"] ?? null) == "in")) {
            // line 29
            echo "                <p class=\" w3-center w3-small\">You have (";
            echo twig_escape_filter($this->env, ($context["unread"] ?? null), "html", null, true);
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
        if ((($context["page"] ?? null) == "out")) {
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
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
            if ((($context["page"] ?? null) == "out")) {
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
        return array (  191 => 71,  180 => 66,  176 => 65,  172 => 63,  166 => 61,  164 => 60,  152 => 59,  146 => 56,  140 => 55,  132 => 54,  128 => 53,  125 => 52,  121 => 51,  107 => 39,  99 => 35,  95 => 34,  90 => 31,  84 => 29,  82 => 28,  74 => 25,  70 => 24,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/input_message.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/message/input_message.html.twig");
    }
}
