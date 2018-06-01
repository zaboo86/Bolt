<?php

/* @bolt/users/_userlist-actions.twig */
class __TwigTemplate_5dc549f82806eefc19bad08b53aa0721ed722db8c6e9b88cb71decfce505cd05 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/users/_userlist-actions.twig"));

        $tags = array("if" => 1);
        $filters = array("escape" => 3, "default" => 49, "date" => 49);
        $functions = array("isallowed" => 1, "path" => 3, "__" => 4, "include" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('escape', 'default', 'date'),
                array('isallowed', 'path', '__', 'include')
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
        if ($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("useredit")) {
            // line 2
            echo "    <div class=\"btn-group\">
    <a href=\"";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useredit", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
            echo "\" class=\"btn btn-default btn-xs\">
            <i class=\"fa fa-edit\"></i> ";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.edit"));
            echo "
    </a>

    <button type=\"button\" class=\"btn dropdown-toggle btn-default btn-xs\" data-toggle=\"dropdown\">
        <i class=\"fa fa-info-sign\"></i>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\">
        ";
            // line 13
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "currentuser", array()), "id", array()) != $this->getAttribute(($context["user"] ?? null), "id", array()))) {
                // line 14
                echo "            ";
                if ($this->getAttribute(($context["user"] ?? null), "enabled", array())) {
                    // line 15
                    echo "                <li>
                    <form action=\"";
                    // line 16
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useraction", array("action" => "disable", "id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
                    echo "\" method=\"post\">
                        ";
                    // line 17
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_csrf_token.twig"));
                    echo "
                        <button type=\"submit\" class=\"btn btn-block btn-link\">
                            <span class=\"pull-left\">";
                    // line 19
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.disable-user-name", array("%username%" => $this->getAttribute(($context["user"] ?? null), "displayname", array()))));
                    echo "</span>
                        </button>
                    </form>
                </li>
            ";
                } else {
                    // line 24
                    echo "                <li>
                    <form action=\"";
                    // line 25
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useraction", array("action" => "enable", "id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
                    echo "\" method=\"post\">
                        ";
                    // line 26
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_csrf_token.twig"));
                    echo "
                        <button type=\"submit\" class=\"btn btn-block btn-link\">
                            <span class=\"pull-left\">";
                    // line 28
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.enable-user-name", array("%username%" => $this->getAttribute(($context["user"] ?? null), "displayname", array()))));
                    echo "</span>
                        </button>
                    </form>
                </li>
            ";
                }
                // line 33
                echo "            <li>
                <form action=\"";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useraction", array("action" => "delete", "id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
                echo "\" method=\"post\">
                    ";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_csrf_token.twig"));
                echo "
                    <button type=\"submit\" class=\"btn btn-block btn-link confirm\"
                    data-confirm=\"";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.confirm-delete-user", array("%username%" => $this->getAttribute(($context["user"] ?? null), "displayname", array()))));
                echo "\" >
                        <span class=\"pull-left\">";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.delete-user-name", array("%username%" => $this->getAttribute(($context["user"] ?? null), "displayname", array()))));
                echo "</span>
                    </button>
                </form>
            </li>

            <li class=\"divider\">
            </li>
        ";
            }
            // line 46
            echo "
        <li>
            <a class=\"nolink\">
                ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.last-seen"));
            echo ": <strong>";
            if ((($this->getAttribute(($context["user"] ?? null), "lastseen", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "lastseen", array()))) : (""))) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastseen", array()), "Y-m-d H:i"), "html", null, true));
            } else {
                echo "-";
            }
            echo "</strong>
            </a>
        </li>

        <li>
            <a class=\"nolink\">
                ";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.last-known-ip"));
            echo ": <strong>";
            if ((($this->getAttribute(($context["user"] ?? null), "lastip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "lastip", array()))) : (""))) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastip", array()), "html", null, true));
            } else {
                echo "-";
            }
            echo "</strong>
            </a>
        </li>
    </ul>
