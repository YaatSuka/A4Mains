<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_abc3954ed9a3ec1712455e0e34e5aa6fb09d9e4108aa1a45b6b6076ea0778182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5781e8987f7215dfc7812d245aef4603a95217c8d3dcd4db12ab0651c5a9f131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5781e8987f7215dfc7812d245aef4603a95217c8d3dcd4db12ab0651c5a9f131->enter($__internal_5781e8987f7215dfc7812d245aef4603a95217c8d3dcd4db12ab0651c5a9f131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_0a99c7dc945d8cee9e40becd5303cf985473a3067d63225d2bb3d43d5d845a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a99c7dc945d8cee9e40becd5303cf985473a3067d63225d2bb3d43d5d845a3b->enter($__internal_0a99c7dc945d8cee9e40becd5303cf985473a3067d63225d2bb3d43d5d845a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5781e8987f7215dfc7812d245aef4603a95217c8d3dcd4db12ab0651c5a9f131->leave($__internal_5781e8987f7215dfc7812d245aef4603a95217c8d3dcd4db12ab0651c5a9f131_prof);

        
        $__internal_0a99c7dc945d8cee9e40becd5303cf985473a3067d63225d2bb3d43d5d845a3b->leave($__internal_0a99c7dc945d8cee9e40becd5303cf985473a3067d63225d2bb3d43d5d845a3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b96a62393ca4a0b32d748b4f578f85b16a077d374d37155cb645eca39a633cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96a62393ca4a0b32d748b4f578f85b16a077d374d37155cb645eca39a633cd5->enter($__internal_b96a62393ca4a0b32d748b4f578f85b16a077d374d37155cb645eca39a633cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_194c64dded75d322de367ac76b8b641cd2a105854a6ddcd4a7f8467cdf8e9b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194c64dded75d322de367ac76b8b641cd2a105854a6ddcd4a7f8467cdf8e9b99->enter($__internal_194c64dded75d322de367ac76b8b641cd2a105854a6ddcd4a7f8467cdf8e9b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_194c64dded75d322de367ac76b8b641cd2a105854a6ddcd4a7f8467cdf8e9b99->leave($__internal_194c64dded75d322de367ac76b8b641cd2a105854a6ddcd4a7f8467cdf8e9b99_prof);

        
        $__internal_b96a62393ca4a0b32d748b4f578f85b16a077d374d37155cb645eca39a633cd5->leave($__internal_b96a62393ca4a0b32d748b4f578f85b16a077d374d37155cb645eca39a633cd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
