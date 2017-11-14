<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f87ecd1c0ddd38862c53ecb6f46f4c0a91c12832438df856349b59be1e3dd088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0515e833a57bc5d89994b45a0a130fe5a12f6bc43163082edd029fee9bbfb66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0515e833a57bc5d89994b45a0a130fe5a12f6bc43163082edd029fee9bbfb66a->enter($__internal_0515e833a57bc5d89994b45a0a130fe5a12f6bc43163082edd029fee9bbfb66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_bb71263140e339a0460eedf42518942329f02fe71836e93ec3164a43f45fff1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb71263140e339a0460eedf42518942329f02fe71836e93ec3164a43f45fff1c->enter($__internal_bb71263140e339a0460eedf42518942329f02fe71836e93ec3164a43f45fff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0515e833a57bc5d89994b45a0a130fe5a12f6bc43163082edd029fee9bbfb66a->leave($__internal_0515e833a57bc5d89994b45a0a130fe5a12f6bc43163082edd029fee9bbfb66a_prof);

        
        $__internal_bb71263140e339a0460eedf42518942329f02fe71836e93ec3164a43f45fff1c->leave($__internal_bb71263140e339a0460eedf42518942329f02fe71836e93ec3164a43f45fff1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4d4c3dbad42b12569e3fbeac02d9bb9acad7cac7c234310d029c8adcb346d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d4c3dbad42b12569e3fbeac02d9bb9acad7cac7c234310d029c8adcb346d3f->enter($__internal_e4d4c3dbad42b12569e3fbeac02d9bb9acad7cac7c234310d029c8adcb346d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20dcbd709d7179539fca7b4bf52b23102b071b3b365f39fb1b7ab43339751e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dcbd709d7179539fca7b4bf52b23102b071b3b365f39fb1b7ab43339751e60->enter($__internal_20dcbd709d7179539fca7b4bf52b23102b071b3b365f39fb1b7ab43339751e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_20dcbd709d7179539fca7b4bf52b23102b071b3b365f39fb1b7ab43339751e60->leave($__internal_20dcbd709d7179539fca7b4bf52b23102b071b3b365f39fb1b7ab43339751e60_prof);

        
        $__internal_e4d4c3dbad42b12569e3fbeac02d9bb9acad7cac7c234310d029c8adcb346d3f->leave($__internal_e4d4c3dbad42b12569e3fbeac02d9bb9acad7cac7c234310d029c8adcb346d3f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
