<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_24e4494fc059e3662624de1a98e5d141df06637198e6697869999bb6572b25c2 extends Twig_Template
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
        $__internal_dbc775a7d6d85d70d1070836b5cfe10707830939f916119e02e2d25a26fbb8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc775a7d6d85d70d1070836b5cfe10707830939f916119e02e2d25a26fbb8f9->enter($__internal_dbc775a7d6d85d70d1070836b5cfe10707830939f916119e02e2d25a26fbb8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_036461e0dc9991d44f703956a34b1b9b54e650716eeb3c3091e8f13b47b173d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036461e0dc9991d44f703956a34b1b9b54e650716eeb3c3091e8f13b47b173d7->enter($__internal_036461e0dc9991d44f703956a34b1b9b54e650716eeb3c3091e8f13b47b173d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_dbc775a7d6d85d70d1070836b5cfe10707830939f916119e02e2d25a26fbb8f9->leave($__internal_dbc775a7d6d85d70d1070836b5cfe10707830939f916119e02e2d25a26fbb8f9_prof);

        
        $__internal_036461e0dc9991d44f703956a34b1b9b54e650716eeb3c3091e8f13b47b173d7->leave($__internal_036461e0dc9991d44f703956a34b1b9b54e650716eeb3c3091e8f13b47b173d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
