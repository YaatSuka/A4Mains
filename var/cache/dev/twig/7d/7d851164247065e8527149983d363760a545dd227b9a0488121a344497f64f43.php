<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_12de72b51fbf585f713670d6c5f5d85a9e97f5b7558e2c26eb06cde17cfc115a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2f118f6f836dbbc488fb4903cae1836d68a4dfb7f5c24d09c4cf645d8e6c4f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f118f6f836dbbc488fb4903cae1836d68a4dfb7f5c24d09c4cf645d8e6c4f72->enter($__internal_2f118f6f836dbbc488fb4903cae1836d68a4dfb7f5c24d09c4cf645d8e6c4f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5a5049395a73121c57a5ad5b27e7fbf128e47a5047fb21dee77819e64a31143f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5049395a73121c57a5ad5b27e7fbf128e47a5047fb21dee77819e64a31143f->enter($__internal_5a5049395a73121c57a5ad5b27e7fbf128e47a5047fb21dee77819e64a31143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f118f6f836dbbc488fb4903cae1836d68a4dfb7f5c24d09c4cf645d8e6c4f72->leave($__internal_2f118f6f836dbbc488fb4903cae1836d68a4dfb7f5c24d09c4cf645d8e6c4f72_prof);

        
        $__internal_5a5049395a73121c57a5ad5b27e7fbf128e47a5047fb21dee77819e64a31143f->leave($__internal_5a5049395a73121c57a5ad5b27e7fbf128e47a5047fb21dee77819e64a31143f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b8bb2b2ad1fad7a2a45cf66ef2409f33aa139a2a4d677355a0d1d599317f6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8bb2b2ad1fad7a2a45cf66ef2409f33aa139a2a4d677355a0d1d599317f6ef->enter($__internal_4b8bb2b2ad1fad7a2a45cf66ef2409f33aa139a2a4d677355a0d1d599317f6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_366dad32a9b94d9daf78552e933a022fa1a10478f2bdf551a42c79c2836b3b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366dad32a9b94d9daf78552e933a022fa1a10478f2bdf551a42c79c2836b3b40->enter($__internal_366dad32a9b94d9daf78552e933a022fa1a10478f2bdf551a42c79c2836b3b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_366dad32a9b94d9daf78552e933a022fa1a10478f2bdf551a42c79c2836b3b40->leave($__internal_366dad32a9b94d9daf78552e933a022fa1a10478f2bdf551a42c79c2836b3b40_prof);

        
        $__internal_4b8bb2b2ad1fad7a2a45cf66ef2409f33aa139a2a4d677355a0d1d599317f6ef->leave($__internal_4b8bb2b2ad1fad7a2a45cf66ef2409f33aa139a2a4d677355a0d1d599317f6ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
