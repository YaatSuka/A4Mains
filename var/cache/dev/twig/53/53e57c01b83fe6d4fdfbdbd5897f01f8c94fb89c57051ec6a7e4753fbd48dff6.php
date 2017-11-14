<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9a10e6ca35d19c80a31a2cb8ddae3f0c15caaa20dba8ecdcebc69fd72ab99002 extends Twig_Template
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
        $__internal_ad54ef04f27d9c778a28b4b1ef10f217dc64b048fb60281b05f47af913bfd1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad54ef04f27d9c778a28b4b1ef10f217dc64b048fb60281b05f47af913bfd1bb->enter($__internal_ad54ef04f27d9c778a28b4b1ef10f217dc64b048fb60281b05f47af913bfd1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_d1392d0b7acedb14bbc37c5ef87f4d1e840db0b6da1bac4a71eed834aba4c32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1392d0b7acedb14bbc37c5ef87f4d1e840db0b6da1bac4a71eed834aba4c32e->enter($__internal_d1392d0b7acedb14bbc37c5ef87f4d1e840db0b6da1bac4a71eed834aba4c32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ad54ef04f27d9c778a28b4b1ef10f217dc64b048fb60281b05f47af913bfd1bb->leave($__internal_ad54ef04f27d9c778a28b4b1ef10f217dc64b048fb60281b05f47af913bfd1bb_prof);

        
        $__internal_d1392d0b7acedb14bbc37c5ef87f4d1e840db0b6da1bac4a71eed834aba4c32e->leave($__internal_d1392d0b7acedb14bbc37c5ef87f4d1e840db0b6da1bac4a71eed834aba4c32e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_42e2cbcdfd2a05272f173d3737525b4d4bd8dd8686a91f8958d4a7cd4fafb1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e2cbcdfd2a05272f173d3737525b4d4bd8dd8686a91f8958d4a7cd4fafb1b4->enter($__internal_42e2cbcdfd2a05272f173d3737525b4d4bd8dd8686a91f8958d4a7cd4fafb1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_924ab6c5750cccd32a2feafec2c3551ac52e7dd42f542187a6726a54832e9dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924ab6c5750cccd32a2feafec2c3551ac52e7dd42f542187a6726a54832e9dd7->enter($__internal_924ab6c5750cccd32a2feafec2c3551ac52e7dd42f542187a6726a54832e9dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_924ab6c5750cccd32a2feafec2c3551ac52e7dd42f542187a6726a54832e9dd7->leave($__internal_924ab6c5750cccd32a2feafec2c3551ac52e7dd42f542187a6726a54832e9dd7_prof);

        
        $__internal_42e2cbcdfd2a05272f173d3737525b4d4bd8dd8686a91f8958d4a7cd4fafb1b4->leave($__internal_42e2cbcdfd2a05272f173d3737525b4d4bd8dd8686a91f8958d4a7cd4fafb1b4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_109d9a30ddb0a1b49d0a9d0413774c30a65d1fe80e612af7019d8fc19741b1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109d9a30ddb0a1b49d0a9d0413774c30a65d1fe80e612af7019d8fc19741b1d2->enter($__internal_109d9a30ddb0a1b49d0a9d0413774c30a65d1fe80e612af7019d8fc19741b1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4b1d6ae75ba960f266fbf67155961b33ccb72b77f1199d52572cefeea45f9924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1d6ae75ba960f266fbf67155961b33ccb72b77f1199d52572cefeea45f9924->enter($__internal_4b1d6ae75ba960f266fbf67155961b33ccb72b77f1199d52572cefeea45f9924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_4b1d6ae75ba960f266fbf67155961b33ccb72b77f1199d52572cefeea45f9924->leave($__internal_4b1d6ae75ba960f266fbf67155961b33ccb72b77f1199d52572cefeea45f9924_prof);

        
        $__internal_109d9a30ddb0a1b49d0a9d0413774c30a65d1fe80e612af7019d8fc19741b1d2->leave($__internal_109d9a30ddb0a1b49d0a9d0413774c30a65d1fe80e612af7019d8fc19741b1d2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_23c4c2403295d10c3b4b38611caf4f3cb4cbb9f70cf00a75918525622608d771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c4c2403295d10c3b4b38611caf4f3cb4cbb9f70cf00a75918525622608d771->enter($__internal_23c4c2403295d10c3b4b38611caf4f3cb4cbb9f70cf00a75918525622608d771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_82ad9e1d08339789fc51a82221a643f7cc09a2ae6ce82496e0287e74362982e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ad9e1d08339789fc51a82221a643f7cc09a2ae6ce82496e0287e74362982e8->enter($__internal_82ad9e1d08339789fc51a82221a643f7cc09a2ae6ce82496e0287e74362982e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_82ad9e1d08339789fc51a82221a643f7cc09a2ae6ce82496e0287e74362982e8->leave($__internal_82ad9e1d08339789fc51a82221a643f7cc09a2ae6ce82496e0287e74362982e8_prof);

        
        $__internal_23c4c2403295d10c3b4b38611caf4f3cb4cbb9f70cf00a75918525622608d771->leave($__internal_23c4c2403295d10c3b4b38611caf4f3cb4cbb9f70cf00a75918525622608d771_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
