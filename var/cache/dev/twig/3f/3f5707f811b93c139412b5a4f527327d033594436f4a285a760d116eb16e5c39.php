<?php

/* @AQMArt/Admin/profil.html.twig */
class __TwigTemplate_f7d4e7f572d37a7f040c6327eea5d9046dcbf626656c60c4292cbdfe45c23ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Admin/profil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1489220018fbae66e9b39d6c31ea5240ea55142235fdb3d53dff308745294e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1489220018fbae66e9b39d6c31ea5240ea55142235fdb3d53dff308745294e19->enter($__internal_1489220018fbae66e9b39d6c31ea5240ea55142235fdb3d53dff308745294e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/profil.html.twig"));

        $__internal_115d5297dd2e4a47bb37f18390e3670a88c1aebdad61f457d8b921cf92269ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115d5297dd2e4a47bb37f18390e3670a88c1aebdad61f457d8b921cf92269ec3->enter($__internal_115d5297dd2e4a47bb37f18390e3670a88c1aebdad61f457d8b921cf92269ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1489220018fbae66e9b39d6c31ea5240ea55142235fdb3d53dff308745294e19->leave($__internal_1489220018fbae66e9b39d6c31ea5240ea55142235fdb3d53dff308745294e19_prof);

        
        $__internal_115d5297dd2e4a47bb37f18390e3670a88c1aebdad61f457d8b921cf92269ec3->leave($__internal_115d5297dd2e4a47bb37f18390e3670a88c1aebdad61f457d8b921cf92269ec3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17fb9ecb69e9fdc3ee1b8f5be0398cfaa3a8b15415fb8fe5332dac41a9ac9770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fb9ecb69e9fdc3ee1b8f5be0398cfaa3a8b15415fb8fe5332dac41a9ac9770->enter($__internal_17fb9ecb69e9fdc3ee1b8f5be0398cfaa3a8b15415fb8fe5332dac41a9ac9770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d0f2c0bbc86b6d43ca43b9f93889f0cb1925a6705953be4a2b840d1b81d442d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0f2c0bbc86b6d43ca43b9f93889f0cb1925a6705953be4a2b840d1b81d442d->enter($__internal_5d0f2c0bbc86b6d43ca43b9f93889f0cb1925a6705953be4a2b840d1b81d442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Section édition de profil à mettre en place
";
        
        $__internal_5d0f2c0bbc86b6d43ca43b9f93889f0cb1925a6705953be4a2b840d1b81d442d->leave($__internal_5d0f2c0bbc86b6d43ca43b9f93889f0cb1925a6705953be4a2b840d1b81d442d_prof);

        
        $__internal_17fb9ecb69e9fdc3ee1b8f5be0398cfaa3a8b15415fb8fe5332dac41a9ac9770->leave($__internal_17fb9ecb69e9fdc3ee1b8f5be0398cfaa3a8b15415fb8fe5332dac41a9ac9770_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Admin/profil.html.twig";
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
        return new Twig_Source("{% extends 'AQMArtBundle::layout.html.twig' %}

{% block body %}
    Section édition de profil à mettre en place
{% endblock %}", "@AQMArt/Admin/profil.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Admin\\profil.html.twig");
    }
}
