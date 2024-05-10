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
class __TwigTemplate_5313dc4594e57140bf78ed088fec2ac3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profiles/profile.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "imageUrl", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"w3-circle\" style=\"max-width: 400px; max-height: 550px;  
                        border-radius: 40px; \" alt=\"Avatar\"></p>
                    <h2 >";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
                    <hr>
                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "intro", [], "any", false, false, false, 17)) {
            // line 18
            echo "                    <p><i class=\"fa fa-pencil fa-fw w3-margin-right w3-text-theme\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "intro", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "
                    <p><i class=\"fa fa-at fa-fw w3-margin-right w3-text-theme\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>

                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "location", [], "any", false, false, false, 23)) {
            // line 24
            echo "                    <p><i class=\"fa fa-home fa-fw w3-margin-right w3-text-theme\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "location", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                    ";
        }
        // line 26
        echo "
                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "number", [], "any", false, false, false, 27)) {
            // line 28
            echo "                    <p><i class=\"fa  fa-mobile  w3-margin-right w3-text-theme\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "number", [], "any", false, false, false, 28), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "soc_facebook", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getSocFacebook", [], "any", false, false, false, 34), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "soc_linkedin", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getSocLinkedin", [], "any", false, false, false, 46), "html", null, true);
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
        if ((($context["page"] ?? null) == "myPage")) {
            // line 56
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit-profile", ["id" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"w3-button w3-theme w3-right w3-right\"><i class=\"fa fa-edit\"></i> Edit Profile</a>
                    ";
        }
        // line 58
        echo "
                </div>


                <!-- Send Message -->
                ";
        // line 63
        if ((($context["page"] ?? null) != "myPage")) {
            // line 64
            echo "                <div class=\" w3-white w3-margin w3-padding w3-center\">
                
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create-message", ["id" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"w3-button w3-theme w3-margin\"><i class=\"fa fa-envelope\"></i> Send Message</a>
                </div>
                ";
        }
        // line 69
        echo "
        
            </div>


            <br>

            <div class=\"w3-card w3-round w3-white   \">
                <div class=\"w3-container \">
                    <h2>About me</h2>
                    <p> ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", false, false, false, 79), "html", null, true);
        echo "</p>
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class=\"w3-card w3-round w3-white  \">

                    ";
        // line 87
        if ((($context["page"] ?? null) == "myPage")) {
            // line 88
            echo "                        <a class=\"w3-button w3-theme w3-right\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interest-create");
            echo "\"><i class=\"fa fa-plus\"></i>Add Interest</a>
                    ";
        }
        // line 90
        echo "
                <div class=\"w3-container \">
                    <h2>Interests</h2>
                
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "interests", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 95
            echo "                        ";
            if ((($context["page"] ?? null) == "myPage")) {
                // line 96
                echo "                        
                            <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interest-delete", ["id" => twig_get_attribute($this->env, $this->source, $context["interest"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\"   class=\"w3-button w3-red w3-right \" style=\"margin-left: 10px;\"><i class=\"fa fa-eraser\"></i> Delete</a>
                            <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interest-edit", ["id" => twig_get_attribute($this->env, $this->source, $context["interest"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                echo "\" class=\"w3-button w3-theme w3-right \"><i class=\"fa fa-edit\"></i> Edit</a>
                        ";
            }
            // line 100
            echo "                        <p class=\" w3-tag  w3-text-white  w3-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interest"], "name", [], "any", false, false, false, 100), "html", null, true);
            echo "</p> 
                        <p> ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interest"], "description", [], "any", false, false, false, 101), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo " 
                </div>
            </div>

        </div>

        <!-- Middle Column -->
        <div class=\"w3-col    w3-round w3-margin m7\">


            ";
        // line 113
        echo "            ";
        if ((($context["page"] ?? null) == "myPage")) {
            // line 114
            echo "                <h2 class=\"w3-text-theme w3-center\"> My blogs</h2>
                <a class=\"w3-button w3-margin-bottom w3-margin-right w3-theme w3-right\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-create");
            echo "\"><i class=\"fa fa-plus\"></i>Addd Blog</a>

            ";
        } else {
            // line 118
            echo "                <h2 class=\"w3-text-theme w3-center\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 118), "html", null, true);
            echo " blogs</h2>
            ";
        }
        // line 120
        echo "

            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "blogs", [], "any", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 123
            echo "
            <div class=\"w3-container w3-card w3-white w3-round w3-margin-bottom\"><br>

                ";
            // line 126
            if ((($context["page"] ?? null) == "myPage")) {
                // line 127
                echo "                 <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-edit", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\" class=\"w3-button w3-theme \"><i class=\"fa fa-edit\"></i> Edit</a>
                <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-delete", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\"   class=\"w3-button w3-red  \" style=\"margin-right: 10px;\"><i class=\"fa fa-eraser\"></i> Delete</a>
                ";
            }
            // line 130
            echo "                <div >
                    <br>

                    ";
            // line 146
            echo "    
                        <hr>
                    <div class=\"w3-row-padding\" >
                        <div >
                            <img src=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "imageUrl", [], "any", false, false, false, 150), "html", null, true);
            echo "\" style=\"width:100%\" alt=\"Logo\" class=\"w3-margin-bottom\">
                        </div>
                    </div>
                    <p>
                        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "tags", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 155
                echo "                        <span class=\"w3-tag w3-small w3-theme\">#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 155), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                        
                    </p>
                    <h3 class=\"w3-center\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 159), "html", null, true);
            echo "</h3>
                    <p>";
            // line 160
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 160), 0, 400), "html", null, true);
            echo "...</p>
                      

                      <!-- Likes --> 
                    ";
            // line 170
            echo "

                    <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\" type=\"button\" class=\"w3-button w3-theme w3-center w3-margin-bottom\"><i class=\"fa fa-info\"></i> Show more</a> 
      
    
                    <br>

                </div>
            </div>
            
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo " 

             

        </div>

            
       
    </div>
</div>
<br>


";
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
        return array (  360 => 181,  344 => 172,  340 => 170,  333 => 160,  329 => 159,  325 => 157,  316 => 155,  312 => 154,  305 => 150,  299 => 146,  294 => 130,  289 => 128,  284 => 127,  282 => 126,  277 => 123,  273 => 122,  269 => 120,  263 => 118,  257 => 115,  254 => 114,  251 => 113,  239 => 102,  231 => 101,  226 => 100,  221 => 98,  217 => 97,  214 => 96,  211 => 95,  207 => 94,  201 => 90,  195 => 88,  193 => 87,  182 => 79,  170 => 69,  164 => 66,  160 => 64,  158 => 63,  151 => 58,  145 => 56,  143 => 55,  138 => 52,  135 => 48,  129 => 46,  127 => 45,  124 => 44,  121 => 40,  118 => 36,  112 => 34,  110 => 33,  107 => 32,  104 => 30,  98 => 28,  96 => 27,  93 => 26,  87 => 24,  85 => 23,  80 => 21,  77 => 20,  71 => 18,  69 => 17,  64 => 15,  59 => 13,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/profile.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/profiles/profile.html.twig");
    }
}
