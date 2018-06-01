<?php

/* partials/master.twig */
class __TwigTemplate_21f83f32d891ae1ad47a454f6e0134a03d37cf6d7a5a71bd206d4590b428d582 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/master.twig"));

        $tags = array("if" => 10, "block" => 25);
        $filters = array("escape" => 2, "striptags" => 10);
        $functions = array("htmllang" => 2, "asset" => 15, "include" => 42, "widgets" => 32);

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
    <link rel=\"stylesheet\" href=\" ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/font-awesome.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Cookie", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.min.css", "theme"), "html", null, true));
        echo "\">
        

    </head>
    <body";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo " class=\"front\"";
        }
        echo ">
        <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">Skip to main content</a>

        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
        ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/footer.twig"));
        echo "
        

        <script src=\"";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js", "theme"), "html", null, true));
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js", "theme"), "html", null, true));
        echo "\"></script>
   </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
            <header role=\"banner\" class=\"header\">
            ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/navbar.twig"));
        echo "
           ";
        // line 30
        echo "            </header>

            ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_top"));
        echo "

            <a id=\"main-content\"></a>
            ";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 37
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_bottom"));
        echo "

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 36,  169 => 35,  159 => 38,  156 => 37,  154 => 35,  148 => 32,  144 => 30,  140 => 28,  136 => 26,  130 => 25,  119 => 46,  115 => 45,  109 => 42,  106 => 41,  104 => 25,  96 => 22,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 13,  68 => 12,  66 => 11,  61 => 10,  59 => 9,  51 => 2,  48 => 1,);
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
    <link rel=\"stylesheet\" href=\" {{asset('assets/bootstrap/css/bootstrap.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/fonts/font-awesome.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/css?family=Cookie', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/styles.min.css', 'theme')}}\">
        

    </head>
    <body{% if app.request.get('_route') == \"homepage\" %} class=\"front\"{% endif %}>
        <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">Skip to main content</a>

        {% block body %}

            <header role=\"banner\" class=\"header\">
            {{ include('partials/navbar.twig') }}
           {# {{ include('partials/header.twig') }} #}
            </header>

            {{ widgets('main_top') }}

            <a id=\"main-content\"></a>
            {% block main %}
            {% endblock main %}

            {{ widgets('main_bottom') }}

        {% endblock body %}

        {{ include('partials/footer.twig') }}
        

        <script src=\"{{ asset('assets/js/jquery.min.js', 'theme')}}\"></script>
        <script src=\"{{asset('assets/bootstrap/js/bootstrap.min.js', 'theme')}}\"></script>
   </body>
</html>
", "partials/master.twig", "");
    }
}