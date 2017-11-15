<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ecfe368543be876e9889a6966d441ba1ed2f5306e8e35511bcaae1e16250d248 extends Twig_Template
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
        $__internal_b5d87b19a4cfd5a63e8a2ee9299ea155a945c172e852af66f9031d5d6444e7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d87b19a4cfd5a63e8a2ee9299ea155a945c172e852af66f9031d5d6444e7da->enter($__internal_b5d87b19a4cfd5a63e8a2ee9299ea155a945c172e852af66f9031d5d6444e7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_1b71ff8418155ae2cf20b92bda9001eab9d9451951f9bd7292ba80ad02381bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b71ff8418155ae2cf20b92bda9001eab9d9451951f9bd7292ba80ad02381bd2->enter($__internal_1b71ff8418155ae2cf20b92bda9001eab9d9451951f9bd7292ba80ad02381bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b5d87b19a4cfd5a63e8a2ee9299ea155a945c172e852af66f9031d5d6444e7da->leave($__internal_b5d87b19a4cfd5a63e8a2ee9299ea155a945c172e852af66f9031d5d6444e7da_prof);

        
        $__internal_1b71ff8418155ae2cf20b92bda9001eab9d9451951f9bd7292ba80ad02381bd2->leave($__internal_1b71ff8418155ae2cf20b92bda9001eab9d9451951f9bd7292ba80ad02381bd2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_42a92e213d3ab1f07c33cbad19af298f42f54a9257b33d6d3524315a527b76cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a92e213d3ab1f07c33cbad19af298f42f54a9257b33d6d3524315a527b76cb->enter($__internal_42a92e213d3ab1f07c33cbad19af298f42f54a9257b33d6d3524315a527b76cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a91d1df95718fa7daaf16d568aa2c77b6406876b6a0ab1894efa39307847fd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91d1df95718fa7daaf16d568aa2c77b6406876b6a0ab1894efa39307847fd70->enter($__internal_a91d1df95718fa7daaf16d568aa2c77b6406876b6a0ab1894efa39307847fd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a91d1df95718fa7daaf16d568aa2c77b6406876b6a0ab1894efa39307847fd70->leave($__internal_a91d1df95718fa7daaf16d568aa2c77b6406876b6a0ab1894efa39307847fd70_prof);

        
        $__internal_42a92e213d3ab1f07c33cbad19af298f42f54a9257b33d6d3524315a527b76cb->leave($__internal_42a92e213d3ab1f07c33cbad19af298f42f54a9257b33d6d3524315a527b76cb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cb83348cb739478dc866c489fd0384a19c3a97e6032a7bfbce5028f28c902f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb83348cb739478dc866c489fd0384a19c3a97e6032a7bfbce5028f28c902f65->enter($__internal_cb83348cb739478dc866c489fd0384a19c3a97e6032a7bfbce5028f28c902f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_daf4d600e6146a1a6bfc9a7f433f66510ed111993b86738110d2a6d4bcc939e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf4d600e6146a1a6bfc9a7f433f66510ed111993b86738110d2a6d4bcc939e2->enter($__internal_daf4d600e6146a1a6bfc9a7f433f66510ed111993b86738110d2a6d4bcc939e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_daf4d600e6146a1a6bfc9a7f433f66510ed111993b86738110d2a6d4bcc939e2->leave($__internal_daf4d600e6146a1a6bfc9a7f433f66510ed111993b86738110d2a6d4bcc939e2_prof);

        
        $__internal_cb83348cb739478dc866c489fd0384a19c3a97e6032a7bfbce5028f28c902f65->leave($__internal_cb83348cb739478dc866c489fd0384a19c3a97e6032a7bfbce5028f28c902f65_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_95c8d158b9417bef1fa6f002dc7e3a9661a7cca45c3248f4446bb5aeda0b7360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c8d158b9417bef1fa6f002dc7e3a9661a7cca45c3248f4446bb5aeda0b7360->enter($__internal_95c8d158b9417bef1fa6f002dc7e3a9661a7cca45c3248f4446bb5aeda0b7360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_77c512428dbe69ea77436cdf73136b4665200904c1d311b95693cfb22c37c6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c512428dbe69ea77436cdf73136b4665200904c1d311b95693cfb22c37c6ac->enter($__internal_77c512428dbe69ea77436cdf73136b4665200904c1d311b95693cfb22c37c6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_77c512428dbe69ea77436cdf73136b4665200904c1d311b95693cfb22c37c6ac->leave($__internal_77c512428dbe69ea77436cdf73136b4665200904c1d311b95693cfb22c37c6ac_prof);

        
        $__internal_95c8d158b9417bef1fa6f002dc7e3a9661a7cca45c3248f4446bb5aeda0b7360->leave($__internal_95c8d158b9417bef1fa6f002dc7e3a9661a7cca45c3248f4446bb5aeda0b7360_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
