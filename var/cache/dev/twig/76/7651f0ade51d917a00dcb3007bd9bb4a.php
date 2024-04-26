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
class __TwigTemplate_e8c6172db3b1b48210c72e2f2a9b0be3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogs/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blogs/create.html.twig", 1);
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
        <h2  class=\"w3-text-theme w3-center\">";
        // line 6
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()) == "create")) {
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
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()) == "create")) {
            // line 19
            echo "                            placeholder=\"Enter your title...\"
                            ";
        } else {
            // line 21
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
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
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()) == "create")) {
            // line 33
            echo "                            placeholder=\"Enter your description...\"
                             ";
        } else {
            // line 35
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
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
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 46, $this->source); })()) == "create")) {
            // line 47
            echo "                            placeholder=\"Enter image URL ...\"
                            ";
        } else {
            // line 49
            echo "                            value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 49, $this->source); })()), "imageUrl", [], "any", false, false, false, 49), "html", null, true);
            echo "
                            ";
        }
        // line 51
        echo "                        />
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"";
        // line 55
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) == "create")) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  146 => 55,  140 => 51,  134 => 49,  130 => 47,  128 => 46,  117 => 37,  111 => 35,  107 => 33,  105 => 32,  94 => 23,  88 => 21,  84 => 19,  82 => 18,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"w3-container w3-white w3-card  w3-content w3-padding-24\" style=\"max-width: 600px; margin-top: 80px;\">
        <h2  class=\"w3-text-theme w3-center\">{% if page == 'create'%} Create {% else %} Edit {% endif %} your blog</h2>

                <div class=\"w3-container\" >
                <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Title: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"title\"
                            {% if  page == 'create'%}
                            placeholder=\"Enter your title...\"
                            {% else %}
                            value={{blog.title}}
                            {% endif %}
                        />
                        </div>
                
                        <div class=\"w3-padding\">
                        <label for=\"formInput#textArea\">Description: </label>
                        <textarea
                            id=\"formInput#textarea\"
                            type=\"textArea\"
                            name=\"description\"
                             {% if  page == 'create'%}
                            placeholder=\"Enter your description...\"
                             {% else %}
                            >{{ blog.description }}</textarea>
                            {% endif %}
                        ></textarea>
                        </div>

                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Image: </label>
                        <input
                            id=\"formInput#textarea\"
                            type=\"textArea\"
                            name=\"imageUrl\"
                            {% if  page == 'create'%}
                            placeholder=\"Enter image URL ...\"
                            {% else %}
                            value={{blog.imageUrl}}
                            {% endif %}
                        />
                        </div>

                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"{% if page == 'create'%} Add {% else %} Edit {% endif %}  Blog\"></input>
                            <br>
                        </div>

                    </form>
                </div>
    </div>


{% endblock %}", "blogs/create.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/blogs/create.html.twig");
    }
}
