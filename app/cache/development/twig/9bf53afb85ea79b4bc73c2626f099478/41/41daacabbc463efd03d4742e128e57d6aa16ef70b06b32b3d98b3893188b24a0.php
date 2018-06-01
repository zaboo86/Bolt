<?php

/* @bolt/dbcheck/dbcheck.twig */
class __TwigTemplate_e090321a6cde62fa9526a1a04879bc75e8a5f98fcdafd84c08cdea8eafdadbcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/dbcheck/dbcheck.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dbcheck/dbcheck.twig"));

        $tags = array("from" => 5, "set" => 13, "if" => 17, "for" => 69);
        $filters = array("default" => 13, "escape" => 70);
        $functions = array("__" => 9, "path" => 24, "isallowed" => 52, "dump" => 76);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'set', 'if', 'for'),
                array('default', 'escape'),
                array('__', 'path', 'isallowed', 'dump')
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

        // line 5
        $context["__internal_0e10d0b3e3573005deb175ca2635fa596a60782cf522f5c808f2206c3f08bd26"] = $this->loadTemplate("@bolt/dbcheck/_macros.twig", "@bolt/dbcheck/dbcheck.twig", 5);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Settings/Configuration");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.database-check-update"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 12
        echo "
    ";
        // line 13
        $context["hints"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "check", array(), "any", false, true), "hints", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "check", array(), "any", false, true), "hints", array()), array())) : (array()));
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 17
        if ($this->getAttribute(($context["context"] ?? null), "changes", array())) {
            // line 18
            echo "
                ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0e10d0b3e3573005deb175ca2635fa596a60782cf522f5c808f2206c3f08bd26"]->getlist($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.modifications-database-colon"), $this->getAttribute(($context["context"] ?? null), "changes", array())));
            echo "
                ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0e10d0b3e3573005deb175ca2635fa596a60782cf522f5c808f2206c3f08bd26"]->getlist($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.hints-colon"), ($context["hints"] ?? null)));
            echo "

                <p class=\"alert alert-success\" role=\"alert\">";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.databaase-up-to-date"));
            echo "</p>

                <form action=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dbcheck"));
            echo "\" method=\"get\">
                    <p><button type=\"submit\" class=\"btn btn-default btn-primary\">";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.check-again"));
            echo "</button></p>
                </form>

            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 28
($context["context"] ?? null), "check", array(), "any", false, true), "responsestrings", array(), "any", true, true) && twig_test_iterable($this->getAttribute($this->getAttribute(($context["context"] ?? null), "check", array()), "responsestrings", array())))) {
            // line 29
            echo "
                ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0e10d0b3e3573005deb175ca2635fa596a60782cf522f5c808f2206c3f08bd26"]->getlist($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.modifications-needed-colon"), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "check", array()), "responsestrings", array())));
            echo "
                ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0e10d0b3e3573005deb175ca2635fa596a60782cf522f5c808f2206c3f08bd26"]->getlist($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.hints-colon"), ($context["hints"] ?? null)));
            echo "

                <form action=\"";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dbupdate"));
            echo "\" method=\"post\">
                    <p>
                        <button type=\"submit\" class=\"btn btn-primary\">";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.update-database"));
            echo "</button>
                        ";
            // line 36
            if ($this->getAttribute(($context["app"] ?? null), "debug", array())) {
                // line 37
                echo "                            <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dbcheck", array("debug" => 1)));
                echo "\" class=\"btn btn-tertiary\">
                                ";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.show-proposed-alterations"));
                echo "
                            </a>
                        ";
            }
            // line 41
            echo "                    </p>
                </form>

            ";
        } else {
            // line 45
            echo "
                <p class=\"alert alert-success\" role=\"alert\">";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.database-up-to-date-already"));
            echo "</p>

                ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0e10d0b3e3573005deb175ca2635fa596a60782cf522f5c808f2206c3f08bd26"]->getlist($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.hints-colon"), ($context["hints"] ?? null)));
            echo "

            ";
        }
        // line 51
        echo "
            ";
        // line 52
        if ($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("prefill")) {
            // line 53
            echo "
                <br>
                <hr>

                <p class=\"alert alert-warning\" role=\"alert\">
                    <b>";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.tip-colon"));
            echo "</b>
                    ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Add some sample <a href='%url%' class='btn btn-default'>Records with Loripsum text</a>", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prefill"))));
            echo "
                </p>

            ";
        }
        // line 63
        echo "
            ";
        // line 64
        if ($this->getAttribute(($context["context"] ?? null), "debug", array())) {
            // line 65
            echo "
                ";
            // line 66
            if ( !twig_test_empty($this->getAttribute(($context["context"] ?? null), "creates", array()))) {
                // line 67
                echo "                    <hr>
                    <h4>Table Creations</h4>
                    ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "creates", array()));
                foreach ($context['_seq'] as $context["table"] => $context["create"]) {
                    // line 70
                    echo "                        <h5>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["table"], "html", null, true));
                    echo "</h5>
                        <ol>
                        ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["create"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sql"]) {
                        // line 73
                        echo "                            <li>";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["sql"], "html", null, true));
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sql'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                        </ol>
                        ";
                    // line 76
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\DumpRuntime')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "creates", array()), $context["table"], array(), "array")));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['table'], $context['create'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                ";
            }
            // line 79
            echo "
                ";
            // line 80
            if ( !twig_test_empty($this->getAttribute(($context["context"] ?? null), "alters", array()))) {
                // line 81
                echo "                    <hr>
                    <h4>Table Alterations</h4>
                    ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "alters", array()));
                foreach ($context['_seq'] as $context["table"] => $context["alter"]) {
                    // line 84
                    echo "                        <h5>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["table"], "html", null, true));
                    echo "</h5>
                        <ol>
                        ";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["alter"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sql"]) {
                        // line 87
                        echo "                            <li>";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["sql"], "html", null, true));
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sql'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "                        </ol>
                        ";
                    // line 90
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\DumpRuntime')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "diffs", array()), $context["table"], array(), "array")));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['table'], $context['alter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                ";
            }
            // line 93
            echo "
            ";
        }
        // line 95
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dbcheck/dbcheck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 95,  308 => 93,  305 => 92,  297 => 90,  294 => 89,  285 => 87,  281 => 86,  275 => 84,  271 => 83,  267 => 81,  265 => 80,  262 => 79,  259 => 78,  251 => 76,  248 => 75,  239 => 73,  235 => 72,  229 => 70,  225 => 69,  221 => 67,  219 => 66,  216 => 65,  214 => 64,  211 => 63,  204 => 59,  200 => 58,  193 => 53,  191 => 52,  188 => 51,  182 => 48,  177 => 46,  174 => 45,  168 => 41,  162 => 38,  157 => 37,  155 => 36,  151 => 35,  146 => 33,  141 => 31,  137 => 30,  134 => 29,  132 => 28,  126 => 25,  122 => 24,  117 => 22,  112 => 20,  108 => 19,  105 => 18,  103 => 17,  98 => 14,  96 => 13,  93 => 12,  87 => 11,  75 => 9,  63 => 7,  56 => 3,  54 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Configuration > Check database #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% from '@bolt/dbcheck/_macros.twig' import list %}

