<?php

/* @bolt/components/pager.twig */
class __TwigTemplate_84d4288ee1c3dddf36a5c7fee3271733cad3c82eeb2d35c0f25a5ac61b661bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pager/default.twig", "@bolt/components/pager.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'prev_label' => array($this, 'block_prev_label'),
            'next_label' => array($this, 'block_next_label'),
            'first_label' => array($this, 'block_first_label'),
            'last_label' => array($this, 'block_last_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pager/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/pager.twig"));

        $tags = array();
        $filters = array("escape" => 28);
        $functions = array("__" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('escape'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "    <div style=\"text-align: center\">
        <ul class=\"pagination pagination-centered\">
            ";
        // line 7
        echo "            <li><span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.pager-showing-from-to-of", array("%pager_for%" => $this->getAttribute(        // line 8
($context["pager"] ?? null), "for", array()), "%from%" => $this->getAttribute(        // line 9
($context["pager"] ?? null), "showingFrom", array()), "%to%" => $this->getAttribute(        // line 10
($context["pager"] ?? null), "showingTo", array()), "%count%" => $this->getAttribute(        // line 11
($context["pager"] ?? null), "count", array()))));
        // line 12
        echo "</span>
            </li>
            ";
        // line 14
        $this->displayBlock("items", $context, $blocks);
        echo "
        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_prev_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prev_label"));

        // line 20
        echo "<i class=\"fa fa-angle-left\" style=\"font-weight: bold;\"></i>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_next_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "next_label"));

        // line 24
        echo "<i class=\"fa fa-angle-right\" style=\"font-weight: bold;\"></i>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_first_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "first_label"));

        // line 28
        echo "<i class=\"fa fa-angle-double-left\" style=\"font-weight: bold;\"></i> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_last_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "last_label"));

        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true));
        echo " <i class=\"fa fa-angle-double-right\" style=\"font-weight: bold;\"></i>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 32,  134 => 31,  126 => 28,  120 => 27,  113 => 24,  107 => 23,  100 => 20,  94 => 19,  83 => 14,  79 => 12,  77 => 11,  76 => 10,  75 => 9,  74 => 8,  72 => 7,  68 => 4,  62 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pager/default.twig' %}

{% block list %}
    <div style=\"text-align: center\">
        <ul class=\"pagination pagination-centered\">
            {# Showing {{ for }} {{ showingFrom }} - {{ showingTo }} of {{ count }} #}
            <li><span>{{ __('general.phrase.pager-showing-from-to-of', {
                    '%pager_for%': pager.for,
                    '%from%': pager.showingFrom,
                    '%to%': pager.showingTo,
                    '%count%': pager.count})
                }}</span>
            </li>
            {{ block('items') }}
        </ul>
    </div>
{% endblock %}

{%- block prev_label -%}
    <i class=\"fa fa-angle-left\" style=\"font-weight: bold;\"></i>
{%- endblock -%}

{%- block next_label -%}
    <i class=\"fa fa-angle-right\" style=\"font-weight: bold;\"></i>
{%- endblock -%}

{%- block first_label -%}
    <i class=\"fa fa-angle-double-left\" style=\"font-weight: bold;\"></i> {{ page }}
{%- endblock -%}

{%- block last_label -%}
    {{ page }} <i class=\"fa fa-angle-double-right\" style=\"font-weight: bold;\"></i>
{%- endblock -%}
", "@bolt/components/pager.twig", "");
    }
}
