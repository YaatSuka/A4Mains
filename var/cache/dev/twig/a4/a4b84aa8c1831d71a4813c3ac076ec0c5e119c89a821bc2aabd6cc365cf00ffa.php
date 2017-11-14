<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_666dadc657e564db55396141f6249fb0ec7b44fed100808558a2b594e6a0655b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_723a555bbbe693dad0632430cca03f6616370a662d1f6caa08c726f47751916c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723a555bbbe693dad0632430cca03f6616370a662d1f6caa08c726f47751916c->enter($__internal_723a555bbbe693dad0632430cca03f6616370a662d1f6caa08c726f47751916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_12570ec1ec1bb23abb73926091e602d86c531ddd3a5c2e2d13faa0f11a407235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12570ec1ec1bb23abb73926091e602d86c531ddd3a5c2e2d13faa0f11a407235->enter($__internal_12570ec1ec1bb23abb73926091e602d86c531ddd3a5c2e2d13faa0f11a407235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723a555bbbe693dad0632430cca03f6616370a662d1f6caa08c726f47751916c->leave($__internal_723a555bbbe693dad0632430cca03f6616370a662d1f6caa08c726f47751916c_prof);

        
        $__internal_12570ec1ec1bb23abb73926091e602d86c531ddd3a5c2e2d13faa0f11a407235->leave($__internal_12570ec1ec1bb23abb73926091e602d86c531ddd3a5c2e2d13faa0f11a407235_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ba86dbd28758bf62da40829ef8576d77cd11189047f7acffcfc71823abf595f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba86dbd28758bf62da40829ef8576d77cd11189047f7acffcfc71823abf595f->enter($__internal_1ba86dbd28758bf62da40829ef8576d77cd11189047f7acffcfc71823abf595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88ba712c9b819f958ae6eefba5476b023a653816fb96793391a188fa695bcacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ba712c9b819f958ae6eefba5476b023a653816fb96793391a188fa695bcacc->enter($__internal_88ba712c9b819f958ae6eefba5476b023a653816fb96793391a188fa695bcacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_88ba712c9b819f958ae6eefba5476b023a653816fb96793391a188fa695bcacc->leave($__internal_88ba712c9b819f958ae6eefba5476b023a653816fb96793391a188fa695bcacc_prof);

        
        $__internal_1ba86dbd28758bf62da40829ef8576d77cd11189047f7acffcfc71823abf595f->leave($__internal_1ba86dbd28758bf62da40829ef8576d77cd11189047f7acffcfc71823abf595f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
