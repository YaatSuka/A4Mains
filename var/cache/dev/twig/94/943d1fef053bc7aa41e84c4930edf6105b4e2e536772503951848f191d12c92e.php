<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b2939f28ff2f8cfe07bebe5604f21b22a5a4bdfafa265af5f37a3d649fc69d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_152731615a68c865899bfe96981770ad2a76197a3e48a09eeb3a31b0d35f492b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152731615a68c865899bfe96981770ad2a76197a3e48a09eeb3a31b0d35f492b->enter($__internal_152731615a68c865899bfe96981770ad2a76197a3e48a09eeb3a31b0d35f492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_56e48c7d1b91a83045e25b20d1c752d93f38fbe05ea45f7901fcd3b689809c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e48c7d1b91a83045e25b20d1c752d93f38fbe05ea45f7901fcd3b689809c99->enter($__internal_56e48c7d1b91a83045e25b20d1c752d93f38fbe05ea45f7901fcd3b689809c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152731615a68c865899bfe96981770ad2a76197a3e48a09eeb3a31b0d35f492b->leave($__internal_152731615a68c865899bfe96981770ad2a76197a3e48a09eeb3a31b0d35f492b_prof);

        
        $__internal_56e48c7d1b91a83045e25b20d1c752d93f38fbe05ea45f7901fcd3b689809c99->leave($__internal_56e48c7d1b91a83045e25b20d1c752d93f38fbe05ea45f7901fcd3b689809c99_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf724db7860b7b3820a1e302e7163270a8c9892678510de1cf0a17a0f9a7a05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf724db7860b7b3820a1e302e7163270a8c9892678510de1cf0a17a0f9a7a05b->enter($__internal_bf724db7860b7b3820a1e302e7163270a8c9892678510de1cf0a17a0f9a7a05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbfa5aba04cb2c5b0be877139926862e5b993b932d2827acff2b8b549324e569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfa5aba04cb2c5b0be877139926862e5b993b932d2827acff2b8b549324e569->enter($__internal_bbfa5aba04cb2c5b0be877139926862e5b993b932d2827acff2b8b549324e569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bbfa5aba04cb2c5b0be877139926862e5b993b932d2827acff2b8b549324e569->leave($__internal_bbfa5aba04cb2c5b0be877139926862e5b993b932d2827acff2b8b549324e569_prof);

        
        $__internal_bf724db7860b7b3820a1e302e7163270a8c9892678510de1cf0a17a0f9a7a05b->leave($__internal_bf724db7860b7b3820a1e302e7163270a8c9892678510de1cf0a17a0f9a7a05b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
