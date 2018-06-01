<?php

/* partials/_sub_recent_records.twig */
class __TwigTemplate_ccb49b95d5dc05c1202779b18cf569bda2149acf6a21283f293bac50b776191f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_recent_records.twig"));

        $tags = array("for" => 9, "setcontent" => 13);
        $filters = array("default" => 9, "escape" => 18);
        $functions = array("__" => 15, "path" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'setcontent'),
                array('default', 'escape'),
                array('__', 'path')
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

        // line 6
        echo "<section class=\"section section-pages hero is-primary is-bold\">
    <div class=\"container\">
        <div class=\"columns\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            if ( !(($this->getAttribute($context["ct"], "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["ct"], "viewless", array()), false)) : (false))) {
                // line 10
                echo "            <div class=\"column\">
                <div class=\"card\">
                    <div class=\"content card-content\">
                        ";
                // line 13
                $context['records'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent(($this->getAttribute(($context["ct"] ?? null), "slug", array()) . "/latest/5"), array() );
                // line 14
                echo "
                        <h2 class=\"is-size-4\">";
                // line 15
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.recent", array("%contenttypes%" => $this->getAttribute($context["ct"], "name", array()))));
                echo "</h2>
                        <ul>
                            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 18
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true));
                    echo "</a></li>
                            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 20
                    echo "                                <li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.no-recent", array("%contenttype%" => $this->getAttribute($context["ct"], "slug", array()))));
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                        </ul>
                        <a class=\"button is-primary\" href=\"";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentlisting", array("contenttypeslug" => $this->getAttribute($context["ct"], "slug", array()))), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.overview", array("%contenttypes%" => $this->getAttribute($context["ct"], "name", array()))));
                echo "</a>
                    </div>
                </div>
            </div>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
</section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_recent_records.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  98 => 23,  95 => 22,  86 => 20,  76 => 18,  71 => 17,  66 => 15,  63 => 14,  61 => 13,  56 => 10,  51 => 9,  46 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# The next section iterates over all of the contenttypes, and prints a list
    of the five latest records of each of them. The 'magic' happens in the
    setcontent tag.. ct.slug ~ \"/latest/3\" concatenates the slug of the
    contenttype with /latest/3, so it becomes something like \"pages/latest/3\".
#}
<section class=\"section section-pages hero is-primary is-bold\">
    <div class=\"container\">
        <div class=\"columns\">
            {% for ct in config.get('contenttypes') if not ct.viewless|default(false) %}
            <div class=\"column\">
                <div class=\"card\">
                    <div class=\"content card-content\">
                        {% setcontent records = ct.slug ~ \"/latest/5\" %}

                        <h2 class=\"is-size-4\">{{ __('contenttypes.generic.recent', {'%contenttypes%': ct.name}) }}</h2>
                        <ul>
                            {% for record in records %}
                                <li><a href=\"{{ record.link }}\">{{ record.title }}</a></li>
                            {% else %}
                                <li>{{ __('contenttypes.generic.no-recent', {'%contenttype%': ct.slug}) }}</li>
                            {% endfor %}
                        </ul>
                        <a class=\"button is-primary\" href=\"{{ path('contentlisting', {'contenttypeslug': ct.slug}) }}\">{{ __('contenttypes.generic.overview',{'%contenttypes%': ct.name}) }}</a>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>", "partials/_sub_recent_records.twig", "");
    }
}
