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
        $__internal_4d7118f704c1ed46fa41e48d00589355b84b46eb5c4d542203c73d3c5ed98e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7118f704c1ed46fa41e48d00589355b84b46eb5c4d542203c73d3c5ed98e7a->enter($__internal_4d7118f704c1ed46fa41e48d00589355b84b46eb5c4d542203c73d3c5ed98e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_c293c3f66a43028b5cd3c800c5632d25fae72afac2cab1ad3fcda6c91e5bbd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c293c3f66a43028b5cd3c800c5632d25fae72afac2cab1ad3fcda6c91e5bbd84->enter($__internal_c293c3f66a43028b5cd3c800c5632d25fae72afac2cab1ad3fcda6c91e5bbd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7118f704c1ed46fa41e48d00589355b84b46eb5c4d542203c73d3c5ed98e7a->leave($__internal_4d7118f704c1ed46fa41e48d00589355b84b46eb5c4d542203c73d3c5ed98e7a_prof);

        
        $__internal_c293c3f66a43028b5cd3c800c5632d25fae72afac2cab1ad3fcda6c91e5bbd84->leave($__internal_c293c3f66a43028b5cd3c800c5632d25fae72afac2cab1ad3fcda6c91e5bbd84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d58c88d103c49f525512432914e89c5639cc1db70bfaa85f744578221c79d816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58c88d103c49f525512432914e89c5639cc1db70bfaa85f744578221c79d816->enter($__internal_d58c88d103c49f525512432914e89c5639cc1db70bfaa85f744578221c79d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e85dc78b15fab2910d78b88e547e3b007cef287a2e4b8cb3455322e745a0622c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85dc78b15fab2910d78b88e547e3b007cef287a2e4b8cb3455322e745a0622c->enter($__internal_e85dc78b15fab2910d78b88e547e3b007cef287a2e4b8cb3455322e745a0622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e85dc78b15fab2910d78b88e547e3b007cef287a2e4b8cb3455322e745a0622c->leave($__internal_e85dc78b15fab2910d78b88e547e3b007cef287a2e4b8cb3455322e745a0622c_prof);

        
        $__internal_d58c88d103c49f525512432914e89c5639cc1db70bfaa85f744578221c79d816->leave($__internal_d58c88d103c49f525512432914e89c5639cc1db70bfaa85f744578221c79d816_prof);

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
