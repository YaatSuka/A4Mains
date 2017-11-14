<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f46d5596c3938446a3387d20f0b71b08632e27a6605f249945913bc1107a19be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97f694a4afe4e93c2225f3511532fac53349e3eea09b16e9ed1b973f971a212c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f694a4afe4e93c2225f3511532fac53349e3eea09b16e9ed1b973f971a212c->enter($__internal_97f694a4afe4e93c2225f3511532fac53349e3eea09b16e9ed1b973f971a212c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c4f21c85da846323d2ce3351d6bbd65bfd9639d01b35144bc506fc313af8667f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f21c85da846323d2ce3351d6bbd65bfd9639d01b35144bc506fc313af8667f->enter($__internal_c4f21c85da846323d2ce3351d6bbd65bfd9639d01b35144bc506fc313af8667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_97f694a4afe4e93c2225f3511532fac53349e3eea09b16e9ed1b973f971a212c->leave($__internal_97f694a4afe4e93c2225f3511532fac53349e3eea09b16e9ed1b973f971a212c_prof);

        
        $__internal_c4f21c85da846323d2ce3351d6bbd65bfd9639d01b35144bc506fc313af8667f->leave($__internal_c4f21c85da846323d2ce3351d6bbd65bfd9639d01b35144bc506fc313af8667f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fe5ac91183f312ca06f62b1567377b212ccbcf7e3934657ab3eb2a4a0353ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe5ac91183f312ca06f62b1567377b212ccbcf7e3934657ab3eb2a4a0353ac5->enter($__internal_4fe5ac91183f312ca06f62b1567377b212ccbcf7e3934657ab3eb2a4a0353ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1acd2887bfc9e53e90bced53b9b72ec27b6d3bee10ee1a6fa2b04964949b6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1acd2887bfc9e53e90bced53b9b72ec27b6d3bee10ee1a6fa2b04964949b6f9->enter($__internal_f1acd2887bfc9e53e90bced53b9b72ec27b6d3bee10ee1a6fa2b04964949b6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f1acd2887bfc9e53e90bced53b9b72ec27b6d3bee10ee1a6fa2b04964949b6f9->leave($__internal_f1acd2887bfc9e53e90bced53b9b72ec27b6d3bee10ee1a6fa2b04964949b6f9_prof);

        
        $__internal_4fe5ac91183f312ca06f62b1567377b212ccbcf7e3934657ab3eb2a4a0353ac5->leave($__internal_4fe5ac91183f312ca06f62b1567377b212ccbcf7e3934657ab3eb2a4a0353ac5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
