<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_569c0d2a04b5d1a276a48def0ffe40e39b0bf6754fb00742abe16368c29487bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_47a9d15fee2a31ebf7240c08c81742b338b34cd1a0e19084d551615aa75a2a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a9d15fee2a31ebf7240c08c81742b338b34cd1a0e19084d551615aa75a2a84->enter($__internal_47a9d15fee2a31ebf7240c08c81742b338b34cd1a0e19084d551615aa75a2a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_0594b4339a3beb056b4f2be08e0fa0c969cdbecb684ccf19798333f59ddeec1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0594b4339a3beb056b4f2be08e0fa0c969cdbecb684ccf19798333f59ddeec1f->enter($__internal_0594b4339a3beb056b4f2be08e0fa0c969cdbecb684ccf19798333f59ddeec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a9d15fee2a31ebf7240c08c81742b338b34cd1a0e19084d551615aa75a2a84->leave($__internal_47a9d15fee2a31ebf7240c08c81742b338b34cd1a0e19084d551615aa75a2a84_prof);

        
        $__internal_0594b4339a3beb056b4f2be08e0fa0c969cdbecb684ccf19798333f59ddeec1f->leave($__internal_0594b4339a3beb056b4f2be08e0fa0c969cdbecb684ccf19798333f59ddeec1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b05b9cd3e98304eb6f082598d91b81b7f5f2638d3dd4c7c5fc161c3dc2370289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05b9cd3e98304eb6f082598d91b81b7f5f2638d3dd4c7c5fc161c3dc2370289->enter($__internal_b05b9cd3e98304eb6f082598d91b81b7f5f2638d3dd4c7c5fc161c3dc2370289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e038ebc30d408828a80dda8f44f6985e75c72268c458b2d188fa193335e55c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e038ebc30d408828a80dda8f44f6985e75c72268c458b2d188fa193335e55c55->enter($__internal_e038ebc30d408828a80dda8f44f6985e75c72268c458b2d188fa193335e55c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e038ebc30d408828a80dda8f44f6985e75c72268c458b2d188fa193335e55c55->leave($__internal_e038ebc30d408828a80dda8f44f6985e75c72268c458b2d188fa193335e55c55_prof);

        
        $__internal_b05b9cd3e98304eb6f082598d91b81b7f5f2638d3dd4c7c5fc161c3dc2370289->leave($__internal_b05b9cd3e98304eb6f082598d91b81b7f5f2638d3dd4c7c5fc161c3dc2370289_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
