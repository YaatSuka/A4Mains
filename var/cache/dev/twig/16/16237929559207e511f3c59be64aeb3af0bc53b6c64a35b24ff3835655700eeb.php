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
        $__internal_901b99184e7f9a7901319ff0198d4ed40e01661f775062b9bbc5e0037d4180f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901b99184e7f9a7901319ff0198d4ed40e01661f775062b9bbc5e0037d4180f5->enter($__internal_901b99184e7f9a7901319ff0198d4ed40e01661f775062b9bbc5e0037d4180f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_064bb673b9344c5f612297f4a4f5c9d6a6f285e4e4368218a4b42855a8ea5f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064bb673b9344c5f612297f4a4f5c9d6a6f285e4e4368218a4b42855a8ea5f12->enter($__internal_064bb673b9344c5f612297f4a4f5c9d6a6f285e4e4368218a4b42855a8ea5f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_901b99184e7f9a7901319ff0198d4ed40e01661f775062b9bbc5e0037d4180f5->leave($__internal_901b99184e7f9a7901319ff0198d4ed40e01661f775062b9bbc5e0037d4180f5_prof);

        
        $__internal_064bb673b9344c5f612297f4a4f5c9d6a6f285e4e4368218a4b42855a8ea5f12->leave($__internal_064bb673b9344c5f612297f4a4f5c9d6a6f285e4e4368218a4b42855a8ea5f12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c9ae61fc98245343ba4106e66e6cb093c1deb57bde5a881defbd9d9feea95c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9ae61fc98245343ba4106e66e6cb093c1deb57bde5a881defbd9d9feea95c1->enter($__internal_2c9ae61fc98245343ba4106e66e6cb093c1deb57bde5a881defbd9d9feea95c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3ec44fe2809e4282c30e560e95dd60229c5d6616c5eb95141c1eb799314b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ec44fe2809e4282c30e560e95dd60229c5d6616c5eb95141c1eb799314b9b3->enter($__internal_b3ec44fe2809e4282c30e560e95dd60229c5d6616c5eb95141c1eb799314b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b3ec44fe2809e4282c30e560e95dd60229c5d6616c5eb95141c1eb799314b9b3->leave($__internal_b3ec44fe2809e4282c30e560e95dd60229c5d6616c5eb95141c1eb799314b9b3_prof);

        
        $__internal_2c9ae61fc98245343ba4106e66e6cb093c1deb57bde5a881defbd9d9feea95c1->leave($__internal_2c9ae61fc98245343ba4106e66e6cb093c1deb57bde5a881defbd9d9feea95c1_prof);

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
