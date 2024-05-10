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
class __TwigTemplate_0d9692702286a4bf3f1380d115ffce6a extends Template
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
        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blogs");
        echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  \" ><i class=\"fa fa-book\"></i>  Blogs</a>

        <!-- <a class=\"w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2\" href=\"javascript:void(0);\" onclick=\"openNav()\"><i class=\"fa fa-bars\"></i></a> -->
        <!-- <a href=\"#\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\" title=\"News\"><i class=\"fa fa-globe\"></i></a> -->

        <!-- <a href=\"events.html\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\" title=\"Events\"><i class=\"fa fa-calendar \"></i></a> -->
        
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profiles");
        echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \" title=\"Groups\"><i class=\"fa fa-group \"></i>  Authors</a>



        ";
        // line 50
        echo "
        ";
        // line 51
        if (($context["inside"] ?? null)) {
            // line 52
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inbox-messages");
            echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \" title=\"Messages\"><i class=\"fa fa-envelope\"></i>  Messages</a>
        <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white \"><i class=\"fa fa-home \"></i> MyBlog</a>

        ";
            // line 56
            echo "
        
        ";
            // line 59
            echo "            ";
            // line 60
            echo "        ";
            // line 61
            echo "        <a href=\"  ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  w3-right\" > Logout  </a>


        ";
        } else {
            // line 65
            echo "        <a href=\"  ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white  w3-right\" > Log/Sign</a>

        ";
        }
        // line 68
        echo "

";
        // line 71
        echo "        ";
        // line 73
        echo "

        ";
        // line 76
        echo "
        ";
        // line 78
        echo "

        ";
        // line 81
        echo "
        
    </div>
   
</div>
 <br> <br>

    ";
        // line 99
        echo "
    ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "



</body>

";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "MyBlog!";
    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "    
    ";
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
        return array (  186 => 101,  182 => 100,  175 => 4,  165 => 103,  163 => 100,  160 => 99,  151 => 81,  147 => 78,  144 => 76,  140 => 73,  138 => 71,  134 => 68,  127 => 65,  119 => 61,  117 => 60,  115 => 59,  111 => 56,  106 => 53,  101 => 52,  99 => 51,  96 => 50,  89 => 45,  79 => 38,  76 => 37,  69 => 31,  58 => 21,  55 => 13,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/base.html.twig");
    }
}
