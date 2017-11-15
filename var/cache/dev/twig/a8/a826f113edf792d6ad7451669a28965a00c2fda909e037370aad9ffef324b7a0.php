<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_fff81f9a65c5d69dbea3e0a180762e60ea061da026d09923023bddf28fa65ee3 extends Twig_Template
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
        $__internal_a310f27c2cbbb621b4f5e6e5439e6bf197a50d2105380b8de7a4f98aef59d054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a310f27c2cbbb621b4f5e6e5439e6bf197a50d2105380b8de7a4f98aef59d054->enter($__internal_a310f27c2cbbb621b4f5e6e5439e6bf197a50d2105380b8de7a4f98aef59d054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_9acf6b827b6d1b790c7830be6d9eeeabedd8a5543d49d301b85b140d0366479b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acf6b827b6d1b790c7830be6d9eeeabedd8a5543d49d301b85b140d0366479b->enter($__internal_9acf6b827b6d1b790c7830be6d9eeeabedd8a5543d49d301b85b140d0366479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a310f27c2cbbb621b4f5e6e5439e6bf197a50d2105380b8de7a4f98aef59d054->leave($__internal_a310f27c2cbbb621b4f5e6e5439e6bf197a50d2105380b8de7a4f98aef59d054_prof);

        
        $__internal_9acf6b827b6d1b790c7830be6d9eeeabedd8a5543d49d301b85b140d0366479b->leave($__internal_9acf6b827b6d1b790c7830be6d9eeeabedd8a5543d49d301b85b140d0366479b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9df86e38a5a423dadb9dc53d4283dde2e9426325ed72f7e75332b2b77867db29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df86e38a5a423dadb9dc53d4283dde2e9426325ed72f7e75332b2b77867db29->enter($__internal_9df86e38a5a423dadb9dc53d4283dde2e9426325ed72f7e75332b2b77867db29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4d46ad65c745d3cda5ff9a567a4d378fa2fc701fe6f535b564779d69013b4f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d46ad65c745d3cda5ff9a567a4d378fa2fc701fe6f535b564779d69013b4f04->enter($__internal_4d46ad65c745d3cda5ff9a567a4d378fa2fc701fe6f535b564779d69013b4f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_4d46ad65c745d3cda5ff9a567a4d378fa2fc701fe6f535b564779d69013b4f04->leave($__internal_4d46ad65c745d3cda5ff9a567a4d378fa2fc701fe6f535b564779d69013b4f04_prof);

        
        $__internal_9df86e38a5a423dadb9dc53d4283dde2e9426325ed72f7e75332b2b77867db29->leave($__internal_9df86e38a5a423dadb9dc53d4283dde2e9426325ed72f7e75332b2b77867db29_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2b0ccb9ea1ba807ad3b0d2b4f2d28aaa23e7025407d9f3ec475cf80cab5fc7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0ccb9ea1ba807ad3b0d2b4f2d28aaa23e7025407d9f3ec475cf80cab5fc7eb->enter($__internal_2b0ccb9ea1ba807ad3b0d2b4f2d28aaa23e7025407d9f3ec475cf80cab5fc7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dabcdd5bd7046623680c7e068f98bc36d31e50dcb478f5aa4dd119547189344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabcdd5bd7046623680c7e068f98bc36d31e50dcb478f5aa4dd119547189344c->enter($__internal_dabcdd5bd7046623680c7e068f98bc36d31e50dcb478f5aa4dd119547189344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_dabcdd5bd7046623680c7e068f98bc36d31e50dcb478f5aa4dd119547189344c->leave($__internal_dabcdd5bd7046623680c7e068f98bc36d31e50dcb478f5aa4dd119547189344c_prof);

        
        $__internal_2b0ccb9ea1ba807ad3b0d2b4f2d28aaa23e7025407d9f3ec475cf80cab5fc7eb->leave($__internal_2b0ccb9ea1ba807ad3b0d2b4f2d28aaa23e7025407d9f3ec475cf80cab5fc7eb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_057f66b97fbbb03ce99e2761ac3e24ee10d8f170bd082e7c47a31cc8da991171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057f66b97fbbb03ce99e2761ac3e24ee10d8f170bd082e7c47a31cc8da991171->enter($__internal_057f66b97fbbb03ce99e2761ac3e24ee10d8f170bd082e7c47a31cc8da991171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f0eb975ff2e44e31e4c57a4d0dd0d2d8755bda813136ee0145b087ee2c0ff1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eb975ff2e44e31e4c57a4d0dd0d2d8755bda813136ee0145b087ee2c0ff1e2->enter($__internal_f0eb975ff2e44e31e4c57a4d0dd0d2d8755bda813136ee0145b087ee2c0ff1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f0eb975ff2e44e31e4c57a4d0dd0d2d8755bda813136ee0145b087ee2c0ff1e2->leave($__internal_f0eb975ff2e44e31e4c57a4d0dd0d2d8755bda813136ee0145b087ee2c0ff1e2_prof);

        
        $__internal_057f66b97fbbb03ce99e2761ac3e24ee10d8f170bd082e7c47a31cc8da991171->leave($__internal_057f66b97fbbb03ce99e2761ac3e24ee10d8f170bd082e7c47a31cc8da991171_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
