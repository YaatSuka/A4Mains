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
        $__internal_441073d3418c6f714976e8f4feabb4c59940f92bfb7686d37f47694528e84770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441073d3418c6f714976e8f4feabb4c59940f92bfb7686d37f47694528e84770->enter($__internal_441073d3418c6f714976e8f4feabb4c59940f92bfb7686d37f47694528e84770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9f3ea0771b2068aff631ae775d89521d01344d16f7be1ca773b0b4e220fcbe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3ea0771b2068aff631ae775d89521d01344d16f7be1ca773b0b4e220fcbe89->enter($__internal_9f3ea0771b2068aff631ae775d89521d01344d16f7be1ca773b0b4e220fcbe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_441073d3418c6f714976e8f4feabb4c59940f92bfb7686d37f47694528e84770->leave($__internal_441073d3418c6f714976e8f4feabb4c59940f92bfb7686d37f47694528e84770_prof);

        
        $__internal_9f3ea0771b2068aff631ae775d89521d01344d16f7be1ca773b0b4e220fcbe89->leave($__internal_9f3ea0771b2068aff631ae775d89521d01344d16f7be1ca773b0b4e220fcbe89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_211b5ba4eca0a7ba6f7d4f68f3ab804606f4f352d06300f4e84dc32b56958ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211b5ba4eca0a7ba6f7d4f68f3ab804606f4f352d06300f4e84dc32b56958ee7->enter($__internal_211b5ba4eca0a7ba6f7d4f68f3ab804606f4f352d06300f4e84dc32b56958ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b026c723d68d078470fed592119c22f985082cc30b40a7a1e55e6913f8acc63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b026c723d68d078470fed592119c22f985082cc30b40a7a1e55e6913f8acc63b->enter($__internal_b026c723d68d078470fed592119c22f985082cc30b40a7a1e55e6913f8acc63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b026c723d68d078470fed592119c22f985082cc30b40a7a1e55e6913f8acc63b->leave($__internal_b026c723d68d078470fed592119c22f985082cc30b40a7a1e55e6913f8acc63b_prof);

        
        $__internal_211b5ba4eca0a7ba6f7d4f68f3ab804606f4f352d06300f4e84dc32b56958ee7->leave($__internal_211b5ba4eca0a7ba6f7d4f68f3ab804606f4f352d06300f4e84dc32b56958ee7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6256aaec47a0140f91b22cd7da179c25bc28f768b110b25975fbf0574215ab19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6256aaec47a0140f91b22cd7da179c25bc28f768b110b25975fbf0574215ab19->enter($__internal_6256aaec47a0140f91b22cd7da179c25bc28f768b110b25975fbf0574215ab19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78229aa1bfd9cdc3f480b733d2a783975baebe770787c379c28a6104f7e0c765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78229aa1bfd9cdc3f480b733d2a783975baebe770787c379c28a6104f7e0c765->enter($__internal_78229aa1bfd9cdc3f480b733d2a783975baebe770787c379c28a6104f7e0c765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78229aa1bfd9cdc3f480b733d2a783975baebe770787c379c28a6104f7e0c765->leave($__internal_78229aa1bfd9cdc3f480b733d2a783975baebe770787c379c28a6104f7e0c765_prof);

        
        $__internal_6256aaec47a0140f91b22cd7da179c25bc28f768b110b25975fbf0574215ab19->leave($__internal_6256aaec47a0140f91b22cd7da179c25bc28f768b110b25975fbf0574215ab19_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be3f9f00bc493dc48bcd448324d6ba70dd116a0076e881ddf089ec2ab5f7c755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3f9f00bc493dc48bcd448324d6ba70dd116a0076e881ddf089ec2ab5f7c755->enter($__internal_be3f9f00bc493dc48bcd448324d6ba70dd116a0076e881ddf089ec2ab5f7c755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b1d23e70267d6795059fad548c64e86c74ecb2f063cd131c4c9cb5c22f87720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1d23e70267d6795059fad548c64e86c74ecb2f063cd131c4c9cb5c22f87720->enter($__internal_6b1d23e70267d6795059fad548c64e86c74ecb2f063cd131c4c9cb5c22f87720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6b1d23e70267d6795059fad548c64e86c74ecb2f063cd131c4c9cb5c22f87720->leave($__internal_6b1d23e70267d6795059fad548c64e86c74ecb2f063cd131c4c9cb5c22f87720_prof);

        
        $__internal_be3f9f00bc493dc48bcd448324d6ba70dd116a0076e881ddf089ec2ab5f7c755->leave($__internal_be3f9f00bc493dc48bcd448324d6ba70dd116a0076e881ddf089ec2ab5f7c755_prof);

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
