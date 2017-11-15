<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dd01f644843cf66b86a3da91f462d6e00068e003ed072110498430db17798e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f552841052166b2cceaea6fd33b32378a79c760cd0dd31b01160294677861472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f552841052166b2cceaea6fd33b32378a79c760cd0dd31b01160294677861472->enter($__internal_f552841052166b2cceaea6fd33b32378a79c760cd0dd31b01160294677861472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_cb20905bc6b6f17e520955982b5375d651ae5929e88f292975bb6c488d2713aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb20905bc6b6f17e520955982b5375d651ae5929e88f292975bb6c488d2713aa->enter($__internal_cb20905bc6b6f17e520955982b5375d651ae5929e88f292975bb6c488d2713aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f552841052166b2cceaea6fd33b32378a79c760cd0dd31b01160294677861472->leave($__internal_f552841052166b2cceaea6fd33b32378a79c760cd0dd31b01160294677861472_prof);

        
        $__internal_cb20905bc6b6f17e520955982b5375d651ae5929e88f292975bb6c488d2713aa->leave($__internal_cb20905bc6b6f17e520955982b5375d651ae5929e88f292975bb6c488d2713aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5baa4978265cf76afe9ca70b90d4d253db7039aea0391fbeb3d2d3ed8c9cf39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baa4978265cf76afe9ca70b90d4d253db7039aea0391fbeb3d2d3ed8c9cf39d->enter($__internal_5baa4978265cf76afe9ca70b90d4d253db7039aea0391fbeb3d2d3ed8c9cf39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5576b262d3bd8dd21caa448a4ed39af412726a9e69fe88696dde78392fdc947a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5576b262d3bd8dd21caa448a4ed39af412726a9e69fe88696dde78392fdc947a->enter($__internal_5576b262d3bd8dd21caa448a4ed39af412726a9e69fe88696dde78392fdc947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5576b262d3bd8dd21caa448a4ed39af412726a9e69fe88696dde78392fdc947a->leave($__internal_5576b262d3bd8dd21caa448a4ed39af412726a9e69fe88696dde78392fdc947a_prof);

        
        $__internal_5baa4978265cf76afe9ca70b90d4d253db7039aea0391fbeb3d2d3ed8c9cf39d->leave($__internal_5baa4978265cf76afe9ca70b90d4d253db7039aea0391fbeb3d2d3ed8c9cf39d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
