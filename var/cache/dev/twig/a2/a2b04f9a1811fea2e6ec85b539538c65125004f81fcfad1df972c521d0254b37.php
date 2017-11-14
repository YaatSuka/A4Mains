<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_c16998deb6c0d4b11e062c8a84c7a0d87a82a1fb41eb31375acb50c36a0cf537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_a1cc6e2117642a10717957d69593a41e79d4091430aa8e24436c98678fbefb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cc6e2117642a10717957d69593a41e79d4091430aa8e24436c98678fbefb3a->enter($__internal_a1cc6e2117642a10717957d69593a41e79d4091430aa8e24436c98678fbefb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_86aff74d441b9c515431a684e760994da234fe841c5b565c6e7ab52a784a5565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86aff74d441b9c515431a684e760994da234fe841c5b565c6e7ab52a784a5565->enter($__internal_86aff74d441b9c515431a684e760994da234fe841c5b565c6e7ab52a784a5565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1cc6e2117642a10717957d69593a41e79d4091430aa8e24436c98678fbefb3a->leave($__internal_a1cc6e2117642a10717957d69593a41e79d4091430aa8e24436c98678fbefb3a_prof);

        
        $__internal_86aff74d441b9c515431a684e760994da234fe841c5b565c6e7ab52a784a5565->leave($__internal_86aff74d441b9c515431a684e760994da234fe841c5b565c6e7ab52a784a5565_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9613aadf9a019307a41fe38f50f7dc58c5752c6aed0cba09e8985d8ab672d66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9613aadf9a019307a41fe38f50f7dc58c5752c6aed0cba09e8985d8ab672d66a->enter($__internal_9613aadf9a019307a41fe38f50f7dc58c5752c6aed0cba09e8985d8ab672d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a3d72b3d1f7f1f83ff9dea22c0f2795a5c6e6b85fe8ece8a1b08b981347f664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3d72b3d1f7f1f83ff9dea22c0f2795a5c6e6b85fe8ece8a1b08b981347f664->enter($__internal_9a3d72b3d1f7f1f83ff9dea22c0f2795a5c6e6b85fe8ece8a1b08b981347f664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9a3d72b3d1f7f1f83ff9dea22c0f2795a5c6e6b85fe8ece8a1b08b981347f664->leave($__internal_9a3d72b3d1f7f1f83ff9dea22c0f2795a5c6e6b85fe8ece8a1b08b981347f664_prof);

        
        $__internal_9613aadf9a019307a41fe38f50f7dc58c5752c6aed0cba09e8985d8ab672d66a->leave($__internal_9613aadf9a019307a41fe38f50f7dc58c5752c6aed0cba09e8985d8ab672d66a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
