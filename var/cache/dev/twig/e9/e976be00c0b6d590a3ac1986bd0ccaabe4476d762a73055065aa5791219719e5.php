<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_36b9594fa6b60c1184b4e2b5508391b4834a57741f68c95c45aed8d2e477dc19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f47da2fd1f758cb1f408d3985f0545f5d17543bb9b3336885201ae6feaa969cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47da2fd1f758cb1f408d3985f0545f5d17543bb9b3336885201ae6feaa969cc->enter($__internal_f47da2fd1f758cb1f408d3985f0545f5d17543bb9b3336885201ae6feaa969cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5805ffd69ec5ff45d11e5a06ff4d3d8f19245c4e54a03dfdafadb38b42b3ced2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5805ffd69ec5ff45d11e5a06ff4d3d8f19245c4e54a03dfdafadb38b42b3ced2->enter($__internal_5805ffd69ec5ff45d11e5a06ff4d3d8f19245c4e54a03dfdafadb38b42b3ced2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f47da2fd1f758cb1f408d3985f0545f5d17543bb9b3336885201ae6feaa969cc->leave($__internal_f47da2fd1f758cb1f408d3985f0545f5d17543bb9b3336885201ae6feaa969cc_prof);

        
        $__internal_5805ffd69ec5ff45d11e5a06ff4d3d8f19245c4e54a03dfdafadb38b42b3ced2->leave($__internal_5805ffd69ec5ff45d11e5a06ff4d3d8f19245c4e54a03dfdafadb38b42b3ced2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_108ea7b8d3cac570aeda60c8a2542a812cb0b787b9bac546bff9056e065a5c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108ea7b8d3cac570aeda60c8a2542a812cb0b787b9bac546bff9056e065a5c1b->enter($__internal_108ea7b8d3cac570aeda60c8a2542a812cb0b787b9bac546bff9056e065a5c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06875beaad296ecade7878e5933afde77e5c3d1f911b811e25457cb3005dbd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06875beaad296ecade7878e5933afde77e5c3d1f911b811e25457cb3005dbd9a->enter($__internal_06875beaad296ecade7878e5933afde77e5c3d1f911b811e25457cb3005dbd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_06875beaad296ecade7878e5933afde77e5c3d1f911b811e25457cb3005dbd9a->leave($__internal_06875beaad296ecade7878e5933afde77e5c3d1f911b811e25457cb3005dbd9a_prof);

        
        $__internal_108ea7b8d3cac570aeda60c8a2542a812cb0b787b9bac546bff9056e065a5c1b->leave($__internal_108ea7b8d3cac570aeda60c8a2542a812cb0b787b9bac546bff9056e065a5c1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
