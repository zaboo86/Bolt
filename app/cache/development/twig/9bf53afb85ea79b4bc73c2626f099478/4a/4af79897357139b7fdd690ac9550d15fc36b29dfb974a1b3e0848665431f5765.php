<?php

/* @AuthAdmin/auth.twig */
class __TwigTemplate_4cacb5eb13adf1b395a8290debc2c90c156b15e1124fdf9f660cd6bc3402f7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@AuthAdmin/auth.twig", 3);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AuthAdmin/auth.twig"));

        $tags = array("include" => 36, "for" => 71, "set" => 72, "if" => 74, "spaceless" => 95, "macro" => 18);
        $filters = array("escape" => 75, "default" => 87, "trim" => 120, "merge" => 25);
        $functions = array("__" => 8, "include" => 45, "auth_lastseen" => 72, "path" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'for', 'set', 'if', 'spaceless', 'macro'),
                array('escape', 'default', 'trim', 'merge'),
                array('__', 'include', 'auth_lastseen', 'path')
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

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Extensions");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 8
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Auth"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 12
        echo "    Manage Site Auth Roles
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 32
        echo "
    <div class=\"row auth-bolt-container\">
        <div class=\"col-md-9\">

            ";
        // line 36
        $this->loadTemplate("_sub/_messages.twig", "@AuthAdmin/auth.twig", 36)->display($context);
        // line 37
        echo "
            <section class=\"auth-container\">

                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <h3>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Auth"));
        echo "</h3>
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@AuthAdmin/_search.twig"));
        echo "
                    </div>
                </div>

                <div class=\"auth-list\">

                    <table class=\"dashboardlisting table\" id=\"auth-table\">
                        <colgroup>
                            <col class=\"auth-column-check\">
                            <col class=\"auth-column-displayname\">
                            <col class=\"auth-column-email\">
                            <col class=\"auth-column-roles\">
                            <col class=\"auth-column-lastseen\">
                            <col class=\"auth-column-guid\">
                        </colgroup>
                        <thead>
                        <tr>
                            <th></th>
                            <th><a href=\"";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this, "column_toggle_ref", array(0 => ($context["queries"] ?? null), 1 => "displayname"), "method"));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Display Name"));
        echo "</a></th>
                            <th><a href=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this, "column_toggle_ref", array(0 => ($context["queries"] ?? null), 1 => "email"), "method"));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Email"));
        echo "</a></th>
                            <th>";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Roles"));
        echo "</th>
                            <th>";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Last Seen"));
        echo "</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class=\"auth-list-items\">
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["auth"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["auth"]) {
            // line 72
            echo "                            ";
            $context["lastseen"] = $this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getProvidersLastSeen($this->getAttribute($context["auth"], "guid", array()));
            // line 73
            echo "
                            ";
            // line 74
            if ($this->getAttribute($context["auth"], "enabled", array())) {
                $context["enabled"] = "";
            } else {
                $context["enabled"] = "strikeout";
            }
            // line 75
            echo "                            <tr class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["enabled"] ?? null), "html", null, true));
            echo "\" id=\"auth-auth[";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["auth"], "guid", array()), "html", null, true));
            echo "]\">
                                <td class=\"auth-cb\">
                                    <label>
                                        <input type=\"checkbox\"
                                               id=\"form_auth_";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true));
            echo "\"
                                               name=\"form[auth][]\"
                                               value=\"";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["auth"], "guid", array()), "html", null, true));
            echo "\">
                                    </label>
                                </td>
                                <td class=\"auth-displayname\"><a href=\"auth/edit/";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["auth"], "guid", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["auth"], "displayname", array()), "html", null, true));
            echo "</a></td>
                                <td class=\"auth-email\">";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["auth"], "email", array()), "html", null, true));
            echo "</td>
                                <td class=\"auth-roles\">
                                    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["auth"], "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["auth"], "roles", array()), array(0 => "-"))) : (array(0 => "-"))));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 88
                echo "                                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["role"], "html", null, true));
                echo "<br>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                                </td>
                                <td class=\"auth-lastseen\">
                                    <time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["lastseen"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["lastseen"] ?? null), "html", null, true));
            echo "</time>
                                </td>
                                <td class=\"auth-guid\">
                                    ";
            // line 95
            ob_start();
            // line 96
            echo "                                        <span class=\"info-pop pull-right\" style=\"background-color: inherit !important;\"
                                              data-content=\"";
            // line 97
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["auth"], "guid", array()), "html", null, true));
            echo "\"
                                              data-html=\"false\" >
                                              <i class=\"fa fa-user-md\"></i>
                                        </span>
                                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 102
            echo "                                </td>
                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
                        </tbody>
                    </table>
                </div>
            </section>
            <hr />

            ";
        // line 112
        $this->loadTemplate("@bolt/components/pager.twig", "@AuthAdmin/auth.twig", 112)->display(array("context" => ($context["pager"] ?? null)));
        // line 113
        echo "        </div>

        ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@AuthAdmin/_aside.twig"));
        echo "

    </div>

    <script>
        var baseurl = \"";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["paths"] ?? null), "bolt", array()), "/", "right"), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["authBaseUrl"] ?? null), "html", null, true));
        echo "/action\";

        var active_console;
        var active_interval;

        jQuery(document).ready(function(\$) {
            var boltExt = new AuthAdmin();
            boltExt.setMessage('useradd', '";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Adding user..."));
        echo "' );
            boltExt.setMessage('userdel', '";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Removing user(s)..."));
        echo "');
            boltExt.setMessage('userenable', '";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Enabling user(s)..."));
        echo "' );
            boltExt.setMessage('userdisable', '";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Disabling user(s)..."));
        echo "');
            boltExt.setMessage('roleadd', '";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Adding role..."));
        echo "');
            boltExt.setMessage('roledel', '";
        // line 132
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Removing role..."));
        echo "');
            boltExt.setMessage('authnotsellHeader', '";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Nothing Selected!"));
        echo "');
            boltExt.setMessage('authnotsell', '";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("You need to choose a auth."));
        echo "');
            boltExt.setMessage('rolenotsellHeader', '";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("None role Selected!"));
        echo "');
            boltExt.setMessage('rolenotsell', '";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("You need to choose a role."));
        echo "');
            boltExt.setMessage('autherrorHeader', '";
        // line 137
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Error!"));
        echo "');
            boltExt.setMessage('autherror', '";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("The server returned an error."));
        echo "');
            boltExt.setMessage('confirmdeleteHeader', '";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Confim deletion"));
        echo "');
            boltExt.setMessage('confirmdelete', '";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Are you sure you want to delete these accounts?"));
        echo "');
            boltExt.setMessage('confirmdeleteButton', '";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Yes!"));
        echo "');
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function getcolumn_toggle_ref($__queries__ = null, $__column__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "queries" => $__queries__,
            "column" => $__column__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "column_toggle_ref"));

            // line 19
            echo "    ";
            if (($this->getAttribute(($context["queries"] ?? null), "orderBy", array()) == ($context["column"] ?? null))) {
                // line 20
                echo "        ";
                if (($this->getAttribute(($context["queries"] ?? null), "order", array()) == "desc")) {
                    // line 21
                    echo "            ";
                    $context["order"] = "asc";
                    // line 22
                    echo "        ";
                } else {
                    // line 23
                    echo "            ";
                    $context["order"] = "desc";
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("orderby" => ($context["column"] ?? null), "order" => ($context["order"] ?? null)))), "html", null, true));
                echo "
    ";
            } else {
                // line 27
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("orderby" => ($context["column"] ?? null), "order" => "desc"))), "html", null, true));
                echo "
    ";
            }
            
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
        return "@AuthAdmin/auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 27,  439 => 25,  436 => 24,  433 => 23,  430 => 22,  427 => 21,  424 => 20,  421 => 19,  405 => 18,  393 => 141,  389 => 140,  385 => 139,  381 => 138,  377 => 137,  373 => 136,  369 => 135,  365 => 134,  361 => 133,  357 => 132,  353 => 131,  349 => 130,  345 => 129,  341 => 128,  337 => 127,  326 => 120,  318 => 115,  314 => 113,  312 => 112,  303 => 105,  287 => 102,  279 => 97,  276 => 96,  274 => 95,  266 => 92,  262 => 90,  253 => 88,  249 => 87,  244 => 85,  238 => 84,  232 => 81,  227 => 79,  217 => 75,  211 => 74,  208 => 73,  205 => 72,  188 => 71,  180 => 66,  176 => 65,  170 => 64,  164 => 63,  143 => 45,  137 => 42,  130 => 37,  128 => 36,  122 => 32,  116 => 31,  104 => 16,  96 => 12,  90 => 11,  80 => 8,  74 => 7,  62 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Extensions > Auth #}

{% extends \"@bolt/_base/_page-nav.twig\" %}

{% block page_nav 'Extensions' %}

{% block page_title %}
    {{ __('Auth') }}
{% endblock page_title %}

{% block page_subtitle %}
    Manage Site Auth Roles
{% endblock page_subtitle %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% macro column_toggle_ref(queries, column) %}
    {% if queries.orderBy == column %}
        {% if queries.order == 'desc' %}
            {% set order = 'asc' %}
        {% else %}
            {% set order = 'desc' %}
        {% endif %}
        {{ path(app.request.attributes.get('_route'), app.request.query.all|merge({ orderby: column, order: order })) }}
    {% else %}
        {{ path(app.request.attributes.get('_route'), app.request.query.all|merge({ orderby: column, order: 'desc' })) }}
    {% endif %}
{% endmacro %}

{% block page_main %}

    <div class=\"row auth-bolt-container\">
        <div class=\"col-md-9\">

            {% include '_sub/_messages.twig' %}

            <section class=\"auth-container\">

                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <h3>{{ __('Auth') }}</h3>
                    </div>
                    <div class=\"col-md-3\">
                        {{ include('@AuthAdmin/_search.twig') }}
                    </div>
                </div>

                <div class=\"auth-list\">

                    <table class=\"dashboardlisting table\" id=\"auth-table\">
                        <colgroup>
                            <col class=\"auth-column-check\">
                            <col class=\"auth-column-displayname\">
                            <col class=\"auth-column-email\">
                            <col class=\"auth-column-roles\">
                            <col class=\"auth-column-lastseen\">
                            <col class=\"auth-column-guid\">
                        </colgroup>
                        <thead>
                        <tr>
                            <th></th>
                            <th><a href=\"{{ _self.column_toggle_ref(queries, 'displayname') }}\">{{ __('Display Name') }}</a></th>
                            <th><a href=\"{{ _self.column_toggle_ref(queries, 'email') }}\">{{ __('Email') }}</a></th>
                            <th>{{ __('Roles') }}</th>
                            <th>{{ __('Last Seen') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class=\"auth-list-items\">
                        {% for auth in auth %}
                            {% set lastseen = auth_lastseen(auth.guid) %}

                            {% if auth.enabled %}{% set enabled = '' %}{% else %}{% set enabled = 'strikeout' %}{% endif %}
                            <tr class=\"{{ enabled }}\" id=\"auth-auth[{{ auth.guid }}]\">
                                <td class=\"auth-cb\">
                                    <label>
                                        <input type=\"checkbox\"
                                               id=\"form_auth_{{ loop.index0 }}\"
                                               name=\"form[auth][]\"
                                               value=\"{{ auth.guid }}\">
                                    </label>
                                </td>
                                <td class=\"auth-displayname\"><a href=\"auth/edit/{{ auth.guid }}\">{{ auth.displayname }}</a></td>
                                <td class=\"auth-email\">{{ auth.email }}</td>
                                <td class=\"auth-roles\">
                                    {% for role in auth.roles|default(['-']) %}
                                        {{ role }}<br>
                                    {% endfor %}
                                </td>
                                <td class=\"auth-lastseen\">
                                    <time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"{{ lastseen }}\">{{ lastseen }}</time>
                                </td>
                                <td class=\"auth-guid\">
                                    {% spaceless %}
                                        <span class=\"info-pop pull-right\" style=\"background-color: inherit !important;\"
                                              data-content=\"{{ auth.guid }}\"
                                              data-html=\"false\" >
                                              <i class=\"fa fa-user-md\"></i>
                                        </span>
                                    {% endspaceless %}
                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </div>
            </section>
            <hr />

            {% include '@bolt/components/pager.twig' with { 'context': pager } only %}
        </div>

        {{ include('@AuthAdmin/_aside.twig') }}

    </div>

    <script>
        var baseurl = \"{{ paths.bolt|trim('/', 'right') }}{{ authBaseUrl }}/action\";

        var active_console;
        var active_interval;

        jQuery(document).ready(function(\$) {
            var boltExt = new AuthAdmin();
            boltExt.setMessage('useradd', '{{__('Adding user...')}}' );
            boltExt.setMessage('userdel', '{{__('Removing user(s)...')}}');
            boltExt.setMessage('userenable', '{{__('Enabling user(s)...')}}' );
            boltExt.setMessage('userdisable', '{{__('Disabling user(s)...')}}');
            boltExt.setMessage('roleadd', '{{__('Adding role...')}}');
            boltExt.setMessage('roledel', '{{__('Removing role...')}}');
            boltExt.setMessage('authnotsellHeader', '{{__('Nothing Selected!')}}');
            boltExt.setMessage('authnotsell', '{{__('You need to choose a auth.')}}');
            boltExt.setMessage('rolenotsellHeader', '{{__('None role Selected!')}}');
            boltExt.setMessage('rolenotsell', '{{__('You need to choose a role.')}}');
            boltExt.setMessage('autherrorHeader', '{{__('Error!')}}');
            boltExt.setMessage('autherror', '{{__('The server returned an error.')}}');
            boltExt.setMessage('confirmdeleteHeader', '{{__('Confim deletion')}}');
            boltExt.setMessage('confirmdelete', '{{__('Are you sure you want to delete these accounts?')}}');
            boltExt.setMessage('confirmdeleteButton', '{{__('Yes!')}}');
        });
    </script>

{% endblock page_main %}
", "@AuthAdmin/auth.twig", "");
    }
}
