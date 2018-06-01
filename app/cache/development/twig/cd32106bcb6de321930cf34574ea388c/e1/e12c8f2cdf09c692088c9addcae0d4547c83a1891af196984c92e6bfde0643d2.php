<?php

/* @bolt/editcontent/fields/_tags.twig */
class __TwigTemplate_ed6c5102cf73ac202dfeed661e930d91010cd77b4899f116fb290fbed1667d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_tags.twig", 30);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_tags.twig"));

        $tags = array("set" => 3, "for" => 10, "from" => 44, "if" => 48);
        $filters = array("default" => 10, "merge" => 11, "escape" => 40);
        $functions = array("path" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'from', 'if'),
                array('default', 'merge', 'escape'),
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

        // line 3
        $context["attributes_fieldset"] = array("data-tags-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tags", array("taxonomytype" => $this->getAttribute(        // line 4
($context["taxonomy"] ?? null), "slug", array()))), "data-popular-tags-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("populartags", array("taxonomytype" => $this->getAttribute(        // line 5
($context["taxonomy"] ?? null), "slug", array()))));
        // line 9
        $context["options"] = array();
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "get", array(0 => $this->getAttribute(($context["taxonomy"] ?? null), "slug", array())), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "get", array(0 => $this->getAttribute(($context["taxonomy"] ?? null), "slug", array())), "method"), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            $context["options"] = twig_array_merge(($context["options"] ?? null), array(0 => array("value" => $this->getAttribute(            // line 12
$context["tag"], "slug", array()), "text" => $this->getAttribute(            // line 13
$context["tag"], "name", array()), "selected" => true)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        $context["buic_opt_select"] = array("clear" => true, "id" => ("taxonomy-" . $this->getAttribute(        // line 21
($context["taxonomy"] ?? null), "slug", array())), "multiple" => true, "name" => (("taxonomy[" . $this->getAttribute(        // line 23
($context["taxonomy"] ?? null), "slug", array())) . "][]"), "options" =>         // line 24
($context["options"] ?? null), "class" => "tags-select2");
        // line 35
        $context["fieldset_conf"] = array("slug" => $this->getAttribute(        // line 36
($context["taxonomy"] ?? null), "slug", array()), "allowSpaces" => $this->getAttribute(        // line 37
($context["taxonomy"] ?? null), "allow_spaces", array()));
        // line 30
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("tags");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldTags");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "name", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-sm-3");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 44
        echo "    ";
        $context["__internal_3f26a1e94042040aed674f2eda8aebaae5184b10e9d951e4aded1bd76ac82436"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_tags.twig", 44);
        // line 45
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3f26a1e94042040aed674f2eda8aebaae5184b10e9d951e4aded1bd76ac82436"]->getbuic_select(($context["buic_opt_select"] ?? null)));
        echo "
        ";
        // line 48
        if ($this->getAttribute(($context["taxonomy"] ?? null), "tagcloud", array())) {
            // line 49
            echo "            <div class=\"tagcloud\"></div>
        ";
        }
        // line 51
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  157 => 49,  155 => 48,  151 => 47,  147 => 45,  144 => 44,  138 => 43,  126 => 41,  114 => 40,  102 => 33,  90 => 32,  83 => 30,  81 => 37,  80 => 36,  79 => 35,  77 => 24,  76 => 23,  75 => 21,  74 => 19,  68 => 13,  67 => 12,  66 => 11,  62 => 10,  60 => 9,  58 => 5,  57 => 4,  56 => 3,  11 => 30,);
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

{% set attributes_fieldset = {
    'data-tags-url': path('tags', {'taxonomytype': taxonomy.slug}),
    'data-popular-tags-url': path('populartags', {'taxonomytype': taxonomy.slug}),
} %}

{# Build the select options array #}
{% set options = [] %}
{% for tag in context.content.get(taxonomy.slug)|default([]) %}
    {% set options = options|merge([{
        value:     tag.slug,
        text:      tag.name,
        selected:  true,
    }]) %}
{% endfor %}

{# BUIC options #}
{% set buic_opt_select = {
    'clear':     true,
    'id':        'taxonomy-' ~ taxonomy.slug,
    'multiple':  true,
    'name':      'taxonomy[' ~ taxonomy.slug ~ '][]',
    'options':   options,
    'class':     'tags-select2'
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'tags' %}
{% block fieldset_widget 'fieldTags' %}

{% set fieldset_conf = {
    slug: taxonomy.slug,
    allowSpaces: taxonomy.allow_spaces,
}%}

{% block fieldset_label_text  taxonomy.name %}
{% block fieldset_label_class 'col-sm-3' %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_select.twig' import buic_select %}

    <div class=\"col-sm-9\">
        {{ buic_select(buic_opt_select) }}
        {% if taxonomy.tagcloud %}
            <div class=\"tagcloud\"></div>
        {% endif %}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_tags.twig", "");
    }
}
