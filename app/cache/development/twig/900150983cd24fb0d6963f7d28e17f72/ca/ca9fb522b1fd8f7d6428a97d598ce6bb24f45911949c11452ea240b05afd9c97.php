<?php

/* @bolt/editcontent/_includes-data.twig */
class __TwigTemplate_a6059caf4bfbf001c09a0b4cd8dbc1983381f27549c4d00e68f5651dd88922f8 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_includes-data.twig"));

        $tags = array("set" => 3, "for" => 19, "if" => 25);
        $filters = array("escape" => 11, "trim" => 11);
        $functions = array("__" => 6, "data" => 11, "include" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('escape', 'trim'),
                array('__', 'data', 'include')
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
        ob_start();
        // line 4
        echo "    <div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("%NOTICE_ID%");
        echo "\" class=\"alert alert-danger alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <label for=\"%FIELD_ID%\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.field-fieldname"));
        echo "</label>
        %MESSAGE%
    </div>
";
        $context["template_alertbox"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("validation.alertbox", twig_trim_filter(($context["template_alertbox"] ?? null))), "html", null, true));
        echo "
";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("validation.generic_msg", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.required-is-or-match-pattern")), "html", null, true));
        echo "

";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("editcontent.msg.change_quit", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.warning-unfinished-changes-loss")), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("editcontent.msg.saving", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.saving-ellipsis")), "html", null, true));
        echo "

";
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "fieldtypes", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 20
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, (("@bolt/editcontent/fielddata/_" . $context["type"]) . ".twig"), array(), true, true));
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        if ((((twig_in_filter("file", $this->getAttribute(($context["context"] ?? null), "fieldtypes", array())) || twig_in_filter("filelist", $this->getAttribute(($context["context"] ?? null), "fieldtypes", array()))) || twig_in_filter("image", $this->getAttribute(($context["context"] ?? null), "fieldtypes", array()))) || twig_in_filter("imagelist", $this->getAttribute(($context["context"] ?? null), "fieldtypes", array())))) {
            // line 26
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/data/_uploads.twig"));
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_includes-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 26,  128 => 25,  125 => 24,  122 => 22,  105 => 20,  88 => 19,  85 => 18,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  64 => 10,  57 => 6,  51 => 4,  49 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# General data #}

{% set template_alertbox %}
    <div id=\"{{ '%NOTICE_ID%' }}\" class=\"alert alert-danger alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <label for=\"%FIELD_ID%\">{{ __('general.phrase.field-fieldname') }}</label>
        %MESSAGE%
    </div>
{% endset %}

{{ data('validation.alertbox',         template_alertbox|trim) }}
{{ data('validation.generic_msg',      __('general.phrase.required-is-or-match-pattern')) }}

{{ data('editcontent.msg.change_quit', __('general.phrase.warning-unfinished-changes-loss')) }}
{{ data('editcontent.msg.saving',      __('general.phrase.saving-ellipsis')) }}

{# Process field specific includes and data #}

{% for type in context.fieldtypes %}
    {{ include('@bolt/editcontent/fielddata/_' ~ type ~ '.twig', ignore_missing = true) }}
{% endfor %}

{# Has uploads? #}

{% if 'file' in context.fieldtypes or 'filelist' in context.fieldtypes or 'image' in context.fieldtypes or 'imagelist' in context.fieldtypes %}
    {{ include('@bolt/editcontent/data/_uploads.twig') }}
{% endif %}
", "@bolt/editcontent/_includes-data.twig", "");
    }
}
