<?php

/* @bolt/_buic/_select.twig */
class __TwigTemplate_5b86be0dcc7ae80a1976e3314b4f7b2a5e206dc64e43159423bf324257e627e5 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_select.twig"));

        $tags = array("macro" => 23, "spaceless" => 24, "set" => 25, "if" => 29, "for" => 33);
        $filters = array("default" => 25, "merge" => 43, "escape" => 81, "striptags" => 87);
        $functions = array("hclass" => 67, "hattr" => 70, "__" => 109);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'spaceless', 'set', 'if', 'for'),
                array('default', 'merge', 'escape', 'striptags'),
                array('hclass', 'hattr', '__')
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

    // line 23
    public function getbuic_select($__opt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_select"));

            // line 24
            echo "    ";
            ob_start();
            // line 25
            echo "        ";
            $context["options"] = (($this->getAttribute(($context["opt"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "options", array()), array())) : (array()));
            // line 26
            echo "        ";
            $context["multiple"] = (($this->getAttribute(($context["opt"] ?? null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "multiple", array()), false)) : (false));
            // line 27
            echo "
        ";
            // line 29
            echo "        ";
            if ( !($context["multiple"] ?? null)) {
                // line 30
                echo "            ";
                $context["has_empty_val"] = false;
                // line 31
                echo "            ";
                $context["has_selected_val"] = false;
                // line 32
                echo "
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 34
                    echo "                ";
                    if (($this->getAttribute($context["option"], "value", array()) == "")) {
                        // line 35
                        echo "                    ";
                        $context["has_empty_val"] = true;
                        // line 36
                        echo "                ";
                    }
                    // line 37
                    echo "                ";
                    if ($this->getAttribute($context["option"], "selected", array())) {
                        // line 38
                        echo "                    ";
                        $context["has_selected_val"] = true;
                        // line 39
                        echo "                ";
                    }
                    // line 40
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "
            ";
                // line 42
                if ( !($context["has_empty_val"] ?? null)) {
                    // line 43
                    echo "                ";
                    $context["options"] = twig_array_merge(array(0 => array("value" => "", "text" => "", "selected" =>  !($context["has_selected_val"] ?? null))), ($context["options"] ?? null));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "
        ";
            // line 47
            $context["conf"] = array("all" => (($this->getAttribute(            // line 48
($context["opt"] ?? null), "all", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "all", array()), false)) : (false)), "class" => (($this->getAttribute(            // line 49
($context["opt"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "class", array()))) : ("")), "clear" => (($this->getAttribute(            // line 50
($context["opt"] ?? null), "clear", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "clear", array()), false)) : (false)), "disabled" => (($this->getAttribute(            // line 51
($context["opt"] ?? null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "disabled", array()), false)) : (false)), "id" => (($this->getAttribute(            // line 52
($context["opt"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "id", array()), (($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array"), "")) : ("")))) : ((($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array"), "")) : ("")))), "multiple" =>             // line 53
($context["multiple"] ?? null), "name" => (($this->getAttribute(            // line 54
($context["opt"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name", array()), (($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array"), "")) : ("")))) : ((($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name+id", array(), "array"), "")) : ("")))), "options" =>             // line 55
($context["options"] ?? null), "required" => (($this->getAttribute(            // line 56
($context["opt"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "required", array()), false)) : (false)));
            // line 58
            echo "
        ";
            // line 59
            $context["attributes"] = array("disabled" => $this->getAttribute(            // line 60
($context["conf"] ?? null), "disabled", array()), "id" => $this->getAttribute(            // line 61
($context["conf"] ?? null), "id", array()), "multiple" => $this->getAttribute(            // line 62
($context["conf"] ?? null), "multiple", array()), "name" => $this->getAttribute(            // line 63
($context["conf"] ?? null), "name", array()), "required" => $this->getAttribute(            // line 64
($context["conf"] ?? null), "required", array()));
            // line 66
            echo "
        <div";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hclass(array(0 => "buic-select", 1 => $this->getAttribute(($context["conf"] ?? null), "class", array()))));
            echo " data-bolt-widget=\"buicSelect\">
            <div>
                <div>
                    <select";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr(($context["attributes"] ?? null)));
            echo ">
                        ";
            // line 71
            $context["last_optgroup"] = false;
            // line 72
            echo "
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["conf"] ?? null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 74
                echo "                            ";
                // line 75
                echo "                            ";
                $context["optgroup"] = (($this->getAttribute($context["option"], "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "group", array()), false)) : (false));
                // line 76
                echo "                            ";
                if ((($context["optgroup"] ?? null) != ($context["last_optgroup"] ?? null))) {
                    // line 77
                    echo "                                ";
                    if ((($context["last_optgroup"] ?? null) != false)) {
                        // line 78
                        echo "                                    </optgroup>
                                ";
                    }
                    // line 80
                    echo "                                ";
                    if ((($context["optgroup"] ?? null) != false)) {
                        // line 81
                        echo "                                    <optgroup label=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["optgroup"] ?? null), "html", null, true));
                        echo "\">
                                ";
                    }
                    // line 83
                    echo "                                ";
                    $context["last_optgroup"] = ($context["optgroup"] ?? null);
                    // line 84
                    echo "                            ";
                }
                // line 85
                echo "
                            ";
                // line 87
                echo "                            ";
                $context["opttext"] = strip_tags((($this->getAttribute($context["option"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "text", array()), $this->getAttribute($context["option"], "value", array()))) : ($this->getAttribute($context["option"], "value", array()))));
                // line 88
                echo "                            ";
                // line 89
                echo "                            ";
                $context["optattr"] = array("value!" => $this->getAttribute(                // line 90
$context["option"], "value", array()), "selected" => (($this->getAttribute(                // line 91
$context["option"], "selected", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "selected", array()), false)) : (false)), "disabled" => (($this->getAttribute(                // line 92
$context["option"], "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "disabled", array()), false)) : (false)), "label" => (((($this->getAttribute(                // line 93
$context["option"], "value", array()) == "") && (($context["opttext"] ?? null) == ""))) ? ("–") : (false)));
                // line 95
                echo "                            <option";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr(($context["optattr"] ?? null)));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["opttext"] ?? null), "html", null, true));
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
                        ";
            // line 99
            echo "                        ";
            if ((($context["last_optgroup"] ?? null) != false)) {
                // line 100
                echo "                            </optgroup>
                        ";
            }
            // line 102
            echo "
                    </select>
                </div>
                ";
            // line 105
            if (($this->getAttribute(($context["conf"] ?? null), "clear", array()) || $this->getAttribute(($context["conf"] ?? null), "all", array()))) {
                // line 106
                echo "                    <div>
                        ";
                // line 107
                if ($this->getAttribute(($context["conf"] ?? null), "clear", array())) {
                    // line 108
                    echo "                            <button type=\"button\" class=\"btn select-none\">
                                <span class=\"sr-only\">";
                    // line 109
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.select-none"));
                    echo "</span>
                            </button>
                        ";
                }
                // line 112
                echo "                        ";
                if ($this->getAttribute(($context["conf"] ?? null), "all", array())) {
                    // line 113
                    echo "                            <button type=\"button\" class=\"btn select-all\">
                                <span class=\"sr-only\">";
                    // line 114
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.select-all"));
                    echo "</span>
                            </button>
                        ";
                }
                // line 117
                echo "                    </div>
                ";
            }
            // line 119
            echo "            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
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
        return "@bolt/_buic/_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 119,  277 => 117,  271 => 114,  268 => 113,  265 => 112,  259 => 109,  256 => 108,  254 => 107,  251 => 106,  249 => 105,  244 => 102,  240 => 100,  237 => 99,  234 => 97,  223 => 95,  221 => 93,  220 => 92,  219 => 91,  218 => 90,  216 => 89,  214 => 88,  211 => 87,  208 => 85,  205 => 84,  202 => 83,  196 => 81,  193 => 80,  189 => 78,  186 => 77,  183 => 76,  180 => 75,  178 => 74,  174 => 73,  171 => 72,  169 => 71,  165 => 70,  159 => 67,  156 => 66,  154 => 64,  153 => 63,  152 => 62,  151 => 61,  150 => 60,  149 => 59,  146 => 58,  144 => 56,  143 => 55,  142 => 54,  141 => 53,  140 => 52,  139 => 51,  138 => 50,  137 => 49,  136 => 48,  135 => 47,  132 => 46,  129 => 45,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  112 => 40,  109 => 39,  106 => 38,  103 => 37,  100 => 36,  97 => 35,  94 => 34,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  78 => 29,  75 => 27,  72 => 26,  69 => 25,  66 => 24,  51 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Renders a select component.
 #
 # Options:
 #    all         false      Add \"select all\" button.
 #    class       ''         Classname(s) added to the component container.
 #    clear       false      Add \"clear\" button.
 #    disabled    false      Input is disabled.
 #    id          ''         Id of the checkbox.
 #    multiple    false      Multiple selections mode.
 #    name        required   Name of the checkbox.
 #    options     []         Array of select options, see below.
 #    required    false      Input is required.
 #
 #    options:     Array of {value: …, text|html…, group: …, selected: …}.
 #    - value:     option value, required
 #    - text:      unescaped hatml for option label, if not set <value> is used.
 #    - group:     Group title or false or not set.
 #    - selected:  Boolean, not set is false.
 #
 # @param array opt Options defining the component
 #}
{% macro buic_select(opt) %}
    {% spaceless %}
        {% set options = opt.options|default([]) %}
        {% set multiple = opt.multiple|default(false) %}

        {# Add an empty option for non multiple selects if not already there #}
        {% if not multiple %}
            {% set has_empty_val = false %}
            {% set has_selected_val = false %}

            {% for option in options %}
                {% if option.value == '' %}
                    {% set has_empty_val = true %}
                {% endif %}
                {% if option.selected %}
                    {% set has_selected_val = true %}
                {% endif %}
            {% endfor %}

            {% if not has_empty_val %}
                {% set options = [{value: '', text: '', selected: not has_selected_val}]|merge(options) %}
            {% endif %}
        {% endif %}

        {% set conf = {
            'all':       opt.all|default(false),
            'class':     opt.class|default(),
            'clear':     opt.clear|default(false),
            'disabled':  opt.disabled|default(false),
            'id':        opt.id|default(opt['name+id']|default('')),
            'multiple':  multiple,
            'name':      opt.name|default(opt['name+id']|default('')),
            'options':   options,
            'required':  opt.required|default(false),
        } %}

        {% set attributes = {
            'disabled':     conf.disabled,
            'id':           conf.id,
            'multiple':     conf.multiple,
            'name':         conf.name,
            'required':     conf.required,
        } %}

        <div{{ hclass(['buic-select', conf.class]) }} data-bolt-widget=\"buicSelect\">
            <div>
                <div>
                    <select{{ hattr(attributes) }}>
                        {% set last_optgroup = false %}

                        {% for option in conf.options %}
                            {# optgroup #}
                            {% set optgroup = option.group|default(false) %}
                            {% if optgroup != last_optgroup %}
                                {% if last_optgroup != false %}
                                    </optgroup>
                                {% endif %}
                                {% if optgroup != false %}
                                    <optgroup label=\"{{ optgroup }}\">
                                {% endif %}
                                {% set last_optgroup = optgroup %}
                            {% endif %}

                            {# option #}
                            {% set opttext = option.text|default(option.value)|striptags %}
                            {# for details on why 'disabled' is in here, see https://github.com/bolt/bolt/pull/6590 #}
                            {% set optattr = {
                                'value!':   option.value,
                                'selected': option.selected|default(false),
                                'disabled': option.disabled|default(false),
                                'label':    option.value == '' and opttext == '' ? '–' : false,
                            } %}
                            <option{{ hattr(optattr) }}>{{ opttext }}</option>
                        {% endfor %}

                        {# Close open optgroup #}
                        {% if last_optgroup != false %}
                            </optgroup>
                        {% endif %}

                    </select>
                </div>
                {% if conf.clear or conf.all %}
                    <div>
                        {% if conf.clear %}
                            <button type=\"button\" class=\"btn select-none\">
                                <span class=\"sr-only\">{{ __('general.phrase.select-none') }}</span>
                            </button>
                        {% endif %}
                        {% if conf.all %}
                            <button type=\"button\" class=\"btn select-all\">
                                <span class=\"sr-only\">{{ __('general.phrase.select-all') }}</span>
                            </button>
                        {% endif %}
                    </div>
                {% endif %}
            </div>
        </div>
    {% endspaceless %}
{% endmacro %}
", "@bolt/_buic/_select.twig", "");
    }
}
