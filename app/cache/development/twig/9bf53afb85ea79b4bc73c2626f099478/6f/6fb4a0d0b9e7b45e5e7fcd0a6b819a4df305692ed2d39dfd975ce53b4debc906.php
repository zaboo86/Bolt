<?php

/* @AuthAdmin/_aside.twig */
class __TwigTemplate_68f9ed7629598af259ad272a3125016e958175572845f793eea44d7df39b8375 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AuthAdmin/_aside.twig"));

        $tags = array("for" => 59);
        $filters = array("escape" => 60);
        $functions = array("__" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('escape'),
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
        echo "<aside class=\"col-md-3\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Admin Options"));
        echo "</div>
        <div class=\"panel-body\">

            <h4><strong>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Users"));
        echo "</strong></h4>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" href=\"auth/add\">
                        <i class=\"fa fa-wrench\"></i> ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Add User"));
        echo "
                    </a>
                </div>

                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-user-del\">
                        <i class=\"fa fa-wrench\"></i> ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Delete User"));
        echo "
                    </a>
                </div>
            </div>

            <br><br>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-user-enable\">
                        <i class=\"fa fa-wrench\"></i> ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Enable"));
        echo "
                    </a>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-user-disable\">
                        <i class=\"fa fa-wrench\"></i> ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Disable"));
        echo "
                    </a>
                </div>
            </div>

            <hr>

            <h4><strong>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Roles"));
        echo "</strong></h4>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-role-add\">
                        <i class=\"fa fa-check-square-o\"></i> ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Add role"));
        echo "
                    </a>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-role-del\">
                        <i class=\"fa fa-minus-square-o\"></i> ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Remove role"));
        echo "
                    </a>
                </div>
            </div>

            <br>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <select class=\"form-control auth-select-roles\" title=\"Select Roles\">
                        <option value=\"\"></option>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 60
            echo "                            <option value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans($this->getAttribute($context["role"], "displayname", array())));
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </select>
                </div>
            </div>

            <hr>

        </div>
    </div>
</aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@AuthAdmin/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  137 => 60,  133 => 59,  119 => 48,  111 => 43,  104 => 39,  94 => 32,  86 => 27,  73 => 17,  64 => 11,  56 => 6,  50 => 3,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"col-md-3\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>{{ __('Admin Options') }}</div>
        <div class=\"panel-body\">

            <h4><strong>{{ __('Users') }}</strong></h4>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" href=\"auth/add\">
                        <i class=\"fa fa-wrench\"></i> {{ __('Add User') }}
                    </a>
                </div>

                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-user-del\">
                        <i class=\"fa fa-wrench\"></i> {{ __('Delete User') }}
                    </a>
                </div>
            </div>

            <br><br>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-user-enable\">
                        <i class=\"fa fa-wrench\"></i> {{ __('Enable') }}
                    </a>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-user-disable\">
                        <i class=\"fa fa-wrench\"></i> {{ __('Disable') }}
                    </a>
                </div>
            </div>

            <hr>

            <h4><strong>{{ __('Roles') }}</strong></h4>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-role-add\">
                        <i class=\"fa fa-check-square-o\"></i> {{ __('Add role') }}
                    </a>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-tertiary\" data-action=\"auth-role-del\">
                        <i class=\"fa fa-minus-square-o\"></i> {{ __('Remove role') }}
                    </a>
                </div>
            </div>

            <br>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <select class=\"form-control auth-select-roles\" title=\"Select Roles\">
                        <option value=\"\"></option>
                        {% for role in roles %}
                            <option value=\"{{ role.name }}\">{{ __(role.displayname) }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <hr>

        </div>
    </div>
</aside>
", "@AuthAdmin/_aside.twig", "");
    }
}
