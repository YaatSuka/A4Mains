<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_abc3954ed9a3ec1712455e0e34e5aa6fb09d9e4108aa1a45b6b6076ea0778182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_353fbeb78cdc484f432909a07034972fb299ab6d51ac2865abe99b5f0d1e3930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353fbeb78cdc484f432909a07034972fb299ab6d51ac2865abe99b5f0d1e3930->enter($__internal_353fbeb78cdc484f432909a07034972fb299ab6d51ac2865abe99b5f0d1e3930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_8badc3219bc00c5d177b3fd82be8af4d7a0a33afefec1d8dba8967f94b49d7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8badc3219bc00c5d177b3fd82be8af4d7a0a33afefec1d8dba8967f94b49d7f2->enter($__internal_8badc3219bc00c5d177b3fd82be8af4d7a0a33afefec1d8dba8967f94b49d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_353fbeb78cdc484f432909a07034972fb299ab6d51ac2865abe99b5f0d1e3930->leave($__internal_353fbeb78cdc484f432909a07034972fb299ab6d51ac2865abe99b5f0d1e3930_prof);

        
        $__internal_8badc3219bc00c5d177b3fd82be8af4d7a0a33afefec1d8dba8967f94b49d7f2->leave($__internal_8badc3219bc00c5d177b3fd82be8af4d7a0a33afefec1d8dba8967f94b49d7f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5183e8e4c7aea51505d856b238125f971eb4dd88db009b9ea9d38cd1e12dcaf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5183e8e4c7aea51505d856b238125f971eb4dd88db009b9ea9d38cd1e12dcaf8->enter($__internal_5183e8e4c7aea51505d856b238125f971eb4dd88db009b9ea9d38cd1e12dcaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_58f1bde14acfec9bf727ec87e6a372e16dbaac6631df18bcfb3f6df39a2a8cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f1bde14acfec9bf727ec87e6a372e16dbaac6631df18bcfb3f6df39a2a8cc7->enter($__internal_58f1bde14acfec9bf727ec87e6a372e16dbaac6631df18bcfb3f6df39a2a8cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_58f1bde14acfec9bf727ec87e6a372e16dbaac6631df18bcfb3f6df39a2a8cc7->leave($__internal_58f1bde14acfec9bf727ec87e6a372e16dbaac6631df18bcfb3f6df39a2a8cc7_prof);

        
        $__internal_5183e8e4c7aea51505d856b238125f971eb4dd88db009b9ea9d38cd1e12dcaf8->leave($__internal_5183e8e4c7aea51505d856b238125f971eb4dd88db009b9ea9d38cd1e12dcaf8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
