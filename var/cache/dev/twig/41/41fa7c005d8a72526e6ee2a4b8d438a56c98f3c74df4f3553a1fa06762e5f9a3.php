<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_217cd71d0b19b0151868bc5e66ae793e8db0a0f8ec34bfe37e838316aaaa93d1 extends Twig_Template
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
        $__internal_a877a9e7b85e42cd1377f3ed845b0ebb6053d01164107a0945ece6920b93ea31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a877a9e7b85e42cd1377f3ed845b0ebb6053d01164107a0945ece6920b93ea31->enter($__internal_a877a9e7b85e42cd1377f3ed845b0ebb6053d01164107a0945ece6920b93ea31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_40347012460f03523c50b57d671d99d778f339f046bbed843af2d72fd7de4fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40347012460f03523c50b57d671d99d778f339f046bbed843af2d72fd7de4fd9->enter($__internal_40347012460f03523c50b57d671d99d778f339f046bbed843af2d72fd7de4fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a877a9e7b85e42cd1377f3ed845b0ebb6053d01164107a0945ece6920b93ea31->leave($__internal_a877a9e7b85e42cd1377f3ed845b0ebb6053d01164107a0945ece6920b93ea31_prof);

        
        $__internal_40347012460f03523c50b57d671d99d778f339f046bbed843af2d72fd7de4fd9->leave($__internal_40347012460f03523c50b57d671d99d778f339f046bbed843af2d72fd7de4fd9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
