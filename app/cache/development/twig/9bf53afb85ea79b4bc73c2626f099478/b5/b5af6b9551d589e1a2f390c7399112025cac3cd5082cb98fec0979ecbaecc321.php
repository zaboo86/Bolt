<?php

/* @bolt/extend/_package.twig */
class __TwigTemplate_97020a6051737893fb0ebe9ad045c4fa7afd4cbf68536db8dc9558f5dda6e70b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_package.twig"));

        $tags = array("set" => 1);
        $filters = array("escape" => 192, "trim" => 192, "preg_replace" => 193);
        $functions = array("__" => 2, "data" => 192);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('escape', 'trim', 'preg_replace'),
                array('__', 'data')
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
        ob_start();
        // line 2
        echo "    <div class=\"ext-list\"><strong class=\"no-results\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-bolt-extensions-installed"));
        echo "</strong></div>
";
        $context["package_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
";
        // line 5
        $context["package_item"] = ('' === $tmp = "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <em class=\"%TYPE%\" title=\"%TYPE%\">%TITLE%%STATUS%%ENABLED%</em>
            <div><em>%VERSION%</em><small>%NAME%</small></div>
        </div>

        <div class=\"panel-body\">
            %DESCRIPTION%
            %KEYWORDS%
            %AUTHORS%
            %CONSTRAINT%
        </div>

        <div class=\"panel-footer\">
            %DETAILS%
            %MANAGE%
        </div>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
";
        // line 26
        $context["package_description"] = ('' === $tmp = "    <div class=\"description\">%DESCRIPTION%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        $context["package_author"] = ('' === $tmp = "    %AUTHOR%
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
";
        // line 34
        $context["package_authors"] = ('' === $tmp = "    <div class=\"author\">%AUTHORS%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        $context["package_keyword"] = ('' === $tmp = "    <span class=\"tag label label-default\">%KEYWORD%</span>&nbsp;
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
";
        // line 42
        $context["package_keywords"] = ('' === $tmp = "    <div class=\"tags\">%KEYWORDS%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
";
        // line 49
        ob_start();
        // line 50
        echo "    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.manage"));
        echo "
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-versions"));
        echo "
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-marketplace"));
        echo "
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-repository"));
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" data-request=\"package-depends\" data-toggle=\"modal\" data-target=\"#installModal\" data-needle=\"%NAME%\" data-constraint=\"%VERSION%\">
                    <i class=\"fa fa-group fa-fw\"></i> ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.package-dependencies"));
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-uninstall"));
        echo "
                </a>
            </li>
        </ul>
    </div>
";
        $context["package_manage_dropdown_installed"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
";
        // line 91
        ob_start();
        // line 92
        echo "    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> ";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.manage"));
        echo "
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> ";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-versions"));
        echo "
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-marketplace"));
        echo "
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> ";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-repository"));
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-uninstall"));
        echo "
                </a>
            </li>
        </ul>
    </div>
";
        $context["package_manage_dropdown_uninstalled"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo "


";
        // line 130
        $context["package_left_buttons"] = ('' === $tmp = "    <div class=\"pull-left\">
        %README%
        %THEME%
        %CONFIG%
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 137
        echo "
";
        // line 138
        ob_start();
        // line 139
        echo "    <a data-request=\"package-readme\" data-readme=\"%README%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-quote-right fa-fw\"></i> ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-readme"));
        echo "
    </a>
";
        $context["package_readme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 143
        echo "
";
        // line 144
        ob_start();
        // line 145
        echo "    <a data-request=\"package-copy\" data-theme=\"%NAME%\" class=\"btn btn-sm btn-silent-danger\">
        <i class=\"fa fa-copy fa-fw\"></i> ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.copy-to-theme-folder"));
        echo "
    </a>
";
        $context["package_theme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 149
        echo "
";
        // line 150
        ob_start();
        // line 151
        echo "    <a href=\"%CONFIG%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.link-config"));
        echo "
    </a>
