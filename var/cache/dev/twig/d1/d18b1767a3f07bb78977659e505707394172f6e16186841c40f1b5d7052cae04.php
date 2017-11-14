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
        $__internal_3f5e014b614b29281e804e32967bfecdc63e947095e1a4073f7f0191df91b83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5e014b614b29281e804e32967bfecdc63e947095e1a4073f7f0191df91b83a->enter($__internal_3f5e014b614b29281e804e32967bfecdc63e947095e1a4073f7f0191df91b83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_bb61e3149d97f587dfe0eac61a4f887356bde70ce68365f67baff347d5be69bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb61e3149d97f587dfe0eac61a4f887356bde70ce68365f67baff347d5be69bb->enter($__internal_bb61e3149d97f587dfe0eac61a4f887356bde70ce68365f67baff347d5be69bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5e014b614b29281e804e32967bfecdc63e947095e1a4073f7f0191df91b83a->leave($__internal_3f5e014b614b29281e804e32967bfecdc63e947095e1a4073f7f0191df91b83a_prof);

        
        $__internal_bb61e3149d97f587dfe0eac61a4f887356bde70ce68365f67baff347d5be69bb->leave($__internal_bb61e3149d97f587dfe0eac61a4f887356bde70ce68365f67baff347d5be69bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e7ff1223754ed85d3542c0b2472ef146283474229c84c8afb784f1df63b57ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7ff1223754ed85d3542c0b2472ef146283474229c84c8afb784f1df63b57ae->enter($__internal_3e7ff1223754ed85d3542c0b2472ef146283474229c84c8afb784f1df63b57ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24cf903e8d8781ec5364cdbe2ac8da19dc7831c20b5eb104c90c8e965e1122f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cf903e8d8781ec5364cdbe2ac8da19dc7831c20b5eb104c90c8e965e1122f9->enter($__internal_24cf903e8d8781ec5364cdbe2ac8da19dc7831c20b5eb104c90c8e965e1122f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_24cf903e8d8781ec5364cdbe2ac8da19dc7831c20b5eb104c90c8e965e1122f9->leave($__internal_24cf903e8d8781ec5364cdbe2ac8da19dc7831c20b5eb104c90c8e965e1122f9_prof);

        
        $__internal_3e7ff1223754ed85d3542c0b2472ef146283474229c84c8afb784f1df63b57ae->leave($__internal_3e7ff1223754ed85d3542c0b2472ef146283474229c84c8afb784f1df63b57ae_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1873fd86b4692f2f38da243967c52776db3da1b56a63f1495571baa8343ff12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1873fd86b4692f2f38da243967c52776db3da1b56a63f1495571baa8343ff12->enter($__internal_e1873fd86b4692f2f38da243967c52776db3da1b56a63f1495571baa8343ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df69ebb93dbf2b2769cffd1ae388a82a2ba1f5acf0579573247ad2d25f61c3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df69ebb93dbf2b2769cffd1ae388a82a2ba1f5acf0579573247ad2d25f61c3a1->enter($__internal_df69ebb93dbf2b2769cffd1ae388a82a2ba1f5acf0579573247ad2d25f61c3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_df69ebb93dbf2b2769cffd1ae388a82a2ba1f5acf0579573247ad2d25f61c3a1->leave($__internal_df69ebb93dbf2b2769cffd1ae388a82a2ba1f5acf0579573247ad2d25f61c3a1_prof);

        
        $__internal_e1873fd86b4692f2f38da243967c52776db3da1b56a63f1495571baa8343ff12->leave($__internal_e1873fd86b4692f2f38da243967c52776db3da1b56a63f1495571baa8343ff12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cea9e0624db31e5775b921073bcdd2025bdc9348de930762571f44d12787fef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea9e0624db31e5775b921073bcdd2025bdc9348de930762571f44d12787fef4->enter($__internal_cea9e0624db31e5775b921073bcdd2025bdc9348de930762571f44d12787fef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bc6599f70eb56f22cdcab08f2b5c4c19a580ae8cdd0aff85b21816fbc8be8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc6599f70eb56f22cdcab08f2b5c4c19a580ae8cdd0aff85b21816fbc8be8a9->enter($__internal_0bc6599f70eb56f22cdcab08f2b5c4c19a580ae8cdd0aff85b21816fbc8be8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0bc6599f70eb56f22cdcab08f2b5c4c19a580ae8cdd0aff85b21816fbc8be8a9->leave($__internal_0bc6599f70eb56f22cdcab08f2b5c4c19a580ae8cdd0aff85b21816fbc8be8a9_prof);

        
        $__internal_cea9e0624db31e5775b921073bcdd2025bdc9348de930762571f44d12787fef4->leave($__internal_cea9e0624db31e5775b921073bcdd2025bdc9348de930762571f44d12787fef4_prof);

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
