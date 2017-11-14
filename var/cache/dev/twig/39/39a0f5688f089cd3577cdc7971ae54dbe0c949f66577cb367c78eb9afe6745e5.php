<?php

/* AQMArtBundle:Article:index.html.twig */
class __TwigTemplate_314f32a6b5151e3eb61f7aaad096e233c69f309608c09be22273f45f20630638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Article:index.html.twig", 1);
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
        $__internal_f7eddc635a2a6264e2abd4eccc140816efeceec58113d9fad249a6e9350f1036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7eddc635a2a6264e2abd4eccc140816efeceec58113d9fad249a6e9350f1036->enter($__internal_f7eddc635a2a6264e2abd4eccc140816efeceec58113d9fad249a6e9350f1036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Article:index.html.twig"));

        $__internal_dbdd8d2f388d9174885c32255ca2fce2aac2b5e8848d6c0d035eb0fdd2c53113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdd8d2f388d9174885c32255ca2fce2aac2b5e8848d6c0d035eb0fdd2c53113->enter($__internal_dbdd8d2f388d9174885c32255ca2fce2aac2b5e8848d6c0d035eb0fdd2c53113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7eddc635a2a6264e2abd4eccc140816efeceec58113d9fad249a6e9350f1036->leave($__internal_f7eddc635a2a6264e2abd4eccc140816efeceec58113d9fad249a6e9350f1036_prof);

        
        $__internal_dbdd8d2f388d9174885c32255ca2fce2aac2b5e8848d6c0d035eb0fdd2c53113->leave($__internal_dbdd8d2f388d9174885c32255ca2fce2aac2b5e8848d6c0d035eb0fdd2c53113_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f9b572d6b6fe8addd716bd8604269e52981d89047cc141faf0f0946b5802fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9b572d6b6fe8addd716bd8604269e52981d89047cc141faf0f0946b5802fe3->enter($__internal_5f9b572d6b6fe8addd716bd8604269e52981d89047cc141faf0f0946b5802fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cabdf2331d3316066d8106c36cacdf18be3b81b4d076c6a80b709f1cc06382fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabdf2331d3316066d8106c36cacdf18be3b81b4d076c6a80b709f1cc06382fe->enter($__internal_cabdf2331d3316066d8106c36cacdf18be3b81b4d076c6a80b709f1cc06382fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Interface pour articles à concevoir
";
        
        $__internal_cabdf2331d3316066d8106c36cacdf18be3b81b4d076c6a80b709f1cc06382fe->leave($__internal_cabdf2331d3316066d8106c36cacdf18be3b81b4d076c6a80b709f1cc06382fe_prof);

        
        $__internal_5f9b572d6b6fe8addd716bd8604269e52981d89047cc141faf0f0946b5802fe3->leave($__internal_5f9b572d6b6fe8addd716bd8604269e52981d89047cc141faf0f0946b5802fe3_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Article:index.html.twig";
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
    Interface pour articles à concevoir
{% endblock %}", "AQMArtBundle:Article:index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Article/index.html.twig");
    }
}
