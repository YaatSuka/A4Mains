<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a27d03d3de3de63d8bebe8faeab5d7bcee31297f69cf37d93b495d6061a56336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_62e715a092bd3ebef8df3084ec1534e3baa2b5558c98caa13a9df6fd5a8b0e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e715a092bd3ebef8df3084ec1534e3baa2b5558c98caa13a9df6fd5a8b0e6d->enter($__internal_62e715a092bd3ebef8df3084ec1534e3baa2b5558c98caa13a9df6fd5a8b0e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e80dc17d774d953bdf556f0597afb30b9178b810c2a53a3fedec1e7e1aa89b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80dc17d774d953bdf556f0597afb30b9178b810c2a53a3fedec1e7e1aa89b88->enter($__internal_e80dc17d774d953bdf556f0597afb30b9178b810c2a53a3fedec1e7e1aa89b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e715a092bd3ebef8df3084ec1534e3baa2b5558c98caa13a9df6fd5a8b0e6d->leave($__internal_62e715a092bd3ebef8df3084ec1534e3baa2b5558c98caa13a9df6fd5a8b0e6d_prof);

        
        $__internal_e80dc17d774d953bdf556f0597afb30b9178b810c2a53a3fedec1e7e1aa89b88->leave($__internal_e80dc17d774d953bdf556f0597afb30b9178b810c2a53a3fedec1e7e1aa89b88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26df87aee84fb9eb45f22e39b84981ccedfba4a7f8d533759c81f7691d63a79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26df87aee84fb9eb45f22e39b84981ccedfba4a7f8d533759c81f7691d63a79a->enter($__internal_26df87aee84fb9eb45f22e39b84981ccedfba4a7f8d533759c81f7691d63a79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07e4f6eab9f4410a983eb0371ec4784d791704021d82fd5c3b35748e196a4bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e4f6eab9f4410a983eb0371ec4784d791704021d82fd5c3b35748e196a4bf0->enter($__internal_07e4f6eab9f4410a983eb0371ec4784d791704021d82fd5c3b35748e196a4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_07e4f6eab9f4410a983eb0371ec4784d791704021d82fd5c3b35748e196a4bf0->leave($__internal_07e4f6eab9f4410a983eb0371ec4784d791704021d82fd5c3b35748e196a4bf0_prof);

        
        $__internal_26df87aee84fb9eb45f22e39b84981ccedfba4a7f8d533759c81f7691d63a79a->leave($__internal_26df87aee84fb9eb45f22e39b84981ccedfba4a7f8d533759c81f7691d63a79a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
