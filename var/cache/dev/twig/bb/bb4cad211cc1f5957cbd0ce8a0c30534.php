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

/* base.html.twig */
class __TwigTemplate_d7660836cf1bdca6ade306483c6da924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/w3-theme-light-green.css\">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\">  -->
    ";
        // line 13
        echo "
    ";
        // line 21
        echo "
</head>






<body class=\"w3-theme-l5\">
    ";
        // line 31
        echo "
<!-- Navbar -->
<div class=\"w3-top\">
    <div class=\"w3-bar w3-theme-d2 w3-left-align w3-large\">

        ";
        // line 37
        echo "
        <a href=\"/blogs\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  \" ><i class=\"fa fa-book\"></i>  Blogs</a>

        <!-- <a class=\"w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2\" href=\"javascript:void(0);\" onclick=\"openNav()\"><i class=\"fa fa-bars\"></i></a> -->
        <!-- <a href=\"#\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\" title=\"News\"><i class=\"fa fa-globe\"></i></a> -->

        <!-- <a href=\"events.html\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\" title=\"Events\"><i class=\"fa fa-calendar \"></i></a> -->
        
        <a href=\"/profiles\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \" title=\"Groups\"><i class=\"fa fa-group \"></i>  Authors</a>



        ";
        // line 50
        echo "
        ";
        // line 51
        if ((isset($context["inside"]) || array_key_exists("inside", $context) ? $context["inside"] : (function () { throw new RuntimeError('Variable "inside" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "        <a href=\"/inbox-messages\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \" title=\"Messages\"><i class=\"fa fa-envelope\"></i>  Messages</a>
        <a href=\"/account\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \"><i class=\"fa fa-home \"></i> MyBlog</a>

        ";
            // line 56
            echo "
        
        <a href=\"/profiles\" class=\"w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white\" title=\"My Account\">
            ";
            // line 60
            echo "        </a>

        ";
        }
        // line 63
        echo "        <a href=\"/";
        echo ((((isset($context["inside"]) || array_key_exists("inside", $context) ? $context["inside"] : (function () { throw new RuntimeError('Variable "inside" does not exist.', 63, $this->source); })()) != null)) ? ("logout") : ("login"));
        echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  w3-right\" > ";
        echo ((((isset($context["inside"]) || array_key_exists("inside", $context) ? $context["inside"] : (function () { throw new RuntimeError('Variable "inside" does not exist.', 63, $this->source); })()) != null)) ? ("Logout") : ("Log/Sign"));
        echo " </a>



";
        // line 68
        echo "        ";
        // line 70
        echo "

        ";
        // line 73
        echo "
        ";
        // line 75
        echo "

        ";
        // line 78
        echo "
        
    </div>
   
</div>
 <br> <br>

    ";
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "



</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyBlog!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 98
        echo "    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  183 => 98,  176 => 97,  163 => 4,  150 => 100,  148 => 97,  145 => 96,  136 => 78,  132 => 75,  129 => 73,  125 => 70,  123 => 68,  113 => 63,  108 => 60,  103 => 56,  98 => 52,  96 => 51,  93 => 50,  79 => 37,  72 => 31,  61 => 21,  58 => 13,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}MyBlog!{% endblock %}</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/w3-theme-light-green.css\">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\">  -->
    {# <link rel=\"stylesheet\" href=\"{% static 'styles/main.css' %} \" /> #}

    {# {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %} #}

</head>






<body class=\"w3-theme-l5\">
    {# {% extends 'navbar.html.twig' %}   #}

<!-- Navbar -->
<div class=\"w3-top\">
    <div class=\"w3-bar w3-theme-d2 w3-left-align w3-large\">

        {# {% if request.path == '/' %} w3-theme-d5 {% endif %} #}

        <a href=\"/blogs\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  \" ><i class=\"fa fa-book\"></i>  Blogs</a>

        <!-- <a class=\"w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2\" href=\"javascript:void(0);\" onclick=\"openNav()\"><i class=\"fa fa-bars\"></i></a> -->
        <!-- <a href=\"#\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\" title=\"News\"><i class=\"fa fa-globe\"></i></a> -->

        <!-- <a href=\"events.html\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\" title=\"Events\"><i class=\"fa fa-calendar \"></i></a> -->
        
        <a href=\"/profiles\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \" title=\"Groups\"><i class=\"fa fa-group \"></i>  Authors</a>



        {# {% if request.user.is_authenticated %} #}

        {% if inside  %}
        <a href=\"/inbox-messages\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \" title=\"Messages\"><i class=\"fa fa-envelope\"></i>  Messages</a>
        <a href=\"/account\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \"><i class=\"fa fa-home \"></i> MyBlog</a>

        {# <a href=\"/blogs/create\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \"><i class=\"fa fa-edit\"></i> Add new Blog</a> #}

        
        <a href=\"/profiles\" class=\"w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white\" title=\"My Account\">
            {# <img src=\"{{app.user.profile.imageUrl}}\" class=\"w3-circle\" style=\"height:27px;width:27px\" alt=\"Avatar\">  #}
        </a>

        {%  endif %}
        <a href=\"/{{ inside != null   ? 'logout' : 'login' }}\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  w3-right\" > {{ inside != null  ? 'Logout' : 'Log/Sign'}} </a>



{# !!!!!!!!!!!!!!!!!! #}
        {# <a href=\"/{{ app.user ? 'logout' : 'login' }}\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  w3-right\" title=\"My Profile\"> {{ app.user ? 'Logout' : 'Log/Sign'}} </a> #}
{# !!!!!!!!!!!!!!!!!! #}


        {# {% else %} #}

        {# <a href=\"/register\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  w3-right \" title=\"My Profile\"> Log In/Sign Up</a> #}


        {# {% endif %} #}

        
    </div>
   
</div>
 <br> <br>

    {# {% if messages %}
    

        {% for message in messages %}
        <div style=\"margin-top: 50px;\" class=\" w3-center w3-card  alert--{{message.tags}}\">
            <p >{{message}}</p>
            </div>       
        
        {% endfor %}

    {% endif %} #}

    {% block body %}
    
    {% endblock %}




</body>

{# <script src=\"{% static 'styles/app.js' %}\"></script> #}
", "base.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/blog-front/templates/base.html.twig");
    }
}
