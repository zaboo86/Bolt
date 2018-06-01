<?php

/* @bolt/_sub/_record_list.twig */
class __TwigTemplate_e72df8e89f6965fbd6c886ee4ef62b11137e7f98ebbc8f726a62c08332f193bb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_record_list.twig"));

        $tags = array("macro" => 1, "set" => 2, "if" => 11, "for" => 31, "from" => 74);
        $filters = array("default" => 2, "escape" => 25);
        $functions = array("include" => 12, "__" => 16, "csrf_token" => 27, "isallowed" => 64, "path" => 66);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'set', 'if', 'for', 'from'),
                array('default', 'escape'),
                array('include', '__', 'csrf_token', 'isallowed', 'path')
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getrecord_list($__contenttype__ = null, $__multiplecontent__ = null, $__permissions__ = null, $__extra_classes__ = null, $__async__ = null, $__filter__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "multiplecontent" => $__multiplecontent__,
            "permissions" => $__permissions__,
            "extra_classes" => $__extra_classes__,
            "async" => $__async__,
            "filter" => $__filter__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "record_list"));

            // line 2
            echo "    ";
            $context["async"] = ((array_key_exists("async", $context)) ? (_twig_default_filter(($context["async"] ?? null), false)) : (false));
            // line 3
            echo "    ";
            $context["lastgroup"] = "----";
            // line 4
            echo "    ";
            $context["any_deletable"] = false;
            // line 5
            echo "    ";
            $context["any_editable"] = false;
            // line 6
            echo "    ";
            $context["includes"] = array(0 => (("@bolt/custom/listing/" . $this->getAttribute(            // line 7
($context["contenttype"] ?? null), "slug", array())) . ".twig"), 1 => "@bolt/_sub/_listing.twig");
            // line 10
            echo "
    ";
            // line 11
            if ( !($context["async"] ?? null)) {
                // line 12
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_record_list_data.twig"));
                echo "
    ";
            }
            // line 14
            echo "
    ";
            // line 15
            ob_start();
            // line 16
            echo "        <button type=\"button\" data-stb-cmd=\"record:delete\" class=\"danger separator\"><i class=\"fa fa-trash\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.delete"));
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:publish\"><i class=\"fa fa-circle status-published\"></i> ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.publish"));
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:depublish\"><i class=\"fa fa-circle status-held\"></i> ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.depublish"));
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:draft\"><i class=\"fa fa-circle status-draft\"></i> ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.draft"));
            echo "</button>
    ";
            $context["selection_toolbar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
    ";
            // line 22
            if ( !($context["async"] ?? null)) {
                // line 23
                echo "        <div class=\"buic-listing\"
            data-bolt-widget=\"buicListing\"
            data-contenttype=\"";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["contenttype"] ?? null), "slug", array()), "html", null, true));
                echo "\"
            data-contenttype-name=\"";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["contenttype"] ?? null), "singular_name", array()), "html", null, true));
                echo "\"
            data-bolt_csrf_token=\"";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("bolt"), "html", null, true));
                echo "\"
        >
    ";
            }
            // line 30
            echo "        <table class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["extra_classes"] ?? null), "html", null, true));
            echo " dashboardlisting listing\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["multiplecontent"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 32
                echo "                ";
                $context["editable"] = $this->getAttribute(($context["permissions"] ?? null), "edit", array());
                // line 33
                echo "                ";
                if (($context["editable"] ?? null)) {
                    // line 34
                    echo "                    ";
                    $context["any_editable"] = true;
                    // line 35
                    echo "                ";
                }
                // line 36
                echo "                ";
                $context["deletable"] = $this->getAttribute(($context["permissions"] ?? null), "delete", array());
                // line 37
                echo "                ";
                if (($context["deletable"] ?? null)) {
                    // line 38
                    echo "                    ";
                    $context["any_deletable"] = true;
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "
                ";
                // line 41
                $context["new_group"] = ($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != ($context["lastgroup"] ?? null))));
                // line 42
                echo "
                ";
                // line 43
                $context["listing_vars"] = array("compact" => false, "content" =>                 // line 45
$context["content"], "excerptlength" => 380, "permissions" =>                 // line 47
($context["permissions"] ?? null), "thumbsize" => 80, "internal" => array("selection_toolbar" =>                 // line 50
($context["selection_toolbar"] ?? null)), "filter" =>                 // line 52
($context["filter"] ?? null));
                // line 54
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, ($context["includes"] ?? null), ($context["listing_vars"] ?? null)));
                echo "

                ";
                // line 56
                if (($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != ($context["lastgroup"] ?? null))))) {
                    // line 57
                    echo "                    ";
                    $context["lastgroup"] = $this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array());
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
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
                // line 60
                echo "                <p>
                    ";
                // line 61
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.none-available", array("%contenttypes%" => $this->getAttribute(($context["contenttype"] ?? null), "name", array()))));
                echo "
                </p>

                ";
                // line 64
                if ($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed((("contenttype:" . $this->getAttribute(($context["contenttype"] ?? null), "slug", array())) . ":create"))) {
                    // line 65
                    echo "                    <p class=\"btn-group\">
                        <a class=\"btn btn-primary\" href=\"";
                    // line 66
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute(($context["contenttype"] ?? null), "slug", array()))), "html", null, true));
                    echo "\">
                            <i class=\"fa fa-plus\"></i> ";
                    // line 67
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute(($context["contenttype"] ?? null), "singular_name", array()))));
                    echo "
                        </a>
                    </p>
                ";
                }
                // line 71
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </table>

        ";
            // line 74
            $context["__internal_477eba84731668dff07c53874052f281b98285dc2bc9e7e80baec49a815c7d4a"] = $this->loadTemplate("@bolt/_macro/_pager.twig", "@bolt/_sub/_record_list.twig", 74);
            // line 75
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_477eba84731668dff07c53874052f281b98285dc2bc9e7e80baec49a815c7d4a"]->getpager($this->getAttribute(($context["contenttype"] ?? null), "slug", array())));
            echo "
    ";
            // line 76
            if ( !($context["async"] ?? null)) {
                // line 77
                echo "        </div>
    ";
            }
            // line 79
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 79,  276 => 77,  274 => 76,  269 => 75,  267 => 74,  263 => 72,  257 => 71,  250 => 67,  246 => 66,  243 => 65,  241 => 64,  235 => 61,  232 => 60,  219 => 59,  216 => 58,  213 => 57,  211 => 56,  205 => 54,  203 => 52,  202 => 50,  201 => 47,  200 => 45,  199 => 43,  196 => 42,  194 => 41,  191 => 40,  188 => 39,  185 => 38,  182 => 37,  179 => 36,  176 => 35,  173 => 34,  170 => 33,  167 => 32,  149 => 31,  144 => 30,  138 => 27,  134 => 26,  130 => 25,  126 => 23,  124 => 22,  121 => 21,  116 => 19,  112 => 18,  108 => 17,  103 => 16,  101 => 15,  98 => 14,  92 => 12,  90 => 11,  87 => 10,  85 => 7,  83 => 6,  80 => 5,  77 => 4,  74 => 3,  71 => 2,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro record_list(contenttype, multiplecontent, permissions, extra_classes, async, filter) %}
    {% set async = async|default(false) %}
    {% set lastgroup = \"----\" %}
    {% set any_deletable = false %}
    {% set any_editable = false %}
    {% set includes = [
        '@bolt/custom/listing/' ~ contenttype.slug ~ '.twig',
        '@bolt/_sub/_listing.twig']
    %}

    {% if not async %}
        {{ include('@bolt/_sub/_record_list_data.twig') }}
    {% endif %}

    {% set selection_toolbar %}
        <button type=\"button\" data-stb-cmd=\"record:delete\" class=\"danger separator\"><i class=\"fa fa-trash\"></i> {{ __('general.phrase.delete') }}</button>
        <button type=\"button\" data-stb-cmd=\"record:publish\"><i class=\"fa fa-circle status-published\"></i> {{ __('general.phrase.publish') }}</button>
        <button type=\"button\" data-stb-cmd=\"record:depublish\"><i class=\"fa fa-circle status-held\"></i> {{ __('general.phrase.depublish') }}</button>
        <button type=\"button\" data-stb-cmd=\"record:draft\"><i class=\"fa fa-circle status-draft\"></i> {{ __('general.phrase.draft') }}</button>
    {% endset %}

    {% if not async %}
        <div class=\"buic-listing\"
            data-bolt-widget=\"buicListing\"
            data-contenttype=\"{{ contenttype.slug }}\"
            data-contenttype-name=\"{{ contenttype.singular_name }}\"
            data-bolt_csrf_token=\"{{ csrf_token('bolt') }}\"
        >
    {% endif %}
        <table class=\"{{ extra_classes }} dashboardlisting listing\">
            {% for content in multiplecontent %}
                {% set editable = permissions.edit %}
                {% if editable %}
                    {% set any_editable = true %}
                {% endif %}
                {% set deletable = permissions.delete %}
                {% if deletable %}
                    {% set any_deletable = true %}
                {% endif %}

                {% set new_group = content.group.name is defined and (loop.first or content.group.name != lastgroup) %}

                {% set listing_vars = {
                    'compact':       false,
                    'content':       content,
                    'excerptlength': 380,
                    'permissions':   permissions,
                    'thumbsize':     80,
                    'internal': {
                        'selection_toolbar': selection_toolbar
                    },
                    'filter':        filter
                } %}
                {{ include(includes, listing_vars) }}

                {% if content.group.name is defined and (loop.first or content.group.name != lastgroup) %}
                    {% set lastgroup = content.group.name %}
                {% endif %}
            {% else %}
                <p>
                    {{ __('contenttypes.generic.none-available', {'%contenttypes%': contenttype.name}) }}
                </p>

                {% if isallowed('contenttype:' ~ contenttype.slug ~ ':create') %}
                    <p class=\"btn-group\">
                        <a class=\"btn btn-primary\" href=\"{{ path('editcontent', {'contenttypeslug': contenttype.slug}) }}\">
                            <i class=\"fa fa-plus\"></i> {{ __('contenttypes.generic.new', {'%contenttype%': contenttype.singular_name}) }}
                        </a>
                    </p>
                {% endif %}
            {% endfor %}
        </table>

        {% from '@bolt/_macro/_pager.twig' import pager %}
        {{ pager(contenttype.slug) }}
    {% if not async %}
        </div>
    {% endif %}

{% endmacro %}
", "@bolt/_sub/_record_list.twig", "");
    }
}
