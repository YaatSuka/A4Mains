<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bb72b65e9988ab9ddf6a6a15365a322f3f84830b534b27d547288488910516c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_42510e07754a5b6b60206cdaf50f415e12b89ab16ce982b135a565c9e281de2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42510e07754a5b6b60206cdaf50f415e12b89ab16ce982b135a565c9e281de2d->enter($__internal_42510e07754a5b6b60206cdaf50f415e12b89ab16ce982b135a565c9e281de2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f33d2812cbc1d8d0a278abe0435620d1c9566bc5d7bad6007a35f6cd6410d1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33d2812cbc1d8d0a278abe0435620d1c9566bc5d7bad6007a35f6cd6410d1b5->enter($__internal_f33d2812cbc1d8d0a278abe0435620d1c9566bc5d7bad6007a35f6cd6410d1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42510e07754a5b6b60206cdaf50f415e12b89ab16ce982b135a565c9e281de2d->leave($__internal_42510e07754a5b6b60206cdaf50f415e12b89ab16ce982b135a565c9e281de2d_prof);

        
        $__internal_f33d2812cbc1d8d0a278abe0435620d1c9566bc5d7bad6007a35f6cd6410d1b5->leave($__internal_f33d2812cbc1d8d0a278abe0435620d1c9566bc5d7bad6007a35f6cd6410d1b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6051474e67b0f08792162483dc9446199d337f46fa08ecb7ab4f8c652096003e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6051474e67b0f08792162483dc9446199d337f46fa08ecb7ab4f8c652096003e->enter($__internal_6051474e67b0f08792162483dc9446199d337f46fa08ecb7ab4f8c652096003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63782d54e6de31e686679cb039d20311ce88c285fcf57f24abcb7b1090f54a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63782d54e6de31e686679cb039d20311ce88c285fcf57f24abcb7b1090f54a61->enter($__internal_63782d54e6de31e686679cb039d20311ce88c285fcf57f24abcb7b1090f54a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_63782d54e6de31e686679cb039d20311ce88c285fcf57f24abcb7b1090f54a61->leave($__internal_63782d54e6de31e686679cb039d20311ce88c285fcf57f24abcb7b1090f54a61_prof);

        
        $__internal_6051474e67b0f08792162483dc9446199d337f46fa08ecb7ab4f8c652096003e->leave($__internal_6051474e67b0f08792162483dc9446199d337f46fa08ecb7ab4f8c652096003e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c18d17bbfb86284fd7a759a76e9bbfd47925fe6738c5b05aa7475cc9c3f6b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c18d17bbfb86284fd7a759a76e9bbfd47925fe6738c5b05aa7475cc9c3f6b17->enter($__internal_5c18d17bbfb86284fd7a759a76e9bbfd47925fe6738c5b05aa7475cc9c3f6b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65e095ff800a2c4c8459ec07948b799abe81e321aaffe72f24b54631556f89c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e095ff800a2c4c8459ec07948b799abe81e321aaffe72f24b54631556f89c1->enter($__internal_65e095ff800a2c4c8459ec07948b799abe81e321aaffe72f24b54631556f89c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_65e095ff800a2c4c8459ec07948b799abe81e321aaffe72f24b54631556f89c1->leave($__internal_65e095ff800a2c4c8459ec07948b799abe81e321aaffe72f24b54631556f89c1_prof);

        
        $__internal_5c18d17bbfb86284fd7a759a76e9bbfd47925fe6738c5b05aa7475cc9c3f6b17->leave($__internal_5c18d17bbfb86284fd7a759a76e9bbfd47925fe6738c5b05aa7475cc9c3f6b17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_769d2fb3ce82881623d65185f8dac3ed1c0981fa3dfcd5956f08c5ac52e0ecbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769d2fb3ce82881623d65185f8dac3ed1c0981fa3dfcd5956f08c5ac52e0ecbc->enter($__internal_769d2fb3ce82881623d65185f8dac3ed1c0981fa3dfcd5956f08c5ac52e0ecbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7902084cb8d2cfb8f7783edf86d8fe8c7595613f2fd0f6591faa6bcefdd272be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7902084cb8d2cfb8f7783edf86d8fe8c7595613f2fd0f6591faa6bcefdd272be->enter($__internal_7902084cb8d2cfb8f7783edf86d8fe8c7595613f2fd0f6591faa6bcefdd272be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7902084cb8d2cfb8f7783edf86d8fe8c7595613f2fd0f6591faa6bcefdd272be->leave($__internal_7902084cb8d2cfb8f7783edf86d8fe8c7595613f2fd0f6591faa6bcefdd272be_prof);

        
        $__internal_769d2fb3ce82881623d65185f8dac3ed1c0981fa3dfcd5956f08c5ac52e0ecbc->leave($__internal_769d2fb3ce82881623d65185f8dac3ed1c0981fa3dfcd5956f08c5ac52e0ecbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
