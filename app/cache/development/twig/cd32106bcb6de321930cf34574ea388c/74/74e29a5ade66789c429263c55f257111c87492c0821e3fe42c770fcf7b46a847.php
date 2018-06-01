<?php

/* @bolt/extend/_feedback.twig */
class __TwigTemplate_8a3a89b5ecfdaac4a6dc6e3bc7b2951f80840ff3ed6d54bb8502dde2814c5fd7 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_feedback.twig"));

        $tags = array("if" => 4);
        $filters = array();
        $functions = array("__" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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
        echo "<div class=\"update-container hide-block\">
    <h3 class=\"update-output-title\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.updates"));
        echo "</h3>
    <div class=\"update-output-console hide-block\">
        ";
        // line 4
        if ($this->getAttribute(($context["context"] ?? null), "writeable", array())) {
            // line 5
            echo "            <pre class=\"update-output-element console\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.checking-for-updates"));
            echo "</pre>
        ";
        } else {
            // line 7
            echo "            <pre class=\"update-output-element\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-update-check-in-readmode"));
            echo "</pre>
        ";
        }
        // line 9
        echo "    </div>

    <div class=\"update-output-notice\"></div>

    <div class=\"update-list hide-block\">
        <table class=\"dashboardlisting table\">
            <thead>
            <tr>
                <th>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.extension"));
        echo "</th>
                <th>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.version"));
        echo "</th>
                <th>";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.actions"));
        echo "</th>
            </tr>
            </thead>
            <tbody class=\"update-list-items\">

            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_feedback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  82 => 18,  78 => 17,  68 => 9,  62 => 7,  56 => 5,  54 => 4,  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"update-container hide-block\">
    <h3 class=\"update-output-title\">{{ __('page.extend.headline.updates') }}</h3>
    <div class=\"update-output-console hide-block\">
        {% if context.writeable %}
            <pre class=\"update-output-element console\">{{ __('page.extend.message.checking-for-updates') }}</pre>
        {% else %}
            <pre class=\"update-output-element\">{{ __('page.extend.message.no-update-check-in-readmode') }}</pre>
        {% endif %}
    </div>

    <div class=\"update-output-notice\"></div>

    <div class=\"update-list hide-block\">
        <table class=\"dashboardlisting table\">
            <thead>
            <tr>
                <th>{{ __('page.extend.listheader.extension') }}</th>
                <th>{{ __('page.extend.listheader.version') }}</th>
                <th>{{ __('page.extend.listheader.actions') }}</th>
            </tr>
            </thead>
            <tbody class=\"update-list-items\">

            </tbody>
        </table>
    </div>
</div>
", "@bolt/extend/_feedback.twig", "");
    }
}
