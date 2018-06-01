<?php

/* partials/navbar.twig */
class __TwigTemplate_871841c9a14ca96abee24dd2edb2ea5a5b327da59db5fe7b7d70e6719426149c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/navbar.twig"));

        $tags = array();
        $filters = array();
        $functions = array("path" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\">
        <div class=\"container-fluid\"><a class=\"navbar-brand text-capitalize\" href=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
        echo "\">Independent Tutorials</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div
                class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"#\">About Us</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"#\">News</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"#\">Tutorials</a>
                    </li>
                    <li class=\"dropdown open nav-item\" role=\"presentation\">
                       <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Sign In</a>
                        
                        <div class=\"dropdown-menu\">
                             <form action=\"/session\" accept-charset=\"UTF-8\" method=\"post\">       
                                <input name=\"utf8\" type=\"hidden\" value=\"✓\">
                                <input type=\"hidden\" name=\"authenticity_token\" value=\"CfbBg9n/T5EaJB55JugYaJVnczJeXcpzZ7ugTEJpzgqsAAvkJqqPqkJDDzThgGL4MWb0aJ2IYrgknM51FHozwA==\">
                                <div class=\"\">
                                    <input type=\"text\" name=\"login\" id=\"login_field\" class=\"form-control input-block\" tabindex=\"1\" autocapitalize=\"off\" autocorrect=\"off\" autofocus=\"autofocus\" placeholder=\"Username or Email\">
                                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control form-control input-block\" tabindex=\"2\" placeholder=\"Password\">
                                    <a class=\"label-link\" href=\"/password_reset\">Forgot password?</a>
                                    <input type=\"submit\" name=\"commit\" value=\"Sign in\" tabindex=\"3\" class=\"btn btn-primary btn-block\" data-disable-with=\"Signing in…\">
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\">
        <div class=\"container-fluid\"><a class=\"navbar-brand text-capitalize\" href=\"{{ path('homepage') }}\">Independent Tutorials</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div
                class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"#\">About Us</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"#\">News</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"#\">Tutorials</a>
                    </li>
                    <li class=\"dropdown open nav-item\" role=\"presentation\">
                       <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Sign In</a>
                        
                        <div class=\"dropdown-menu\">
                             <form action=\"/session\" accept-charset=\"UTF-8\" method=\"post\">       
                                <input name=\"utf8\" type=\"hidden\" value=\"✓\">
                                <input type=\"hidden\" name=\"authenticity_token\" value=\"CfbBg9n/T5EaJB55JugYaJVnczJeXcpzZ7ugTEJpzgqsAAvkJqqPqkJDDzThgGL4MWb0aJ2IYrgknM51FHozwA==\">
                                <div class=\"\">
                                    <input type=\"text\" name=\"login\" id=\"login_field\" class=\"form-control input-block\" tabindex=\"1\" autocapitalize=\"off\" autocorrect=\"off\" autofocus=\"autofocus\" placeholder=\"Username or Email\">
                                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control form-control input-block\" tabindex=\"2\" placeholder=\"Password\">
                                    <a class=\"label-link\" href=\"/password_reset\">Forgot password?</a>
                                    <input type=\"submit\" name=\"commit\" value=\"Sign in\" tabindex=\"3\" class=\"btn btn-primary btn-block\" data-disable-with=\"Signing in…\">
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
", "partials/navbar.twig", "");
    }
}
