<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_562683ef6811a2d1cda9877704be99d703a99ab3840a7e16614d69c22405eabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_06678a8bc7dabe14eb16f433f381df6cf067ae37c91655ee5de4df02f69e14ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06678a8bc7dabe14eb16f433f381df6cf067ae37c91655ee5de4df02f69e14ef->enter($__internal_06678a8bc7dabe14eb16f433f381df6cf067ae37c91655ee5de4df02f69e14ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_14dce44a8198c72fb149df4909c1ce5e39606dfce889b141f0e82cf15fc35618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dce44a8198c72fb149df4909c1ce5e39606dfce889b141f0e82cf15fc35618->enter($__internal_14dce44a8198c72fb149df4909c1ce5e39606dfce889b141f0e82cf15fc35618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06678a8bc7dabe14eb16f433f381df6cf067ae37c91655ee5de4df02f69e14ef->leave($__internal_06678a8bc7dabe14eb16f433f381df6cf067ae37c91655ee5de4df02f69e14ef_prof);

        
        $__internal_14dce44a8198c72fb149df4909c1ce5e39606dfce889b141f0e82cf15fc35618->leave($__internal_14dce44a8198c72fb149df4909c1ce5e39606dfce889b141f0e82cf15fc35618_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e4bd333eca0d5473e50e69d78c1ad7dd80cddf187a8625627d4200a2a7e7f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4bd333eca0d5473e50e69d78c1ad7dd80cddf187a8625627d4200a2a7e7f9d->enter($__internal_5e4bd333eca0d5473e50e69d78c1ad7dd80cddf187a8625627d4200a2a7e7f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51f447228fc7857070b4f8552cfb9a7b9b2f73dfc12f795d930faa5738a4cca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f447228fc7857070b4f8552cfb9a7b9b2f73dfc12f795d930faa5738a4cca1->enter($__internal_51f447228fc7857070b4f8552cfb9a7b9b2f73dfc12f795d930faa5738a4cca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_51f447228fc7857070b4f8552cfb9a7b9b2f73dfc12f795d930faa5738a4cca1->leave($__internal_51f447228fc7857070b4f8552cfb9a7b9b2f73dfc12f795d930faa5738a4cca1_prof);

        
        $__internal_5e4bd333eca0d5473e50e69d78c1ad7dd80cddf187a8625627d4200a2a7e7f9d->leave($__internal_5e4bd333eca0d5473e50e69d78c1ad7dd80cddf187a8625627d4200a2a7e7f9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
