<?php

/* partials/_navbar.twig */
class __TwigTemplate_372e8c24d7c527f12e1dbca4de537066623ae7f6c6881008787d255544d28cb2 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_navbar.twig"));

        $tags = array("if" => 22);
        $filters = array("escape" => 6);
        $functions = array("menu" => 16, "path" => 19, "__" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('escape'),
                array('menu', 'path', '__')
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

        // line 2
        echo "<nav class=\"navbar is-fixed-top is-primary\" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <span class=\"navbar-item\" href=\"/\">
                ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/sitename"), "method"), "html", null, true));
        echo "
            </span>
            <span class=\"navbar-burger\" data-target=\"navbar-toggle\">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div class=\"navbar-menu\" id=\"navbar-toggle\">
            <div class=\"navbar-start\">
                ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->menu($this->env, "", "partials/_sub_menu.twig"));
        echo "
            </div>
            <div class=\"navbar-end\">
                <form class=\"field has-addons\" method=\"get\" action=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search"));
        echo "\" enctype=\"text/plain\">
                    <label class=\"label is-hidden\" for=\"search\">Search</label>
                    <div class=\"control\">
                        <input class=\"input\" type=\"search\" value=\"";
        // line 22
        if (array_key_exists("search", $context)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["search"] ?? null)));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.search-ellipsis"));
        echo "\" name=\"search\" id=\"search\">
                    </div>
                    <div class=\"control\">
                        <button class=\"button is-black\" type=\"submit\">";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.search"));
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  77 => 22,  71 => 19,  65 => 16,  52 => 6,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Navbar #}
<nav class=\"navbar is-fixed-top is-primary\" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <span class=\"navbar-item\" href=\"/\">
                {{ config.get('general/sitename') }}
            </span>
            <span class=\"navbar-burger\" data-target=\"navbar-toggle\">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div class=\"navbar-menu\" id=\"navbar-toggle\">
            <div class=\"navbar-start\">
                {{ menu(template = 'partials/_sub_menu.twig') }}
            </div>
            <div class=\"navbar-end\">
                <form class=\"field has-addons\" method=\"get\" action=\"{{ path('search') }}\" enctype=\"text/plain\">
                    <label class=\"label is-hidden\" for=\"search\">Search</label>
                    <div class=\"control\">
                        <input class=\"input\" type=\"search\" value=\"{% if search is defined %}{{ search|escape }}{% endif %}\" placeholder=\"{{ __('general.phrase.search-ellipsis') }}\" name=\"search\" id=\"search\">
                    </div>
                    <div class=\"control\">
                        <button class=\"button is-black\" type=\"submit\">{{ __('general.phrase.search') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>", "partials/_navbar.twig", "");
    }
}
