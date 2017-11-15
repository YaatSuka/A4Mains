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
        $__internal_b24f3277515d817d7f2b95bf0e3b51a3fc11b41852cd33353244b726b8e17232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24f3277515d817d7f2b95bf0e3b51a3fc11b41852cd33353244b726b8e17232->enter($__internal_b24f3277515d817d7f2b95bf0e3b51a3fc11b41852cd33353244b726b8e17232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_1ccaff271f772898467a03ac0cd6c48342406a05fda8b7949504aeb18af0dea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccaff271f772898467a03ac0cd6c48342406a05fda8b7949504aeb18af0dea0->enter($__internal_1ccaff271f772898467a03ac0cd6c48342406a05fda8b7949504aeb18af0dea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24f3277515d817d7f2b95bf0e3b51a3fc11b41852cd33353244b726b8e17232->leave($__internal_b24f3277515d817d7f2b95bf0e3b51a3fc11b41852cd33353244b726b8e17232_prof);

        
        $__internal_1ccaff271f772898467a03ac0cd6c48342406a05fda8b7949504aeb18af0dea0->leave($__internal_1ccaff271f772898467a03ac0cd6c48342406a05fda8b7949504aeb18af0dea0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48b8cd6779e25c9f1459e0dc4487378beebb7a51b1ab556f72206eb732cc1bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b8cd6779e25c9f1459e0dc4487378beebb7a51b1ab556f72206eb732cc1bbb->enter($__internal_48b8cd6779e25c9f1459e0dc4487378beebb7a51b1ab556f72206eb732cc1bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_73945d0a4e6f7f9fccdc846420a2b302c16cd37b5b78158fafc19137bf615dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73945d0a4e6f7f9fccdc846420a2b302c16cd37b5b78158fafc19137bf615dae->enter($__internal_73945d0a4e6f7f9fccdc846420a2b302c16cd37b5b78158fafc19137bf615dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_73945d0a4e6f7f9fccdc846420a2b302c16cd37b5b78158fafc19137bf615dae->leave($__internal_73945d0a4e6f7f9fccdc846420a2b302c16cd37b5b78158fafc19137bf615dae_prof);

        
        $__internal_48b8cd6779e25c9f1459e0dc4487378beebb7a51b1ab556f72206eb732cc1bbb->leave($__internal_48b8cd6779e25c9f1459e0dc4487378beebb7a51b1ab556f72206eb732cc1bbb_prof);

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
