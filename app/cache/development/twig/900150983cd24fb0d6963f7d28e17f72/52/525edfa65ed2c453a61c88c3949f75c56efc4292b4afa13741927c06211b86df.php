<?php

/* partials/aside.twig */
class __TwigTemplate_ceebb3c323d85c0b0cf47f61c716add0c6fe90a0d8856c5ee810f8a778fce81d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/aside.twig"));

        $tags = array("setcontent" => 1, "set" => 13, "if" => 14, "for" => 17);
        $filters = array("escape" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'set', 'if', 'for'),
                array('escape'),
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

        // line 1
        $context['entries'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("entries/latest/3", array() );
        // line 2
        echo "    ";
        // line 3
        echo "
   




<aside role=\"complementary\" class=\"sidebar\">
  
<div>
    
     ";
        // line 13
        $context["relatedrecords"] = $this->getAttribute(($context["record"] ?? null), "related", array(), "method");
        // line 14
        echo "    ";
        if ( !twig_test_empty(($context["relatedrecords"] ?? null))) {
            // line 15
            echo "        <p>Related content:</p>
        <ul>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 18
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true));
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  75 => 18,  71 => 17,  67 => 15,  64 => 14,  62 => 13,  50 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% setcontent entries = \"entries/latest/3\" %}
    {#{{dump(record.related('pages'))}}#}

   




<aside role=\"complementary\" class=\"sidebar\">
  
<div>
    
     {% set relatedrecords = record.related() %}
    {% if relatedrecords is not empty %}
        <p>Related content:</p>
        <ul>
        {% for related in relatedrecords %}
            <li><a href=\"{{ related.link }}\">{{ related.title }}</a></li>
        {%  endfor %}
        </ul>
    {% endif %}
", "partials/aside.twig", "");
    }
}
