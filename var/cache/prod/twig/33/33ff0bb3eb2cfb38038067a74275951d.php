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

/* blogs/blog.html.twig */
class __TwigTemplate_faa44ff5b928a64dd6f5501f0382eafe extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blogs/blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"w3-container w3-content\" style=\"max-width:1400px;margin-top:80px\">

    <!-- The Grid -->
    <div class=\"w3-row-padding\" >
    
      <!-- Left Column -->
      <div class=\"w3-third\" style=\"max-width:300px\">
      
        <div class=\"w3-white w3-text w3-card-4\">
          
          <div class=\"w3-container\">
            <h2 class=\"w3-text-theme w3-center\">About Blog</h2>
            <p><i class=\"fa fa-info fa-fw w3-margin-right w3-text-theme\"></i>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            ";
        // line 19
        echo "  
  
            ";
        // line 22
        echo "            ";
        // line 23
        echo "            <p></p><i class=\"fa fa-user fa-fw w3-margin-right w3-large w3-text-theme\"></i>Author:  <a href=\"/profiles/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "profile", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "profile", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</a> </p>
  
           
          </div>
  
        </div><br>
    
      <!-- End Left Column -->
      </div>
  
      <!-- Right Column -->
      <div class=\"w3-twothird\">
        

      
        <div class=\"w3-container w3-card w3-white w3-margin-bottom\">
        
          <h2 class=\"w3-text-theme w3-padding-16\"><i class=\"fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-theme\"></i>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
        echo "</h2>
          
  
          <div ><br>
";
        // line 47
        echo "


";
        // line 60
        echo "                    <hr>
                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "imageUrl", [], "any", false, false, false, 61), "html", null, true);
        echo "\" style=\"width:100%\" alt=\"Nature\">

                  <p>
                      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "tags", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 65
            echo "                      <span class=\"w3-tag w3-small w3-theme\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                      
                  </p>

                  <hr class=\"w3-clear\">
                  <p class=\"w3-padding\">
                    ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "description", [], "any", false, false, false, 72), "html", null, true);
        echo "
                  </p>

                  <div class=\"w3-text-theme w3-right\">
                    <i class=\"fa fa-thumbs-up\"></i>
                    <span> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "likes", [], "any", false, false, false, 77), "html", null, true);
        echo "  </span> 
                    <i class=\"fa fa-thumbs-down\"></i>
                    <span>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "dislikes", [], "any", false, false, false, 79), "html", null, true);
        echo " </span> 
                   
                  </div> 
                  <br> 
                  
                  
                  ";
        // line 85
        if (($context["commented"] ?? null)) {
            // line 86
            echo "                    <h3>You can comment only once   </h3>

                  <hr> 

                  ";
        } elseif (        // line 90
($context["inside"] ?? null)) {
            // line 91
            echo "                  <form method=\"POST\" action=\"\">
                    ";
            // line 93
            echo "
                    <!-- Like and Dislike buttons -->
                    <div>
                      <button type=\"button\" class=\"like-button w3-button w3-theme-d1 w3-margin-bottom\"><i class=\"fa fa-thumbs-up\"></i> Like</button>
                      <button type=\"button\" class=\"dislike-button w3-button w3-theme-d1 w3-margin-bottom\"><i class=\"fa fa-thumbs-down\"></i> Dislike</button>
                    </div>

                   <div class=\"w3-padding w3-quarter\">
                    <textarea 
                        id=\"formInput#textarea\"
                        type=\"textArea\"
                        name=\"description\"
                        placeholder=\"Enter your comment...\"
                        style=\"width: 550px; max-width: 14500px; height: 100px;\"
                    ></textarea>
                    </div>
                    <br><br><br><br><br><br>
                    <input type=\"submit\" class=\"w3-button w3-theme \" value=\" Comment\"></input>

                    <input type=\"hidden\" name=\"rate\" id=\"react-input\" value=\"\">

                   </form>

                  ";
        } elseif ( !        // line 116
($context["inside"] ?? null)) {
            // line 117
            echo "                <h3> You can not comment, you must log in</h3>
                <a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"w3-button w3-theme  \"><i class=\"fa fa\"></i> Log In</a>

                   ";
        }
        // line 121
        echo "
                ";
        // line 123
        echo "                  ";
        // line 124
        echo "                ";
        // line 125
        echo "
                
                 <h3 class=\"w3-text-theme\">Comments</h3>
                <hr> 
                  ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "comments", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 130
            echo "                  

                  <div class=\"w3-container w3-margin\">
                      <div class=\"w3-row-padding w3-padding-16\">
                          <div class=\"w3-col m2\">
                              <img src=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "profile", [], "any", false, false, false, 135), "imageUrl", [], "any", false, false, false, 135), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"w3-circle\" style=\"width:100px\">
                          </div>
                          <div class=\"w3-col m10\">
                              <p class=\"w3-right \">";
            // line 138
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 138), "date", [], "any", false, false, false, 138), "d/m/Y H:i"), "html", null, true);
            echo "</p>
                      


                              <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "profile", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\" ><h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "profile", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142), "html", null, true);
            echo "</h4></a>

                              ";
            // line 145
            echo "                              <p class=\"w3-right w3-opacity w3-text-theme\">I ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 145), "html", null, true);
            echo " it .</p>
                              <p>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "description", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                              
                          </div>
                      </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "  
          </div>
  
      
        
  
        </div>
  
        
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
   </div>
  
  <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Get the like and dislike buttons
        const likeButton = document.querySelector(\".like-button\");
        const dislikeButton = document.querySelector(\".dislike-button\");
        
        // Get the hidden input field
        const reactInput = document.querySelector(\"#react-input\");
        
        // Add event listeners for button clicks
        likeButton.addEventListener(\"click\", function() {
            // Set the hidden input value to \"like\" when the \"Like\" button is clicked
            this.classList.remove('w3-theme-d1');
            this.classList.add('w3-black');
            reactInput.value = \"like\";
            dislikeButton.classList.remove('w3-black');
            dislikeButton.classList.add('w3-theme-d1');
        });
        
        dislikeButton.addEventListener(\"click\", function() {
            // Set the hidden input value to \"dislike\" when the \"Dislike\" button is clicked
            reactInput.value = \"dislike\";
            this.classList.remove('w3-theme-d1');
            this.classList.add('w3-black');
            likeButton.classList.remove('w3-black');
            likeButton.classList.add('w3-theme-d1');


        });
    });
  </script> 


";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blogs/blog.html.twig";
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
        return array (  271 => 152,  259 => 146,  254 => 145,  247 => 142,  240 => 138,  234 => 135,  227 => 130,  223 => 129,  217 => 125,  215 => 124,  213 => 123,  210 => 121,  204 => 118,  201 => 117,  199 => 116,  174 => 93,  171 => 91,  169 => 90,  163 => 86,  161 => 85,  152 => 79,  147 => 77,  139 => 72,  132 => 67,  123 => 65,  119 => 64,  113 => 61,  110 => 60,  105 => 47,  98 => 40,  75 => 23,  73 => 22,  69 => 19,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blogs/blog.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/blogs/blog.html.twig");
    }
}
