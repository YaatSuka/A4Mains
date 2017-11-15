<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7d6aad03d6946d4dc0f204eff7ae9d64c10c9b4857719ad5679205bcb25f1046 extends Twig_Template
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
        $__internal_bef9e19f3d405c0dd9150fa8409084279b52559f0a82ce3971cd9f213197dc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef9e19f3d405c0dd9150fa8409084279b52559f0a82ce3971cd9f213197dc16->enter($__internal_bef9e19f3d405c0dd9150fa8409084279b52559f0a82ce3971cd9f213197dc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_46e7f2a85485da0cd42be52517d9aaf351dc64ff0f1d80f485b2daaecc3fc47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e7f2a85485da0cd42be52517d9aaf351dc64ff0f1d80f485b2daaecc3fc47b->enter($__internal_46e7f2a85485da0cd42be52517d9aaf351dc64ff0f1d80f485b2daaecc3fc47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bef9e19f3d405c0dd9150fa8409084279b52559f0a82ce3971cd9f213197dc16->leave($__internal_bef9e19f3d405c0dd9150fa8409084279b52559f0a82ce3971cd9f213197dc16_prof);

        
        $__internal_46e7f2a85485da0cd42be52517d9aaf351dc64ff0f1d80f485b2daaecc3fc47b->leave($__internal_46e7f2a85485da0cd42be52517d9aaf351dc64ff0f1d80f485b2daaecc3fc47b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46cc67cd3a91c529c6ae142b03cb83364c84a6a534155c02f2fb65d8d69e9e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46cc67cd3a91c529c6ae142b03cb83364c84a6a534155c02f2fb65d8d69e9e03->enter($__internal_46cc67cd3a91c529c6ae142b03cb83364c84a6a534155c02f2fb65d8d69e9e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6f9c12c7d7091891441b1a8a4eb37b6a87961d19f738ea285b5ced4778eb206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f9c12c7d7091891441b1a8a4eb37b6a87961d19f738ea285b5ced4778eb206->enter($__internal_f6f9c12c7d7091891441b1a8a4eb37b6a87961d19f738ea285b5ced4778eb206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f6f9c12c7d7091891441b1a8a4eb37b6a87961d19f738ea285b5ced4778eb206->leave($__internal_f6f9c12c7d7091891441b1a8a4eb37b6a87961d19f738ea285b5ced4778eb206_prof);

        
        $__internal_46cc67cd3a91c529c6ae142b03cb83364c84a6a534155c02f2fb65d8d69e9e03->leave($__internal_46cc67cd3a91c529c6ae142b03cb83364c84a6a534155c02f2fb65d8d69e9e03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
