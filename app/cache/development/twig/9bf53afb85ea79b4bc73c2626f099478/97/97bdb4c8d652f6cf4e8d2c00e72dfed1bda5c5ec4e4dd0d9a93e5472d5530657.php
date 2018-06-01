<?php

/* index.twig */
class __TwigTemplate_4a816dc8416a70c66414598cf465bf421998a988f85875ddea52dbb74c346d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/master.twig", "index.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        $tags = array("if" => 5, "setcontent" => 10, "for" => 16);
        $filters = array("escape" => 22, "thumbnail" => 24, "date" => 31);
        $functions = array("include" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'setcontent', 'for'),
                array('escape', 'thumbnail', 'date'),
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
    ";
        // line 5
        if (array_key_exists("record", $context)) {
            // line 6
            echo "
      ";
            // line 8
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/header.twig"));
            echo "

       ";
            // line 10
            $context['pageitems'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorial/latest/6", array() );
            // line 11
            echo "
    <div class=\"article-list\">
        <div class=\"container\">
           
          <div class=\"row articles\"> 
";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageitems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageitem"]) {
                // line 17
                echo "   

             
               <div class=\"col-sm-6 col-md-4 item\">
<article>
    <h4><a href=\"";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "title", array()), "html", null, true));
                echo "</a></h4>
   ";
                // line 23
                if (($this->getAttribute($context["pageitem"], "image", array()) != "")) {
                    // line 24
                    echo "    <p><img src=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail($this->getAttribute($context["pageitem"], "image", array()), 90, 90), "html", null, true));
                    echo "\"></p>
    ";
                }
                // line 26
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "excerpt", array()), "html", null, true));
                echo "
    <a href=\"";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["tutorialitem"] ?? null), "link", array()), "html", null, true));
                echo "\" class=\"action\"><i class=\"fa fa-arrow-circle-right\"></i></a>

    <p class=\"meta\"><a href=\"";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\">Link</a> -
    Posted by ";
                // line 30
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pageitem"], "user", array()), "displayname", array()), "html", null, true));
                echo "
    on ";
                // line 31
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pageitem"], "datecreated", array()), "M d, ’y"), "html", null, true));
                echo "</p>

</article>

  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "              
                                  </div>
                </div>
            </div>
  
";
            // line 51
            echo "     ";
            // line 53
            echo "    ";
        }
        // line 54
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  151 => 53,  149 => 51,  142 => 37,  130 => 31,  126 => 30,  122 => 29,  117 => 27,  112 => 26,  106 => 24,  104 => 23,  98 => 22,  91 => 17,  87 => 16,  80 => 11,  78 => 10,  72 => 8,  69 => 6,  67 => 5,  64 => 4,  58 => 3,  11 => 1,);
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

    {% if record is defined %}

      {#  <h1>{{ record.title }}</h1>#}
        {{include('partials/header.twig')}}

       {% setcontent pageitems = \"tutorial/latest/6\" %}

    <div class=\"article-list\">
        <div class=\"container\">
           
          <div class=\"row articles\"> 
{% for pageitem in pageitems %}
   

             
               <div class=\"col-sm-6 col-md-4 item\">
<article>
    <h4><a href=\"{{ pageitem.link }}\">{{ pageitem.title }}</a></h4>
   {% if pageitem.image!=\"\" %}
    <p><img src=\"{{ pageitem.image|thumbnail(90, 90) }}\"></p>
    {% endif %}
    {{ pageitem.excerpt }}
    <a href=\"{{ tutorialitem.link }}\" class=\"action\"><i class=\"fa fa-arrow-circle-right\"></i></a>

    <p class=\"meta\"><a href=\"{{ pageitem.link }}\">Link</a> -
    Posted by {{ pageitem.user.displayname }}
    on {{ pageitem.datecreated|date(\"M d, ’y\")}}</p>

</article>

  </div>
{% endfor %}
              
                                  </div>
                </div>
            </div>
  
{# {{ record.teaser }}

        {{ popup(record.image, 1200, 500) }} 

        {{ record.body }}

        {{ record.content }}

        {{ record.page }}#}
     {#   {{ include('partials/recordfooter.twig', { 'record': record }) }}
#}
    {% endif %}
 
{% endblock main %}
", "index.twig", "");
    }
}
