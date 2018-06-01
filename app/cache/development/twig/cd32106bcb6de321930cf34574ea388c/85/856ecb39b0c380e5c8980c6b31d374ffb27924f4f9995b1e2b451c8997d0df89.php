<?php

/* @bolt/editcontent/fields/_categories.twig */
class __TwigTemplate_8f4c4cdc0ea9995c585a07ddf4b82fe2f33e5abca512b22d25fe9695d311655e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_categories.twig", 25);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_label_for' => array($this, 'block_fieldset_label_for'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_categories.twig"));

        $tags = array("set" => 4, "for" => 5, "from" => 35);
        $filters = array("merge" => 6, "default" => 15, "escape" => 30);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'from'),
                array('merge', 'default', 'escape'),
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

        // line 4
        $context["options"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
            // line 6
            $context["options"] = twig_array_merge(($context["options"] ?? null), array(0 => array("value" =>             // line 7
$context["slug"], "text" =>             // line 8
$context["cat"], "selected" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
($context["context"] ?? null), "content", array()), "taxonomy", array()), "containsKeyValue", array(0 => $this->getAttribute(($context["taxonomy"] ?? null), "slug", array()), 1 => $context["slug"]), "method"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context["buic_opt_select"] = array("all" => (($this->getAttribute(        // line 15
($context["taxonomy"] ?? null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taxonomy"] ?? null), "multiple", array()), false)) : (false)), "clear" => true, "id" => ("taxonomy-" . $this->getAttribute(        // line 17
($context["taxonomy"] ?? null), "slug", array())), "multiple" => (($this->getAttribute(        // line 18
($context["taxonomy"] ?? null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taxonomy"] ?? null), "multiple", array()), false)) : (false)), "name" => (("taxonomy[" . $this->getAttribute(        // line 19
($context["taxonomy"] ?? null), "slug", array())) . "][]"), "options" =>         // line 20
($context["options"] ?? null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("categories");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldCategories");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "name", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-sm-3");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ("taxonomy-" . $this->getAttribute(($context["taxonomy"] ?? null), "slug", array())), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 35
        echo "    ";
        $context["__internal_a6a6c58aa6c2bf185205d7b6bc0f7705cb2d5d2033965b61393a34c4ad623c58"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_categories.twig", 35);
        // line 36
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_a6a6c58aa6c2bf185205d7b6bc0f7705cb2d5d2033965b61393a34c4ad623c58"]->getbuic_select(($context["buic_opt_select"] ?? null)));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 38,  155 => 36,  152 => 35,  146 => 34,  134 => 32,  122 => 31,  110 => 30,  98 => 28,  86 => 27,  79 => 25,  77 => 20,  76 => 19,  75 => 18,  74 => 17,  73 => 15,  72 => 14,  66 => 9,  65 => 8,  64 => 7,  63 => 6,  59 => 5,  57 => 4,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#=== INIT ===========================================================================================================#}

{# Build the select options array #}
{% set options = [] %}
{% for slug, cat in taxonomy.options %}
    {% set options = options|merge([{
        value:     slug,
        text:      cat,
        selected:  context.content.taxonomy.containsKeyValue(taxonomy.slug, slug),
    }]) %}
{% endfor %}

{# BUIC options #}
{% set buic_opt_select = {
    'all':       taxonomy.multiple|default(false),
    'clear':     true,
    'id':        'taxonomy-' ~ taxonomy.slug,
    'multiple':  taxonomy.multiple|default(false),
    'name':      'taxonomy[' ~ taxonomy.slug ~ '][]',
    'options':   options,
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'categories' %}
{% block fieldset_widget 'fieldCategories' %}

{% block fieldset_label_text  taxonomy.name %}
{% block fieldset_label_class 'col-sm-3' %}
{% block fieldset_label_for   'taxonomy-' ~ taxonomy.slug %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_select.twig' import buic_select %}

    <div class=\"col-sm-9\">
        {{ buic_select(buic_opt_select) }}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_categories.twig", "");
    }
}
