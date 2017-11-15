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
        $__internal_ead370cd09f059d9b6d844acf779a1029db7c7e8f0183ae4850d7640fa7b8f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead370cd09f059d9b6d844acf779a1029db7c7e8f0183ae4850d7640fa7b8f1f->enter($__internal_ead370cd09f059d9b6d844acf779a1029db7c7e8f0183ae4850d7640fa7b8f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_65523c3f04bae9bb82ca113fd76022947fe98939e0068e85ab636bcbdf087ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65523c3f04bae9bb82ca113fd76022947fe98939e0068e85ab636bcbdf087ef9->enter($__internal_65523c3f04bae9bb82ca113fd76022947fe98939e0068e85ab636bcbdf087ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ead370cd09f059d9b6d844acf779a1029db7c7e8f0183ae4850d7640fa7b8f1f->leave($__internal_ead370cd09f059d9b6d844acf779a1029db7c7e8f0183ae4850d7640fa7b8f1f_prof);

        
        $__internal_65523c3f04bae9bb82ca113fd76022947fe98939e0068e85ab636bcbdf087ef9->leave($__internal_65523c3f04bae9bb82ca113fd76022947fe98939e0068e85ab636bcbdf087ef9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_50d287ce3e9bd2bd7c67f7c30a33f3b7083c16e6df16c6aef07642070ccb8eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d287ce3e9bd2bd7c67f7c30a33f3b7083c16e6df16c6aef07642070ccb8eb2->enter($__internal_50d287ce3e9bd2bd7c67f7c30a33f3b7083c16e6df16c6aef07642070ccb8eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5c12169595853a213341770a033f0a572d6947059ba1b1c12243928e8816c2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c12169595853a213341770a033f0a572d6947059ba1b1c12243928e8816c2e6->enter($__internal_5c12169595853a213341770a033f0a572d6947059ba1b1c12243928e8816c2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_5c12169595853a213341770a033f0a572d6947059ba1b1c12243928e8816c2e6->leave($__internal_5c12169595853a213341770a033f0a572d6947059ba1b1c12243928e8816c2e6_prof);

        
        $__internal_50d287ce3e9bd2bd7c67f7c30a33f3b7083c16e6df16c6aef07642070ccb8eb2->leave($__internal_50d287ce3e9bd2bd7c67f7c30a33f3b7083c16e6df16c6aef07642070ccb8eb2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1e8c2667bad0eeefc519265307809d4027e8e14db7fce76b6fb1be7fade366a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8c2667bad0eeefc519265307809d4027e8e14db7fce76b6fb1be7fade366a7->enter($__internal_1e8c2667bad0eeefc519265307809d4027e8e14db7fce76b6fb1be7fade366a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7849668c19098867afa9da27b7889a1ca1a13b5e3b834a1dbb68e55b753dc08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7849668c19098867afa9da27b7889a1ca1a13b5e3b834a1dbb68e55b753dc08c->enter($__internal_7849668c19098867afa9da27b7889a1ca1a13b5e3b834a1dbb68e55b753dc08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7849668c19098867afa9da27b7889a1ca1a13b5e3b834a1dbb68e55b753dc08c->leave($__internal_7849668c19098867afa9da27b7889a1ca1a13b5e3b834a1dbb68e55b753dc08c_prof);

        
        $__internal_1e8c2667bad0eeefc519265307809d4027e8e14db7fce76b6fb1be7fade366a7->leave($__internal_1e8c2667bad0eeefc519265307809d4027e8e14db7fce76b6fb1be7fade366a7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0a6d873838363e16d653b3da024aa2e0d68785fe8aef68ab12a3a5b88a121b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6d873838363e16d653b3da024aa2e0d68785fe8aef68ab12a3a5b88a121b86->enter($__internal_0a6d873838363e16d653b3da024aa2e0d68785fe8aef68ab12a3a5b88a121b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_797283ae4abe85b0091fa879ec3c6e8e77eee31d7164d4d09c224329c737e88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797283ae4abe85b0091fa879ec3c6e8e77eee31d7164d4d09c224329c737e88f->enter($__internal_797283ae4abe85b0091fa879ec3c6e8e77eee31d7164d4d09c224329c737e88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_797283ae4abe85b0091fa879ec3c6e8e77eee31d7164d4d09c224329c737e88f->leave($__internal_797283ae4abe85b0091fa879ec3c6e8e77eee31d7164d4d09c224329c737e88f_prof);

        
        $__internal_0a6d873838363e16d653b3da024aa2e0d68785fe8aef68ab12a3a5b88a121b86->leave($__internal_0a6d873838363e16d653b3da024aa2e0d68785fe8aef68ab12a3a5b88a121b86_prof);

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
