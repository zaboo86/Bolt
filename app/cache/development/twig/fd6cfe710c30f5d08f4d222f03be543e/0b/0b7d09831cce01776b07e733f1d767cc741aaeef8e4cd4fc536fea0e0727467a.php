<?php

/* partials/_master.twig */
class __TwigTemplate_f661faee97baced6f452f8d7852c4831d11bda87244f7f1264be30fdaa923754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_master.twig"));

        $tags = array("if" => 10, "block" => 21);
        $filters = array("escape" => 2, "striptags" => 10);
        $functions = array("htmllang" => 2, "asset" => 15, "include" => 38, "widgets" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('escape', 'striptags'),
                array('htmllang', 'asset', 'include', 'widgets')
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
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\RoutingRuntime')->htmlLang(), "html", null, true));
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 9
        echo "        <title>";
        // line 10
        if ($this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["record"] ?? null), "title", array())), "html", null, true));
            echo " | ";
        }
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/sitename"), "method"), "html", null, true));
        // line 12
        if (( !$this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true) && $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"), "html", null, true));
        }
        // line 13
        echo "</title>
        <link href=\"https://fonts.googleapis.com/css?family=Bitter|Roboto:400,400i,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bulma.css", "theme"), "html", null, true));
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.css", "theme"), "html", null, true));
        echo "\">
    </head>
    <body";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo " class=\"front\"";
        }
        echo ">
        <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">Skip to main content</a>

        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_footer.twig"));
        echo "

    </body>
</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
            <header role=\"banner\" class=\"header\">
            ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_navbar.twig"));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_header.twig"));
        echo "
            </header>

            ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_top"));
        echo "

            <a id=\"main-content\"></a>
            ";
        // line 31
        $this->displayBlock('main', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_bottom"));
        echo "

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 32
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 32,  154 => 31,  144 => 34,  141 => 33,  139 => 31,  133 => 28,  127 => 25,  123 => 24,  119 => 22,  113 => 21,  99 => 38,  96 => 37,  94 => 21,  86 => 18,  81 => 16,  77 => 15,  73 => 13,  68 => 12,  66 => 11,  61 => 10,  59 => 9,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"{{ htmllang() }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {# make sure we always display a proper title: The record's title if there is one, appended with the
           sitename. If there is no title, we append the sitename with the payoff, if there is one. #}
        <title>
            {%- if record.title is defined %}{{ record.title|striptags }} | {% endif -%}
                {{ config.get('general/sitename') -}}
            {% if record.title is not defined and config.get('general/payoff') %} | {{ config.get('general/payoff') }}{% endif -%}
        </title>
        <link href=\"https://fonts.googleapis.com/css?family=Bitter|Roboto:400,400i,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bulma.css', 'theme') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/theme.css', 'theme') }}\">
    </head>
    <body{% if app.request.get('_route') == \"homepage\" %} class=\"front\"{% endif %}>
        <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">Skip to main content</a>

        {% block body %}

            <header role=\"banner\" class=\"header\">
            {{ include('partials/_navbar.twig') }}
            {{ include('partials/_header.twig') }}
            </header>

            {{ widgets('main_top') }}

            <a id=\"main-content\"></a>
            {% block main %}
            {% endblock main %}

            {{ widgets('main_bottom') }}

        {% endblock body %}

        {{ include('partials/_footer.twig') }}

    </body>
</html>


", "partials/_master.twig", "");
    }
}
