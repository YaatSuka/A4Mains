<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_162b97bc37e1e3a44de8c3294774040c6d9ee73d094a6df37def94a9981e1804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_55b939c3e51f232f4b8a7933e743edafff79c833e42201a5479969a3a66a970c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b939c3e51f232f4b8a7933e743edafff79c833e42201a5479969a3a66a970c->enter($__internal_55b939c3e51f232f4b8a7933e743edafff79c833e42201a5479969a3a66a970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_834c64bb9461bac173552029142e2d075eeba956fa94f8c8622c56a8e850ee80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834c64bb9461bac173552029142e2d075eeba956fa94f8c8622c56a8e850ee80->enter($__internal_834c64bb9461bac173552029142e2d075eeba956fa94f8c8622c56a8e850ee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b939c3e51f232f4b8a7933e743edafff79c833e42201a5479969a3a66a970c->leave($__internal_55b939c3e51f232f4b8a7933e743edafff79c833e42201a5479969a3a66a970c_prof);

        
        $__internal_834c64bb9461bac173552029142e2d075eeba956fa94f8c8622c56a8e850ee80->leave($__internal_834c64bb9461bac173552029142e2d075eeba956fa94f8c8622c56a8e850ee80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dfad26cdc3ac45d9ba8b150acbc7fcda17ba1e6e20d0ccf31497050e89a8025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfad26cdc3ac45d9ba8b150acbc7fcda17ba1e6e20d0ccf31497050e89a8025->enter($__internal_3dfad26cdc3ac45d9ba8b150acbc7fcda17ba1e6e20d0ccf31497050e89a8025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65355bf5c320d9198e27bebbf8736c0238b0a1086b85fc0828f8847914a8f7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65355bf5c320d9198e27bebbf8736c0238b0a1086b85fc0828f8847914a8f7bd->enter($__internal_65355bf5c320d9198e27bebbf8736c0238b0a1086b85fc0828f8847914a8f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_65355bf5c320d9198e27bebbf8736c0238b0a1086b85fc0828f8847914a8f7bd->leave($__internal_65355bf5c320d9198e27bebbf8736c0238b0a1086b85fc0828f8847914a8f7bd_prof);

        
        $__internal_3dfad26cdc3ac45d9ba8b150acbc7fcda17ba1e6e20d0ccf31497050e89a8025->leave($__internal_3dfad26cdc3ac45d9ba8b150acbc7fcda17ba1e6e20d0ccf31497050e89a8025_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
