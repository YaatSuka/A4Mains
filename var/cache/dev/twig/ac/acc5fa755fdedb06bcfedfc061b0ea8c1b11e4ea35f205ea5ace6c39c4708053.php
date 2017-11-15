<?php

/* AQMArtBundle:Admin:profil.html.twig */
class __TwigTemplate_cccb4313cc690e3bb27f889e55ac53d8d31cae4a9c83c85e709124b87fcf8070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Admin:profil.html.twig", 1);
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
        $__internal_29772ec998a19cdf180b4ed112458a4b4a7db40989f0335e6935356952dc0d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29772ec998a19cdf180b4ed112458a4b4a7db40989f0335e6935356952dc0d10->enter($__internal_29772ec998a19cdf180b4ed112458a4b4a7db40989f0335e6935356952dc0d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:profil.html.twig"));

        $__internal_40ba6d7f35c9440039da240a49bb38898cd43269ee3c719b686a6fd89ebce654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ba6d7f35c9440039da240a49bb38898cd43269ee3c719b686a6fd89ebce654->enter($__internal_40ba6d7f35c9440039da240a49bb38898cd43269ee3c719b686a6fd89ebce654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29772ec998a19cdf180b4ed112458a4b4a7db40989f0335e6935356952dc0d10->leave($__internal_29772ec998a19cdf180b4ed112458a4b4a7db40989f0335e6935356952dc0d10_prof);

        
        $__internal_40ba6d7f35c9440039da240a49bb38898cd43269ee3c719b686a6fd89ebce654->leave($__internal_40ba6d7f35c9440039da240a49bb38898cd43269ee3c719b686a6fd89ebce654_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f86773559b4d41f8f42861c165e5d177ab381d7ea02a53829a1913e1693c75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f86773559b4d41f8f42861c165e5d177ab381d7ea02a53829a1913e1693c75a->enter($__internal_5f86773559b4d41f8f42861c165e5d177ab381d7ea02a53829a1913e1693c75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84e4abfe257bf001e4faf78786ca0dd52ea3af19a954d60b09508ef92fc6fa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e4abfe257bf001e4faf78786ca0dd52ea3af19a954d60b09508ef92fc6fa01->enter($__internal_84e4abfe257bf001e4faf78786ca0dd52ea3af19a954d60b09508ef92fc6fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Section édition de profil à mettre en place
";
        
        $__internal_84e4abfe257bf001e4faf78786ca0dd52ea3af19a954d60b09508ef92fc6fa01->leave($__internal_84e4abfe257bf001e4faf78786ca0dd52ea3af19a954d60b09508ef92fc6fa01_prof);

        
        $__internal_5f86773559b4d41f8f42861c165e5d177ab381d7ea02a53829a1913e1693c75a->leave($__internal_5f86773559b4d41f8f42861c165e5d177ab381d7ea02a53829a1913e1693c75a_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Admin:profil.html.twig";
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
{% endblock %}", "AQMArtBundle:Admin:profil.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Admin/profil.html.twig");
    }
}
