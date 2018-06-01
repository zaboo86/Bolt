<?php

/* @bolt/editcontent/_aside.twig */
class __TwigTemplate_635b17d3445a899e0f238963088b8295c097829e84c11e423f91265bdfff5b4d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside.twig"));

        $tags = array("import" => 1, "if" => 15);
        $filters = array("default" => 23);
        $functions = array("widgets" => 3, "__" => 7, "include" => 11, "isallowed" => 15);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'if'),
                array('default'),
                array('widgets', '__', 'include', 'isallowed')
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
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/editcontent/_aside.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editcontent_aside_top", "backend"));
        echo "

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.actions-one", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()))));
        echo "
    </div>

    <div class=\"panel-body\">
        ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_aside-save.twig"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_aside-live-editor.twig"));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_aside-preview.twig"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_aside-status.twig"));
        echo "
        ";
        // line 15
        if (($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("delete", $this->getAttribute(($context["context"] ?? null), "contenttype", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "id", array())))) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_aside-delete.twig"));
            echo "
        ";
        }
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editcontent_aside_middle", "backend"));
        echo "

";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["panels"]->getchanges($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "id", array()), null)) : (null))));
        echo "

";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["panels"]->getlastmodified($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "id", array())));
        echo "

";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["panels"]->getstack(5));
        echo "

";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editcontent_aside_bottom", "backend"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  109 => 27,  104 => 25,  99 => 23,  94 => 21,  89 => 18,  83 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 7,  51 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_panels.twig' as panels %}

{{ widgets('editcontent_aside_top', 'backend') }}

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> {{ __('contenttypes.generic.actions-one',{'%contenttype%': context.contenttype.singular_name}) }}
    </div>

    <div class=\"panel-body\">
        {{ include('@bolt/editcontent/_aside-save.twig') }}
        {{ include('@bolt/editcontent/_aside-live-editor.twig') }}
        {{ include('@bolt/editcontent/_aside-preview.twig') }}
        {{ include('@bolt/editcontent/_aside-status.twig') }}
        {% if isallowed('delete', context.contenttype) and context.content.id is not empty %}
            {{ include('@bolt/editcontent/_aside-delete.twig') }}
        {% endif %}
    </div>
</div>

{{ widgets('editcontent_aside_middle', 'backend') }}

{{ panels.changes(context.contenttype.slug, context.content.id|default(null)) }}

{{ panels.lastmodified(context.contenttype.slug, context.content.id) }}

{{ panels.stack(5) }}

{{ widgets('editcontent_aside_bottom', 'backend') }}
", "@bolt/editcontent/_aside.twig", "");
    }
}
