<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ed6345985937e3a0e0ec5b477db9a141f54fbf63c7cea80b6b82932f37625436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1cca4c9bd6f6c85dd4ac1aac0edcda297c8f2d356ad3d7d6a901587e611da53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cca4c9bd6f6c85dd4ac1aac0edcda297c8f2d356ad3d7d6a901587e611da53b->enter($__internal_1cca4c9bd6f6c85dd4ac1aac0edcda297c8f2d356ad3d7d6a901587e611da53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_9754d82a9a06df9a54ef9483d01446b5d45e3b586f062a7cb94c811e7023f161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9754d82a9a06df9a54ef9483d01446b5d45e3b586f062a7cb94c811e7023f161->enter($__internal_9754d82a9a06df9a54ef9483d01446b5d45e3b586f062a7cb94c811e7023f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cca4c9bd6f6c85dd4ac1aac0edcda297c8f2d356ad3d7d6a901587e611da53b->leave($__internal_1cca4c9bd6f6c85dd4ac1aac0edcda297c8f2d356ad3d7d6a901587e611da53b_prof);

        
        $__internal_9754d82a9a06df9a54ef9483d01446b5d45e3b586f062a7cb94c811e7023f161->leave($__internal_9754d82a9a06df9a54ef9483d01446b5d45e3b586f062a7cb94c811e7023f161_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73d8fcdc23c31e1e5df3ff07bc3af67fb88bfb23fb711f50c36e9a8fcd82c302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d8fcdc23c31e1e5df3ff07bc3af67fb88bfb23fb711f50c36e9a8fcd82c302->enter($__internal_73d8fcdc23c31e1e5df3ff07bc3af67fb88bfb23fb711f50c36e9a8fcd82c302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc6321b730377e650afcbcf69ef0ae0e230ffedc52e551090d72cac708b2af7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6321b730377e650afcbcf69ef0ae0e230ffedc52e551090d72cac708b2af7c->enter($__internal_cc6321b730377e650afcbcf69ef0ae0e230ffedc52e551090d72cac708b2af7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cc6321b730377e650afcbcf69ef0ae0e230ffedc52e551090d72cac708b2af7c->leave($__internal_cc6321b730377e650afcbcf69ef0ae0e230ffedc52e551090d72cac708b2af7c_prof);

        
        $__internal_73d8fcdc23c31e1e5df3ff07bc3af67fb88bfb23fb711f50c36e9a8fcd82c302->leave($__internal_73d8fcdc23c31e1e5df3ff07bc3af67fb88bfb23fb711f50c36e9a8fcd82c302_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
