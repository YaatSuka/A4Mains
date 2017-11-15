<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bbec385e326c91f7b4f7550ab0805e1814ddfce3c1d10293ee0ba3a20f2b8412 extends Twig_Template
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
        $__internal_e3ca5e4e39fa2747fcff339ffa03ee9821cec3acd8656065a19b19a1a6dc726c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ca5e4e39fa2747fcff339ffa03ee9821cec3acd8656065a19b19a1a6dc726c->enter($__internal_e3ca5e4e39fa2747fcff339ffa03ee9821cec3acd8656065a19b19a1a6dc726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f28ada08f388b1cc8e2b8fdc616a21b63a7213691d274cb9375adddbd803db02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28ada08f388b1cc8e2b8fdc616a21b63a7213691d274cb9375adddbd803db02->enter($__internal_f28ada08f388b1cc8e2b8fdc616a21b63a7213691d274cb9375adddbd803db02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e3ca5e4e39fa2747fcff339ffa03ee9821cec3acd8656065a19b19a1a6dc726c->leave($__internal_e3ca5e4e39fa2747fcff339ffa03ee9821cec3acd8656065a19b19a1a6dc726c_prof);

        
        $__internal_f28ada08f388b1cc8e2b8fdc616a21b63a7213691d274cb9375adddbd803db02->leave($__internal_f28ada08f388b1cc8e2b8fdc616a21b63a7213691d274cb9375adddbd803db02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
