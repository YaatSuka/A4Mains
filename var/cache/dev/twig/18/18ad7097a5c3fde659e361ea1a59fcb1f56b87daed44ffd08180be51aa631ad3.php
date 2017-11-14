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
        $__internal_12090525253205a8b73db84ca58047267c4e86e5833d344ffa8e9c996ad92c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12090525253205a8b73db84ca58047267c4e86e5833d344ffa8e9c996ad92c7d->enter($__internal_12090525253205a8b73db84ca58047267c4e86e5833d344ffa8e9c996ad92c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c6e839123864209dc5a36f80a96aad9341cbbea3bc2d90156d4b442120b534c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e839123864209dc5a36f80a96aad9341cbbea3bc2d90156d4b442120b534c6->enter($__internal_c6e839123864209dc5a36f80a96aad9341cbbea3bc2d90156d4b442120b534c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12090525253205a8b73db84ca58047267c4e86e5833d344ffa8e9c996ad92c7d->leave($__internal_12090525253205a8b73db84ca58047267c4e86e5833d344ffa8e9c996ad92c7d_prof);

        
        $__internal_c6e839123864209dc5a36f80a96aad9341cbbea3bc2d90156d4b442120b534c6->leave($__internal_c6e839123864209dc5a36f80a96aad9341cbbea3bc2d90156d4b442120b534c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceadbacd54741d581c03314de773481fd35e840ae7b70016284eb6ee9ec1b0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceadbacd54741d581c03314de773481fd35e840ae7b70016284eb6ee9ec1b0d0->enter($__internal_ceadbacd54741d581c03314de773481fd35e840ae7b70016284eb6ee9ec1b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c50b858afb45a62fedc4cc83fddb3b6c0b0a9aaa2af2f93c7410d51016240f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50b858afb45a62fedc4cc83fddb3b6c0b0a9aaa2af2f93c7410d51016240f32->enter($__internal_c50b858afb45a62fedc4cc83fddb3b6c0b0a9aaa2af2f93c7410d51016240f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c50b858afb45a62fedc4cc83fddb3b6c0b0a9aaa2af2f93c7410d51016240f32->leave($__internal_c50b858afb45a62fedc4cc83fddb3b6c0b0a9aaa2af2f93c7410d51016240f32_prof);

        
        $__internal_ceadbacd54741d581c03314de773481fd35e840ae7b70016284eb6ee9ec1b0d0->leave($__internal_ceadbacd54741d581c03314de773481fd35e840ae7b70016284eb6ee9ec1b0d0_prof);

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
