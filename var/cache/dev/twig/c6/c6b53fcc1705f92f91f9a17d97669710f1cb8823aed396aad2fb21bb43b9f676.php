<?php

/* @AQMArt/Article/index.html.twig */
class __TwigTemplate_4f1319fd2ace7bfaa926184987a7b8b262c15ca73ab5291a8fa41e0eeed9d7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Article/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a970bcab40a005f398bd583376b243cd2953bfbbe4d20f00056ed28f49f97dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a970bcab40a005f398bd583376b243cd2953bfbbe4d20f00056ed28f49f97dc1->enter($__internal_a970bcab40a005f398bd583376b243cd2953bfbbe4d20f00056ed28f49f97dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Article/index.html.twig"));

        $__internal_9127334879e10494a7f0d1db455e3cf9984e5d25fd07f6bf27e477ecacb51061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9127334879e10494a7f0d1db455e3cf9984e5d25fd07f6bf27e477ecacb51061->enter($__internal_9127334879e10494a7f0d1db455e3cf9984e5d25fd07f6bf27e477ecacb51061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a970bcab40a005f398bd583376b243cd2953bfbbe4d20f00056ed28f49f97dc1->leave($__internal_a970bcab40a005f398bd583376b243cd2953bfbbe4d20f00056ed28f49f97dc1_prof);

        
        $__internal_9127334879e10494a7f0d1db455e3cf9984e5d25fd07f6bf27e477ecacb51061->leave($__internal_9127334879e10494a7f0d1db455e3cf9984e5d25fd07f6bf27e477ecacb51061_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a13ff90bfcc600b281d194e6c7e7990266c5671b2a5b054b1e4e5e2f03744390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13ff90bfcc600b281d194e6c7e7990266c5671b2a5b054b1e4e5e2f03744390->enter($__internal_a13ff90bfcc600b281d194e6c7e7990266c5671b2a5b054b1e4e5e2f03744390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b681e99f7cda70bce2c263cf714f76cfdc56b13c678e84186f3f9665a8f4937c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b681e99f7cda70bce2c263cf714f76cfdc56b13c678e84186f3f9665a8f4937c->enter($__internal_b681e99f7cda70bce2c263cf714f76cfdc56b13c678e84186f3f9665a8f4937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Interface pour articles à concevoir
";
        
        $__internal_b681e99f7cda70bce2c263cf714f76cfdc56b13c678e84186f3f9665a8f4937c->leave($__internal_b681e99f7cda70bce2c263cf714f76cfdc56b13c678e84186f3f9665a8f4937c_prof);

        
        $__internal_a13ff90bfcc600b281d194e6c7e7990266c5671b2a5b054b1e4e5e2f03744390->leave($__internal_a13ff90bfcc600b281d194e6c7e7990266c5671b2a5b054b1e4e5e2f03744390_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AQMArtBundle::layout.html.twig' %}

{% block body %}
    Interface pour articles à concevoir
{% endblock %}", "@AQMArt/Article/index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Article\\index.html.twig");
    }
}
