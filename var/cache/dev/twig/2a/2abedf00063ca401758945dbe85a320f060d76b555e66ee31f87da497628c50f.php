<?php

/* @AQMUser/Security/login.html.twig */
class __TwigTemplate_c1e6081e53d9b2967871d589d92fe5a8511e75dac6d163d676486aeff8abf160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_632851cd97c2a75fd9cdc661e210326ef5310eabef0f6cbf3e8cf5504ff21a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632851cd97c2a75fd9cdc661e210326ef5310eabef0f6cbf3e8cf5504ff21a25->enter($__internal_632851cd97c2a75fd9cdc661e210326ef5310eabef0f6cbf3e8cf5504ff21a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMUser/Security/login.html.twig"));

        $__internal_b08e3f15a9ba65ab70fa3c2067c89392ffb95f7fe8f6905e8b2f72dc85e727de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08e3f15a9ba65ab70fa3c2067c89392ffb95f7fe8f6905e8b2f72dc85e727de->enter($__internal_b08e3f15a9ba65ab70fa3c2067c89392ffb95f7fe8f6905e8b2f72dc85e727de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632851cd97c2a75fd9cdc661e210326ef5310eabef0f6cbf3e8cf5504ff21a25->leave($__internal_632851cd97c2a75fd9cdc661e210326ef5310eabef0f6cbf3e8cf5504ff21a25_prof);

        
        $__internal_b08e3f15a9ba65ab70fa3c2067c89392ffb95f7fe8f6905e8b2f72dc85e727de->leave($__internal_b08e3f15a9ba65ab70fa3c2067c89392ffb95f7fe8f6905e8b2f72dc85e727de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_066fd59b64dc3b2307b4701554a2920483c54c46433a6ccafc47939b9e00047c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066fd59b64dc3b2307b4701554a2920483c54c46433a6ccafc47939b9e00047c->enter($__internal_066fd59b64dc3b2307b4701554a2920483c54c46433a6ccafc47939b9e00047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09334379e694d13cafdbab5508c2243096d4d63b7bec1e0a00c4f78a7aecf114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09334379e694d13cafdbab5508c2243096d4d63b7bec1e0a00c4f78a7aecf114->enter($__internal_09334379e694d13cafdbab5508c2243096d4d63b7bec1e0a00c4f78a7aecf114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 8
        echo "
    Formulaire de connexion à mettre en place<br><br>
<form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\" /> ";
        // line 13
        echo "
    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" /> ";
        // line 16
        echo "    <br />
    <input type=\"submit\" value=\"Connexion\" />
</form>

";
        
        $__internal_09334379e694d13cafdbab5508c2243096d4d63b7bec1e0a00c4f78a7aecf114->leave($__internal_09334379e694d13cafdbab5508c2243096d4d63b7bec1e0a00c4f78a7aecf114_prof);

        
        $__internal_066fd59b64dc3b2307b4701554a2920483c54c46433a6ccafc47939b9e00047c->leave($__internal_066fd59b64dc3b2307b4701554a2920483c54c46433a6ccafc47939b9e00047c_prof);

    }

    public function getTemplateName()
    {
        return "@AQMUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  72 => 13,  69 => 12,  64 => 10,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}

{% block body %}

  {% if error %}
      <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}

    Formulaire de connexion à mettre en place<br><br>
<form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" /> {# Conserver les mêmes attributs #}

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" /> {# Conserver les mêmes attributs #}
    <br />
    <input type=\"submit\" value=\"Connexion\" />
</form>

{% endblock %}
", "@AQMUser/Security/login.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
