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
        $__internal_e0061fe1f9a61e0034c8727f59023348d28b65724220526b517eb83157261e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0061fe1f9a61e0034c8727f59023348d28b65724220526b517eb83157261e24->enter($__internal_e0061fe1f9a61e0034c8727f59023348d28b65724220526b517eb83157261e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_dbff2edfeed0eebd110d3deb1a8575970aa60942c7f63d522bd0e30b645a5b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbff2edfeed0eebd110d3deb1a8575970aa60942c7f63d522bd0e30b645a5b31->enter($__internal_dbff2edfeed0eebd110d3deb1a8575970aa60942c7f63d522bd0e30b645a5b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e0061fe1f9a61e0034c8727f59023348d28b65724220526b517eb83157261e24->leave($__internal_e0061fe1f9a61e0034c8727f59023348d28b65724220526b517eb83157261e24_prof);

        
        $__internal_dbff2edfeed0eebd110d3deb1a8575970aa60942c7f63d522bd0e30b645a5b31->leave($__internal_dbff2edfeed0eebd110d3deb1a8575970aa60942c7f63d522bd0e30b645a5b31_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91530b44ee6b9929e850ad332fffcc2eb3dad6aee53965ac7771c0096d0328c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91530b44ee6b9929e850ad332fffcc2eb3dad6aee53965ac7771c0096d0328c3->enter($__internal_91530b44ee6b9929e850ad332fffcc2eb3dad6aee53965ac7771c0096d0328c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ec8773680bc007a8cba8c398c01a8fb159bc24a4c64139e409cd1e8e0361dedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8773680bc007a8cba8c398c01a8fb159bc24a4c64139e409cd1e8e0361dedf->enter($__internal_ec8773680bc007a8cba8c398c01a8fb159bc24a4c64139e409cd1e8e0361dedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_ec8773680bc007a8cba8c398c01a8fb159bc24a4c64139e409cd1e8e0361dedf->leave($__internal_ec8773680bc007a8cba8c398c01a8fb159bc24a4c64139e409cd1e8e0361dedf_prof);

        
        $__internal_91530b44ee6b9929e850ad332fffcc2eb3dad6aee53965ac7771c0096d0328c3->leave($__internal_91530b44ee6b9929e850ad332fffcc2eb3dad6aee53965ac7771c0096d0328c3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3d22dcfcb5ac3285aa55a80be2f5e3452563d30cc0180668b39704bcd7f6e280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d22dcfcb5ac3285aa55a80be2f5e3452563d30cc0180668b39704bcd7f6e280->enter($__internal_3d22dcfcb5ac3285aa55a80be2f5e3452563d30cc0180668b39704bcd7f6e280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e8a1337ca1f00a4b3cee1cf588bc1b0f84136cfeacbf02a34525785646e5442f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a1337ca1f00a4b3cee1cf588bc1b0f84136cfeacbf02a34525785646e5442f->enter($__internal_e8a1337ca1f00a4b3cee1cf588bc1b0f84136cfeacbf02a34525785646e5442f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_e8a1337ca1f00a4b3cee1cf588bc1b0f84136cfeacbf02a34525785646e5442f->leave($__internal_e8a1337ca1f00a4b3cee1cf588bc1b0f84136cfeacbf02a34525785646e5442f_prof);

        
        $__internal_3d22dcfcb5ac3285aa55a80be2f5e3452563d30cc0180668b39704bcd7f6e280->leave($__internal_3d22dcfcb5ac3285aa55a80be2f5e3452563d30cc0180668b39704bcd7f6e280_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_16e8a6f3c2da9e287c036a65f36f4851889a85c7a5e80e0b4048bc141723e3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e8a6f3c2da9e287c036a65f36f4851889a85c7a5e80e0b4048bc141723e3bc->enter($__internal_16e8a6f3c2da9e287c036a65f36f4851889a85c7a5e80e0b4048bc141723e3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_edee1af6552eb0dd6bd75b09e71e701e337d6c93335fff8265056535a838a394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edee1af6552eb0dd6bd75b09e71e701e337d6c93335fff8265056535a838a394->enter($__internal_edee1af6552eb0dd6bd75b09e71e701e337d6c93335fff8265056535a838a394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_edee1af6552eb0dd6bd75b09e71e701e337d6c93335fff8265056535a838a394->leave($__internal_edee1af6552eb0dd6bd75b09e71e701e337d6c93335fff8265056535a838a394_prof);

        
        $__internal_16e8a6f3c2da9e287c036a65f36f4851889a85c7a5e80e0b4048bc141723e3bc->leave($__internal_16e8a6f3c2da9e287c036a65f36f4851889a85c7a5e80e0b4048bc141723e3bc_prof);

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
