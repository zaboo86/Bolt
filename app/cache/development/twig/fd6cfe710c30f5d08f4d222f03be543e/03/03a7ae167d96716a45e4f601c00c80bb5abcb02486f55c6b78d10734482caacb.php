<?php

/* @bolt/dashboard/_suggestloripsum.twig */
class __TwigTemplate_895fb6283644ed6bef24aa7ed09a37ccb9295cfd267d50a260c2131dc2a9c626 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_suggestloripsum.twig"));

        $tags = array("if" => 4);
        $filters = array();
        $functions = array("__" => 3, "isallowed" => 4, "path" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('__', 'isallowed', 'path')
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
        echo "<div class=\"alert alert-info alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.dashboard.empty-database"));
        echo "
    ";
        // line 4
        if ($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("prefill")) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.dashboard.quickstart", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prefill", array("force" => 1)))));
            echo "
    ";
        }
        // line 7
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_suggestloripsum.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  56 => 5,  54 => 4,  50 => 3,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"alert alert-info alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    {{ __(\"page.dashboard.empty-database\") }}
    {% if isallowed('prefill') %}
        {{ __(\"page.dashboard.quickstart\", {'%url%': path('prefill', {'force': 1})}) }}
    {% endif %}
</div>
", "@bolt/dashboard/_suggestloripsum.twig", "");
    }
}
