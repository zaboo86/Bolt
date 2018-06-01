<?php

/* @bolt/editcontent/fields/_image.twig */
class __TwigTemplate_14b8fcce31a9189fe5c414bb8beaa81a636f4c6019d7075c4e536d4ddf8e4653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 86
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_image.twig", 86);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_image.twig"));

        $tags = array("set" => 3, "for" => 56, "if" => 59, "import" => 87);
        $filters = array("trim" => 4, "default" => 6, "join" => 28, "thumbnail" => 50, "replace" => 57, "lower" => 57, "merge" => 68, "escape" => 92);
        $functions = array("__" => 28, "path" => 31, "asset" => 48, "hattr" => 103);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if', 'import'),
                array('trim', 'default', 'join', 'thumbnail', 'replace', 'lower', 'merge', 'escape'),
                array('__', 'path', 'asset', 'hattr')
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

        // line 3
        $context["option"] = array("class" => twig_trim_filter(("form-control " . $this->getAttribute(        // line 4
($context["field"] ?? null), "class", array()))), "label" => $this->getAttribute(        // line 5
($context["field"] ?? null), "label", array()), "extensions" => (($this->getAttribute(        // line 6
($context["field"] ?? null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "extensions", array()), array())) : (array())), "attrib" => ((($this->getAttribute(        // line 7
($context["field"] ?? null), "attrib", array(), "any", true, true) && twig_test_iterable($this->getAttribute(($context["field"] ?? null), "attrib", array())))) ? ($this->getAttribute(($context["field"] ?? null), "attrib", array())) : (array(0 => (($this->getAttribute(($context["field"] ?? null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "attrib", array()), null)) : (null))))), "upload" => (($this->getAttribute(        // line 8
($context["field"] ?? null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "upload", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
($context["field"] ?? null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "info", array()), "info.upload.image")) : ("info.upload.image")));
        // line 14
        $context["preview_w"] = 200;
        // line 15
        $context["preview_h"] = 150;
        // line 18
        $context["image"] = (((twig_test_iterable($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method")) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method")))) ? ($this->getAttribute($this->getAttribute(        // line 19
($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method")) : (array("file" => $this->getAttribute($this->getAttribute(        // line 20
($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method"))));
        // line 23
        $context["hattr"] = array("path" => array("class" => ($this->getAttribute(        // line 25
($context["option"] ?? null), "class", array()) . " wide path"), "id" => ("field-" .         // line 26
($context["key"] ?? null)), "name" => (        // line 27
($context["name"] ?? null) . "[file]"), "placeholder" => ((($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 28
($context["option"] ?? null), "extensions", array()), ", ")) . " …"), "type" => "text", "value" => (($this->getAttribute(        // line 30
($context["image"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["image"] ?? null), "file", array()), "")) : ("")), "data-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file/autocomplete", array("ext" => twig_join_filter($this->getAttribute(        // line 31
($context["option"] ?? null), "extensions", array()), ",")))), "path_label" => array("for" => ("field-" .         // line 35
($context["key"] ?? null))), "upload" => array("accept" => (($this->getAttribute(        // line 39
($context["option"] ?? null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute(($context["option"] ?? null), "extensions", array()), ",."))) : ("")), "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload", array("handler" => $this->getAttribute(        // line 40
($context["option"] ?? null), "upload", array()))), "id" => ("fileupload-" .         // line 41
($context["key"] ?? null)), "name" => "files[]", "type" => "file"), "preview" => array("alt" => "Preview", "data-default-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_empty_4x3.png", "bolt"), "height" =>         // line 49
($context["preview_h"] ?? null), "src" => (( !twig_test_empty((($this->getAttribute(        // line 50
($context["image"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["image"] ?? null), "file", array()), "")) : ("")))) ? ($this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail($this->getAttribute(($context["image"] ?? null), "file", array()), ($context["preview_w"] ?? null), ($context["preview_h"] ?? null), "b")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_empty_4x3.png", "bolt"))), "width" =>         // line 51
($context["preview_w"] ?? null)));
        // line 55
        $context["attribute_fields"] = array();
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["option"] ?? null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["option"] ?? null), "attrib", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
            // line 57
            $context["aid"] = twig_replace_filter(twig_lower_filter($this->env, $context["attrib"]), array("alt text" => "alt"));
            // line 59
            if (twig_in_filter(($context["aid"] ?? null), array(0 => "title", 1 => "alt"))) {
                // line 60
                if ((($context["aid"] ?? null) == "title")) {
                    // line 61
                    $context["atitle"] = $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Title");
                } elseif ((                // line 62
($context["aid"] ?? null) == "alt")) {
                    // line 63
                    $context["atitle"] = $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.image.label.alt");
                }
                // line 66
                $context["uid"] = ((($context["key"] ?? null) . "-") . ($context["aid"] ?? null));
                // line 68
                $context["attribute_fields"] = twig_array_merge(($context["attribute_fields"] ?? null), array(0 => array("title" =>                 // line 69
($context["atitle"] ?? null), "label" => array("for" =>                 // line 71
($context["uid"] ?? null)), "input" => array("class" => "form-control", "id" =>                 // line 75
($context["uid"] ?? null), "name" => (((                // line 76
($context["name"] ?? null) . "[") . ($context["aid"] ?? null)) . "]"), "type" => "text", "value" => (($this->getAttribute(                // line 78
($context["image"] ?? null), ($context["aid"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["image"] ?? null), ($context["aid"] ?? null), array(), "array"), "")) : (""))))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/fields/_image.twig", 87);
        // line 86
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("image");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldImage");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["labelkey"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "info", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-xs-12 control-label");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 97
        echo "    <div class=\"col-xs-12 elm-dropzone\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                ";
        // line 101
        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <label";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["hattr"] ?? null), "path_label", array())));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.path-image-file"));
        echo "</label><input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["hattr"] ?? null), "path", array())));
        echo ">
                    </div>
                </div>

                ";
        // line 108
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["afield"]) {
            // line 109
            echo "                    <div class=\"form-group\">
                        <div class=\"col-sm-2\">
                            <label";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute($context["afield"], "label", array())));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["afield"], "title", array()), "html", null, true));
            echo "</label>
                        </div>
                        <div class=\"col-sm-10\">
                            <input";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute($context["afield"], "input", array())));
            echo ">
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['afield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                ";
        // line 120
        echo "                <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>

                ";
        // line 123
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getupload_buttons("image", $this->getAttribute(($context["hattr"] ?? null), "upload", array()), $this->getAttribute(($context["option"] ?? null), "upload", array()), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "can", array()), "upload", array()), false));
        echo "
            </div>

            ";
        // line 127
        echo "            <div class=\"col-xs-4\">
                <div class=\"right-on-large\">
                    <label>";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.preview"));
        echo "</label>
                    <div class=\"content-preview imageholder\">
                        <img";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["hattr"] ?? null), "preview", array())));
        echo ">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 131,  261 => 129,  257 => 127,  250 => 123,  246 => 120,  243 => 118,  233 => 114,  225 => 111,  221 => 109,  216 => 108,  205 => 103,  201 => 101,  196 => 97,  190 => 96,  178 => 94,  166 => 93,  154 => 92,  142 => 90,  130 => 89,  123 => 86,  121 => 87,  114 => 78,  113 => 76,  112 => 75,  111 => 71,  110 => 69,  109 => 68,  107 => 66,  104 => 63,  102 => 62,  100 => 61,  98 => 60,  96 => 59,  94 => 57,  90 => 56,  88 => 55,  86 => 51,  85 => 50,  84 => 49,  83 => 41,  82 => 40,  81 => 39,  80 => 35,  79 => 31,  78 => 30,  77 => 28,  76 => 27,  75 => 26,  74 => 25,  73 => 23,  71 => 20,  70 => 19,  69 => 18,  67 => 15,  65 => 14,  63 => 9,  62 => 8,  61 => 7,  60 => 6,  59 => 5,  58 => 4,  57 => 3,  11 => 86,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#=== OPTIONS ========================================================================================================#}

