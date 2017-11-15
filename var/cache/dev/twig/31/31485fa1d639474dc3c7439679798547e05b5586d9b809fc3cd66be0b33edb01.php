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
        $__internal_9653ee7b9f6c275fb4d2ddfb063f06b83e33278ee001f32ffdb9fdee829768aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9653ee7b9f6c275fb4d2ddfb063f06b83e33278ee001f32ffdb9fdee829768aa->enter($__internal_9653ee7b9f6c275fb4d2ddfb063f06b83e33278ee001f32ffdb9fdee829768aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_56605c1e3df0f33b5a0297a8cb86b13d6a878cc9e4fd11e90222ed6bcfafd2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56605c1e3df0f33b5a0297a8cb86b13d6a878cc9e4fd11e90222ed6bcfafd2a4->enter($__internal_56605c1e3df0f33b5a0297a8cb86b13d6a878cc9e4fd11e90222ed6bcfafd2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9653ee7b9f6c275fb4d2ddfb063f06b83e33278ee001f32ffdb9fdee829768aa->leave($__internal_9653ee7b9f6c275fb4d2ddfb063f06b83e33278ee001f32ffdb9fdee829768aa_prof);

        
        $__internal_56605c1e3df0f33b5a0297a8cb86b13d6a878cc9e4fd11e90222ed6bcfafd2a4->leave($__internal_56605c1e3df0f33b5a0297a8cb86b13d6a878cc9e4fd11e90222ed6bcfafd2a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0ba07bfd697d8f0a14523bd6648a15da0627a3582068864e12b2e0d36a69db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ba07bfd697d8f0a14523bd6648a15da0627a3582068864e12b2e0d36a69db3->enter($__internal_b0ba07bfd697d8f0a14523bd6648a15da0627a3582068864e12b2e0d36a69db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8dd2bc0d4969938e33425cc6ab4ebbf92d01537c428d7bdc90bd1b9d514069b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd2bc0d4969938e33425cc6ab4ebbf92d01537c428d7bdc90bd1b9d514069b0->enter($__internal_8dd2bc0d4969938e33425cc6ab4ebbf92d01537c428d7bdc90bd1b9d514069b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8dd2bc0d4969938e33425cc6ab4ebbf92d01537c428d7bdc90bd1b9d514069b0->leave($__internal_8dd2bc0d4969938e33425cc6ab4ebbf92d01537c428d7bdc90bd1b9d514069b0_prof);

        
        $__internal_b0ba07bfd697d8f0a14523bd6648a15da0627a3582068864e12b2e0d36a69db3->leave($__internal_b0ba07bfd697d8f0a14523bd6648a15da0627a3582068864e12b2e0d36a69db3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ba10e1c1909597ddc79489e62bfb082a3372fdd9a6d22a4dee3b69d2ee5dc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba10e1c1909597ddc79489e62bfb082a3372fdd9a6d22a4dee3b69d2ee5dc5d->enter($__internal_2ba10e1c1909597ddc79489e62bfb082a3372fdd9a6d22a4dee3b69d2ee5dc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaa4c55891c3362d7e415e4b3eae3325b13051d2f7b86694a12c4138140b524c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa4c55891c3362d7e415e4b3eae3325b13051d2f7b86694a12c4138140b524c->enter($__internal_aaa4c55891c3362d7e415e4b3eae3325b13051d2f7b86694a12c4138140b524c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aaa4c55891c3362d7e415e4b3eae3325b13051d2f7b86694a12c4138140b524c->leave($__internal_aaa4c55891c3362d7e415e4b3eae3325b13051d2f7b86694a12c4138140b524c_prof);

        
        $__internal_2ba10e1c1909597ddc79489e62bfb082a3372fdd9a6d22a4dee3b69d2ee5dc5d->leave($__internal_2ba10e1c1909597ddc79489e62bfb082a3372fdd9a6d22a4dee3b69d2ee5dc5d_prof);

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
