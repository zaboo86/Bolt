<?php

/* @bolt/editcontent/fields/_relationship.twig */
class __TwigTemplate_839c17bada6df0ab18dab4631687db2d9ff0aab7446bf6a79df328e3e03bc1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 43
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_relationship.twig", 43);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_relationship.twig"));

        $tags = array("set" => 4, "for" => 12, "from" => 52);
        $filters = array("default" => 4, "merge" => 14, "escape" => 48, "capitalize" => 48);
        $functions = array("include" => 26, "template_from_string" => 26);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'from'),
                array('default', 'merge', 'escape', 'capitalize'),
                array('include', 'template_from_string')
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
        $context["format"] = (($this->getAttribute(($context["relation"] ?? null), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["relation"] ?? null), "format", array()), "{{ item.title|escape }} (№ {{ item.id }})")) : ("{{ item.title|escape }} (№ {{ item.id }})"));
        // line 7
        $context["groupby"] = (($this->getAttribute(($context["relation"] ?? null), "groupby", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["relation"] ?? null), "groupby", array()), false)) : (false));
        // line 10
        $context["values"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "relation", array(), "any", false, true), "getField", array(0 => ($context["relcontenttype"] ?? null), 1 => true, 2 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "__toString", array(), "method"), 3 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "id", array())), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "relation", array(), "any", false, true), "getField", array(0 => ($context["relcontenttype"] ?? null), 1 => true, 2 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "__toString", array(), "method"), 3 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "id", array())), "method"), array())) : (array()));
        // line 11
        $context["relselect"] = array();
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            $context["relselect"] = twig_array_merge(($context["relselect"] ?? null), array(0 => $this->getAttribute($context["item"], "toid", array())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        $context["options"] = array();
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["context"] ?? null), "relations_list", array()), ($context["relcontenttype"] ?? null), array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            $context["selectedbyrelation"] = ((($context["relcontenttype"] ?? null) == $this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "get", array(0 => "relation"), "method")) && ($this->getAttribute(            // line 22
$context["item"], "id", array()) == $this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "get", array(0 => "relationid"), "method")));
            // line 24
            $context["options"] = twig_array_merge(($context["options"] ?? null), array(0 => array("value" => $this->getAttribute(            // line 25
$context["item"], "id", array()), "text" => twig_include($this->env, $context, twig_template_from_string($this->env,             // line 26
($context["format"] ?? null)), array("item" => $context["item"], "title" => $this->getAttribute($context["item"], "title", array()), "id" => $this->getAttribute($context["item"], "id", array())), true, false, true), "group" => ((            // line 27
($context["groupby"] ?? null)) ? ((($this->getAttribute($this->getAttribute($context["item"], "values", array(), "any", false, true), ($context["groupby"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "values", array(), "any", false, true), ($context["groupby"] ?? null), array(), "array"), false)) : (false))) : (false)), "selected" => (twig_in_filter($this->getAttribute(            // line 28
$context["item"], "id", array()), ($context["relselect"] ?? null)) || ($context["selectedbyrelation"] ?? null)))));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        $context["buic_opt_select"] = array("name" => (("relation[" .         // line 34
($context["relcontenttype"] ?? null)) . "][]"), "id" => ("relation-" .         // line 35
($context["relcontenttype"] ?? null)), "multiple" => ($this->getAttribute(        // line 36
($context["relation"] ?? null), "multiple", array(), "any", true, true) && ($this->getAttribute(($context["relation"] ?? null), "multiple", array()) == 1)), "options" =>         // line 37
($context["options"] ?? null), "clear" => true);
        // line 43
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("relationship");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldRelationship");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["relation"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["relation"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, ($context["relcontenttype"] ?? null)))) : (twig_capitalize_string_filter($this->env, ($context["relcontenttype"] ?? null)))), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-sm-4");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 52
        echo "    ";
        $context["__internal_d7c273f38fabd5fc63a40f3b66add9192d58f4a911817bfc448d28b3f981b73a"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_relationship.twig", 52);
        // line 53
        echo "
    <div class=\"col-sm-8\">
        ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_d7c273f38fabd5fc63a40f3b66add9192d58f4a911817bfc448d28b3f981b73a"]->getbuic_select(($context["buic_opt_select"] ?? null)));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_relationship.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 55,  184 => 53,  181 => 52,  175 => 51,  163 => 49,  151 => 48,  139 => 46,  127 => 45,  120 => 43,  118 => 37,  117 => 36,  116 => 35,  115 => 34,  114 => 33,  100 => 28,  99 => 27,  98 => 26,  97 => 25,  96 => 24,  94 => 22,  93 => 21,  76 => 20,  74 => 18,  68 => 14,  64 => 12,  62 => 11,  60 => 10,  58 => 7,  56 => 4,  11 => 43,);
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

{# We set the 'format' for the rendering of each <option>. With fallback to a sensible default. #}
{% set format = relation.format|default(\"{{ item.title|escape }} (№ {{ item.id }})\") %}

{# Use option groups #}
{% set groupby = relation.groupby|default(false) %}

{# Currently selected relationship values #}
{% set values = context.content.relation.getField(relcontenttype, true, context.contenttype.__toString(), context.content.id)|default([]) %}
{% set relselect = [] %}
{% for item in values %}
    {# We use item.toid instead of item.to_id here to make sure that inversed relations are picked up correctly #}
    {% set relselect =  relselect|merge([item.toid]) %}
{% endfor %}

{# Build the select options array #}
{% set options = [] %}

{% for item in context.relations_list[relcontenttype] %}
    {% set selectedbyrelation = relcontenttype == global.request.get('relation') and
                                item.id == global.request.get('relationid') %}

    {% set options = options|merge([{
        value:    item.id,
        text:     include(template_from_string(format), variables = {'item' : item, 'title' : item.title, 'id' : item.id}, sandboxed = true),
        group:    groupby ? item.values[groupby]|default(false) : false,
        selected: (item.id in relselect) or selectedbyrelation,
    }]) %}
{% endfor %}

{# BUIC options #}
{% set buic_opt_select = {
    'name':     'relation[' ~ relcontenttype ~ '][]',
    'id':       'relation-' ~ relcontenttype,
    'multiple': relation.multiple is defined and relation.multiple == 1,
    'options':  options,
    'clear':    true,
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'relationship' %}
{% block fieldset_widget 'fieldRelationship' %}

{% block fieldset_label_text  relation.label|default(relcontenttype|capitalize) %}
{% block fieldset_label_class 'col-sm-4' %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_select.twig' import buic_select %}

    <div class=\"col-sm-8\">
        {{ buic_select(buic_opt_select) }}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_relationship.twig", "");
    }
}
