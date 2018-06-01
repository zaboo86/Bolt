<?php

/* @bolt/edituser/edituser.twig */
class __TwigTemplate_05ecf4c4c205dd6eb0953ad697b0e1bc15d88a184ceb33d2504f2bf6cd62eb26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/edituser/edituser.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/edituser/edituser.twig"));

        $tags = array("if" => 8, "form_theme" => 25);
        $filters = array("escape" => 19);
        $functions = array("__" => 9, "widgets" => 30, "form_start" => 42, "form_widget" => 48, "form_end" => 50, "include" => 57);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'form_theme'),
                array('escape'),
                array('__', 'widgets', 'form_start', 'form_widget', 'form_end', 'include')
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

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Settings/Configuration");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 8
        echo "    ";
        if (($this->getAttribute(($context["context"] ?? null), "kind", array()) == "edit")) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-users.title.edit"));
            echo "
    ";
        } elseif (($this->getAttribute(        // line 10
($context["context"] ?? null), "kind", array()) == "profile")) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-users.title.profile"));
            echo "
    ";
        } elseif (($this->getAttribute(        // line 12
($context["context"] ?? null), "kind", array()) == "create")) {
            // line 13
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-users.title.create"));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 18
        echo "    ";
        if ((($this->getAttribute(($context["context"] ?? null), "kind", array()) == "edit") || ($this->getAttribute(($context["context"] ?? null), "kind", array()) == "profile"))) {
            // line 19
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "displayname", array()), "html", null, true));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 24
        echo "
    ";
        // line 25
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "form_bolt_layout.twig"));
        // line 26
        echo "
    <div class=\"row\">
        <div class=\"col-md-9\">

            ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "edituser_below_header", "backend"));
        echo "

            ";
        // line 32
        if (($this->getAttribute(($context["context"] ?? null), "kind", array()) != "profile")) {
            // line 33
            echo "                <p style=\"max-width: 500px;\">
                    ";
            // line 34
            if (($this->getAttribute(($context["context"] ?? null), "kind", array()) == "edit")) {
                // line 35
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-users.user-edit"));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 36
($context["context"] ?? null), "kind", array()) == "create")) {
                // line 37
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-users.user-create"));
                echo "
                    ";
            }
            // line 39
            echo "                </p>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_start', array("attr" => array("autocomplete" => "off"))));
        echo "
                ";
        // line 45
        echo "                <input type=\"text\" style=\"display:none;\" />
                <input type=\"password\" style=\"display:none;\" />

                ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'widget'));
        echo "

            ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_end'));
        echo "

            ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "edituser_bottom", "backend"));
        echo "

        </div>

        <aside class=\"col-md-3\">
            ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/edituser/_aside.twig"));
        echo "
        </aside>

    </div>

    <div class=\"progress complexity-progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            var passwordElements = '#user_edit_password_first, #user_profile_password_first';
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach();
            \$(passwordElements).parent().append(el);

            // Initialize complexify, to indicate password strength.
            \$(passwordElements).complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
                var progressBar = \$('#complexity-bar');
                progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));
                progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));
                progressBar.toggleClass('progress-bar-success', (complexity > 60 ));
                progressBar.css({'width': complexity + '%'});
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/edituser/edituser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 57,  195 => 52,  190 => 50,  185 => 48,  180 => 45,  176 => 42,  173 => 41,  169 => 39,  163 => 37,  161 => 36,  156 => 35,  154 => 34,  151 => 33,  149 => 32,  144 => 30,  138 => 26,  136 => 25,  133 => 24,  127 => 23,  116 => 19,  113 => 18,  107 => 17,  96 => 13,  94 => 12,  89 => 11,  87 => 10,  82 => 9,  79 => 8,  73 => 7,  61 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavPrimary > Username ^ Profile || NavSecondary > Configuration > Users > Edit #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Settings/Configuration' %}

{% block page_title %}
    {% if context.kind == 'edit' %}
        {{ __('page.edit-users.title.edit') }}
    {% elseif context.kind == 'profile' %}
        {{ __('page.edit-users.title.profile') }}
    {% elseif context.kind == 'create' %}
        {{ __('page.edit-users.title.create') }}
    {% endif %}
{% endblock page_title %}

{% block page_subtitle %}
    {% if context.kind == 'edit' or context.kind == 'profile' %}
        {{ context.displayname }}
    {% endif %}
{% endblock page_subtitle %}

{% block page_main %}

    {% form_theme context.form 'form_bolt_layout.twig' %}

    <div class=\"row\">
        <div class=\"col-md-9\">

            {{ widgets('edituser_below_header', 'backend') }}

            {% if context.kind != 'profile' %}
                <p style=\"max-width: 500px;\">
                    {% if context.kind == 'edit' %}
                        {{ __('page.edit-users.user-edit') }}
                    {% elseif context.kind == 'create' %}
                        {{ __('page.edit-users.user-create') }}
                    {% endif %}
                </p>
            {% endif %}

            {{ form_start(context.form, {'attr': {'autocomplete': 'off'}}) }}
                {# Google Chrome, Firefox, MS Edge all require this trick to prevent password fields from auto-filling.
                   @see http://stackoverflow.com/questions/15738259/disabling-chrome-autofill #}
                <input type=\"text\" style=\"display:none;\" />
                <input type=\"password\" style=\"display:none;\" />

                {{ form_widget(context.form) }}

            {{ form_end(context.form) }}

            {{ widgets('edituser_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-3\">
            {{ include('@bolt/edituser/_aside.twig') }}
        </aside>

    </div>

    <div class=\"progress complexity-progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            var passwordElements = '#user_edit_password_first, #user_profile_password_first';
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach();
            \$(passwordElements).parent().append(el);

            // Initialize complexify, to indicate password strength.
            \$(passwordElements).complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
                var progressBar = \$('#complexity-bar');
                progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));
                progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));
                progressBar.toggleClass('progress-bar-success', (complexity > 60 ));
                progressBar.css({'width': complexity + '%'});
            });
        });
    </script>

{% endblock page_main %}
", "@bolt/edituser/edituser.twig", "");
    }
}
