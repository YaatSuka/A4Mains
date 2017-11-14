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
        $__internal_fdd89ce0d168f9a83b64907fff3478a923cee2ce711416dea885e7a52dbaa041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd89ce0d168f9a83b64907fff3478a923cee2ce711416dea885e7a52dbaa041->enter($__internal_fdd89ce0d168f9a83b64907fff3478a923cee2ce711416dea885e7a52dbaa041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_4e78cea53cc7ece944cb18394394e5307f93f6906064157deb8a534becb68e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e78cea53cc7ece944cb18394394e5307f93f6906064157deb8a534becb68e87->enter($__internal_4e78cea53cc7ece944cb18394394e5307f93f6906064157deb8a534becb68e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd89ce0d168f9a83b64907fff3478a923cee2ce711416dea885e7a52dbaa041->leave($__internal_fdd89ce0d168f9a83b64907fff3478a923cee2ce711416dea885e7a52dbaa041_prof);

        
        $__internal_4e78cea53cc7ece944cb18394394e5307f93f6906064157deb8a534becb68e87->leave($__internal_4e78cea53cc7ece944cb18394394e5307f93f6906064157deb8a534becb68e87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c0aaa8464b476e90b1eedd276c406f517bbd1d8aacf4d54113054a4177c4b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0aaa8464b476e90b1eedd276c406f517bbd1d8aacf4d54113054a4177c4b5d->enter($__internal_7c0aaa8464b476e90b1eedd276c406f517bbd1d8aacf4d54113054a4177c4b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17aaf175a585424acb6e1a5b3cc9101287cfaff145c0a02aeec5761686f9821e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17aaf175a585424acb6e1a5b3cc9101287cfaff145c0a02aeec5761686f9821e->enter($__internal_17aaf175a585424acb6e1a5b3cc9101287cfaff145c0a02aeec5761686f9821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_17aaf175a585424acb6e1a5b3cc9101287cfaff145c0a02aeec5761686f9821e->leave($__internal_17aaf175a585424acb6e1a5b3cc9101287cfaff145c0a02aeec5761686f9821e_prof);

        
        $__internal_7c0aaa8464b476e90b1eedd276c406f517bbd1d8aacf4d54113054a4177c4b5d->leave($__internal_7c0aaa8464b476e90b1eedd276c406f517bbd1d8aacf4d54113054a4177c4b5d_prof);

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
