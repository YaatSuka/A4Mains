<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_e9ac061609b769be87d13402fb1e8d393bb18f57504945c76ea7098adf76268b extends Twig_Template
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
        $__internal_bd499dfac3a151c6018fd70e4341e81e7d61f46810d0f45b1ead7ab2221aa21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd499dfac3a151c6018fd70e4341e81e7d61f46810d0f45b1ead7ab2221aa21c->enter($__internal_bd499dfac3a151c6018fd70e4341e81e7d61f46810d0f45b1ead7ab2221aa21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_c762dc287108b3bf87ceec02f0e35e66195b6af323470faa2a85ddd858e9d2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c762dc287108b3bf87ceec02f0e35e66195b6af323470faa2a85ddd858e9d2da->enter($__internal_c762dc287108b3bf87ceec02f0e35e66195b6af323470faa2a85ddd858e9d2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

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
        
        $__internal_bd499dfac3a151c6018fd70e4341e81e7d61f46810d0f45b1ead7ab2221aa21c->leave($__internal_bd499dfac3a151c6018fd70e4341e81e7d61f46810d0f45b1ead7ab2221aa21c_prof);

        
        $__internal_c762dc287108b3bf87ceec02f0e35e66195b6af323470faa2a85ddd858e9d2da->leave($__internal_c762dc287108b3bf87ceec02f0e35e66195b6af323470faa2a85ddd858e9d2da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
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
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
