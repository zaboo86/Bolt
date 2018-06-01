<?php

/* @bolt/overview/_panel-actions_overview.twig */
class __TwigTemplate_08692caef40b1779e2725d9493880bc60f831bff6a47706e8e251b47a3468267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/overview/_panel-actions_overview.twig", 4);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/_panel-actions_overview.twig"));

        $tags = array("if" => 13, "set" => 23, "for" => 26);
        $filters = array("escape" => 14, "default" => 26, "markdown" => 66, "join" => 76);
        $functions = array("__" => 10, "isallowed" => 13, "path" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('escape', 'default', 'markdown', 'join'),
                array('__', 'isallowed', 'path')
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

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("panel-news");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fa-cog");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array()))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 13
        echo "    ";
        if ($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed((("contenttype:" . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array())) . ":create"))) {
            // line 14
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()))), "html", null, true));
            echo "\">
            <i class=\"fa fa-plus\"></i> ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()))));
            echo "
        </a>
    ";
        }
        // line 18
        echo "
    <p style=\"margin-top: 15px;\"><strong>";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.filter"));
        echo "</strong></p>

    <form class=\"form-inline\">

        ";
        // line 23
        $context["taxonomyfilter"] = false;
        // line 24
        echo "
        <div class=\"form-group\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 27
            echo "            ";
            if (twig_test_iterable($this->getAttribute(($context["config"] ?? null), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"))) {
                // line 28
                echo "                ";
                $context["tax_query"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "get", array(0 => ("taxonomy-" . $context["taxonomy"])), "method");
                // line 29
                echo "                ";
                if (($context["tax_query"] ?? null)) {
                    // line 30
                    echo "                    ";
                    $context["taxonomyfilter"] = true;
                    // line 31
                    echo "                ";
                }
                // line 32
                echo "                <select name='taxonomy-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["taxonomy"], "html", null, true));
                echo "' class='form-control'>
                    <option value=''>
                        (";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method"), $context["taxonomy"])) : ($context["taxonomy"])), "html", null, true));
                echo ")
                    </option>
                ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"));
                foreach ($context['_seq'] as $context["slug"] => $context["name"]) {
                    // line 37
                    echo "                    <option value='";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["slug"], "html", null, true));
                    echo "' ";
                    if ((($context["tax_query"] ?? null) == $context["slug"])) {
                        echo "selected";
                    }
                    echo ">
                        ";
                    // line 38
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["name"], "html", null, true));
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['slug'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                </select>
                ";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.or"));
                echo "
            ";
            }
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
        $context["filter_query"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "get", array(0 => "filter"), "method");
        // line 46
        echo "        ";
        $context["order_query"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "get", array(0 => "order"), "method");
        // line 47
        echo "            <input type=\"text\" class=\"form-control\" value=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["filter_query"] ?? null), "html", null, true));
        echo "\" name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.keyword-ellipsis"));
        echo "\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.filter"));
        echo "</button>

            ";
        // line 53
        if (((($context["filter_query"] ?? null) || ($context["order_query"] ?? null)) || ($context["taxonomyfilter"] ?? null))) {
            // line 54
            echo "                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.clear-filter-sort"));
            echo "</a>
            ";
        }
        // line 56
        echo "        </div>

    </form>

    ";
        // line 63
        echo "    ";
        $context["description"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "description", array()), $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => "")))) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => ""))));
        // line 64
        echo "    <div class=\"description\">
        ";
        // line 65
        if (($context["description"] ?? null)) {
            // line 66
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown(($context["description"] ?? null)));
            echo "
        ";
        }
        // line 68
        echo "    </div>

    <p><strong>";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.details"));
        echo "</strong></p>
    <ul>
        <li>";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-default"));
        echo ": ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "default_status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "default_status", array()), "published")) : ("published")), "html", null, true));
        echo "</li>
        <li>";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.listing-template"));
        echo ": <code>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "listing_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "listing_template", array()), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/listing_template"), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/listing_template"), "method"))), "html", null, true));
        echo "</code></li>
        <li>";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.template-detail"));
        echo ": <code>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "record_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "record_template", array()), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/record_template"), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/record_template"), "method"))), "html", null, true));
        echo "</code></li>
        ";
        // line 75
        if (twig_test_iterable((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "taxonomy", array()), "")) : ("")))) {
            // line 76
            echo "            <li>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.taxonomy"));
            echo ": ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "taxonomy", array()), ", "), "html", null, true));
            echo "</li>
        ";
        }
        // line 78
        echo "        ";
        if (twig_test_iterable((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "relations", array()), "")) : ("")))) {
            // line 79
            echo "            <li>
                ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.relationships"));
            echo ":
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "relations", array()));
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
            foreach ($context['_seq'] as $context["rel"] => $context["data"]) {
                // line 82
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["rel"], "html", null, true));
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 83
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['rel'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            </li>
        ";
        }
        // line 86
        echo "    </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/_panel-actions_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 86,  332 => 84,  318 => 83,  312 => 82,  295 => 81,  291 => 80,  288 => 79,  285 => 78,  277 => 76,  275 => 75,  269 => 74,  263 => 73,  257 => 72,  252 => 70,  248 => 68,  242 => 66,  240 => 65,  237 => 64,  234 => 63,  228 => 56,  222 => 54,  220 => 53,  215 => 51,  205 => 47,  202 => 46,  199 => 45,  193 => 44,  188 => 42,  185 => 41,  176 => 38,  167 => 37,  163 => 36,  158 => 34,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  133 => 26,  129 => 24,  127 => 23,  120 => 19,  117 => 18,  111 => 15,  106 => 14,  103 => 13,  97 => 12,  85 => 10,  73 => 8,  61 => 6,  11 => 4,);
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
 # Sidebar-Panel: Displays actions for contenttype
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-news' %}

