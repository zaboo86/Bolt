<?php

/* @bolt/users/_userlist.twig */
class __TwigTemplate_bd68b5e5f4de4c62373cd4411638150127f8dd924ba66c4ddc54f9c448f2a100 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/users/_userlist.twig"));

        $tags = array("from" => 1, "for" => 15, "if" => 18);
        $filters = array("escape" => 19, "default" => 30, "join" => 37);
        $functions = array("__" => 6, "include" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'for', 'if'),
                array('escape', 'default', 'join'),
                array('__', 'include')
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
        $context["__internal_d9d892472292cb4f4c1cad621aa6853a235e34bd5df1c693d76ad67b34eb5544"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/users/_userlist.twig", 1);
        // line 2
        echo "
<table class=\"table-striped dashboardlisting userlist\">
    <thead>
        <tr>
            <th>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.id"));
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.user-name"));
        echo "</th>
            <th class=\"hidden-xs\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.last-seen"));
        echo "</th>
            <th>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.roles"));
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.action-plural"));
        echo "</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "            <tr>
                <td class=\"id\">
                    ";
            // line 18
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "<s>";
            }
            // line 19
            echo "                    № ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true));
            echo "
                    ";
            // line 20
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "</s>";
            }
            // line 21
            echo "                </td>

                <td class=\"username\">
                    ";
            // line 24
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "<s>";
            }
            // line 25
            echo "                    <strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true));
            echo "</strong> (";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true));
            echo ")
                    ";
            // line 26
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "</s>";
            }
            // line 27
            echo "                </td>

                <td class=\"hidden-xs\">
                    ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((((($this->getAttribute($context["user"], "lastseen", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "lastseen", array()))) : (""))) ? ($context["__internal_d9d892472292cb4f4c1cad621aa6853a235e34bd5df1c693d76ad67b34eb5544"]->getbuic_moment((($this->getAttribute($context["user"], "lastseen", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "lastseen", array()))) : ("")))) : ("-")));
            echo "
                </td>

                <td class=\"contenttypes\">
                    ";
            // line 34
            if (twig_in_filter("root", $this->getAttribute($context["user"], "roles", array()))) {
                // line 35
                echo "                        <strong><em>root</em></strong>
                    ";
            } else {
                // line 37
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["user"], "roles", array()), ", "), "html", null, true));
                echo "
                    ";
            }
            // line 39
            echo "                </td>

                <td class=\"actions\">
                    ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/users/_userlist-actions.twig"));
            echo "
                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>

</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/users/_userlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 46,  161 => 42,  156 => 39,  150 => 37,  146 => 35,  144 => 34,  137 => 30,  132 => 27,  128 => 26,  121 => 25,  117 => 24,  112 => 21,  108 => 20,  103 => 19,  99 => 18,  95 => 16,  78 => 15,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  48 => 2,  46 => 1,);
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

<table class=\"table-striped dashboardlisting userlist\">
    <thead>
        <tr>
            <th>{{ __('general.phrase.id') }}</th>
            <th>{{ __('general.phrase.user-name') }}</th>
            <th class=\"hidden-xs\">{{ __('general.phrase.last-seen') }}</th>
            <th>{{ __('general.phrase.roles') }}</th>
            <th>{{ __('general.phrase.action-plural') }}</th>
        </tr>
    </thead>

    <tbody>
        {% for user in users %}
            <tr>
                <td class=\"id\">
                    {% if user.enabled == 0 %}<s>{% endif %}
                    № {{ user.id }}
                    {% if user.enabled == 0 %}</s>{% endif %}
                </td>

                <td class=\"username\">
                    {% if user.enabled == 0 %}<s>{% endif %}
                    <strong>{{ user.displayname }}</strong> ({{ user.username }})
                    {% if user.enabled == 0 %}</s>{% endif %}
                </td>

                <td class=\"hidden-xs\">
                    {{ user.lastseen|default ? buic_moment(user.lastseen|default) : '-' }}
                </td>

                <td class=\"contenttypes\">
                    {% if 'root' in user.roles %}
                        <strong><em>root</em></strong>
                    {% else %}
                        {{ user.roles|join(', ') }}
                    {% endif %}
                </td>

                <td class=\"actions\">
                    {{ include('@bolt/users/_userlist-actions.twig') }}
                </td>
            </tr>
        {% endfor %}
    </tbody>

</table>
", "@bolt/users/_userlist.twig", "");
    }
}
