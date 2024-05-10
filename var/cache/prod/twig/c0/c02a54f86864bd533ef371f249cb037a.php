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
class __TwigTemplate_6073d1e63b38a267e6c3e4b5ff6c5fbc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "message/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "created", [], "any", false, false, false, 18), "date", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true);
        echo "</p>

            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "sender", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <p>From: <a style=\"text-decoration: none;font-weight: bold;\" 
            
                href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "sender", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "sender", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "  </a></p> 
            ";
        } else {
            // line 25
            echo "            <p>From: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</p> 
            ";
        }
        // line 27
        echo "            <p>To: <a style=\"text-decoration: none;font-weight: bold;\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "recipient", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "recipient", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></p> 
            <p >Subject: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "subject", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
            <hr>
            <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mess"] ?? null), "text", [], "any", false, false, false, 30), "html", null, true);
        echo "   </p>
        </div>
    </div>
    <div class=\"w3-container w3-center \">
        ";
        // line 39
        echo "
    </div>
</div>





";
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
        return array (  109 => 39,  102 => 30,  97 => 28,  90 => 27,  84 => 25,  77 => 23,  73 => 21,  71 => 20,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/index.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/message/index.html.twig");
    }
}
