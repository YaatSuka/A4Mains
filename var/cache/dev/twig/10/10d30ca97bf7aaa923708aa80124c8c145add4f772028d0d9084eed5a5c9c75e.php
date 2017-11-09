<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
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
        $__internal_ddccd3b1f4e9736f2a2ad5d4339a61b8f49572335931e4b34571b8deb4e41022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddccd3b1f4e9736f2a2ad5d4339a61b8f49572335931e4b34571b8deb4e41022->enter($__internal_ddccd3b1f4e9736f2a2ad5d4339a61b8f49572335931e4b34571b8deb4e41022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e9fd31148916a1032c4b38adef16fcb0cdc1b5c255bf1339c7aaaaba1c67ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9fd31148916a1032c4b38adef16fcb0cdc1b5c255bf1339c7aaaaba1c67ae6->enter($__internal_5e9fd31148916a1032c4b38adef16fcb0cdc1b5c255bf1339c7aaaaba1c67ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddccd3b1f4e9736f2a2ad5d4339a61b8f49572335931e4b34571b8deb4e41022->leave($__internal_ddccd3b1f4e9736f2a2ad5d4339a61b8f49572335931e4b34571b8deb4e41022_prof);

        
        $__internal_5e9fd31148916a1032c4b38adef16fcb0cdc1b5c255bf1339c7aaaaba1c67ae6->leave($__internal_5e9fd31148916a1032c4b38adef16fcb0cdc1b5c255bf1339c7aaaaba1c67ae6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fdd81db69b4ef87491de35992c3dce7d672b14ab3eaf05c561197cc63c682b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd81db69b4ef87491de35992c3dce7d672b14ab3eaf05c561197cc63c682b81->enter($__internal_fdd81db69b4ef87491de35992c3dce7d672b14ab3eaf05c561197cc63c682b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18ce480ef254e1fb63d5c752648548f84ba35023d7ab540121f470e39968d394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ce480ef254e1fb63d5c752648548f84ba35023d7ab540121f470e39968d394->enter($__internal_18ce480ef254e1fb63d5c752648548f84ba35023d7ab540121f470e39968d394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18ce480ef254e1fb63d5c752648548f84ba35023d7ab540121f470e39968d394->leave($__internal_18ce480ef254e1fb63d5c752648548f84ba35023d7ab540121f470e39968d394_prof);

        
        $__internal_fdd81db69b4ef87491de35992c3dce7d672b14ab3eaf05c561197cc63c682b81->leave($__internal_fdd81db69b4ef87491de35992c3dce7d672b14ab3eaf05c561197cc63c682b81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cabe38071e33750bf6df3a0b6b1d9c905fbb92c3ed8d89913f5cde6c6c0b5e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabe38071e33750bf6df3a0b6b1d9c905fbb92c3ed8d89913f5cde6c6c0b5e32->enter($__internal_cabe38071e33750bf6df3a0b6b1d9c905fbb92c3ed8d89913f5cde6c6c0b5e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_167933b0711c14d586f154986b3905913dac24f559a8cf875f483c8cdd449735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167933b0711c14d586f154986b3905913dac24f559a8cf875f483c8cdd449735->enter($__internal_167933b0711c14d586f154986b3905913dac24f559a8cf875f483c8cdd449735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_167933b0711c14d586f154986b3905913dac24f559a8cf875f483c8cdd449735->leave($__internal_167933b0711c14d586f154986b3905913dac24f559a8cf875f483c8cdd449735_prof);

        
        $__internal_cabe38071e33750bf6df3a0b6b1d9c905fbb92c3ed8d89913f5cde6c6c0b5e32->leave($__internal_cabe38071e33750bf6df3a0b6b1d9c905fbb92c3ed8d89913f5cde6c6c0b5e32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4fb8bb2f1cac7af576c956ba176de194a74c3f42609aede64576d57d9b4dd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fb8bb2f1cac7af576c956ba176de194a74c3f42609aede64576d57d9b4dd7d->enter($__internal_f4fb8bb2f1cac7af576c956ba176de194a74c3f42609aede64576d57d9b4dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a758f1a8837f893d69251866e106d2273bb809a87787b033eb1e58dc18ad4b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a758f1a8837f893d69251866e106d2273bb809a87787b033eb1e58dc18ad4b9f->enter($__internal_a758f1a8837f893d69251866e106d2273bb809a87787b033eb1e58dc18ad4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a758f1a8837f893d69251866e106d2273bb809a87787b033eb1e58dc18ad4b9f->leave($__internal_a758f1a8837f893d69251866e106d2273bb809a87787b033eb1e58dc18ad4b9f_prof);

        
        $__internal_f4fb8bb2f1cac7af576c956ba176de194a74c3f42609aede64576d57d9b4dd7d->leave($__internal_f4fb8bb2f1cac7af576c956ba176de194a74c3f42609aede64576d57d9b4dd7d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
