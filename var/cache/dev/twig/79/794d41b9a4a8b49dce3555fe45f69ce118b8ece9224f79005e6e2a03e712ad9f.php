<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71d97cb57fdf4c0ee1cc3608dfc0f27ecbdff962e0a0959482f6d21b4e43c5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ba3a77d9bfd89667691de07c326f976f3575ed72a307685d4060b11e878683e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba3a77d9bfd89667691de07c326f976f3575ed72a307685d4060b11e878683e->enter($__internal_3ba3a77d9bfd89667691de07c326f976f3575ed72a307685d4060b11e878683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b7bc059d36799bada2c6c3eb2a4aebabda48e28f6d2c6776903b32ff915f527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7bc059d36799bada2c6c3eb2a4aebabda48e28f6d2c6776903b32ff915f527->enter($__internal_5b7bc059d36799bada2c6c3eb2a4aebabda48e28f6d2c6776903b32ff915f527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba3a77d9bfd89667691de07c326f976f3575ed72a307685d4060b11e878683e->leave($__internal_3ba3a77d9bfd89667691de07c326f976f3575ed72a307685d4060b11e878683e_prof);

        
        $__internal_5b7bc059d36799bada2c6c3eb2a4aebabda48e28f6d2c6776903b32ff915f527->leave($__internal_5b7bc059d36799bada2c6c3eb2a4aebabda48e28f6d2c6776903b32ff915f527_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6c49822eda8e23c07f1709393e8f876a85042ca8425e63ef40c76b33bbbfb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c49822eda8e23c07f1709393e8f876a85042ca8425e63ef40c76b33bbbfb42->enter($__internal_c6c49822eda8e23c07f1709393e8f876a85042ca8425e63ef40c76b33bbbfb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88f568a89ed11e880a250d93e6ca3f278a110b9cb6d68eadfdc72c278b984e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f568a89ed11e880a250d93e6ca3f278a110b9cb6d68eadfdc72c278b984e38->enter($__internal_88f568a89ed11e880a250d93e6ca3f278a110b9cb6d68eadfdc72c278b984e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88f568a89ed11e880a250d93e6ca3f278a110b9cb6d68eadfdc72c278b984e38->leave($__internal_88f568a89ed11e880a250d93e6ca3f278a110b9cb6d68eadfdc72c278b984e38_prof);

        
        $__internal_c6c49822eda8e23c07f1709393e8f876a85042ca8425e63ef40c76b33bbbfb42->leave($__internal_c6c49822eda8e23c07f1709393e8f876a85042ca8425e63ef40c76b33bbbfb42_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22186aff04e831530ce7aecbf0a01b229c733ebc35f3e0f1c231702f5a5c63fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22186aff04e831530ce7aecbf0a01b229c733ebc35f3e0f1c231702f5a5c63fa->enter($__internal_22186aff04e831530ce7aecbf0a01b229c733ebc35f3e0f1c231702f5a5c63fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4ed6e0da36cde40fe2099425966c72054d2c0db1158eabe496d262fce99ce4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ed6e0da36cde40fe2099425966c72054d2c0db1158eabe496d262fce99ce4d->enter($__internal_d4ed6e0da36cde40fe2099425966c72054d2c0db1158eabe496d262fce99ce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4ed6e0da36cde40fe2099425966c72054d2c0db1158eabe496d262fce99ce4d->leave($__internal_d4ed6e0da36cde40fe2099425966c72054d2c0db1158eabe496d262fce99ce4d_prof);

        
        $__internal_22186aff04e831530ce7aecbf0a01b229c733ebc35f3e0f1c231702f5a5c63fa->leave($__internal_22186aff04e831530ce7aecbf0a01b229c733ebc35f3e0f1c231702f5a5c63fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abd55dccaea21e9a50935a1e141ecf4b9bd07aaca1da7055be7a74760d310b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd55dccaea21e9a50935a1e141ecf4b9bd07aaca1da7055be7a74760d310b92->enter($__internal_abd55dccaea21e9a50935a1e141ecf4b9bd07aaca1da7055be7a74760d310b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cbd026fb8dac1f141f02822f273924361e75840bb332d108cda381f2dc1e9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbd026fb8dac1f141f02822f273924361e75840bb332d108cda381f2dc1e9bf->enter($__internal_6cbd026fb8dac1f141f02822f273924361e75840bb332d108cda381f2dc1e9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6cbd026fb8dac1f141f02822f273924361e75840bb332d108cda381f2dc1e9bf->leave($__internal_6cbd026fb8dac1f141f02822f273924361e75840bb332d108cda381f2dc1e9bf_prof);

        
        $__internal_abd55dccaea21e9a50935a1e141ecf4b9bd07aaca1da7055be7a74760d310b92->leave($__internal_abd55dccaea21e9a50935a1e141ecf4b9bd07aaca1da7055be7a74760d310b92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
