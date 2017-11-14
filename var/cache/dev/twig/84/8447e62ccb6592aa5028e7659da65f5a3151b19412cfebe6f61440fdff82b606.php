<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_694a0e3a2dce58da7c6897121e9e7864808bd8b636948acd87dd602cb52eeb90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_51f3a0be68325e7efe5881781b70faf5aceea2ded133d45906d59484c7e0cba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f3a0be68325e7efe5881781b70faf5aceea2ded133d45906d59484c7e0cba8->enter($__internal_51f3a0be68325e7efe5881781b70faf5aceea2ded133d45906d59484c7e0cba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_5bbffbaf9f534bbe6f1163ba142d00cbe10f6a76c27ea13b565c6c44eeaeec56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbffbaf9f534bbe6f1163ba142d00cbe10f6a76c27ea13b565c6c44eeaeec56->enter($__internal_5bbffbaf9f534bbe6f1163ba142d00cbe10f6a76c27ea13b565c6c44eeaeec56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f3a0be68325e7efe5881781b70faf5aceea2ded133d45906d59484c7e0cba8->leave($__internal_51f3a0be68325e7efe5881781b70faf5aceea2ded133d45906d59484c7e0cba8_prof);

        
        $__internal_5bbffbaf9f534bbe6f1163ba142d00cbe10f6a76c27ea13b565c6c44eeaeec56->leave($__internal_5bbffbaf9f534bbe6f1163ba142d00cbe10f6a76c27ea13b565c6c44eeaeec56_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d295b85a5055287f655d9104700ae53e972dce2a3da9fc2ecd5641739be983c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d295b85a5055287f655d9104700ae53e972dce2a3da9fc2ecd5641739be983c->enter($__internal_0d295b85a5055287f655d9104700ae53e972dce2a3da9fc2ecd5641739be983c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d98b7d3c95bb93cbf273e1e7e6327d2e1b503dd0cd6c4ef66547680b869e3529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98b7d3c95bb93cbf273e1e7e6327d2e1b503dd0cd6c4ef66547680b869e3529->enter($__internal_d98b7d3c95bb93cbf273e1e7e6327d2e1b503dd0cd6c4ef66547680b869e3529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d98b7d3c95bb93cbf273e1e7e6327d2e1b503dd0cd6c4ef66547680b869e3529->leave($__internal_d98b7d3c95bb93cbf273e1e7e6327d2e1b503dd0cd6c4ef66547680b869e3529_prof);

        
        $__internal_0d295b85a5055287f655d9104700ae53e972dce2a3da9fc2ecd5641739be983c->leave($__internal_0d295b85a5055287f655d9104700ae53e972dce2a3da9fc2ecd5641739be983c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
