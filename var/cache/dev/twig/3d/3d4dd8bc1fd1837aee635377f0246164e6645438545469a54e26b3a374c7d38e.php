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
        $__internal_849f7d1f7cff473947a6ed129e611f0725b11790f9fe9b8f1105cd31ed4caaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849f7d1f7cff473947a6ed129e611f0725b11790f9fe9b8f1105cd31ed4caaaf->enter($__internal_849f7d1f7cff473947a6ed129e611f0725b11790f9fe9b8f1105cd31ed4caaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_179bc29cf4ad10e3b267590059a00bccc79c19f37438291ae1da36c436959e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179bc29cf4ad10e3b267590059a00bccc79c19f37438291ae1da36c436959e13->enter($__internal_179bc29cf4ad10e3b267590059a00bccc79c19f37438291ae1da36c436959e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849f7d1f7cff473947a6ed129e611f0725b11790f9fe9b8f1105cd31ed4caaaf->leave($__internal_849f7d1f7cff473947a6ed129e611f0725b11790f9fe9b8f1105cd31ed4caaaf_prof);

        
        $__internal_179bc29cf4ad10e3b267590059a00bccc79c19f37438291ae1da36c436959e13->leave($__internal_179bc29cf4ad10e3b267590059a00bccc79c19f37438291ae1da36c436959e13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98093e223a392aed555b83323d97ca260795827f1817ca9afe80297688100e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98093e223a392aed555b83323d97ca260795827f1817ca9afe80297688100e9d->enter($__internal_98093e223a392aed555b83323d97ca260795827f1817ca9afe80297688100e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de432789c72c4e44a39d903f896a276bddb539ade970aeee6146c2e540c35309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de432789c72c4e44a39d903f896a276bddb539ade970aeee6146c2e540c35309->enter($__internal_de432789c72c4e44a39d903f896a276bddb539ade970aeee6146c2e540c35309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_de432789c72c4e44a39d903f896a276bddb539ade970aeee6146c2e540c35309->leave($__internal_de432789c72c4e44a39d903f896a276bddb539ade970aeee6146c2e540c35309_prof);

        
        $__internal_98093e223a392aed555b83323d97ca260795827f1817ca9afe80297688100e9d->leave($__internal_98093e223a392aed555b83323d97ca260795827f1817ca9afe80297688100e9d_prof);

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
