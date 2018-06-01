<?php

/* @bolt/extend/_action-modal.twig */
class __TwigTemplate_2e40e72f7e81ad4c804aa650b967dd352befbee21b6eaaead8a5d75d6fef13d9 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_action-modal.twig"));

        $tags = array();
        $filters = array();
        $functions = array("__" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('__')
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
        echo "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
        <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
    </button>
    <h4 class=\"modal-title\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.installing-package"));
        echo "</h4>
</div>

<div class=\"modal-body\">
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"loader\">
                <i class=\"fa fa-spin fa-spinner\"></i> <span class=\"message\">Checking available versions…</span>
            </div>

            <div class=\"install-response-container hide-block\">
                <h3>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.installing-package"));
        echo "</h3>
                <pre class=\"install-response console\">";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.installing-selected-package"));
        echo "</pre>
            </div>

            <div class=\"dependency-response-container hide-block\">
                <h3>";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Dependencies"));
        echo "</h3>
                <pre class=\"dependency-response console\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Finding packages that require this one…"));
        echo "</pre>
            </div>

            <div class=\"install-latest-container hide-block\">

                <div class=\"latest-version-container\">
                    <h3>";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.latest-version"));
        echo "</h3>
                    <p>";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.latest-version"));
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.extension"));
        echo "</th>
                                <th>";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.version"));
        echo "</th>
                                <th>";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.status"));
        echo "</th>
                                <th>";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.actions"));
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-stable-versions-available"));
        echo "</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a class=\"btn btn-secondary\" data-request=\"show-all\">
                    <i class=\"fa fa-list fa-fw\"></i> ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.show-all-versions"));
        echo "
                </a>

            </div>


            <div class=\"install-version-container hide-block\">

                <div class=\"stable-version-container\">
                    <h3>";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.stable-versions"));
        echo "</h3>
                    <p>";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.marked-as-stable"));
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.extension"));
        echo "</th>
                                <th>";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.version"));
        echo "</th>
                                <th>";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.status"));
        echo "</th>
                                <th>";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.actions"));
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-stable-versions-available"));
        echo "</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"dev-version-container\">
                    <h3>";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.test-versions"));
        echo "</h3>
                    <p>";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.compatible-unstable-versions"));
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.extension"));
        echo "</th>
                                <th>";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.version"));
        echo "</th>
                                <th>";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.status"));
        echo "</th>
                                <th>";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.actions"));
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-test-versions-available"));
        echo "</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class=\"theme-postinstall\">
                <div class=\"theme-generation-container hide-block\">
                    <h3>";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.theme-installation-complete"));
        echo "</h3>
                    <p>";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.before-theme-start"));
        echo "</p>
                    <fieldset>
                        <input type=\"text\" id=\"theme-name\" placeholder=\"Optionally change theme name\">
                        <a href=\"#\" class=\"theme-generator btn btn-primary\" data-request=\"generate-theme\" data-theme=\"\">Generate Theme</a>
                    </fieldset>
                </div>
                <div class=\"theme-generate-response alert alert-info hide-block\"></div>
            </div>

            <div class=\"extension-dependencies hide-block\">
                <h3>";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.package-dependencies"));
        echo ":</h3>
                <ul class=\"extension-dependencies-list\">
                </ul>
            </div>

            <div class=\"extension-postinstall hide-block\">
                <div class=\"modal-success hide-block\">
                    <h3>";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.installation-complete"));
        echo "</h3>
                    <p>";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.start-using-extension"));
        echo "</p>
                </div>

                <div class=\"modal-failed hide-block\"></div>
            </div>

        </div>
    </div>
</div>

<div class=\"modal-footer postinstall-footer hide-block\">
    ";
        // line 134
        echo "    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_action-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 134,  260 => 120,  256 => 119,  246 => 112,  233 => 102,  229 => 101,  216 => 91,  208 => 86,  204 => 85,  200 => 84,  196 => 83,  189 => 79,  185 => 78,  175 => 71,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  148 => 59,  144 => 58,  132 => 49,  122 => 42,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  95 => 30,  91 => 29,  82 => 23,  78 => 22,  71 => 18,  67 => 17,  52 => 5,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
        <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
    </button>
    <h4 class=\"modal-title\">{{ __('page.extend.headline.installing-package') }}</h4>
