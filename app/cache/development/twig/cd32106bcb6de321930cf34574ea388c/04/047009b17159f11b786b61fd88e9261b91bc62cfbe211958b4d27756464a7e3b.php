<?php

/* @bolt/editcontent/fields/_text.twig */
class __TwigTemplate_3d304fea99f0cfe80a50aacadbf73327a456aa785aed31a4585b6926fba7214c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_text.twig", 40);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_text.twig"));

        $tags = array("set" => 3, "import" => 41);
        $filters = array("trim" => 4, "default" => 6, "escape" => 46);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'import'),
                array('trim', 'default', 'escape'),
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
($context["field"] ?? null), "class", array()))), "label" => $this->getAttribute(        // line 5
($context["field"] ?? null), "label", array()), "pattern" => (($this->getAttribute(        // line 6
($context["field"] ?? null), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "pattern", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 7
($context["field"] ?? null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "placeholder", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
($context["field"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
($context["field"] ?? null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "error", array()), "")) : ("")), "readonly" => (($this->getAttribute(        // line 10
($context["field"] ?? null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), false)) : (false)), "title" => (($this->getAttribute(        // line 11
($context["field"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "title", array()), "")) : ("")), "variant" => $this->getAttribute(        // line 12
($context["field"] ?? null), "variant", array()), "info" => (($this->getAttribute(        // line 13
($context["field"] ?? null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "info", array()), "")) : ("")));
        // line 19
        $context["attributes"] = array("text" => array("class" => $this->getAttribute(        // line 21
($context["option"] ?? null), "class", array()), "data_errortext" => $this->getAttribute(        // line 22
($context["option"] ?? null), "errortext", array()), "id" =>         // line 23
($context["key"] ?? null), "maxlength" => 255, "name" =>         // line 25
($context["name"] ?? null), "pattern" => ((($this->getAttribute(        // line 26
($context["option"] ?? null), "pattern", array()) && !twig_in_filter($this->getAttribute(($context["option"] ?? null), "pattern", array()), array(0 => "url", 1 => "email")))) ? ($this->getAttribute(($context["option"] ?? null), "pattern", array())) : ("")), "placeholder" => $this->getAttribute(        // line 27
($context["option"] ?? null), "placeholder", array()), "readonly" => $this->getAttribute(        // line 28
($context["option"] ?? null), "readonly", array()), "required" => $this->getAttribute(        // line 29
($context["option"] ?? null), "required", array()), "title" => $this->getAttribute(        // line 30
($context["option"] ?? null), "title", array()), "type" => ((twig_in_filter($this->getAttribute(        // line 31
($context["option"] ?? null), "pattern", array()), array(0 => "url", 1 => "email"))) ? ($this->getAttribute(($context["option"] ?? null), "pattern", array())) : ("text")), "value" => (($this->getAttribute($this->getAttribute(        // line 32
($context["context"] ?? null), "content", array(), "any", false, true), "get", array(0 => ($context["contentkey"] ?? null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "get", array(0 => ($context["contentkey"] ?? null)), "method"), "")) : (""))));
        // line 36
        $context["class"] = ((($this->getAttribute(($context["option"] ?? null), "variant", array()) == "inline")) ? (array(0 => "col-sm-3", 1 => "col-sm-9")) : (array(0 => "col-xs-12", 1 => "col-xs-12")));
        // line 41
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/fields/_text.twig", 41);
        // line 40
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("text");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldText");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["labelkey"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "info", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ("control-label " . $this->getAttribute(($context["class"] ?? null), 0, array(), "array")), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 52
        echo "    <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? null), 1, array(), "array"), "html", null, true));
        echo "\">
        <input";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "text", array())));
        echo ">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  172 => 52,  166 => 51,  154 => 49,  142 => 48,  130 => 47,  118 => 46,  106 => 44,  94 => 43,  87 => 40,  85 => 41,  83 => 36,  81 => 32,  80 => 31,  79 => 30,  78 => 29,  77 => 28,  76 => 27,  75 => 26,  74 => 25,  73 => 23,  72 => 22,  71 => 21,  70 => 19,  68 => 13,  67 => 12,  66 => 11,  65 => 10,  64 => 9,  63 => 8,  62 => 7,  61 => 6,  60 => 5,  59 => 4,  58 => 3,  11 => 40,);
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
    class:        ('form-control ' ~ field.class)|trim,
    label:        field.label,
    pattern:      field.pattern|default(''),
    placeholder:  field.placeholder|default(''),
    required:     field.required|default(false),
    errortext:    field.error|default(''),
    readonly:     field.readonly|default(false),
    title:        field.title|default(''),
    variant:      field.variant,
    info:         field.info|default('')
} %}
{# variant[inline] #}

{#=== INIT ===========================================================================================================#}

{% set attributes = {
    text: {
        class:           option.class,
        data_errortext:  option.errortext,
        id:              key,
        maxlength:       255,
        name:            name,
        pattern:         (option.pattern and option.pattern not in ['url', 'email']) ? option.pattern : '',
        placeholder:     option.placeholder,
        readonly:        option.readonly,
        required:        option.required,
        title:           option.title,
        type:            (option.pattern in ['url', 'email']) ? option.pattern : 'text',
        value:           context.content.get(contentkey)|default(''),
    }
} %}

{% set class = option.variant == 'inline' ? ['col-sm-3', 'col-sm-9'] : ['col-xs-12', 'col-xs-12'] %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{% block fieldset_type 'text' %}
{% block fieldset_widget 'fieldText' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'control-label ' ~ class[0] %}
{% block fieldset_label_for   key %}

{% block fieldset_controls %}
    <div class=\"{{ class[1] }}\">
        <input{{ macro.attr(attributes.text) }}>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_text.twig", "");
    }
}
