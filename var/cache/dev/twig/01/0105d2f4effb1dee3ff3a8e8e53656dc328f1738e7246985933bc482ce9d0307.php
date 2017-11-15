<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_c68555b0cc7a8d853e7958b11c8b5148efec3ca5cd020eb12ce5a36470a7bfa7 extends Twig_Template
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
        $__internal_a456aa4bf2e8a461c831b332046e1229cf134f83eeb2fe7ee5a0eb9944504948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a456aa4bf2e8a461c831b332046e1229cf134f83eeb2fe7ee5a0eb9944504948->enter($__internal_a456aa4bf2e8a461c831b332046e1229cf134f83eeb2fe7ee5a0eb9944504948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_0b793f848b11fe55bddc2cd75298e7f1de87dfb3ea76f09a758fb3479b3f6299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b793f848b11fe55bddc2cd75298e7f1de87dfb3ea76f09a758fb3479b3f6299->enter($__internal_0b793f848b11fe55bddc2cd75298e7f1de87dfb3ea76f09a758fb3479b3f6299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a456aa4bf2e8a461c831b332046e1229cf134f83eeb2fe7ee5a0eb9944504948->leave($__internal_a456aa4bf2e8a461c831b332046e1229cf134f83eeb2fe7ee5a0eb9944504948_prof);

        
        $__internal_0b793f848b11fe55bddc2cd75298e7f1de87dfb3ea76f09a758fb3479b3f6299->leave($__internal_0b793f848b11fe55bddc2cd75298e7f1de87dfb3ea76f09a758fb3479b3f6299_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
