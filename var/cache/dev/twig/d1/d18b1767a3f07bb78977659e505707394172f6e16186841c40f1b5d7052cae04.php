<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_46c879256254e3521f6829a1534f0a7c311f106da5e3858321887e71ab4d44fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_8adba1a9fb17de2fd34548521fc501e0a6bb81c22e31dd91fce980a37ec4ade7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adba1a9fb17de2fd34548521fc501e0a6bb81c22e31dd91fce980a37ec4ade7->enter($__internal_8adba1a9fb17de2fd34548521fc501e0a6bb81c22e31dd91fce980a37ec4ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1976df415319288bd866bf98a841602ee1cfab6c2358bd0e24ae111595849c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1976df415319288bd866bf98a841602ee1cfab6c2358bd0e24ae111595849c12->enter($__internal_1976df415319288bd866bf98a841602ee1cfab6c2358bd0e24ae111595849c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8adba1a9fb17de2fd34548521fc501e0a6bb81c22e31dd91fce980a37ec4ade7->leave($__internal_8adba1a9fb17de2fd34548521fc501e0a6bb81c22e31dd91fce980a37ec4ade7_prof);

        
        $__internal_1976df415319288bd866bf98a841602ee1cfab6c2358bd0e24ae111595849c12->leave($__internal_1976df415319288bd866bf98a841602ee1cfab6c2358bd0e24ae111595849c12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5871baff3110e04300151428da24660b606d22de4fa0043a7735e36171ae8182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5871baff3110e04300151428da24660b606d22de4fa0043a7735e36171ae8182->enter($__internal_5871baff3110e04300151428da24660b606d22de4fa0043a7735e36171ae8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f3499ed811cbc7d67d01b2e28857e9c4dd2b2f07c05158c3607dbf949c8a4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3499ed811cbc7d67d01b2e28857e9c4dd2b2f07c05158c3607dbf949c8a4d3->enter($__internal_1f3499ed811cbc7d67d01b2e28857e9c4dd2b2f07c05158c3607dbf949c8a4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1f3499ed811cbc7d67d01b2e28857e9c4dd2b2f07c05158c3607dbf949c8a4d3->leave($__internal_1f3499ed811cbc7d67d01b2e28857e9c4dd2b2f07c05158c3607dbf949c8a4d3_prof);

        
        $__internal_5871baff3110e04300151428da24660b606d22de4fa0043a7735e36171ae8182->leave($__internal_5871baff3110e04300151428da24660b606d22de4fa0043a7735e36171ae8182_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ba779492e104994492c32ab722021b3f6abd7dd8ce5abae749f0b535a02b010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba779492e104994492c32ab722021b3f6abd7dd8ce5abae749f0b535a02b010->enter($__internal_6ba779492e104994492c32ab722021b3f6abd7dd8ce5abae749f0b535a02b010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a8f3e79990a12b252dd9468f947b0cc78e7dfe1a40796920f47256b1d8524f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f3e79990a12b252dd9468f947b0cc78e7dfe1a40796920f47256b1d8524f0d->enter($__internal_a8f3e79990a12b252dd9468f947b0cc78e7dfe1a40796920f47256b1d8524f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a8f3e79990a12b252dd9468f947b0cc78e7dfe1a40796920f47256b1d8524f0d->leave($__internal_a8f3e79990a12b252dd9468f947b0cc78e7dfe1a40796920f47256b1d8524f0d_prof);

        
        $__internal_6ba779492e104994492c32ab722021b3f6abd7dd8ce5abae749f0b535a02b010->leave($__internal_6ba779492e104994492c32ab722021b3f6abd7dd8ce5abae749f0b535a02b010_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1b51a7202a553b83b407f99d1bbcb3453182c6f31c7622ebbd4531f8c82fbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b51a7202a553b83b407f99d1bbcb3453182c6f31c7622ebbd4531f8c82fbd5->enter($__internal_e1b51a7202a553b83b407f99d1bbcb3453182c6f31c7622ebbd4531f8c82fbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c642a4e0992fe657473c0697e16ae28a6cb476966ea55ab36cbeb2f5459606ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c642a4e0992fe657473c0697e16ae28a6cb476966ea55ab36cbeb2f5459606ab->enter($__internal_c642a4e0992fe657473c0697e16ae28a6cb476966ea55ab36cbeb2f5459606ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c642a4e0992fe657473c0697e16ae28a6cb476966ea55ab36cbeb2f5459606ab->leave($__internal_c642a4e0992fe657473c0697e16ae28a6cb476966ea55ab36cbeb2f5459606ab_prof);

        
        $__internal_e1b51a7202a553b83b407f99d1bbcb3453182c6f31c7622ebbd4531f8c82fbd5->leave($__internal_e1b51a7202a553b83b407f99d1bbcb3453182c6f31c7622ebbd4531f8c82fbd5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
