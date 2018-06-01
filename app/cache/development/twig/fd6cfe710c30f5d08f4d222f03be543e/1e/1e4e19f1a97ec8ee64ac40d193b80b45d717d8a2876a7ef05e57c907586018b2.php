<?php

/* partials/_footer.twig */
class __TwigTemplate_3af6eb164a8145a4b72c23867f67c67c5b6ad0043450e8f58e66fd3be1e85995 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_footer.twig"));

        $tags = array();
        $filters = array("escape" => 8, "date" => 8);
        $functions = array("__" => 9, "menu" => 14, "widgets" => 21, "asset" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('escape', 'date'),
                array('__', 'menu', 'widgets', 'asset')
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
        echo "<footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
        <nav class=\"level\" role=\"navigation\" aria-label=\"footer navigation\">
            <div class=\"level-left\">
                <div class=\"level-item\">
                    <p>
                        &copy; ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " &bullet;
                        ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%bolt%" => "https://bolt.cm")));
        echo "
                    </p>
                </div>
            </div>
            <div class=\"level-right\">
                ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->menu($this->env, "main", "partials/_sub_menu_footer.twig", array("withsubmenus" => false)));
        // line 18
        echo "
            </div>
        </nav>
        ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "footer"));
        echo "
    </div>
</footer>

<script src=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/normalizeBrightness.js", "theme"), "html", null, true));
        echo "\"></script>
<script src=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js", "theme"), "html", null, true));
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  80 => 25,  73 => 21,  68 => 18,  66 => 14,  58 => 9,  54 => 8,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Footer #}
<footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
        <nav class=\"level\" role=\"navigation\" aria-label=\"footer navigation\">
            <div class=\"level-left\">
                <div class=\"level-item\">
                    <p>
                        &copy; {{ \"now\"|date(\"Y\") }} &bullet;
                        {{ __(\"This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.\", {'%bolt%':'https://bolt.cm'}) }}
                    </p>
                </div>
            </div>
            <div class=\"level-right\">
                {{ menu(
                    identifier = 'main',
                    template = 'partials/_sub_menu_footer.twig',
                    params = {'withsubmenus': false}
                ) }}
            </div>
        </nav>
        {{ widgets('footer') }}
    </div>
</footer>

<script src=\"{{ asset('js/normalizeBrightness.js', 'theme') }}\"></script>
<script src=\"{{ asset('js/app.js', 'theme') }}\"></script>
", "partials/_footer.twig", "");
    }
}
