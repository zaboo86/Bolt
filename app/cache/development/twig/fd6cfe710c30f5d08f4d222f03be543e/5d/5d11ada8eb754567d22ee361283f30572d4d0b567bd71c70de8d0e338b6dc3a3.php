<?php

/* @bolt/firstuser/firstuser.twig */
class __TwigTemplate_1fe0de40d4d99154d3ab0240d5a7e78d60cac54d5ae4d73fc73c657208064804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-no_nav.twig", "@bolt/firstuser/firstuser.twig", 3);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'button_icon' => array($this, 'block_button_icon'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/firstuser/firstuser.twig"));

        $tags = array("form_theme" => 7, "if" => 14, "for" => 18);
        $filters = array("escape" => 20, "raw" => 21);
        $functions = array("__" => 5, "form_start" => 61, "form_widget" => 67, "form_end" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('form_theme', 'if', 'for'),
                array('escape', 'raw'),
                array('__', 'form_start', 'form_widget', 'form_end')
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

        // line 7
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "form_bolt_layout.twig", 1 => $this));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.create-user-first"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_icon"));

        echo "<i class=\"fa fa-sign-in fa-fw\"></i> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 12
        echo "
    <div class=\"row\">
        ";
        // line 14
        if ($this->getAttribute(($context["context"] ?? null), "required", array())) {
            // line 15
            echo "            <div class=\"alert alert-danger\">
                <strong><i class=\"fa fa-minus-circle\"> </i> Failed System and/or PHP requirements:</strong>
                <ol>
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "required", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "                        <li>
                            ";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "testMessage", array()), "html", null, true));
                echo "<br>
                            &rarr; ";
                // line 21
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["item"], "helpHtml", array()));
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ol>
            </div>
        ";
        } else {
            // line 27
            echo "            <div class=\"alert alert-success\">
                <strong>
                    <i class=\"fa fa-check-circle\"> </i> No outstanding system or PHP requirements
                </strong>
            </div>
        ";
        }
        // line 33
        echo "    </div>
    <div class=\"row\">
        ";
        // line 35
        if ($this->getAttribute(($context["context"] ?? null), "recommended", array())) {
            // line 36
            echo "            <div class=\"alert alert-warning\">
                <strong><i class=\"fa fa-info-circle\"> </i> Recommended updates:</strong>
                <ol>
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "recommended", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "                        <li>
                            ";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "testMessage", array()), "html", null, true));
                echo "<br>
                            &rarr; ";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["item"], "helpHtml", array()));
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </ol>
            </div>
        ";
        } else {
            // line 48
            echo "            <div class=\"alert alert-success\">
                <strong>
                    <i class=\"fa fa-check\"> </i> No recommended updates
                </strong>
            </div>
        ";
        }
        // line 54
        echo "    </div>


    <p class=\"first-user\">
        ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.users-none-create-first-extended"));
        echo "
    </p>

    ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_start', array("attr" => array("class" => "submitspinner", "autocomplete" => "off"))));
        echo "
        ";
        // line 64
        echo "        <input type=\"text\" style=\"display:none;\" />
        <input type=\"password\" style=\"display:none;\" />

        ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'widget'));
        echo "

    ";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_end', array("render_rest" => false)));
        echo "

    ";
        // line 71
        if ( !twig_test_empty($this->getAttribute(($context["context"] ?? null), "note", array()))) {
            // line 72
            echo "        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.note-colon"));
            echo "</strong> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["context"] ?? null), "note", array()));
            echo "
        </p>
    ";
        }
        // line 76
        echo "
    <div class=\"progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach(),
                pw = \$('#user_new_password_first');
            // Initialize complexify, to indicate password strength.
            pw.parent().append(el);
            pw.complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
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
        return "@bolt/firstuser/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 76,  217 => 73,  214 => 72,  212 => 71,  207 => 69,  202 => 67,  197 => 64,  193 => 61,  187 => 58,  181 => 54,  173 => 48,  168 => 45,  159 => 42,  155 => 41,  152 => 40,  148 => 39,  143 => 36,  141 => 35,  137 => 33,  129 => 27,  124 => 24,  115 => 21,  111 => 20,  108 => 19,  104 => 18,  99 => 15,  97 => 14,  93 => 12,  87 => 11,  75 => 9,  63 => 5,  56 => 3,  54 => 7,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: Create the first User #}

{% extends '@bolt/_base/_page-no_nav.twig' %}

{% block page_title __('general.phrase.create-user-first') %}

{% form_theme context.form with ['form_bolt_layout.twig', _self] %}
{# Submit icon #}
{% block button_icon %}<i class=\"fa fa-sign-in fa-fw\"></i> {% endblock button_icon %}

{% block page_main %}

    <div class=\"row\">
        {% if context.required %}
            <div class=\"alert alert-danger\">
                <strong><i class=\"fa fa-minus-circle\"> </i> Failed System and/or PHP requirements:</strong>
                <ol>
                    {% for item in context.required %}
                        <li>
                            {{ item.testMessage }}<br>
                            &rarr; {{ item.helpHtml|raw }}
                        </li>
                    {% endfor %}
                </ol>
            </div>
        {% else %}
            <div class=\"alert alert-success\">
                <strong>
                    <i class=\"fa fa-check-circle\"> </i> No outstanding system or PHP requirements
                </strong>
            </div>
        {% endif %}
    </div>
    <div class=\"row\">
        {% if context.recommended %}
            <div class=\"alert alert-warning\">
                <strong><i class=\"fa fa-info-circle\"> </i> Recommended updates:</strong>
                <ol>
                    {% for item in context.recommended %}
                        <li>
                            {{ item.testMessage }}<br>
                            &rarr; {{ item.helpHtml|raw }}
                        </li>
                    {% endfor %}
                </ol>
            </div>
        {% else %}
            <div class=\"alert alert-success\">
                <strong>
                    <i class=\"fa fa-check\"> </i> No recommended updates
                </strong>
            </div>
        {% endif %}
    </div>


    <p class=\"first-user\">
        {{ __('general.phrase.users-none-create-first-extended') }}
    </p>

    {{ form_start(context.form, {'attr': {'class': 'submitspinner', 'autocomplete': \"off\"}}) }}
        {# Google Chrome, Firefox, MS edge all require this trick to prevent password fields from auto-filling.
           @see http://stackoverflow.com/questions/15738259/disabling-chrome-autofill #}
        <input type=\"text\" style=\"display:none;\" />
        <input type=\"password\" style=\"display:none;\" />

        {{ form_widget(context.form) }}

    {{ form_end(context.form, { 'render_rest': false }) }}

    {% if context.note is not empty %}
        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>{{ __('general.phrase.note-colon') }}</strong> {{ context.note|raw }}
        </p>
    {% endif %}

    <div class=\"progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach(),
                pw = \$('#user_new_password_first');
            // Initialize complexify, to indicate password strength.
            pw.parent().append(el);
            pw.complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
                var progressBar = \$('#complexity-bar');
                progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));
                progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));
                progressBar.toggleClass('progress-bar-success', (complexity > 60 ));
                progressBar.css({'width': complexity + '%'});
            });
        });
    </script>

{% endblock page_main %}
", "@bolt/firstuser/firstuser.twig", "");
    }
}
