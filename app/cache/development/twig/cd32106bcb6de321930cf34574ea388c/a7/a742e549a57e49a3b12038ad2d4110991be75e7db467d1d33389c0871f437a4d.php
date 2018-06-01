<?php

/* @bolt/overview/overview.twig */
class __TwigTemplate_b5763554619c436a8987a524a52e89b3448a38d9221df8726e200d0423637bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/overview/overview.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/overview.twig"));

        $tags = array("from" => 3, "import" => 4, "if" => 14);
        $filters = array("escape" => 15, "join" => 15);
        $functions = array("__" => 10, "include" => 27, "widgets" => 29);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'import', 'if'),
                array('escape', 'join'),
                array('__', 'include', 'widgets')
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

        // line 3
        $context["__internal_0f2f94b4ebdb9ccfbd80824b601b3af9eade2f40f29976f55905c15ed0f67616"] = $this->loadTemplate("@bolt/_sub/_record_list.twig", "@bolt/overview/overview.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/overview/overview.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Content/*");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.overview"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array()))));
        echo "
    ";
        // line 14
        if ($this->getAttribute(($context["context"] ?? null), "filter", array())) {
            // line 15
            echo "        <small>(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.filtered-by"));
            echo " <em>'";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["context"] ?? null), "filter", array()), ", "), "html", null, true));
            echo "'</em>)</small>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_messages.twig"));
        echo "

            ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "overview_below_header", "backend"));
        echo "

            ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0f2f94b4ebdb9ccfbd80824b601b3af9eade2f40f29976f55905c15ed0f67616"]->getrecord_list($this->getAttribute(($context["context"] ?? null), "contenttype", array()), $this->getAttribute(($context["context"] ?? null), "multiplecontent", array()), $this->getAttribute(($context["context"] ?? null), "permissions", array()), "", "", twig_join_filter($this->getAttribute(($context["context"] ?? null), "filter", array()), " ")));
        echo "

            ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "overview_bottom", "backend"));
        echo "

        </div>

        <aside class=\"col-md-4\">

            ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "overview_aside_top", "backend"));
        echo "

            ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/overview/_panel-actions_overview.twig"));
        echo "

            ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "overview_aside_middle", "backend"));
        echo "

            ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["panels"]->getlastmodified($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array())));
        echo "

            ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "overview_aside_bottom", "backend"));
        echo "

        </aside>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 47,  180 => 45,  175 => 43,  170 => 41,  165 => 39,  156 => 33,  151 => 31,  146 => 29,  141 => 27,  135 => 23,  129 => 22,  117 => 20,  104 => 15,  102 => 14,  97 => 13,  91 => 12,  79 => 10,  67 => 8,  60 => 6,  58 => 4,  56 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Content ... > #}

{% from '@bolt/_sub/_record_list.twig' import record_list as list %}
{% import '@bolt/_macro/_panels.twig' as panels %}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Content/*' %}

{% block page_title __('general.phrase.overview') %}

{% block page_subtitle %}
    {{ __(['contenttypes', context.contenttype.slug, 'name', 'plural'], {DEFAULT: context.contenttype.name}) }}
    {% if context.filter %}
        <small>({{ __('general.phrase.filtered-by') }} <em>'{{ context.filter|join(', ') }}'</em>)</small>
    {% endif %}
{% endblock %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}

    <div class=\"row\">
        <div class=\"col-md-8\">

            {{ include('@bolt/_sub/_messages.twig') }}

            {{ widgets('overview_below_header', 'backend') }}

            {{ list(context.contenttype, context.multiplecontent, context.permissions, '', '', context.filter|join(' ')) }}

            {{ widgets('overview_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-4\">

            {{ widgets('overview_aside_top', 'backend') }}

            {{ include('@bolt/overview/_panel-actions_overview.twig') }}

            {{ widgets('overview_aside_middle', 'backend') }}

            {{ panels.lastmodified(context.contenttype.slug) }}

            {{ widgets('overview_aside_bottom', 'backend') }}

        </aside>
    </div>

{% endblock page_main %}
", "@bolt/overview/overview.twig", "");
    }
}
