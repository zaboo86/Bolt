<?php

/* pager/_base.twig */
class __TwigTemplate_8bc759a79ca6a212202f4ddb0f062b31a0b55a8d153388c483fe346ef2657725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'items' => array($this, 'block_items'),
            'render_item' => array($this, 'block_render_item'),
            'render_collapsed_item' => array($this, 'block_render_collapsed_item'),
            'item' => array($this, 'block_item'),
            'collapsed_item' => array($this, 'block_collapsed_item'),
            'first_item' => array($this, 'block_first_item'),
            'prev_item' => array($this, 'block_prev_item'),
            'next_item' => array($this, 'block_next_item'),
            'last_item' => array($this, 'block_last_item'),
            'label' => array($this, 'block_label'),
            'first_label' => array($this, 'block_first_label'),
            'prev_label' => array($this, 'block_prev_label'),
            'next_label' => array($this, 'block_next_label'),
            'last_label' => array($this, 'block_last_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pager/_base.twig"));

        $tags = array("if" => 1, "block" => 2, "with" => 12, "for" => 28, "set" => 60);
        $filters = array("default" => 1, "escape" => 83);
        $functions = array("range" => 28, "max" => 28, "min" => 28, "canonical" => 53);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'with', 'for', 'set'),
                array('default', 'escape'),
                array('range', 'max', 'min', 'canonical')
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
        if (((($this->getAttribute(($context["pager"] ?? null), "totalpages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["pager"] ?? null), "totalpages", array()), 0)) : (0)) > 1)) {
            // line 2
            echo "    ";
            $this->displayBlock('list', $context, $blocks);
        }
        // line 6
        echo "
";
        // line 8
        if (false) {
            // line 9
            echo "
";
            // line 10
            $this->displayBlock('items', $context, $blocks);
            // line 49
            echo "
";
            // line 50
            $this->displayBlock('render_item', $context, $blocks);
            // line 64
            echo "
";
            // line 65
            $this->displayBlock('render_collapsed_item', $context, $blocks);
            // line 70
            echo "
";
            // line 82
            $this->displayBlock('item', $context, $blocks);
            // line 85
            echo "
";
            // line 90
            $this->displayBlock('collapsed_item', $context, $blocks);
            // line 92
            echo "
";
            // line 97
            $this->displayBlock('first_item', $context, $blocks);
            // line 100
            echo "
";
            // line 105
            $this->displayBlock('prev_item', $context, $blocks);
            // line 108
            echo "
";
            // line 113
            $this->displayBlock('next_item', $context, $blocks);
            // line 116
            echo "
";
            // line 121
            $this->displayBlock('last_item', $context, $blocks);
            // line 124
            echo "

";
            // line 129
            $this->displayBlock('label', $context, $blocks);
            // line 132
            echo "
";
            // line 136
            $this->displayBlock('first_label', $context, $blocks);
            // line 139
            echo "
";
            // line 143
            $this->displayBlock('prev_label', $context, $blocks);
            // line 146
            echo "
";
            // line 150
            $this->displayBlock('next_label', $context, $blocks);
            // line 153
            echo "
";
            // line 157
            $this->displayBlock('last_label', $context, $blocks);
            // line 160
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 3
        echo "        ";
        $this->displayBlock("items", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_items($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "items"));

        // line 11
        echo "    ";
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) > 1)) {
            // line 12
            echo "        ";
            $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = array("i" => ($this->getAttribute(($context["pager"] ?? null), "current", array()) - 1), "prefix" => "prev_");
            if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
            // line 13
            echo "            ";
            $this->displayBlock("render_item", $context, $blocks);
            echo "
        ";
            $context = $context['_parent'];
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) > (($context["surround"] ?? null) + 1))) {
            // line 18
            echo "        ";
            $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = array("i" => 1);
            if (!is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a);
            // line 19
            echo "            ";
            $this->displayBlock("render_item", $context, $blocks);
            echo "
        ";
            $context = $context['_parent'];
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) > (($context["surround"] ?? null) + 2))) {
            // line 25
            echo "        ";
            $this->displayBlock("render_collapsed_item", $context, $blocks);
            echo "
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute(($context["pager"] ?? null), "current", array()) - ($context["surround"] ?? null))), min(($this->getAttribute(($context["pager"] ?? null), "current", array()) + ($context["surround"] ?? null)), $this->getAttribute(($context["pager"] ?? null), "totalpages", array()))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "        ";
            $this->displayBlock("render_item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) < (($this->getAttribute(($context["pager"] ?? null), "totalpages", array()) - ($context["surround"] ?? null)) - 1))) {
            // line 34
            echo "        ";
            $this->displayBlock("render_collapsed_item", $context, $blocks);
            echo "
    ";
        }
        // line 36
        echo "
    ";
        // line 37
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) < ($this->getAttribute(($context["pager"] ?? null), "totalpages", array()) - ($context["surround"] ?? null)))) {
            // line 38
            echo "        ";
            $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = array("i" => $this->getAttribute(($context["pager"] ?? null), "totalpages", array()));
            if (!is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57);
            // line 39
            echo "            ";
            $this->displayBlock("render_item", $context, $blocks);
            echo "
        ";
            $context = $context['_parent'];
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (($this->getAttribute(($context["pager"] ?? null), "current", array()) < $this->getAttribute(($context["pager"] ?? null), "totalpages", array()))) {
            // line 44
            echo "        ";
            $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = array("i" => ($this->getAttribute(($context["pager"] ?? null), "current", array()) + 1), "prefix" => "next_");
            if (!is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9);
            // line 45
            echo "            ";
            $this->displayBlock("render_item", $context, $blocks);
            echo "
        ";
            $context = $context['_parent'];
            // line 47
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_render_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "render_item"));

        // line 51
        echo "    ";
        $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = array("page" =>         // line 52
($context["i"] ?? null), "link" => ((((        // line 53
($context["i"] ?? null) == 1) && ($this->getAttribute(($context["pager"] ?? null), "for", array()) != "search"))) ? ($this->env->getRuntime('Bolt\Twig\Runtime\RoutingRuntime')->canonical()) : (($this->getAttribute(($context["pager"] ?? null), "makelink", array(), "method") . ($context["i"] ?? null)))), "active" => (        // line 54
($context["i"] ?? null) == $this->getAttribute(($context["pager"] ?? null), "current", array())), "first" => (        // line 55
($context["i"] ?? null) == 1), "last" => (        // line 56
($context["i"] ?? null) == $this->getAttribute(($context["pager"] ?? null), "totalpages", array())), "pager" =>         // line 57
($context["pager"] ?? null), "_block_prefix" => ((        // line 58
array_key_exists("prefix", $context)) ? (_twig_default_filter(($context["prefix"] ?? null), (((($context["i"] ?? null) == 1)) ? ("first_") : ((((($context["i"] ?? null) == $this->getAttribute(($context["pager"] ?? null), "totalpages", array()))) ? ("last_") : ("")))))) : ((((($context["i"] ?? null) == 1)) ? ("first_") : ((((($context["i"] ?? null) == $this->getAttribute(($context["pager"] ?? null), "totalpages", array()))) ? ("last_") : ("")))))));
        if (!is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217)) {
            throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
        }
        $context = array('_parent' => $context);
        $context = array_merge($context, $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217);
        // line 60
        echo "        ";
        $context["label"] =         $this->renderBlock((($context["_block_prefix"] ?? null) . "label"), $context, $blocks);
        // line 61
        echo "        ";
        $this->displayBlock((($context["_block_prefix"] ?? null) . "item"), $context, $blocks);
        echo "
    ";
        $context = $context['_parent'];
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_render_collapsed_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "render_collapsed_item"));

        // line 66
        echo "    ";
        $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = array();
        if (!is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105)) {
            throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
        }
        $context = array('_parent' => $context);
        $context = array_merge($context, $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105);
        // line 67
        echo "        ";
        $this->displayBlock("collapsed_item", $context, $blocks);
        echo "
    ";
        $context = $context['_parent'];
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 83
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_collapsed_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collapsed_item"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_first_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "first_item"));

        // line 98
        echo "    ";
        $this->displayBlock("item", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 105
    public function block_prev_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prev_item"));

        // line 106
        echo "    ";
        $this->displayBlock("item", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_next_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "next_item"));

        // line 114
        echo "    ";
        $this->displayBlock("item", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 121
    public function block_last_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "last_item"));

        // line 122
        echo "    ";
        $this->displayBlock("item", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 136
    public function block_first_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "first_label"));

        // line 137
        $this->displayBlock("label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_prev_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prev_label"));

        // line 144
        $this->displayBlock("label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block_next_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "next_label"));

        // line 151
        $this->displayBlock("label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 157
    public function block_last_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "last_label"));

        // line 158
        $this->displayBlock("label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pager/_base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 158,  529 => 157,  522 => 151,  516 => 150,  509 => 144,  503 => 143,  496 => 137,  490 => 136,  483 => 130,  477 => 129,  467 => 122,  461 => 121,  451 => 114,  445 => 113,  435 => 106,  429 => 105,  419 => 98,  413 => 97,  402 => 90,  392 => 83,  386 => 82,  375 => 67,  367 => 66,  361 => 65,  350 => 61,  347 => 60,  340 => 58,  339 => 57,  338 => 56,  337 => 55,  336 => 54,  335 => 53,  334 => 52,  332 => 51,  326 => 50,  318 => 47,  312 => 45,  304 => 44,  302 => 43,  299 => 42,  296 => 41,  290 => 39,  282 => 38,  280 => 37,  277 => 36,  271 => 34,  268 => 33,  265 => 31,  248 => 29,  231 => 28,  228 => 27,  222 => 25,  219 => 24,  216 => 22,  213 => 21,  207 => 19,  199 => 18,  197 => 17,  194 => 16,  191 => 15,  185 => 13,  177 => 12,  174 => 11,  168 => 10,  158 => 3,  152 => 2,  143 => 160,  141 => 157,  138 => 153,  136 => 150,  133 => 146,  131 => 143,  128 => 139,  126 => 136,  123 => 132,  121 => 129,  117 => 124,  115 => 121,  112 => 116,  110 => 113,  107 => 108,  105 => 105,  102 => 100,  100 => 97,  97 => 92,  95 => 90,  92 => 85,  90 => 82,  87 => 70,  85 => 65,  82 => 64,  80 => 50,  77 => 49,  75 => 10,  72 => 9,  70 => 8,  67 => 6,  63 => 2,  61 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pager.totalpages|default(0) > 1 %}
    {% block list %}
        {{ block('items') }}
    {% endblock %}
{% endif %}

{# Only define these blocks below, don't display them #}
{% if false %}

{% block items %}
    {% if pager.current > 1 %}
        {% with {i: pager.current - 1, prefix: 'prev_'} %}
            {{ block('render_item') }}
        {% endwith %}
    {% endif %}

    {% if pager.current > surround + 1 %}
        {% with {i: 1} %}
            {{ block('render_item') }}
        {% endwith %}
    {% endif %}

    {# start with '..' if there are more than surround + 1 before current page.. #}
    {% if pager.current > surround + 2 %}
        {{ block('render_collapsed_item') }}
    {% endif %}

    {% for i in max(1, pager.current - surround)..min(pager.current + surround, pager.totalpages) %}
        {{ block('render_item') }}
    {% endfor %}

    {# end with '..' if there are more than surround + 1 after current page.. #}
    {% if pager.current < (pager.totalpages - surround - 1) %}
        {{ block('render_collapsed_item') }}
    {% endif %}

    {% if pager.current < pager.totalpages - surround %}
        {% with {i: pager.totalpages} %}
            {{ block('render_item') }}
        {% endwith %}
    {% endif %}

    {% if pager.current < pager.totalpages %}
        {% with {i: pager.current + 1, prefix: 'next_'} %}
            {{ block('render_item') }}
        {% endwith %}
    {% endif %}
{% endblock %}

{% block render_item %}
    {% with {
        page: i,
        link: (i == 1 and pager.for != 'search') ? canonical() : pager.makelink() ~ i,
        active: i == pager.current,
        first: i == 1,
        last: i == pager.totalpages,
        pager: pager,
        _block_prefix: prefix|default(i == 1 ? 'first_' : i == pager.totalpages ? 'last_' : '')
    } only %}
        {% set label = block(_block_prefix ~ 'label') %}
        {{ block(_block_prefix ~ 'item') }}
    {% endwith %}
{% endblock %}

{% block render_collapsed_item %}
    {% with {} only %}
        {{ block('collapsed_item') }}
    {% endwith %}
{% endblock %}

{#
 # Normal item block.
 #
 # Context (variables you can use):
 #   label: string - the item label (normally page number)
 #   link: string - url
 #   page: string - the page number (favor label over this)
 #   first: bool - whether this is the first item
 #   last: bool - whether this is the last item
 #   active: bool - whether this item is the current page
 #}
{% block item %}
    {{ label }}
{% endblock %}

{#
 # The item to show when when omitting pages, normally labeled as an ellipsis.
 # No context (variables) is given to this block.
 #}
{% block collapsed_item %}
{% endblock %}

{#
 # The item for the first page.
 # See item block for context.
 #}
{% block first_item %}
    {{ block('item') }}
{% endblock %}

{#
 # The item for the previous page.
 # See item block for context.
 #}
{% block prev_item %}
    {{ block('item') }}
{% endblock %}

{#
 # The item for the next page.
 # See item block for context.
 #}
{% block next_item %}
    {{ block('item') }}
{% endblock %}

{#
 # The item for the last page.
 # See item block for context.
 #}
{% block last_item %}
    {{ block('item') }}
{% endblock %}


{#
 # The label for normal pages.
 #}
{% block label %}
    {{- page -}}
{% endblock %}

{#
 # The label for the first page.
 #}
{% block first_label %}
    {{- block('label') -}}
{% endblock %}

{#
 # The label for the previous page.
 #}
{% block prev_label %}
    {{- block('label') -}}
{% endblock %}

{#
 # The label for the next page.
 #}
{% block next_label %}
    {{- block('label') -}}
{% endblock %}

{#
 # The label for the last page.
 #}
{% block last_label %}
    {{- block('label') -}}
{% endblock %}

{% endif %}
", "pager/_base.twig", "");
    }
}
