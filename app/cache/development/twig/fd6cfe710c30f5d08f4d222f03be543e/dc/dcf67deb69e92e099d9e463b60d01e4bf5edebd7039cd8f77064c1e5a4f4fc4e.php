<?php

/* partials/_header.twig */
class __TwigTemplate_b42dc6dbe256c73135736e1ea533d21d63213d2097483b36ede62e98f4818768 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        $tags = array("if" => 1, "setcontent" => 2);
        $filters = array("default" => 1, "escape" => 5);
        $functions = array("asset" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'setcontent'),
                array('default', 'escape'),
                array('asset')
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
        if (!twig_in_filter((($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")), array(0 => "showcases", 1 => "entries"))) {
            // line 2
            $context['homepage'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("homepage", array("limit" => 1, "returnsingle" => true) );
            // line 3
            echo "<section class=\"hero hero-image is-primary is-bold is-medium ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) {
                echo "is-large";
            }
            echo "\"";
            // line 4
            if ((($this->getAttribute(($context["homepage"] ?? null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["homepage"] ?? null), "image", array()))) : (""))) {
                // line 5
                echo "        data-background-image=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["homepage"] ?? null), "image", array()), "files"), "html", null, true));
                echo "\" style=\"background-image: url(";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["homepage"] ?? null), "image", array()), "files"), "html", null, true));
                echo ")\"
    ";
            }
            // line 7
            echo ">
    <div class=\"hero-body\">
        <div class=\"container has-text-centered\">
            <h1 class=\"title\">";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/sitename"), "method"), "html", null, true));
            echo "</h1>
            ";
            // line 11
            if ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method")) {
                // line 12
                echo "            <h2 class=\"subtitle\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"), "html", null, true));
                echo "</h2>
            ";
            }
            // line 14
            echo "        </div>
    </div>
</section>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  77 => 12,  75 => 11,  71 => 10,  66 => 7,  58 => 5,  56 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if record.contenttype.slug|default() not in ['showcases', 'entries'] %}
{% setcontent homepage = \"homepage\" limit 1 returnsingle %}
<section class=\"hero hero-image is-primary is-bold is-medium {% if app.request.get('_route') == \"homepage\" %}is-large{% endif %}\"
    {%- if homepage.image|default %}
        data-background-image=\"{{ asset(homepage.image, 'files') }}\" style=\"background-image: url({{ asset(homepage.image, 'files') }})\"
    {% endif -%}
    >
    <div class=\"hero-body\">
        <div class=\"container has-text-centered\">
            <h1 class=\"title\">{{ config.get('general/sitename') }}</h1>
            {% if config.get('general/payoff') %}
            <h2 class=\"subtitle\">{{ config.get('general/payoff') }}</h2>
            {% endif %}
        </div>
    </div>
</section>
{% endif %}
", "partials/_header.twig", "");
    }
}
