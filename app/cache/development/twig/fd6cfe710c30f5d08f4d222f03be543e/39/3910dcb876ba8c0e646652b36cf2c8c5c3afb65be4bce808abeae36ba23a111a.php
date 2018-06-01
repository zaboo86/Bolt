<?php

/* index.twig */
class __TwigTemplate_b7a56386f580fad3da6b5747dbcf1b049065889723473b1431eb4345077b54bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "index.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        $tags = array("setcontent" => 13, "if" => 14, "include" => 20, "for" => 41);
        $filters = array("escape" => 16);
        $functions = array("include" => 11, "popup" => 46, "__" => 53, "path" => 93);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'if', 'include', 'for'),
                array('escape'),
                array('include', 'popup', '__', 'path')
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
<section class=\"section\">
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-two-thirds\">

                ";
        // line 11
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_fresh_install.twig"));
        echo "

                ";
        // line 13
        $context['homepage'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("homepage", array("limit" => 1, "returnsingle" => true) );
        // line 14
        echo "                ";
        if (($context["homepage"] ?? null)) {
            // line 15
            echo "                <div class=\"content\">
                    <h2 class=\"title is-size-1 is-size-3-mobile\">";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["homepage"] ?? null), "title", array()), "html", null, true));
            echo "</h2>
                    <div class=\"teaser\">";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["homepage"] ?? null), "teaser", array()), "html", null, true));
            echo "</div>
                    ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["homepage"] ?? null), "content", array()), "html", null, true));
            echo "

                    ";
            // line 20
            $this->loadTemplate("partials/_record_meta.twig", "index.twig", 20)->display(array_merge($context, array("record" => ($context["homepage"] ?? null))));
            // line 21
            echo "                </div>
                ";
        } else {
            // line 23
            echo "                    ";
            // line 24
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_no_content.twig"));
            echo "
                ";
        }
        // line 26
        echo "            </div>
            <div class=\"column\">
                ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_aside.twig"));
        echo "
            </div>
        </div>
    </div>
</section>

";
        // line 35
        echo "
<section class=\"section section-pages hero is-success is-bold\">
    <div class=\"container\">
        <h2 class=\"title\">Pages</h2>
        <div class=\"columns\">
            ";
        // line 40
        $context['pages'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("pages/latest/3", array() );
        // line 41
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 42
            echo "                <div class=\"column\">
                    <div class=\"card\">
                        <div class=\"card-image\">
                            <figure class=\"image is-3by2\">
                                ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->popup($this->getAttribute($this->getAttribute($context["page"], "values", array()), "image", array()), 480, 320));
            echo "
                            </figure>
                        </div>
                        <div class=\"card-content content\">
                            <h3><a href=\"";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "link", array(), "method"), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true));
            echo "</a></h3>
                            <p>";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "excerpt", array()), "html", null, true));
            echo "</p>
                            <a class=\"button is-primary\" href=\"";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "link", array(), "method"), "html", null, true));
            echo "\">
                                ";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.read-more"));
            echo "
                            </a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                <div class=\"column\">
                    <p>";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-content-found"));
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
    </div>
</section>

";
        // line 68
        echo "
<section class=\"section section-latest-entries\">
    <div class=\"container\">
        <h2 class=\"title\">Latest Entries</h2>
        ";
        // line 72
        $context['entries'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("entries/latest/3", array() );
        // line 73
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 74
            echo "            <article role=\"article\" class=\"media columns\">
                <div class=\"media-content column is-7\">
                    <div class=\"content\">
                        <h3><a href=\"";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["entry"], "link", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true));
            echo "</a></h3>
                        ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["entry"], "teaser", array()), "html", null, true));
            echo "

                        ";
            // line 80
            $this->loadTemplate("partials/_record_meta.twig", "index.twig", 80)->display(array_merge($context, array("extended" => true, "record" => $context["entry"])));
            // line 81
            echo "                    </div>
                </div>
                <div class=\"media-right column\">
                    <figure class=\"image\">
                        ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->popup($this->getAttribute($this->getAttribute($context["entry"], "values", array()), "image", array()), 480, 320));
            echo "
                    </figure>
                </div>
            </article>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            <p>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-content-found"));
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        <div class=\"buttons has-addons is-right\">
            <a class=\"button is-primary\" href=\"";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentlisting", array("contenttypeslug" => "entries")));
        echo "\">Read more <span class=\"is-hidden\"> Entries</span></a>
        </div>
    </div>
