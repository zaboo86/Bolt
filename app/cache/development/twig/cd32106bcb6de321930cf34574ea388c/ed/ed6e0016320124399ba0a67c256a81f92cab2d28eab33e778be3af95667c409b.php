<?php

/* @bolt/editcontent/fields/_video.twig */
class __TwigTemplate_a23e9b29aecfd8e84e1105900cf21da5134be6bb2ad5defe5a198512a70de35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 110
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_video.twig", 110);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_video.twig"));

        $tags = array("set" => 3);
        $filters = array("default" => 5, "replace" => 77, "length" => 104, "escape" => 115);
        $functions = array("buid" => 18, "__" => 20, "asset" => 89, "hattr" => 125);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('default', 'replace', 'length', 'escape'),
                array('buid', '__', 'asset', 'hattr')
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
        $context["option"] = array("label" => $this->getAttribute(        // line 4
($context["field"] ?? null), "label", array()), "info" => (($this->getAttribute(        // line 5
($context["field"] ?? null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "info", array()), "info.upload.video")) : ("info.upload.video")));
        // line 10
        $context["preview_w"] = 200;
        // line 11
        $context["preview_h"] = 150;
        // line 13
        $context["video"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "get", array(0 => ($context["contentkey"] ?? null)), "method");
        // line 15
        $context["attributes"] = array("url" => array("class" => "form-control url", "id" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->buid(), "name" => (        // line 19
($context["name"] ?? null) . "[url]"), "placeholder" => ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.placeholder.url") . " …"), "type" => "url", "value" => (($this->getAttribute(        // line 22
($context["video"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "url", array()), "")) : (""))), "width" => array("class" => "form-control width", "id" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->buid(), "name" => (        // line 28
($context["name"] ?? null) . "[width]"), "type" => "number", "value" => (($this->getAttribute(        // line 30
($context["video"] ?? null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "width", array()), "")) : (""))), "height" => array("class" => "form-control height", "id" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->buid(), "name" => (        // line 36
($context["name"] ?? null) . "[height]"), "type" => "number", "value" => (($this->getAttribute(        // line 38
($context["video"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "height", array()), "")) : (""))), "hid_ratio" => array("class" => "ratio", "name" => (        // line 43
($context["name"] ?? null) . "[ratio]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 45
($context["video"] ?? null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "ratio", array()), "")) : (""))), "hid_title" => array("class" => "form-control title", "name" => (        // line 50
($context["name"] ?? null) . "[title]"), "readonly" => true, "title" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Title"), "type" => "text", "value" => (($this->getAttribute(        // line 54
($context["video"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "title", array()), "")) : (""))), "hid_authorname" => array("class" => "form-control author_name", "name" => (        // line 59
($context["name"] ?? null) . "[authorname]"), "readonly" => true, "title" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.author"), "type" => "text", "value" => (($this->getAttribute(        // line 63
($context["video"] ?? null), "authorname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "authorname", array()), "")) : (""))), "hid_authorurl" => array("class" => "authorurl", "name" => (        // line 68
($context["name"] ?? null) . "[authorurl]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 70
($context["video"] ?? null), "authorurl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "authorurl", array()), "")) : (""))), "hid_html" => array("class" => "html", "name" => (        // line 75
($context["name"] ?? null) . "[html]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 77
($context["video"] ?? null), "html", array(), "any", true, true)) ? (twig_replace_filter($this->getAttribute(($context["video"] ?? null), "html", array()), array("\"" => "'"))) : (""))), "hid_thumbnail" => array("class" => "thumbnailurl", "name" => (        // line 82
($context["name"] ?? null) . "[thumbnail]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 84
($context["video"] ?? null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "thumbnail", array()), "")) : (""))), "preview" => array("alt" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.label.preview"), "data-default-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_empty_4x3.png", "bolt"), "height" =>         // line 90
($context["preview_h"] ?? null), "src" => (($this->getAttribute(        // line 91
($context["video"] ?? null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "thumbnail", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_empty_4x3.png", "bolt"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_empty_4x3.png", "bolt"))), "width" =>         // line 92
($context["preview_w"] ?? null)), "play" => array("class" => (((($this->getAttribute(        // line 96
($context["video"] ?? null), "html", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "html", array()))) : (""))) ? ("") : ("hidden")), "type" => "button", "role" => "button"), "refresh" => array("class" => "btn btn-default refresh", "type" => "button", "disabled" => ((((twig_length_filter($this->env, (($this->getAttribute(        // line 104
($context["video"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "url", array()), "")) : (""))) <= 2) || (($this->getAttribute(($context["video"] ?? null), "html", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "html", array()))) : ("")))) ? (true) : (false))));
        // line 110
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 112
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("video");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fieldVideo");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["labelkey"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "info", array()), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("col-xs-12");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 120
        echo "    <div class=\"col-sm-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label for=\"";
        // line 123
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "url", array()), "id", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.label.url"));
        echo "</label>
                <div class=\"input-group\">
                    <input";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "url", array())));
        echo ">
                    <span class=\"input-group-btn\">
                        <button";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "refresh", array())));
        echo "><i class=\"fa fa-refresh\"></i></button>
                    </span>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-sm-2\">";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.label.size"));
        echo "</label>
            <div class=\"col-sm-10 form-inline\">
                <label for=\"";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "width", array()), "id", array()), "html", null, true));
        echo "\" class=\"sr-only\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.width"));
        echo "</label>
                <input";
        // line 137
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "width", array())));
        echo "> ×
                <label for=\"";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "height", array()), "id", array()), "html", null, true));
        echo "\" class=\"sr-only\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.height"));
        echo "</label>
                <input";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "height", array())));
        echo ">
                <label class=\"label-pixels\">";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.pixel"));
        echo "</label>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.matched-video"));
        echo "</label>
                <input";
        // line 147
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "hid_title", array())));
        echo ">
                <input";
        // line 148
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "hid_authorname", array())));
        echo ">
            </div>

            <input";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "hid_ratio", array())));
        echo ">
            <input";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "hid_authorurl", array())));
        echo ">
            <input";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "hid_html", array())));
        echo ">
            <input";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "hid_thumbnail", array())));
        echo ">
        </div>
    </div>

    <div class=\"col-sm-4\">
        <div class=\"right-on-large\">
            <label>";
        // line 160
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.video.label.preview"));
        echo "</label>
            <div class=\"imageholder\">
                <img";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "preview", array())));
        echo ">
                <button";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr($this->getAttribute(($context["attributes"] ?? null), "play", array())));
        echo "></button>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 163,  266 => 162,  261 => 160,  252 => 154,  248 => 153,  244 => 152,  240 => 151,  234 => 148,  230 => 147,  226 => 146,  217 => 140,  213 => 139,  207 => 138,  203 => 137,  197 => 136,  192 => 134,  182 => 127,  177 => 125,  170 => 123,  165 => 120,  159 => 119,  147 => 117,  135 => 116,  123 => 115,  111 => 113,  99 => 112,  92 => 110,  90 => 104,  89 => 96,  88 => 92,  87 => 91,  86 => 90,  85 => 84,  84 => 82,  83 => 77,  82 => 75,  81 => 70,  80 => 68,  79 => 63,  78 => 59,  77 => 54,  76 => 50,  75 => 45,  74 => 43,  73 => 38,  72 => 36,  71 => 30,  70 => 28,  69 => 22,  68 => 19,  67 => 15,  65 => 13,  63 => 11,  61 => 10,  59 => 5,  58 => 4,  57 => 3,  11 => 110,);
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
    label:  field.label,
    info:   field.info|default('info.upload.video'),
} %}

