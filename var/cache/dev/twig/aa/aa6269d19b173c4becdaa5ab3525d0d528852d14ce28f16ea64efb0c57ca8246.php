<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dd01f644843cf66b86a3da91f462d6e00068e003ed072110498430db17798e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b70e4a1be012ea1cf2ea9686ada2e501477df6fab290c542127aec77cb5dce95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70e4a1be012ea1cf2ea9686ada2e501477df6fab290c542127aec77cb5dce95->enter($__internal_b70e4a1be012ea1cf2ea9686ada2e501477df6fab290c542127aec77cb5dce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_fdc092eef414407ea8723f6adc7f643820e62ee47d1a248ad02944d8652071a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc092eef414407ea8723f6adc7f643820e62ee47d1a248ad02944d8652071a2->enter($__internal_fdc092eef414407ea8723f6adc7f643820e62ee47d1a248ad02944d8652071a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70e4a1be012ea1cf2ea9686ada2e501477df6fab290c542127aec77cb5dce95->leave($__internal_b70e4a1be012ea1cf2ea9686ada2e501477df6fab290c542127aec77cb5dce95_prof);

        
        $__internal_fdc092eef414407ea8723f6adc7f643820e62ee47d1a248ad02944d8652071a2->leave($__internal_fdc092eef414407ea8723f6adc7f643820e62ee47d1a248ad02944d8652071a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cdb43940a05289735eb04285c7dec7e4a0c2e53051905e4724d8d11ef7cb558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdb43940a05289735eb04285c7dec7e4a0c2e53051905e4724d8d11ef7cb558->enter($__internal_3cdb43940a05289735eb04285c7dec7e4a0c2e53051905e4724d8d11ef7cb558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_37f8b6236ef2a67280238caf13a0d04e6b37d7870d9dee8ca3f70cfbda9e0977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f8b6236ef2a67280238caf13a0d04e6b37d7870d9dee8ca3f70cfbda9e0977->enter($__internal_37f8b6236ef2a67280238caf13a0d04e6b37d7870d9dee8ca3f70cfbda9e0977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_37f8b6236ef2a67280238caf13a0d04e6b37d7870d9dee8ca3f70cfbda9e0977->leave($__internal_37f8b6236ef2a67280238caf13a0d04e6b37d7870d9dee8ca3f70cfbda9e0977_prof);

        
        $__internal_3cdb43940a05289735eb04285c7dec7e4a0c2e53051905e4724d8d11ef7cb558->leave($__internal_3cdb43940a05289735eb04285c7dec7e4a0c2e53051905e4724d8d11ef7cb558_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
