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
        $__internal_d755dddfbae8af8e9164e20ec00a03d534017eabe5524e5b130014fd3b0b86da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d755dddfbae8af8e9164e20ec00a03d534017eabe5524e5b130014fd3b0b86da->enter($__internal_d755dddfbae8af8e9164e20ec00a03d534017eabe5524e5b130014fd3b0b86da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMUser/Security/login.html.twig"));

        $__internal_744ce0e82590e606116f805d5a1e7c0d47bdf2996962208f8a5a2291cd17cf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744ce0e82590e606116f805d5a1e7c0d47bdf2996962208f8a5a2291cd17cf5b->enter($__internal_744ce0e82590e606116f805d5a1e7c0d47bdf2996962208f8a5a2291cd17cf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d755dddfbae8af8e9164e20ec00a03d534017eabe5524e5b130014fd3b0b86da->leave($__internal_d755dddfbae8af8e9164e20ec00a03d534017eabe5524e5b130014fd3b0b86da_prof);

        
        $__internal_744ce0e82590e606116f805d5a1e7c0d47bdf2996962208f8a5a2291cd17cf5b->leave($__internal_744ce0e82590e606116f805d5a1e7c0d47bdf2996962208f8a5a2291cd17cf5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff73cbfe9e15d81b15b59aa5a87c25dde20409ffc0c04ce194d2ee76f926d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff73cbfe9e15d81b15b59aa5a87c25dde20409ffc0c04ce194d2ee76f926d91->enter($__internal_1ff73cbfe9e15d81b15b59aa5a87c25dde20409ffc0c04ce194d2ee76f926d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bf198d2ee5360202abebfdfc761fa27fe31deffbb3691797a6ddb6fb65f6bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf198d2ee5360202abebfdfc761fa27fe31deffbb3691797a6ddb6fb65f6bab->enter($__internal_3bf198d2ee5360202abebfdfc761fa27fe31deffbb3691797a6ddb6fb65f6bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3bf198d2ee5360202abebfdfc761fa27fe31deffbb3691797a6ddb6fb65f6bab->leave($__internal_3bf198d2ee5360202abebfdfc761fa27fe31deffbb3691797a6ddb6fb65f6bab_prof);

        
        $__internal_1ff73cbfe9e15d81b15b59aa5a87c25dde20409ffc0c04ce194d2ee76f926d91->leave($__internal_1ff73cbfe9e15d81b15b59aa5a87c25dde20409ffc0c04ce194d2ee76f926d91_prof);

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
