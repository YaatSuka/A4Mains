<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eec7c5a175274f120b3298441dd427c4a089461ce7cd3067f67080610c0eb955 extends Twig_Template
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
        $__internal_733302c35af45772b6b099e18b5c90f3da91b0c64e912f0e0e042e9e7764ad80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733302c35af45772b6b099e18b5c90f3da91b0c64e912f0e0e042e9e7764ad80->enter($__internal_733302c35af45772b6b099e18b5c90f3da91b0c64e912f0e0e042e9e7764ad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7d5e07fde33d0f28b1357f5a041f2abc076ec2c6ccb59e96a5cd0cf8c99aac9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5e07fde33d0f28b1357f5a041f2abc076ec2c6ccb59e96a5cd0cf8c99aac9f->enter($__internal_7d5e07fde33d0f28b1357f5a041f2abc076ec2c6ccb59e96a5cd0cf8c99aac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733302c35af45772b6b099e18b5c90f3da91b0c64e912f0e0e042e9e7764ad80->leave($__internal_733302c35af45772b6b099e18b5c90f3da91b0c64e912f0e0e042e9e7764ad80_prof);

        
        $__internal_7d5e07fde33d0f28b1357f5a041f2abc076ec2c6ccb59e96a5cd0cf8c99aac9f->leave($__internal_7d5e07fde33d0f28b1357f5a041f2abc076ec2c6ccb59e96a5cd0cf8c99aac9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e566d47ead76b08ee78fb378170b485ecc9dfb5f94899b3e5cdd11ffe4a5d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e566d47ead76b08ee78fb378170b485ecc9dfb5f94899b3e5cdd11ffe4a5d74->enter($__internal_5e566d47ead76b08ee78fb378170b485ecc9dfb5f94899b3e5cdd11ffe4a5d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d9aa5c958239c26508397d96899ba18c04b796c9ce6a8d5c352eed4aa71a82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9aa5c958239c26508397d96899ba18c04b796c9ce6a8d5c352eed4aa71a82f->enter($__internal_4d9aa5c958239c26508397d96899ba18c04b796c9ce6a8d5c352eed4aa71a82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4d9aa5c958239c26508397d96899ba18c04b796c9ce6a8d5c352eed4aa71a82f->leave($__internal_4d9aa5c958239c26508397d96899ba18c04b796c9ce6a8d5c352eed4aa71a82f_prof);

        
        $__internal_5e566d47ead76b08ee78fb378170b485ecc9dfb5f94899b3e5cdd11ffe4a5d74->leave($__internal_5e566d47ead76b08ee78fb378170b485ecc9dfb5f94899b3e5cdd11ffe4a5d74_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
