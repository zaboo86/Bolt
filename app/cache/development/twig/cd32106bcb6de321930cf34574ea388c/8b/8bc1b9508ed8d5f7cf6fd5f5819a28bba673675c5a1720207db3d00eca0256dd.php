<?php

/* entry.twig */
class __TwigTemplate_308c105184ea754ef34ec0449d6e78cd293ca9e6bc6ae10c1259f03fbcd84d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/master.twig", "entry.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entry.twig"));

        $tags = array("include" => 15, "if" => 19, "with" => 33);
        $filters = array("escape" => 13, "image" => 21, "default" => 21);
        $functions = array("include" => 45);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if', 'with'),
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

    <div class=\"container\">
       
               
            
        <div class=\"columns\">
            <div class=\"column is-two-thirds\">
                <article role=\"article\" class=\"content\">
                    <h1 class=\"title is-size-1 is-size-3-mobile\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "title", array()), "html", null, true));
        echo "</h1>

                   ";
        // line 15
        $this->loadTemplate("partials/record_meta.twig", "entry.twig", 15)->display(array_merge($context, array("extended" => true)));
        echo " 

                    ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "teaser", array()), "html", null, true));
        echo "

                    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute(($context["record"] ?? null), "image", array()))) {
            // line 20
            echo "                    <figure class=\"image\">
                        <img src=\"";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->image($this->env, $this->getAttribute(($context["record"] ?? null), "image", array()), 640, 360, "r"), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "alt", array()))) : ("")), "html", null, true));
            echo "\" />
                        ";
            // line 23
            echo "                        <figcaption>
                            ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "image", array(), "any", false, true), "title", array()))) : ("")), "html", null, true));
            echo "
                            ";
            // line 26
            echo "                        </figcaption>
                    </figure>
                    ";
        }
        // line 29
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "body", array()), "html", null, true));
        echo "

                    ";
        // line 33
        echo "                    ";
        $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = array("record" => ($context["record"] ?? null), "common" => false, "repeaters" => true, "blocks" => true, "exclude" => array(0 => "teaser", 1 => "body", 2 => "image"));
        if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
            throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
        }
        $context['_parent'] = $context;
        $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
        // line 34
        echo "                     ";
        $this->loadTemplate("partials/sub_fields.twig", "entry.twig", 34)->displayBlock("sub_fields", $context);
        echo " 
                    ";
        $context = $context['_parent'];
        // line 36
        echo "                    
                  ";
        // line 39
        echo "                    

                ";
        // line 42
        echo "                </div>
            </article>
                        <div class=\"column\">
               ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/aside.twig"));
        echo " 
            </div>
           
        </div>
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  142 => 42,  138 => 39,  135 => 36,  129 => 34,  121 => 33,  116 => 30,  113 => 29,  108 => 26,  104 => 24,  101 => 23,  95 => 21,  92 => 20,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  64 => 4,  58 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/master.twig' %}

{% block main %}


    <div class=\"container\">
       
               
            
        <div class=\"columns\">
            <div class=\"column is-two-thirds\">
                <article role=\"article\" class=\"content\">
                    <h1 class=\"title is-size-1 is-size-3-mobile\">{{ record.title }}</h1>

                   {% include 'partials/record_meta.twig' with {'extended': true} %} 

                    {{ record.teaser }}

                    {% if record.image is not empty %}
                    <figure class=\"image\">
                        <img src=\"{{ record.image|image(640, 360, \"r\") }}\" alt=\"{{ record.values.image.alt|default() }}\" />
                        {# <img src=\"https://bulma.io/images/placeholders/640x360.png\"> #}
                        <figcaption>
                            {{ record.values.image.title|default() }}
                            {# Figure 1: Some beautiful placeholders #}
                        </figcaption>
                    </figure>
                    {% endif %}

                    {{ record.body }}

                    {# If there are repeaters, we should output them. #}
                    {% with { 'record': record, 'common': false, 'repeaters': true, 'blocks': true, 'exclude': ['teaser', 'body', 'image'] } %}
                     {{ block('sub_fields', 'partials/sub_fields.twig') }} 
                    {% endwith %}
                    
                  {# Uncomment this if you wish to dump the entire record to the client, for debugging purposes.
                    {{ dump(record) }}#}
                    

                {#    {{ include('partials/_recordfooter.twig', { 'record': record, 'extended': true }) }} #}
                </div>
            </article>
                        <div class=\"column\">
               {{ include('partials/aside.twig') }} 
            </div>
           
        </div>
    </div>
</section>

{% endblock main %}
", "entry.twig", "");
    }
}