{% block page_nav 'Settings/Configuration' %}

{% block page_title __('general.phrase.database-check-update') %}

{% block page_main %}

    {% set hints = context.check.hints|default([]) %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% if context.changes %}

                {{ list(__('general.phrase.modifications-database-colon'), context.changes) }}
                {{ list(__('general.phrase.hints-colon'), hints) }}

                <p class=\"alert alert-success\" role=\"alert\">{{ __('general.phrase.databaase-up-to-date') }}</p>

                <form action=\"{{ path('dbcheck') }}\" method=\"get\">
                    <p><button type=\"submit\" class=\"btn btn-default btn-primary\">{{ __('general.phrase.check-again') }}</button></p>
                </form>

            {% elseif context.check.responsestrings is defined and context.check.responsestrings is iterable %}

                {{ list(__('general.phrase.modifications-needed-colon'), context.check.responsestrings) }}
                {{ list(__('general.phrase.hints-colon'), hints) }}

                <form action=\"{{ path('dbupdate') }}\" method=\"post\">
                    <p>
                        <button type=\"submit\" class=\"btn btn-primary\">{{ __('general.phrase.update-database') }}</button>
                        {% if app.debug %}
                            <a href=\"{{ path('dbcheck', {'debug': 1}) }}\" class=\"btn btn-tertiary\">
                                {{ __('general.phrase.show-proposed-alterations') }}
                            </a>
                        {% endif %}
                    </p>
                </form>

            {% else %}

                <p class=\"alert alert-success\" role=\"alert\">{{ __('general.phrase.database-up-to-date-already') }}</p>

                {{ list(__('general.phrase.hints-colon'), hints) }}

            {% endif %}

            {% if isallowed('prefill') %}

                <br>
                <hr>

                <p class=\"alert alert-warning\" role=\"alert\">
                    <b>{{ __('general.phrase.tip-colon') }}</b>
                    {{ __('Add some sample <a href=\\'%url%\\' class=\\'btn btn-default\\'>Records with Loripsum text</a>', {'%url%': path('prefill')}) }}
                </p>

            {% endif %}

            {% if context.debug %}

                {% if context.creates is not empty %}
                    <hr>
                    <h4>Table Creations</h4>
                    {% for table, create in context.creates %}
                        <h5>{{ table }}</h5>
                        <ol>
                        {% for sql in create %}
                            <li>{{ sql }}</li>
                        {% endfor %}
                        </ol>
                        {{ dump(context.creates[table]) }}
                    {% endfor %}
                {% endif %}

                {% if context.alters is not empty %}
                    <hr>
                    <h4>Table Alterations</h4>
                    {% for table, alter in context.alters %}
                        <h5>{{ table }}</h5>
                        <ol>
                        {% for sql in alter %}
                            <li>{{ sql }}</li>
                        {% endfor %}
                        </ol>
                        {{ dump(context.diffs[table]) }}
                    {% endfor %}
                {% endif %}

            {% endif %}
        </div>
    </div>

{% endblock page_main %}
", "@bolt/dbcheck/dbcheck.twig", "");
    }
}
