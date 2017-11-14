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
        $__internal_4e1fade3b1b22b772ce4c71616fc8fc09c354da4d5c92d1ac6332591b10e266d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1fade3b1b22b772ce4c71616fc8fc09c354da4d5c92d1ac6332591b10e266d->enter($__internal_4e1fade3b1b22b772ce4c71616fc8fc09c354da4d5c92d1ac6332591b10e266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b9fe0e28abec2b0c51662cee866fc09f90ce64be005bd10196cffcbf1a059e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fe0e28abec2b0c51662cee866fc09f90ce64be005bd10196cffcbf1a059e61->enter($__internal_b9fe0e28abec2b0c51662cee866fc09f90ce64be005bd10196cffcbf1a059e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4e1fade3b1b22b772ce4c71616fc8fc09c354da4d5c92d1ac6332591b10e266d->leave($__internal_4e1fade3b1b22b772ce4c71616fc8fc09c354da4d5c92d1ac6332591b10e266d_prof);

        
        $__internal_b9fe0e28abec2b0c51662cee866fc09f90ce64be005bd10196cffcbf1a059e61->leave($__internal_b9fe0e28abec2b0c51662cee866fc09f90ce64be005bd10196cffcbf1a059e61_prof);

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
