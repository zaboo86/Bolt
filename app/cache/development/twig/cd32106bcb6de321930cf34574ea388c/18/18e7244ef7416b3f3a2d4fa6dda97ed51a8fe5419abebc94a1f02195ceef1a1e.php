<?php

/* @bolt/editcontent/fields/_html.twig */
class __TwigTemplate_1f63fbb07dd8e5e9c47b052a359c8372793888f91b6f8274c4b056739af9fbcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 38
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_html.twig", 38);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_html.twig"));

        $tags = array("set" => 3, "if" => 17, "import" => 39);
        $filters = array("trim" => 4, "default" => 5, "merge" => 18, "json_encode" => 29, "escape" => 44);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'import'),
                array('trim', 'default', 'merge', 'json_encode', 'escape'),
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

        // line 3
        $context["option"] = array("class" => twig_trim_filter(("form-control " . $this->getAttribute(        // line 4
($context["field"] ?? null), "class", array()))), "height" => (($this->getAttribute(        // line 5
($context["field"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "height", array()), "")) : ("")), "label" => $this->getAttribute(        // line 6
($context["field"] ?? null), "label", array()), "required" => (($this->getAttribute(        // line 7
($context["field"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
($context["field"] ?? null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
($context["field"] ?? null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 10
($context["field"] ?? null), "options", array(), "any", false, true), "ckeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array(), "any", false, true), "ckeditor", array()), "")) : ("")));
        // line 15
        $context["param"] = array();
        // line 17
        if ($this->getAttribute(($context["option"] ?? null), "height", array())) {
            // line 18
            $context["param"] = twig_array_merge(($context["param"] ?? null), array("height" => $this->getAttribute(($context["option"] ?? null), "height", array())));
        }
        // line 21
        if ($this->getAttribute(($context["option"] ?? null), "options", array())) {
            // line 22
            $context["param"] = twig_array_merge(($context["param"] ?? null), array("ckeditor" => $this->getAttribute(($context["option"] ?? null), "options", array())));
        }
        // line 25
        $context["attributes"] = array("html" => array("class" => ($this->getAttribute(        // line 27
($context["option"] ?? null), "class", array()) . " ckeditor"), "data_errortext" => $this->getAttribute(        // line 28
($context["option"] ?? null), "errortext", array()), "data_param" => ((        // line 29
($context["param"] ?? null)) ? (twig_jsonencode_filter(($context["param"] ?? null))) : ("")), "id" =>         // line 30
($context["key"] ?? null), "name" =>         // line 31
($context["name"] ?? null), "required" => $this->getAttribute(        // line 32
($context["option"] ?? null), "required", array())));
        // line 39
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/fields/_html.twig", 39);
        // line 38
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("html");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldHtml");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["labelkey"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "info", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-xs-12");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 50
        echo "    <div class=\"col-xs-12\">
        <textarea";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "html", array())));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "get", array(0 => ($context["contentkey"] ?? null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "get", array(0 => ($context["contentkey"] ?? null)), "method"), "")) : ("")), "html", null, true));
        echo "</textarea>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 51,  174 => 50,  168 => 49,  156 => 47,  144 => 46,  132 => 45,  120 => 44,  108 => 42,  96 => 41,  89 => 38,  87 => 39,  85 => 32,  84 => 31,  83 => 30,  82 => 29,  81 => 28,  80 => 27,  79 => 25,  76 => 22,  74 => 21,  71 => 18,  69 => 17,  67 => 15,  65 => 10,  64 => 9,  63 => 8,  62 => 7,  61 => 6,  60 => 5,  59 => 4,  58 => 3,  11 => 38,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#=== OPTIONS ========================================================================================================#}

{% set option = {
    class:     ('form-control ' ~ field.class)|trim,
    height:    field.height|default(''),
    label:     field.label,
    required:  field.required|default(false),
    errortext: field.error|default(''),
    info:      field.info|default(''),
    options:   field.options.ckeditor|default('')
} %}

{#=== INIT ===========================================================================================================#}

{% set param = {} %}

{% if option.height %}
    {% set param = param|merge({height: option.height}) %}
{% endif %}

{% if option.options %}
    {% set param = param|merge({ckeditor: option.options}) %}
{% endif %}

{% set attributes = {
    html: {
        class:           option.class ~ ' ckeditor',
        data_errortext:  option.errortext,
        data_param:      param ? param|json_encode : '',
        id:              key,
        name:            name,
        required:        option.required,
    }
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{% block fieldset_type 'html' %}
{% block fieldset_widget 'fieldHtml' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'col-xs-12' %}
{% block fieldset_label_for   key %}

{% block fieldset_controls %}
    <div class=\"col-xs-12\">
        <textarea{{ macro.attr(attributes.html) }}>{{ context.content.get(contentkey)|default('') }}</textarea>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_html.twig", "");
    }
}
