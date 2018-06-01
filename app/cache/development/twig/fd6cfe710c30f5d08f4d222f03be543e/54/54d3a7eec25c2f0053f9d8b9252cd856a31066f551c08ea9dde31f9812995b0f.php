<?php

/* @bolt/users/_sessions.twig */
class __TwigTemplate_828abb49a087601ded41f3ecd990793dd510a721e1c2f87a3c41e2b9d96306be extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/users/_sessions.twig"));

        $tags = array("from" => 1, "for" => 16, "if" => 17, "set" => 18);
        $filters = array("raw" => 24, "escape" => 33);
        $functions = array("__" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'for', 'if', 'set'),
                array('raw', 'escape'),
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

        // line 1
        $context["__internal_fb48f758ebd8b70b1db349962ca3be55c422cf421a423f2dfd92951348c64a5b"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/users/_sessions.twig", 1);
        // line 2
        echo "
<div class=\"table-responsive\">
    <table class=\"table table-striped dashboardlisting\">
        <thead>
            <tr>
                <th>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.user-name"));
        echo "</th>
                <th>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.last-seen"));
        echo "</th>
                <th>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.session-expires"));
        echo "</th>
                <th>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.ip.address"));
        echo "</th>
                <th>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.browswer-platform"));
        echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "sessions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 17
            echo "            ";
            if ($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["session"], "user_id", array()), array(), "array", true, true)) {
                // line 18
                echo "                ";
                $context["user"] = $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["session"], "user_id", array()), array(), "array");
                // line 19
                echo "            ";
            } else {
                // line 20
                echo "                ";
                $context["user"] = array("displayname" => "<em>unknown</em> ");
                // line 21
                echo "            ";
            }
            // line 22
            echo "                <tr>
                    <td>
                        <strong>";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "displayname", array()));
            echo "</strong>
                    </td>
                    <td>
                        ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_fb48f758ebd8b70b1db349962ca3be55c422cf421a423f2dfd92951348c64a5b"]->getbuic_moment($this->getAttribute($context["session"], "lastseen", array())));
            echo "
                    </td>
                    <td>
                        ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_fb48f758ebd8b70b1db349962ca3be55c422cf421a423f2dfd92951348c64a5b"]->getbuic_moment($this->getAttribute($context["session"], "validity", array())));
            echo "
                    </td>
                    <td>
                        ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["session"], "ip", array()), "html", null, true));
            echo "
                    </td>
                    <td>
                        <span class=\"useragent buic-moment info-pop\" data-html=\"true\" data-content=\"";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["session"], "useragent", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["session"], "browser", array()), "html", null, true));
            echo "</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/users/_sessions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  126 => 36,  120 => 33,  114 => 30,  108 => 27,  102 => 24,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  79 => 16,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  48 => 2,  46 => 1,);
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

<div class=\"table-responsive\">
    <table class=\"table table-striped dashboardlisting\">
        <thead>
            <tr>
                <th>{{ __('general.phrase.user-name') }}</th>
                <th>{{ __('general.phrase.last-seen') }}</th>
                <th>{{ __('general.phrase.session-expires') }}</th>
                <th>{{ __('general.phrase.ip.address') }}</th>
                <th>{{ __('general.phrase.browswer-platform') }}</th>
            </tr>
        </thead>

        <tbody>
            {% for session in context.sessions %}
            {% if users[session.user_id] is defined %}
                {% set user = users[session.user_id] %}
            {% else %}
                {% set user = { 'displayname': '<em>unknown</em> '} %}
            {% endif %}
                <tr>
                    <td>
                        <strong>{{ user.displayname|raw }}</strong>
                    </td>
                    <td>
                        {{ buic_moment(session.lastseen) }}
                    </td>
                    <td>
                        {{ buic_moment(session.validity) }}
                    </td>
                    <td>
                        {{ session.ip }}
                    </td>
                    <td>
                        <span class=\"useragent buic-moment info-pop\" data-html=\"true\" data-content=\"{{ session.useragent }}\">{{ session.browser }}</span>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
", "@bolt/users/_sessions.twig", "");
    }
}
