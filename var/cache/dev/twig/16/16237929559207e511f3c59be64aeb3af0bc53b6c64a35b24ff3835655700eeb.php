<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_05b56133af0cc5892f043c6dab34d3bf0b80f97e824f75dfd7ac425d837218dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_712e0003a29b70cc13d3ec89da3cdc8c301aaef910a4bf88c5612f2b8be078ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712e0003a29b70cc13d3ec89da3cdc8c301aaef910a4bf88c5612f2b8be078ba->enter($__internal_712e0003a29b70cc13d3ec89da3cdc8c301aaef910a4bf88c5612f2b8be078ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_78a5e7234eaee275e1eb7fc6aec1f8a19c22027def4fe71a6978c455afdfb625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a5e7234eaee275e1eb7fc6aec1f8a19c22027def4fe71a6978c455afdfb625->enter($__internal_78a5e7234eaee275e1eb7fc6aec1f8a19c22027def4fe71a6978c455afdfb625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712e0003a29b70cc13d3ec89da3cdc8c301aaef910a4bf88c5612f2b8be078ba->leave($__internal_712e0003a29b70cc13d3ec89da3cdc8c301aaef910a4bf88c5612f2b8be078ba_prof);

        
        $__internal_78a5e7234eaee275e1eb7fc6aec1f8a19c22027def4fe71a6978c455afdfb625->leave($__internal_78a5e7234eaee275e1eb7fc6aec1f8a19c22027def4fe71a6978c455afdfb625_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_887e13308ec0869cbb270bcb8cceb837882f75b6e2aad1acdc60f754f5e132e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887e13308ec0869cbb270bcb8cceb837882f75b6e2aad1acdc60f754f5e132e6->enter($__internal_887e13308ec0869cbb270bcb8cceb837882f75b6e2aad1acdc60f754f5e132e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f3c59bcefc1fd2659423ab94424eae0cd08c404bed6d533c7ed48f779df0dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3c59bcefc1fd2659423ab94424eae0cd08c404bed6d533c7ed48f779df0dcb->enter($__internal_2f3c59bcefc1fd2659423ab94424eae0cd08c404bed6d533c7ed48f779df0dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_2f3c59bcefc1fd2659423ab94424eae0cd08c404bed6d533c7ed48f779df0dcb->leave($__internal_2f3c59bcefc1fd2659423ab94424eae0cd08c404bed6d533c7ed48f779df0dcb_prof);

        
        $__internal_887e13308ec0869cbb270bcb8cceb837882f75b6e2aad1acdc60f754f5e132e6->leave($__internal_887e13308ec0869cbb270bcb8cceb837882f75b6e2aad1acdc60f754f5e132e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
