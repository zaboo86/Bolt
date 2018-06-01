<?php

/* partials/_sub_field_blocks.twig */
class __TwigTemplate_183a13a8c1cc8e215b9a416e92006d3656cb5f39c80eb957bc73fe309e7773f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'text_field' => array($this, 'block_text_field'),
            'markdown_field' => array($this, 'block_markdown_field'),
            'imagelist_field' => array($this, 'block_imagelist_field'),
            'common_fields' => array($this, 'block_common_fields'),
            'extended_fields' => array($this, 'block_extended_fields'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_field_blocks.twig"));

        $tags = array("block" => 2, "if" => 3, "autoescape" => 4, "for" => 22);
        $filters = array("escape" => 3, "default" => 6, "markdown" => 15, "showimage" => 45, "join" => 68);
        $functions = array("include" => 6, "template_from_string" => 6, "popup" => 24, "dump" => 88);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'autoescape', 'for'),
                array('escape', 'default', 'markdown', 'showimage', 'join'),
                array('include', 'template_from_string', 'popup', 'dump')
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
        $this->displayBlock('text_field', $context, $blocks);
        // line 10
        echo "
";
        // line 12
        $this->displayBlock('markdown_field', $context, $blocks);
        // line 18
        echo "
";
        // line 20
        $this->displayBlock('imagelist_field', $context, $blocks);
        // line 29
        echo "
