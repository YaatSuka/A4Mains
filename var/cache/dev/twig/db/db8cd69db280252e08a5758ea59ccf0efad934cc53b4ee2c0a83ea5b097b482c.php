<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9d224057b7343d450334be9578f62f0464aa30f786439fdce750209d1641dd88 extends Twig_Template
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
        $__internal_884d8367d404e795294b67ad07039aa36a7f1c8d7b2f195cdaa8be6a48dbccf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884d8367d404e795294b67ad07039aa36a7f1c8d7b2f195cdaa8be6a48dbccf5->enter($__internal_884d8367d404e795294b67ad07039aa36a7f1c8d7b2f195cdaa8be6a48dbccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_86fae3ba9eeed80aad6cffa8953e6884e389d7646eaad25a03f598a162a3b7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fae3ba9eeed80aad6cffa8953e6884e389d7646eaad25a03f598a162a3b7f4->enter($__internal_86fae3ba9eeed80aad6cffa8953e6884e389d7646eaad25a03f598a162a3b7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_884d8367d404e795294b67ad07039aa36a7f1c8d7b2f195cdaa8be6a48dbccf5->leave($__internal_884d8367d404e795294b67ad07039aa36a7f1c8d7b2f195cdaa8be6a48dbccf5_prof);

        
        $__internal_86fae3ba9eeed80aad6cffa8953e6884e389d7646eaad25a03f598a162a3b7f4->leave($__internal_86fae3ba9eeed80aad6cffa8953e6884e389d7646eaad25a03f598a162a3b7f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
