<?php

/* AQMArtBundle:Admin:index.html.twig */
class __TwigTemplate_d5379b3160f3046419578e6388ba46aa804ac5351896b7c3c917d2bba3b409db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba5c13b611b54a543f2edebb25c030c23196ac1c124f603c0a0e05303593320f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5c13b611b54a543f2edebb25c030c23196ac1c124f603c0a0e05303593320f->enter($__internal_ba5c13b611b54a543f2edebb25c030c23196ac1c124f603c0a0e05303593320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:index.html.twig"));

        $__internal_4e86f8f0ce62af8afda1b21eb9b8fef45370babd19af6e1c9fad008c96753c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e86f8f0ce62af8afda1b21eb9b8fef45370babd19af6e1c9fad008c96753c16->enter($__internal_4e86f8f0ce62af8afda1b21eb9b8fef45370babd19af6e1c9fad008c96753c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5c13b611b54a543f2edebb25c030c23196ac1c124f603c0a0e05303593320f->leave($__internal_ba5c13b611b54a543f2edebb25c030c23196ac1c124f603c0a0e05303593320f_prof);

        
        $__internal_4e86f8f0ce62af8afda1b21eb9b8fef45370babd19af6e1c9fad008c96753c16->leave($__internal_4e86f8f0ce62af8afda1b21eb9b8fef45370babd19af6e1c9fad008c96753c16_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}", "AQMArtBundle:Admin:index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Admin/index.html.twig");
    }
}
