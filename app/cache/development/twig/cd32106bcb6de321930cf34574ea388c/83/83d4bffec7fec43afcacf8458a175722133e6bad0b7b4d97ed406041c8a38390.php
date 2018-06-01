<?php

/* @bolt/editcontent/fielddata/_templateselect.twig */
class __TwigTemplate_0a73bd538f327c0e9b75d0446d85a6af60f483f3bbd327621c4f174770b71328 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fielddata/_templateselect.twig"));

        $tags = array();
        $filters = array("escape" => 3);
        $functions = array("data" => 3, "__" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('escape'),
                array('data', '__')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.templateselect.template.warning", "<strong>%STATUS%:</strong> %MESSAGE%"), "html", null, true));
        echo "

";
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.templateselect.message.change", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.warning-template")), "html", null, true));
        echo "
";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.templateselect.message.warning", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.warning-templatefields-loss")), "html", null, true));
        echo "
";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.templateselect.message.status", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.warning")), "html", null, true));
        echo "
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.templateselect.text.default", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("(default template)")), "html", null, true));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  65 => 9,  61 => 8,  57 => 7,  54 => 6,  49 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{### Template ###}

{{ data('field.templateselect.template.warning', '<strong>%STATUS%:</strong> %MESSAGE%') }}

{### Messages ###}

{{ data('field.templateselect.message.change',  __('general.phrase.warning-template')) }}
{{ data('field.templateselect.message.warning', __('general.phrase.warning-templatefields-loss')) }}
{{ data('field.templateselect.message.status',  __('general.phrase.warning')) }}
{{ data('field.templateselect.text.default',    __('(default template)')) }}
", "@bolt/editcontent/fielddata/_templateselect.twig", "");
    }
}
