<?php

/* not-found.twig */
class __TwigTemplate_6018d7f5d7d4bc00f5fdf5af2d31b66a67f0420549066c1bfb78b20f41c0b9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "not-found.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not-found.twig"));

        $tags = array("setcontent" => 3, "if" => 10);
        $filters = array("escape" => 11, "default" => 11, "raw" => 12);
        $functions = array("path" => 27, "__" => 30);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'if'),
                array('escape', 'default', 'raw'),
                array('path', '__')
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

        // line 3
        $context['record'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("blocks/404-not-found", array() );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<section class=\"section section-not-found\">
    <div class=\"container\">
        <div class=\"content\">
            ";
        // line 10
        if (($context["record"] ?? null)) {
            // line 11
            echo "                <h1 class=\"title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["record"] ?? null), "title", array()), "404 not found")) : ("404 not found")), "html", null, true));
            echo "</h1>
                ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["record"] ?? null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["record"] ?? null), "content", array()), "<p>The requested page was not found.</p>")) : ("<p>The requested page was not found.</p>")));
            echo "
            ";
        } else {
            // line 14
            echo "                <h1 class=\"title\">404 not found</h1>
                <p>
                    The requested page was not found.
                </p>

                <div class=\"notification is-warning\">
                    ";
            // line 21
            echo "                    Add a Blocks record with slug '404-not-found' to customize this message.
                    If it's not showing up here, doublecheck that the <tt>slug</tt> is correct, and that the Block is published.
                </div>
            ";
        }
        // line 25
        echo "        </div>

        <form class=\"field has-addons\" method=\"get\" action=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search"));
        echo "\" enctype=\"text/plain\">
            <label class=\"label is-hidden\" for=\"search-box\">Search</label>
            <div class=\"control\">
                <input class=\"input\" type=\"search\" value=\"";
        // line 30
        if (array_key_exists("search", $context)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["search"] ?? null)));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.search-ellipsis"));
        echo "\" name=\"search\" id=\"search-box\">
            </div>
            <div class=\"control\">
                <button class=\"button is-primary\" type=\"submit\">";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.search"));
        echo "</button>
            </div>
        </form>

    </div>
</section
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "not-found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  109 => 30,  103 => 27,  99 => 25,  93 => 21,  85 => 14,  80 => 12,  75 => 11,  73 => 10,  67 => 6,  61 => 5,  54 => 1,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %}

{% setcontent record = 'blocks/404-not-found' %}

{% block main %}

<section class=\"section section-not-found\">
    <div class=\"container\">
        <div class=\"content\">
            {% if record %}
                <h1 class=\"title\">{{ record.title|default('404 not found') }}</h1>
                {{ record.content|default('<p>The requested page was not found.</p>')|raw }}
            {% else %}
                <h1 class=\"title\">404 not found</h1>
                <p>
                    The requested page was not found.
                </p>

                <div class=\"notification is-warning\">
                    {# <button class=\"delete\"></button> #}
                    Add a Blocks record with slug '404-not-found' to customize this message.
                    If it's not showing up here, doublecheck that the <tt>slug</tt> is correct, and that the Block is published.
                </div>
            {% endif %}
        </div>

        <form class=\"field has-addons\" method=\"get\" action=\"{{ path('search') }}\" enctype=\"text/plain\">
            <label class=\"label is-hidden\" for=\"search-box\">Search</label>
            <div class=\"control\">
                <input class=\"input\" type=\"search\" value=\"{% if search is defined %}{{ search|escape }}{% endif %}\" placeholder=\"{{ __('general.phrase.search-ellipsis') }}\" name=\"search\" id=\"search-box\">
            </div>
            <div class=\"control\">
                <button class=\"button is-primary\" type=\"submit\">{{ __('general.phrase.search') }}</button>
            </div>
        </form>

    </div>
</section
{% endblock main %}
 

 ", "not-found.twig", "");
    }
}
