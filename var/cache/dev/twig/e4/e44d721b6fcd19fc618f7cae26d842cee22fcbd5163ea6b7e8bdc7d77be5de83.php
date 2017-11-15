<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_72a27fc920c4d27211a26754c3102d821124de760af6c557d914ddb0e0b0a776 extends Twig_Template
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
        $__internal_d54cd631fbccf3511343f4c916ef773667fa42819e935d5f7864eaec69ab1860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54cd631fbccf3511343f4c916ef773667fa42819e935d5f7864eaec69ab1860->enter($__internal_d54cd631fbccf3511343f4c916ef773667fa42819e935d5f7864eaec69ab1860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_bce9699fc5846486af2a2c2b30285ef825014acf6e8789c50e66181a2c1ced8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce9699fc5846486af2a2c2b30285ef825014acf6e8789c50e66181a2c1ced8b->enter($__internal_bce9699fc5846486af2a2c2b30285ef825014acf6e8789c50e66181a2c1ced8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_d54cd631fbccf3511343f4c916ef773667fa42819e935d5f7864eaec69ab1860->leave($__internal_d54cd631fbccf3511343f4c916ef773667fa42819e935d5f7864eaec69ab1860_prof);

        
        $__internal_bce9699fc5846486af2a2c2b30285ef825014acf6e8789c50e66181a2c1ced8b->leave($__internal_bce9699fc5846486af2a2c2b30285ef825014acf6e8789c50e66181a2c1ced8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
