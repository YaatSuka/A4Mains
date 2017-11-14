<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b0609e31db08fe80f034160e813b797ccf47ffb878ffab7b7f5405424067d022 extends Twig_Template
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
        $__internal_4332439a3f42df56c4172f39760526a05f0eb9cd47ff894fb1b1ec9c8694dce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4332439a3f42df56c4172f39760526a05f0eb9cd47ff894fb1b1ec9c8694dce3->enter($__internal_4332439a3f42df56c4172f39760526a05f0eb9cd47ff894fb1b1ec9c8694dce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_bffe3010d3049c287d7b791f318f8d52c049da469a8fd896455a15c121427ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffe3010d3049c287d7b791f318f8d52c049da469a8fd896455a15c121427ef4->enter($__internal_bffe3010d3049c287d7b791f318f8d52c049da469a8fd896455a15c121427ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_4332439a3f42df56c4172f39760526a05f0eb9cd47ff894fb1b1ec9c8694dce3->leave($__internal_4332439a3f42df56c4172f39760526a05f0eb9cd47ff894fb1b1ec9c8694dce3_prof);

        
        $__internal_bffe3010d3049c287d7b791f318f8d52c049da469a8fd896455a15c121427ef4->leave($__internal_bffe3010d3049c287d7b791f318f8d52c049da469a8fd896455a15c121427ef4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