{#=== INIT ===========================================================================================================#}

{% set preview_w = 200 %}
{% set preview_h = 150 %}

{% set video = context.content.get(contentkey) %}

{% set attributes = {
    url: {
        class:        'form-control url',
        id:           buid(),
        name:         name ~ '[url]',
        placeholder:  __('field.video.placeholder.url') ~ ' …',
        type:         'url',
        value:        video.url|default('')
    },

    width: {
        class:      'form-control width',
        id:         buid(),
        name:       name ~ '[width]',
        type:       'number',
        value:      video.width|default('')
    },

    height: {
        class:      'form-control height',
        id:         buid(),
        name:       name ~ '[height]',
        type:       'number',
        value:      video.height|default('')
    },

    hid_ratio: {
        class:      'ratio',
        name:       name ~ '[ratio]',
        type:       'hidden',
        value:      video.ratio|default('')
    },

    hid_title: {
        class:      'form-control title',
        name:       name ~ '[title]',
        readonly:   true,
        title:      __('Title'),
        type:       'text',
        value:      video.title|default('')
    },

    hid_authorname: {
        class:      'form-control author_name',
        name:       name ~ '[authorname]',
        readonly:   true,
        title:      __('general.phrase.author'),
        type:       'text',
        value:      video.authorname|default(''),
    },

    hid_authorurl: {
        class:      'authorurl',
        name:       name ~ '[authorurl]',
        type:       'hidden',
        value:      video.authorurl|default(''),
    },

    hid_html: {
        class:      'html',
        name:       name ~ '[html]',
        type:       'hidden',
        value:      (video.html is defined ? video.html|replace({'\"': '\\''}) : '')
    },

    hid_thumbnail: {
        class:      'thumbnailurl',
        name:       name ~ '[thumbnail]',
        type:       'hidden',
        value:      video.thumbnail|default(''),
    },

    preview: {
        alt:       __('field.video.label.preview'),
        'data-default-url': asset('img/default_empty_4x3.png', 'bolt'),
        height:    preview_h,
        src:       video.thumbnail|default(asset('img/default_empty_4x3.png', 'bolt')),
        width:     preview_w,
    },

    play: {
        class:     video.html|default() ? '' : 'hidden',
        type:      'button',
        role:      'button',
    },

    refresh: {
        class:     'btn btn-default refresh',
        type:      'button',
        disabled:  video.url|default('')|length <= 2 or video.html|default() ? true : false,
    },
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'video' %}
{% block fieldset_widget 'fieldVideo' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'col-xs-12' %}

{% block fieldset_controls %}
    <div class=\"col-sm-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label for=\"{{ attributes.url.id }}\">{{ __('field.video.label.url') }}</label>
                <div class=\"input-group\">
                    <input{{ hattr(attributes.url) }}>
                    <span class=\"input-group-btn\">
                        <button{{ hattr(attributes.refresh) }}><i class=\"fa fa-refresh\"></i></button>
                    </span>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-sm-2\">{{ __('field.video.label.size') }}</label>
            <div class=\"col-sm-10 form-inline\">
                <label for=\"{{ attributes.width.id }}\" class=\"sr-only\">{{ __('field.video.width') }}</label>
                <input{{ hattr(attributes.width) }}> ×
                <label for=\"{{ attributes.height.id }}\" class=\"sr-only\">{{ __('field.video.height') }}</label>
                <input{{ hattr(attributes.height) }}>
                <label class=\"label-pixels\">{{ __('field.video.pixel') }}</label>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>{{ __('field.video.matched-video') }}</label>
                <input{{ hattr(attributes.hid_title) }}>
                <input{{ hattr(attributes.hid_authorname) }}>
            </div>

            <input{{ hattr(attributes.hid_ratio) }}>
            <input{{ hattr(attributes.hid_authorurl) }}>
            <input{{ hattr(attributes.hid_html) }}>
            <input{{ hattr(attributes.hid_thumbnail) }}>
        </div>
    </div>

    <div class=\"col-sm-4\">
        <div class=\"right-on-large\">
            <label>{{ __('field.video.label.preview') }}</label>
            <div class=\"imageholder\">
                <img{{ hattr(attributes.preview) }}>
                <button{{ hattr(attributes.play) }}></button>
            </div>
        </div>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_video.twig", "");
    }
}
