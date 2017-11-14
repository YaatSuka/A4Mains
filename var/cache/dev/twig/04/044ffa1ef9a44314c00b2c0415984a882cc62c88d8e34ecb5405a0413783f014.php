<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_9a9c167e78ab28a5630b2b92d2b11de6357f10e55707022750b1fcd7f33153ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2c7b2ce86ac3d91840ad46a31fbcc50802b40840bd18fb4b36dcf24eddc5f7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7b2ce86ac3d91840ad46a31fbcc50802b40840bd18fb4b36dcf24eddc5f7c6->enter($__internal_2c7b2ce86ac3d91840ad46a31fbcc50802b40840bd18fb4b36dcf24eddc5f7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_3a89777bb862929c8419b7f89f9639cd266ebba06798614fe87e6e9ab9e06d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a89777bb862929c8419b7f89f9639cd266ebba06798614fe87e6e9ab9e06d42->enter($__internal_3a89777bb862929c8419b7f89f9639cd266ebba06798614fe87e6e9ab9e06d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c7b2ce86ac3d91840ad46a31fbcc50802b40840bd18fb4b36dcf24eddc5f7c6->leave($__internal_2c7b2ce86ac3d91840ad46a31fbcc50802b40840bd18fb4b36dcf24eddc5f7c6_prof);

        
        $__internal_3a89777bb862929c8419b7f89f9639cd266ebba06798614fe87e6e9ab9e06d42->leave($__internal_3a89777bb862929c8419b7f89f9639cd266ebba06798614fe87e6e9ab9e06d42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e98f6266183476dba493c66d26c9cfaf74aa58799d22cf38dd8528aea499a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e98f6266183476dba493c66d26c9cfaf74aa58799d22cf38dd8528aea499a78->enter($__internal_7e98f6266183476dba493c66d26c9cfaf74aa58799d22cf38dd8528aea499a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d486231ea7219b851763ee61ba731657362da3728d416c8ddab9ad5f0e5eeae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d486231ea7219b851763ee61ba731657362da3728d416c8ddab9ad5f0e5eeae8->enter($__internal_d486231ea7219b851763ee61ba731657362da3728d416c8ddab9ad5f0e5eeae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d486231ea7219b851763ee61ba731657362da3728d416c8ddab9ad5f0e5eeae8->leave($__internal_d486231ea7219b851763ee61ba731657362da3728d416c8ddab9ad5f0e5eeae8_prof);

        
        $__internal_7e98f6266183476dba493c66d26c9cfaf74aa58799d22cf38dd8528aea499a78->leave($__internal_7e98f6266183476dba493c66d26c9cfaf74aa58799d22cf38dd8528aea499a78_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
