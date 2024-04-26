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

/* profiles/profiles.html.twig */
class __TwigTemplate_3174af4bb3610f9a67e1655ffb57ee86 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profiles/profiles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "


<!-- Page Container -->
<div class=\"w3-container  w3-content \" style=\"max-width: 1100px; margin-top: 80px\">
    <!-- The Grid -->
        
        <!-- Searching -->
        <div class=\"w3-row-padding w3-margin\">
            
            <div class=\"w3-card  w3-white w3-padding\">
                <form  id=\"searchForm\" class=\"form\" action=\"\" method=\"POST\">
                    <div class=\"w3-margin\">
                      <h2  for=\"formInput#search\">Search Authors </h2>
                      <input class=\"w3-input w3-card w3-theme-l5\" id=\"formInput#search\" type=\"text\" name=\"query\"
                        placeholder=\"Search by Author\" value=\"\" />
                    </div>
        
                    <input class=\"w3-button w3-theme-d1 w3-margin-bottom\" type=\"submit\" value=\"Search\" />
                    <!-- <button type=\"submit\"  class=\" w3-button w3-theme-d1 w3-margin-bottom\">Comment</button> -->

                  </form>
            </div>
        
        </div>


        <h2 class=\"w3-center w3-text-theme\"> Authors</h2>
        <!-- Middle Column -->
        <div class=\"w3-col m12\">


            <div class=\"w3-row-padding \">

                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 41
            echo "                <div class=\"w3-col  m4\">
                    <div class=\" w3-card w3-white w3-margin w3-padding w3-center\">
                        <h4>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo " </h4>
                        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "imageUrl", [], "any", false, false, false, 44), "html", null, true);
            echo "\" alt=\"author avatar\" style=\"max-width: 250px; max-height: 250px;  
                            border-radius: 40px; \">

                        <p><i class=\"fa fa-home fa-fw w3-margin-right w3-large w3-text-theme\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "location", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                        ";
            // line 49
            echo "
                        ";
            // line 51
            echo "
                            ";
            // line 58
            echo "                        ";
            // line 59
            echo "                                <a href=\"/create-message/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\" class=\"w3-button w3-theme w3-hover-gray w3-margin\"><i class=\"fa fa-envelope\"></i> Send Message</a>
                        ";
            // line 61
            echo "                                                 
                        <a href=\"/profiles/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                            <button  class=\"w3-button w3-theme w3-margin\"><i class=\"fa fa-info\"></i> About </button>
                        </a>
                    </div>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
            </div>
            
        </div>


        ";
        // line 76
        echo "   
</div>



";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profiles/profiles.html.twig";
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
        return array (  145 => 76,  137 => 69,  124 => 62,  121 => 61,  116 => 59,  114 => 58,  111 => 51,  108 => 49,  104 => 47,  98 => 44,  94 => 43,  90 => 41,  86 => 40,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/profiles.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/profiles/profiles.html.twig");
    }
}
