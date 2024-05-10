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

/* profiles/login.html.twig */
class __TwigTemplate_081e03a2d7f0a6b4898562731dfca4bd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profiles/login.html.twig", 1);
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
                    <i class=\"fa fa-sign-in fa-fw w3-margin-right w3-xxlarge w3-text-theme\"></i>Log In
                </h2>
                <!-- Login Form -->
                <form action=\"\" method=\"POST\">
                    <!-- Input:Username -->
                    <div class=\"w3-padding\">
                      <label for=\"formInput#text\">Username: </label>
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
        // line 51
        if (($context["error"] ?? null)) {
            // line 52
            echo "                      <p class=\"w3-text-red\" > ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo " </p>
                    ";
        }
        // line 54
        echo "
                    <div >
                      <input type=\"submit\" class=\"w3-button w3-theme w3-margin-top\" value=\"Log In\"></input>
                        <br>
                      <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset-password");
        echo "\" class=\"w3-text-theme w3-right\" >Forget Password?</a>
                    </div>
                  </form>
                <!-- End Login Form -->
                <div class=\"w3-center\">
                    <p>Dont have an Account?</p>
                    <a class=\"w3-button w3-theme\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Sign Up</a>
                  </div>



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
        return "profiles/login.html.twig";
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
        return array (  122 => 64,  113 => 58,  107 => 54,  101 => 52,  99 => 51,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/login.html.twig", "/Users/andriiirkha/Documents/Symfony/project/blog-front/templates/profiles/login.html.twig");
    }
}