</section>

";
        // line 98
        $this->loadTemplate("partials/_sub_recent_records.twig", "index.twig", 98)->display($context);
        // line 99
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
        return array (  288 => 99,  286 => 98,  278 => 93,  275 => 92,  266 => 90,  248 => 85,  242 => 81,  240 => 80,  235 => 78,  229 => 77,  224 => 74,  205 => 73,  203 => 72,  197 => 68,  191 => 63,  182 => 60,  179 => 59,  168 => 53,  164 => 52,  160 => 51,  154 => 50,  147 => 46,  141 => 42,  135 => 41,  133 => 40,  126 => 35,  117 => 28,  113 => 26,  107 => 24,  105 => 23,  101 => 21,  99 => 20,  94 => 18,  90 => 17,  86 => 16,  83 => 15,  80 => 14,  78 => 13,  72 => 11,  64 => 4,  58 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %}

{% block main %}

<section class=\"section\">
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-two-thirds\">

                {# Remove this include if you don't need it anymore. #}
                {{ include('partials/_fresh_install.twig') }}

                {% setcontent homepage = \"homepage\" limit 1 returnsingle %}
                {% if homepage %}
                <div class=\"content\">
                    <h2 class=\"title is-size-1 is-size-3-mobile\">{{ homepage.title }}</h2>
                    <div class=\"teaser\">{{ homepage.teaser }}</div>
                    {{ homepage.content }}

                    {% include 'partials/_record_meta.twig' with {'record': homepage } %}
                </div>
                {% else %}
                    {# Remove this include if you don't need it anymore. #}
                    {{ include('partials/_no_content.twig') }}
                {% endif %}
            </div>
            <div class=\"column\">
                {{ include('partials/_aside.twig') }}
            </div>
        </div>
    </div>
</section>

{# Pages section #}

<section class=\"section section-pages hero is-success is-bold\">
    <div class=\"container\">
        <h2 class=\"title\">Pages</h2>
        <div class=\"columns\">
            {% setcontent pages = 'pages/latest/3' %}
            {% for page in pages %}
                <div class=\"column\">
                    <div class=\"card\">
                        <div class=\"card-image\">
                            <figure class=\"image is-3by2\">
                                {{ popup(page.values.image, 480, 320) }}
                            </figure>
                        </div>
                        <div class=\"card-content content\">
                            <h3><a href=\"{{ page.link() }}\">{{ page.title }}</a></h3>
                            <p>{{ page.excerpt }}</p>
                            <a class=\"button is-primary\" href=\"{{ page.link() }}\">
                                {{ __('general.phrase.read-more') }}
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"column\">
                    <p>{{ __(\"general.phrase.no-content-found\") }}</p>
                </div>
            {% endfor %}
        </div>
    </div>
</section>

{# Latest entries #}

<section class=\"section section-latest-entries\">
    <div class=\"container\">
        <h2 class=\"title\">Latest Entries</h2>
        {% setcontent entries = 'entries/latest/3' %}
        {% for entry in entries %}
            <article role=\"article\" class=\"media columns\">
                <div class=\"media-content column is-7\">
                    <div class=\"content\">
                        <h3><a href=\"{{ entry.link }}\">{{ entry.title }}</a></h3>
                        {{ entry.teaser }}

                        {% include 'partials/_record_meta.twig' with {'extended': true, 'record': entry} %}
                    </div>
                </div>
                <div class=\"media-right column\">
                    <figure class=\"image\">
                        {{ popup(entry.values.image, 480, 320) }}
                    </figure>
                </div>
            </article>
        {% else %}
            <p>{{ __(\"general.phrase.no-content-found\") }}</p>
        {% endfor %}
        <div class=\"buttons has-addons is-right\">
            <a class=\"button is-primary\" href=\"{{ path('contentlisting', {'contenttypeslug': 'entries'}) }}\">Read more <span class=\"is-hidden\"> Entries</span></a>
        </div>
    </div>
</section>

{% include \"partials/_sub_recent_records.twig\" %}

{% endblock main %}
", "index.twig", "");
    }
}
