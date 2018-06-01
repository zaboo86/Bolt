<?php

/* @bolt/editcontent/_field.twig */
class __TwigTemplate_dc22f425cefd5c159c5c9b99ff90eea9500bc240bad4a3586d0e47e567a33de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_field.twig"));

        $tags = array("import" => 1, "set" => 3, "if" => 7, "include" => 19);
        $filters = array("escape" => 5, "markdown" => 9, "capitalize" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'set', 'if', 'include'),
                array('escape', 'markdown', 'capitalize'),
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/_field.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "fields", array()), ($context["key"] ?? null), array(), "array");
        // line 4
        echo "
<div data-bolt-fieldset=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", array()), "html", null, true));
        echo "\">
    ";
        // line 7
        echo "    ";
        if ((($this->getAttribute(($context["field"] ?? null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["field"] ?? null), "prefix", array()))) && !twig_in_filter($this->getAttribute(($context["field"] ?? null), "type", array()), array(0 => "block", 1 => "repeater")))) {
            // line 8
            echo "        <div class=\"prefix\">
            ";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown($this->getAttribute(($context["field"] ?? null), "prefix", array())));
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $context["labelkey"] = (($this->getAttribute(($context["field"] ?? null), "label", array())) ? ($this->getAttribute(($context["field"] ?? null), "label", array())) : (twig_capitalize_string_filter($this->env, ($context["key"] ?? null))));
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $context["templatename"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "fields", array()), $this->getAttribute(($context["field"] ?? null), "type", array()), array(), "array"), "template", array());
        // line 18
        echo "    ";
        $context["templatename"] = array(0 => ($context["templatename"] ?? null), 1 => ("@bolt/" . ($context["templatename"] ?? null)), 2 => "@bolt/editcontent/fields/_not_found.twig");
        // line 19
        echo "    ";
        $this->loadTemplate(($context["templatename"] ?? null), "@bolt/editcontent/_field.twig", 19)->display(array_merge($context, array("key" =>         // line 20
($context["key"] ?? null), "name" =>         // line 21
($context["key"] ?? null), "contentkey" =>         // line 22
($context["key"] ?? null))));
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["field"] ?? null), "postfix", array())))) {
            // line 27
            echo "        <div class=\"postfix\">
            ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown($this->getAttribute(($context["field"] ?? null), "postfix", array())));
            echo "
        </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "separator", array(), "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "separator", array()) == true))) {
            // line 34
            echo "        <hr>
    ";
        }
        // line 36
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  114 => 34,  111 => 33,  108 => 31,  102 => 28,  99 => 27,  96 => 26,  93 => 24,  91 => 22,  90 => 21,  89 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 15,  75 => 14,  72 => 12,  66 => 9,  63 => 8,  60 => 7,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_macro.twig' as macro %}

{% set field = context.contenttype.fields[key] %}

<div data-bolt-fieldset=\"{{ field.type }}\">
    {# Prefix. Except for Block and Repeater fields, since they handle it in the \"group\" #}
    {% if field.prefix is defined and field.prefix is not empty and field.type not in ['block', 'repeater'] %}
        <div class=\"prefix\">
            {{ field.prefix|markdown }}
        </div>
    {% endif %}

    {# Fields #}
    {% set labelkey = field.label ?: key|capitalize %}

    {# Temporary approach until v4. @see https://github.com/bolt/bolt/issues/5237 #}
    {% set templatename = context.fields[field.type].template %}
    {% set templatename = [ templatename, '@bolt/' ~ templatename, '@bolt/editcontent/fields/_not_found.twig' ] %}
    {% include templatename with {
        'key': key,
        'name': key,
        'contentkey': key
    } %}

    {# Postfix #}
    {% if field.postfix is defined and field.postfix is not empty %}
        <div class=\"postfix\">
            {{ field.postfix|markdown }}
        </div>
    {% endif %}

    {# Divider #}
    {% if field.separator is defined and field.separator == true %}
        <hr>
    {% endif %}
</div>
", "@bolt/editcontent/_field.twig", "");
    }
}
