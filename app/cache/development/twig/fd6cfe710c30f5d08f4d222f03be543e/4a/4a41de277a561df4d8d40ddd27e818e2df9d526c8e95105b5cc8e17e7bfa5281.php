<?php

/* partials/_recordfooter.twig */
class __TwigTemplate_5526149e052b3f869639716bee4b68e758d58e318e2cdf302ba7876bc3c5ad30 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_recordfooter.twig"));

        $tags = array("if" => 2, "set" => 8, "for" => 26);
        $filters = array("default" => 2, "escape" => 13, "excerpt" => 13);
        $functions = array("include" => 6, "__" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('default', 'escape', 'excerpt'),
                array('include', '__')
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
        if (((array_key_exists("extended", $context)) ? (_twig_default_filter(($context["extended"] ?? null))) : (""))) {
            // line 3
            echo "
    ";
            // line 6
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_sub_taxonomylinks.twig", array("record" => ($context["record"] ?? null))));
            echo "

    ";
            // line 8
            $context["previous"] = $this->getAttribute(($context["record"] ?? null), "previous", array(0 => "id"), "method");
            // line 9
            echo "    ";
            $context["next"] = $this->getAttribute(($context["record"] ?? null), "next", array(0 => "id"), "method");
            // line 10
            echo "    ";
            if ((($context["previous"] ?? null) || ($context["next"] ?? null))) {
                // line 11
                echo "        <nav class=\"pagination\" role=\"navigation\" aria-label=\"pagination\">
            ";
                // line 12
                if (($context["previous"] ?? null)) {
                    // line 13
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["previous"] ?? null), "link", array()), "html", null, true));
                    echo "\" class=\"pagination-previous\">&laquo; ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->excerpt($this->getAttribute(($context["previous"] ?? null), "title", array()), 44));
                    echo "</a>
            ";
                }
                // line 15
                echo "            ";
                if (($context["next"] ?? null)) {
                    // line 16
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["next"] ?? null), "link", array()), "html", null, true));
                    echo "\" class=\"pagination-next\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->excerpt($this->getAttribute(($context["next"] ?? null), "title", array()), 44));
                    echo " &raquo;</a>
            ";
                }
                // line 18
                echo "        </nav>
    ";
            }
            // line 20
            echo "
    ";
            // line 21
            $context["relatedrecords"] = $this->getAttribute(($context["record"] ?? null), "related", array(), "method");
            // line 22
            echo "    ";
            if ( !twig_test_empty(($context["relatedrecords"] ?? null))) {
                // line 23
                echo "        <p class=\"meta\">
            <h2 class=\"is-size-4\">";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.related-content"));
                echo "</h2>
            <ul>
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                    // line 27
                    echo "                    <li><a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true));
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </ul>
        </p>
    ";
            }
            // line 32
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  124 => 29,  113 => 27,  109 => 26,  104 => 24,  101 => 23,  98 => 22,  96 => 21,  93 => 20,  89 => 18,  81 => 16,  78 => 15,  70 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  51 => 6,  48 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# This file is inserted as the 'footer' of each listed record. #}
{% if extended|default() %}

    {# include the 'default' links to taxonomies. Check the documentation for ways to modify and customize
        what is output to the browser: https://docs.bolt.cm/contenttypes/taxonomies#displaying-taxonomies-in-templates #}
    {{ include('partials/_sub_taxonomylinks.twig', { record: record }) }}

    {% set previous = record.previous('id') %}
    {% set next = record.next('id') %}
    {% if previous or next %}
        <nav class=\"pagination\" role=\"navigation\" aria-label=\"pagination\">
            {% if previous %}
                <a href=\"{{ previous.link }}\" class=\"pagination-previous\">&laquo; {{ previous.title|excerpt(44) }}</a>
            {% endif %}
            {% if next %}
                <a href=\"{{ next.link }}\" class=\"pagination-next\">{{ next.title|excerpt(44) }} &raquo;</a>
            {% endif %}
        </nav>
    {% endif %}

    {% set relatedrecords = record.related() %}
    {% if relatedrecords is not empty %}
        <p class=\"meta\">
            <h2 class=\"is-size-4\">{{ __('general.phrase.related-content') }}</h2>
            <ul>
                {% for related in relatedrecords %}
                    <li><a href=\"{{ related.link }}\">{{ related.title }}</a></li>
                {%  endfor %}
            </ul>
        </p>
    {% endif %}

{% endif %}
", "partials/_recordfooter.twig", "");
    }
}
