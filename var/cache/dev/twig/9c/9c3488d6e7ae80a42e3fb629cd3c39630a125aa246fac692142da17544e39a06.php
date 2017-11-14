<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_72546160a5bf2bf38f34f6afe7349a1df16e87d8148063a22babe372b5c09b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e0e429a55d378e5d2b29e48c692566b68c5e6d04661d2aef383c02997a615cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e429a55d378e5d2b29e48c692566b68c5e6d04661d2aef383c02997a615cd6->enter($__internal_e0e429a55d378e5d2b29e48c692566b68c5e6d04661d2aef383c02997a615cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_e90beb29490cca93de093236e01aaa1e2646e1068e9db08a53a7327c5ace915a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90beb29490cca93de093236e01aaa1e2646e1068e9db08a53a7327c5ace915a->enter($__internal_e90beb29490cca93de093236e01aaa1e2646e1068e9db08a53a7327c5ace915a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e429a55d378e5d2b29e48c692566b68c5e6d04661d2aef383c02997a615cd6->leave($__internal_e0e429a55d378e5d2b29e48c692566b68c5e6d04661d2aef383c02997a615cd6_prof);

        
        $__internal_e90beb29490cca93de093236e01aaa1e2646e1068e9db08a53a7327c5ace915a->leave($__internal_e90beb29490cca93de093236e01aaa1e2646e1068e9db08a53a7327c5ace915a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdf6131464c17616999686134045b65a17d21e17fc79c259707029d07bc41179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf6131464c17616999686134045b65a17d21e17fc79c259707029d07bc41179->enter($__internal_bdf6131464c17616999686134045b65a17d21e17fc79c259707029d07bc41179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70360bb8c9230920c36d7b17b9fc01166f0dbc59deb86552abcb00b58406cfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70360bb8c9230920c36d7b17b9fc01166f0dbc59deb86552abcb00b58406cfa5->enter($__internal_70360bb8c9230920c36d7b17b9fc01166f0dbc59deb86552abcb00b58406cfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_70360bb8c9230920c36d7b17b9fc01166f0dbc59deb86552abcb00b58406cfa5->leave($__internal_70360bb8c9230920c36d7b17b9fc01166f0dbc59deb86552abcb00b58406cfa5_prof);

        
        $__internal_bdf6131464c17616999686134045b65a17d21e17fc79c259707029d07bc41179->leave($__internal_bdf6131464c17616999686134045b65a17d21e17fc79c259707029d07bc41179_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
