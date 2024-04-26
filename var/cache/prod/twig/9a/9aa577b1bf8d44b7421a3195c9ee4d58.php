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

/* profiles/register.html.twig */
class __TwigTemplate_91d2b181ab82eeb827db83bbb75c99f8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profiles/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"w3-container w3-content\" style=\"max-width: 1400px; margin-top: 80px;\">

    <div class=\"w3-row-padding\">
        <!-- Left Column -->
        <div class=\"w3-third\">
            <div class=\"w3-white w3-text w3-card-4\">
                <div class=\"w3-container\">
                    <h2 class=\"w3-text-theme w3-center\">Some greeting</h2>
                    <p class=\" w3-center\">Nice to meet you, welcome to us.</p>
                </div>
            </div><br>
        </div>
        <!-- End Left Column -->

        <!-- Right Column -->
        <div class=\"w3-twothird\">
            <div class=\"w3-container w3-card w3-white w3-margin-bottom\">



                <h2 class=\"w3-text-theme w3-padding-16\">
                    <i class=\"fa fa-user-plus fa-fw w3-margin-right w3-xxlarge w3-text-theme\"></i>Sign Up
                </h2>
                <!-- Signup Form -->
                <h3  class=\"w3-text-theme\">Register an account</h3>

                <div class=\"w3-container\" >

                    <form action=\"\" method=\"POST\">

                        <!-- Input:Email -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#text\">Email: </label>
                        <input
                            id=\"formInput#text\"
                            type=\"text\"
                            name=\"email\"
                            placeholder=\"Enter your email...\"
                        />
                        </div>
                
                        <!-- Input:Password -->
                        <div class=\"w3-padding\">
                        <label for=\"formInput#password\">Password: </label>
                        <input
                            id=\"formInput#passowrd\"
                            type=\"password\"
                            name=\"password\"
                            placeholder=\"••••••••\"
                        />
                        </div>
 ";
        // line 55
        if (($context["error"] ?? null)) {
            // line 56
            echo "                      <p class=\"w3-text-red\" > ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo " </p>
                    ";
        }
        // line 58
        echo "                        <div >
                        <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"Create account\"></input>
                            <br>
                        <a href=\"\" class=\"w3-text-theme w3-right\" >Forget Password?</a>
                        </div>

                    </form>

                   

                </div>

                <div class=\"w3-center\">
                    <p>Already have an Account?</p>
                    <a class=\"w3-button w3-theme\" href=\"/login\">Log In</a>
                  </div>



";
        // line 115
        echo "

            </div>
        </div>
    </div>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profiles/register.html.twig";
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
        return array (  132 => 115,  111 => 58,  105 => 56,  103 => 55,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/register.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/profiles/register.html.twig");
    }
}
