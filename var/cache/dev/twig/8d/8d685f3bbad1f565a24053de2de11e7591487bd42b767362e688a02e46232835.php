<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_815746a82508efd27345a454493b5364446b054465cd40cd80394602bd44dd49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8f674db42a71a5618037cdf1f7253bad3bc8edcbc16535d06a9d3d40585f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8f674db42a71a5618037cdf1f7253bad3bc8edcbc16535d06a9d3d40585f50->enter($__internal_bf8f674db42a71a5618037cdf1f7253bad3bc8edcbc16535d06a9d3d40585f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_c9f24d3a5508de25dcbf3f15d01b4908f52ef4d15eac43b8c186073b69bbfe0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f24d3a5508de25dcbf3f15d01b4908f52ef4d15eac43b8c186073b69bbfe0c->enter($__internal_c9f24d3a5508de25dcbf3f15d01b4908f52ef4d15eac43b8c186073b69bbfe0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bf8f674db42a71a5618037cdf1f7253bad3bc8edcbc16535d06a9d3d40585f50->leave($__internal_bf8f674db42a71a5618037cdf1f7253bad3bc8edcbc16535d06a9d3d40585f50_prof);

        
        $__internal_c9f24d3a5508de25dcbf3f15d01b4908f52ef4d15eac43b8c186073b69bbfe0c->leave($__internal_c9f24d3a5508de25dcbf3f15d01b4908f52ef4d15eac43b8c186073b69bbfe0c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_12c324c8576b451d29e084b791a5ebf6ba4ef0168b92b9f6bc57cf9d9e2b16cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c324c8576b451d29e084b791a5ebf6ba4ef0168b92b9f6bc57cf9d9e2b16cf->enter($__internal_12c324c8576b451d29e084b791a5ebf6ba4ef0168b92b9f6bc57cf9d9e2b16cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c83da2d2ff6270c03c5472bf01759b65e8206fd21ac3bc7da701bf64b5818dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83da2d2ff6270c03c5472bf01759b65e8206fd21ac3bc7da701bf64b5818dd1->enter($__internal_c83da2d2ff6270c03c5472bf01759b65e8206fd21ac3bc7da701bf64b5818dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_c83da2d2ff6270c03c5472bf01759b65e8206fd21ac3bc7da701bf64b5818dd1->leave($__internal_c83da2d2ff6270c03c5472bf01759b65e8206fd21ac3bc7da701bf64b5818dd1_prof);

        
        $__internal_12c324c8576b451d29e084b791a5ebf6ba4ef0168b92b9f6bc57cf9d9e2b16cf->leave($__internal_12c324c8576b451d29e084b791a5ebf6ba4ef0168b92b9f6bc57cf9d9e2b16cf_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_12ddd0d4e8be5e7df5f86c19f08697558c7ebf01212f600f834767172decdcfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ddd0d4e8be5e7df5f86c19f08697558c7ebf01212f600f834767172decdcfe->enter($__internal_12ddd0d4e8be5e7df5f86c19f08697558c7ebf01212f600f834767172decdcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_31dcb8c38d82a72dc00acc969a6e32e3654181c3b5d4673cbb0ec0960aa5109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dcb8c38d82a72dc00acc969a6e32e3654181c3b5d4673cbb0ec0960aa5109c->enter($__internal_31dcb8c38d82a72dc00acc969a6e32e3654181c3b5d4673cbb0ec0960aa5109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_31dcb8c38d82a72dc00acc969a6e32e3654181c3b5d4673cbb0ec0960aa5109c->leave($__internal_31dcb8c38d82a72dc00acc969a6e32e3654181c3b5d4673cbb0ec0960aa5109c_prof);

        
        $__internal_12ddd0d4e8be5e7df5f86c19f08697558c7ebf01212f600f834767172decdcfe->leave($__internal_12ddd0d4e8be5e7df5f86c19f08697558c7ebf01212f600f834767172decdcfe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_189a0a263f0bc939c70f03b33da410f788ed6746bebd932a35e86789b1938778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189a0a263f0bc939c70f03b33da410f788ed6746bebd932a35e86789b1938778->enter($__internal_189a0a263f0bc939c70f03b33da410f788ed6746bebd932a35e86789b1938778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_09b53a0e8bd29f881ff30c02364a63011163c11adfe0d9e31b63cb7d1d062af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b53a0e8bd29f881ff30c02364a63011163c11adfe0d9e31b63cb7d1d062af8->enter($__internal_09b53a0e8bd29f881ff30c02364a63011163c11adfe0d9e31b63cb7d1d062af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_09b53a0e8bd29f881ff30c02364a63011163c11adfe0d9e31b63cb7d1d062af8->leave($__internal_09b53a0e8bd29f881ff30c02364a63011163c11adfe0d9e31b63cb7d1d062af8_prof);

        
        $__internal_189a0a263f0bc939c70f03b33da410f788ed6746bebd932a35e86789b1938778->leave($__internal_189a0a263f0bc939c70f03b33da410f788ed6746bebd932a35e86789b1938778_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
