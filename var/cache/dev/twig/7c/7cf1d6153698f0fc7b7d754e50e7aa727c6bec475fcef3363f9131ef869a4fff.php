<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_67dd84119084f22d09885b9fc84ab63c121da7a7f66c56270f96e50a7f24a6a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e657a8117d403196c7da5862953b30f9bd5221063b87287cd7f7d5c1196f5dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e657a8117d403196c7da5862953b30f9bd5221063b87287cd7f7d5c1196f5dc8->enter($__internal_e657a8117d403196c7da5862953b30f9bd5221063b87287cd7f7d5c1196f5dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_10ae5abe9e2585f1758e253846fc4114fb66d7c860a8bae8a7342e5b5891e603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ae5abe9e2585f1758e253846fc4114fb66d7c860a8bae8a7342e5b5891e603->enter($__internal_10ae5abe9e2585f1758e253846fc4114fb66d7c860a8bae8a7342e5b5891e603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_e657a8117d403196c7da5862953b30f9bd5221063b87287cd7f7d5c1196f5dc8->leave($__internal_e657a8117d403196c7da5862953b30f9bd5221063b87287cd7f7d5c1196f5dc8_prof);

        
        $__internal_10ae5abe9e2585f1758e253846fc4114fb66d7c860a8bae8a7342e5b5891e603->leave($__internal_10ae5abe9e2585f1758e253846fc4114fb66d7c860a8bae8a7342e5b5891e603_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
