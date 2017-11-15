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
        $__internal_1720c1c4ae033bebf07062cd4199943820a76c2aa2b2aa84c57c06d5601efeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1720c1c4ae033bebf07062cd4199943820a76c2aa2b2aa84c57c06d5601efeb1->enter($__internal_1720c1c4ae033bebf07062cd4199943820a76c2aa2b2aa84c57c06d5601efeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_750f16e4be8de36ee1a70a8e405919535501bb08c397e949f379c5566389cf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750f16e4be8de36ee1a70a8e405919535501bb08c397e949f379c5566389cf2a->enter($__internal_750f16e4be8de36ee1a70a8e405919535501bb08c397e949f379c5566389cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1720c1c4ae033bebf07062cd4199943820a76c2aa2b2aa84c57c06d5601efeb1->leave($__internal_1720c1c4ae033bebf07062cd4199943820a76c2aa2b2aa84c57c06d5601efeb1_prof);

        
        $__internal_750f16e4be8de36ee1a70a8e405919535501bb08c397e949f379c5566389cf2a->leave($__internal_750f16e4be8de36ee1a70a8e405919535501bb08c397e949f379c5566389cf2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea03223032ad9ee300c4c783d6baf135f5ef8570dc02b9db46eca63bf2e2bad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea03223032ad9ee300c4c783d6baf135f5ef8570dc02b9db46eca63bf2e2bad6->enter($__internal_ea03223032ad9ee300c4c783d6baf135f5ef8570dc02b9db46eca63bf2e2bad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_094440d20289a87ec0e9cf49b6776a66aa05a44cb49178597281f48d4b8505d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094440d20289a87ec0e9cf49b6776a66aa05a44cb49178597281f48d4b8505d5->enter($__internal_094440d20289a87ec0e9cf49b6776a66aa05a44cb49178597281f48d4b8505d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_094440d20289a87ec0e9cf49b6776a66aa05a44cb49178597281f48d4b8505d5->leave($__internal_094440d20289a87ec0e9cf49b6776a66aa05a44cb49178597281f48d4b8505d5_prof);

        
        $__internal_ea03223032ad9ee300c4c783d6baf135f5ef8570dc02b9db46eca63bf2e2bad6->leave($__internal_ea03223032ad9ee300c4c783d6baf135f5ef8570dc02b9db46eca63bf2e2bad6_prof);

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
