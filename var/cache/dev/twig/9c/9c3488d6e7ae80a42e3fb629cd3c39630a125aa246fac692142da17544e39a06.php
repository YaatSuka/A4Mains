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
        $__internal_e30bc9912d0ece3c869e4cd0ff1401a0b780350890d10a2fbd8f21fdb8c51e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30bc9912d0ece3c869e4cd0ff1401a0b780350890d10a2fbd8f21fdb8c51e5b->enter($__internal_e30bc9912d0ece3c869e4cd0ff1401a0b780350890d10a2fbd8f21fdb8c51e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_da8cf5c430a743e8f45234c102c27f4672a739cf77de6baa6a8bd1fd98266d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8cf5c430a743e8f45234c102c27f4672a739cf77de6baa6a8bd1fd98266d81->enter($__internal_da8cf5c430a743e8f45234c102c27f4672a739cf77de6baa6a8bd1fd98266d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30bc9912d0ece3c869e4cd0ff1401a0b780350890d10a2fbd8f21fdb8c51e5b->leave($__internal_e30bc9912d0ece3c869e4cd0ff1401a0b780350890d10a2fbd8f21fdb8c51e5b_prof);

        
        $__internal_da8cf5c430a743e8f45234c102c27f4672a739cf77de6baa6a8bd1fd98266d81->leave($__internal_da8cf5c430a743e8f45234c102c27f4672a739cf77de6baa6a8bd1fd98266d81_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73379ab315d3734a23a257519d4f45106f16b8b17da2cca417605ff625a3dd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73379ab315d3734a23a257519d4f45106f16b8b17da2cca417605ff625a3dd7a->enter($__internal_73379ab315d3734a23a257519d4f45106f16b8b17da2cca417605ff625a3dd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7fe713a3131eae776801ed6bb6bbdb069e8beb1e1fcc5384c8ae49fb3de57173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe713a3131eae776801ed6bb6bbdb069e8beb1e1fcc5384c8ae49fb3de57173->enter($__internal_7fe713a3131eae776801ed6bb6bbdb069e8beb1e1fcc5384c8ae49fb3de57173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7fe713a3131eae776801ed6bb6bbdb069e8beb1e1fcc5384c8ae49fb3de57173->leave($__internal_7fe713a3131eae776801ed6bb6bbdb069e8beb1e1fcc5384c8ae49fb3de57173_prof);

        
        $__internal_73379ab315d3734a23a257519d4f45106f16b8b17da2cca417605ff625a3dd7a->leave($__internal_73379ab315d3734a23a257519d4f45106f16b8b17da2cca417605ff625a3dd7a_prof);

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
