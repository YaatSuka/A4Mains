<?php

/* @AQMArt/Admin/index.html.twig */
class __TwigTemplate_776e5e6be61c98e99d833f528bdccbb11e6125906d2b90a4321db51691c2d8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Admin/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba4f0b42c5584b0d18278c88ae3865550f8808c683a194f827786e88f4abaccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4f0b42c5584b0d18278c88ae3865550f8808c683a194f827786e88f4abaccf->enter($__internal_ba4f0b42c5584b0d18278c88ae3865550f8808c683a194f827786e88f4abaccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/index.html.twig"));

        $__internal_e38ee07e8ed030aa78da8d34b92880f82d825f66e4cea1d472d97ccbf368fbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38ee07e8ed030aa78da8d34b92880f82d825f66e4cea1d472d97ccbf368fbb3->enter($__internal_e38ee07e8ed030aa78da8d34b92880f82d825f66e4cea1d472d97ccbf368fbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba4f0b42c5584b0d18278c88ae3865550f8808c683a194f827786e88f4abaccf->leave($__internal_ba4f0b42c5584b0d18278c88ae3865550f8808c683a194f827786e88f4abaccf_prof);

        
        $__internal_e38ee07e8ed030aa78da8d34b92880f82d825f66e4cea1d472d97ccbf368fbb3->leave($__internal_e38ee07e8ed030aa78da8d34b92880f82d825f66e4cea1d472d97ccbf368fbb3_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Admin/index.html.twig";
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
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}", "@AQMArt/Admin/index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Admin\\index.html.twig");
    }
}
