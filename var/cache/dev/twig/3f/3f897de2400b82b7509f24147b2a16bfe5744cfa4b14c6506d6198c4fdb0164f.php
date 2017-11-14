<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0fc13b4702b4a7651e3a64d7a2438d14ab2f501dc1b0c0a42459382ce2c1600e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7cd3e88c21f0bf01a82cd157b68f51717fe7e1750fe63227a0ca2e3498a0c10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd3e88c21f0bf01a82cd157b68f51717fe7e1750fe63227a0ca2e3498a0c10f->enter($__internal_7cd3e88c21f0bf01a82cd157b68f51717fe7e1750fe63227a0ca2e3498a0c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_91e16c8150dc6e3717d33fd667fb2d02c0bc3e54359e8e80aac0ee802c6a24b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e16c8150dc6e3717d33fd667fb2d02c0bc3e54359e8e80aac0ee802c6a24b7->enter($__internal_91e16c8150dc6e3717d33fd667fb2d02c0bc3e54359e8e80aac0ee802c6a24b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd3e88c21f0bf01a82cd157b68f51717fe7e1750fe63227a0ca2e3498a0c10f->leave($__internal_7cd3e88c21f0bf01a82cd157b68f51717fe7e1750fe63227a0ca2e3498a0c10f_prof);

        
        $__internal_91e16c8150dc6e3717d33fd667fb2d02c0bc3e54359e8e80aac0ee802c6a24b7->leave($__internal_91e16c8150dc6e3717d33fd667fb2d02c0bc3e54359e8e80aac0ee802c6a24b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af78cdda69e0ba7adf9c269488e22ada6a6d527f26b0215d3ca7c221b6d72594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af78cdda69e0ba7adf9c269488e22ada6a6d527f26b0215d3ca7c221b6d72594->enter($__internal_af78cdda69e0ba7adf9c269488e22ada6a6d527f26b0215d3ca7c221b6d72594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23444634ebe9a334b2c25e71346402a7b34e6daf7323fc656437e8c1dc70ba02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23444634ebe9a334b2c25e71346402a7b34e6daf7323fc656437e8c1dc70ba02->enter($__internal_23444634ebe9a334b2c25e71346402a7b34e6daf7323fc656437e8c1dc70ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_23444634ebe9a334b2c25e71346402a7b34e6daf7323fc656437e8c1dc70ba02->leave($__internal_23444634ebe9a334b2c25e71346402a7b34e6daf7323fc656437e8c1dc70ba02_prof);

        
        $__internal_af78cdda69e0ba7adf9c269488e22ada6a6d527f26b0215d3ca7c221b6d72594->leave($__internal_af78cdda69e0ba7adf9c269488e22ada6a6d527f26b0215d3ca7c221b6d72594_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
