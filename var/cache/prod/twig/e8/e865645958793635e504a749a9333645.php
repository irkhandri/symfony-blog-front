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
class __TwigTemplate_5d7cf56f00c81e6d4e9b0b050d1f11b9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profiles/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", false, false, false, 30), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "imageUrl", [], "any", false, false, false, 52), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "intro", [], "any", false, false, false, 64), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", false, false, false, 75), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "number", [], "any", false, false, false, 86), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "location", [], "any", false, false, false, 97), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "soc_facebook", [], "any", false, false, false, 110), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "soc_linkedin", [], "any", false, false, false, 121), "html", null, true);
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
        return array (  185 => 121,  171 => 110,  155 => 97,  141 => 86,  127 => 75,  113 => 64,  98 => 52,  89 => 45,  81 => 30,  68 => 20,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/edit.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/profiles/edit.html.twig");
    }
}
