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

/* blogs/create.html.twig */
class __TwigTemplate_ee47a22e1866033eecdd72e5a200d993 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blogs/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"w3-container w3-white w3-card  w3-content w3-padding-24\" style=\"max-width: 600px; margin-top: 80px;\">
        <h2  class=\"w3-text-theme w3-center\">";
        // line 6
        if ((($context["page"] ?? null) == "create")) {
            echo " Create ";
        } else {
            echo " Edit ";
        }
        echo " your blog</h2>

                <div class=\"w3-container\" >
                <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Title: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"title\"
                            ";
        // line 18
        if ((($context["page"] ?? null) == "create")) {
            // line 19
            echo "                            placeholder=\"Enter your title...\"
                            ";
        } else {
            // line 21
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "
                            ";
        }
        // line 23
        echo "                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#textArea\">Description: </label>
                        <textarea
                            id=\"formInput#textarea\"
                            type=\"textArea\"
                            name=\"description\"
                             ";
        // line 32
        if ((($context["page"] ?? null) == "create")) {
            // line 33
            echo "                            placeholder=\"Enter your description...\"
                             ";
        } else {
            // line 35
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</textarea>
                            ";
        }
        // line 37
        echo "                        ></textarea>
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Image: </label>
                        <input
                            id=\"formInput#textarea\"
                            type=\"textArea\"
                            name=\"imageUrl\"
                            ";
        // line 46
        if ((($context["page"] ?? null) == "create")) {
            // line 47
            echo "                            placeholder=\"Enter image URL ...\"
                            ";
        } else {
            // line 49
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "imageUrl", [], "any", false, false, false, 49), "html", null, true);
            echo "
                            ";
        }
        // line 51
        echo "                        />
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"";
        // line 55
        if ((($context["page"] ?? null) == "create")) {
            echo " Add ";
        } else {
            echo " Edit ";
        }
        echo "  Blog\"></input>
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
        return "blogs/create.html.twig";
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
        return array (  137 => 55,  131 => 51,  125 => 49,  121 => 47,  119 => 46,  108 => 37,  102 => 35,  98 => 33,  96 => 32,  85 => 23,  79 => 21,  75 => 19,  73 => 18,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blogs/create.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/blogs/create.html.twig");
    }
}
