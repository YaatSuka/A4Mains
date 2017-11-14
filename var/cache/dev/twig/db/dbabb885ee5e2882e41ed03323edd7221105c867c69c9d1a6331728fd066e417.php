<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_e7e0d26dff8b89faad53db6b9dc5462bdb246305aeec3851029bb4c7ec2396fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_c70474d2f8899f7c88f274a7ac4435bfbfaed84ee193a5e6982e21ade2392ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70474d2f8899f7c88f274a7ac4435bfbfaed84ee193a5e6982e21ade2392ab5->enter($__internal_c70474d2f8899f7c88f274a7ac4435bfbfaed84ee193a5e6982e21ade2392ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_561dfa6091f8cf4876bdc158e62cfcc771bb10a7fbf97ead43b8e6b6d922d894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561dfa6091f8cf4876bdc158e62cfcc771bb10a7fbf97ead43b8e6b6d922d894->enter($__internal_561dfa6091f8cf4876bdc158e62cfcc771bb10a7fbf97ead43b8e6b6d922d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70474d2f8899f7c88f274a7ac4435bfbfaed84ee193a5e6982e21ade2392ab5->leave($__internal_c70474d2f8899f7c88f274a7ac4435bfbfaed84ee193a5e6982e21ade2392ab5_prof);

        
        $__internal_561dfa6091f8cf4876bdc158e62cfcc771bb10a7fbf97ead43b8e6b6d922d894->leave($__internal_561dfa6091f8cf4876bdc158e62cfcc771bb10a7fbf97ead43b8e6b6d922d894_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0275df158e48a496c60d450741225624db252b127a93bbb36b849526d89a80cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0275df158e48a496c60d450741225624db252b127a93bbb36b849526d89a80cc->enter($__internal_0275df158e48a496c60d450741225624db252b127a93bbb36b849526d89a80cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_57a99a23b590b5c8a60b1c7c9c306e695ba20c1c53c845ca06d2b062266f679f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a99a23b590b5c8a60b1c7c9c306e695ba20c1c53c845ca06d2b062266f679f->enter($__internal_57a99a23b590b5c8a60b1c7c9c306e695ba20c1c53c845ca06d2b062266f679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_57a99a23b590b5c8a60b1c7c9c306e695ba20c1c53c845ca06d2b062266f679f->leave($__internal_57a99a23b590b5c8a60b1c7c9c306e695ba20c1c53c845ca06d2b062266f679f_prof);

        
        $__internal_0275df158e48a496c60d450741225624db252b127a93bbb36b849526d89a80cc->leave($__internal_0275df158e48a496c60d450741225624db252b127a93bbb36b849526d89a80cc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
