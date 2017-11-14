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
        $__internal_5b6474a3bfdfe6c341425ae1b58fc5da6b304e27441f3dafd808e0e5295882ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6474a3bfdfe6c341425ae1b58fc5da6b304e27441f3dafd808e0e5295882ee->enter($__internal_5b6474a3bfdfe6c341425ae1b58fc5da6b304e27441f3dafd808e0e5295882ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/index.html.twig"));

        $__internal_cdd29ca598c2181c2e577866b5c6d3b7a1934a208d1c1230ef34594bf3480f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd29ca598c2181c2e577866b5c6d3b7a1934a208d1c1230ef34594bf3480f22->enter($__internal_cdd29ca598c2181c2e577866b5c6d3b7a1934a208d1c1230ef34594bf3480f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6474a3bfdfe6c341425ae1b58fc5da6b304e27441f3dafd808e0e5295882ee->leave($__internal_5b6474a3bfdfe6c341425ae1b58fc5da6b304e27441f3dafd808e0e5295882ee_prof);

        
        $__internal_cdd29ca598c2181c2e577866b5c6d3b7a1934a208d1c1230ef34594bf3480f22->leave($__internal_cdd29ca598c2181c2e577866b5c6d3b7a1934a208d1c1230ef34594bf3480f22_prof);

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