";
        // line 31
        $this->displayBlock('common_fields', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        $this->displayBlock('extended_fields', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_text_field($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_field"));

        // line 3
        echo "    <div ";
        if ( !twig_test_empty(($context["key"] ?? null))) {
            echo "data-bolt-field=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
            echo "\"";
        }
        echo ">";
        // line 6
        echo "            ";
        if (((array_key_exists("allowtwig", $context)) ? (_twig_default_filter(($context["allowtwig"] ?? null), false)) : (false))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, twig_template_from_string($this->env, ($context["value"] ?? null))));
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["value"] ?? null));
        }
        // line 8
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_markdown_field($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markdown_field"));

        // line 13
        echo "    <div ";
        if ( !twig_test_empty(($context["key"] ?? null))) {
            echo "data-bolt-field=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
            echo "\"";
        }
        echo ">
        ";
        // line 15
        echo "        ";
        if (((array_key_exists("allowtwig", $context)) ? (_twig_default_filter(($context["allowtwig"] ?? null), false)) : (false))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown(twig_include($this->env, $context, twig_template_from_string($this->env, ($context["value"] ?? null)))));
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->markdown(($context["value"] ?? null)));
        }
        // line 16
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_imagelist_field($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imagelist_field"));

        // line 21
        echo "    <div class=\"imagelist columns is-multiline is-mobile\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 23
            echo "            <div class=\"imageholder column\">
                ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->popup($this->getAttribute($context["image"], "filename", array()), 320, 240));
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_common_fields($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common_fields"));

        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        if (twig_in_filter(($context["fieldtype"] ?? null), array(0 => "html", 1 => "textarea", 2 => "text"))) {
            // line 35
            echo "        ";
            $this->displayBlock("text_field", $context, $blocks);
            echo "
    ";
        }
        // line 37
        echo "
    ";
        // line 39
        echo "    ";
        if ((($context["fieldtype"] ?? null) == "markdown")) {
            // line 40
            echo "        ";
            $this->displayBlock("markdown_field", $context, $blocks);
            echo "
    ";
        }
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        if (((($context["fieldtype"] ?? null) == "image") &&  !twig_test_empty((($this->getAttribute(($context["value"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), "file", array()))) : (""))))) {
            // line 45
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->showImage(($context["value"] ?? null), 752, 400));
            echo "
    ";
        }
        // line 47
        echo "
    ";
        // line 49
        echo "    ";
        if (((($context["fieldtype"] ?? null) == "video") &&  !twig_test_empty((($this->getAttribute(($context["value"] ?? null), "responsive", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), "responsive", array()))) : (""))))) {
            // line 50
            echo "        <div class=\"flex-video ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((((($this->getAttribute(($context["value"] ?? null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), "ratio", array()), 1)) : (1)) > 1.5)) ? ("widescreen") : ("")));
            echo "\">
            ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "responsive", array()), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 54
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_extended_fields($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extended_fields"));

        // line 59
        echo "
    ";
        // line 61
        echo "    ";
        if (((($context["fieldtype"] ?? null) == "geolocation") &&  !twig_test_empty((($this->getAttribute(($context["value"] ?? null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), "latitude", array()))) : (""))))) {
            // line 62
            echo "        <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "latitude", array()), "html", null, true));
            echo ",";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "longitude", array()), "html", null, true));
            echo "&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "latitude", array()), "html", null, true));
            echo ",";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "longitude", array()), "html", null, true));
            echo "\">
    ";
        }
        // line 64
        echo "
    ";
        // line 66
        echo "    ";
        if (((($context["fieldtype"] ?? null) == "select") &&  !twig_test_empty(($context["value"] ?? null)))) {
            // line 67
            echo "        <p><strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
            echo ": </strong>
        ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true));
            echo "
        </p>
    ";
        }
        // line 71
        echo "
    ";
        // line 73
        echo "    ";
        if ((($context["fieldtype"] ?? null) == "checkbox")) {
            // line 74
            echo "        <p><strong>Checkbox ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
            echo ": </strong>
        ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((($context["value"] ?? null)) ? ("checked") : ("not checked")));
            echo "</p>
    ";
        }
        // line 77
        echo "
    ";
        // line 79
        echo "    ";
        if (((($context["fieldtype"] ?? null) == "imagelist") &&  !twig_test_empty(($context["value"] ?? null)))) {
            // line 80
            echo "        ";
            $this->displayBlock("imagelist_field", $context, $blocks);
            echo "
    ";
        }
        // line 82
        echo "
    ";
        // line 85
        echo "    ";
        if ((twig_in_filter(($context["fieldtype"] ?? null), array(0 => "filelist", 1 => "datetime", 2 => "date", 3 => "integer", 4 => "float")) &&  !twig_test_empty(($context["value"] ?? null)))) {
            // line 86
            echo "        <p><strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
            echo ": </strong>
        ";
            // line 87
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 88
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\DumpRuntime')->dump($this->env, $context, ($context["value"] ?? null)));
                echo "
        ";
            } else {
                // line 90
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
                echo "
        ";
            }
            // line 92
            echo "        </p>
    ";
        }
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_field_blocks.twig";
    }

    public function getDebugInfo()
    {
        return array (  335 => 94,  331 => 92,  325 => 90,  319 => 88,  317 => 87,  312 => 86,  309 => 85,  306 => 82,  300 => 80,  297 => 79,  294 => 77,  289 => 75,  284 => 74,  281 => 73,  278 => 71,  272 => 68,  267 => 67,  264 => 66,  261 => 64,  249 => 62,  246 => 61,  243 => 59,  237 => 58,  229 => 54,  223 => 51,  218 => 50,  215 => 49,  212 => 47,  206 => 45,  203 => 44,  200 => 42,  194 => 40,  191 => 39,  188 => 37,  182 => 35,  179 => 34,  176 => 32,  170 => 31,  162 => 27,  153 => 24,  150 => 23,  146 => 22,  143 => 21,  137 => 20,  129 => 16,  122 => 15,  113 => 13,  107 => 12,  99 => 8,  92 => 6,  84 => 3,  78 => 2,  71 => 58,  68 => 56,  66 => 31,  63 => 29,  61 => 20,  58 => 18,  56 => 12,  53 => 10,  51 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Sub-block for 'text' field such as 'text', 'textarea', or 'html' #}
{% block text_field %}
    <div {% if key is not empty %}data-bolt-field=\"{{ key }}\"{% endif %}>
        {%- autoescape false -%}
            {# If 'allowtwig' is true for this field, we'll need to parse it as Twig here. #}
            {% if allowtwig|default(false) %}{{ include(template_from_string(value)) }}{% else %}{{ value }}{% endif -%}
        {%- endautoescape -%}
    </div>
{% endblock %}

{# Sub-block for Markdown fields #}
{% block markdown_field %}
    <div {% if key is not empty %}data-bolt-field=\"{{ key }}\"{% endif %}>
        {# If 'allowtwig' is true for this field, we'll need to parse it as Twig here. #}
        {% if allowtwig|default(false) %}{{ include(template_from_string(value))|markdown }}{% else %}{{ value|markdown }}{% endif -%}
    </div>
{% endblock %}

{# Sub-block for 'imagelist' fields #}
{% block imagelist_field %}
    <div class=\"imagelist columns is-multiline is-mobile\">
        {% for image in value %}
            <div class=\"imageholder column\">
                {{ popup(image.filename, 320, 240) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{# Block for \"basic\" fields like HTML, Markdown, Textarea and Text #}
{% block common_fields %}

    {# HTML, Textarea, Text fields #}
    {% if fieldtype in ['html', 'textarea', 'text'] %}
        {{ block('text_field') }}
    {% endif %}

    {# Markdown fields #}
    {% if fieldtype == 'markdown' %}
        {{ block('markdown_field') }}
    {% endif %}

    {# Image fields #}
    {% if fieldtype == \"image\" and value.file|default is not empty %}
        {{ value|showimage(752, 400) }}
    {% endif %}

    {# Video fields #}
    {% if fieldtype == \"video\" and value.responsive|default is not empty %}
        <div class=\"flex-video {{ value.ratio|default(1) > 1.5 ? 'widescreen' }}\">
            {{ value.responsive }}
        </div>
    {% endif %}

{% endblock %}

{# Block for other field types, like Geo, Select, Checkbox and others. #}
{% block extended_fields %}

    {# Geolocation field #}
    {% if fieldtype == \"geolocation\" and value.latitude|default is not empty %}
        <img src=\"http://maps.googleapis.com/maps/api/staticmap?center={{ value.latitude }},{{ value.longitude }}&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers={{ value.latitude }},{{ value.longitude }}\">
    {% endif %}

    {# Special case for 'select' fields: if it's a multiple select, the value is an array. #}
    {% if fieldtype == \"select\" and value is not empty %}
        <p><strong>{{ key }}: </strong>
        {{ value|join(\", \") }}
        </p>
    {% endif %}

    {# Checkbox fields #}
    {% if fieldtype == \"checkbox\" %}
        <p><strong>Checkbox {{ key }}: </strong>
        {{ value ? \"checked\" : \"not checked\" }}</p>
    {% endif %}

    {# Imagelist fields #}
    {% if fieldtype == \"imagelist\" and value is not empty %}
        {{ block('imagelist_field') }}
    {% endif %}

    {# No special case defined for this type of field. We just output them, if it's
       a simple scalar, and 'dump' them otherwise. #}
    {% if fieldtype in [ 'filelist', 'datetime', 'date', 'integer', 'float' ] and value is not empty  %}
        <p><strong>{{ key }}: </strong>
        {% if value is iterable %}
            {{ dump(value) }}
        {% else %}
            {{ value }}
        {% endif %}
        </p>
    {% endif %}

{% endblock %}
", "partials/_sub_field_blocks.twig", "");
    }
}
