<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4989b8452a72003bce8eb37aefd086a18f46882238472fb42a459c6abe1ee857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_4e2f722daaf0aafd45e2cf26a1144381c54907cb3c7a794ffd909cb7959f717a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2f722daaf0aafd45e2cf26a1144381c54907cb3c7a794ffd909cb7959f717a->enter($__internal_4e2f722daaf0aafd45e2cf26a1144381c54907cb3c7a794ffd909cb7959f717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0a5ed140be6dddd44c7ed3cf5021157d56d4bd5a537b4c82a73d1a507e5bb899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5ed140be6dddd44c7ed3cf5021157d56d4bd5a537b4c82a73d1a507e5bb899->enter($__internal_0a5ed140be6dddd44c7ed3cf5021157d56d4bd5a537b4c82a73d1a507e5bb899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2f722daaf0aafd45e2cf26a1144381c54907cb3c7a794ffd909cb7959f717a->leave($__internal_4e2f722daaf0aafd45e2cf26a1144381c54907cb3c7a794ffd909cb7959f717a_prof);

        
        $__internal_0a5ed140be6dddd44c7ed3cf5021157d56d4bd5a537b4c82a73d1a507e5bb899->leave($__internal_0a5ed140be6dddd44c7ed3cf5021157d56d4bd5a537b4c82a73d1a507e5bb899_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a25694215eacdbb3447570c8b687e1120dfe4956a0caf62fd12c2e099ab7f8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25694215eacdbb3447570c8b687e1120dfe4956a0caf62fd12c2e099ab7f8e5->enter($__internal_a25694215eacdbb3447570c8b687e1120dfe4956a0caf62fd12c2e099ab7f8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae2e4e9b53acf42d4432d4a33b840d302ffe985eed57e9f33a625ce7ce075eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2e4e9b53acf42d4432d4a33b840d302ffe985eed57e9f33a625ce7ce075eca->enter($__internal_ae2e4e9b53acf42d4432d4a33b840d302ffe985eed57e9f33a625ce7ce075eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ae2e4e9b53acf42d4432d4a33b840d302ffe985eed57e9f33a625ce7ce075eca->leave($__internal_ae2e4e9b53acf42d4432d4a33b840d302ffe985eed57e9f33a625ce7ce075eca_prof);

        
        $__internal_a25694215eacdbb3447570c8b687e1120dfe4956a0caf62fd12c2e099ab7f8e5->leave($__internal_a25694215eacdbb3447570c8b687e1120dfe4956a0caf62fd12c2e099ab7f8e5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
