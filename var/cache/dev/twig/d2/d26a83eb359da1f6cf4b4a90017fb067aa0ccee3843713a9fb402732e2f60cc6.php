<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_846f4d6a5f140421227ef11888d3bc766854ea28cafa07c63abc4ef17a53a99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_44605fa46b4893ddd62187b5d2f6aa80925270fa8edd0a00dcaf9d688eb81366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44605fa46b4893ddd62187b5d2f6aa80925270fa8edd0a00dcaf9d688eb81366->enter($__internal_44605fa46b4893ddd62187b5d2f6aa80925270fa8edd0a00dcaf9d688eb81366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_49c68ff5cc902454c135a7e1a109a9cc3b4d215b20f96a2c19a05389765694a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c68ff5cc902454c135a7e1a109a9cc3b4d215b20f96a2c19a05389765694a7->enter($__internal_49c68ff5cc902454c135a7e1a109a9cc3b4d215b20f96a2c19a05389765694a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44605fa46b4893ddd62187b5d2f6aa80925270fa8edd0a00dcaf9d688eb81366->leave($__internal_44605fa46b4893ddd62187b5d2f6aa80925270fa8edd0a00dcaf9d688eb81366_prof);

        
        $__internal_49c68ff5cc902454c135a7e1a109a9cc3b4d215b20f96a2c19a05389765694a7->leave($__internal_49c68ff5cc902454c135a7e1a109a9cc3b4d215b20f96a2c19a05389765694a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7393d41d018cc567849f458f2ce487998fb8bbfffba48d8cd4c44704e4dfef39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7393d41d018cc567849f458f2ce487998fb8bbfffba48d8cd4c44704e4dfef39->enter($__internal_7393d41d018cc567849f458f2ce487998fb8bbfffba48d8cd4c44704e4dfef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1a685815d53b3f190851102d06669e92ce7c2beae55e6fc30e8c47e30867b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a685815d53b3f190851102d06669e92ce7c2beae55e6fc30e8c47e30867b93->enter($__internal_f1a685815d53b3f190851102d06669e92ce7c2beae55e6fc30e8c47e30867b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f1a685815d53b3f190851102d06669e92ce7c2beae55e6fc30e8c47e30867b93->leave($__internal_f1a685815d53b3f190851102d06669e92ce7c2beae55e6fc30e8c47e30867b93_prof);

        
        $__internal_7393d41d018cc567849f458f2ce487998fb8bbfffba48d8cd4c44704e4dfef39->leave($__internal_7393d41d018cc567849f458f2ce487998fb8bbfffba48d8cd4c44704e4dfef39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01867af16bacbecf656f68dc60603688262c7b1481164b84b46cf940de49124a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01867af16bacbecf656f68dc60603688262c7b1481164b84b46cf940de49124a->enter($__internal_01867af16bacbecf656f68dc60603688262c7b1481164b84b46cf940de49124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18c2cc446666c92336215c126a79ad3d9c787c88b0f95ed0dd6ae1869bc0b5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c2cc446666c92336215c126a79ad3d9c787c88b0f95ed0dd6ae1869bc0b5ff->enter($__internal_18c2cc446666c92336215c126a79ad3d9c787c88b0f95ed0dd6ae1869bc0b5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18c2cc446666c92336215c126a79ad3d9c787c88b0f95ed0dd6ae1869bc0b5ff->leave($__internal_18c2cc446666c92336215c126a79ad3d9c787c88b0f95ed0dd6ae1869bc0b5ff_prof);

        
        $__internal_01867af16bacbecf656f68dc60603688262c7b1481164b84b46cf940de49124a->leave($__internal_01867af16bacbecf656f68dc60603688262c7b1481164b84b46cf940de49124a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
