<?php

/* partials/header.twig */
class __TwigTemplate_233757c866a084632073b2f8e7e7bd775300653f2f17fde70c0662e2f90ef4fd extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/header.twig"));

        $tags = array("set" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array(),
                array()
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
        $context["list"] = array();
        // line 2
        echo "    <div class=\"align-items-stretch align-content-stretch visible\" id=\"welcome\">
        <div class=\"jumbotron jumbotron-fluid\" style=\"margin-bottom:0;\">
            <h1>Willkommen bei Independent Tutorials</h1>
            <div class=\"container-fluid d-inline-flex\">
                <form class=\"form-inline d-block m-auto\" target=\"_self\">
                    <div class=\"form-group\" style=\"background-color:#ffffff;margin-top:20px;\">
                        <label for=\"search-field\"></label>
                        <div id=\"searchWrapper\">
                            <input class=\"form-control search-field\" type=\"search\" name=\"search\" placeholder=\"Finde Tutorien\" id=\"search-field\" style=\"padding:6px;margin:6px;width:250px;\">
                            <button class=\"btn btn-link d-inline-block\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-light dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" type=\"button\" style=\"background-color:rgba(248,249,250,0);color:rgb(73,80,87);margin-right:10px;margin-left:10px;\">Kategorien</button>
                            <div class=\"dropdown-menu\" role=\"menu\">
                                <a class=\"dropdown-item\" role=\"presentation\" href=\"#\">First Item</a>
                                <a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Second Item</a>
                                <a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Third Item</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <p>Description</p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set list = [] %}
    <div class=\"align-items-stretch align-content-stretch visible\" id=\"welcome\">
        <div class=\"jumbotron jumbotron-fluid\" style=\"margin-bottom:0;\">
            <h1>Willkommen bei Independent Tutorials</h1>
            <div class=\"container-fluid d-inline-flex\">
                <form class=\"form-inline d-block m-auto\" target=\"_self\">
                    <div class=\"form-group\" style=\"background-color:#ffffff;margin-top:20px;\">
                        <label for=\"search-field\"></label>
                        <div id=\"searchWrapper\">
                            <input class=\"form-control search-field\" type=\"search\" name=\"search\" placeholder=\"Finde Tutorien\" id=\"search-field\" style=\"padding:6px;margin:6px;width:250px;\">
                            <button class=\"btn btn-link d-inline-block\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-light dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" type=\"button\" style=\"background-color:rgba(248,249,250,0);color:rgb(73,80,87);margin-right:10px;margin-left:10px;\">Kategorien</button>
                            <div class=\"dropdown-menu\" role=\"menu\">
                                <a class=\"dropdown-item\" role=\"presentation\" href=\"#\">First Item</a>
                                <a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Second Item</a>
                                <a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Third Item</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <p>Description</p>
        </div>
    </div>
", "partials/header.twig", "");
    }
}
