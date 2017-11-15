<?php

/* AQMArtBundle:Admin:index.html.twig */
class __TwigTemplate_d5379b3160f3046419578e6388ba46aa804ac5351896b7c3c917d2bba3b409db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbf4cb3a5d1e3a3aa8ec9064d691473f6b3e0e13bb7ae9362d93bd483274b1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf4cb3a5d1e3a3aa8ec9064d691473f6b3e0e13bb7ae9362d93bd483274b1f6->enter($__internal_bbf4cb3a5d1e3a3aa8ec9064d691473f6b3e0e13bb7ae9362d93bd483274b1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:index.html.twig"));

        $__internal_dbd4509ae41757538458aa33e23b458e681c64d016849f865fd4207ef5adc08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd4509ae41757538458aa33e23b458e681c64d016849f865fd4207ef5adc08d->enter($__internal_dbd4509ae41757538458aa33e23b458e681c64d016849f865fd4207ef5adc08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf4cb3a5d1e3a3aa8ec9064d691473f6b3e0e13bb7ae9362d93bd483274b1f6->leave($__internal_bbf4cb3a5d1e3a3aa8ec9064d691473f6b3e0e13bb7ae9362d93bd483274b1f6_prof);

        
        $__internal_dbd4509ae41757538458aa33e23b458e681c64d016849f865fd4207ef5adc08d->leave($__internal_dbd4509ae41757538458aa33e23b458e681c64d016849f865fd4207ef5adc08d_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Admin:index.html.twig";
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
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}", "AQMArtBundle:Admin:index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Admin/index.html.twig");
    }
}
