<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_e6ca36f15a3e4231cb5a34da56db8c5b693b0e5d5135480a007083fd8cd15cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_0a4a15cb056c62dca493ba3b3cb3d5e0b750f88b3fe3f31d0f2017f241d2a14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4a15cb056c62dca493ba3b3cb3d5e0b750f88b3fe3f31d0f2017f241d2a14a->enter($__internal_0a4a15cb056c62dca493ba3b3cb3d5e0b750f88b3fe3f31d0f2017f241d2a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_e6ad7ffcda2434a88cc59403ec8ef831d76087f3dbd8d0e6c9a8078b57f68ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad7ffcda2434a88cc59403ec8ef831d76087f3dbd8d0e6c9a8078b57f68ab1->enter($__internal_e6ad7ffcda2434a88cc59403ec8ef831d76087f3dbd8d0e6c9a8078b57f68ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4a15cb056c62dca493ba3b3cb3d5e0b750f88b3fe3f31d0f2017f241d2a14a->leave($__internal_0a4a15cb056c62dca493ba3b3cb3d5e0b750f88b3fe3f31d0f2017f241d2a14a_prof);

        
        $__internal_e6ad7ffcda2434a88cc59403ec8ef831d76087f3dbd8d0e6c9a8078b57f68ab1->leave($__internal_e6ad7ffcda2434a88cc59403ec8ef831d76087f3dbd8d0e6c9a8078b57f68ab1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8272ecd3b03843198fd551209782d488760fc510b977d298c7aba61684e49f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8272ecd3b03843198fd551209782d488760fc510b977d298c7aba61684e49f79->enter($__internal_8272ecd3b03843198fd551209782d488760fc510b977d298c7aba61684e49f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71e8650a421e5e942baaceb39d55af61e8a2fdc7ec9c6e7e9b40534351de72b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e8650a421e5e942baaceb39d55af61e8a2fdc7ec9c6e7e9b40534351de72b0->enter($__internal_71e8650a421e5e942baaceb39d55af61e8a2fdc7ec9c6e7e9b40534351de72b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_71e8650a421e5e942baaceb39d55af61e8a2fdc7ec9c6e7e9b40534351de72b0->leave($__internal_71e8650a421e5e942baaceb39d55af61e8a2fdc7ec9c6e7e9b40534351de72b0_prof);

        
        $__internal_8272ecd3b03843198fd551209782d488760fc510b977d298c7aba61684e49f79->leave($__internal_8272ecd3b03843198fd551209782d488760fc510b977d298c7aba61684e49f79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
