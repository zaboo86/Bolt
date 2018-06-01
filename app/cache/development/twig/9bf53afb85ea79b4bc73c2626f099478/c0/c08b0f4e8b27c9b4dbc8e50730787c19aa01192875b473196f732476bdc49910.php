<?php

/* @bolt/extend/extend.twig */
class __TwigTemplate_7931760cfd001f57cb3f1b7ed2e518874e8db31f18700f22d9585c9fcd1f2e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/extend/extend.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/extend.twig"));

        $tags = array("if" => 19, "for" => 24, "set" => 36);
        $filters = array("escape" => 25, "ymllink" => 39, "trim" => 205);
        $functions = array("__" => 7, "include" => 17, "data" => 186);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('escape', 'ymllink', 'trim'),
                array('__', 'include', 'data')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("ExtendBolt");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.extensions"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 10
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.pagetitle", array("%BOLTNAME%" => $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/name"), "method"))));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 17
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/extend/_package.twig"));
        echo "

    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute(($context["context"] ?? null), "messages", array()))) {
            // line 20
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["message"], "html", null, true));
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 31
        echo "
    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            ";
        // line 35
        if ( !$this->getAttribute(($context["context"] ?? null), "writeable", array())) {
            // line 36
            echo "            ";
            $context["msg"] = $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.ext-dir-missing", array("%DIRECTORY%" => $this->getAttribute(($context["context"] ?? null), "extensionsPath", array())));
            // line 37
            echo "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->ymllink(($context["msg"] ?? null)));
            echo "
            </div>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        if ( !$this->getAttribute(($context["context"] ?? null), "enabled", array())) {
            // line 44
            echo "            ";
            $context["msg"] = $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.loading-disabled", array("%CONFIG%" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->ymllink("config.yml")));
            // line 45
            echo "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->ymllink(($context["msg"] ?? null)));
            echo "
            </div>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_messages.twig"));
        echo "

            <section>
                <h2>";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.install-new-extension"));
        echo "</h2>
                <p>
                    ";
        // line 56
        if (($this->getAttribute(($context["context"] ?? null), "writeable", array()) && $this->getAttribute(($context["context"] ?? null), "online", array()))) {
            // line 57
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.add-extension-with-form"));
            echo "
                    ";
        }
        // line 59
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.discover-by-visiting"));
        echo "
                    <a href=\"";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "site", array()), "html", null, true));
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "site", array()), "html", null, true));
        echo "</a>
                </p>
                ";
        // line 62
        if (($this->getAttribute(($context["context"] ?? null), "writeable", array()) && $this->getAttribute(($context["context"] ?? null), "online", array()))) {
            // line 63
            echo "                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-primary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> ";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.browse-versions"));
            echo "
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/extend/_action-modal.twig"));
            echo "
                                </div>
                            </div>
                        </div>
                </div>
                ";
        }
        // line 79
        echo "            </section>

            <hr>

            ";
        // line 84
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/extend/_feedback.twig"));
        echo "

            <section class=\"installed-container\">
                <h2>";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.currently-installed"));
        echo "</h2>
                ";
        // line 88
        if ($this->getAttribute(($context["context"] ?? null), "writeable", array())) {
            // line 89
            echo "                <pre class=\"installed console\" data-request=\"installed\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.checking-installed-packages"));
            echo "..</pre>
                ";
        } else {
            // line 91
            echo "                <pre class=\"installed\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-package-check-in-readmode"));
            echo "</pre>
                ";
        }
        // line 93
        echo "                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            ";
        // line 101
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/extend/_readme.twig"));
        echo "

            <hr>
            ";
        // line 104
        if ($this->getAttribute(($context["context"] ?? null), "bundled", array())) {
            // line 105
            echo "                <section class=\"installed-container\">
                    <h2>";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.headline.bundled"));
            echo "</h2>
                    <div class=\"installed-list\">
                        <div class=\"local-list-items\">
                            <table class=\"table-striped dashboardlisting\">
                                <thead>
                                <tr>
                                    <th>";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.name"));
            echo "</th>
                                    <th>";
            // line 113
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.listheader.class"));
            echo "</th>
                                </tr>
                                </thead>

                                <tbody>
                                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "bundled", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
                // line 119
                echo "                                    <tr>
                                        <td class=\"id\"><strong>";
                // line 120
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["ext"], "displayName", array()), "html", null, true));
                echo "</strong></td>
                                        <td><code>";
                // line 121
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["ext"], "className", array()), "html", null, true));
                echo "</code></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            ";
        }
        // line 130
        echo "
        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.options"));
        echo "</div>
                <div class=\"panel-body\">
                        ";
        // line 137
        $context["disabled"] = ( !$this->getAttribute(($context["context"] ?? null), "writeable", array()) ||  !$this->getAttribute(($context["context"] ?? null), "online", array()));
        // line 138
        echo "                        <p><strong>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.check-for-updates"));
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 140
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.update-check"));
        echo "
                            </a>
                        </div>
                        <p>";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.shows-updates"));
        echo "</p>
                        <hr>
                        <p><strong>";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.maintenance"));
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 148
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.update-all"));
        echo "
                            </a>
                            <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle ";
        // line 151
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                <li>
                                    <a href=\"#\" class=\"";
        // line 157
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"install-run\">
                                        <i class=\"fa fa-download fa-fw\"></i> ";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.install-all"));
        echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"";
        // line 162
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"autoload-dump\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.autoload-dump"));
        echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <strong>";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.update-all"));
        echo ":</strong>
                            ";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.installs-updates"));
        echo "
                        </p>
                        <p>
                            <strong>";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.install-all"));
        echo ":</strong>
                            ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.installs-all-listed-packages"));
        echo "
                        </p>
                        <p>
                            <strong>";
        // line 177
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.button.autoload-dump"));
        echo ":</strong>
                            ";
        // line 178
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.autoload-dump"));
        echo "
                        </p>
                </div>
            </div>
        </aside>

    </div>

    ";
        // line 186
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.autoloader-start", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.autoloader-start")), "html", null, true));
        echo "
    ";
        // line 187
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.autoloader-update", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.autoloader-update")), "html", null, true));
        echo "
    ";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.bad-json", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.bad-json")), "html", null, true));
        echo "
    ";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.confirm-remove", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.confirm-remove")), "html", null, true));
        echo "
    ";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.copying", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.copying")), "html", null, true));
        echo "
    ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.install-all", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.install-all")), "html", null, true));
        echo "
    ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.install-running", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.installation-running")), "html", null, true));
        echo "
    ";
        // line 193
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.installing", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.installing")), "html", null, true));
        echo "
    ";
        // line 194
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.no-stable", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-stable-versions-available")), "html", null, true));
        echo "
    ";
        // line 195
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.no-test", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.no-test-versions-available")), "html", null, true));
        echo "
    ";
        // line 196
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.overwrite", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.overwrite")), "html", null, true));
        echo "
    ";
        // line 197
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.removing", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.removing")), "html", null, true));
        echo "
    ";
        // line 198
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.running-update", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.running-update")), "html", null, true));
        echo "
    ";
        // line 199
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.running-update-all", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.running-update-all")), "html", null, true));
        echo "
    ";
        // line 200
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.updating", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.updating")), "html", null, true));
        echo "
    ";
        // line 201
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.text.updated", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.extend.message.updated")), "html", null, true));
        echo "

    ";
        // line 203
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.sitever", $this->getAttribute(($context["context"] ?? null), "extendVersion", array())), "html", null, true));
        echo "
    ";
        // line 204
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.siteurl", $this->getAttribute(($context["context"] ?? null), "site", array())), "html", null, true));
        echo "
    ";
        // line 205
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("extend.baseurl", ((($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "basePath", array()) . "/") . twig_trim_filter($this->getAttribute(($context["app"] ?? null), "controller.backend.extend.mount_prefix", array(), "array"), "/")) . "/")), "html", null, true));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/extend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 205,  549 => 204,  545 => 203,  540 => 201,  536 => 200,  532 => 199,  528 => 198,  524 => 197,  520 => 196,  516 => 195,  512 => 194,  508 => 193,  504 => 192,  500 => 191,  496 => 190,  492 => 189,  488 => 188,  484 => 187,  480 => 186,  469 => 178,  465 => 177,  459 => 174,  455 => 173,  449 => 170,  445 => 169,  436 => 163,  430 => 162,  423 => 158,  417 => 157,  406 => 151,  401 => 149,  395 => 148,  390 => 146,  385 => 144,  379 => 141,  373 => 140,  367 => 138,  365 => 137,  360 => 135,  353 => 130,  345 => 124,  336 => 121,  332 => 120,  329 => 119,  325 => 118,  317 => 113,  313 => 112,  304 => 106,  301 => 105,  299 => 104,  292 => 101,  283 => 93,  277 => 91,  271 => 89,  269 => 88,  265 => 87,  258 => 84,  252 => 79,  243 => 73,  234 => 67,  228 => 63,  226 => 62,  219 => 60,  214 => 59,  208 => 57,  206 => 56,  201 => 54,  195 => 51,  192 => 50,  186 => 47,  182 => 45,  179 => 44,  177 => 43,  174 => 42,  168 => 39,  164 => 37,  161 => 36,  159 => 35,  153 => 31,  147 => 27,  138 => 25,  134 => 24,  128 => 20,  126 => 19,  120 => 17,  114 => 16,  102 => 14,  92 => 10,  86 => 9,  74 => 7,  62 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Extend Bolt #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'ExtendBolt' %}

