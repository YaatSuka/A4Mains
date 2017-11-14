<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f073e7f9e8449303a6e8cf219767d604551708cf81f63aae72081fc5b01e7ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_648dfc24dc92194b98ea7074aec967f7ac7191884da27558ac592df55fd33676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648dfc24dc92194b98ea7074aec967f7ac7191884da27558ac592df55fd33676->enter($__internal_648dfc24dc92194b98ea7074aec967f7ac7191884da27558ac592df55fd33676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8693593017b5be772247d87414466c0965024d8c26afe2bd8a4fe76382b67216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8693593017b5be772247d87414466c0965024d8c26afe2bd8a4fe76382b67216->enter($__internal_8693593017b5be772247d87414466c0965024d8c26afe2bd8a4fe76382b67216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648dfc24dc92194b98ea7074aec967f7ac7191884da27558ac592df55fd33676->leave($__internal_648dfc24dc92194b98ea7074aec967f7ac7191884da27558ac592df55fd33676_prof);

        
        $__internal_8693593017b5be772247d87414466c0965024d8c26afe2bd8a4fe76382b67216->leave($__internal_8693593017b5be772247d87414466c0965024d8c26afe2bd8a4fe76382b67216_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32fbce1929b07e2bb973c5899c4a17cc8cb55b019249900ba71cbb03b28cb10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fbce1929b07e2bb973c5899c4a17cc8cb55b019249900ba71cbb03b28cb10d->enter($__internal_32fbce1929b07e2bb973c5899c4a17cc8cb55b019249900ba71cbb03b28cb10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d73e97945b1474123f7524e2cfa71d5e6613b8177c25389469d0b288c253ba36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73e97945b1474123f7524e2cfa71d5e6613b8177c25389469d0b288c253ba36->enter($__internal_d73e97945b1474123f7524e2cfa71d5e6613b8177c25389469d0b288c253ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d73e97945b1474123f7524e2cfa71d5e6613b8177c25389469d0b288c253ba36->leave($__internal_d73e97945b1474123f7524e2cfa71d5e6613b8177c25389469d0b288c253ba36_prof);

        
        $__internal_32fbce1929b07e2bb973c5899c4a17cc8cb55b019249900ba71cbb03b28cb10d->leave($__internal_32fbce1929b07e2bb973c5899c4a17cc8cb55b019249900ba71cbb03b28cb10d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6910087ec2a94457fce09a4802f58d25200e404a3ce7b62ac002cf7711744746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6910087ec2a94457fce09a4802f58d25200e404a3ce7b62ac002cf7711744746->enter($__internal_6910087ec2a94457fce09a4802f58d25200e404a3ce7b62ac002cf7711744746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ef4f3762e51cc756e54afedad7818cda944e083bd85b5033108b50ccab8cde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef4f3762e51cc756e54afedad7818cda944e083bd85b5033108b50ccab8cde5->enter($__internal_9ef4f3762e51cc756e54afedad7818cda944e083bd85b5033108b50ccab8cde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ef4f3762e51cc756e54afedad7818cda944e083bd85b5033108b50ccab8cde5->leave($__internal_9ef4f3762e51cc756e54afedad7818cda944e083bd85b5033108b50ccab8cde5_prof);

        
        $__internal_6910087ec2a94457fce09a4802f58d25200e404a3ce7b62ac002cf7711744746->leave($__internal_6910087ec2a94457fce09a4802f58d25200e404a3ce7b62ac002cf7711744746_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d6ea5dd2026d1fba0507e6a0de82d4bf522cc86c444ad2f276bbea80d99fc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6ea5dd2026d1fba0507e6a0de82d4bf522cc86c444ad2f276bbea80d99fc5a->enter($__internal_6d6ea5dd2026d1fba0507e6a0de82d4bf522cc86c444ad2f276bbea80d99fc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0c658ca0f1c50ff79adb859c0465df464941094b0d162977bc74538cf7d9436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c658ca0f1c50ff79adb859c0465df464941094b0d162977bc74538cf7d9436->enter($__internal_d0c658ca0f1c50ff79adb859c0465df464941094b0d162977bc74538cf7d9436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d0c658ca0f1c50ff79adb859c0465df464941094b0d162977bc74538cf7d9436->leave($__internal_d0c658ca0f1c50ff79adb859c0465df464941094b0d162977bc74538cf7d9436_prof);

        
        $__internal_6d6ea5dd2026d1fba0507e6a0de82d4bf522cc86c444ad2f276bbea80d99fc5a->leave($__internal_6d6ea5dd2026d1fba0507e6a0de82d4bf522cc86c444ad2f276bbea80d99fc5a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