{% block panel_icon 'fa-cog' %}

{% block panel_head __('contenttypes.generic.actions-all', {'%contenttypes%': context.contenttype.name}) %}

{% block panel_body %}
    {% if isallowed('contenttype:' ~ context.contenttype.slug ~ ':create') %}
        <a class=\"btn btn-primary\" href=\"{{ path('editcontent', {'contenttypeslug': context.contenttype.slug}) }}\">
            <i class=\"fa fa-plus\"></i> {{ __('contenttypes.generic.new', {'%contenttype%': context.contenttype.singular_name}) }}
        </a>
    {% endif %}

    <p style=\"margin-top: 15px;\"><strong>{{ __('general.phrase.filter') }}</strong></p>

    <form class=\"form-inline\">

        {% set taxonomyfilter = false %}

        <div class=\"form-group\">
        {% for taxonomy in context.contenttype.taxonomy|default([]) %}
            {% if config.get('taxonomy/' ~ taxonomy ~ '/options') is iterable %}
                {% set tax_query = global.request.query.get('taxonomy-' ~ taxonomy ) %}
                {% if tax_query %}
                    {% set taxonomyfilter = true %}
                {% endif %}
                <select name='taxonomy-{{taxonomy}}' class='form-control'>
                    <option value=''>
                        ({{ config.get('taxonomy/' ~ taxonomy ~ '/name')|default(taxonomy) }})
                    </option>
                {% for slug, name in config.get('taxonomy/' ~ taxonomy ~ '/options') %}
                    <option value='{{slug}}' {% if tax_query == slug %}selected{% endif %}>
                        {{name}}
                    </option>
                {% endfor %}
                </select>
                {{ __('general.phrase.or') }}
            {% endif %}
        {% endfor %}
        {% set filter_query = global.request.query.get('filter') %}
        {% set order_query = global.request.query.get('order') %}
            <input type=\"text\" class=\"form-control\" value=\"{{ filter_query }}\" name=\"filter\" style=\"width: 110px;\" placeholder=\"{{ __('general.phrase.keyword-ellipsis') }}\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> {{ __('general.phrase.filter') }}</button>

            {% if filter_query or order_query or taxonomyfilter %}
                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> {{ __('general.phrase.clear-filter-sort') }}</a>
            {% endif %}
        </div>

    </form>

    {# Use the `description:` from contenttypes.yml if set, otherwise fall back
       to the (localized) default descriptions that are available for the
       built-in contenttupes like 'pages' and 'blocks'. #}
    {% set description = context.contenttype.description|default(__(['contenttypes', context.contenttype.slug, 'description'], {DEFAULT: ''})) %}
    <div class=\"description\">
        {% if description %}
            {{ description|markdown }}
        {% endif %}
    </div>

    <p><strong>{{ __('general.phrase.details') }}</strong></p>
    <ul>
        <li>{{ __('general.phrase.status-default') }}: {{ context.contenttype.default_status|default('published') }}</li>
        <li>{{ __('general.phrase.listing-template') }}: <code>{{ context.contenttype.listing_template|default( config.get('general/listing_template') ) }}</code></li>
        <li>{{ __('general.phrase.template-detail') }}: <code>{{ context.contenttype.record_template|default( config.get('general/record_template') ) }}</code></li>
        {% if context.contenttype.taxonomy|default('') is iterable %}
            <li>{{ __('general.phrase.taxonomy') }}: {{ context.contenttype.taxonomy|join(', ') }}</li>
        {% endif %}
        {% if context.contenttype.relations|default('') is iterable %}
            <li>
                {{ __('general.phrase.relationships') }}:
                {% for rel, data in context.contenttype.relations %}
                    {{ rel }}{% if not loop.last %}, {% endif %}
                {% endfor %}
            </li>
        {% endif %}
    </ul>

{% endblock panel_body %}
", "@bolt/overview/_panel-actions_overview.twig", "");
    }
}
