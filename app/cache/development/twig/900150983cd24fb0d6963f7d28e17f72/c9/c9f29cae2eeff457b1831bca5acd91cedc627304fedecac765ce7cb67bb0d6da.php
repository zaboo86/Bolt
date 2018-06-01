<?php

/* @bolt/editcontent/data/_uploads.twig */
class __TwigTemplate_be5c2708fcf8ca24ac9ca80a176688c63ab32d89d43369f7275bd9d018b5766e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/data/_uploads.twig"));

        $tags = array("set" => 3);
        $filters = array("escape" => 9, "preg_replace" => 9, "trim" => 9);
        $functions = array("data" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('escape', 'preg_replace', 'trim'),
                array('data')
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
        echo "
";
        // line 3
        $context["template_upload_error"] = ('' === $tmp = "    <p>There was an error uploading the file. Make sure the file is not corrupt,
    and that the upload-folder is writable.</p>
    <p>Error message:<br><i>%ERROR%<i></p>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.uploads.template.error", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["template_upload_error"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "

";
        // line 12
        echo "
";
        // line 13
        $context["template_upload_too_large"] = ('' === $tmp = "    <p>File is too large:</p>
    <table>
        <tr><th>Name: </th><td>%FILENAME%</td></tr>
        <tr><th>Size: </th><td>%FILESIZE%</td></tr>
        <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.uploads.template.large-file", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["template_upload_too_large"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "

";
        // line 25
        echo "
";
        // line 26
        $context["template_upload_wrong_type"] = ('' === $tmp = "    <p>File type not allowed:</p>
    <table>
        <tr><th>Name:</th><td>%FILENAME%</td></tr>
        <tr><th>Type:</th><td>%FILETYPE%</td></tr>
        <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("field.uploads.template.wrong-type", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["template_upload_wrong_type"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/data/_uploads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  92 => 34,  84 => 26,  81 => 25,  76 => 22,  73 => 21,  65 => 13,  62 => 12,  57 => 9,  54 => 8,  49 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{### Template: Upload errror ###}

{% set template_upload_error %}
    <p>There was an error uploading the file. Make sure the file is not corrupt,
    and that the upload-folder is writable.</p>
    <p>Error message:<br><i>%ERROR%<i></p>
{% endset %}

{{ data('field.uploads.template.error', template_upload_error|trim|preg_replace('/>\\\\s+</', '><')) }}

{### Template: Filesize too large ###}

{% set template_upload_too_large %}
    <p>File is too large:</p>
    <table>
        <tr><th>Name: </th><td>%FILENAME%</td></tr>
        <tr><th>Size: </th><td>%FILESIZE%</td></tr>
        <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>
    </table>
{% endset %}

{{ data('field.uploads.template.large-file', template_upload_too_large|trim|preg_replace('/>\\\\s+</', '><')) }}

{### Template: File has wrong type ###}

{% set template_upload_wrong_type %}
    <p>File type not allowed:</p>
    <table>
        <tr><th>Name:</th><td>%FILENAME%</td></tr>
        <tr><th>Type:</th><td>%FILETYPE%</td></tr>
        <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>
    </table>
{% endset %}

{{ data('field.uploads.template.wrong-type', template_upload_wrong_type|trim|preg_replace('/>\\\\s+</', '><')) }}
", "@bolt/editcontent/data/_uploads.twig", "");
    }
}
