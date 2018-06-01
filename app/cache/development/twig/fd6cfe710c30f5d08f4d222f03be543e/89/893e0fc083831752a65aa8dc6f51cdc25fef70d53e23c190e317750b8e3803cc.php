<?php

/* @bolt/editcontent/form/editcontent_form_layout.twig */
class __TwigTemplate_2eaec7e379356d5f9b5aae7ea1bd5f1bb9ad7d4d1bcdb4cd4aec76abe5b8f043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_bolt_layout.twig", "@bolt/editcontent/form/editcontent_form_layout.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_bolt_layout.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'content_edit_save_button_icon' => array($this, 'block_content_edit_save_button_icon'),
                'content_edit_save_return_button_icon' => array($this, 'block_content_edit_save_return_button_icon'),
                'content_edit_save_create_button_icon' => array($this, 'block_content_edit_save_create_button_icon'),
                'content_edit_live_edit_button_icon' => array($this, 'block_content_edit_live_edit_button_icon'),
                'content_edit_preview_button_icon' => array($this, 'block_content_edit_preview_button_icon'),
                'content_edit_delete_button_icon' => array($this, 'block_content_edit_delete_button_icon'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/form/editcontent_form_layout.twig"));

        $tags = array("block" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
                array(),
                array()
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
        // line 4
        $this->displayBlock('content_edit_save_button_icon', $context, $blocks);
        // line 7
        $this->displayBlock('content_edit_save_return_button_icon', $context, $blocks);
        // line 10
        $this->displayBlock('content_edit_save_create_button_icon', $context, $blocks);
        // line 15
        $this->displayBlock('content_edit_live_edit_button_icon', $context, $blocks);
        // line 20
        $this->displayBlock('content_edit_preview_button_icon', $context, $blocks);
        // line 25
        $this->displayBlock('content_edit_delete_button_icon', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_edit_save_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_edit_save_button_icon"));

        // line 5
        echo "    <i class=\"fa fa-fw fa-flag\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content_edit_save_return_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_edit_save_return_button_icon"));

        // line 8
        echo "    <i class=\"fa fa-fw fa-flag\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_content_edit_save_create_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_edit_save_create_button_icon"));

        // line 11
        echo "    <i class=\"fa fa-fw fa-flag\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_content_edit_live_edit_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_edit_live_edit_button_icon"));

        // line 16
        echo "    <i class=\"fa fa-pencil\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_content_edit_preview_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_edit_preview_button_icon"));

        // line 21
        echo "    <i class=\"fa fa-external-link-square\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_content_edit_delete_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_edit_delete_button_icon"));

        // line 26
        echo "    <i class=\"fa fa-trash\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/form/editcontent_form_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 26,  154 => 25,  146 => 21,  140 => 20,  132 => 16,  126 => 15,  118 => 11,  112 => 10,  104 => 8,  98 => 7,  90 => 5,  84 => 4,  77 => 25,  75 => 20,  73 => 15,  71 => 10,  69 => 7,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_bolt_layout.twig' %}

{# Save button icons #}
{%- block content_edit_save_button_icon %}
    <i class=\"fa fa-fw fa-flag\"> </i>
{% endblock -%}
{%- block content_edit_save_return_button_icon %}
    <i class=\"fa fa-fw fa-flag\"> </i>
{% endblock -%}
{%- block content_edit_save_create_button_icon %}
    <i class=\"fa fa-fw fa-flag\"> </i>
{% endblock -%}

{# Live edit icon #}
{%- block content_edit_live_edit_button_icon %}
    <i class=\"fa fa-pencil\"> </i>
{% endblock -%}

{# Preview button icon #}
{%- block content_edit_preview_button_icon %}
    <i class=\"fa fa-external-link-square\"> </i>
{% endblock -%}

{# Delete button icon #}
{%- block content_edit_delete_button_icon %}
    <i class=\"fa fa-trash\"> </i>
{% endblock -%}
", "@bolt/editcontent/form/editcontent_form_layout.twig", "");
    }
}
