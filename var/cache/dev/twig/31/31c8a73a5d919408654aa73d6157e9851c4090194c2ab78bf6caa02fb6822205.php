<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_923680caaa4b11d19b3e7f2f9f2393a3cb7cc2e45627f932fb625ce3b8f47da6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_938de73c4fb71b28ae6e13eac8c17189b1a915192509cb1fc5b0ae6919108781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938de73c4fb71b28ae6e13eac8c17189b1a915192509cb1fc5b0ae6919108781->enter($__internal_938de73c4fb71b28ae6e13eac8c17189b1a915192509cb1fc5b0ae6919108781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b5a3732bc6e4e003c8798b45f766910885a75ea976f37ad77dea4ed0fb9ae23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a3732bc6e4e003c8798b45f766910885a75ea976f37ad77dea4ed0fb9ae23e->enter($__internal_b5a3732bc6e4e003c8798b45f766910885a75ea976f37ad77dea4ed0fb9ae23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_938de73c4fb71b28ae6e13eac8c17189b1a915192509cb1fc5b0ae6919108781->leave($__internal_938de73c4fb71b28ae6e13eac8c17189b1a915192509cb1fc5b0ae6919108781_prof);

        
        $__internal_b5a3732bc6e4e003c8798b45f766910885a75ea976f37ad77dea4ed0fb9ae23e->leave($__internal_b5a3732bc6e4e003c8798b45f766910885a75ea976f37ad77dea4ed0fb9ae23e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dda0357507f6ef87a47e6beb0f46e4626c376ee47cd4e05eb0a05658b67aecc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda0357507f6ef87a47e6beb0f46e4626c376ee47cd4e05eb0a05658b67aecc6->enter($__internal_dda0357507f6ef87a47e6beb0f46e4626c376ee47cd4e05eb0a05658b67aecc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e7bc7ffcf3c7ea929a46765300109f2317ba609cf86c185142fbb87f6bc464b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bc7ffcf3c7ea929a46765300109f2317ba609cf86c185142fbb87f6bc464b6->enter($__internal_e7bc7ffcf3c7ea929a46765300109f2317ba609cf86c185142fbb87f6bc464b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e7bc7ffcf3c7ea929a46765300109f2317ba609cf86c185142fbb87f6bc464b6->leave($__internal_e7bc7ffcf3c7ea929a46765300109f2317ba609cf86c185142fbb87f6bc464b6_prof);

        
        $__internal_dda0357507f6ef87a47e6beb0f46e4626c376ee47cd4e05eb0a05658b67aecc6->leave($__internal_dda0357507f6ef87a47e6beb0f46e4626c376ee47cd4e05eb0a05658b67aecc6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
