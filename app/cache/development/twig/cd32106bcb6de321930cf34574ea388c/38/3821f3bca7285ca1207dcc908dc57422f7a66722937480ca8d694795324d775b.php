<?php

/* @bolt/editcontent/fields/_grouping.twig */
class __TwigTemplate_9a5de4b9014831bf9deac2af287f66c303fd587e23e32f18485f6b476424b0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_grouping.twig", 16);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_grouping.twig"));

        $tags = array("set" => 3, "import" => 17, "for" => 32, "if" => 43);
        $filters = array("escape" => 21, "default" => 54);
        $functions = array("__" => 30);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'import', 'for', 'if'),
                array('escape', 'default'),
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
        $context["id_select"] = ("taxonomy-" . $this->getAttribute(($context["taxonomy"] ?? null), "slug", array()));
        // line 4
        $context["id_order"] = ("taxonomy-order-" . $this->getAttribute(($context["taxonomy"] ?? null), "slug", array()));
        // line 6
        $context["attributes"] = array("select" => array("name" => (("taxonomy[" . $this->getAttribute(        // line 8
($context["taxonomy"] ?? null), "slug", array())) . "][]"), "id" =>         // line 9
($context["id_select"] ?? null), "class" => "form-control"));
        // line 17
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/fields/_grouping.twig", 17);
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("grouping");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "name", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-sm-3");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 25
        echo "    <div class=\"col-sm-9\">
        <div class=\"form-group\">
            <label for=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id_select"] ?? null), "html", null, true));
        echo "\" class=\"sr-only\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "name", array()), "html", null, true));
        echo "</label>
            <div class=\"col-xs-12\">
                <select";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "select", array())));
        echo ">
                    <option value=\"\">";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("(no group)"));
        echo "</option>
                    <option value=\"\" disabled>-----------</option>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
            // line 33
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 34
$context["slug"], "selected" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 35
($context["context"] ?? null), "content", array()), "taxonomy", array()), "containsKeyValue", array(0 => $this->getAttribute(($context["taxonomy"] ?? null), "slug", array()), 1 => $context["slug"]), "method"));
            // line 37
            echo "                        <option";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr(($context["attr_opt"] ?? null)));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["group"], "html", null, true));
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </select>
            </div>
        </div>

        ";
        // line 43
        if (($this->getAttribute(($context["taxonomy"] ?? null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute(($context["taxonomy"] ?? null), "has_sortorder", array()) == true))) {
            // line 44
            echo "            ";
            $context["grouping"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "taxonomy", array()), "getField", array(0 => $this->getAttribute(($context["taxonomy"] ?? null), "slug", array())), "method"), "first", array(), "method");
            // line 45
            echo "            ";
            if ((($context["grouping"] ?? null) && $this->getAttribute(($context["grouping"] ?? null), "sortorder", array()))) {
                // line 46
                echo "                ";
                $context["sortval"] = $this->getAttribute(($context["grouping"] ?? null), "sortorder", array());
                // line 47
                echo "            ";
            }
            // line 48
            echo "            ";
            $context["attr_order"] = array("class" => "form-control", "id" =>             // line 50
($context["id_order"] ?? null), "name" => (("taxonomy-order[" . $this->getAttribute(            // line 51
($context["taxonomy"] ?? null), "slug", array())) . "]"), "step" => "1", "type" => "number", "value" => ((            // line 54
array_key_exists("sortval", $context)) ? (_twig_default_filter(($context["sortval"] ?? null), 0)) : (0)));
            // line 56
            echo "            <div class=\"form-group\">
                <label for=\"";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id_order"] ?? null), "html", null, true));
            echo "\" class=\"control-label col-xs-3\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.order"));
            echo "</label>
                <div class=\"col-xs-9\">
                    <input";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr(($context["attr_order"] ?? null)));
            echo ">
                </div>
            </div>
        ";
        }
        // line 63
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_grouping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 63,  190 => 59,  183 => 57,  180 => 56,  178 => 54,  177 => 51,  176 => 50,  174 => 48,  171 => 47,  168 => 46,  165 => 45,  162 => 44,  160 => 43,  154 => 39,  143 => 37,  141 => 35,  140 => 34,  138 => 33,  134 => 32,  129 => 30,  125 => 29,  118 => 27,  114 => 25,  108 => 24,  96 => 22,  84 => 21,  72 => 19,  65 => 16,  63 => 17,  61 => 9,  60 => 8,  59 => 6,  57 => 4,  55 => 3,  11 => 16,);
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

{% set id_select = 'taxonomy-' ~ taxonomy.slug %}
{% set id_order = 'taxonomy-order-' ~ taxonomy.slug %}

{% set attributes = {
    select: {
        name:      'taxonomy[' ~ taxonomy.slug ~ '][]',
        id:        id_select,
        class:     'form-control',
    }
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{% block fieldset_type 'grouping' %}

{% block fieldset_label_text  taxonomy.name %}
{% block fieldset_label_class 'col-sm-3' %}

{% block fieldset_controls %}
    <div class=\"col-sm-9\">
        <div class=\"form-group\">
            <label for=\"{{ id_select }}\" class=\"sr-only\">{{ taxonomy.name }}</label>
            <div class=\"col-xs-12\">
                <select{{ macro.attr(attributes.select) }}>
                    <option value=\"\">{{ __('(no group)') }}</option>
                    <option value=\"\" disabled>-----------</option>
                    {% for slug, group in taxonomy.options %}
                        {% set attr_opt = {
                            value:     slug,
                            selected:  context.content.taxonomy.containsKeyValue(taxonomy.slug, slug),
                        } %}
                        <option{{ macro.attr(attr_opt) }}>{{ group }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>

        {% if taxonomy.has_sortorder is defined and taxonomy.has_sortorder == true %}
            {% set grouping =  context.content.taxonomy.getField(taxonomy.slug).first() %}
            {% if grouping and grouping.sortorder %}
                {% set sortval =  grouping.sortorder %}
            {% endif %}
            {% set attr_order = {
                class:  'form-control',
                id:     id_order,
                name:   'taxonomy-order[' ~ taxonomy.slug ~ ']',
                step:   '1',
                type:   'number',
                value:  sortval|default(0),
            } %}
            <div class=\"form-group\">
                <label for=\"{{ id_order }}\" class=\"control-label col-xs-3\">{{ __('general.phrase.order') }}</label>
                <div class=\"col-xs-9\">
                    <input{{ macro.attr(attr_order) }}>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_grouping.twig", "");
    }
}
