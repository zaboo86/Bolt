<?php

/* @bolt/editcontent/fields/_templateselect.twig */
class __TwigTemplate_a6389c22b2c6d4399ed93fba5bd4d96bfa426229951852fdbf1140c1eb6721fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 31
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_templateselect.twig", 31);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_templateselect.twig"));

        $tags = array("set" => 3, "for" => 13, "from" => 48);
        $filters = array("default" => 4, "merge" => 14, "escape" => 42);
        $functions = array("listtemplates" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'from'),
                array('default', 'merge', 'escape'),
                array('listtemplates')
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
        $context["option"] = array("filter" => (($this->getAttribute(        // line 4
($context["field"] ?? null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "filter", array()), array())) : (array())), "label" => $this->getAttribute(        // line 5
($context["field"] ?? null), "label", array()), "info" => (($this->getAttribute(        // line 6
($context["field"] ?? null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "info", array()), "")) : ("")));
        // line 12
        $context["options"] = array();
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->listTemplates($this->getAttribute(($context["option"] ?? null), "filter", array())));
        foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
            // line 14
            $context["options"] = twig_array_merge(($context["options"] ?? null), array(0 => array("value" =>             // line 15
$context["filename"], "text" => (            // line 16
$context["name"] . ((twig_in_filter($context["filename"], $this->getAttribute(($context["context"] ?? null), "fieldtemplates", array()))) ? (" (+)") : (""))), "selected" => ($this->getAttribute($this->getAttribute(            // line 17
($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method") == $context["filename"]))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        $context["buic_opt_select"] = array("clear" => true, "id" =>         // line 24
($context["key"] ?? null), "name" =>         // line 25
($context["name"] ?? null), "options" =>         // line 26
($context["options"] ?? null));
        // line 33
        $context["fieldset_conf"] = array("currentHas" => $this->getAttribute($this->getAttribute(        // line 34
($context["context"] ?? null), "has", array()), "templatefields", array()), "current" => $this->getAttribute($this->getAttribute(        // line 35
($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method"), "fieldTemplates" => $this->getAttribute(        // line 36
($context["context"] ?? null), "fieldtemplates", array()));
        // line 31
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("templateselect");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldTemplateselect");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["labelkey"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "info", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-sm-3");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 48
        echo "    ";
        $context["__internal_900a51aebcbca8e869b64363ae8d1e049526931cdb4a45c93f53450b785082e4"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_templateselect.twig", 48);
        // line 49
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_900a51aebcbca8e869b64363ae8d1e049526931cdb4a45c93f53450b785082e4"]->getbuic_select(($context["buic_opt_select"] ?? null)));
        echo "
    </div>
    <div class=\"hidden col-sm-9 col-sm-offset-3\">
        <p class=\"form-control-static\"></p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 51,  176 => 49,  173 => 48,  167 => 47,  155 => 45,  143 => 44,  131 => 43,  119 => 42,  107 => 40,  95 => 39,  88 => 31,  86 => 36,  85 => 35,  84 => 34,  83 => 33,  81 => 26,  80 => 25,  79 => 24,  78 => 22,  72 => 17,  71 => 16,  70 => 15,  69 => 14,  65 => 13,  63 => 12,  61 => 6,  60 => 5,  59 => 4,  58 => 3,  11 => 31,);
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
    filter:  field.filter|default({}),
    label:   field.label,
    info:    field.info|default('')
} %}

{#=== INIT ===========================================================================================================#}

{# Build the select options array #}
{% set options = [] %}
{% for filename, name in listtemplates(option.filter) %}
    {% set options = options|merge([{
        value:     filename,
        text:      name ~ (filename in context.fieldtemplates ? ' (+)' : ''),
        selected:  context.content.get(contentkey) == filename,
    }]) %}
{% endfor %}

{# BUIC options #}
{% set buic_opt_select = {
    'clear':    true,
    'id':       key,
    'name':     name,
    'options':  options,
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% set fieldset_conf = {
    'currentHas':       context.has.templatefields,
    'current':          context.content.get(contentkey),
    'fieldTemplates':   context.fieldtemplates
}%}

{% block fieldset_type 'templateselect' %}
{% block fieldset_widget 'fieldTemplateselect' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'col-sm-3' %}
{% block fieldset_label_for   key %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_select.twig' import buic_select %}

    <div class=\"col-sm-9\">
        {{ buic_select(buic_opt_select) }}
    </div>
    <div class=\"hidden col-sm-9 col-sm-offset-3\">
        <p class=\"form-control-static\"></p>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_templateselect.twig", "");
    }
}
