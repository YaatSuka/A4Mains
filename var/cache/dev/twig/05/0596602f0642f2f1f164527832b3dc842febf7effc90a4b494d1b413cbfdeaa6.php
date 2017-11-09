<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
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
        $__internal_24094c3c2b3bc5774c3b4e353d8ceef013e34d34b8965055af8bceadfc578968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24094c3c2b3bc5774c3b4e353d8ceef013e34d34b8965055af8bceadfc578968->enter($__internal_24094c3c2b3bc5774c3b4e353d8ceef013e34d34b8965055af8bceadfc578968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f823a315cdbc81dc5e9027dbf45bcb4e9771885f0e0ffc3cb0abb884b9ee23de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f823a315cdbc81dc5e9027dbf45bcb4e9771885f0e0ffc3cb0abb884b9ee23de->enter($__internal_f823a315cdbc81dc5e9027dbf45bcb4e9771885f0e0ffc3cb0abb884b9ee23de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24094c3c2b3bc5774c3b4e353d8ceef013e34d34b8965055af8bceadfc578968->leave($__internal_24094c3c2b3bc5774c3b4e353d8ceef013e34d34b8965055af8bceadfc578968_prof);

        
        $__internal_f823a315cdbc81dc5e9027dbf45bcb4e9771885f0e0ffc3cb0abb884b9ee23de->leave($__internal_f823a315cdbc81dc5e9027dbf45bcb4e9771885f0e0ffc3cb0abb884b9ee23de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_108a6686be57baba7f7f4b29c16af3d31f630b657e15a80039235fa29ae76aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108a6686be57baba7f7f4b29c16af3d31f630b657e15a80039235fa29ae76aca->enter($__internal_108a6686be57baba7f7f4b29c16af3d31f630b657e15a80039235fa29ae76aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50ed0a4bfbe89d315ec99d934d9263601ff2ffe0a05d5e7202bd229fd068efa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ed0a4bfbe89d315ec99d934d9263601ff2ffe0a05d5e7202bd229fd068efa5->enter($__internal_50ed0a4bfbe89d315ec99d934d9263601ff2ffe0a05d5e7202bd229fd068efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_50ed0a4bfbe89d315ec99d934d9263601ff2ffe0a05d5e7202bd229fd068efa5->leave($__internal_50ed0a4bfbe89d315ec99d934d9263601ff2ffe0a05d5e7202bd229fd068efa5_prof);

        
        $__internal_108a6686be57baba7f7f4b29c16af3d31f630b657e15a80039235fa29ae76aca->leave($__internal_108a6686be57baba7f7f4b29c16af3d31f630b657e15a80039235fa29ae76aca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1c8bf73918bf049e2f97755664a8f4c019a8a0af70540ad578af30189b2e191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c8bf73918bf049e2f97755664a8f4c019a8a0af70540ad578af30189b2e191->enter($__internal_e1c8bf73918bf049e2f97755664a8f4c019a8a0af70540ad578af30189b2e191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9e125292d7ec0bf9ae9b01d8105322da012cb6810445b5755eb841c7d95913b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e125292d7ec0bf9ae9b01d8105322da012cb6810445b5755eb841c7d95913b->enter($__internal_f9e125292d7ec0bf9ae9b01d8105322da012cb6810445b5755eb841c7d95913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f9e125292d7ec0bf9ae9b01d8105322da012cb6810445b5755eb841c7d95913b->leave($__internal_f9e125292d7ec0bf9ae9b01d8105322da012cb6810445b5755eb841c7d95913b_prof);

        
        $__internal_e1c8bf73918bf049e2f97755664a8f4c019a8a0af70540ad578af30189b2e191->leave($__internal_e1c8bf73918bf049e2f97755664a8f4c019a8a0af70540ad578af30189b2e191_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e856c9e9b1252c17d5c0c82e5b3fbfc4c8261c0d842a68f832f6a2561226c97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e856c9e9b1252c17d5c0c82e5b3fbfc4c8261c0d842a68f832f6a2561226c97c->enter($__internal_e856c9e9b1252c17d5c0c82e5b3fbfc4c8261c0d842a68f832f6a2561226c97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17bfcaa85c582d47adc7bb31a73616f9dd032f1b81e328b5939c70c954ca6210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bfcaa85c582d47adc7bb31a73616f9dd032f1b81e328b5939c70c954ca6210->enter($__internal_17bfcaa85c582d47adc7bb31a73616f9dd032f1b81e328b5939c70c954ca6210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_17bfcaa85c582d47adc7bb31a73616f9dd032f1b81e328b5939c70c954ca6210->leave($__internal_17bfcaa85c582d47adc7bb31a73616f9dd032f1b81e328b5939c70c954ca6210_prof);

        
        $__internal_e856c9e9b1252c17d5c0c82e5b3fbfc4c8261c0d842a68f832f6a2561226c97c->leave($__internal_e856c9e9b1252c17d5c0c82e5b3fbfc4c8261c0d842a68f832f6a2561226c97c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
