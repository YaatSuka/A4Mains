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
        $__internal_b3b358b26077e1769d89b4eac0209a46330e372e1fab3e202a9e6d8980c79d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b358b26077e1769d89b4eac0209a46330e372e1fab3e202a9e6d8980c79d25->enter($__internal_b3b358b26077e1769d89b4eac0209a46330e372e1fab3e202a9e6d8980c79d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_00e76ac2e654f6d9a216e9c4afa1ab0fb7b922b9cd1f221520aae17de03930f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e76ac2e654f6d9a216e9c4afa1ab0fb7b922b9cd1f221520aae17de03930f1->enter($__internal_00e76ac2e654f6d9a216e9c4afa1ab0fb7b922b9cd1f221520aae17de03930f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b358b26077e1769d89b4eac0209a46330e372e1fab3e202a9e6d8980c79d25->leave($__internal_b3b358b26077e1769d89b4eac0209a46330e372e1fab3e202a9e6d8980c79d25_prof);

        
        $__internal_00e76ac2e654f6d9a216e9c4afa1ab0fb7b922b9cd1f221520aae17de03930f1->leave($__internal_00e76ac2e654f6d9a216e9c4afa1ab0fb7b922b9cd1f221520aae17de03930f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c767943824e529562b615112096d230d60b146c9159af27a9f9613de6c4be642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c767943824e529562b615112096d230d60b146c9159af27a9f9613de6c4be642->enter($__internal_c767943824e529562b615112096d230d60b146c9159af27a9f9613de6c4be642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed6e5947ef05f5c21bb77de38dca6ff0607c4bf864f15bc0999d549f04fbe62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6e5947ef05f5c21bb77de38dca6ff0607c4bf864f15bc0999d549f04fbe62d->enter($__internal_ed6e5947ef05f5c21bb77de38dca6ff0607c4bf864f15bc0999d549f04fbe62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ed6e5947ef05f5c21bb77de38dca6ff0607c4bf864f15bc0999d549f04fbe62d->leave($__internal_ed6e5947ef05f5c21bb77de38dca6ff0607c4bf864f15bc0999d549f04fbe62d_prof);

        
        $__internal_c767943824e529562b615112096d230d60b146c9159af27a9f9613de6c4be642->leave($__internal_c767943824e529562b615112096d230d60b146c9159af27a9f9613de6c4be642_prof);

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
