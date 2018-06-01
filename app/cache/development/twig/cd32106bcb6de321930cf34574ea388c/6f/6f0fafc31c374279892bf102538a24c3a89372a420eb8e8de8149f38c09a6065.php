<?php

/* _sub_menu.twig */
class __TwigTemplate_b4d2b7f2614e876d452c1d0ef94c637b62ceea4ec184067022e9e9d280c7088d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_sub_menu.twig"));

        $tags = array("spaceless" => 1, "from" => 35, "for" => 40, "macro" => 10, "if" => 24);
        $filters = array("escape" => 38, "default" => 17, "current" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'from', 'for', 'macro', 'if'),
                array('escape', 'default', 'current'),
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

        // line 1
        ob_start();
        // line 7
        echo "
";
        // line 33
        echo "
";
        // line 35
        $context["__internal_afd4c56522eef19bcb1a925bce3912456a625e84d4f1a56db3eac5dfa6aeb22f"] = $this;
        // line 36
        echo "
";
        // line 38
        echo "<nav class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true));
        echo "\">
    <ul class=\"bolt-menu\">
    ";
        // line 40
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
            // line 41
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_afd4c56522eef19bcb1a925bce3912456a625e84d4f1a56db3eac5dfa6aeb22f"]->getdisplay_menu_item($context["item"], $context["loop"]));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </ul>
</nav>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_menu_item"));

            // line 11
            echo "
    ";
            // line 12
            $context["__internal_a430883f10a16e1513f2fffc6b470e9c2bbc6f26364650a636ecf0fc4394b8cd"] = $this;
            // line 13
            echo "
    <li class=\"index-";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", array()), "html", null, true));
            echo "
        ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["loop"] ?? null), "first", array())) ? (" first") : ("")));
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["loop"] ?? null), "last", array())) ? (" last") : ("")));
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((((($this->getAttribute(($context["item"] ?? null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "submenu", array()), false)) : (false))) ? (" has-dropdown") : ("")));
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->current(($context["item"] ?? null))) ? (" active") : ("")));
            echo "\">

        <a href=\"";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "link", array()), "html", null, true));
            echo "\" title='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "title", array()), "")) : (""))));
            echo "' class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", array()), "")) : ("")), "html", null, true));
            echo "'>
            ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "label", array()), "-")) : ("-")), "html", null, true));
            echo "
        </a>

        ";
            // line 24
            if ($this->getAttribute(($context["item"] ?? null), "submenu", array(), "any", true, true)) {
                // line 25
                echo "            <ul>
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "submenu", array()));
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
                    // line 27
                    echo "                    ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_a430883f10a16e1513f2fffc6b470e9c2bbc6f26364650a636ecf0fc4394b8cd"]->getdisplay_menu_item($context["submenu"], $context["loop"]));
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
                // line 29
                echo "            </ul>
        ";
            }
            // line 31
            echo "    </li>
";
            
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
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 31,  202 => 29,  185 => 27,  168 => 26,  165 => 25,  163 => 24,  157 => 21,  149 => 20,  144 => 18,  142 => 17,  140 => 16,  138 => 15,  134 => 14,  131 => 13,  129 => 12,  126 => 11,  110 => 10,  99 => 43,  82 => 41,  65 => 40,  59 => 38,  56 => 36,  54 => 35,  51 => 33,  48 => 7,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{# This file might seem a little complex, because of the high density of tags.
   It uses Twig macros and ternary selectors. Read up on them, if required:
   macros: http://twig.sensiolabs.org/doc/templates.html#macros
   ternary operators: http://twig.sensiolabs.org/doc/templates.html#other-operators
#}

{# The 'recursive' macro, for inserting one menu item. If it has a submenu, it
   invokes itself to insert the items of the submenus. #}
{% macro display_menu_item(item, loop) %}

    {% from _self import display_menu_item %}

    <li class=\"index-{{ loop.index }}
        {{ loop.first ? ' first' -}}
        {{ loop.last ? ' last' -}}
        {{ item.submenu|default(false) ? ' has-dropdown' -}}
        {{ item|current ? ' active' }}\">

        <a href=\"{{ item.link }}\" title='{{ item.title|default('')|escape }}' class='{{ item.class|default('') }}'>
            {{ item.label|default('-') }}
        </a>

        {% if item.submenu is defined %}
            <ul>
                {% for submenu in item.submenu %}
                    {{ display_menu_item(submenu, loop) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{# Make the macro available for use #}
{% from _self import display_menu_item %}

{# The main menu loop: Iterates over the items, calling `display_menu_item` #}
<nav class=\"{{name}}\">
    <ul class=\"bolt-menu\">
    {% for item in menu %}
        {{ display_menu_item(item, loop) }}
    {% endfor %}
    </ul>
</nav>

{% endspaceless %}
", "_sub_menu.twig", "");
    }
}
