<?php

/* @bolt/editcontent/_taxonomies.twig */
class __TwigTemplate_ac3b943dff43dbf2dff38ec64e2b07d379f31e821a170807f9993c30c24647f3 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_taxonomies.twig"));

        $tags = array("if" => 3, "for" => 11, "set" => 13);
        $filters = array("escape" => 7, "default" => 11, "markdown" => 19);
        $functions = array("__" => 5, "include" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('escape', 'default', 'markdown'),
                array('__', 'include')
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

        // line 2
        echo "
";
        // line 3
        if ( !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
            // line 4
            echo "    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.taxonomy"));
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.taxonomy"));
            echo "\"
                  data-content=\"";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "translator", array()), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.info"));
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
            // line 12
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "taxonomy"), "method", false, true), $context["taxonomyslug"], array(), "array", true, true)) {
                // line 13
                echo "        ";
                $context["taxonomy"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array");
                // line 14
                echo "
        <div data-bolt-fieldset=\"";
                // line 15
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "behaves_like", array()), "html", null, true));
                echo "\">
            ";
                // line 17
                echo "            ";
                if (($this->getAttribute(($context["taxonomy"] ?? null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["taxonomy"] ?? null), "prefix", array())))) {
                    // line 18
                    echo "                <div class=\"prefix\">
                    ";
                    // line 19
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown($this->getAttribute(($context["taxonomy"] ?? null), "prefix", array())));
                    echo "
                </div>
            ";
                }
                // line 22
                echo "
            ";
                // line 24
                echo "            ";
                if (($this->getAttribute(($context["taxonomy"] ?? null), "behaves_like", array()) == "tags")) {
                    // line 25
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/fields/_tags.twig"));
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 26
($context["taxonomy"] ?? null), "behaves_like", array()) == "categories")) {
                    // line 27
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/fields/_categories.twig"));
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 28
($context["taxonomy"] ?? null), "behaves_like", array()) == "grouping")) {
                    // line 29
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/fields/_grouping.twig"));
                    echo "
            ";
                }
                // line 31
                echo "
            ";
                // line 33
                echo "            ";
                if (($this->getAttribute(($context["taxonomy"] ?? null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["taxonomy"] ?? null), "postfix", array())))) {
                    // line 34
                    echo "                <div class=\"postfix\">
                    ";
                    // line 35
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown($this->getAttribute(($context["taxonomy"] ?? null), "postfix", array())));
                    echo "
                </div>
            ";
                }
                // line 38
                echo "        </div>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 42
        if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array()) && twig_in_filter("taxonomy", $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "groups", array())))) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_field.twig"));
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_taxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 43,  175 => 42,  172 => 41,  156 => 38,  150 => 35,  147 => 34,  144 => 33,  141 => 31,  135 => 29,  133 => 28,  128 => 27,  126 => 26,  121 => 25,  118 => 24,  115 => 22,  109 => 19,  106 => 18,  103 => 17,  99 => 15,  96 => 14,  93 => 13,  90 => 12,  73 => 11,  70 => 10,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  49 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# taxonomies for the contenttype that this record is part of. #}

{% if not context.has.tabs %}
    <h3>
        {{ __('general.phrase.taxonomy') }}
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"{{ __('general.phrase.taxonomy') }}\"
                  data-content=\"{{ app.translator.trans('info.taxonomy', {}, 'infos') }}\">{{ __('general.phrase.info') }}</span>
    </h3>
{% endif %}

{% for taxonomyslug in context.contenttype.taxonomy|default([]) %}
    {% if config.get('taxonomy')[taxonomyslug] is defined %}
        {% set taxonomy = config.get('taxonomy')[taxonomyslug] %}

        <div data-bolt-fieldset=\"{{ taxonomy.behaves_like }}\">
            {# Prefix #}
            {% if taxonomy.prefix is defined and taxonomy.prefix is not empty %}
                <div class=\"prefix\">
                    {{ taxonomy.prefix|markdown }}
                </div>
            {% endif %}

            {# Fieldset #}
            {% if taxonomy.behaves_like == 'tags' %}
                {{ include('@bolt/editcontent/fields/_tags.twig') }}
            {% elseif taxonomy.behaves_like == 'categories' %}
                {{ include('@bolt/editcontent/fields/_categories.twig') }}
            {% elseif taxonomy.behaves_like == 'grouping' %}
                {{ include('@bolt/editcontent/fields/_grouping.twig') }}
            {% endif %}

            {# Postfix #}
            {% if taxonomy.postfix is defined and taxonomy.postfix is not empty %}
                <div class=\"postfix\">
                    {{ taxonomy.postfix|markdown }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endfor %}

{% if context.has.tabs and 'taxonomy' in context.contenttype.groups %}
    {{ include('@bolt/editcontent/_field.twig') }}
{% endif %}
", "@bolt/editcontent/_taxonomies.twig", "");
    }
}
