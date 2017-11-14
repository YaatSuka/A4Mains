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
        $__internal_759c97599c7b7bd90397a81c3a09bf45a29bb36fef5b7fdcb30dc5ef3bb2ac1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759c97599c7b7bd90397a81c3a09bf45a29bb36fef5b7fdcb30dc5ef3bb2ac1d->enter($__internal_759c97599c7b7bd90397a81c3a09bf45a29bb36fef5b7fdcb30dc5ef3bb2ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_4aacaae56cdf72b53daf54f968929ea610907ebc69032bc06eaca7d1efda1b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aacaae56cdf72b53daf54f968929ea610907ebc69032bc06eaca7d1efda1b8f->enter($__internal_4aacaae56cdf72b53daf54f968929ea610907ebc69032bc06eaca7d1efda1b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_759c97599c7b7bd90397a81c3a09bf45a29bb36fef5b7fdcb30dc5ef3bb2ac1d->leave($__internal_759c97599c7b7bd90397a81c3a09bf45a29bb36fef5b7fdcb30dc5ef3bb2ac1d_prof);

        
        $__internal_4aacaae56cdf72b53daf54f968929ea610907ebc69032bc06eaca7d1efda1b8f->leave($__internal_4aacaae56cdf72b53daf54f968929ea610907ebc69032bc06eaca7d1efda1b8f_prof);

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