{% block page_title __('general.phrase.extensions') %}

{% block page_subtitle %}
    {{ __('page.extend.pagetitle', {'%BOLTNAME%': config.get('general/branding/name') }) }}
{% endblock %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}
    {{ include('@bolt/extend/_package.twig') }}

    {% if context.messages is not empty %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    {% for message in context.messages %}
                        {{ message }}<br>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}

    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            {% if not context.writeable %}
            {% set msg = __('page.extend.message.ext-dir-missing', {'%DIRECTORY%': context.extensionsPath}) %}
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    {{ msg|ymllink }}
            </div>
            {% endif %}

            {% if not context.enabled %}
            {% set msg = __('page.extend.message.loading-disabled', {'%CONFIG%': 'config.yml'|ymllink }) %}
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    {{ msg|ymllink }}
            </div>
            {% endif %}

            {{ include('@bolt/_sub/_messages.twig') }}

            <section>
                <h2>{{ __('page.extend.headline.install-new-extension') }}</h2>
                <p>
                    {% if context.writeable and context.online %}
                    {{ __('page.extend.message.add-extension-with-form') }}
                    {% endif %}
                    {{ __('page.extend.message.discover-by-visiting') }}
                    <a href=\"{{ context.site }}\" target=\"_blank\">{{ context.site }}</a>
                </p>
                {% if context.writeable and context.online %}
                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-primary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> {{ __('page.extend.button.browse-versions') }}
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    {{ include('@bolt/extend/_action-modal.twig') }}
                                </div>
                            </div>
                        </div>
                </div>
                {% endif %}
            </section>

            <hr>

            {# Console for UI feedback #}
            {{ include('@bolt/extend/_feedback.twig') }}

            <section class=\"installed-container\">
                <h2>{{ __('page.extend.headline.currently-installed') }}</h2>
                {% if context.writeable %}
                <pre class=\"installed console\" data-request=\"installed\">{{ __('page.extend.message.checking-installed-packages') }}..</pre>
                {% else %}
                <pre class=\"installed\">{{ __('page.extend.message.no-package-check-in-readmode') }}</pre>
                {% endif %}
                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            {# Modal for readmes  #}
            {{ include('@bolt/extend/_readme.twig') }}

            <hr>
            {% if context.bundled %}
                <section class=\"installed-container\">
                    <h2>{{ __('page.extend.headline.bundled') }}</h2>
                    <div class=\"installed-list\">
                        <div class=\"local-list-items\">
                            <table class=\"table-striped dashboardlisting\">
                                <thead>
                                <tr>
                                    <th>{{ __('page.extend.listheader.name') }}</th>
                                    <th>{{ __('page.extend.listheader.class') }}</th>
                                </tr>
                                </thead>

                                <tbody>
                                {% for ext in context.bundled %}
                                    <tr>
                                        <td class=\"id\"><strong>{{ ext.displayName }}</strong></td>
                                        <td><code>{{ ext.className }}</code></td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            {% endif %}

        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>{{ __('page.extend.options') }}</div>
                <div class=\"panel-body\">
                        {% set disabled = (not context.writeable or not context.online) %}
                        <p><strong>{{ __('page.extend.message.check-for-updates') }}</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary{% if disabled %} disabled{% endif %} clickspinner\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> {{ __('page.extend.button.update-check') }}
                            </a>
                        </div>
                        <p>{{ __('page.extend.message.shows-updates') }}</p>
                        <hr>
                        <p><strong>{{ __('page.extend.message.maintenance') }}</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary{% if disabled %} disabled{% endif %} clickspinner\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> {{ __('page.extend.button.update-all') }}
                            </a>
                            <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle {% if disabled %} disabled{% endif %}\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                <li>
                                    <a href=\"#\" class=\"{% if disabled %} disabled{% endif %} clickspinner\" data-request=\"install-run\">
                                        <i class=\"fa fa-download fa-fw\"></i> {{ __('page.extend.button.install-all') }}
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"{% if disabled %} disabled{% endif %} clickspinner\" data-request=\"autoload-dump\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> {{ __('page.extend.button.autoload-dump') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <strong>{{ __('page.extend.button.update-all') }}:</strong>
                            {{ __('page.extend.message.installs-updates') }}
                        </p>
                        <p>
                            <strong>{{ __('page.extend.button.install-all') }}:</strong>
                            {{ __('page.extend.message.installs-all-listed-packages') }}
                        </p>
                        <p>
                            <strong>{{ __('page.extend.button.autoload-dump') }}:</strong>
                            {{ __('page.extend.message.autoload-dump') }}
                        </p>
                </div>
            </div>
        </aside>

    </div>

    {{ data('extend.text.autoloader-start',   __('page.extend.message.autoloader-start')) }}
    {{ data('extend.text.autoloader-update',  __('page.extend.message.autoloader-update')) }}
    {{ data('extend.text.bad-json',           __('page.extend.message.bad-json')) }}
    {{ data('extend.text.confirm-remove',     __('page.extend.message.confirm-remove')) }}
    {{ data('extend.text.copying',            __('page.extend.message.copying')) }}
    {{ data('extend.text.install-all',        __('page.extend.message.install-all')) }}
    {{ data('extend.text.install-running',    __('page.extend.message.installation-running')) }}
    {{ data('extend.text.installing',         __('page.extend.message.installing')) }}
    {{ data('extend.text.no-stable',          __('page.extend.message.no-stable-versions-available')) }}
    {{ data('extend.text.no-test',            __('page.extend.message.no-test-versions-available')) }}
    {{ data('extend.text.overwrite',          __('page.extend.message.overwrite')) }}
    {{ data('extend.text.removing',           __('page.extend.message.removing')) }}
    {{ data('extend.text.running-update',     __('page.extend.message.running-update')) }}
    {{ data('extend.text.running-update-all', __('page.extend.message.running-update-all')) }}
    {{ data('extend.text.updating',           __('page.extend.message.updating')) }}
    {{ data('extend.text.updated',            __('page.extend.message.updated')) }}

    {{ data('extend.sitever',             context.extendVersion) }}
    {{ data('extend.siteurl',             context.site) }}
    {{ data('extend.baseurl',             global.request.basePath ~ '/' ~ app['controller.backend.extend.mount_prefix']|trim('/') ~ '/') }}

{% endblock page_main %}
", "@bolt/extend/extend.twig", "");
    }
}
