<?php

/* @bolt/editcontent/fields/_slug.twig */
class __TwigTemplate_02c55272917d144ab04b813b17bb326e04225e6f9cc278d61ea46356035c600a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 48
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_slug.twig", 48);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_slug.twig"));

        $tags = array("set" => 3, "if" => 13, "for" => 20, "import" => 49);
        $filters = array("default" => 4, "length" => 11, "merge" => 21, "capitalize" => 21, "escape" => 61, "join" => 82);
        $functions = array("path" => 33, "__" => 38);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for', 'import'),
                array('default', 'length', 'merge', 'capitalize', 'escape', 'join'),
                array('path', '__')
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
        $context["option"] = array("uses" => ((twig_test_iterable((($this->getAttribute(        // line 4
($context["field"] ?? null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "uses", array()), array())) : (array())))) ? ((($this->getAttribute(($context["field"] ?? null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "uses", array()), array())) : (array()))) : (array(0 => $this->getAttribute(($context["field"] ?? null), "uses", array())))), "viewless" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["context"] ?? null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false)));
        // line 10
        $context["is_empty"] = ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method") == "");
        // line 11
        $context["has_uses"] = (twig_length_filter($this->env, $this->getAttribute(($context["option"] ?? null), "uses", array())) > 0);
        // line 13
        if (($context["is_empty"] ?? null)) {
            // line 14
            $context["mode"] = ((($context["has_uses"] ?? null)) ? ("linked") : ("editable"));
        } else {
            // line 16
            $context["mode"] = "locked";
        }
        // line 19
        $context["uses"] = array();
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["option"] ?? null), "uses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            $context["uses"] = twig_array_merge(($context["uses"] ?? null), array(0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) : (twig_capitalize_string_filter($this->env, $context["key"])))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context["attributes"] = array("slug" => array("class" => "form-control", "id" =>         // line 28
($context["key"] ?? null), "name" =>         // line 29
($context["name"] ?? null), "readonly" => (        // line 30
($context["mode"] ?? null) != "editable"), "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 32
($context["context"] ?? null), "content", array()), "get", array(0 => ($context["key"] ?? null)), "method"), "data-create-slug-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("makeuri")));
        // line 37
        $context["trans"] = array("label_alias" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.slug.unique-alias"), "label_permalink" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.slug.permalink"), "menu_edit" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.slug.button.edit"), "menu_generate" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.slug.button.generate"), "menu_lock" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.slug.button.lock"), "warning" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.slug.message.warning"));
        // line 49
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/fields/_slug.twig", 49);
        // line 51
        $context["fieldset_conf"] = array("contentId" => $this->getAttribute($this->getAttribute(        // line 52
($context["context"] ?? null), "content", array()), "id", array()), "key" =>         // line 53
($context["key"] ?? null), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 54
($context["context"] ?? null), "content", array()), "contenttype", array()), "slug", array()), "uses" => $this->getAttribute(        // line 55
($context["option"] ?? null), "uses", array()));
        // line 48
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("slug");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldSlug");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["option"] ?? null), "viewless", array())) ? ($this->getAttribute(($context["trans"] ?? null), "label_alias", array())) : ($this->getAttribute(($context["trans"] ?? null), "label_permalink", array()))), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-sm-12");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 65
        echo "    <div class=\"col-sm-12\">
        <div class=\"input-group ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["mode"] ?? null), "html", null, true));
        echo "\">";
        // line 68
        echo "            <span class=\"input-group-addon\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "route_prefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "route_prefix", array()), (("/" . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_slug", array())) . "/"))) : ((("/" . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_slug", array())) . "/"))), "html", null, true));
        echo "</span>

            <input";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "slug", array())));
        echo ">

            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"lock";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((((($context["mode"] ?? null) == "locked")) ? (" disabled") : ("")));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> ";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["trans"] ?? null), "menu_lock", array()), "html", null, true));
        echo "</a>
                    </li>
                    ";
        // line 80
        if (twig_length_filter($this->env, $this->getAttribute(($context["option"] ?? null), "uses", array()))) {
            // line 81
            echo "                        <li class=\"link";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((((($context["mode"] ?? null) == "linked")) ? (" disabled") : ("")));
            echo "\" style=\"min-width: 200px;\">
                            <a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> <span>";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["trans"] ?? null), "menu_generate", array()), "html", null, true));
            echo " <var>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter(($context["uses"] ?? null), " + "), "html", null, true));
            echo "</var></span></a>
                        </li>
                    ";
        }
        // line 85
        echo "                    <li class=\"edit";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((((($context["mode"] ?? null) == "editable")) ? (" disabled") : ("")));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-pencil\"></i> ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["trans"] ?? null), "menu_edit", array()), "html", null, true));
        echo "</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 92
        if ( !($context["is_empty"] ?? null)) {
            // line 93
            echo "        <div class=\"col-sm-12 warning hidden\">
            <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["trans"] ?? null), "warning", array()), "html", null, true));
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_slug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 94,  223 => 93,  221 => 92,  212 => 86,  207 => 85,  199 => 82,  194 => 81,  192 => 80,  187 => 78,  183 => 77,  173 => 70,  167 => 68,  164 => 66,  161 => 65,  155 => 64,  143 => 62,  131 => 61,  119 => 59,  107 => 58,  100 => 48,  98 => 55,  97 => 54,  96 => 53,  95 => 52,  94 => 51,  92 => 49,  90 => 37,  88 => 32,  87 => 30,  86 => 29,  85 => 28,  84 => 25,  78 => 21,  74 => 20,  72 => 19,  69 => 16,  66 => 14,  64 => 13,  62 => 11,  60 => 10,  58 => 5,  57 => 4,  56 => 3,  11 => 48,);
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
    uses:  field.uses|default([]) is iterable ? field.uses|default([]) : [field.uses],
    viewless: context.content.contenttype.viewless|default(false)
} %}

