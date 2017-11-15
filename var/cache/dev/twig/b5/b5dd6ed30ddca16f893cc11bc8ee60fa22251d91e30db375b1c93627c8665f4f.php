<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f3e871e4ca3f1e83c461d3a8bf545d404f2de78eab7c5e8a9abc75d2777c28df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b86a54d3d7257df656046f2cc0f20bfa0b2527cdbba24027a0b70127f7185e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86a54d3d7257df656046f2cc0f20bfa0b2527cdbba24027a0b70127f7185e0c->enter($__internal_b86a54d3d7257df656046f2cc0f20bfa0b2527cdbba24027a0b70127f7185e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f36fb5221e4700a06a1eeee11b7f56f0df23cefd22d7641026dcd5cde6d8f70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36fb5221e4700a06a1eeee11b7f56f0df23cefd22d7641026dcd5cde6d8f70f->enter($__internal_f36fb5221e4700a06a1eeee11b7f56f0df23cefd22d7641026dcd5cde6d8f70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86a54d3d7257df656046f2cc0f20bfa0b2527cdbba24027a0b70127f7185e0c->leave($__internal_b86a54d3d7257df656046f2cc0f20bfa0b2527cdbba24027a0b70127f7185e0c_prof);

        
        $__internal_f36fb5221e4700a06a1eeee11b7f56f0df23cefd22d7641026dcd5cde6d8f70f->leave($__internal_f36fb5221e4700a06a1eeee11b7f56f0df23cefd22d7641026dcd5cde6d8f70f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c0d76897a60a326be212d91b73c44f95f5e9b6701465759fbeb0d7b58010903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0d76897a60a326be212d91b73c44f95f5e9b6701465759fbeb0d7b58010903->enter($__internal_1c0d76897a60a326be212d91b73c44f95f5e9b6701465759fbeb0d7b58010903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cda97f9b60840899a2cf43be25c61d23f25c85572054e67a840428adb429e431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda97f9b60840899a2cf43be25c61d23f25c85572054e67a840428adb429e431->enter($__internal_cda97f9b60840899a2cf43be25c61d23f25c85572054e67a840428adb429e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_cda97f9b60840899a2cf43be25c61d23f25c85572054e67a840428adb429e431->leave($__internal_cda97f9b60840899a2cf43be25c61d23f25c85572054e67a840428adb429e431_prof);

        
        $__internal_1c0d76897a60a326be212d91b73c44f95f5e9b6701465759fbeb0d7b58010903->leave($__internal_1c0d76897a60a326be212d91b73c44f95f5e9b6701465759fbeb0d7b58010903_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
