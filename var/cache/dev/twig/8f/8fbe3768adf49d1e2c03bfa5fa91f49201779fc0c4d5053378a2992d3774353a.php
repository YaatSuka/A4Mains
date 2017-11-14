<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0d7c490eb48b96e44bf2dca197a8681ba506dd387d5e9d59f197503e73967822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e2be3a3fc41961d8774af2c986f1980ebc56c9709dd6f2f6c00f930179bad34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2be3a3fc41961d8774af2c986f1980ebc56c9709dd6f2f6c00f930179bad34->enter($__internal_5e2be3a3fc41961d8774af2c986f1980ebc56c9709dd6f2f6c00f930179bad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f363a440fee08937ff905bf2ba7ace788a146f06cb258b4cd3938c24e165cc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f363a440fee08937ff905bf2ba7ace788a146f06cb258b4cd3938c24e165cc04->enter($__internal_f363a440fee08937ff905bf2ba7ace788a146f06cb258b4cd3938c24e165cc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2be3a3fc41961d8774af2c986f1980ebc56c9709dd6f2f6c00f930179bad34->leave($__internal_5e2be3a3fc41961d8774af2c986f1980ebc56c9709dd6f2f6c00f930179bad34_prof);

        
        $__internal_f363a440fee08937ff905bf2ba7ace788a146f06cb258b4cd3938c24e165cc04->leave($__internal_f363a440fee08937ff905bf2ba7ace788a146f06cb258b4cd3938c24e165cc04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a5470940b38020e1472f6ba8090bd02ee826833549b4344fd4858f23fc94086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5470940b38020e1472f6ba8090bd02ee826833549b4344fd4858f23fc94086->enter($__internal_7a5470940b38020e1472f6ba8090bd02ee826833549b4344fd4858f23fc94086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bf3181e1c917ba0d63d36079ac32d70536ab030ef873a0b63e748fa36b0335f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf3181e1c917ba0d63d36079ac32d70536ab030ef873a0b63e748fa36b0335f->enter($__internal_0bf3181e1c917ba0d63d36079ac32d70536ab030ef873a0b63e748fa36b0335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bf3181e1c917ba0d63d36079ac32d70536ab030ef873a0b63e748fa36b0335f->leave($__internal_0bf3181e1c917ba0d63d36079ac32d70536ab030ef873a0b63e748fa36b0335f_prof);

        
        $__internal_7a5470940b38020e1472f6ba8090bd02ee826833549b4344fd4858f23fc94086->leave($__internal_7a5470940b38020e1472f6ba8090bd02ee826833549b4344fd4858f23fc94086_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc23438bfff6c97a9ddf723b4f99d93747301fb87c7989a5ee640072a9a35e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc23438bfff6c97a9ddf723b4f99d93747301fb87c7989a5ee640072a9a35e13->enter($__internal_dc23438bfff6c97a9ddf723b4f99d93747301fb87c7989a5ee640072a9a35e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5eeef18b0ad03ed00405386948ff27190aae1ca93c7c3dfde399dc4ea2a9b87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eeef18b0ad03ed00405386948ff27190aae1ca93c7c3dfde399dc4ea2a9b87d->enter($__internal_5eeef18b0ad03ed00405386948ff27190aae1ca93c7c3dfde399dc4ea2a9b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5eeef18b0ad03ed00405386948ff27190aae1ca93c7c3dfde399dc4ea2a9b87d->leave($__internal_5eeef18b0ad03ed00405386948ff27190aae1ca93c7c3dfde399dc4ea2a9b87d_prof);

        
        $__internal_dc23438bfff6c97a9ddf723b4f99d93747301fb87c7989a5ee640072a9a35e13->leave($__internal_dc23438bfff6c97a9ddf723b4f99d93747301fb87c7989a5ee640072a9a35e13_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
