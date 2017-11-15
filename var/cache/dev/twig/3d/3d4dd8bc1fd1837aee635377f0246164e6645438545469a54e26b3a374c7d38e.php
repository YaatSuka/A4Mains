<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_007694329d461bebb9734a259fa2b53091294c233b7c0f9c6eef1f29cf84d4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c021c69d8a8bf13cdabebe4c4a04a05e04eb0a7f598efef467f997561de3e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c021c69d8a8bf13cdabebe4c4a04a05e04eb0a7f598efef467f997561de3e71->enter($__internal_4c021c69d8a8bf13cdabebe4c4a04a05e04eb0a7f598efef467f997561de3e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e307f2c89ca496a804d9cfd31d506db5f9d19de6897978e49443ae54e8841694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e307f2c89ca496a804d9cfd31d506db5f9d19de6897978e49443ae54e8841694->enter($__internal_e307f2c89ca496a804d9cfd31d506db5f9d19de6897978e49443ae54e8841694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c021c69d8a8bf13cdabebe4c4a04a05e04eb0a7f598efef467f997561de3e71->leave($__internal_4c021c69d8a8bf13cdabebe4c4a04a05e04eb0a7f598efef467f997561de3e71_prof);

        
        $__internal_e307f2c89ca496a804d9cfd31d506db5f9d19de6897978e49443ae54e8841694->leave($__internal_e307f2c89ca496a804d9cfd31d506db5f9d19de6897978e49443ae54e8841694_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c8889e70ad38ada2fa15e95a0ffe40ad03cb28eb8cd2449bda208b38db5d6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8889e70ad38ada2fa15e95a0ffe40ad03cb28eb8cd2449bda208b38db5d6ef->enter($__internal_8c8889e70ad38ada2fa15e95a0ffe40ad03cb28eb8cd2449bda208b38db5d6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ea4436b678fed7ac747a547edcc1c4943a4cd6bab99c467312149abe13955d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea4436b678fed7ac747a547edcc1c4943a4cd6bab99c467312149abe13955d4->enter($__internal_0ea4436b678fed7ac747a547edcc1c4943a4cd6bab99c467312149abe13955d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0ea4436b678fed7ac747a547edcc1c4943a4cd6bab99c467312149abe13955d4->leave($__internal_0ea4436b678fed7ac747a547edcc1c4943a4cd6bab99c467312149abe13955d4_prof);

        
        $__internal_8c8889e70ad38ada2fa15e95a0ffe40ad03cb28eb8cd2449bda208b38db5d6ef->leave($__internal_8c8889e70ad38ada2fa15e95a0ffe40ad03cb28eb8cd2449bda208b38db5d6ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
