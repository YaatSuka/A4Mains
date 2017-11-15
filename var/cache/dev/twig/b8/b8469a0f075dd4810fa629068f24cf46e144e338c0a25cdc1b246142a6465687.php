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
        $__internal_b6b90c71c032664f442cfb246ffb006458a863be5b6ceb024937fb5a9d40bf22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b90c71c032664f442cfb246ffb006458a863be5b6ceb024937fb5a9d40bf22->enter($__internal_b6b90c71c032664f442cfb246ffb006458a863be5b6ceb024937fb5a9d40bf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Acceuil/index.html.twig"));

        $__internal_bae9645506f394046f03ed6429b995b7f15227529593841251ec2ffd713f5dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae9645506f394046f03ed6429b995b7f15227529593841251ec2ffd713f5dc5->enter($__internal_bae9645506f394046f03ed6429b995b7f15227529593841251ec2ffd713f5dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Acceuil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b90c71c032664f442cfb246ffb006458a863be5b6ceb024937fb5a9d40bf22->leave($__internal_b6b90c71c032664f442cfb246ffb006458a863be5b6ceb024937fb5a9d40bf22_prof);

        
        $__internal_bae9645506f394046f03ed6429b995b7f15227529593841251ec2ffd713f5dc5->leave($__internal_bae9645506f394046f03ed6429b995b7f15227529593841251ec2ffd713f5dc5_prof);

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