</div>

<div class=\"modal-body\">
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"loader\">
                <i class=\"fa fa-spin fa-spinner\"></i> <span class=\"message\">Checking available versions…</span>
            </div>

            <div class=\"install-response-container hide-block\">
                <h3>{{ __('page.extend.headline.installing-package') }}</h3>
                <pre class=\"install-response console\">{{ __('page.extend.message.installing-selected-package') }}</pre>
            </div>

            <div class=\"dependency-response-container hide-block\">
                <h3>{{ __('Dependencies') }}</h3>
                <pre class=\"dependency-response console\">{{ __('Finding packages that require this one…') }}</pre>
            </div>

            <div class=\"install-latest-container hide-block\">

                <div class=\"latest-version-container\">
                    <h3>{{ __('page.extend.headline.latest-version') }}</h3>
                    <p>{{ __('page.extend.message.latest-version') }}</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>{{ __('page.extend.listheader.extension') }}</th>
                                <th>{{ __('page.extend.listheader.version') }}</th>
                                <th>{{ __('page.extend.listheader.status') }}</th>
                                <th>{{ __('page.extend.listheader.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>{{ __('page.extend.message.no-stable-versions-available') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a class=\"btn btn-secondary\" data-request=\"show-all\">
                    <i class=\"fa fa-list fa-fw\"></i> {{ __('page.extend.button.show-all-versions') }}
                </a>

            </div>


            <div class=\"install-version-container hide-block\">

                <div class=\"stable-version-container\">
                    <h3>{{ __('page.extend.headline.stable-versions') }}</h3>
                    <p>{{ __('page.extend.message.marked-as-stable') }}</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>{{ __('page.extend.listheader.extension') }}</th>
                                <th>{{ __('page.extend.listheader.version') }}</th>
                                <th>{{ __('page.extend.listheader.status') }}</th>
                                <th>{{ __('page.extend.listheader.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>{{ __('page.extend.message.no-stable-versions-available') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"dev-version-container\">
                    <h3>{{ __('page.extend.headline.test-versions') }}</h3>
                    <p>{{ __('page.extend.message.compatible-unstable-versions') }}</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>{{ __('page.extend.listheader.extension') }}</th>
                                <th>{{ __('page.extend.listheader.version') }}</th>
                                <th>{{ __('page.extend.listheader.status') }}</th>
                                <th>{{ __('page.extend.listheader.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>{{ __('page.extend.message.no-test-versions-available') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class=\"theme-postinstall\">
                <div class=\"theme-generation-container hide-block\">
                    <h3>{{ __('page.extend.headline.theme-installation-complete') }}</h3>
                    <p>{{ __('page.extend.message.before-theme-start') }}</p>
                    <fieldset>
                        <input type=\"text\" id=\"theme-name\" placeholder=\"Optionally change theme name\">
                        <a href=\"#\" class=\"theme-generator btn btn-primary\" data-request=\"generate-theme\" data-theme=\"\">Generate Theme</a>
                    </fieldset>
                </div>
                <div class=\"theme-generate-response alert alert-info hide-block\"></div>
            </div>

            <div class=\"extension-dependencies hide-block\">
                <h3>{{ __('page.extend.message.package-dependencies') }}:</h3>
                <ul class=\"extension-dependencies-list\">
                </ul>
            </div>

            <div class=\"extension-postinstall hide-block\">
                <div class=\"modal-success hide-block\">
                    <h3>{{ __('page.extend.headline.installation-complete') }}</h3>
                    <p>{{ __('page.extend.message.start-using-extension') }}</p>
                </div>

                <div class=\"modal-failed hide-block\"></div>
            </div>

        </div>
    </div>
</div>

<div class=\"modal-footer postinstall-footer hide-block\">
    {# -- This button seems not to do anything. Not yet, at least.
    <a href=\"#\" class=\"ext-link btn btn-primary\" target=\"_blank\">{{ __('page.extend.button.info-help') }}</a>
    #}
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
</div>
", "@bolt/extend/_action-modal.twig", "");
    }
}
