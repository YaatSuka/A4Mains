<?php

/* AQMArtBundle:Acceuil:index.html.twig */
class __TwigTemplate_1e68765248e1c7dcf01bffa847895d2c76cfac0bcd5b83e13ae776fd57a874a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Acceuil:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8674dfc6dd1d6c2d673da4479644657e220986c96adb2c386b37c42e96d3144c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8674dfc6dd1d6c2d673da4479644657e220986c96adb2c386b37c42e96d3144c->enter($__internal_8674dfc6dd1d6c2d673da4479644657e220986c96adb2c386b37c42e96d3144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Acceuil:index.html.twig"));

        $__internal_aec561991f34ea8cdae3c5e49de05ac31b023f1e12b68d015e0b4a03104968b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec561991f34ea8cdae3c5e49de05ac31b023f1e12b68d015e0b4a03104968b1->enter($__internal_aec561991f34ea8cdae3c5e49de05ac31b023f1e12b68d015e0b4a03104968b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Acceuil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8674dfc6dd1d6c2d673da4479644657e220986c96adb2c386b37c42e96d3144c->leave($__internal_8674dfc6dd1d6c2d673da4479644657e220986c96adb2c386b37c42e96d3144c_prof);

        
        $__internal_aec561991f34ea8cdae3c5e49de05ac31b023f1e12b68d015e0b4a03104968b1->leave($__internal_aec561991f34ea8cdae3c5e49de05ac31b023f1e12b68d015e0b4a03104968b1_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Acceuil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}
", "AQMArtBundle:Acceuil:index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Acceuil/index.html.twig");
    }
}
