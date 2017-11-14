<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f3e871e4ca3f1e83c461d3a8bf545d404f2de78eab7c5e8a9abc75d2777c28df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a15e9ccc4a055852bf96c301228db3f2fc801c71b0d78919dfddff006ecddea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15e9ccc4a055852bf96c301228db3f2fc801c71b0d78919dfddff006ecddea7->enter($__internal_a15e9ccc4a055852bf96c301228db3f2fc801c71b0d78919dfddff006ecddea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2b740477dbf9249d78426abecd1f52ed87fa98d8d4a513c053208f301dc47f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b740477dbf9249d78426abecd1f52ed87fa98d8d4a513c053208f301dc47f38->enter($__internal_2b740477dbf9249d78426abecd1f52ed87fa98d8d4a513c053208f301dc47f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15e9ccc4a055852bf96c301228db3f2fc801c71b0d78919dfddff006ecddea7->leave($__internal_a15e9ccc4a055852bf96c301228db3f2fc801c71b0d78919dfddff006ecddea7_prof);

        
        $__internal_2b740477dbf9249d78426abecd1f52ed87fa98d8d4a513c053208f301dc47f38->leave($__internal_2b740477dbf9249d78426abecd1f52ed87fa98d8d4a513c053208f301dc47f38_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0cb95d553fcea0a42b0fe28fe2813aab2337b63e139992243a89916fffa811a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cb95d553fcea0a42b0fe28fe2813aab2337b63e139992243a89916fffa811a->enter($__internal_a0cb95d553fcea0a42b0fe28fe2813aab2337b63e139992243a89916fffa811a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9ea076593de3c6217acff538252de766fd8f82b53b7a21c8b974f74ce7c0218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ea076593de3c6217acff538252de766fd8f82b53b7a21c8b974f74ce7c0218->enter($__internal_d9ea076593de3c6217acff538252de766fd8f82b53b7a21c8b974f74ce7c0218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d9ea076593de3c6217acff538252de766fd8f82b53b7a21c8b974f74ce7c0218->leave($__internal_d9ea076593de3c6217acff538252de766fd8f82b53b7a21c8b974f74ce7c0218_prof);

        
        $__internal_a0cb95d553fcea0a42b0fe28fe2813aab2337b63e139992243a89916fffa811a->leave($__internal_a0cb95d553fcea0a42b0fe28fe2813aab2337b63e139992243a89916fffa811a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
