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

/* profiles/profile.html.twig */
class __TwigTemplate_336b74f33c2750c40f0d2d40318553ae extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profiles/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profiles/profile.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"w3-container w3-content\" style=\"max-width:1400px;margin-top:80px\">
    <div class=\"w3-row\">
        <div class=\"w3-col m4\">
            <!-- Profile -->
            <div class=\"w3-card w3-round w3-white\">
                <div class=\"w3-container w3-center\">
                    <p class=\"w3-center\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })()), "imageUrl", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"w3-circle\" style=\"max-width: 400px; max-height: 550px;  
                        border-radius: 40px; \" alt=\"Avatar\"></p>
                    <h2 >";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
                    <hr>
                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 17, $this->source); })()), "intro", [], "any", false, false, false, 17)) {
            // line 18
            echo "                    <p><i class=\"fa fa-pencil fa-fw w3-margin-right w3-text-theme\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 18, $this->source); })()), "intro", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "
                    <p><i class=\"fa fa-at fa-fw w3-margin-right w3-text-theme\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>

                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 23, $this->source); })()), "location", [], "any", false, false, false, 23)) {
            // line 24
            echo "                    <p><i class=\"fa fa-home fa-fw w3-margin-right w3-text-theme\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 24, $this->source); })()), "location", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                    ";
        }
        // line 26
        echo "
                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 27, $this->source); })()), "number", [], "any", false, false, false, 27)) {
            // line 28
            echo "                    <p><i class=\"fa  fa-mobile  w3-margin-right w3-text-theme\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "number", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                    ";
        }
        // line 30
        echo "
                    ";
        // line 32
        echo "
                    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 33, $this->source); })()), "soc_facebook", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 34, $this->source); })()), "getSocFacebook", [], "any", false, false, false, 34), "html", null, true);
            echo "\"><i class=\"fa  fa-facebook w3-text-theme w3-xxlarge \"></i></a>
                    ";
        }
        // line 36
        echo "
                    ";
        // line 40
        echo "
                    ";
        // line 44
        echo "
                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 45, $this->source); })()), "soc_linkedin", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 46, $this->source); })()), "getSocLinkedin", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><i class=\"fa  fa-linkedin w3-text-theme w3-xxlarge \">   </i></a>
                    ";
        }
        // line 48
        echo "
                    ";
        // line 52
        echo "
                      <br> 

                    ";
        // line 55
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) == "myPage")) {
            // line 56
            echo "                    <a href=\"/profiles/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"w3-button w3-theme w3-right w3-right\"><i class=\"fa fa-edit\"></i> Edit Profile</a>
                    ";
        }
        // line 58
        echo "
                </div>


                <!-- Send Message -->
                ";
        // line 63
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 63, $this->source); })()) != "myPage")) {
            // line 64
            echo "                <div class=\" w3-white w3-margin w3-padding w3-center\">
                    <a href=\"/create-message/";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"w3-button w3-theme w3-margin\"><i class=\"fa fa-envelope\"></i> Send Message</a>
                </div>
                ";
        }
        // line 68
        echo "
        
            </div>


            <br>

            <div class=\"w3-card w3-round w3-white   \">
                <div class=\"w3-container \">
                    <h2>About me</h2>
                    <p> ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 78, $this->source); })()), "bio", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class=\"w3-card w3-round w3-white  \">

                    ";
        // line 86
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 86, $this->source); })()) == "myPage")) {
            // line 87
            echo "                        <a class=\"w3-button w3-theme w3-right\" href=\"/interest-create\"><i class=\"fa fa-plus\"></i>Add Interest</a>
                    ";
        }
        // line 89
        echo "
                <div class=\"w3-container \">
                    <h2>Interests</h2>
                
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 93, $this->source); })()), "interests", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 94
            echo "                        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 94, $this->source); })()) == "myPage")) {
                // line 95
                echo "                            <a href=\"/interest-delete/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interest"], "id", [], "any", false, false, false, 95), "html", null, true);
                echo "\"   class=\"w3-button w3-red w3-right \" style=\"margin-left: 10px;\"><i class=\"fa fa-eraser\"></i> Delete</a>
                            <a href=\"/interest-edit/";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interest"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo "\" class=\"w3-button w3-theme w3-right \"><i class=\"fa fa-edit\"></i> Edit</a>
                        ";
            }
            // line 98
            echo "                        <p class=\" w3-tag  w3-text-white  w3-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interest"], "name", [], "any", false, false, false, 98), "html", null, true);
            echo "</p> 
                        <p> ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interest"], "description", [], "any", false, false, false, 99), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo " 
                </div>
            </div>

        </div>

        <!-- Middle Column -->
        <div class=\"w3-col    w3-round w3-margin m7\">


            ";
        // line 111
        echo "            ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 111, $this->source); })()) == "myPage")) {
            // line 112
            echo "                <h2 class=\"w3-text-theme w3-center\"> My blogs</h2>
                <a class=\"w3-button w3-margin-bottom w3-margin-right w3-theme w3-right\" href=\"/blogs/create\"><i class=\"fa fa-plus\"></i>Addd Blog</a>

            ";
        } else {
            // line 116
            echo "                <h2 class=\"w3-text-theme w3-center\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 116, $this->source); })()), "name", [], "any", false, false, false, 116), "html", null, true);
            echo " blogs</h2>
            ";
        }
        // line 118
        echo "

            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 120, $this->source); })()), "blogs", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 121
            echo "
            <div class=\"w3-container w3-card w3-white w3-round w3-margin-bottom\"><br>

                ";
            // line 124
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 124, $this->source); })()) == "myPage")) {
                // line 125
                echo "                 <a href=\"/blogs/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 125), "html", null, true);
                echo "\" class=\"w3-button w3-theme \"><i class=\"fa fa-edit\"></i> Edit</a>
                <a href=\"/blogs/delete/";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\"   class=\"w3-button w3-red  \" style=\"margin-right: 10px;\"><i class=\"fa fa-eraser\"></i> Delete</a>
                ";
            }
            // line 128
            echo "                <div >
                    <br>

                    ";
            // line 144
            echo "    
                        <hr>
                    <div class=\"w3-row-padding\" >
                        <div >
                            <img src=\"";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "imageUrl", [], "any", false, false, false, 148), "html", null, true);
            echo "\" style=\"width:100%\" alt=\"Logo\" class=\"w3-margin-bottom\">
                        </div>
                    </div>
                    <p>
                        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "tags", [], "any", false, false, false, 152));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 153
                echo "                        <span class=\"w3-tag w3-small w3-theme\">#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 153), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                        
                    </p>
                    <h3 class=\"w3-center\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 157), "html", null, true);
            echo "</h3>
                    <p>";
            // line 158
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 158), 0, 400), "html", null, true);
            echo "...</p>
                      

                      <!-- Likes --> 
                    ";
            // line 168
            echo "

                    <a href=\"/blogs/";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 170), "html", null, true);
            echo "\" type=\"button\" class=\"w3-button w3-theme w3-center w3-margin-bottom\"><i class=\"fa fa-info\"></i> Show more</a> 
      
    
                    <br>

                </div>
            </div>
            
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo " 

             

        </div>

            
       
    </div>
