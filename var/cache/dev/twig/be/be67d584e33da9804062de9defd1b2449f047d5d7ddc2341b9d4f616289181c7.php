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
        $__internal_8a8c8dece98880eeef2cee65135d8fc7b558485d25d8d9014e387b7e591bafd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8c8dece98880eeef2cee65135d8fc7b558485d25d8d9014e387b7e591bafd6->enter($__internal_8a8c8dece98880eeef2cee65135d8fc7b558485d25d8d9014e387b7e591bafd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_f29a319f3323ca61f847b1ffbd5cec8a74f22aefb7da4d0334383ce1f5a00613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29a319f3323ca61f847b1ffbd5cec8a74f22aefb7da4d0334383ce1f5a00613->enter($__internal_f29a319f3323ca61f847b1ffbd5cec8a74f22aefb7da4d0334383ce1f5a00613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a8c8dece98880eeef2cee65135d8fc7b558485d25d8d9014e387b7e591bafd6->leave($__internal_8a8c8dece98880eeef2cee65135d8fc7b558485d25d8d9014e387b7e591bafd6_prof);

        
        $__internal_f29a319f3323ca61f847b1ffbd5cec8a74f22aefb7da4d0334383ce1f5a00613->leave($__internal_f29a319f3323ca61f847b1ffbd5cec8a74f22aefb7da4d0334383ce1f5a00613_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfc8e0e1a2a26d05e86e6ba0c1246549d6b28b4242f97aeaaf4cf0b383a5aff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc8e0e1a2a26d05e86e6ba0c1246549d6b28b4242f97aeaaf4cf0b383a5aff2->enter($__internal_cfc8e0e1a2a26d05e86e6ba0c1246549d6b28b4242f97aeaaf4cf0b383a5aff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b093d2fc8be3378f5d9fc1631f053937dd080d9c2b8847ad95b68e7e7f7e6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b093d2fc8be3378f5d9fc1631f053937dd080d9c2b8847ad95b68e7e7f7e6e1->enter($__internal_3b093d2fc8be3378f5d9fc1631f053937dd080d9c2b8847ad95b68e7e7f7e6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3b093d2fc8be3378f5d9fc1631f053937dd080d9c2b8847ad95b68e7e7f7e6e1->leave($__internal_3b093d2fc8be3378f5d9fc1631f053937dd080d9c2b8847ad95b68e7e7f7e6e1_prof);

        
        $__internal_cfc8e0e1a2a26d05e86e6ba0c1246549d6b28b4242f97aeaaf4cf0b383a5aff2->leave($__internal_cfc8e0e1a2a26d05e86e6ba0c1246549d6b28b4242f97aeaaf4cf0b383a5aff2_prof);

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
