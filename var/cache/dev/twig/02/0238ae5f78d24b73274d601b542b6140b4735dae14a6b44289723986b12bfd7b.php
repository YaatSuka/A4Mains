<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_0a602b1b1f721ecddc0898bb1a43422b3d4dee147216eccbf6f7a412f5bd0dff extends Twig_Template
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
        $__internal_e08f09fb55bc6fe4ea3589ffc6c44104495f954459b89d4710058b07b5caac9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08f09fb55bc6fe4ea3589ffc6c44104495f954459b89d4710058b07b5caac9b->enter($__internal_e08f09fb55bc6fe4ea3589ffc6c44104495f954459b89d4710058b07b5caac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_4198bf63520bdfc5dc717d7c8404ad84cf2c30e4fb51448ef0080034619dbb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4198bf63520bdfc5dc717d7c8404ad84cf2c30e4fb51448ef0080034619dbb2c->enter($__internal_4198bf63520bdfc5dc717d7c8404ad84cf2c30e4fb51448ef0080034619dbb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e08f09fb55bc6fe4ea3589ffc6c44104495f954459b89d4710058b07b5caac9b->leave($__internal_e08f09fb55bc6fe4ea3589ffc6c44104495f954459b89d4710058b07b5caac9b_prof);

        
        $__internal_4198bf63520bdfc5dc717d7c8404ad84cf2c30e4fb51448ef0080034619dbb2c->leave($__internal_4198bf63520bdfc5dc717d7c8404ad84cf2c30e4fb51448ef0080034619dbb2c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
