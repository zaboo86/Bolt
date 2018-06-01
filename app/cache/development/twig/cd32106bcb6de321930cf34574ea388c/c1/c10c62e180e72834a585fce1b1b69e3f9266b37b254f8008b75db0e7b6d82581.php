<?php

/* @bolt/editcontent/_aside-status.twig */
class __TwigTemplate_bd22dbef7d8753fb53945908aa3a008dbefdc462a96dae3ccfc7d326d5c351dc extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-status.twig"));

        $tags = array("from" => 1, "if" => 14);
        $filters = array("escape" => 7, "default" => 7, "localedatetime" => 15);
        $functions = array("__" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'if'),
                array('escape', 'default', 'localedatetime'),
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

        // line 1
        $context["__internal_9bd0318800e39814afd8ead9e78dcd1d99136e6f105605ff129ab2d1523eb985"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_aside-status.twig", 1);
        // line 2
        echo "
<p>
    ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Current (saved) status:"));
        echo "
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.change-current-status"));
        echo "\">
        <strong>
            <i class=\"fa fa-circle status-";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "status", array()), $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.none"))) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.none"))), "html", null, true));
        echo "\"></i>
            ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["status_names"] ?? null), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "status", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["status_names"] ?? null), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "status", array()), array(), "array"), $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.none"))) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.none"))), "html", null, true));
        echo "
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "id", array()))) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.saved-on-colon"));
            echo " <strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->localeDateTime($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datechanged", array()), "%c"));
            echo "</strong>
    <small>(";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_9bd0318800e39814afd8ead9e78dcd1d99136e6f105605ff129ab2d1523eb985"]->getbuic_moment($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datechanged", array())));
            echo ")</small>
";
        } else {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()))));
            echo "
";
        }
        // line 20
        echo "</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  88 => 18,  83 => 16,  76 => 15,  74 => 14,  65 => 8,  61 => 7,  56 => 5,  52 => 4,  48 => 2,  46 => 1,);
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

<p>
    {{ __(\"Current (saved) status:\") }}
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"{{ __('general.phrase.change-current-status') }}\">
        <strong>
            <i class=\"fa fa-circle status-{{ context.content.status|default(__('general.phrase.none')) }}\"></i>
            {{ status_names[context.content.status]|default(__('general.phrase.none')) }}
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    {% if context.content.id is not empty %}
    {{ __('general.phrase.saved-on-colon') }} <strong>{{ context.content.datechanged|localedatetime(\"%c\") }}</strong>
    <small>({{ buic_moment(context.content.datechanged) }})</small>
{% else %}
    {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.singular_name}) }}
{% endif %}
</p>
", "@bolt/editcontent/_aside-status.twig", "");
    }
}