";
        $context["package_config_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 155
        echo "
";
        // line 156
        ob_start();
        // line 157
        echo "    <tr>
        <td>%NAME%</td>
        <td>%VERSION%</td>
        <td><span class=\"label label-default-%CLASS%\">%BUILDSTATUS%</span></td>
        <td>
            <div class=\"btn-group\"><a href=\"#\" data-request=\"install-package\" class=\"btn btn-primary btn-sm\" data-package=\"%NAME%\" data-version=\"%VERSION%\">
            <i class=\"icon-gears\"></i> ";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.install-this-version"));
        echo "</a></div>
        </td>
    </tr>
";
        $context["package_versions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 167
        echo "
";
        // line 168
        ob_start();
        // line 169
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-warning\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.install-package"));
        echo "</a></td>
    </tr>
";
        $context["package_install_new"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 175
        echo "
";
        // line 176
        ob_start();
        // line 177
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-tertiary\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.update-package"));
        echo "</a></td>
    </tr>
";
        $context["package_install_update"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 183
        echo "
";
        // line 184
        $context["package_error"] = ('' === $tmp = "    <div id=\"extension-error\">
        <h3>%ERROR_TYPE%</h3>
        <code>%ERROR_MESSAGE%</code>
        <p>%ERROR_LOCATION%</p>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 191
        echo "
";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.empty", twig_trim_filter(($context["package_empty"] ?? null))), "html", null, true));
        echo "
";
        // line 193
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.item", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_item"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 194
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.description", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_description"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 195
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.versions", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_versions"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 196
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.author", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_author"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 197
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.authors", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_authors"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 198
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.keyword", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_keyword"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 199
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.keywords", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_keywords"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "

";
        // line 201
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.manage_dropdown_installed", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_manage_dropdown_installed"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 202
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.manage_dropdown_uninstalled", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_manage_dropdown_uninstalled"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 203
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.left_buttons", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_left_buttons"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 204
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.theme_button", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_theme_button"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 205
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.config_button", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_config_button"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 206
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.readme_button", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_readme_button"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "

";
        // line 208
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.install_new", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_install_new"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.install_update", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_install_update"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        // line 210
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.packages.error", $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->pregReplace(twig_trim_filter(($context["package_error"] ?? null)), "/>\\s+</", "><")), "html", null, true));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_package.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 210,  404 => 209,  400 => 208,  395 => 206,  391 => 205,  387 => 204,  383 => 203,  379 => 202,  375 => 201,  370 => 199,  366 => 198,  362 => 197,  358 => 196,  354 => 195,  350 => 194,  346 => 193,  342 => 192,  339 => 191,  332 => 184,  329 => 183,  323 => 180,  318 => 177,  316 => 176,  313 => 175,  307 => 172,  302 => 169,  300 => 168,  297 => 167,  290 => 163,  282 => 157,  280 => 156,  277 => 155,  271 => 152,  268 => 151,  266 => 150,  263 => 149,  257 => 146,  254 => 145,  252 => 144,  249 => 143,  243 => 140,  240 => 139,  238 => 138,  235 => 137,  228 => 130,  223 => 124,  214 => 118,  205 => 112,  197 => 107,  189 => 102,  178 => 94,  174 => 92,  172 => 91,  169 => 87,  160 => 81,  151 => 75,  143 => 70,  135 => 65,  127 => 60,  116 => 52,  112 => 50,  110 => 49,  107 => 45,  104 => 42,  101 => 41,  98 => 38,  95 => 37,  92 => 34,  89 => 33,  86 => 30,  83 => 29,  80 => 26,  77 => 25,  57 => 5,  54 => 4,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set package_empty %}
    <div class=\"ext-list\"><strong class=\"no-results\">{{ __('page.extend.message.no-bolt-extensions-installed') }}</strong></div>
{% endset %}

{% set package_item %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <em class=\"%TYPE%\" title=\"%TYPE%\">%TITLE%%STATUS%%ENABLED%</em>
            <div><em>%VERSION%</em><small>%NAME%</small></div>
        </div>

        <div class=\"panel-body\">
            %DESCRIPTION%
            %KEYWORDS%
            %AUTHORS%
            %CONSTRAINT%
        </div>

        <div class=\"panel-footer\">
            %DETAILS%
            %MANAGE%
        </div>
    </div>
{% endset %}

{% set package_description %}
    <div class=\"description\">%DESCRIPTION%</div>
{% endset %}

{% set package_author %}
    %AUTHOR%
{% endset %}

{% set package_authors %}
    <div class=\"author\">%AUTHORS%</div>
{% endset %}

{% set package_keyword %}
    <span class=\"tag label label-default\">%KEYWORD%</span>&nbsp;
{% endset %}

{% set package_keywords %}
    <div class=\"tags\">%KEYWORDS%</div>
{% endset %}

{#
 # Contains the version and uninstall buttons for INSTALLED extensions
 #}
{% set package_manage_dropdown_installed %}
    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> {{ __('page.extend.button.manage') }}
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> {{ __('page.extend.button.link-versions') }}
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> {{ __('page.extend.button.link-marketplace') }}
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> {{ __('page.extend.button.link-repository') }}
                </a>
            </li>
            <li>
                <a href=\"#\" data-request=\"package-depends\" data-toggle=\"modal\" data-target=\"#installModal\" data-needle=\"%NAME%\" data-constraint=\"%VERSION%\">
                    <i class=\"fa fa-group fa-fw\"></i> {{ __('page.extend.button.package-dependencies') }}
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> {{ __('page.extend.button.link-uninstall') }}
                </a>
            </li>
        </ul>
    </div>
{% endset %}

{#
 # Contains the version and uninstall buttons for UNINSTALLED extensions
 #}
{% set package_manage_dropdown_uninstalled %}
    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> {{ __('page.extend.button.manage') }}
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> {{ __('page.extend.button.link-versions') }}
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> {{ __('page.extend.button.link-marketplace') }}
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> {{ __('page.extend.button.link-repository') }}
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> {{ __('page.extend.button.link-uninstall') }}
                </a>
            </li>
        </ul>
    </div>
{% endset %}



{#
 # Contains the README
 #}
{% set package_left_buttons %}
    <div class=\"pull-left\">
        %README%
        %THEME%
        %CONFIG%
    </div>
{% endset %}

{% set package_readme_button %}
    <a data-request=\"package-readme\" data-readme=\"%README%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-quote-right fa-fw\"></i> {{ __('page.extend.button.link-readme') }}
    </a>
{% endset %}

{% set package_theme_button %}
    <a data-request=\"package-copy\" data-theme=\"%NAME%\" class=\"btn btn-sm btn-silent-danger\">
        <i class=\"fa fa-copy fa-fw\"></i> {{ __('page.extend.button.copy-to-theme-folder') }}
    </a>
{% endset %}

{% set package_config_button %}
    <a href=\"%CONFIG%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-cog fa-fw\"></i> {{ __('page.extend.button.link-config') }}
    </a>
{% endset %}

{% set package_versions %}
    <tr>
        <td>%NAME%</td>
        <td>%VERSION%</td>
        <td><span class=\"label label-default-%CLASS%\">%BUILDSTATUS%</span></td>
        <td>
            <div class=\"btn-group\"><a href=\"#\" data-request=\"install-package\" class=\"btn btn-primary btn-sm\" data-package=\"%NAME%\" data-version=\"%VERSION%\">
            <i class=\"icon-gears\"></i> {{ __('page.extend.button.install-this-version') }}</a></div>
        </td>
    </tr>
{% endset %}

{% set package_install_new %}
    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-warning\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">{{ __('page.extend.button.install-package') }}</a></td>
    </tr>
{% endset %}

{% set package_install_update %}
    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-tertiary\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">{{ __('page.extend.button.update-package') }}</a></td>
    </tr>
{% endset %}

{% set package_error %}
    <div id=\"extension-error\">
        <h3>%ERROR_TYPE%</h3>
        <code>%ERROR_MESSAGE%</code>
        <p>%ERROR_LOCATION%</p>
    </div>
{% endset %}

{{ data('extend.packages.empty',                       package_empty|trim) }}
{{ data('extend.packages.item',                        package_item|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.description',                 package_description|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.versions',                    package_versions|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.author',                      package_author|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.authors',                     package_authors|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.keyword',                     package_keyword|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.keywords',                    package_keywords|trim|preg_replace('/>\\\\s+</', '><')) }}

{{ data('extend.packages.manage_dropdown_installed',   package_manage_dropdown_installed|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.manage_dropdown_uninstalled', package_manage_dropdown_uninstalled|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.left_buttons',                package_left_buttons|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.theme_button',                package_theme_button|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.config_button',               package_config_button|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.readme_button',               package_readme_button|trim|preg_replace('/>\\\\s+</', '><')) }}

{{ data('extend.packages.install_new',                 package_install_new|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.install_update',              package_install_update|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.error',                       package_error|trim|preg_replace('/>\\\\s+</', '><')) }}
", "@bolt/extend/_package.twig", "");
    }
}
