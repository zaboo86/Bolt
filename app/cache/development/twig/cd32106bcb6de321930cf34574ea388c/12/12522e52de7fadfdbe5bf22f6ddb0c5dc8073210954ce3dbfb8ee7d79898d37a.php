<?php

/* @bolt/components/panel-lastmodified.twig */
class __TwigTemplate_6243db74d413abad8ad96240c9db2f71d546c49bdfc0c6c84b8b0cdfb2fdb0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-lastmodified.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-lastmodified.twig"));

        $tags = array("if" => 13, "import" => 23, "from" => 24, "for" => 29, "set" => 32);
        $filters = array("default" => 13, "replace" => 37, "escape" => 39);
        $functions = array("__" => 16, "path" => 45);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'import', 'from', 'for', 'set'),
                array('default', 'replace', 'escape'),
                array('__', 'path')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("panel-lastmodified");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fa-clock-o");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        // line 12
        echo "
    ";
        // line 13
        if ((($this->getAttribute(($context["context"] ?? null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "filtered", array()))) : (""))) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Recent modifications");
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.last-modified", array("%contenttypes%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array()))));
            echo "
    ";
        }
        // line 18
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 22
        echo "
    ";
        // line 23
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-lastmodified.twig", 23);
        // line 24
        echo "    ";
        $context["__internal_f70ce0764a670e98eae0cb1de1480f9e3496ede8bc144a38ae00615f46fea0b5"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-lastmodified.twig", 24);
        // line 25
        echo "    ";
        $context["__internal_6f1b87058ef285989f37269fe8e0839fa8041ee890018881e7ba70973dde569c"] = $this->loadTemplate("@bolt/changelog/_macros.twig", "@bolt/components/panel-lastmodified.twig", 25);
        // line 26
        echo "
    <ul>
        ";
        // line 28
        if ($this->getAttribute(($context["context"] ?? null), "changelog", array(), "any", true, true)) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "changelog", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 30
                echo "                <li>
                    ";
                // line 31
                if ((($this->getAttribute(($context["context"] ?? null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "filtered", array()))) : (""))) {
                    // line 32
                    echo "                        ";
                    $context["title"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array());
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    if ($this->getAttribute($context["entry"], "title", array())) {
                        // line 35
                        echo "                            ";
                        $context["title"] = $context["macro"]->getcontentlink_by_id($this->getAttribute(($context["context"] ?? null), "contenttype", array()), $this->getAttribute($context["entry"], "title", array()), $this->getAttribute($context["entry"], "contentid", array()));
                        // line 36
                        echo "                        ";
                    } else {
                        // line 37
                        echo "                            ";
                        $context["title"] = twig_replace_filter("%name% № %id%", array("%name%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()), "%id%" => $this->getAttribute($context["entry"], "contentid", array())));
                        // line 38
                        echo "                        ";
                    }
                    // line 39
                    echo "                        № ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true));
                    echo ".
                    ";
                }
                // line 41
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
                    ";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_6f1b87058ef285989f37269fe8e0839fa8041ee890018881e7ba70973dde569c"]->getchangelog_mutation($this->getAttribute($context["entry"], "mutation_type", array())));
                echo "
                    ";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.by"));
                echo " <em>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getuserlink((($this->getAttribute($context["entry"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "ownerid", array()), "")) : (""))));
                echo "</em>
                    <small>(";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_f70ce0764a670e98eae0cb1de1480f9e3496ede8bc144a38ae00615f46fea0b5"]->getbuic_moment($this->getAttribute($context["entry"], "date", array())));
                echo ")</small>
                    <small><a href=\"";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordsingle", array("contenttype" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute($context["entry"], "contentid", array()), "id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true));
                echo "\">view</a></small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 48
                echo "                <li><em>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array()))));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "latest", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 52
                echo "                <li>
                    № ";
                // line 53
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true));
                echo ".
                    ";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getcontentlink($this->getAttribute(($context["context"] ?? null), "contenttype", array()), $context["content"]));
                echo "
                    <small>(";
                // line 55
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_f70ce0764a670e98eae0cb1de1480f9e3496ede8bc144a38ae00615f46fea0b5"]->getbuic_moment($this->getAttribute($context["content"], "datechanged", array())));
                echo ")</small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                <li><em>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array()))));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </ul>
    ";
        // line 62
        if ((($this->getAttribute(($context["context"] ?? null), "changelog", array(), "any", true, true) && $this->getAttribute(($context["context"] ?? null), "contentid", array())) && $this->getAttribute(($context["context"] ?? null), "filtered", array()))) {
            // line 63
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordall", array("contenttype" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute(($context["context"] ?? null), "contentid", array()))), "html", null, true));
            echo "\">
            ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.full-list-ellipsis"));
            echo "
        </a>
    ";
        }
        // line 67
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 67,  263 => 64,  258 => 63,  256 => 62,  253 => 61,  250 => 60,  241 => 58,  233 => 55,  229 => 54,  225 => 53,  222 => 52,  216 => 51,  213 => 50,  204 => 48,  196 => 45,  192 => 44,  186 => 43,  182 => 42,  177 => 41,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  156 => 34,  153 => 33,  150 => 32,  148 => 31,  145 => 30,  139 => 29,  137 => 28,  133 => 26,  130 => 25,  127 => 24,  125 => 23,  122 => 22,  116 => 21,  108 => 18,  102 => 16,  96 => 14,  94 => 13,  91 => 12,  85 => 11,  73 => 9,  61 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Sidebar-Panel: Displays recent modifications or last modified contenttypes
 # (Usage Example: Content-editor)
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-lastmodified' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head %}

    {% if context.filtered|default %}
        {{ 'Recent modifications' }}
    {% else %}
        {{ __('contenttypes.generic.last-modified', {'%contenttypes%': context.contenttype.name}) }}
    {% endif %}

{% endblock panel_head %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}
    {% from '@bolt/changelog/_macros.twig' import changelog_mutation %}

    <ul>
        {% if context.changelog is defined %}
            {% for index, entry in context.changelog %}
                <li>
                    {% if context.filtered|default %}
                        {% set title = context.contenttype.singular_name %}
                    {% else %}
                        {% if entry.title %}
                            {% set title = macro.contentlink_by_id(context.contenttype, entry.title, entry.contentid) %}
                        {% else %}
                            {% set title = '%name% № %id%'|replace({'%name%': context.contenttype.singular_name, '%id%': entry.contentid}) %}
                        {% endif %}
                        № {{ entry.contentid }}.
                    {% endif %}
                    {{ title }}
                    {{ changelog_mutation(entry.mutation_type) }}
                    {{ __('general.phrase.by') }} <em>{{ macro.userlink(entry.ownerid|default('')) }}</em>
                    <small>({{ buic_moment(entry.date) }})</small>
                    <small><a href=\"{{ path('changelogrecordsingle', {'contenttype': context.contenttype.slug, 'contentid': entry.contentid, 'id': entry.id}) }}\">view</a></small>
                </li>
            {% else %}
                <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.name}) }}.</em></li>
            {% endfor %}
        {% else %}
            {% for content in context.latest %}
                <li>
                    № {{ content.id }}.
                    {{ macro.contentlink(context.contenttype, content) }}
                    <small>({{ buic_moment(content.datechanged) }})</small>
                </li>
            {% else %}
                <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.name}) }}.</em></li>
            {% endfor %}
        {% endif %}
    </ul>
    {% if context.changelog is defined and context.contentid and context.filtered %}
        <a href=\"{{ path('changelogrecordall', {'contenttype': context.contenttype.slug, 'contentid': context.contentid}) }}\">
            {{ __('general.phrase.full-list-ellipsis') }}
        </a>
    {% endif %}

{% endblock panel_body %}
", "@bolt/components/panel-lastmodified.twig", "");
    }
}
