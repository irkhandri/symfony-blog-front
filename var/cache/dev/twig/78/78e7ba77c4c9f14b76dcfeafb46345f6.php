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
class __TwigTemplate_8aec2e75f8e81a989f06eaef85a6b044 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogs/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blogs/blog.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            ";
        // line 19
        echo "  
  
            ";
        // line 22
        echo "            ";
        // line 23
        echo "            <p></p><i class=\"fa fa-user fa-fw w3-margin-right w3-large w3-text-theme\"></i>Author:  <a href=\"/profiles/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 23, $this->source); })()), "profile", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 23, $this->source); })()), "profile", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 61, $this->source); })()), "imageUrl", [], "any", false, false, false, 61), "html", null, true);
        echo "\" style=\"width:100%\" alt=\"Nature\">

                  <p>
                      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 64, $this->source); })()), "tags", [], "any", false, false, false, 64));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        echo "
                  </p>

                  <div class=\"w3-text-theme w3-right\">
                    <i class=\"fa fa-thumbs-up\"></i>
                    <span> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 77, $this->source); })()), "likes", [], "any", false, false, false, 77), "html", null, true);
        echo "  </span> 
                    <i class=\"fa fa-thumbs-down\"></i>
                    <span>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 79, $this->source); })()), "dislikes", [], "any", false, false, false, 79), "html", null, true);
        echo " </span> 
                   
                  </div> 
                  <br> 
                  
                  
                  ";
        // line 85
        if ((isset($context["commented"]) || array_key_exists("commented", $context) ? $context["commented"] : (function () { throw new RuntimeError('Variable "commented" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "                    <h3>You can comment only once   </h3>

                  <hr> 

                  ";
        } elseif (        // line 90
(isset($context["inside"]) || array_key_exists("inside", $context) ? $context["inside"] : (function () { throw new RuntimeError('Variable "inside" does not exist.', 90, $this->source); })())) {
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
(isset($context["inside"]) || array_key_exists("inside", $context) ? $context["inside"] : (function () { throw new RuntimeError('Variable "inside" does not exist.', 116, $this->source); })())) {
            // line 117
            echo "                <h3> You can not comment, you must log in</h3>
                <a href=\"/login\" class=\"w3-button w3-theme  \"><i class=\"fa fa\"></i> Log In</a>

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 129, $this->source); })()), "comments", [], "any", false, false, false, 129));
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
                      
                              <a href=\"/profiles/";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "profile", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
            echo "\" ><h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "profile", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "html", null, true);
            echo "</h4></a>
                              <p class=\"w3-right w3-opacity w3-text-theme\">I ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 141), "html", null, true);
            echo " it .</p>
                              <p>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "description", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>
                              
                          </div>
                      </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  273 => 148,  261 => 142,  257 => 141,  251 => 140,  246 => 138,  240 => 135,  233 => 130,  229 => 129,  223 => 125,  221 => 124,  219 => 123,  216 => 121,  210 => 117,  208 => 116,  183 => 93,  180 => 91,  178 => 90,  172 => 86,  170 => 85,  161 => 79,  156 => 77,  148 => 72,  141 => 67,  132 => 65,  128 => 64,  122 => 61,  119 => 60,  114 => 47,  107 => 40,  84 => 23,  82 => 22,  78 => 19,  74 => 17,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"w3-container w3-content\" style=\"max-width:1400px;margin-top:80px\">

    <!-- The Grid -->
    <div class=\"w3-row-padding\" >
    
      <!-- Left Column -->
      <div class=\"w3-third\" style=\"max-width:300px\">
      
        <div class=\"w3-white w3-text w3-card-4\">
          
          <div class=\"w3-container\">
            <h2 class=\"w3-text-theme w3-center\">About Blog</h2>
            <p><i class=\"fa fa-info fa-fw w3-margin-right w3-text-theme\"></i>{{blog.title}}</p>
            {# <p><i class=\"fa fa-calendar fa-fw w3-margin-right w3-text-theme\"></i>{{blog.created}}</p> #}
  
  
            {# <p><i class=\"fa fa-envelope fa-fw w3-margin-right w3-large w3-text-theme\"></i>{{blog.owner.email}}</p> #}
            {# <p><i class=\"fa fa-phone fa-fw w3-margin-right w3-large w3-text-theme\"></i>{{blog.owner.mobil}}</p> #}
            <p></p><i class=\"fa fa-user fa-fw w3-margin-right w3-large w3-text-theme\"></i>Author:  <a href=\"/profiles/{{blog.profile.id}}\"> {{blog.profile.name}}</a> </p>
  
           
          </div>
  
        </div><br>
    
      <!-- End Left Column -->
      </div>
  
      <!-- Right Column -->
      <div class=\"w3-twothird\">
        

      
        <div class=\"w3-container w3-card w3-white w3-margin-bottom\">
        
          <h2 class=\"w3-text-theme w3-padding-16\"><i class=\"fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-theme\"></i>{{blog.title}}</h2>
          
  
          <div ><br>
{# 
            <a href=\"/blogs/edit/{{blog.id}}\" class=\"w3-button w3-theme \"><i class=\"fa fa-edit\"></i> Edit</a>
            <a href=\"/blogs/delete/{{blog.id}}\" class=\"w3-button w3-red \"><i class=\"fa fa-edit\"></i> Delete</a> #}



{# 
                    {% if time.0 < 1 and time.1 < 1 and time.2 < 1 %}
                        <span class=\"w3-right w3-opacity\">{{time.3}} sec</span>
                    {% elif time.0 < 1  and time.1 < 1%}
                        <span class=\"w3-right w3-opacity\"> {{ time.2 }}  min</span>
                    {% elif time.0 < 1 %}
                        <span class=\"w3-right w3-opacity\"> {{ time.1 }} hour{{time.1|pluralize:\"s\"}}</span>
                    {% else %}
                        <span class=\"w3-right w3-opacity\">{{time.0}} day{{time.0|pluralize:\"s\"}}</span>
                    {% endif %} #}
                    <hr>
                    <img src=\"{{ blog.imageUrl }}\" style=\"width:100%\" alt=\"Nature\">

                  <p>
                      {% for tag in blog.tags %}
                      <span class=\"w3-tag w3-small w3-theme\">#{{tag.name}}</span>
                      {% endfor %}
                      
                  </p>

                  <hr class=\"w3-clear\">
                  <p class=\"w3-padding\">
                    {{blog.description}}
                  </p>

                  <div class=\"w3-text-theme w3-right\">
                    <i class=\"fa fa-thumbs-up\"></i>
                    <span> {{blog.likes}}  </span> 
                    <i class=\"fa fa-thumbs-down\"></i>
                    <span>{{ blog.dislikes  }} </span> 
                   
                  </div> 
                  <br> 
                  
                  
                  {% if commented  %}
                    <h3>You can comment only once   </h3>

                  <hr> 

                  {% elseif inside %}
                  <form method=\"POST\" action=\"\">
                    {# {% csrf_token %} #}

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

                  {% elseif not inside  %}
                <h3> You can not comment, you must log in</h3>
                <a href=\"/login\" class=\"w3-button w3-theme  \"><i class=\"fa fa\"></i> Log In</a>

                   {% endif %}

                {# {% else %} #}
                  {# <h3> You can not comment your own blogs</h3> #}
                {# {% endif %}  #}

                
                 <h3 class=\"w3-text-theme\">Comments</h3>
                <hr> 
                  {% for comment in blog.comments %}
                  

                  <div class=\"w3-container w3-margin\">
                      <div class=\"w3-row-padding w3-padding-16\">
                          <div class=\"w3-col m2\">
                              <img src=\"{{comment.profile.imageUrl}}\" alt=\"Avatar\" class=\"w3-circle\" style=\"width:100px\">
                          </div>
                          <div class=\"w3-col m10\">
                              <p class=\"w3-right \">{{(comment.created.date|date(\"d/m/Y H:i\")) }}</p>
                      
                              <a href=\"/profiles/{{comment.profile.id}}\" ><h4>{{comment.profile.name}}</h4></a>
                              <p class=\"w3-right w3-opacity w3-text-theme\">I {{comment.rate}} it .</p>
                              <p>{{comment.description}}</p>
                              
                          </div>
                      </div>
                  </div>
                  {% endfor %}
  
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


{% endblock %}", "blogs/blog.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/blog-front/templates/blogs/blog.html.twig");
    }
}
