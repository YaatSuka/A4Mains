<?php

/* @AQMArt/Acceuil/index.html.twig */
class __TwigTemplate_36cb908077980090487325c40acd355556077585d109ab1a62f5ae7d75b209b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Acceuil/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c33b2d8f559baf142130ba8e5e306ba4a53c8ceba3a24027bb7acf2663da9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c33b2d8f559baf142130ba8e5e306ba4a53c8ceba3a24027bb7acf2663da9e4->enter($__internal_2c33b2d8f559baf142130ba8e5e306ba4a53c8ceba3a24027bb7acf2663da9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Acceuil/index.html.twig"));

        $__internal_1a5cb10dadf987a076c7c51f3bec6320a7a566d748d65094ec92297cf2d3301d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5cb10dadf987a076c7c51f3bec6320a7a566d748d65094ec92297cf2d3301d->enter($__internal_1a5cb10dadf987a076c7c51f3bec6320a7a566d748d65094ec92297cf2d3301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Acceuil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c33b2d8f559baf142130ba8e5e306ba4a53c8ceba3a24027bb7acf2663da9e4->leave($__internal_2c33b2d8f559baf142130ba8e5e306ba4a53c8ceba3a24027bb7acf2663da9e4_prof);

        
        $__internal_1a5cb10dadf987a076c7c51f3bec6320a7a566d748d65094ec92297cf2d3301d->leave($__internal_1a5cb10dadf987a076c7c51f3bec6320a7a566d748d65094ec92297cf2d3301d_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Acceuil/index.html.twig";
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
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}
", "@AQMArt/Acceuil/index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Acceuil\\index.html.twig");
    }
}
