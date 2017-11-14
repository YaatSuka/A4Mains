<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e31ec4436ab35084d027fa5485ee80b695d967c255a2e50f9dd403a47dc2c6ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3b673f578a041af96073d45a2885008c0375cf9c98d5fa965fe5980cc525308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b673f578a041af96073d45a2885008c0375cf9c98d5fa965fe5980cc525308->enter($__internal_d3b673f578a041af96073d45a2885008c0375cf9c98d5fa965fe5980cc525308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_589ff29afbed55ae5775e9ac0f5d8de72b34dd8f5eb8f83a7fbd4806898a4007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589ff29afbed55ae5775e9ac0f5d8de72b34dd8f5eb8f83a7fbd4806898a4007->enter($__internal_589ff29afbed55ae5775e9ac0f5d8de72b34dd8f5eb8f83a7fbd4806898a4007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b673f578a041af96073d45a2885008c0375cf9c98d5fa965fe5980cc525308->leave($__internal_d3b673f578a041af96073d45a2885008c0375cf9c98d5fa965fe5980cc525308_prof);

        
        $__internal_589ff29afbed55ae5775e9ac0f5d8de72b34dd8f5eb8f83a7fbd4806898a4007->leave($__internal_589ff29afbed55ae5775e9ac0f5d8de72b34dd8f5eb8f83a7fbd4806898a4007_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_290e49424e78db0676a2b4136cad03c194aa9f7a2de9551c82ed72e1fd42d5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290e49424e78db0676a2b4136cad03c194aa9f7a2de9551c82ed72e1fd42d5b8->enter($__internal_290e49424e78db0676a2b4136cad03c194aa9f7a2de9551c82ed72e1fd42d5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82d129f71ed89c23db06040d72a1c73b8a0465f19a14553c5214cbe1376ae4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d129f71ed89c23db06040d72a1c73b8a0465f19a14553c5214cbe1376ae4e1->enter($__internal_82d129f71ed89c23db06040d72a1c73b8a0465f19a14553c5214cbe1376ae4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_82d129f71ed89c23db06040d72a1c73b8a0465f19a14553c5214cbe1376ae4e1->leave($__internal_82d129f71ed89c23db06040d72a1c73b8a0465f19a14553c5214cbe1376ae4e1_prof);

        
        $__internal_290e49424e78db0676a2b4136cad03c194aa9f7a2de9551c82ed72e1fd42d5b8->leave($__internal_290e49424e78db0676a2b4136cad03c194aa9f7a2de9551c82ed72e1fd42d5b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_312d9265be876c4719f5a8e69c63173d1c33cdd67be02e2e2fa78628d3a2ee26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312d9265be876c4719f5a8e69c63173d1c33cdd67be02e2e2fa78628d3a2ee26->enter($__internal_312d9265be876c4719f5a8e69c63173d1c33cdd67be02e2e2fa78628d3a2ee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fac20bed1e579536fde0548cdc90a264495da792f90e54a98782c540342112a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac20bed1e579536fde0548cdc90a264495da792f90e54a98782c540342112a9->enter($__internal_fac20bed1e579536fde0548cdc90a264495da792f90e54a98782c540342112a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_fac20bed1e579536fde0548cdc90a264495da792f90e54a98782c540342112a9->leave($__internal_fac20bed1e579536fde0548cdc90a264495da792f90e54a98782c540342112a9_prof);

        
        $__internal_312d9265be876c4719f5a8e69c63173d1c33cdd67be02e2e2fa78628d3a2ee26->leave($__internal_312d9265be876c4719f5a8e69c63173d1c33cdd67be02e2e2fa78628d3a2ee26_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
