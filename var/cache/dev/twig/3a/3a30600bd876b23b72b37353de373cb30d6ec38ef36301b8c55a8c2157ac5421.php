<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_9dcdbcdfe963de87dcd999c85c8a080976f5534127d691def18da8af9e689a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_1fbd20239c545e38503705502ed9eef98dbd0a3d11551c4a06716df11880ded6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbd20239c545e38503705502ed9eef98dbd0a3d11551c4a06716df11880ded6->enter($__internal_1fbd20239c545e38503705502ed9eef98dbd0a3d11551c4a06716df11880ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_e7cc885c58897283c4e8ec4f07748aca832549c78894631c289bac760e35fc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cc885c58897283c4e8ec4f07748aca832549c78894631c289bac760e35fc88->enter($__internal_e7cc885c58897283c4e8ec4f07748aca832549c78894631c289bac760e35fc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fbd20239c545e38503705502ed9eef98dbd0a3d11551c4a06716df11880ded6->leave($__internal_1fbd20239c545e38503705502ed9eef98dbd0a3d11551c4a06716df11880ded6_prof);

        
        $__internal_e7cc885c58897283c4e8ec4f07748aca832549c78894631c289bac760e35fc88->leave($__internal_e7cc885c58897283c4e8ec4f07748aca832549c78894631c289bac760e35fc88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36c25e756e44329e6dd326575d3a0539d8b374b775a9bec4e7f8a65bc406886b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c25e756e44329e6dd326575d3a0539d8b374b775a9bec4e7f8a65bc406886b->enter($__internal_36c25e756e44329e6dd326575d3a0539d8b374b775a9bec4e7f8a65bc406886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d93b5bb69c19c736ee532d9d4aeaa4d686fc64ed7954cd2a38264c57e7072c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93b5bb69c19c736ee532d9d4aeaa4d686fc64ed7954cd2a38264c57e7072c6f->enter($__internal_d93b5bb69c19c736ee532d9d4aeaa4d686fc64ed7954cd2a38264c57e7072c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d93b5bb69c19c736ee532d9d4aeaa4d686fc64ed7954cd2a38264c57e7072c6f->leave($__internal_d93b5bb69c19c736ee532d9d4aeaa4d686fc64ed7954cd2a38264c57e7072c6f_prof);

        
        $__internal_36c25e756e44329e6dd326575d3a0539d8b374b775a9bec4e7f8a65bc406886b->leave($__internal_36c25e756e44329e6dd326575d3a0539d8b374b775a9bec4e7f8a65bc406886b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
