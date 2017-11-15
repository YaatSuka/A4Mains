<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_56f39f22daa01a9e8ea4e0af1522440a3f50a3b72f7c2a7534a2e415a49c615b extends Twig_Template
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
        $__internal_65f83572023564d9effa09a35e2f531f39e82c4a31dfa601c1b7ffc3a22f0577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f83572023564d9effa09a35e2f531f39e82c4a31dfa601c1b7ffc3a22f0577->enter($__internal_65f83572023564d9effa09a35e2f531f39e82c4a31dfa601c1b7ffc3a22f0577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d93c276eeb974b59e26ba6c46c250fd5f2ff2448e17504c062f0c53426fcab07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93c276eeb974b59e26ba6c46c250fd5f2ff2448e17504c062f0c53426fcab07->enter($__internal_d93c276eeb974b59e26ba6c46c250fd5f2ff2448e17504c062f0c53426fcab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_65f83572023564d9effa09a35e2f531f39e82c4a31dfa601c1b7ffc3a22f0577->leave($__internal_65f83572023564d9effa09a35e2f531f39e82c4a31dfa601c1b7ffc3a22f0577_prof);

        
        $__internal_d93c276eeb974b59e26ba6c46c250fd5f2ff2448e17504c062f0c53426fcab07->leave($__internal_d93c276eeb974b59e26ba6c46c250fd5f2ff2448e17504c062f0c53426fcab07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
