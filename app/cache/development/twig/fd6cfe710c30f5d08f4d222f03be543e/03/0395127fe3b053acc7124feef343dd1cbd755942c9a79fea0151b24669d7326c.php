<?php

/* partials/_sub_menu.twig */
class __TwigTemplate_7a8310bbb5b811e862e8fe973c6b1504de79531884d5605d269836d565ca7fea extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_menu.twig"));

        $tags = array("if" => 8, "set" => 9, "from" => 41, "for" => 44, "macro" => 14, "spaceless" => 16);
        $filters = array("default" => 17, "escape" => 18, "current" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'from', 'for', 'macro', 'spaceless'),
                array('default', 'escape', 'current'),
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
        // line 39
        echo "
";
        // line 41
        $context["__internal_560ee36d8350295670e06423d728ca47a3e8118b907cdffb1bc60d901ac0ae36"] = $this;
        // line 42
        echo "
";
        // line 44
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
            // line 45
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 46
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_560ee36d8350295670e06423d728ca47a3e8118b907cdffb1bc60d901ac0ae36"]->getdisplay_menu_item($context["item"], $context["loop"], "", ($context["withsubmenus"] ?? null)));
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
            $context["__internal_7ee8433bc9158b94c11a59d76afbaacca2b222712b1557bb7ef2c06d4659ecf0"] = $this;
            // line 16
            echo "    ";
            ob_start();
            // line 17
            echo "    ";
            if (twig_test_empty((($this->getAttribute(($context["item"] ?? null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "submenu", array()))) : ("")))) {
                // line 18
                echo "    <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "link", array()), "html", null, true));
                echo "\" title='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "title", array()), "")) : (""))));
                echo "' class='navbar-item ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->current(($context["item"] ?? null))) ? ("is-active") : ("")));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", array()), "")) : ("")), "html", null, true));
                echo "'>";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "label", array()), "-")) : ("-")), "html", null, true));
                // line 20
                echo "</a>
    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if (($this->getAttribute(($context["item"] ?? null), "submenu", array(), "any", true, true) && ($context["withsubmenus"] ?? null))) {
                // line 24
                echo "    <div class=\"navbar-item
        ";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((((($this->getAttribute(($context["item"] ?? null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "submenu", array()), false)) : (false)) && ($context["withsubmenus"] ?? null))) ? (" has-dropdown is-hoverable") : ("")));
                echo "\">

        <a href=\"";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "link", array()), "html", null, true));
                echo "\" title='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "title", array()), "")) : (""))));
                echo "' class='navbar-link ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->current(($context["item"] ?? null))) ? ("is-active") : ("")));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", array()), "")) : ("")), "html", null, true));
                echo "'>";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "label", array()), "-")) : ("-")), "html", null, true));
                // line 29
                echo "</a>
        <div class=\"navbar-dropdown\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["item"] ?? null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "submenu", array()))) : ("")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 32
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_7ee8433bc9158b94c11a59d76afbaacca2b222712b1557bb7ef2c06d4659ecf0"]->getdisplay_menu_item($context["submenu"], $context["loop"]));
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>
    </div>
    ";
            }
            // line 37
            echo "    ";
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
        return "partials/_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 37,  213 => 34,  196 => 32,  179 => 31,  175 => 29,  173 => 28,  165 => 27,  160 => 25,  157 => 24,  155 => 23,  152 => 22,  148 => 20,  146 => 19,  136 => 18,  133 => 17,  130 => 16,  127 => 15,  109 => 14,  86 => 46,  83 => 45,  66 => 44,  63 => 42,  61 => 41,  58 => 39,  55 => 11,  51 => 9,  49 => 8,  46 => 6,);
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
    {% if item.submenu|default is empty %}
    <a href=\"{{ item.link }}\" title='{{ item.title|default('')|escape }}' class='navbar-item {{ item|current ? 'is-active' }} {{ item.class|default('') }}'>
        {{- item.label|default('-') -}}
    </a>
    {% endif %}

    {% if item.submenu is defined and withsubmenus %}
    <div class=\"navbar-item
        {{ (item.submenu|default(false) and withsubmenus) ? ' has-dropdown is-hoverable' -}}\">

        <a href=\"{{ item.link }}\" title='{{ item.title|default('')|escape }}' class='navbar-link {{ item|current ? 'is-active' }}{{ item.class|default('') }}'>
            {{- item.label|default('-') -}}
        </a>
        <div class=\"navbar-dropdown\">
            {% for submenu in item.submenu|default %}
                {{ display_menu_item(submenu, loop) }}
            {% endfor %}
        </div>
    </div>
    {% endif %}
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
", "partials/_sub_menu.twig", "");
    }
}
