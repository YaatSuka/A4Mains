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
        $__internal_9f1ced7751809fd53373757e3037debe1a40d9f90b52a1f0b910c1927da21787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1ced7751809fd53373757e3037debe1a40d9f90b52a1f0b910c1927da21787->enter($__internal_9f1ced7751809fd53373757e3037debe1a40d9f90b52a1f0b910c1927da21787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Acceuil:index.html.twig"));

        $__internal_553545f338302fc23a965fa0c811553f00ec781c56c6425b8503d08f7a49424c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553545f338302fc23a965fa0c811553f00ec781c56c6425b8503d08f7a49424c->enter($__internal_553545f338302fc23a965fa0c811553f00ec781c56c6425b8503d08f7a49424c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Acceuil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f1ced7751809fd53373757e3037debe1a40d9f90b52a1f0b910c1927da21787->leave($__internal_9f1ced7751809fd53373757e3037debe1a40d9f90b52a1f0b910c1927da21787_prof);

        
        $__internal_553545f338302fc23a965fa0c811553f00ec781c56c6425b8503d08f7a49424c->leave($__internal_553545f338302fc23a965fa0c811553f00ec781c56c6425b8503d08f7a49424c_prof);

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