{% set option = {
    class:       ('form-control ' ~ field.class)|trim,
    label:       field.label,
    extensions:  field.extensions|default([]),
    attrib:      (field.attrib is defined and field.attrib is iterable) ? field.attrib : [ field.attrib|default(null) ],
    upload:      field.upload|default(''),
    info:        field.info|default('info.upload.image')
} %}

{#=== INIT ===========================================================================================================#}

{% set preview_w = 200 %}
{% set preview_h = 150 %}

{# Convert from old stored image format that is used until re-saved #}
{% set image = (context.content.get(contentkey) is iterable) and (context.content.get(contentkey) is not empty)
           ? context.content.get(contentkey)
           : {'file': context.content.get(contentkey)}
%}

{% set hattr = {
    path: {
        'class':        option.class ~ ' wide path',
        'id':           'field-' ~ key,
        'name':         name ~ '[file]',
        'placeholder':  __('field.general.allowed-filetypes') ~ ' ' ~ option.extensions|join(', ') ~ ' …',
        'type':         'text',
        'value':        image.file|default(''),
        'data-autocomplete-url': path('file/autocomplete', {'ext': option.extensions|join(',')})
    },

    path_label: {
        'for':          'field-' ~ key,
    },

    upload: {
        'accept':       option.extensions ? '.' ~ option.extensions|join(',.') : '',
        'data-url':     path('upload', { 'handler': option.upload }),
        'id':           'fileupload-' ~ key,
        'name':         'files[]',
        'type':         'file',
    },

    preview: {
        'alt':          'Preview',
        'data-default-url': asset('img/default_empty_4x3.png', 'bolt'),
        'height':       preview_h,
        'src':          image.file|default('') is not empty ? image.file|thumbnail(preview_w, preview_h, 'b') : asset('img/default_empty_4x3.png', 'bolt'),
        'width':        preview_w,
    },
} %}

{% set attribute_fields = [] %}
{% for attrib in option.attrib|default([]) %}
    {% set aid = attrib|lower|replace({'alt text': 'alt'}) %}

    {% if aid in ['title', 'alt'] %}
        {% if aid == 'title' %}
            {% set atitle = __('Title') %}
        {% elseif aid == 'alt' %}
            {% set atitle = __('field.image.label.alt') %}
        {% endif %}

        {% set uid = key ~ '-' ~ aid %}

        {% set attribute_fields = attribute_fields|merge([{
            title: atitle,
            label: {
                for:    uid
            },
            input: {
                class:  'form-control',
                id:     uid,
                name:   name ~ '[' ~ aid ~ ']',
                type:   'text',
                value:  image[aid]|default(''),
            }
        }]) %}
    {% endif %}
{% endfor %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}
{% import '@bolt/_macro/_macro.twig' as macro %}

{% block fieldset_type 'image' %}
{% block fieldset_widget 'fieldImage' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'col-xs-12 control-label' %}

{% block fieldset_controls %}
    <div class=\"col-xs-12 elm-dropzone\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                {# Path #}
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <label{{ hattr(hattr.path_label) }}>{{ __('general.phrase.path-image-file') }}</label><input{{ hattr(hattr.path) }}>
                    </div>
                </div>

                {# Attribute fields #}
                {% for afield in attribute_fields %}
                    <div class=\"form-group\">
                        <div class=\"col-sm-2\">
                            <label{{ hattr(afield.label) }}>{{ afield.title }}</label>
                        </div>
                        <div class=\"col-sm-10\">
                            <input{{ hattr(afield.input) }}>
                        </div>
                    </div>
                {% endfor %}

                {# Progress bar #}
                <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>

                {# Upload buttons #}
                {{ macro.upload_buttons('image', hattr.upload, option.upload, context.can.upload, false) }}
            </div>

            {# Preview #}
            <div class=\"col-xs-4\">
                <div class=\"right-on-large\">
                    <label>{{ __('general.phrase.preview') }}</label>
                    <div class=\"content-preview imageholder\">
                        <img{{ hattr(hattr.preview) }}>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_image.twig", "");
    }
}
