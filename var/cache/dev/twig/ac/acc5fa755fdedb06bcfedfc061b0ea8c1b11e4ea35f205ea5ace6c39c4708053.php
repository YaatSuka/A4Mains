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
        $__internal_8e0b45223730766f286085264abe01c71da0ba5d4d9a8ee2d646cf26e51ec99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0b45223730766f286085264abe01c71da0ba5d4d9a8ee2d646cf26e51ec99e->enter($__internal_8e0b45223730766f286085264abe01c71da0ba5d4d9a8ee2d646cf26e51ec99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:profil.html.twig"));

        $__internal_f3c45b201ccfa62a49c7106604947e53a60e86da78f2cc4e20809b9579dddfe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c45b201ccfa62a49c7106604947e53a60e86da78f2cc4e20809b9579dddfe4->enter($__internal_f3c45b201ccfa62a49c7106604947e53a60e86da78f2cc4e20809b9579dddfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e0b45223730766f286085264abe01c71da0ba5d4d9a8ee2d646cf26e51ec99e->leave($__internal_8e0b45223730766f286085264abe01c71da0ba5d4d9a8ee2d646cf26e51ec99e_prof);

        
        $__internal_f3c45b201ccfa62a49c7106604947e53a60e86da78f2cc4e20809b9579dddfe4->leave($__internal_f3c45b201ccfa62a49c7106604947e53a60e86da78f2cc4e20809b9579dddfe4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b701ca4d2fcb78fccc5af5d8b3ae66a92164a19540c74b02e6588a9a6860bf5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b701ca4d2fcb78fccc5af5d8b3ae66a92164a19540c74b02e6588a9a6860bf5a->enter($__internal_b701ca4d2fcb78fccc5af5d8b3ae66a92164a19540c74b02e6588a9a6860bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fae1f781116b38bd94e7751571f01ec355673496a3e6d778426856f17f9e27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fae1f781116b38bd94e7751571f01ec355673496a3e6d778426856f17f9e27f->enter($__internal_4fae1f781116b38bd94e7751571f01ec355673496a3e6d778426856f17f9e27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Section édition de profil à mettre en place
";
        
        $__internal_4fae1f781116b38bd94e7751571f01ec355673496a3e6d778426856f17f9e27f->leave($__internal_4fae1f781116b38bd94e7751571f01ec355673496a3e6d778426856f17f9e27f_prof);

        
        $__internal_b701ca4d2fcb78fccc5af5d8b3ae66a92164a19540c74b02e6588a9a6860bf5a->leave($__internal_b701ca4d2fcb78fccc5af5d8b3ae66a92164a19540c74b02e6588a9a6860bf5a_prof);

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
