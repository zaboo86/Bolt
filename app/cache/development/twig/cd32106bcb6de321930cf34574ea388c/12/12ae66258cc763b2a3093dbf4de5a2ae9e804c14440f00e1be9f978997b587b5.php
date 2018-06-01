<?php

/* @WebProfiler/Icon/logger.svg */
class __TwigTemplate_f610569870bcb3a540033b4a2537464eca731d6a7c8f14190f70cafbc8d49c35 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/logger.svg"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M21,4v13.8c0,2.7-2.5,5.2-5.2,5.2H6c-0.6,0-1-0.4-1-1s0.4-1,1-1h9.8c1.6,0,3.2-1.7,3.2-3.2V4
    c0-0.6,0.4-1,1-1S21,3.4,21,4z M5.5,20C4.1,20,3,18.9,3,17.5V3.5C3,2.1,4.1,1,5.5,1h10.1C16.9,1,18,2.1,18,3.5v14.1
    c0,1.4-1.1,2.5-2.5,2.5H5.5z M9,11.4C9,11.7,9.3,12,9.6,12h1.8c0.3,0,0.6-0.3,0.6-0.6V4.6C12,4.3,11.7,4,11.4,4H9.6
    C9.3,4,9,4.3,9,4.6V11.4z M9,16.4C9,16.7,9.3,17,9.6,17h1.8c0.3,0,0.6-0.3,0.6-0.6v-1.8c0-0.3-0.3-0.6-0.6-0.6H9.6
    C9.3,14,9,14.3,9,14.6V16.4z\"/>
</svg>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/logger.svg";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M21,4v13.8c0,2.7-2.5,5.2-5.2,5.2H6c-0.6,0-1-0.4-1-1s0.4-1,1-1h9.8c1.6,0,3.2-1.7,3.2-3.2V4
    c0-0.6,0.4-1,1-1S21,3.4,21,4z M5.5,20C4.1,20,3,18.9,3,17.5V3.5C3,2.1,4.1,1,5.5,1h10.1C16.9,1,18,2.1,18,3.5v14.1
    c0,1.4-1.1,2.5-2.5,2.5H5.5z M9,11.4C9,11.7,9.3,12,9.6,12h1.8c0.3,0,0.6-0.3,0.6-0.6V4.6C12,4.3,11.7,4,11.4,4H9.6
    C9.3,4,9,4.3,9,4.6V11.4z M9,16.4C9,16.7,9.3,17,9.6,17h1.8c0.3,0,0.6-0.3,0.6-0.6v-1.8c0-0.3-0.3-0.6-0.6-0.6H9.6
    C9.3,14,9,14.3,9,14.6V16.4z\"/>
</svg>
", "@WebProfiler/Icon/logger.svg", "/var/www/bolt/vendor/symfony/web-profiler-bundle/Resources/views/Icon/logger.svg");
    }
}
