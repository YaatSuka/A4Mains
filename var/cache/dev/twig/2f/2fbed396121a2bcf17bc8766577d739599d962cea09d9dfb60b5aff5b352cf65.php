<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fc226d1227e84c54ed7a4983ae9a8b1e9806c7e3534b235d12aee41390f2d4c3 extends Twig_Template
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
        $__internal_968121e6af98187403682a2db5f70162d518085f3a230060201f2ef349a2bb15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968121e6af98187403682a2db5f70162d518085f3a230060201f2ef349a2bb15->enter($__internal_968121e6af98187403682a2db5f70162d518085f3a230060201f2ef349a2bb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_84a9ec566dd5b8069d3e10b85d7799d87251be11ccf67d29f26db93bb383c682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a9ec566dd5b8069d3e10b85d7799d87251be11ccf67d29f26db93bb383c682->enter($__internal_84a9ec566dd5b8069d3e10b85d7799d87251be11ccf67d29f26db93bb383c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_968121e6af98187403682a2db5f70162d518085f3a230060201f2ef349a2bb15->leave($__internal_968121e6af98187403682a2db5f70162d518085f3a230060201f2ef349a2bb15_prof);

        
        $__internal_84a9ec566dd5b8069d3e10b85d7799d87251be11ccf67d29f26db93bb383c682->leave($__internal_84a9ec566dd5b8069d3e10b85d7799d87251be11ccf67d29f26db93bb383c682_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
