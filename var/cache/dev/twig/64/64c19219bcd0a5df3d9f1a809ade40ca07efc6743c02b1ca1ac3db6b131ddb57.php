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
        $__internal_d808677a64fa82cae8f078454ac9334ca814fded5c45dd7ebc6d882faeefd681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d808677a64fa82cae8f078454ac9334ca814fded5c45dd7ebc6d882faeefd681->enter($__internal_d808677a64fa82cae8f078454ac9334ca814fded5c45dd7ebc6d882faeefd681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5827b5507d212543746e002977e380a32e530202c10787b2f9e57b3266eec3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5827b5507d212543746e002977e380a32e530202c10787b2f9e57b3266eec3c1->enter($__internal_5827b5507d212543746e002977e380a32e530202c10787b2f9e57b3266eec3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d808677a64fa82cae8f078454ac9334ca814fded5c45dd7ebc6d882faeefd681->leave($__internal_d808677a64fa82cae8f078454ac9334ca814fded5c45dd7ebc6d882faeefd681_prof);

        
        $__internal_5827b5507d212543746e002977e380a32e530202c10787b2f9e57b3266eec3c1->leave($__internal_5827b5507d212543746e002977e380a32e530202c10787b2f9e57b3266eec3c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2ee2ddf10eefc91adee9bef509ddddd31183060715d2b911acb8f0bf884c941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ee2ddf10eefc91adee9bef509ddddd31183060715d2b911acb8f0bf884c941->enter($__internal_c2ee2ddf10eefc91adee9bef509ddddd31183060715d2b911acb8f0bf884c941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48fa4c0ddb3711107a5fa6ee1ce57b85360653b597c6c071c1dd252d27023c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fa4c0ddb3711107a5fa6ee1ce57b85360653b597c6c071c1dd252d27023c1c->enter($__internal_48fa4c0ddb3711107a5fa6ee1ce57b85360653b597c6c071c1dd252d27023c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48fa4c0ddb3711107a5fa6ee1ce57b85360653b597c6c071c1dd252d27023c1c->leave($__internal_48fa4c0ddb3711107a5fa6ee1ce57b85360653b597c6c071c1dd252d27023c1c_prof);

        
        $__internal_c2ee2ddf10eefc91adee9bef509ddddd31183060715d2b911acb8f0bf884c941->leave($__internal_c2ee2ddf10eefc91adee9bef509ddddd31183060715d2b911acb8f0bf884c941_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcf6da3c058d4c334989ba10f402df3b68732499fdaf01d1f5b69c4e64947040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf6da3c058d4c334989ba10f402df3b68732499fdaf01d1f5b69c4e64947040->enter($__internal_dcf6da3c058d4c334989ba10f402df3b68732499fdaf01d1f5b69c4e64947040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f81f4889d990145168d7df915a46e70bfe8d3464763f2327f67da6b47b2b30ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f4889d990145168d7df915a46e70bfe8d3464763f2327f67da6b47b2b30ef->enter($__internal_f81f4889d990145168d7df915a46e70bfe8d3464763f2327f67da6b47b2b30ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f81f4889d990145168d7df915a46e70bfe8d3464763f2327f67da6b47b2b30ef->leave($__internal_f81f4889d990145168d7df915a46e70bfe8d3464763f2327f67da6b47b2b30ef_prof);

        
        $__internal_dcf6da3c058d4c334989ba10f402df3b68732499fdaf01d1f5b69c4e64947040->leave($__internal_dcf6da3c058d4c334989ba10f402df3b68732499fdaf01d1f5b69c4e64947040_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a04978291e3e211feccb52c5a2fb6430abf1620c760cbeb328c198f43eaeaee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04978291e3e211feccb52c5a2fb6430abf1620c760cbeb328c198f43eaeaee5->enter($__internal_a04978291e3e211feccb52c5a2fb6430abf1620c760cbeb328c198f43eaeaee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe01e015e05279c8b5f55fd96fae5de98e6d1d6e2e245e6040d94d9e898892b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe01e015e05279c8b5f55fd96fae5de98e6d1d6e2e245e6040d94d9e898892b9->enter($__internal_fe01e015e05279c8b5f55fd96fae5de98e6d1d6e2e245e6040d94d9e898892b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fe01e015e05279c8b5f55fd96fae5de98e6d1d6e2e245e6040d94d9e898892b9->leave($__internal_fe01e015e05279c8b5f55fd96fae5de98e6d1d6e2e245e6040d94d9e898892b9_prof);

        
        $__internal_a04978291e3e211feccb52c5a2fb6430abf1620c760cbeb328c198f43eaeaee5->leave($__internal_a04978291e3e211feccb52c5a2fb6430abf1620c760cbeb328c198f43eaeaee5_prof);

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
