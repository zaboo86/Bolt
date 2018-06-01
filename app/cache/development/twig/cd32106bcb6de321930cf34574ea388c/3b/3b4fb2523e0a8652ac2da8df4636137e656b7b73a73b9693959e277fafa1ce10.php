<?php

/* @bolt/editcontent/_relationships.twig */
class __TwigTemplate_548db298c76c910dfaa4c6461f08fa51a2fe9f4b2abd2124e566800586cd4cca extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_relationships.twig"));

        $tags = array("for" => 3, "if" => 7);
        $filters = array("markdown" => 9);
        $functions = array("include" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('markdown'),
                array('include')
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
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "relations", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["relcontenttype"] => $context["relation"]) {
            // line 4
            echo "    <div data-bolt-fieldset=\"relationship\">

        ";
            // line 7
            echo "        ";
            if (($this->getAttribute($context["relation"], "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["relation"], "prefix", array())))) {
                // line 8
                echo "            <div class=\"prefix\">
                ";
                // line 9
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown($this->getAttribute($context["relation"], "prefix", array())));
                echo "
            </div>
        ";
            }
            // line 12
            echo "
        ";
            // line 14
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/fields/_relationship.twig"));
            echo "

        ";
            // line 17
            echo "        ";
            if (($this->getAttribute($context["relation"], "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["relation"], "postfix", array())))) {
                // line 18
                echo "            <div class=\"postfix\">
                ";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown($this->getAttribute($context["relation"], "postfix", array())));
                echo "
            </div>
        ";
            }
            // line 22
            echo "
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['relcontenttype'], $context['relation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_relationships.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  103 => 22,  97 => 19,  94 => 18,  91 => 17,  85 => 14,  82 => 12,  76 => 9,  73 => 8,  70 => 7,  66 => 4,  49 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Relationships for this record #}

{% for relcontenttype, relation in context.contenttype.relations %}
    <div data-bolt-fieldset=\"relationship\">

        {# Prefix #}
        {% if relation.prefix is defined and relation.prefix is not empty %}
            <div class=\"prefix\">
                {{ relation.prefix|markdown }}
            </div>
        {% endif %}

        {# Relationship #}
        {{ include('@bolt/editcontent/fields/_relationship.twig') }}

        {# Postfix #}
        {% if relation.postfix is defined and relation.postfix is not empty %}
            <div class=\"postfix\">
                {{ relation.postfix|markdown }}
            </div>
        {% endif %}

    </div>
{% endfor %}

", "@bolt/editcontent/_relationships.twig", "");
    }
}
