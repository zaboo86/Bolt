<?php

/* @bolt/editcontent/_buttons.twig */
class __TwigTemplate_b8a38c3a9755c2ed8965bccf44f9d65f0d088f17137fa4b9ccb6dac1d958e4dc extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_buttons.twig"));

        $tags = array("from" => 1, "form_theme" => 3, "if" => 28, "set" => 60);
        $filters = array("default" => 28, "keys" => 53, "escape" => 61, "localedatetime" => 77);
        $functions = array("form_widget" => 10, "path" => 41, "__" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'form_theme', 'if', 'set'),
                array('default', 'keys', 'escape', 'localedatetime'),
                array('form_widget', 'path', '__')
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
        $context["__internal_95a914d6dfa1e096c23c5e6b2ed51916b10d5ebd8333c1b6f482132ec947fd54"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_buttons.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "@bolt/editcontent/form/editcontent_form_layout.twig"));
        // line 4
        echo "
<div class=\"form-group hidden-xs\">
    <div class=\"col-xs-12\">

        ";
        // line 9
        echo "        <div class=\"btn-group\">
            ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "save", array()), 'widget'));
        echo "

            ";
        // line 13
        echo "            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "save_return", array()), 'widget', array("attr" => array("class" => "btn-link"))));
        echo "
                </li>
                <li>
                    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "save_create", array()), 'widget', array("attr" => array("class" => "btn-link"))));
        echo "
                </li>
            </ul>
        </div>

        ";
        // line 28
        echo "        ";
        if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "liveeditor", array()), false)) : (false))) {
            // line 29
            echo "            <div class=\"btn-group\">
                ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "live_edit", array()), 'widget', array("attr" => array("class" => "btn-secondary"))));
            echo "
            </div>
        ";
        }
        // line 33
        echo "
        ";
        // line 35
        echo "        ";
        if ( !(($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 36
            echo "            <div class=\"btn-group\">
                ";
            // line 37
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 38
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "preview", array()), 'widget', array("attr" => array("class" => "btn-default", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute(                // line 41
($context["context"] ?? null), "contenttype", array()), "singular_slug", array()))), "disabled" => true))));
                // line 44
                echo "
                ";
            } else {
                // line 46
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "preview", array()), 'widget', array("label" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-preview"), "attr" => array("class" => "btn-default"))));
                // line 49
                echo "
                ";
            }
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            if (((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "link", array(), "any", true, true)) && twig_in_filter("contentlink", twig_get_array_keys_filter($this->getAttribute(($context["config"] ?? null), "get", array(0 => "routing"), "method"))))) {
                // line 54
                echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            ";
                // line 60
                $context["placeholder"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentlink", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_slug", array()), "slug" => "__replaceme"));
                // line 61
                echo "                            <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "link", array()), "html", null, true));
                echo "\" data-href-placeholder=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true));
                echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"> </i>";
                // line 62
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("View (saved version) on site"));
                echo "
                            </a>
                        </li>
                    </ul>
                ";
            }
            // line 67
            echo "            </div>
        ";
        }
        // line 69
        echo "
        ";
        // line 71
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "delete", array()), 'widget', array("attr" => array("class" => "btn-silent-danger"))));
        echo "

        ";
        // line 74
        echo "        <p class=\"lastsaved form-control-static\">
            ";
        // line 75
        if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "id", array()) != 0)) {
            // line 76
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.saved-on-colon"));
            echo "
                <strong>";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->localeDateTime($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datechanged", array()), "%c"));
            echo "</strong>
                <small>(";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_95a914d6dfa1e096c23c5e6b2ed51916b10d5ebd8333c1b6f482132ec947fd54"]->getbuic_moment($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datechanged", array())));
            echo ")</small>
            ";
        } else {
            // line 80
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()))));
            echo "
            ";
        }
        // line 82
        echo "        </p>

    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 82,  190 => 80,  185 => 78,  181 => 77,  176 => 76,  174 => 75,  171 => 74,  165 => 71,  162 => 69,  158 => 67,  150 => 62,  143 => 61,  141 => 60,  133 => 54,  130 => 53,  127 => 51,  123 => 49,  120 => 46,  116 => 44,  114 => 41,  112 => 38,  110 => 37,  107 => 36,  104 => 35,  101 => 33,  95 => 30,  92 => 29,  89 => 28,  81 => 22,  75 => 19,  67 => 13,  62 => 10,  59 => 9,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@bolt/_buic/_moment.twig' import buic_moment %}

{% form_theme context.form '@bolt/editcontent/form/editcontent_form_layout.twig' %}

<div class=\"form-group hidden-xs\">
    <div class=\"col-xs-12\">

        {# Save Contentype #}
        <div class=\"btn-group\">
            {{ form_widget(context.form.save) }}

            {# Dropdown #}
            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    {{ form_widget(context.form.save_return, {'attr': {'class': 'btn-link'}}) }}
                </li>
                <li>
                    {{ form_widget(context.form.save_create, {'attr': {'class': 'btn-link'}}) }}
                </li>
            </ul>
        </div>

        {# Live Edit #}
        {% if context.contenttype.liveeditor|default(false) %}
            <div class=\"btn-group\">
                {{ form_widget(context.form.live_edit, {'attr': {'class': 'btn-secondary'}}) }}
            </div>
        {% endif %}

        {# Preview (Don't show for viewless contenttypes.) #}
        {% if not context.contenttype.viewless|default(false) %}
            <div class=\"btn-group\">
                {% if app.routes.get('preview') %}
                    {{ form_widget(context.form.preview, {
                        'attr': {
                            'class': 'btn-default',
                            'data-url': path('preview', {'contenttypeslug': context.contenttype.singular_slug}),
                            'disabled': true
                        }
                    }) }}
                {% else %}
                    {{ form_widget(context.form.preview, {
                        'label': __('general.phrase.no-preview'),
                        'attr': {'class': 'btn-default'}
                    }) }}
                {% endif %}

                {# Dropdown #}
                {% if context.content.status == \"published\" and context.content.link is defined and 'contentlink' in config.get('routing')|keys %}
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            {% set placeholder = path('contentlink', {'contenttypeslug': context.contenttype.singular_slug, 'slug': '__replaceme'}) %}
                            <a href=\"{{ context.content.link }}\" data-href-placeholder=\"{{ placeholder }}\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"> </i>{{ __('View (saved version) on site') }}
                            </a>
                        </li>
                    </ul>
                {% endif %}
            </div>
        {% endif %}

        {# Hidden delete button #}
        {{ form_widget(context.form.delete, {'attr': {'class': 'btn-silent-danger'}}) }}

        {# Last saved #}
        <p class=\"lastsaved form-control-static\">
            {% if context.content.id != 0 %}
                {{ __('general.phrase.saved-on-colon') }}
                <strong>{{ context.content.datechanged|localedatetime(\"%c\") }}</strong>
                <small>({{ buic_moment(context.content.datechanged) }})</small>
            {% else %}
                {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.singular_name}) }}
            {% endif %}
        </p>

    </div>

</div>
", "@bolt/editcontent/_buttons.twig", "");
    }
}