{#=== INIT ===========================================================================================================#}

{% set is_empty = context.content.get(contentkey) == '' %}
{% set has_uses = option.uses|length > 0 %}

{% if is_empty %}
    {% set mode = has_uses ? 'linked' : 'editable' %}
{% else %}
    {% set mode = 'locked' %}
{% endif %}

{% set uses = [] %}
{% for key in option.uses %}
    {% set uses = uses|merge([context.contenttype.fields[key].label ?: key|capitalize]) %}
{% endfor %}


{% set attributes = {
    slug: {
        class:     'form-control',
        id:        key,
        name:      name,
        readonly:  mode != 'editable',
        type:      'text',
        value:     context.content.get(key),
        'data-create-slug-url': path('makeuri'),
    }
} %}

{% set trans = {
    label_alias:     __('field.slug.unique-alias'),
    label_permalink: __('field.slug.permalink'),
    menu_edit:       __('field.slug.button.edit'),
    menu_generate:   __('field.slug.button.generate'),
    menu_lock:       __('field.slug.button.lock'),
    warning:         __('field.slug.message.warning'),
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{% set fieldset_conf = {
    contentId: context.content.id,
    key:       key,
    slug:      context.content.contenttype.slug,
    uses:      option.uses,
}%}

{% block fieldset_type 'slug' %}
{% block fieldset_widget 'fieldSlug' %}

{% block fieldset_label_text option.viewless ? trans.label_alias : trans.label_permalink %}
{% block fieldset_label_class 'col-sm-12' %}

{% block fieldset_controls %}
    <div class=\"col-sm-12\">
        <div class=\"input-group {{ mode }}\">
                                            {#- https://github.com/bolt/bolt/pull/4766 #}
            <span class=\"input-group-addon\">{{ field.route_prefix|default('/' ~ context.contenttype.singular_slug ~ '/') }}</span>

            <input{{ macro.attr(attributes.slug) }}>

            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"lock{{ mode == 'locked' ? ' disabled' : '' }}\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> {{ trans.menu_lock }}</a>
                    </li>
                    {% if option.uses|length %}
                        <li class=\"link{{ mode == 'linked' ? ' disabled' : '' }}\" style=\"min-width: 200px;\">
                            <a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> <span>{{ trans.menu_generate }} <var>{{ uses|join(' + ')}}</var></span></a>
                        </li>
                    {% endif %}
                    <li class=\"edit{{ mode == 'editable' ? ' disabled' : '' }}\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-pencil\"></i> {{ trans.menu_edit }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {% if not is_empty %}
        <div class=\"col-sm-12 warning hidden\">
            <i class=\"fa fa-exclamation-triangle\"></i> {{ trans.warning }}
        </div>
    {% endif %}
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_slug.twig", "");
    }
}
