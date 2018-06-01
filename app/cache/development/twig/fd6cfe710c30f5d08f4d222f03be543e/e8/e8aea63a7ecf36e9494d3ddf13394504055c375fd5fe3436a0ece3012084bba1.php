<?php

/* @bolt/exception/database/_driver.twig */
class __TwigTemplate_4b8badbdc21d792f8cc3f8027bfa220e1e3dcd7880f831cd7bc791013894c39a extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/database/_driver.twig"));

        $tags = array("if" => 5);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('escape'),
                array()
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
        echo "<h1>
    Bolt Database driver error.
</h1>

";
        // line 5
        if ((($context["subtype"] ?? null) == "missing")) {
            // line 6
            echo "    <p>
        ";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true));
            echo " was selected as the database type, but the driver does not exist or is not loaded.
    </p>
    <p>
        Please install the ";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["driver"] ?? null), "html", null, true));
            echo " driver.
    </p>
";
        }
        // line 13
        echo "
";
        // line 14
        if ((($context["subtype"] ?? null) == "parameter")) {
            // line 15
            echo "    <p>
        There is no <code>";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["parameter"] ?? null), "html", null, true));
            echo "</code> set for your database.
    </p>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((($context["subtype"] ?? null) == "unsupported")) {
            // line 21
            echo "    <p>
        ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["driver"] ?? null), "html", null, true));
            echo " was selected as the database type, but it is not supported.
    </p>
";
        }
        // line 25
        echo "
";
        // line 26
        if ((($context["subtype"] ?? null) == "insecure")) {
            // line 27
            echo "    <p>
        There is no <code>password</code> set for the database connection, and you're using user 'root'.
    </p>
    <p>
        That must surely be a mistake, right?
    </p>
    <p>
        Bolt will stubbornly refuse to run until you've set a password for 'root'.
    </p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/database/_driver.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  100 => 26,  97 => 25,  91 => 22,  88 => 21,  86 => 20,  83 => 19,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  63 => 10,  57 => 7,  54 => 6,  52 => 5,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>
    Bolt Database driver error.
</h1>

{% if subtype == 'missing' %}
    <p>
        {{ name }} was selected as the database type, but the driver does not exist or is not loaded.
    </p>
    <p>
        Please install the {{ driver }} driver.
    </p>
{% endif %}

{% if subtype == 'parameter' %}
    <p>
        There is no <code>{{ parameter }}</code> set for your database.
    </p>
{% endif %}

{% if subtype == 'unsupported' %}
    <p>
        {{ driver }} was selected as the database type, but it is not supported.
    </p>
{% endif %}

{% if subtype == 'insecure' %}
    <p>
        There is no <code>password</code> set for the database connection, and you're using user 'root'.
    </p>
    <p>
        That must surely be a mistake, right?
    </p>
    <p>
        Bolt will stubbornly refuse to run until you've set a password for 'root'.
    </p>
{% endif %}
", "@bolt/exception/database/_driver.twig", "");
    }
}
