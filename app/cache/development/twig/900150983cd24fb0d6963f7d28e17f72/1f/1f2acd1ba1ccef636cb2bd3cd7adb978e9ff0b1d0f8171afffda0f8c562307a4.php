<?php

/* @bolt/editcontent/fields/_meta.twig */
class __TwigTemplate_6cb0e113bc94aeab94daef66461acbe221de821affb63ebcb2ccb103171a3e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 50
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_meta.twig", 50);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_meta.twig"));

        $tags = array("set" => 3, "import" => 51, "from" => 60, "if" => 63, "for" => 88);
        $filters = array("date" => 15, "length" => 27, "escape" => 57);
        $functions = array("__" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'import', 'from', 'if', 'for'),
                array('date', 'length', 'escape'),
                array('__')
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
        $context["attributes"] = array("id" => array("class" => "form-control narrow", "name_id" => "id", "readonly" => true, "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 9
($context["context"] ?? null), "content", array()), "id", array())), "publish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 13
($context["context"] ?? null), "can", array()), "publish", array()), "id" => "datepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 15
($context["context"] ?? null), "content", array()), "datepublish", array()) == "")) ? (twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")) : ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datepublish", array())))), "depublish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 19
($context["context"] ?? null), "can", array()), "depublish", array()), "id" => "datedepublish", "value" => $this->getAttribute($this->getAttribute(        // line 21
($context["context"] ?? null), "values", array()), "datedepublish", array()), "notice" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.depublish-date-past")), "status" => array("class" => "form-control", "disabled" => (twig_length_filter($this->env, $this->getAttribute(        // line 27
($context["context"] ?? null), "allowed_status", array())) <= 1), "id" => "statusselect", "name" => "status"), "ownerid" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 34
($context["context"] ?? null), "can", array()), "change_ownership", array()), "id" => "ownerid", "name" => "ownerid"), "comment" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 41
($context["context"] ?? null), "can", array()), "change_ownership", array()), "name_id" => "changelog-comment", "placeholder" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.changelog-what-changed"), "type" => "text"));
        // line 51
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/fields/_meta.twig", 51);
        // line 50
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("meta");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldMeta");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.meta-information"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ("col-xs-12" . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) ? ("") : (" hidden"))), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 60
        echo "    ";
        $context["__internal_b43ea637f27f5452e074dd970bc60791ac22b7a611f1e3bcc5b0b87e954f2cd8"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/fields/_meta.twig", 60);
        // line 61
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 63
        if ( !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
            // line 64
            echo "            <h3>
                ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.meta-information"));
            echo "
            </h3>
        ";
        }
        // line 68
        echo "
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.id"));
        echo " (№)</label>
            <div class=\"col-sm-8\">
                <input";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "id", array())));
        echo ">
                ";
        // line 73
        if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datecreated", array()) > "1970-01-01 01:01:01")) {
            // line 74
            echo "                    <p class=\"form-control-static\">
                        ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.created", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array()))));
            echo "
                        ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_b43ea637f27f5452e074dd970bc60791ac22b7a611f1e3bcc5b0b87e954f2cd8"]->getbuic_moment($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datecreated", array())));
            echo "
                        ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.edited"));
            echo "
                        ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_b43ea637f27f5452e074dd970bc60791ac22b7a611f1e3bcc5b0b87e954f2cd8"]->getbuic_moment($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datechanged", array())));
            echo ".
                    </p>
                ";
        }
        // line 81
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-colon"));
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "status", array())));
        echo ">
                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "allowed_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 89
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 90
$context["status"], "selected" => ($this->getAttribute($this->getAttribute(            // line 91
($context["context"] ?? null), "content", array()), "status", array()) == $context["status"]));
            // line 93
            echo "                        <option";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr(($context["attr_opt"] ?? null)));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["status_names"] ?? null), $context["status"], array(), "array"), "html", null, true));
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </select>
                <p class=\"form-control-static\">
                    ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-explanation"));
        echo "
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.publication-date-colon"));
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getinput_datetime($this->getAttribute(($context["attributes"] ?? null), "publish", array())));
        echo "
            </div>
        </div>

        <div class=\"form-group depublish-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.depublication-date-colon"));
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getinput_datetime($this->getAttribute(($context["attributes"] ?? null), "depublish", array())));
        echo "
                <p class=\"form-control-static\">
                    ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.depublish-explanation"));
        echo "
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.owner-colon"));
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 122
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "ownerid", array())));
        echo ">
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 124
            echo "                        ";
            $context["attr_opt"] = array("value" => $this->getAttribute(            // line 125
$context["user"], "id", array()), "selected" => ($this->getAttribute(            // line 126
($context["context"] ?? null), "contentowner", array()) && ($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contentowner", array()), "id", array()))));
            // line 128
            echo "                        <option";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr(($context["attr_opt"] ?? null)));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true));
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </select>
            </div>
        </div>

        ";
        // line 134
        if ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/changelog/enabled"), "method")) {
            // line 135
            echo "            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">";
            // line 136
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.record.comment-add-colon"));
            echo "</label>
                <div class=\"col-sm-8\">
                    <input";
            // line 138
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "comment", array())));
            echo ">
                </div>
            </div>
        ";
        }
        // line 142
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 142,  308 => 138,  303 => 136,  300 => 135,  298 => 134,  292 => 130,  281 => 128,  279 => 126,  278 => 125,  276 => 124,  272 => 123,  268 => 122,  263 => 120,  254 => 114,  249 => 112,  244 => 110,  236 => 105,  231 => 103,  222 => 97,  218 => 95,  207 => 93,  205 => 91,  204 => 90,  202 => 89,  198 => 88,  194 => 87,  189 => 85,  183 => 81,  177 => 78,  173 => 77,  169 => 76,  165 => 75,  162 => 74,  160 => 73,  156 => 72,  151 => 70,  147 => 68,  141 => 65,  138 => 64,  136 => 63,  132 => 61,  129 => 60,  123 => 59,  111 => 57,  99 => 56,  87 => 54,  75 => 53,  68 => 50,  66 => 51,  64 => 41,  63 => 34,  62 => 27,  61 => 21,  60 => 19,  59 => 15,  58 => 13,  57 => 9,  56 => 3,  11 => 50,);
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

