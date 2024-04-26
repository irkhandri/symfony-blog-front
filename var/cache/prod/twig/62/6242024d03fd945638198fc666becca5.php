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

/* blogs/blogs.html.twig */
class __TwigTemplate_459205b407899f0faf3a8a1846d0ce5e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blogs/blogs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<!-- Page Container -->
<div class=\"w3-container  w3-content \" style=\"max-width: 1100px; margin-top: 80px\">
    <!-- The Grid -->

        <!-- Searching -->
        <div class=\"w3-row-padding w3-margin\">
            
                <div class=\"w3-card  w3-white w3-padding\">
                    <form  id=\"searchForm\" class=\"form\" action=\"\" method=\"POST\">
                        <div class=\"w3-margin\">
                          <h2  for=\"formInput#search\">Search Blogs </h2>
                          <input class=\"w3-input w3-card w3-theme-l5\" id=\"formInput#search\" type=\"text\" name=\"query\"
                            placeholder=\"Search by Blog Title/Author/Tags\" value=\"\" />
                        </div>
            
                        <input class=\"w3-button w3-theme-d1 w3-margin-bottom\" type=\"submit\" value=\"Search\" />
                        <!-- <button type=\"submit\"  class=\" w3-button w3-theme-d1 w3-margin-bottom\">Comment</button> -->

                      </form>
                </div>
            
        </div>


        <h2 class=\"w3-center w3-text-theme \"> All Blogs</h2>


        <!-- Middle Column -->
        
            <div class=\"w3-center  w3-row-padding w3-margin \">

                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 38
            echo "                <div class=\"w3-col m13 w3-margin-right w3-card  w3-white  \" style=\"margin-top: 20px;\">
                    <div class=\"friend-card w3-container w3-padding \">
                    
                        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "imageUrl", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"Event\" style=\"width: 75%; margin-top: 30px; max-width: 1100px;\">
                        <h3 >";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</h3>

                        <p> By ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["blog"], "profile", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo " </p>
                        <p>
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "tags", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 47
                echo "                            <span class=\"w3-tag w3-small w3-theme\">#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                            
                        </p>
                        <p> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
                        <div class=\"w3-text-theme w3-right\">
                            <i class=\"fa fa-thumbs-up\"></i>
                            <span>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "likes", [], "any", false, false, false, 54), "html", null, true);
            echo "  </span> 
                            <i class=\"fa fa-thumbs-down\"></i>
                            <span>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "dislikes", [], "any", false, false, false, 56), "html", null, true);
            echo "  </span> 
                           
                        </div>  
                        <br>
                        <a href=\"/blogs/";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\"><button class=\"w3-button w3-theme w3-margin\"><i class=\"fa fa-info\"></i> Show more</button></a>
                    </div>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
    
            </div>

            <!--  Pagination -->

            

        ";
        // line 74
        echo "
   
</div>



";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blogs/blogs.html.twig";
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
        return array (  163 => 74,  153 => 65,  142 => 60,  135 => 56,  130 => 54,  124 => 51,  120 => 49,  111 => 47,  107 => 46,  102 => 44,  97 => 42,  93 => 41,  88 => 38,  84 => 37,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blogs/blogs.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/blogs/blogs.html.twig");
    }
}
