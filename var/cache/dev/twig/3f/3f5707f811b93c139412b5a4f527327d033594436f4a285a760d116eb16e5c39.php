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
        $__internal_cdcf13b6829626a78390b1751bf42763d57aee2e82b939d3e274294bf9721cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcf13b6829626a78390b1751bf42763d57aee2e82b939d3e274294bf9721cdf->enter($__internal_cdcf13b6829626a78390b1751bf42763d57aee2e82b939d3e274294bf9721cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/profil.html.twig"));

        $__internal_4eb7df1a911321acc3d6dfea5b237b18932fb480700dbdd5297444e1b6f87c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb7df1a911321acc3d6dfea5b237b18932fb480700dbdd5297444e1b6f87c1d->enter($__internal_4eb7df1a911321acc3d6dfea5b237b18932fb480700dbdd5297444e1b6f87c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdcf13b6829626a78390b1751bf42763d57aee2e82b939d3e274294bf9721cdf->leave($__internal_cdcf13b6829626a78390b1751bf42763d57aee2e82b939d3e274294bf9721cdf_prof);

        
        $__internal_4eb7df1a911321acc3d6dfea5b237b18932fb480700dbdd5297444e1b6f87c1d->leave($__internal_4eb7df1a911321acc3d6dfea5b237b18932fb480700dbdd5297444e1b6f87c1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_253c417c55750632348bac7346838c60646bb1ad96ae81e8c71dfcbab33e6be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253c417c55750632348bac7346838c60646bb1ad96ae81e8c71dfcbab33e6be8->enter($__internal_253c417c55750632348bac7346838c60646bb1ad96ae81e8c71dfcbab33e6be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9060402d2e392c2cb71646d972af4618bc8b205ebeaf019a05823108cd6f222c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9060402d2e392c2cb71646d972af4618bc8b205ebeaf019a05823108cd6f222c->enter($__internal_9060402d2e392c2cb71646d972af4618bc8b205ebeaf019a05823108cd6f222c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Section édition de profil à mettre en place
";
        
        $__internal_9060402d2e392c2cb71646d972af4618bc8b205ebeaf019a05823108cd6f222c->leave($__internal_9060402d2e392c2cb71646d972af4618bc8b205ebeaf019a05823108cd6f222c_prof);

        
        $__internal_253c417c55750632348bac7346838c60646bb1ad96ae81e8c71dfcbab33e6be8->leave($__internal_253c417c55750632348bac7346838c60646bb1ad96ae81e8c71dfcbab33e6be8_prof);

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
