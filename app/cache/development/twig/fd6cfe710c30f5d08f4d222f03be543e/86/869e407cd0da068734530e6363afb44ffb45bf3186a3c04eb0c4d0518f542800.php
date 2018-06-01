<?php

/* partials/_sub_taxonomylinks.twig */
class __TwigTemplate_6e2af792501a6cb1af31323d60ddceeac01db07e5856990c3df4d52cf140f1a8 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_taxonomylinks.twig"));

        $tags = array("for" => 2, "if" => 4);
        $filters = array("taxonomy" => 2, "length" => 4, "escape" => 5);
        $functions = array("__" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('taxonomy', 'length', 'escape'),
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
        echo "<div class=\"tags\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->taxonomy(($context["record"] ?? null)));
        foreach ($context['_seq'] as $context["type"] => $context["values"]) {
            // line 3
            echo "        <span class=\"label\">
            ";
            // line 4
            if ((twig_length_filter($this->env, $context["values"]) < 2)) {
                // line 5
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "singular_name", array()), "html", null, true));
                echo ":
            ";
            } else {
                // line 7
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "name", array()), "html", null, true));
                echo ":
            ";
            }
            // line 9
            echo "        </span>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["values"]);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                // line 11
                echo "            <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["link"], "html", null, true));
                echo "\" class=\"tag is-dark\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["value"], "html", null, true));
                echo "</a>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 13
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.none"));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 16,  97 => 15,  88 => 13,  78 => 11,  73 => 10,  70 => 9,  64 => 7,  58 => 5,  56 => 4,  53 => 3,  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tags\">
    {% for type, values in record|taxonomy %}
        <span class=\"label\">
            {% if values|length < 2 %}
                {{ config.get('taxonomy')[type].singular_name }}:
            {% else %}
                {{ config.get('taxonomy')[type].name }}:
            {% endif %}
        </span>
        {% for link, value in values %}
            <a href=\"{{ link }}\" class=\"tag is-dark\">{{ value }}</a>
        {% else %}
            {{ __('general.phrase.none') }}
        {% endfor %}
    {% endfor %}
</div>
", "partials/_sub_taxonomylinks.twig", "");
    }
}
