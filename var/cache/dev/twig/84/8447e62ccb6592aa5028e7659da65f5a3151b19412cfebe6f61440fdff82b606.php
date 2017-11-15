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
        $__internal_42f42a1035ceec2ff47dc5feb7128fbf4f91e5e137a424a998f4721c9a81d8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f42a1035ceec2ff47dc5feb7128fbf4f91e5e137a424a998f4721c9a81d8c0->enter($__internal_42f42a1035ceec2ff47dc5feb7128fbf4f91e5e137a424a998f4721c9a81d8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_8d3935e3ae78bb359743543bedc11f43ff21abc36555ae159b8973bd027d0f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3935e3ae78bb359743543bedc11f43ff21abc36555ae159b8973bd027d0f9f->enter($__internal_8d3935e3ae78bb359743543bedc11f43ff21abc36555ae159b8973bd027d0f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f42a1035ceec2ff47dc5feb7128fbf4f91e5e137a424a998f4721c9a81d8c0->leave($__internal_42f42a1035ceec2ff47dc5feb7128fbf4f91e5e137a424a998f4721c9a81d8c0_prof);

        
        $__internal_8d3935e3ae78bb359743543bedc11f43ff21abc36555ae159b8973bd027d0f9f->leave($__internal_8d3935e3ae78bb359743543bedc11f43ff21abc36555ae159b8973bd027d0f9f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efa6ef7a483679b37b28c79202d3c6aaef1ecbb2219969a7fb858a55145c5922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa6ef7a483679b37b28c79202d3c6aaef1ecbb2219969a7fb858a55145c5922->enter($__internal_efa6ef7a483679b37b28c79202d3c6aaef1ecbb2219969a7fb858a55145c5922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88a7c08ea695c140b0b7373d8586b770012d58ef9c4a4dfdc20fa78b70705326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a7c08ea695c140b0b7373d8586b770012d58ef9c4a4dfdc20fa78b70705326->enter($__internal_88a7c08ea695c140b0b7373d8586b770012d58ef9c4a4dfdc20fa78b70705326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_88a7c08ea695c140b0b7373d8586b770012d58ef9c4a4dfdc20fa78b70705326->leave($__internal_88a7c08ea695c140b0b7373d8586b770012d58ef9c4a4dfdc20fa78b70705326_prof);

        
        $__internal_efa6ef7a483679b37b28c79202d3c6aaef1ecbb2219969a7fb858a55145c5922->leave($__internal_efa6ef7a483679b37b28c79202d3c6aaef1ecbb2219969a7fb858a55145c5922_prof);

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
