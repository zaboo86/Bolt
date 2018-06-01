<?php

/* partials/navbar.twig */
class __TwigTemplate_d9f00de1d224f3651e87b2e63b293050193a8c398cf3eaebf76a24d5c4ca8f1a extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/navbar.twig"));

        $tags = array("setcontent" => 10, "for" => 11);
        $filters = array("escape" => 5);
        $functions = array("path" => 4, "dump" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'for'),
                array('escape'),
                array('path', 'dump')
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
                <a class=\"navbar-brand text-capitalize\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
        echo "\">
                ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/sitename"), "method"), "html", null, true));
        echo "</a>
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                 ";
        // line 10
        $context['latespages'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("pages/latest/2", array() );
        // line 11
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["latestpages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            echo "       
                ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\DumpRuntime')->dump($this->env, $context, $context["page"]));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link text-capitalize\" href=\"#\">About Us</a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link text-capitalize\" href=\"#\">News</a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link text-capitalize\" href=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["latestpages"] ?? null), "link", array()), "html", null, true));
        echo "\">Tutorials</a>
                        </li>
                       
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Sign In</a>
                            <div class=\"dropdown-menu\" role=\"menu\"></div>
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
        return "partials/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  80 => 14,  72 => 12,  65 => 11,  63 => 10,  55 => 5,  51 => 4,  46 => 1,);
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
                <a class=\"navbar-brand text-capitalize\" href=\"{{ path('homepage') }}\">
                {{ config.get('general/sitename') }}</a>
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                 {% setcontent latespages='pages/latest/2' %}
                {%for page in latestpages %}       
                {{dump(page)}}
                {%endfor%}
                <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link text-capitalize\" href=\"#\">About Us</a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link text-capitalize\" href=\"#\">News</a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link text-capitalize\" href=\"{{latestpages.link}}\">Tutorials</a>
                        </li>
                       
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Sign In</a>
                            <div class=\"dropdown-menu\" role=\"menu\"></div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
", "partials/navbar.twig", "");
    }
}
