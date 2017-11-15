<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71d97cb57fdf4c0ee1cc3608dfc0f27ecbdff962e0a0959482f6d21b4e43c5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f33d913962848c776a754e7d2d84ad8214416caa4a158012253d68efc40e9099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33d913962848c776a754e7d2d84ad8214416caa4a158012253d68efc40e9099->enter($__internal_f33d913962848c776a754e7d2d84ad8214416caa4a158012253d68efc40e9099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_84dfa4b24620d302988de54d895d171b627a32375ad07fe3cadd9e377444796b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dfa4b24620d302988de54d895d171b627a32375ad07fe3cadd9e377444796b->enter($__internal_84dfa4b24620d302988de54d895d171b627a32375ad07fe3cadd9e377444796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33d913962848c776a754e7d2d84ad8214416caa4a158012253d68efc40e9099->leave($__internal_f33d913962848c776a754e7d2d84ad8214416caa4a158012253d68efc40e9099_prof);

        
        $__internal_84dfa4b24620d302988de54d895d171b627a32375ad07fe3cadd9e377444796b->leave($__internal_84dfa4b24620d302988de54d895d171b627a32375ad07fe3cadd9e377444796b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c46a6da639a097ad7c5055f95e996846ca038178352d321e3758b803d1aa4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c46a6da639a097ad7c5055f95e996846ca038178352d321e3758b803d1aa4f4->enter($__internal_8c46a6da639a097ad7c5055f95e996846ca038178352d321e3758b803d1aa4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ad18e0359a513c0a5c5947cdabed99ff1435ad899341391c07f2dd37b6c544d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad18e0359a513c0a5c5947cdabed99ff1435ad899341391c07f2dd37b6c544d7->enter($__internal_ad18e0359a513c0a5c5947cdabed99ff1435ad899341391c07f2dd37b6c544d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad18e0359a513c0a5c5947cdabed99ff1435ad899341391c07f2dd37b6c544d7->leave($__internal_ad18e0359a513c0a5c5947cdabed99ff1435ad899341391c07f2dd37b6c544d7_prof);

        
        $__internal_8c46a6da639a097ad7c5055f95e996846ca038178352d321e3758b803d1aa4f4->leave($__internal_8c46a6da639a097ad7c5055f95e996846ca038178352d321e3758b803d1aa4f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cd62ac4d4eb29996e931ab3fe37207dcdd0a757bf0a9a366b6d4f858695bdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd62ac4d4eb29996e931ab3fe37207dcdd0a757bf0a9a366b6d4f858695bdb8->enter($__internal_1cd62ac4d4eb29996e931ab3fe37207dcdd0a757bf0a9a366b6d4f858695bdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9064f0aaf1ad37fd824e5cacf9478e7086e1a2d4b9a1a44019e07c9b0c12c504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9064f0aaf1ad37fd824e5cacf9478e7086e1a2d4b9a1a44019e07c9b0c12c504->enter($__internal_9064f0aaf1ad37fd824e5cacf9478e7086e1a2d4b9a1a44019e07c9b0c12c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9064f0aaf1ad37fd824e5cacf9478e7086e1a2d4b9a1a44019e07c9b0c12c504->leave($__internal_9064f0aaf1ad37fd824e5cacf9478e7086e1a2d4b9a1a44019e07c9b0c12c504_prof);

        
        $__internal_1cd62ac4d4eb29996e931ab3fe37207dcdd0a757bf0a9a366b6d4f858695bdb8->leave($__internal_1cd62ac4d4eb29996e931ab3fe37207dcdd0a757bf0a9a366b6d4f858695bdb8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1a724f6276687fae934bc4523bab98a249c070d9189bf667317dbcfc7e8d507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a724f6276687fae934bc4523bab98a249c070d9189bf667317dbcfc7e8d507->enter($__internal_e1a724f6276687fae934bc4523bab98a249c070d9189bf667317dbcfc7e8d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f16f17648845456b4928b54c0272d01c85df62bb94aa43de15f235e9cd31c4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16f17648845456b4928b54c0272d01c85df62bb94aa43de15f235e9cd31c4aa->enter($__internal_f16f17648845456b4928b54c0272d01c85df62bb94aa43de15f235e9cd31c4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f16f17648845456b4928b54c0272d01c85df62bb94aa43de15f235e9cd31c4aa->leave($__internal_f16f17648845456b4928b54c0272d01c85df62bb94aa43de15f235e9cd31c4aa_prof);

        
        $__internal_e1a724f6276687fae934bc4523bab98a249c070d9189bf667317dbcfc7e8d507->leave($__internal_e1a724f6276687fae934bc4523bab98a249c070d9189bf667317dbcfc7e8d507_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
