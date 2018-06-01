<?php

/* @bolt/editcontent/editcontent.twig */
class __TwigTemplate_c42b4b89cbe0bebe4f643aec968ecf1a2ae2171c446a5b9aa98b3fd93abe863e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/editcontent/editcontent.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/editcontent.twig"));

        $tags = array("import" => 3, "from" => 4, "set" => 11, "if" => 12, "form_theme" => 25, "for" => 78);
        $filters = array("escape" => 19, "striptags" => 19, "default" => 19, "json_encode" => 50);
        $functions = array("__" => 13, "path" => 44, "include" => 71, "widgets" => 73, "form_start" => 86, "form_widget" => 87, "form_end" => 130);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'from', 'set', 'if', 'form_theme', 'for'),
                array('escape', 'striptags', 'default', 'json_encode'),
                array('__', 'path', 'include', 'widgets', 'form_start', 'form_widget', 'form_end')
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/editcontent.twig", 3);
        // line 4
        $context["__internal_3d41b778d925112039b595f604af14da3308c109d5418854a6ba736134c8d230"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/editcontent.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Content/*");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 11
        echo "    ";
        $context["contenttype"] = array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()));
        // line 12
        echo "    ";
        if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "title", array())) || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singleton", array()))) {
            // line 13
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.edit", ($context["contenttype"] ?? null)));
            echo "
    ";
        } else {
            // line 15
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.new", ($context["contenttype"] ?? null)));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, strip_tags((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array(), "any", false, true), "title", array()), "")) : (""))), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 25
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "@bolt/editcontent/form/editcontent_form_layout.twig"));
        // line 26
        echo "
    ";
        // line 27
        $context["status_names"] = array("published" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.published"), "held" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.not-published"), "timed" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.publish-timed"), "draft" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.draft"));
        // line 33
        echo "
    ";
        // line 34
        ob_start();
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3d41b778d925112039b595f604af14da3308c109d5418854a6ba736134c8d230"]->getbuic_moment($this->getAttribute($this->getAttribute(($context["context"] ?? null), "content", array()), "datechanged", array())));
        $context["dateChanged"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
    ";
        // line 36
        $context["bind_data"] = array("bind" => "editcontent", "savedon" => ((($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.saved-on-colon") . " <strong></strong> <small>(") .         // line 38
($context["dateChanged"] ?? null)) . ")</small></p>"), "newRecord" => ((($this->getAttribute($this->getAttribute(        // line 39
($context["context"] ?? null), "content", array()), "id", array()) != 0)) ? (false) : (true)), "duplicate" => $this->getAttribute(        // line 40
($context["context"] ?? null), "duplicate", array()), "msgNotSaved" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.saving-impossible", array("%contenttype%" => $this->getAttribute($this->getAttribute(        // line 41
($context["context"] ?? null), "contenttype", array()), "slug", array()))), "hasGroups" => $this->getAttribute($this->getAttribute(        // line 42
($context["context"] ?? null), "has", array()), "tabs", array()), "singularSlug" => $this->getAttribute($this->getAttribute(        // line 43
($context["context"] ?? null), "contenttype", array()), "singular_slug", array()), "previewUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute(        // line 44
($context["context"] ?? null), "contenttype", array()), "singular_slug", array()))), "actionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentaction"), "overviewUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview", array("contenttypeslug" => $this->getAttribute($this->getAttribute(        // line 46
($context["context"] ?? null), "contenttype", array()), "singular_slug", array()))));
        // line 48
        echo "
    ";
        // line 49
        $context["attr_form"] = array("data-bind" => twig_jsonencode_filter(        // line 50
($context["bind_data"] ?? null)), "class" => ("form-horizontal" . (($this->getAttribute($this->getAttribute(        // line 51
($context["context"] ?? null), "has", array()), "tabs", array())) ? (" tab-content") : (""))));
        // line 53
        echo "
    ";
        // line 54
        $context["attributes"] = array("hid_editreferrer" => array("name_id" => "editreferrer", "type" => "hidden", "value" => (($this->getAttribute(        // line 58
($context["context"] ?? null), "editreferrer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "editreferrer", array()), "")) : (""))), "hid_contenttype" => array("name_id" => "contenttype", "type" => "hidden", "value" => $this->getAttribute($this->getAttribute(        // line 64
($context["context"] ?? null), "contenttype", array()), "slug", array())));
        // line 67
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_messages.twig"));
        echo "

            ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editcontent_below_header", "backend"));
        echo "

            ";
        // line 76
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
            // line 77
            echo "                <ul class=\"nav nav-tabs\" id=\"filtertabs\">
                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 79
                echo "                        <li";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute($context["group"], "is_active", array())) ? (" class=\"active\"") : ("")));
                echo " id=\"tabindicator-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true));
                echo "\">
                            <a href=\"#";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true));
                echo "\" data-toggle=\"tab\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true));
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </ul>
            ";
        }
        // line 85
        echo "
            ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_start', array("attr" => ($context["attr_form"] ?? null))));
        echo "
                ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "_token", array()), 'widget'));
        echo "

                <input";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "hid_editreferrer", array())));
        echo ">
                <input";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getattr($this->getAttribute(($context["attributes"] ?? null), "hid_contenttype", array())));
        echo ">

                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "groups", array()));
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
        foreach ($context['_seq'] as $context["group_name"] => $context["group"]) {
            // line 93
            echo "
                    ";
            // line 94
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
                // line 95
                echo "                        <div class=\"tab-pane";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute($context["group"], "is_active", array())) ? (" active") : ("")));
                echo "\" id=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true));
                echo "\">
                    ";
            }
            // line 97
            echo "
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 99
                echo "
                        ";
                // line 100
                if (($context["key"] == "*relations")) {
                    // line 101
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_relations.twig"));
                    echo "

                        ";
                } elseif ((                // line 103
$context["key"] == "*taxonomy")) {
                    // line 104
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_taxonomies.twig"));
                    echo "

                        ";
                } elseif ((                // line 106
$context["key"] == "*meta")) {
                    // line 107
                    echo "                            <div data-bolt-fieldset=\"meta\">
                                ";
                    // line 108
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/fields/_meta.twig"));
                    echo "
                            </div>

                        ";
                } elseif ((                // line 111
$context["key"] == "*template")) {
                    // line 112
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_templatefields.twig"));
                    echo "

                        ";
                } else {
                    // line 115
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_field.twig"));
                    echo "
                        ";
                }
                // line 117
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "
                    ";
            // line 120
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "has", array()), "tabs", array())) {
                // line 121
                echo "                        </div>
                    ";
            }
            // line 123
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
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
                <input type=\"hidden\" name=\"_live-editor-preview\" value=\"\"/>

                ";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_buttons.twig"));
        echo "

            ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_end', array("render_rest" => false)));
        echo "

            ";
        // line 132
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_includes-data.twig"));
        echo "

            ";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editcontent_bottom", "backend"));
        echo "

        </div>

        <aside class=\"col-md-4 hidden-sm\">
            ";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_aside.twig"));
        echo "
        </aside>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main_extra_content"));

        // line 146
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/editcontent/_live-editor.twig"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 146,  424 => 145,  412 => 139,  404 => 134,  399 => 132,  394 => 130,  389 => 128,  384 => 125,  369 => 123,  365 => 121,  363 => 120,  360 => 119,  345 => 117,  339 => 115,  332 => 112,  330 => 111,  324 => 108,  321 => 107,  319 => 106,  313 => 104,  311 => 103,  305 => 101,  303 => 100,  300 => 99,  283 => 98,  280 => 97,  272 => 95,  270 => 94,  267 => 93,  250 => 92,  245 => 90,  241 => 89,  236 => 87,  232 => 86,  229 => 85,  225 => 83,  214 => 80,  207 => 79,  203 => 78,  200 => 77,  197 => 76,  192 => 73,  187 => 71,  181 => 67,  179 => 64,  178 => 58,  177 => 54,  174 => 53,  172 => 51,  171 => 50,  170 => 49,  167 => 48,  165 => 46,  164 => 44,  163 => 43,  162 => 42,  161 => 41,  160 => 40,  159 => 39,  158 => 38,  157 => 36,  154 => 35,  150 => 34,  147 => 33,  145 => 27,  142 => 26,  139 => 25,  133 => 24,  121 => 22,  109 => 19,  98 => 15,  92 => 13,  89 => 12,  86 => 11,  80 => 10,  68 => 8,  61 => 6,  59 => 4,  57 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Content ... > Edit #}

{% import '@bolt/_macro/_macro.twig' as macro %}
{% from '@bolt/_buic/_moment.twig' import buic_moment %}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Content/*' %}

{% block page_title %}
    {% set contenttype = {'%contenttype%': context.contenttype.singular_name} %}
    {% if context.content.title is not empty or context.contenttype.singleton %}
        {{ __('contenttypes.generic.edit', contenttype) }}
    {% else %}
        {{ __('contenttypes.generic.new', contenttype) }}
    {% endif %}
{% endblock page_title %}

{% block page_subtitle context.content.title|default('')|striptags %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}
    {% form_theme context.form '@bolt/editcontent/form/editcontent_form_layout.twig' %}

    {% set status_names = {
        'published': __('general.phrase.published'),
        'held':      __('general.phrase.not-published'),
        'timed':     __('general.phrase.publish-timed'),
        'draft':     __('general.phrase.draft')
    } %}

    {% set dateChanged %}{{ buic_moment(context.content.datechanged) }}{% endset %}

    {% set bind_data = {
        bind:           'editcontent',
        savedon:        __('general.phrase.saved-on-colon') ~ ' <strong></strong> <small>(' ~ dateChanged ~ ')</small></p>',
        newRecord:      context.content.id != 0 ? false : true,
        duplicate:      context.duplicate,
        msgNotSaved:    __('contenttypes.generic.saving-impossible', {'%contenttype%': context.contenttype.slug}),
        hasGroups:      context.has.tabs,
        singularSlug:   context.contenttype.singular_slug,
        previewUrl:     path('preview', {'contenttypeslug': context.contenttype.singular_slug}),
        actionUrl:      path('contentaction'),
        overviewUrl:    path('overview', {'contenttypeslug': context.contenttype.singular_slug})
    } %}

    {% set attr_form = {
        'data-bind': bind_data|json_encode,
        'class':     'form-horizontal' ~ (context.has.tabs ? ' tab-content' : ''),
    } %}

    {% set attributes = {
        hid_editreferrer: {
            name_id:  'editreferrer',
            type:     'hidden',
            value:    context.editreferrer|default(''),
        },

        hid_contenttype: {
            name_id:   'contenttype',
            type:      'hidden',
            value:     context.contenttype.slug,
        },
    } %}

    <div class=\"row\">
        <div class=\"col-md-8\">

            {{ include('@bolt/_sub/_messages.twig') }}

            {{ widgets('editcontent_below_header', 'backend') }}

            {# Only if we have grouping tabs. #}
            {% if context.has.tabs %}
                <ul class=\"nav nav-tabs\" id=\"filtertabs\">
                    {% for group in context.groups %}
                        <li{{ group.is_active ? ' class=\"active\"' : '' }} id=\"tabindicator-{{ group.id }}\">
                            <a href=\"#{{ group.id }}\" data-toggle=\"tab\">{{ group.label }}</a>
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}

            {{ form_start(context.form, {'attr': attr_form}) }}
                {{ form_widget(context.form._token) }}

                <input{{ macro.attr(attributes.hid_editreferrer) }}>
                <input{{ macro.attr(attributes.hid_contenttype) }}>

                {% for group_name, group in context.groups %}

                    {% if context.has.tabs %}
                        <div class=\"tab-pane{{ group.is_active ? ' active' : '' }}\" id=\"{{ group.id }}\">
                    {% endif %}

                    {% for key in group.fields %}

                        {% if key == '*relations' %}
                            {{ include('@bolt/editcontent/_relations.twig') }}

                        {% elseif key == '*taxonomy' %}
                            {{ include('@bolt/editcontent/_taxonomies.twig') }}

                        {% elseif key == '*meta' %}
                            <div data-bolt-fieldset=\"meta\">
                                {{ include('@bolt/editcontent/fields/_meta.twig') }}
                            </div>

                        {% elseif key == '*template' %}
                            {{ include('@bolt/editcontent/_templatefields.twig') }}

                        {% else %}
                            {{ include('@bolt/editcontent/_field.twig') }}
                        {% endif %}

                    {% endfor %}

                    {% if context.has.tabs %}
                        </div>
                    {% endif %}

                {% endfor %}

                <input type=\"hidden\" name=\"_live-editor-preview\" value=\"\"/>

                {{ include('@bolt/editcontent/_buttons.twig') }}

            {{ form_end(context.form, { 'render_rest': false }) }}

            {{ include('@bolt/editcontent/_includes-data.twig') }}

            {{ widgets('editcontent_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-4 hidden-sm\">
            {{ include('@bolt/editcontent/_aside.twig') }}
        </aside>
    </div>

{% endblock page_main %}

{% block page_main_extra_content %}
    {{ include('@bolt/editcontent/_live-editor.twig') }}
{% endblock %}
", "@bolt/editcontent/editcontent.twig", "");
    }
}
