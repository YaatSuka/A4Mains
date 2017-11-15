<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d8ec28ecc29922f77ef7bca2845977ffec68b77984954d9a95d9085cb42e34ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_51e2d6425324a35df94f5080847fec454d7981473a16632babc400dd15aab4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e2d6425324a35df94f5080847fec454d7981473a16632babc400dd15aab4f6->enter($__internal_51e2d6425324a35df94f5080847fec454d7981473a16632babc400dd15aab4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_921b891b1d19ff51e5143510dda97401b1c8f2337f734cf625d1ed94ae40c24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921b891b1d19ff51e5143510dda97401b1c8f2337f734cf625d1ed94ae40c24d->enter($__internal_921b891b1d19ff51e5143510dda97401b1c8f2337f734cf625d1ed94ae40c24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e2d6425324a35df94f5080847fec454d7981473a16632babc400dd15aab4f6->leave($__internal_51e2d6425324a35df94f5080847fec454d7981473a16632babc400dd15aab4f6_prof);

        
        $__internal_921b891b1d19ff51e5143510dda97401b1c8f2337f734cf625d1ed94ae40c24d->leave($__internal_921b891b1d19ff51e5143510dda97401b1c8f2337f734cf625d1ed94ae40c24d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_192aab497c8dcd12f6583d44d35d8b31f1826992c5c0f2a9cc72948b3333bd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192aab497c8dcd12f6583d44d35d8b31f1826992c5c0f2a9cc72948b3333bd9a->enter($__internal_192aab497c8dcd12f6583d44d35d8b31f1826992c5c0f2a9cc72948b3333bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa07ff6d70e3922cc280f16cce5ea1017a02c1ff72d2cf60d4621edbe00d6eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa07ff6d70e3922cc280f16cce5ea1017a02c1ff72d2cf60d4621edbe00d6eee->enter($__internal_fa07ff6d70e3922cc280f16cce5ea1017a02c1ff72d2cf60d4621edbe00d6eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fa07ff6d70e3922cc280f16cce5ea1017a02c1ff72d2cf60d4621edbe00d6eee->leave($__internal_fa07ff6d70e3922cc280f16cce5ea1017a02c1ff72d2cf60d4621edbe00d6eee_prof);

        
        $__internal_192aab497c8dcd12f6583d44d35d8b31f1826992c5c0f2a9cc72948b3333bd9a->leave($__internal_192aab497c8dcd12f6583d44d35d8b31f1826992c5c0f2a9cc72948b3333bd9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
