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
        $__internal_7f132b44135a321dcb7b1c256c6c700d6a91a348fa8bf27ff092734813b9bf28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f132b44135a321dcb7b1c256c6c700d6a91a348fa8bf27ff092734813b9bf28->enter($__internal_7f132b44135a321dcb7b1c256c6c700d6a91a348fa8bf27ff092734813b9bf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d9c0d8f498a739ea6c882c1b0a249ae1a1f14aa88ae439b582f670118160dc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c0d8f498a739ea6c882c1b0a249ae1a1f14aa88ae439b582f670118160dc65->enter($__internal_d9c0d8f498a739ea6c882c1b0a249ae1a1f14aa88ae439b582f670118160dc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f132b44135a321dcb7b1c256c6c700d6a91a348fa8bf27ff092734813b9bf28->leave($__internal_7f132b44135a321dcb7b1c256c6c700d6a91a348fa8bf27ff092734813b9bf28_prof);

        
        $__internal_d9c0d8f498a739ea6c882c1b0a249ae1a1f14aa88ae439b582f670118160dc65->leave($__internal_d9c0d8f498a739ea6c882c1b0a249ae1a1f14aa88ae439b582f670118160dc65_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8b10cdd90f9f8eedaaf917d609ff267f3756c0691dfc3de753ec46260a649c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b10cdd90f9f8eedaaf917d609ff267f3756c0691dfc3de753ec46260a649c7->enter($__internal_c8b10cdd90f9f8eedaaf917d609ff267f3756c0691dfc3de753ec46260a649c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1f2968c3adfd6e212460e1ffebf4c9a7d8df69f7d87b5ec7825ee52df403bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f2968c3adfd6e212460e1ffebf4c9a7d8df69f7d87b5ec7825ee52df403bec->enter($__internal_b1f2968c3adfd6e212460e1ffebf4c9a7d8df69f7d87b5ec7825ee52df403bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b1f2968c3adfd6e212460e1ffebf4c9a7d8df69f7d87b5ec7825ee52df403bec->leave($__internal_b1f2968c3adfd6e212460e1ffebf4c9a7d8df69f7d87b5ec7825ee52df403bec_prof);

        
        $__internal_c8b10cdd90f9f8eedaaf917d609ff267f3756c0691dfc3de753ec46260a649c7->leave($__internal_c8b10cdd90f9f8eedaaf917d609ff267f3756c0691dfc3de753ec46260a649c7_prof);

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
