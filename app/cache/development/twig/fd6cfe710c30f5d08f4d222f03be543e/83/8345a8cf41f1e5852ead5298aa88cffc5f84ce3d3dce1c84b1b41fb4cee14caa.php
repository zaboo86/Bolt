<?php

/* partials/_fresh_install.twig */
class __TwigTemplate_d56ddb1ec581c933e0b089d9c68a1793635b93678aeae2587bb8c010fc602378 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_fresh_install.twig"));

        $tags = array("if" => 1);
        $filters = array("escape" => 9);
        $functions = array("path" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('escape'),
                array('path')
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "<div class=\"notification is-info\">
    <button class=\"delete\">Close</button>
    <h2>Welcome to the Bolt Base-2018 theme.</h2>
    <p>This is a minimal theme, with a modular structure. It is well suited to build your own theme's on top of.</p>
    <ul>
        <li>Check the <a href='https://github.com/bolt/themes/blob/master/readme.md'>readme.md</a> for instructions on how to customize this theme.</li>
        <li>Read the <a href='https://bulma.io/documentation/overview/start/'>Bulma</a> documentation.</li>
        <li><a href='";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fileedit", array("namespace" => "theme", "file" => "index.twig")), "html", null, true));
            echo "'>Edit this template</a>, to get rid of this 'callout'.</li>
    </ul>
    <small>Note: Only registered users will see this. This piece of content is hidden from regular visitors.</small>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_fresh_install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
<div class=\"notification is-info\">
    <button class=\"delete\">Close</button>
    <h2>Welcome to the Bolt Base-2018 theme.</h2>
    <p>This is a minimal theme, with a modular structure. It is well suited to build your own theme's on top of.</p>
    <ul>
        <li>Check the <a href='https://github.com/bolt/themes/blob/master/readme.md'>readme.md</a> for instructions on how to customize this theme.</li>
        <li>Read the <a href='https://bulma.io/documentation/overview/start/'>Bulma</a> documentation.</li>
        <li><a href='{{ path('fileedit', {'namespace': 'theme', 'file': 'index.twig'}) }}'>Edit this template</a>, to get rid of this 'callout'.</li>
    </ul>
    <small>Note: Only registered users will see this. This piece of content is hidden from regular visitors.</small>
</div>
{% endif %}
", "partials/_fresh_install.twig", "");
    }
}
