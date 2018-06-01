<?php

/* @bolt/_buic/_listing.twig */
class __TwigTemplate_4c0b3b1c548fec62834ecf0618031ef3ea3b7f9857c8a177d6df3ed17df3fa99 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_listing.twig"));

        $tags = array("macro" => 1, "set" => 2, "for" => 5, "if" => 9);
        $filters = array("default" => 2, "merge" => 6, "escape" => 19, "url_encode" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'set', 'for', 'if'),
                array('default', 'merge', 'escape', 'url_encode'),
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getbuic_listing_slink($__id__ = null, $__text__ = null, $__paramname__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "text" => $__text__,
            "paramname" => $__paramname__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_listing_slink"));

            // line 2
            echo "    ";
            $context["paramname"] = ((array_key_exists("paramname", $context)) ? (_twig_default_filter(($context["paramname"] ?? null), "order")) : ("order"));
            // line 3
            echo "
    ";
            // line 4
            $context["params"] = array();
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != ($context["paramname"] ?? null))) {
                    // line 6
                    echo "        ";
                    $context["params"] = twig_array_merge(($context["params"] ?? null), array($context["key"] => $context["val"]));
                    // line 7
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "
    ";
            // line 9
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "get", array(0 => ($context["paramname"] ?? null)), "method") == ($context["id"] ?? null))) {
                // line 10
                echo "        ";
                $context["class"] = "order-asc";
                // line 11
                echo "        ";
                $context["params"] = twig_array_merge(($context["params"] ?? null), array(($context["paramname"] ?? null) => ("-" . ($context["id"] ?? null))));
                // line 12
                echo "    ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "get", array(0 => ($context["paramname"] ?? null)), "method") == ("-" . ($context["id"] ?? null)))) {
                // line 13
                echo "        ";
                $context["class"] = "order-desc";
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "        ";
                $context["class"] = "order-none";
                // line 16
                echo "        ";
                $context["params"] = twig_array_merge(($context["params"] ?? null), array(($context["paramname"] ?? null) => ($context["id"] ?? null)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <a href=\"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ("?" . twig_urlencode_filter(($context["params"] ?? null))), "html", null, true));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true));
            echo "</a>
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
        return "@bolt/_buic/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 19,  121 => 18,  118 => 17,  115 => 16,  112 => 15,  109 => 14,  106 => 13,  103 => 12,  100 => 11,  97 => 10,  95 => 9,  92 => 8,  85 => 7,  82 => 6,  76 => 5,  74 => 4,  71 => 3,  68 => 2,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro buic_listing_slink(id, text, paramname) %}
    {% set paramname = paramname|default('order') %}

    {% set params = {} %}
    {% for key, val in global.request.query.all if key != paramname %}
        {% set params = params|merge({(key): val}) %}
    {% endfor %}

    {% if global.request.query.get(paramname) == id %}
        {% set class = 'order-asc' %}
        {% set params = params|merge({(paramname): '-' ~ id}) %}
    {% elseif global.request.query.get(paramname) == '-' ~ id %}
        {% set class = 'order-desc' %}
    {% else %}
        {% set class = 'order-none' %}
        {% set params = params|merge({(paramname): id}) %}
    {% endif %}

    <a href=\"{{ '?' ~ params|url_encode }}\" class=\"{{ class }}\">{{ text }}</a>
{% endmacro %}
", "@bolt/_buic/_listing.twig", "");
    }
}