</div>
";
        } elseif (($this->getAttribute($this->getAttribute(        // line 60
($context["context"] ?? null), "currentuser", array()), "id", array()) == $this->getAttribute(($context["user"] ?? null), "id", array()))) {
            // line 61
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile"));
            echo "\" class=\"btn btn-default btn-xs\">
        <i class=\"fa fa-edit\"></i> ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.profile"));
            echo "
    </a>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/users/_userlist-actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 62,  175 => 61,  173 => 60,  159 => 55,  144 => 49,  139 => 46,  128 => 38,  124 => 37,  119 => 35,  115 => 34,  112 => 33,  104 => 28,  99 => 26,  95 => 25,  92 => 24,  84 => 19,  79 => 17,  75 => 16,  72 => 15,  69 => 14,  67 => 13,  55 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isallowed('useredit') %}
    <div class=\"btn-group\">
    <a href=\"{{ path('useredit', {'id': user.id}) }}\" class=\"btn btn-default btn-xs\">
            <i class=\"fa fa-edit\"></i> {{ __('general.phrase.edit') }}
    </a>

    <button type=\"button\" class=\"btn dropdown-toggle btn-default btn-xs\" data-toggle=\"dropdown\">
        <i class=\"fa fa-info-sign\"></i>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\">
        {% if context.currentuser.id != user.id  %}
            {% if user.enabled %}
                <li>
                    <form action=\"{{ path('useraction', {'action': 'disable', 'id': user.id}) }}\" method=\"post\">
                        {{ include('@bolt/_sub/_csrf_token.twig') }}
                        <button type=\"submit\" class=\"btn btn-block btn-link\">
                            <span class=\"pull-left\">{{ __('general.phrase.disable-user-name',{'%username%':user.displayname}) }}</span>
                        </button>
                    </form>
                </li>
            {% else %}
                <li>
                    <form action=\"{{ path('useraction', {'action': 'enable', 'id': user.id}) }}\" method=\"post\">
                        {{ include('@bolt/_sub/_csrf_token.twig') }}
                        <button type=\"submit\" class=\"btn btn-block btn-link\">
                            <span class=\"pull-left\">{{ __('general.phrase.enable-user-name',{'%username%':user.displayname}) }}</span>
                        </button>
                    </form>
                </li>
            {% endif %}
            <li>
                <form action=\"{{ path('useraction', {'action': 'delete', 'id': user.id}) }}\" method=\"post\">
                    {{ include('@bolt/_sub/_csrf_token.twig') }}
                    <button type=\"submit\" class=\"btn btn-block btn-link confirm\"
                    data-confirm=\"{{ __('general.phrase.confirm-delete-user', { '%username%': user.displayname }) }}\" >
                        <span class=\"pull-left\">{{ __('general.phrase.delete-user-name', { '%username%': user.displayname }) }}</span>
                    </button>
                </form>
            </li>

            <li class=\"divider\">
            </li>
        {% endif %}

        <li>
            <a class=\"nolink\">
                {{ __('general.phrase.last-seen') }}: <strong>{% if user.lastseen|default %}{{ user.lastseen|date(\"Y-m-d H:i\") }}{% else %}-{% endif %}</strong>
            </a>
        </li>

        <li>
            <a class=\"nolink\">
                {{ __('general.phrase.last-known-ip') }}: <strong>{% if user.lastip|default %}{{ user.lastip }}{% else %}-{% endif %}</strong>
            </a>
        </li>
    </ul>
</div>
{% elseif context.currentuser.id == user.id %}
    <a href=\"{{ path('profile') }}\" class=\"btn btn-default btn-xs\">
        <i class=\"fa fa-edit\"></i> {{ __('general.phrase.profile') }}
    </a>
{% endif %}
", "@bolt/users/_userlist-actions.twig", "");
    }
}
