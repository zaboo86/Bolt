<?php

/* @bolt/_base/_fieldset.twig */
class __TwigTemplate_14aa3e35ce5e3e76cb76c4b954f218aba761dbd9a05011c615529d162cc4f3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_fieldset.twig"));

        $tags = array("from" => 1, "import" => 2, "set" => 6, "if" => 8, "block" => 33);
        $filters = array("default" => 10, "json_encode" => 11, "merge" => 19, "escape" => 35);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'import', 'set', 'if', 'block'),
                array('default', 'json_encode', 'merge', 'escape'),
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
        $context["__internal_025f2fda85e091875f9f62b9eb2a8d2192aa85395ff34f0a972c24749a7ca502"] = $this->loadTemplate("@bolt/_buic/_info.twig", "@bolt/_base/_fieldset.twig", 1);
        // line 2
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/_base/_fieldset.twig", 2);
        // line 3
        echo "
";
        // line 5
        echo "
";
        // line 6
        $context["widget_name"] = ((        $this->hasBlock("fieldset_widget", $context, $blocks)) ? (        $this->renderBlock("fieldset_widget", $context, $blocks)) : (""));
        // line 7
        echo "
";
        // line 8
        if ( !($context["widget_name"] ?? null)) {
            // line 9
            echo "    ";
            $context["data_bolt_widget"] = "";
        } elseif (twig_test_iterable(((        // line 10
array_key_exists("fieldset_conf", $context)) ? (_twig_default_filter(($context["fieldset_conf"] ?? null))) : ("")))) {
            // line 11
            echo "    ";
            $context["data_bolt_widget"] = twig_jsonencode_filter(array(($context["widget_name"] ?? null) => ($context["fieldset_conf"] ?? null)));
        } else {
            // line 13
            echo "    ";
            $context["data_bolt_widget"] = ($context["widget_name"] ?? null);
        }
        // line 15
        echo "
";
        // line 16
        $context["attributes_fieldset"] = twig_array_merge(array("class" => ("form-group bolt-field-" .         $this->renderBlock("fieldset_type", $context, $blocks)), "data-bolt-widget" =>         // line 18
($context["data_bolt_widget"] ?? null)), ((        // line 19
array_key_exists("attributes_fieldset", $context)) ? (_twig_default_filter(($context["attributes_fieldset"] ?? null), array())) : (array())));
        // line 20
        echo "
";
        // line 21
        $context["attributes_label"] = array("class" => (("main " .         $this->renderBlock("fieldset_label_class", $context, $blocks)) . (((        $this->renderBlock("fieldset_label_class", $context, $blocks) == "col-xs-12")) ? ("") : (" control-label"))), "for" => (((        $this->hasBlock("fieldset_label_for", $context, $blocks) &&  !(null ===         $this->renderBlock("fieldset_label_for", $context, $blocks)))) ? (        $this->renderBlock("fieldset_label_for", $context, $blocks)) : ("")));
        // line 25
        echo "
";
        // line 26
        if (((        $this->hasBlock("fieldset_label_info", $context, $blocks) &&         $this->hasBlock("fieldset_label_text", $context, $blocks)) &&  !twig_test_empty(        $this->renderBlock("fieldset_label_info", $context, $blocks)))) {
            // line 27
            echo "    ";
            $context["field_info"] = $context["__internal_025f2fda85e091875f9f62b9eb2a8d2192aa85395ff34f0a972c24749a7ca502"]->getbuic_info(            $this->renderBlock("fieldset_label_text", $context, $blocks),             $this->renderBlock("fieldset_label_info", $context, $blocks));
        }
        // line 29
        echo "
";
        // line 31
        echo "
<fieldset";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr(($context["attributes_fieldset"] ?? null)));
        echo ">
    <legend class=\"sr-only\">";
        // line 33
        $this->displayBlock('fieldset_label_text', $context, $blocks);
        echo "</legend>
    ";
        // line 34
        if ((        $this->hasBlock("fieldset_label_text", $context, $blocks) &&  !twig_test_empty(        $this->renderBlock("fieldset_label_text", $context, $blocks)))) {
            // line 35
            echo "        <label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr(($context["attributes_label"] ?? null)));
            echo ">";
            $this->displayBlock("fieldset_label_text", $context, $blocks);
            echo ": ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("field_info", $context)) ? (_twig_default_filter(($context["field_info"] ?? null), "")) : ("")), "html", null, true));
            echo "</label>
    ";
        }
        // line 37
        echo "    ";
        $this->displayBlock('fieldset_controls', $context, $blocks);
        // line 38
        echo "</fieldset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  136 => 33,  128 => 38,  125 => 37,  115 => 35,  113 => 34,  109 => 33,  105 => 32,  102 => 31,  99 => 29,  95 => 27,  93 => 26,  90 => 25,  88 => 21,  85 => 20,  83 => 19,  82 => 18,  81 => 16,  78 => 15,  74 => 13,  70 => 11,  68 => 10,  65 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@bolt/_buic/_info.twig' import buic_info %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{#=== INIT ===========================================================================================================#}

{% set widget_name = block('fieldset_widget') is defined ? block('fieldset_widget') : '' %}

{% if not widget_name %}
    {% set data_bolt_widget = '' %}
{% elseif fieldset_conf|default() is iterable %}
    {% set data_bolt_widget = {(widget_name): fieldset_conf}|json_encode %}
{% else %}
    {% set data_bolt_widget = widget_name %}
{% endif %}

{% set attributes_fieldset = {
    'class':             'form-group bolt-field-' ~ block('fieldset_type'),
    'data-bolt-widget':  data_bolt_widget,
}|merge(attributes_fieldset|default({})) %}

{% set attributes_label = {
    class:  'main ' ~ block('fieldset_label_class') ~ (block('fieldset_label_class') == 'col-xs-12' ? '' : ' control-label'),
    for:    block('fieldset_label_for') ?? '',
} %}

{% if block('fieldset_label_info') is defined and block('fieldset_label_text') is defined and block('fieldset_label_info') is not empty %}
    {% set field_info = buic_info(block('fieldset_label_text'), block('fieldset_label_info')) %}
{% endif %}

{#=== OUTPUT =========================================================================================================#}

<fieldset{{ macro.attr(attributes_fieldset) }}>
    <legend class=\"sr-only\">{% block fieldset_label_text %}{% endblock fieldset_label_text %}</legend>
    {% if block('fieldset_label_text') is defined and block('fieldset_label_text') is not empty %}
        <label{{ macro.attr(attributes_label) }}>{{ block('fieldset_label_text') }}: {{ field_info|default('') }}</label>
    {% endif %}
    {% block fieldset_controls %}{% endblock fieldset_controls %}
</fieldset>
", "@bolt/_base/_fieldset.twig", "");
    }
}