{% set attributes = {
    id: {
        class:     'form-control narrow',
        name_id:   'id',
        readonly:  true,
        type:      'text',
        value:     context.content.id,
    },

    publish: {
        disabled: (not context.can.publish),
        id:       'datepublish',
        value:    (context.content.datepublish == '') ? \"now\"|date('Y-m-d H:i:s') : context.content.datepublish,
    },

    depublish: {
        disabled:  (not context.can.depublish),
        id:        'datedepublish',
        value:     context.values.datedepublish,
        notice:     __('general.phrase.depublish-date-past'),
    },

    status: {
        class:     'form-control',
        disabled:  (context.allowed_status|length <= 1),
        id:        'statusselect',
        name:      'status',
    },

    ownerid: {
        class:     'form-control',
        disabled:  (not context.can.change_ownership),
        id:        'ownerid',
        name:      'ownerid',
    },

    comment: {
        class:        'form-control',
        disabled:     (not context.can.change_ownership),
        name_id:      'changelog-comment',
        placeholder:  __('general.phrase.changelog-what-changed'),
        type:         'text',
    },
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{% block fieldset_type 'meta' %}
{% block fieldset_widget 'fieldMeta' %}

{% block fieldset_label_text  __('general.phrase.meta-information') %}
{% block fieldset_label_class 'col-xs-12' ~ (context.has.tabs ? '' : ' hidden') %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}

    <div class=\"col-xs-12\">
        {% if not context.has.tabs %}
            <h3>
                {{ __('general.phrase.meta-information') }}
            </h3>
        {% endif %}

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.id') }} (№)</label>
            <div class=\"col-sm-8\">
                <input{{ macro.attr(attributes.id) }}>
                {% if context.content.datecreated > '1970-01-01 01:01:01' %}
                    <p class=\"form-control-static\">
                        {{ __('contenttypes.generic.created', {'%contenttype%': context.contenttype.name}) }}
                        {{ buic_moment(context.content.datecreated) }}
                        {{ __('general.phrase.edited') }}
                        {{ buic_moment(context.content.datechanged) }}.
                    </p>
                {% endif %}
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.status-colon') }}</label>
            <div class=\"col-sm-8\">
                <select{{ macro.attr(attributes.status) }}>
                    {% for status in context.allowed_status %}
                        {% set attr_opt = {
                            value:     status,
                            selected:  (context.content.status == status),
                        } %}
                        <option{{ macro.attr(attr_opt) }}>{{ status_names[status] }}</option>
                    {% endfor %}
                </select>
                <p class=\"form-control-static\">
                    {{ __('general.phrase.status-explanation') }}
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.publication-date-colon') }}</label>
            <div class=\"col-sm-8\">
                {{ macro.input_datetime(attributes.publish) }}
            </div>
        </div>

        <div class=\"form-group depublish-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.depublication-date-colon') }}</label>
            <div class=\"col-sm-8\">
                {{ macro.input_datetime(attributes.depublish) }}
                <p class=\"form-control-static\">
                    {{ __('general.phrase.depublish-explanation') }}
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.owner-colon') }}</label>
            <div class=\"col-sm-8\">
                <select{{ macro.attr(attributes.ownerid) }}>
                    {% for user in users %}
                        {% set attr_opt = {
                            value:     user.id,
                            selected:  (context.contentowner and user.id == context.contentowner.id),
                        } %}
                        <option{{ macro.attr(attr_opt) }}>{{ user.displayname }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>

        {% if config.get('general/changelog/enabled') %}
            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">{{ __('contenttypes.record.comment-add-colon') }}</label>
                <div class=\"col-sm-8\">
                    <input{{ macro.attr(attributes.comment) }}>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_meta.twig", "");
    }
}
