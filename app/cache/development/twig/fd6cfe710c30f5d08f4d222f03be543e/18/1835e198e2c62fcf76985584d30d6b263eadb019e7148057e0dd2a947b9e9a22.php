<?php

/* partials/_aside.twig */
class __TwigTemplate_30270a64c0fa3264086cf2c465886c8ac8cae5918a89009efd144dbe8951abd5 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_aside.twig"));

        $tags = array("if" => 4, "setcontent" => 14, "include" => 25);
        $filters = array("escape" => 22);
        $functions = array("haswidgets" => 4, "widgets" => 6, "popup" => 20, "__" => 29);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'setcontent', 'include'),
                array('escape'),
                array('haswidgets', 'widgets', 'popup', '__')
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
        echo "<aside role=\"complementary\" class=\"sidebar\">

    ";
        // line 4
        if ($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->hasWidgets($this->env, "aside_top")) {
            // line 5
            echo "
        ";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "aside_top"));
            echo "

    ";
        } else {
            // line 9
            echo "
    ";
            // line 11
            echo "    <div class=\"content\">
        ";
            // line 14
            echo "        ";
            $context['block'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("block/about-us", array() );
            // line 15
            echo "
        ";
            // line 18
            echo "        ";
            if ($this->getAttribute(($context["block"] ?? null), "title", array(), "any", true, true)) {
                // line 19
                echo "
            ";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->popup($this->getAttribute($this->getAttribute(($context["block"] ?? null), "values", array()), "image", array()), 480, 320));
                echo "

            <h2 class=\"title\">";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "title", array()), "html", null, true));
                echo "</h2>
            ";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true));
                echo "

            ";
                // line 25
                $this->loadTemplate("partials/_record_meta.twig", "partials/_aside.twig", 25)->display(array_merge($context, array("record" => ($context["block"] ?? null))));
                // line 26
                echo "
        ";
            } else {
                // line 28
                echo "
            <h2 class=\"title\">";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.missing-about-page"));
                echo "</h2>

            <p>";
                // line 31
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.missing-about-page-block"));
                echo "</p>

        ";
            }
            // line 34
            echo "
    </div>

    ";
        }
        // line 38
        echo "
    ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "aside_bottom"));
        echo "

</aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  119 => 38,  113 => 34,  107 => 31,  102 => 29,  99 => 28,  95 => 26,  93 => 25,  88 => 23,  84 => 22,  79 => 20,  76 => 19,  73 => 18,  70 => 15,  67 => 14,  64 => 11,  61 => 9,  55 => 6,  52 => 5,  50 => 4,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Sidebar #}
<aside role=\"complementary\" class=\"sidebar\">

    {% if haswidgets('aside_top') %}

        {{ widgets('aside_top') }}

    {% else %}

    {# This part is only shown if there are no widgets in the 'aside_top' widgets slot. #}
    <div class=\"content\">
        {# The next section attempts to fill the panel in the sidebar with the contents of the
            'about-us'-block, if it exists. First, attempt to fetch the block with slug 'about-us' #}
        {% setcontent block = \"block/about-us\" %}

        {# check if we have a title. If so, we know we have content to display. Otherwise, we will
            output a default text, telling the user to create the 'blocks' in the backend. #}
        {% if block.title is defined %}

            {{ popup(block.values.image, 480, 320) }}

            <h2 class=\"title\">{{ block.title }}</h2>
            {{ block.content }}

            {% include 'partials/_record_meta.twig' with {'record': block } %}

        {% else %}

            <h2 class=\"title\">{{ __('general.phrase.missing-about-page') }}</h2>

            <p>{{ __('general.phrase.missing-about-page-block') }}</p>

        {% endif %}

    </div>

    {% endif %}

    {{ widgets('aside_bottom') }}

</aside>
{# End Sidebar #}
", "partials/_aside.twig", "");
    }
}
