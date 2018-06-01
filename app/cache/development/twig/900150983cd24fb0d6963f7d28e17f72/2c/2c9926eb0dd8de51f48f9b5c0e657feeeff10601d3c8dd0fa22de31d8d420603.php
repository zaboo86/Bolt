<?php

/* @bolt/editcontent/_aside-preview.twig */
class __TwigTemplate_f78c649093f76f4b01ca844950b1212965a304cce24cbab107aa2723f9464e47 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-preview.twig"));

        $tags = array("if" => 1, "set" => 21);
        $filters = array("default" => 1, "escape" => 4, "keys" => 13);
        $functions = array("path" => 4, "__" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('default', 'escape', 'keys'),
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

        // line 1
        if ( !(($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 2
            echo "<div class=\"btn-group\">
    ";
            // line 3
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 4
                echo "        <button type=\"button\" class=\"btn btn-default\" id=\"sidebar_preview\" data-url=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_slug", array()))), "html", null, true));
                echo "\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 5
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.preview"));
                echo "
        </button>
    ";
            } else {
                // line 8
                echo "        <button type=\"button\" class=\"btn btn-disabled\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 9
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-preview"));
                echo "
        </button>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if (((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "link", array(), "any", true, true)) && twig_in_filter("contentlink", twig_get_array_keys_filter($this->getAttribute(($context["config"] ?? null), "get", array(0 => "routing"), "method"))))) {
                // line 14
                echo "        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                ";
                // line 21
                $context["placeholder"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentlink", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_slug", array()), "slug" => "__replaceme"));
                // line 22
                echo "                <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "link", array()), "html", null, true));
                echo "\" data-href-placeholder=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true));
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> ";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("View (saved version) on site"));
                echo "
                </a>
            </li>
        </ul>
    ";
            }
            // line 28
            echo "</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  96 => 23,  89 => 22,  87 => 21,  78 => 14,  76 => 13,  73 => 12,  67 => 9,  64 => 8,  58 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not context.contenttype.viewless|default(false) %}{# don't show for viewless contenttypes. #}
<div class=\"btn-group\">
    {% if app.routes.get('preview') %}
        <button type=\"button\" class=\"btn btn-default\" id=\"sidebar_preview\" data-url=\"{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}\">
            <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.preview') }}
        </button>
    {% else %}
        <button type=\"button\" class=\"btn btn-disabled\">
            <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.no-preview') }}
        </button>
    {% endif %}

    {% if context.content.status == \"published\" and context.content.link is defined and 'contentlink' in config.get('routing')|keys %}
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                {% set placeholder = path('contentlink', {'contenttypeslug': context.contenttype.singular_slug, 'slug': '__replaceme'}) %}
                <a href=\"{{ context.content.link }}\" data-href-placeholder=\"{{ placeholder }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> {{ __('View (saved version) on site') }}
                </a>
            </li>
        </ul>
    {% endif %}
</div>
{% endif %}
", "@bolt/editcontent/_aside-preview.twig", "");
    }
}
