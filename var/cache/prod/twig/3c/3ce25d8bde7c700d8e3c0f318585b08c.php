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
class __TwigTemplate_d3c8889257afe190ec5ea0aeac582ecd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "interest/interest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"w3-container w3-white w3-card  w3-content w3-padding-24\" style=\"max-width: 600px; margin-top: 80px;\">
        <h2  class=\"w3-text-theme w3-center\"> ";
        // line 6
        if ((($context["page"] ?? null) == "create")) {
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
        if ((($context["page"] ?? null) == "create")) {
            // line 20
            echo "                            placeholder=\"Enter name...\"
                            ";
        } else {
            // line 22
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["interest"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
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
        if ((($context["page"] ?? null) == "create")) {
            // line 34
            echo "                            placeholder=\"Enter description...\"
                            ";
        } else {
            // line 36
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["interest"] ?? null), "description", [], "any", false, false, false, 36), "html", null, true);
            echo "
                            ";
        }
        // line 38
        echo "                        />
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"";
        // line 42
        if ((($context["page"] ?? null) == "create")) {
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
        return array (  115 => 42,  109 => 38,  103 => 36,  99 => 34,  97 => 33,  86 => 24,  80 => 22,  76 => 20,  74 => 19,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "interest/interest.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/interest/interest.html.twig");
    }
}
