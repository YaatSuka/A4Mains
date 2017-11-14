<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ed6345985937e3a0e0ec5b477db9a141f54fbf63c7cea80b6b82932f37625436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8b0c5ff6b0d6a55ae386aa7b74ae66e422870c386a5d17d8854dff7eb17faa1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0c5ff6b0d6a55ae386aa7b74ae66e422870c386a5d17d8854dff7eb17faa1e->enter($__internal_8b0c5ff6b0d6a55ae386aa7b74ae66e422870c386a5d17d8854dff7eb17faa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_605b75e910d0f979ac8e6d34669623d6f314afdbdd2b62d88964a69eb29cc3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605b75e910d0f979ac8e6d34669623d6f314afdbdd2b62d88964a69eb29cc3fa->enter($__internal_605b75e910d0f979ac8e6d34669623d6f314afdbdd2b62d88964a69eb29cc3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b0c5ff6b0d6a55ae386aa7b74ae66e422870c386a5d17d8854dff7eb17faa1e->leave($__internal_8b0c5ff6b0d6a55ae386aa7b74ae66e422870c386a5d17d8854dff7eb17faa1e_prof);

        
        $__internal_605b75e910d0f979ac8e6d34669623d6f314afdbdd2b62d88964a69eb29cc3fa->leave($__internal_605b75e910d0f979ac8e6d34669623d6f314afdbdd2b62d88964a69eb29cc3fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7685ed7cd2b72e4ec567cb470e35c06135e3aa104d4c3239a11ac16d6542f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7685ed7cd2b72e4ec567cb470e35c06135e3aa104d4c3239a11ac16d6542f45->enter($__internal_f7685ed7cd2b72e4ec567cb470e35c06135e3aa104d4c3239a11ac16d6542f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_449bc35b310870ab4657a58f5f220838c78e6f5f866a75099801978bf6243c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449bc35b310870ab4657a58f5f220838c78e6f5f866a75099801978bf6243c9b->enter($__internal_449bc35b310870ab4657a58f5f220838c78e6f5f866a75099801978bf6243c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_449bc35b310870ab4657a58f5f220838c78e6f5f866a75099801978bf6243c9b->leave($__internal_449bc35b310870ab4657a58f5f220838c78e6f5f866a75099801978bf6243c9b_prof);

        
        $__internal_f7685ed7cd2b72e4ec567cb470e35c06135e3aa104d4c3239a11ac16d6542f45->leave($__internal_f7685ed7cd2b72e4ec567cb470e35c06135e3aa104d4c3239a11ac16d6542f45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
