<?php

/* @AuthAdmin/_search.twig */
class __TwigTemplate_732dc881e67ff523d6bf8251b74cae02ef8d88dec8051c7c69b2ba51011fe86e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AuthAdmin/_search.twig"));

        $tags = array();
        $filters = array("escape" => 9);
        $functions = array("__" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('escape'),
                array('__')
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
        echo "
<form class=\"navbar-form navbar-right\" role=\"search\">
    <div class=\"form-group\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"search\" name=\"search\"
                   tabindex=\"0\" autocomplete=\"off\"
                   autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\"
                   role=\"textbox\" aria-autocomplete=\"list\"
                   placeholder=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Search for auth"));
        echo "\" style=\"width: 278px;\" value=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["queries"] ?? null), "search", array()), "html", null, true));
        echo "\">
            <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
        </div>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@AuthAdmin/_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form class=\"navbar-form navbar-right\" role=\"search\">
    <div class=\"form-group\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"search\" name=\"search\"
                   tabindex=\"0\" autocomplete=\"off\"
                   autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\"
                   role=\"textbox\" aria-autocomplete=\"list\"
                   placeholder=\"{{ __('Search for auth') }}\" style=\"width: 278px;\" value=\"{{ queries.search }}\">
            <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
        </div>
    </div>
</form>
", "@AuthAdmin/_search.twig", "");
    }
}
