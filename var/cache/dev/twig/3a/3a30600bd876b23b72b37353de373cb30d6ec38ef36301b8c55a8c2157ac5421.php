<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_9dcdbcdfe963de87dcd999c85c8a080976f5534127d691def18da8af9e689a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_9b7eed84757fdeb5eb4ab451f814f41aa2c6dd5d12789b5d6e4c8f8c1a3fc213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7eed84757fdeb5eb4ab451f814f41aa2c6dd5d12789b5d6e4c8f8c1a3fc213->enter($__internal_9b7eed84757fdeb5eb4ab451f814f41aa2c6dd5d12789b5d6e4c8f8c1a3fc213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_f30ea63b00732279cd74ed4722a02e55e495ff54a7ed94547300453bcca5a941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30ea63b00732279cd74ed4722a02e55e495ff54a7ed94547300453bcca5a941->enter($__internal_f30ea63b00732279cd74ed4722a02e55e495ff54a7ed94547300453bcca5a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7eed84757fdeb5eb4ab451f814f41aa2c6dd5d12789b5d6e4c8f8c1a3fc213->leave($__internal_9b7eed84757fdeb5eb4ab451f814f41aa2c6dd5d12789b5d6e4c8f8c1a3fc213_prof);

        
        $__internal_f30ea63b00732279cd74ed4722a02e55e495ff54a7ed94547300453bcca5a941->leave($__internal_f30ea63b00732279cd74ed4722a02e55e495ff54a7ed94547300453bcca5a941_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a0846397c7c84b98e0a110e0d9416390b1cfffbf25da991a6cdc68d1c977b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0846397c7c84b98e0a110e0d9416390b1cfffbf25da991a6cdc68d1c977b00->enter($__internal_9a0846397c7c84b98e0a110e0d9416390b1cfffbf25da991a6cdc68d1c977b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4321e4f5efbed5f69880fa811b27b3397d80d8ca62c8a8f982989f876e6efd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4321e4f5efbed5f69880fa811b27b3397d80d8ca62c8a8f982989f876e6efd9f->enter($__internal_4321e4f5efbed5f69880fa811b27b3397d80d8ca62c8a8f982989f876e6efd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4321e4f5efbed5f69880fa811b27b3397d80d8ca62c8a8f982989f876e6efd9f->leave($__internal_4321e4f5efbed5f69880fa811b27b3397d80d8ca62c8a8f982989f876e6efd9f_prof);

        
        $__internal_9a0846397c7c84b98e0a110e0d9416390b1cfffbf25da991a6cdc68d1c977b00->leave($__internal_9a0846397c7c84b98e0a110e0d9416390b1cfffbf25da991a6cdc68d1c977b00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
