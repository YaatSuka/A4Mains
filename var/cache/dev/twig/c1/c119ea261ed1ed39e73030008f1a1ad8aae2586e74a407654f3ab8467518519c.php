<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_71ce4c50c33149957d9998f204c898015a6f4c8550e722d4b4b4d63b066c0856 extends Twig_Template
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
        $__internal_980479ccf8160c345b5a0f5a3bc0927b74501a6212528f59c4ae659275602750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980479ccf8160c345b5a0f5a3bc0927b74501a6212528f59c4ae659275602750->enter($__internal_980479ccf8160c345b5a0f5a3bc0927b74501a6212528f59c4ae659275602750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_cd1be37099f465dcb83605b27c45e599ace1f166d671b3e783639fc21574a652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1be37099f465dcb83605b27c45e599ace1f166d671b3e783639fc21574a652->enter($__internal_cd1be37099f465dcb83605b27c45e599ace1f166d671b3e783639fc21574a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_980479ccf8160c345b5a0f5a3bc0927b74501a6212528f59c4ae659275602750->leave($__internal_980479ccf8160c345b5a0f5a3bc0927b74501a6212528f59c4ae659275602750_prof);

        
        $__internal_cd1be37099f465dcb83605b27c45e599ace1f166d671b3e783639fc21574a652->leave($__internal_cd1be37099f465dcb83605b27c45e599ace1f166d671b3e783639fc21574a652_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
