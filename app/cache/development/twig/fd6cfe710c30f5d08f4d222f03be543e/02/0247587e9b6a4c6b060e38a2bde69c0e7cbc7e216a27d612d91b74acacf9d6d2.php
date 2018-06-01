<?php

/* partials/_sub_menu_footer.twig */
class __TwigTemplate_71f1f9505989938524b1db564d77d8d65ed82a90634a0f17647cfd5f400b0e50 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_menu_footer.twig"));

        $tags = array("if" => 8, "set" => 9, "from" => 26, "for" => 29, "macro" => 14, "spaceless" => 16);
        $filters = array("escape" => 18, "default" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'from', 'for', 'macro', 'spaceless'),
                array('escape', 'default'),
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

        // line 6
        echo "
";
        // line 8
        if ( !array_key_exists("withsubmenus", $context)) {
            // line 9
            echo "    ";
            $context["withsubmenus"] = true;
        }
        // line 11
        echo "
";
        // line 24
        echo "
";
        // line 26
        $context["__internal_1b458a143b6acbac446779cd79012942b8f111513e0ca72cf881e9a54ff27282"] = $this;
        // line 27
        echo "
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 31
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_1b458a143b6acbac446779cd79012942b8f111513e0ca72cf881e9a54ff27282"]->getdisplay_menu_item($context["item"], $context["loop"], "", ($context["withsubmenus"] ?? null)));
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null, $__extraclass__ = null, $__withsubmenus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "extraclass" => $__extraclass__,
            "withsubmenus" => $__withsubmenus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_menu_item"));

            // line 15
            echo "    ";
            $context["__internal_bc9e14550e628376a38bbfb978ce01e5f1b01e7a6e471ff3c06b155ad140d66f"] = $this;
            // line 16
            echo "    ";
            ob_start();
            // line 17
            echo "    <p class=\"level-item\">
        <a href=\"";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "link", array()), "html", null, true));
            echo "\" title='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "title", array()), "")) : (""))));
            echo "' class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", array()), "")) : ("")), "html", null, true));
            echo "'>";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "label", array()), "-")) : ("-")), "html", null, true));
            // line 20
            echo "</a>
    </p>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/_sub_menu_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 20,  143 => 19,  136 => 18,  133 => 17,  130 => 16,  127 => 15,  109 => 14,  86 => 31,  83 => 30,  66 => 29,  63 => 27,  61 => 26,  58 => 24,  55 => 11,  51 => 9,  49 => 8,  46 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# This file might seem a little complex, because of the high density of tags.
   It uses Twig macros and ternary selectors. Read up on them, if required:
   macros: http://twig.sensiolabs.org/doc/templates.html#macros
   ternary operators: http://twig.sensiolabs.org/doc/templates.html#other-operators
#}

{# Make sure the setting for the submenus is defined. #}
{% if withsubmenus is not defined %}
    {% set withsubmenus = true %}
{% endif %}

{# The 'recursive' macro, for inserting one menu item. If it has a submenu, it
   invokes itself to insert the items of the submenus. #}
{% macro display_menu_item(item, loop, extraclass, withsubmenus) %}
    {% from _self import display_menu_item %}
    {% spaceless %}
    <p class=\"level-item\">
        <a href=\"{{ item.link }}\" title='{{ item.title|default('')|escape }}' class='{{ item.class|default('') }}'>
            {{- item.label|default('-') -}}
        </a>
    </p>
    {% endspaceless %}
{% endmacro %}

{# Make the macro available for use #}
{% from _self import display_menu_item %}

{# The main menu loop: Iterates over the items, calling `display_menu_item` #}
{% for item in menu %}
    {% if item.label is defined %}
        {{ display_menu_item(item, loop, '', withsubmenus) }}
    {% endif %}
{% endfor %}
", "partials/_sub_menu_footer.twig", "");
    }
}
