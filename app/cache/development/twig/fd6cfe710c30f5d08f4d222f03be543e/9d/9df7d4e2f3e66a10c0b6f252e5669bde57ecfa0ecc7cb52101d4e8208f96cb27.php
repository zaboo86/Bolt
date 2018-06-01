<?php

/* partials/_sub_fields.twig */
class __TwigTemplate_89ce4d86fff90330a56ad3c69d5f9d5e104dd1219368849dfa25b16ab36cc349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("partials/_sub_field_blocks.twig", "partials/_sub_fields.twig", 20);
        // line 20
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."partials/_sub_field_blocks.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'sub_fields' => array($this, 'block_sub_fields'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_fields.twig"));

        $tags = array("block" => 22, "spaceless" => 24, "set" => 27, "if" => 32, "for" => 43);
        $filters = array("default" => 32, "merge" => 33, "first" => 104);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'spaceless', 'set', 'if', 'for'),
                array('default', 'merge', 'first'),
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

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('sub_fields', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_sub_fields($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_fields"));

        // line 23
        echo "    ";
        // line 24
        ob_start();
        // line 25
        echo "        ";
        // line 27
        echo "        ";
        $context["omittedkeys"] = array(0 => "id", 1 => "slug", 2 => "datecreated", 3 => "datechanged", 4 => "datepublish", 5 => "datedepublish", 6 => "username", 7 => "status", 8 => "ownerid", 9 => "templatefields");
        // line 29
        echo "
        ";
        // line 32
        echo "        ";
        if ((twig_test_iterable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array(), "any", false, true), "fields", array(), "any", false, true), "slug", array(), "any", false, true), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array(), "any", false, true), "fields", array(), "any", false, true), "slug", array(), "any", false, true), "uses", array()), null)) : (null))) && ((array_key_exists("skip_uses", $context)) ? (_twig_default_filter(($context["skip_uses"] ?? null), true)) : (true)))) {
            // line 33
            echo "            ";
            $context["omittedkeys"] = twig_array_merge(($context["omittedkeys"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array()), "fields", array()), "slug", array()), "uses", array()));
            // line 34
            echo "        ";
        }
        // line 35
        echo "
        ";
        // line 37
        echo "        ";
        if (twig_test_iterable(((array_key_exists("exclude", $context)) ? (_twig_default_filter(($context["exclude"] ?? null))) : ("")))) {
            // line 38
            echo "            ";
            $context["omittedkeys"] = twig_array_merge(($context["omittedkeys"] ?? null), ($context["exclude"] ?? null));
            // line 39
            echo "        ";
        }
        // line 40
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "values", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (!twig_in_filter($context["key"], ($context["omittedkeys"] ?? null))) {
                // line 44
                echo "
        ";
                // line 46
                echo "        ";
                $context["allowtwig"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array(), "any", false, true), "fields", array(), "any", false, true), $context["key"], array(), "array", false, true), "allowtwig", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array(), "any", false, true), "fields", array(), "any", false, true), $context["key"], array(), "array", false, true), "allowtwig", array()), false)) : (false));
                // line 47
                echo "
        ";
                // line 50
                echo "        ";
                if ((((array_key_exists("common", $context)) ? (_twig_default_filter(($context["common"] ?? null), true)) : (true)) && !twig_in_filter($context["key"], ((array_key_exists("exclude", $context)) ? (_twig_default_filter(($context["exclude"] ?? null), array())) : (array()))))) {
                    // line 51
                    echo "
            ";
                    // line 52
                    $context["fieldtype"] = $this->getAttribute(($context["record"] ?? null), "fieldtype", array(0 => $context["key"]), "method");
                    // line 53
                    echo "            ";
                    $context["value"] = $this->getAttribute(($context["record"] ?? null), "get", array(0 => $context["key"]), "method");
                    // line 54
                    echo "            ";
                    $this->displayBlock("common_fields", $context, $blocks);
                    echo "

        ";
                }
                // line 57
                echo "
        ";
                // line 59
                echo "        ";
                if ((((array_key_exists("extended", $context)) ? (_twig_default_filter(($context["extended"] ?? null), false)) : (false)) && !twig_in_filter($context["key"], ((array_key_exists("exclude", $context)) ? (_twig_default_filter(($context["exclude"] ?? null), array())) : (array()))))) {
                    // line 60
                    echo "
            ";
                    // line 61
                    $context["fieldtype"] = $this->getAttribute(($context["record"] ?? null), "fieldtype", array(0 => $context["key"]), "method");
                    // line 62
                    echo "            ";
                    $this->displayBlock("extended_fields", $context, $blocks);
                    echo "

        ";
                }
                // line 65
                echo "
        ";
                // line 67
                echo "        ";
                if (((((array_key_exists("repeaters", $context)) ? (_twig_default_filter(($context["repeaters"] ?? null), false)) : (false)) == true) && ($this->getAttribute(($context["record"] ?? null), "fieldtype", array(0 => $context["key"]), "method") == "repeater"))) {
                    // line 68
                    echo "
            ";
                    // line 69
                    if (($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "get", array(0 => "_route"), "method") != "preview")) {
                        // line 70
                        echo "
                ";
                        // line 71
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["repeater"]) {
                            // line 72
                            echo "
                    ";
                            // line 73
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["repeater"]);
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
                            foreach ($context['_seq'] as $context["key"] => $context["repeaterfield"]) {
                                // line 74
                                echo "
                        ";
                                // line 75
                                $context["fieldtype"] = $this->getAttribute($context["repeaterfield"], "fieldtype", array(), "method");
                                // line 76
                                echo "                        ";
                                $context["value"] = $this->getAttribute($context["repeaterfield"], "value", array(), "method");
                                // line 77
                                echo "                        ";
                                $this->displayBlock("common_fields", $context, $blocks);
                                echo "
                        ";
                                // line 78
                                $this->displayBlock("extended_fields", $context, $blocks);
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
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['repeaterfield'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 81
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeater'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "
            ";
                    } else {
                        // line 84
                        echo "                ";
                        // line 88
                        echo "                <p>
                Unfortunately, Repeater fields do not work correctly with the generic
                <code>block()</code> function, when using Preview. To view these fields, please
                save the record, and view the page normally.
                </p>
            ";
                    }
                    // line 94
                    echo "        ";
                }
                // line 95
                echo "
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
    ";
        // line 99
        echo "    ";
        $context["templatefields"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "templatefields", array(), "any", false, true), "values", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["record"] ?? null), "values", array(), "any", false, true), "templatefields", array(), "any", false, true), "values", array()))) : (""));
        // line 100
        echo "    ";
        if ( !twig_test_empty(($context["templatefields"] ?? null))) {
            // line 101
            echo "
        ";
            // line 104
            echo "        ";
            $context["templatefields_field_types"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["record"] ?? null), "contenttype", array()), "templatefields", array())), "fields");
            // line 105
            echo "
        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templatefields"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (!twig_in_filter($context["key"], ($context["omittedkeys"] ?? null))) {
                    // line 107
                    echo "
            ";
                    // line 108
                    $context["fieldtype"] = $this->getAttribute($this->getAttribute(($context["templatefields_field_types"] ?? null), $context["key"]), "type");
                    // line 109
                    echo "            ";
                    $this->displayBlock("common_fields", $context, $blocks);
                    echo "
            ";
                    // line 110
                    $this->displayBlock("extended_fields", $context, $blocks);
                    echo "

        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_fields.twig";
    }

    public function getDebugInfo()
    {
        return array (  321 => 113,  308 => 110,  303 => 109,  301 => 108,  298 => 107,  287 => 106,  284 => 105,  281 => 104,  278 => 101,  275 => 100,  272 => 99,  269 => 97,  258 => 95,  255 => 94,  247 => 88,  245 => 84,  241 => 82,  235 => 81,  218 => 78,  213 => 77,  210 => 76,  208 => 75,  205 => 74,  188 => 73,  185 => 72,  181 => 71,  178 => 70,  176 => 69,  173 => 68,  170 => 67,  167 => 65,  160 => 62,  158 => 61,  155 => 60,  152 => 59,  149 => 57,  142 => 54,  139 => 53,  137 => 52,  134 => 51,  131 => 50,  128 => 47,  125 => 46,  122 => 44,  110 => 43,  107 => 40,  104 => 39,  101 => 38,  98 => 37,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  83 => 29,  80 => 27,  78 => 25,  76 => 24,  74 => 23,  62 => 22,  59 => 21,  14 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   Default output for fields.

   This file is contains the 'sub_fields' Twig block tag.

   The 'sub_fields' Twig block is split into two parts:
    - The first section initializes the variables and settings, both from the
      ContentType definitions as well as passed in variables.
    - The last section is where the actual looping is done, and the relevant
      {{ block() }} function is called, for the 'ContentType fields',
      'repeater fields' and 'template fields' in turn.

   Read the relevant section in the documentation on usage of this
   functionality: https://docs.bolt.cm/templating

   For more information on using blocks, see the Twig documentation at:
    - https://twig.sensiolabs.org/doc/1.x/tags/block.html
    - https://twig.sensiolabs.org/doc/1.x/functions/block.html
#}
{% use 'partials/_sub_field_blocks.twig' %}

{% block sub_fields %}
    {# SECTION 1: INITIALIZATION #}
    {%- spaceless %}
        {# Set up the array of fieldnames that should be iterated. We do this by looping
           over _all_ the fields, and skipping those in the 'omittedkeys' array. #}
        {% set omittedkeys = [ 'id', 'slug', 'datecreated', 'datechanged', 'datepublish',
        'datedepublish', 'username', 'status', 'ownerid', 'templatefields' ] %}

        {# Skip over the fields that are used in the slug, unless explicitly told not to,
           using the `skip_uses` parameter. #}
        {% if (record.contenttype.fields.slug.uses|default(null) is iterable) and skip_uses|default(true) %}
            {% set omittedkeys = omittedkeys|merge(record.contenttype.fields.slug.uses) %}
        {% endif %}

        {# We also skip over the fields that are explicitly excluded. #}
        {% if exclude|default is iterable %}
            {% set omittedkeys = omittedkeys|merge(exclude) %}
        {% endif %}
    {% endspaceless -%}

    {# SECTION 2: LOOPING AND ITERATION - The actual looping is done here. #}
    {% for key, value in record.values if (key not in omittedkeys) %}

        {# Is the field allowed to contain Twig functions #}
        {% set allowtwig = record.contenttype.fields[key].allowtwig|default(false) %}

        {# Fields that are considered 'common': 'html', 'markdown', 'textarea',
           'text', 'image', 'video' and 'imagelist' #}
        {% if common|default(true) and (key not in exclude|default([])) %}

            {% set fieldtype = record.fieldtype(key) %}
            {% set value = record.get(key) %}
            {{ block('common_fields') }}

        {% endif %}

        {# The rest of the built-in fieldtypes #}
        {% if extended|default(false) and (key not in exclude|default([])) %}

            {% set fieldtype = record.fieldtype(key) %}
            {{ block('extended_fields') }}

        {% endif %}

        {# Finally, the repeaters #}
        {% if repeaters|default(false) == true and record.fieldtype(key) == \"repeater\" %}

            {% if (global.request.get('_route') != \"preview\") %}

                {% for repeater in value %}

                    {% for key, repeaterfield in repeater %}

                        {% set fieldtype = repeaterfield.fieldtype() %}
                        {% set value = repeaterfield.value() %}
                        {{ block('common_fields') }}
                        {{ block('extended_fields') }}

                    {% endfor %}
                {% endfor %}

            {% else %}
                {# @deprecated
                `blocks()` does not work correctly when _previewing_ repeater fields. This will be
                fixed properly for Bolt 4, but for now we just output a notice, and prevent crashes.
                See also: https://github.com/bolt/bolt/issues/6605 #}
                <p>
                Unfortunately, Repeater fields do not work correctly with the generic
                <code>block()</code> function, when using Preview. To view these fields, please
                save the record, and view the page normally.
                </p>
            {% endif %}
        {% endif %}

    {% endfor %}

    {# We do the same for the templatefields, if set and not empty. #}
    {% set templatefields = record.values.templatefields.values|default() %}
    {% if templatefields is not empty %}

        {# Note: This needs to be expanded upon!! For better detection the 'virtual'
           contenttype for the templatefields should know about the types of fields. #}
        {% set templatefields_field_types = attribute(record.contenttype.templatefields|first, 'fields') %}

        {% for key, value in templatefields if (key not in omittedkeys) %}

            {% set fieldtype = attribute(attribute(templatefields_field_types, key), 'type')  %}
            {{ block('common_fields') }}
            {{ block('extended_fields') }}

        {% endfor %}

    {% endif %}
{% endblock sub_fields %}
", "partials/_sub_fields.twig", "");
    }
}
