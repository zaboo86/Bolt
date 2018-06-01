<?php

/* partials/sub_head.twig */
class __TwigTemplate_3f85dadb2520461de7f396b8585b9855ce8158c313d47533109f7bd89361cc13 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/sub_head.twig"));

        $tags = array("setcontent" => 9, "for" => 10);
        $filters = array();
        $functions = array("dump" => 11);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'for'),
                array(),
                array('dump')
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
        echo "<nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\">
         
            <div class=\"container-fluid\">
                
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                 ";
        // line 9
        $context['latespages'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("pages/latest/2", array() );
        // line 10
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["latestpages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            echo "       
                ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\DumpRuntime')->dump($this->env, $context, $context["page"]));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                <div >
                    <ul class=\"nav navbar-nav ml-auto\">
                        <li>
                                <a href=\"\">Lernmaterial</a>
                            </li>
                            <li>
                                <a href=\"\">Diskussionen ?</a>
                            </li>
                            <li>
                                <a href=\"\">Fortschritt</a>
                            </li>
                            <li>
                                <a href=\"\">Lernräume ?</a>
                            </li>
                            <li>
                                <a href=\"\">Kursdetails</a>
                            </li>
                            <li>
                                <a href=\"\">Neuigkeiten ?</a>
                            </li>
                            <li>
                                <a href=\"\">Recap</a>
                            </li>
                    </ul>
                </div>
            </div>
            
        </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/sub_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  65 => 11,  58 => 10,  56 => 9,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\">
         
            <div class=\"container-fluid\">
                
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                 {% setcontent latespages='pages/latest/2' %}
                {%for page in latestpages %}       
                {{dump(page)}}
                {%endfor%}
                <div >
                    <ul class=\"nav navbar-nav ml-auto\">
                        <li>
                                <a href=\"\">Lernmaterial</a>
                            </li>
                            <li>
                                <a href=\"\">Diskussionen ?</a>
                            </li>
                            <li>
                                <a href=\"\">Fortschritt</a>
                            </li>
                            <li>
                                <a href=\"\">Lernräume ?</a>
                            </li>
                            <li>
                                <a href=\"\">Kursdetails</a>
                            </li>
                            <li>
                                <a href=\"\">Neuigkeiten ?</a>
                            </li>
                            <li>
                                <a href=\"\">Recap</a>
                            </li>
                    </ul>
                </div>
            </div>
            
        </nav>
", "partials/sub_head.twig", "");
    }
}
