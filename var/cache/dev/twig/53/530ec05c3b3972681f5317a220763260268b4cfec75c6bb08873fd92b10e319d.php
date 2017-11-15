<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1f880aeb704456c26fc73c87287d02bd5a12efef3c066e65a7f8fa2ab8e2893d extends Twig_Template
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
        $__internal_fba59f9f7de7fae78ff213aaf5fa8758de50bac42d620f35639cd2859484f8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba59f9f7de7fae78ff213aaf5fa8758de50bac42d620f35639cd2859484f8c4->enter($__internal_fba59f9f7de7fae78ff213aaf5fa8758de50bac42d620f35639cd2859484f8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_84c3208e8e4e5047c56f7e9b96a2b2a5e0ac6120941e2e14ed6e7d7f4420cea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c3208e8e4e5047c56f7e9b96a2b2a5e0ac6120941e2e14ed6e7d7f4420cea1->enter($__internal_84c3208e8e4e5047c56f7e9b96a2b2a5e0ac6120941e2e14ed6e7d7f4420cea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_fba59f9f7de7fae78ff213aaf5fa8758de50bac42d620f35639cd2859484f8c4->leave($__internal_fba59f9f7de7fae78ff213aaf5fa8758de50bac42d620f35639cd2859484f8c4_prof);

        
        $__internal_84c3208e8e4e5047c56f7e9b96a2b2a5e0ac6120941e2e14ed6e7d7f4420cea1->leave($__internal_84c3208e8e4e5047c56f7e9b96a2b2a5e0ac6120941e2e14ed6e7d7f4420cea1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
