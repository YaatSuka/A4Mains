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
        $__internal_b47d33cdcab42082015cb0f98bca30ac1ecafb59facd3ecf61891ef70bde6e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47d33cdcab42082015cb0f98bca30ac1ecafb59facd3ecf61891ef70bde6e48->enter($__internal_b47d33cdcab42082015cb0f98bca30ac1ecafb59facd3ecf61891ef70bde6e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_7bb16283f74cbc577aad3d3fc1a8396549de225cf0f49b0edadeb175768cd019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb16283f74cbc577aad3d3fc1a8396549de225cf0f49b0edadeb175768cd019->enter($__internal_7bb16283f74cbc577aad3d3fc1a8396549de225cf0f49b0edadeb175768cd019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47d33cdcab42082015cb0f98bca30ac1ecafb59facd3ecf61891ef70bde6e48->leave($__internal_b47d33cdcab42082015cb0f98bca30ac1ecafb59facd3ecf61891ef70bde6e48_prof);

        
        $__internal_7bb16283f74cbc577aad3d3fc1a8396549de225cf0f49b0edadeb175768cd019->leave($__internal_7bb16283f74cbc577aad3d3fc1a8396549de225cf0f49b0edadeb175768cd019_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23214ae653b7c95984054160c2055e3dae196b88baafaabf6be7111e7f04641f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23214ae653b7c95984054160c2055e3dae196b88baafaabf6be7111e7f04641f->enter($__internal_23214ae653b7c95984054160c2055e3dae196b88baafaabf6be7111e7f04641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e23bc82a20da2d79bf173dd179cd284fd79a08e5393bbdadf066a34438a05a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23bc82a20da2d79bf173dd179cd284fd79a08e5393bbdadf066a34438a05a60->enter($__internal_e23bc82a20da2d79bf173dd179cd284fd79a08e5393bbdadf066a34438a05a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e23bc82a20da2d79bf173dd179cd284fd79a08e5393bbdadf066a34438a05a60->leave($__internal_e23bc82a20da2d79bf173dd179cd284fd79a08e5393bbdadf066a34438a05a60_prof);

        
        $__internal_23214ae653b7c95984054160c2055e3dae196b88baafaabf6be7111e7f04641f->leave($__internal_23214ae653b7c95984054160c2055e3dae196b88baafaabf6be7111e7f04641f_prof);

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
