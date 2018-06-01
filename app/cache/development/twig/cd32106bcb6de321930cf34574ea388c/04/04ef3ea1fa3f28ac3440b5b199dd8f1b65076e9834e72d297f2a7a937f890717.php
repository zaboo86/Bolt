<?php

/* @bolt/editcontent/_relations.twig */
class __TwigTemplate_398ed9553f9bc2db772eea4ab2f3aee7f868aff54cb7fb21c1fd57e6a1e8a425 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_relations.twig"));

        $tags = array("if" => 1, "for" => 17, "set" => 18);
        $filters = array("escape" => 7, "keys" => 17, "default" => 17);
        $functions = array("__" => 5, "include" => 12, "isallowed" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('escape', 'keys', 'default'),
                array('__', 'include', 'isallowed')
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
        if ( !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
            // line 2
            echo "    <hr>

    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.relationships"));
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.relationships"));
            echo "\"
            data-content=\"";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "translator", array()), "trans", array(0 => "info.relationships", 1 => array(), 2 => "infos"), "method"), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.info"));
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "relations", array())) {
            // line 12
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_relationships.twig"));
            echo "
";
        }
        // line 14
        echo "
";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "incoming_relations", array())) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "incoming_not_inv", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["incoming_contenttype"] => $context["incoming_records"]) {
                if (!twig_in_filter($context["incoming_contenttype"], twig_get_array_keys_filter((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "relations", array()), array())) : (array()))))) {
                    // line 18
                    echo "        ";
                    $context["name"] = $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans(array(0 => "contenttypes", 1 => $context["incoming_contenttype"], 2 => "name", 3 => "plural"), array("DEFAULT" => $context["incoming_contenttype"]));
                    // line 19
                    echo "
        <p>";
                    // line 20
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.record-related-to-variable", array("%CTNAME%" => ($context["name"] ?? null))));
                    echo "</p>
        <div class=\"buic-listing\" data-bolt-widget=\"buicListing\">
            <table class=\"table dashboardlisting listing\">
            ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["incoming_records"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 24
                        echo "                ";
                        $context["editable"] = $this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("edit", $context["record"]);
                        // line 25
                        echo "                ";
                        $context["listing_vars"] = array("compact" => true, "content" =>                         // line 27
$context["record"], "excerptlength" => 280, "permissions" => array("edit" => $this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("edit",                         // line 30
$context["record"]), "create" => false, "publish" => false, "delete" => false, "depublish" => false), "thumbsize" => 54);
                        // line 38
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, array(0 => "@bolt/_sub/_listing.twig"), ($context["listing_vars"] ?? null)));
                        echo "
            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "            </table>
        </div>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['incoming_contenttype'], $context['incoming_records'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 44
        echo "
";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array()) && twig_in_filter("relations", $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "groups", array())))) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_field.twig"));
            echo "
";
        }
        // line 48
        echo "
";
        // line 49
        if ( !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
            // line 50
            echo "    <hr>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_relations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 50,  178 => 49,  175 => 48,  169 => 46,  167 => 45,  164 => 44,  151 => 40,  134 => 38,  132 => 30,  131 => 27,  129 => 25,  126 => 24,  109 => 23,  103 => 20,  100 => 19,  97 => 18,  85 => 17,  83 => 16,  80 => 14,  74 => 12,  72 => 11,  69 => 10,  61 => 7,  57 => 6,  53 => 5,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not context.has.tabs %}
    <hr>

    <h3>
        {{ __('general.phrase.relationships') }}
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"{{ __('general.phrase.relationships') }}\"
            data-content=\"{{ app.translator.trans('info.relationships', {}, 'infos') }}\">{{ __('general.phrase.info') }}</span>
    </h3>
{% endif %}

{% if context.has.relations %}
    {{ include('@bolt/editcontent/_relationships.twig') }}
{% endif %}

{# Output 'incoming' relations #}
{% if context.has.incoming_relations %}
    {% for incoming_contenttype, incoming_records in context.incoming_not_inv if incoming_contenttype not in context.contenttype.relations|default([])|keys %}
        {% set name = __(['contenttypes', incoming_contenttype, 'name', 'plural'], {DEFAULT: incoming_contenttype}) %}

        <p>{{ __('general.phrase.record-related-to-variable', {'%CTNAME%': name}) }}</p>
        <div class=\"buic-listing\" data-bolt-widget=\"buicListing\">
            <table class=\"table dashboardlisting listing\">
            {% for record in incoming_records %}
                {% set editable = isallowed('edit', record) %}
                {% set listing_vars = {
                    'compact':       true,
                    'content':       record,
                    'excerptlength': 280,
                    'permissions':   {
                        'edit':      isallowed('edit', record),
                        'create':    false,
                        'publish':   false,
                        'delete':    false,
                        'depublish': false
                    },
                    'thumbsize':     54,
                } %}
                {{ include(['@bolt/_sub/_listing.twig'], listing_vars) }}
            {% endfor %}
            </table>
        </div>
    {% endfor %}
{% endif %}

{% if context.has.tabs and 'relations' in context.contenttype.groups %}
    {{ include('@bolt/editcontent/_field.twig') }}
{% endif %}

{% if not context.has.tabs %}
    <hr>
{% endif %}
", "@bolt/editcontent/_relations.twig", "");
    }
}