</div>
<br>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profiles/profile.html.twig";
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
        return array (  361 => 179,  345 => 170,  341 => 168,  334 => 158,  330 => 157,  326 => 155,  317 => 153,  313 => 152,  306 => 148,  300 => 144,  295 => 128,  290 => 126,  285 => 125,  283 => 124,  278 => 121,  274 => 120,  270 => 118,  264 => 116,  258 => 112,  255 => 111,  243 => 100,  235 => 99,  230 => 98,  225 => 96,  220 => 95,  217 => 94,  213 => 93,  207 => 89,  203 => 87,  201 => 86,  190 => 78,  178 => 68,  172 => 65,  169 => 64,  167 => 63,  160 => 58,  154 => 56,  152 => 55,  147 => 52,  144 => 48,  138 => 46,  136 => 45,  133 => 44,  130 => 40,  127 => 36,  121 => 34,  119 => 33,  116 => 32,  113 => 30,  107 => 28,  105 => 27,  102 => 26,  96 => 24,  94 => 23,  89 => 21,  86 => 20,  80 => 18,  78 => 17,  73 => 15,  68 => 13,  59 => 6,  52 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block body %}

<div class=\"w3-container w3-content\" style=\"max-width:1400px;margin-top:80px\">
    <div class=\"w3-row\">
        <div class=\"w3-col m4\">
            <!-- Profile -->
            <div class=\"w3-card w3-round w3-white\">
                <div class=\"w3-container w3-center\">
                    <p class=\"w3-center\"><img src=\"{{profile.imageUrl}}\" class=\"w3-circle\" style=\"max-width: 400px; max-height: 550px;  
                        border-radius: 40px; \" alt=\"Avatar\"></p>
                    <h2 >{{profile.name}}</h2>
                    <hr>
                    {% if profile.intro %}
                    <p><i class=\"fa fa-pencil fa-fw w3-margin-right w3-text-theme\"></i> {{profile.intro}}</p>
                    {% endif %}

                    <p><i class=\"fa fa-at fa-fw w3-margin-right w3-text-theme\"></i> {{profile.email}}</p>

                    {% if profile.location %}
                    <p><i class=\"fa fa-home fa-fw w3-margin-right w3-text-theme\"></i> {{profile.location}}</p>
                    {% endif %}

                    {% if profile.number %}
                    <p><i class=\"fa  fa-mobile  w3-margin-right w3-text-theme\"></i> {{profile.number}}</p>
                    {% endif %}

                    {# <p><i class=\"fa fa-calendar fa-fw w3-margin-right w3-text-theme\"></i> Here from {{profile.created.date}}</p> #}

                    {% if profile.soc_facebook %}
                    <a href=\"{{profile.getSocFacebook}}\"><i class=\"fa  fa-facebook w3-text-theme w3-xxlarge \"></i></a>
                    {% endif %}

                    {# {% if author.soc_x %}
                    <a href=\"{{author.soc_x}}\"><i class=\"fa  fa-twitter w3-text-theme  w3-xxlarge \"></i></a>
                    {% endif %} #}

                    {# {% if profile.soc_youtube %}
                    <a href=\"{{author.soc_youtube}}\"><i class=\"fa  fa-youtube w3-text-theme  w3-xxlarge \">    </i></a>
                    {% endif %} #}

                    {% if profile.soc_linkedin %}
                    <a href=\"{{profile.getSocLinkedin}}\"><i class=\"fa  fa-linkedin w3-text-theme w3-xxlarge \">   </i></a>
                    {% endif %}

                    {# {% if author.soc_telegram %}
                    <a href=\"{{author.soc_telegram}}\"><i class=\"fa  fa-telegram w3-text-theme w3-xxlarge \">   </i></a>
                    {% endif %} #}

                      <br> 

                    {%  if page =='myPage' %}
                    <a href=\"/profiles/edit/{{profile.id}}\" class=\"w3-button w3-theme w3-right w3-right\"><i class=\"fa fa-edit\"></i> Edit Profile</a>
                    {% endif %}

                </div>


                <!-- Send Message -->
                {% if page != 'myPage'%}
                <div class=\" w3-white w3-margin w3-padding w3-center\">
                    <a href=\"/create-message/{{profile.id}}\" class=\"w3-button w3-theme w3-margin\"><i class=\"fa fa-envelope\"></i> Send Message</a>
                </div>
                {% endif %}

        
            </div>


            <br>

            <div class=\"w3-card w3-round w3-white   \">
                <div class=\"w3-container \">
                    <h2>About me</h2>
                    <p> {{profile.bio}}</p>
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class=\"w3-card w3-round w3-white  \">

                    {% if page  == 'myPage' %}
                        <a class=\"w3-button w3-theme w3-right\" href=\"/interest-create\"><i class=\"fa fa-plus\"></i>Add Interest</a>
                    {% endif %}

                <div class=\"w3-container \">
                    <h2>Interests</h2>
                
                    {% for interest in profile.interests %}
                        {% if page  == 'myPage' %}
                            <a href=\"/interest-delete/{{interest.id}}\"   class=\"w3-button w3-red w3-right \" style=\"margin-left: 10px;\"><i class=\"fa fa-eraser\"></i> Delete</a>
                            <a href=\"/interest-edit/{{interest.id}}\" class=\"w3-button w3-theme w3-right \"><i class=\"fa fa-edit\"></i> Edit</a>
                        {% endif %}
                        <p class=\" w3-tag  w3-text-white  w3-theme\">{{interest.name}}</p> 
                        <p> {{interest.description}}</p>
                    {% endfor %} 
                </div>
            </div>

        </div>

        <!-- Middle Column -->
        <div class=\"w3-col    w3-round w3-margin m7\">


            {# {% if current.id == profile.id %} #}
            {% if page == 'myPage' %}
                <h2 class=\"w3-text-theme w3-center\"> My blogs</h2>
                <a class=\"w3-button w3-margin-bottom w3-margin-right w3-theme w3-right\" href=\"/blogs/create\"><i class=\"fa fa-plus\"></i>Addd Blog</a>

            {% else %}
                <h2 class=\"w3-text-theme w3-center\"> {{profile.name}} blogs</h2>
            {% endif %}


            {% for blog in profile.blogs %}

            <div class=\"w3-container w3-card w3-white w3-round w3-margin-bottom\"><br>

                {% if page =='myPage' %}
                 <a href=\"/blogs/edit/{{blog.id}}\" class=\"w3-button w3-theme \"><i class=\"fa fa-edit\"></i> Edit</a>
                <a href=\"/blogs/delete/{{blog.id}}\"   class=\"w3-button w3-red  \" style=\"margin-right: 10px;\"><i class=\"fa fa-eraser\"></i> Delete</a>
                {% endif %}
                <div >
                    <br>

                    {# <span class=\"w3-right w3-opacity\">{{ blog.created|date:\"D j.n.Y G:i\" }} </span>
    
                        {% if time.0 < 1 and time.1 < 1 and time.2 < 1 %}
                            <span class=\"w3-right w3-opacity\">{{time.3}} sec</span>
                        {% elif time.0 < 1  and time.1 < 1%}
                            <span class=\"w3-right w3-opacity\"> {{ time.2 }}  min</span>
                        {% elif time.0 < 1 %}
                            <span class=\"w3-right w3-opacity\"> {{ time.1 }} hour{{time.1|pluralize:\"s\"}}</span>
                        {% else %}
                            <span class=\"w3-right w3-opacity\">{{ time.forloop.counter0.0 }} day{{time.0|pluralize:\"s\"}}</span>
                            <p>{{ time }}</p>
                        {% endif %}
                        <p>{{ counter.time }}</p>  #}
    
                        <hr>
                    <div class=\"w3-row-padding\" >
                        <div >
                            <img src=\"{{blog.imageUrl}}\" style=\"width:100%\" alt=\"Logo\" class=\"w3-margin-bottom\">
                        </div>
                    </div>
                    <p>
                        {% for tag in blog.tags %}
                        <span class=\"w3-tag w3-small w3-theme\">#{{tag.name}}</span>
                        {% endfor %}
                        
                    </p>
                    <h3 class=\"w3-center\">{{blog.title}}</h3>
                    <p>{{blog.description|slice(0,400)}}...</p>
                      

                      <!-- Likes --> 
                    {# <div class=\"w3-text-theme w3-right\">
                        <i class=\"fa fa-thumbs-up\"></i>
                        <span>{{ blog.vote_like  }} Like{{blog.vote_like|pluralize:\"s\"}} </span> 
                        <i class=\"fa fa-thumbs-down\"></i>
                        <span>{{ blog.vote_dislike  }} Dislike{{blog.vote_dislike|pluralize:\"s\"}} </span> 
                    </div>     #}


                    <a href=\"/blogs/{{blog.id}}\" type=\"button\" class=\"w3-button w3-theme w3-center w3-margin-bottom\"><i class=\"fa fa-info\"></i> Show more</a> 
      
    
                    <br>

                </div>
            </div>
            
            
            {% endfor %} 

             

        </div>

            
       
    </div>
</div>
<br>


{% endblock %}", "profiles/profile.html.twig", "/Users/andriiirkha/Documents/Symfony/blog-front/blog-front/templates/profiles/profile.html.twig");
    }
}
