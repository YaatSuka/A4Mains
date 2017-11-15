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
        $__internal_0f78eac05f7c02f26582e33ae327803f2acdb71f91a6868c9bb274427394593e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f78eac05f7c02f26582e33ae327803f2acdb71f91a6868c9bb274427394593e->enter($__internal_0f78eac05f7c02f26582e33ae327803f2acdb71f91a6868c9bb274427394593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c6aa2ef979b45dc80ec702401286fc24fdadac2d20307ad0f90ccb5afe16ed49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aa2ef979b45dc80ec702401286fc24fdadac2d20307ad0f90ccb5afe16ed49->enter($__internal_c6aa2ef979b45dc80ec702401286fc24fdadac2d20307ad0f90ccb5afe16ed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_0f78eac05f7c02f26582e33ae327803f2acdb71f91a6868c9bb274427394593e->leave($__internal_0f78eac05f7c02f26582e33ae327803f2acdb71f91a6868c9bb274427394593e_prof);

        
        $__internal_c6aa2ef979b45dc80ec702401286fc24fdadac2d20307ad0f90ccb5afe16ed49->leave($__internal_c6aa2ef979b45dc80ec702401286fc24fdadac2d20307ad0f90ccb5afe16ed49_prof);

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
