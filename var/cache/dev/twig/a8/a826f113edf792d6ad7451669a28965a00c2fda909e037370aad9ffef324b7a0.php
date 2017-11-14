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
        $__internal_3f0c640b549b522f6f933c7ef08ea2eaf2f179993738748b56062618954f693c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0c640b549b522f6f933c7ef08ea2eaf2f179993738748b56062618954f693c->enter($__internal_3f0c640b549b522f6f933c7ef08ea2eaf2f179993738748b56062618954f693c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a94380373bc5c31eadbea3779573847947cd3c3cebc386f03d1016ab638dd00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94380373bc5c31eadbea3779573847947cd3c3cebc386f03d1016ab638dd00a->enter($__internal_a94380373bc5c31eadbea3779573847947cd3c3cebc386f03d1016ab638dd00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3f0c640b549b522f6f933c7ef08ea2eaf2f179993738748b56062618954f693c->leave($__internal_3f0c640b549b522f6f933c7ef08ea2eaf2f179993738748b56062618954f693c_prof);

        
        $__internal_a94380373bc5c31eadbea3779573847947cd3c3cebc386f03d1016ab638dd00a->leave($__internal_a94380373bc5c31eadbea3779573847947cd3c3cebc386f03d1016ab638dd00a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_feecb83631942bcf9038fd3fd59a8f385edc0397df15f64b61b0b396ecdbaa6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feecb83631942bcf9038fd3fd59a8f385edc0397df15f64b61b0b396ecdbaa6d->enter($__internal_feecb83631942bcf9038fd3fd59a8f385edc0397df15f64b61b0b396ecdbaa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7bc3446800102de593ff9e315f07f55d5bae06fc103eb8a915714bb7b3b6d1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc3446800102de593ff9e315f07f55d5bae06fc103eb8a915714bb7b3b6d1cc->enter($__internal_7bc3446800102de593ff9e315f07f55d5bae06fc103eb8a915714bb7b3b6d1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_7bc3446800102de593ff9e315f07f55d5bae06fc103eb8a915714bb7b3b6d1cc->leave($__internal_7bc3446800102de593ff9e315f07f55d5bae06fc103eb8a915714bb7b3b6d1cc_prof);

        
        $__internal_feecb83631942bcf9038fd3fd59a8f385edc0397df15f64b61b0b396ecdbaa6d->leave($__internal_feecb83631942bcf9038fd3fd59a8f385edc0397df15f64b61b0b396ecdbaa6d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cd0de38999c6e9c335a9e319e4f7aff23790c5c76de5cbc54192af58e23f7021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0de38999c6e9c335a9e319e4f7aff23790c5c76de5cbc54192af58e23f7021->enter($__internal_cd0de38999c6e9c335a9e319e4f7aff23790c5c76de5cbc54192af58e23f7021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4f3d6e13a8a563d27938958526e331f5bb899cbca056eea54f79572feb82aecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3d6e13a8a563d27938958526e331f5bb899cbca056eea54f79572feb82aecd->enter($__internal_4f3d6e13a8a563d27938958526e331f5bb899cbca056eea54f79572feb82aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_4f3d6e13a8a563d27938958526e331f5bb899cbca056eea54f79572feb82aecd->leave($__internal_4f3d6e13a8a563d27938958526e331f5bb899cbca056eea54f79572feb82aecd_prof);

        
        $__internal_cd0de38999c6e9c335a9e319e4f7aff23790c5c76de5cbc54192af58e23f7021->leave($__internal_cd0de38999c6e9c335a9e319e4f7aff23790c5c76de5cbc54192af58e23f7021_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8d706ed5690bef2a97bbac7fbcff7c11fde916c93235772ce1f691fd6635fa52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d706ed5690bef2a97bbac7fbcff7c11fde916c93235772ce1f691fd6635fa52->enter($__internal_8d706ed5690bef2a97bbac7fbcff7c11fde916c93235772ce1f691fd6635fa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_adff1ff1cc68e196aafd2797c9ee7256f1db02133563293d31b815f958acf3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adff1ff1cc68e196aafd2797c9ee7256f1db02133563293d31b815f958acf3a7->enter($__internal_adff1ff1cc68e196aafd2797c9ee7256f1db02133563293d31b815f958acf3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_adff1ff1cc68e196aafd2797c9ee7256f1db02133563293d31b815f958acf3a7->leave($__internal_adff1ff1cc68e196aafd2797c9ee7256f1db02133563293d31b815f958acf3a7_prof);

        
        $__internal_8d706ed5690bef2a97bbac7fbcff7c11fde916c93235772ce1f691fd6635fa52->leave($__internal_8d706ed5690bef2a97bbac7fbcff7c11fde916c93235772ce1f691fd6635fa52_prof);

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
