<?php

/* record.twig */
class __TwigTemplate_a6da9067dea7778fff1b4e797239b67e86f7440ba5194124c517750836a71bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "record.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "record.twig"));

        $tags = array("if" => 7, "include" => 21, "with" => 26);
        $filters = array("escape" => 9, "image" => 9, "default" => 9);
        $functions = array("include" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include', 'with'),
                array('escape', 'image', 'default'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<section class=\"section section-record\">
    <div class=\"container\">
        ";
        // line 7
        if ( !twig_test_empty($this->getAttribute(($context["record"] ?? null), "image", array()))) {
            // line 8
            echo "        <figure class=\"image is-2by1\">
            <img src=\"";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->image($this->env, $this->getAttribute(($context["record"] ?? null), "image", array()), 1280, 660), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "alt", array()))) : ("")), "html", null, true));
            echo "\" />
            <figcaption>
                ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "title", array()))) : ("")), "html", null, true));
            echo "
            </figcaption>
        </figure>
        ";
        }
        // line 15
        echo "
        <div class=\"columns is-centered\">
            <div class=\"column is-two-thirds\">
                <article role=\"article\" class=\"content\">
                    <h1 class=\"title is-size-1 is-size-3-mobile\">";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "title", array()), "html", null, true));
        echo "</h1>

                    ";
        // line 21
        $this->loadTemplate("partials/_record_meta.twig", "record.twig", 21)->display(array_merge($context, array("extended" => true)));
        // line 22
        echo "
                    ";
        // line 26
        echo "                    ";
        $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = array("record" => ($context["record"] ?? null), "extended" => true, "repeaters" => true, "blocks" => true);
        if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
            throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
        }
        $context['_parent'] = $context;
        $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
        // line 27
        echo "                        ";
        $this->loadTemplate("partials/_sub_fields.twig", "record.twig", 27)->displayBlock("sub_fields", $context);
        echo "
                    ";
        $context = $context['_parent'];
        // line 29
        echo "
                    ";
        // line 33
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_recordfooter.twig", array("record" => ($context["record"] ?? null), "extended" => true)));
        echo "
                </div>
            </article>
        </div>
    </div>
</section>

";
        // line 41
        $this->loadTemplate("partials/_sub_recent_records.twig", "record.twig", 41)->display($context);
        // line 42
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  134 => 41,  124 => 34,  121 => 33,  118 => 29,  112 => 27,  104 => 26,  101 => 22,  99 => 21,  94 => 19,  88 => 15,  81 => 11,  74 => 9,  71 => 8,  69 => 7,  64 => 4,  58 => 3,  11 => 1,);
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

{% block main %}

<section class=\"section section-record\">
    <div class=\"container\">
        {% if record.image is not empty %}
        <figure class=\"image is-2by1\">
            <img src=\"{{ record.image|image(1280, 660) }}\" alt=\"{{ record.values.image.alt|default() }}\" />
            <figcaption>
                {{ record.values.image.title|default() }}
            </figcaption>
        </figure>
        {% endif %}

        <div class=\"columns is-centered\">
            <div class=\"column is-two-thirds\">
                <article role=\"article\" class=\"content\">
                    <h1 class=\"title is-size-1 is-size-3-mobile\">{{ record.title }}</h1>

                    {% include 'partials/_record_meta.twig' with {'extended': true} %}

                    {# Output all fields, in the order as defined in the contenttype.
                    To change the generated html and configure the options, see:
                    https://docs.bolt.cm/templating #}
                    {% with { 'record': record, 'extended': true, 'repeaters': true, 'blocks': true } %}
                        {{ block('sub_fields', 'partials/_sub_fields.twig') }}
                    {% endwith %}

                    {# Uncomment this if you wish to dump the entire record to the client, for debugging purposes.
                    {{ dump(record) }}
                    #}

                    {{ include('partials/_recordfooter.twig', { 'record': record, 'extended': true }) }}
                </div>
            </article>
        </div>
    </div>
</section>

{% include \"partials/_sub_recent_records.twig\" %}

{% endblock main %}
", "record.twig", "");
    }
}
