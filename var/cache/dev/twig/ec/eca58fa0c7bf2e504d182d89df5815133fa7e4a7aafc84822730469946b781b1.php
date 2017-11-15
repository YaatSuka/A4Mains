<?php

/* AQMUserBundle:Security:login.html.twig */
class __TwigTemplate_e1be37425836d0ae3eefa3ed69c30939feaf373cffed9fa5be84424a223380a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMUserBundle:Security:login.html.twig", 1);
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
        $__internal_ea82914b5e8ca00ff122d1202b78be26240477258ecc3a0296a26238d36ead11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea82914b5e8ca00ff122d1202b78be26240477258ecc3a0296a26238d36ead11->enter($__internal_ea82914b5e8ca00ff122d1202b78be26240477258ecc3a0296a26238d36ead11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMUserBundle:Security:login.html.twig"));

        $__internal_fa6489d109340e84d045922e370060c620f743cd25d254c1a09554a63f3c5e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6489d109340e84d045922e370060c620f743cd25d254c1a09554a63f3c5e23->enter($__internal_fa6489d109340e84d045922e370060c620f743cd25d254c1a09554a63f3c5e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea82914b5e8ca00ff122d1202b78be26240477258ecc3a0296a26238d36ead11->leave($__internal_ea82914b5e8ca00ff122d1202b78be26240477258ecc3a0296a26238d36ead11_prof);

        
        $__internal_fa6489d109340e84d045922e370060c620f743cd25d254c1a09554a63f3c5e23->leave($__internal_fa6489d109340e84d045922e370060c620f743cd25d254c1a09554a63f3c5e23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_585748bb84e8ce75294989067e3a31187438523cb0b7eca340a9e3784ab2e20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585748bb84e8ce75294989067e3a31187438523cb0b7eca340a9e3784ab2e20a->enter($__internal_585748bb84e8ce75294989067e3a31187438523cb0b7eca340a9e3784ab2e20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e49402721cc503c232540d112f5e19d9538774a52ca45af7f1b6935a9a4ee449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49402721cc503c232540d112f5e19d9538774a52ca45af7f1b6935a9a4ee449->enter($__internal_e49402721cc503c232540d112f5e19d9538774a52ca45af7f1b6935a9a4ee449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e49402721cc503c232540d112f5e19d9538774a52ca45af7f1b6935a9a4ee449->leave($__internal_e49402721cc503c232540d112f5e19d9538774a52ca45af7f1b6935a9a4ee449_prof);

        
        $__internal_585748bb84e8ce75294989067e3a31187438523cb0b7eca340a9e3784ab2e20a->leave($__internal_585748bb84e8ce75294989067e3a31187438523cb0b7eca340a9e3784ab2e20a_prof);

    }

    public function getTemplateName()
    {
        return "AQMUserBundle:Security:login.html.twig";
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
", "AQMUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
