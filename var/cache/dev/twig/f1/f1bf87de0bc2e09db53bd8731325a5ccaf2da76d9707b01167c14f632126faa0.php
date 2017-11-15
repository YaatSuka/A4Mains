<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cb077148d915415722f9efe1318660bb618b43e55b3c9cff680cfb06eaece967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fd915ad671cb038dae4951d89699d0d157d332e95ac0e518138cea0f74679c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd915ad671cb038dae4951d89699d0d157d332e95ac0e518138cea0f74679c0->enter($__internal_2fd915ad671cb038dae4951d89699d0d157d332e95ac0e518138cea0f74679c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_049eff3c2545a902c0eff1535b49603ca0269d7be831247bc5257eeb8eb583f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049eff3c2545a902c0eff1535b49603ca0269d7be831247bc5257eeb8eb583f1->enter($__internal_049eff3c2545a902c0eff1535b49603ca0269d7be831247bc5257eeb8eb583f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd915ad671cb038dae4951d89699d0d157d332e95ac0e518138cea0f74679c0->leave($__internal_2fd915ad671cb038dae4951d89699d0d157d332e95ac0e518138cea0f74679c0_prof);

        
        $__internal_049eff3c2545a902c0eff1535b49603ca0269d7be831247bc5257eeb8eb583f1->leave($__internal_049eff3c2545a902c0eff1535b49603ca0269d7be831247bc5257eeb8eb583f1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ab3271126c78a23c8b90f50e5d36e92d41d7d3b5885930fa6021f1bb5dbfd2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3271126c78a23c8b90f50e5d36e92d41d7d3b5885930fa6021f1bb5dbfd2e1->enter($__internal_ab3271126c78a23c8b90f50e5d36e92d41d7d3b5885930fa6021f1bb5dbfd2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_886503135917b260fa0a1f2dc7de7462589de3c64bc4f6441d0159b8b2c493cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886503135917b260fa0a1f2dc7de7462589de3c64bc4f6441d0159b8b2c493cd->enter($__internal_886503135917b260fa0a1f2dc7de7462589de3c64bc4f6441d0159b8b2c493cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_886503135917b260fa0a1f2dc7de7462589de3c64bc4f6441d0159b8b2c493cd->leave($__internal_886503135917b260fa0a1f2dc7de7462589de3c64bc4f6441d0159b8b2c493cd_prof);

        
        $__internal_ab3271126c78a23c8b90f50e5d36e92d41d7d3b5885930fa6021f1bb5dbfd2e1->leave($__internal_ab3271126c78a23c8b90f50e5d36e92d41d7d3b5885930fa6021f1bb5dbfd2e1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b03e4c329dce7fbf150442ee025a750bb5eaf1c38c06b216910fdd2739c383ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03e4c329dce7fbf150442ee025a750bb5eaf1c38c06b216910fdd2739c383ed->enter($__internal_b03e4c329dce7fbf150442ee025a750bb5eaf1c38c06b216910fdd2739c383ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a5491d2ceb230101feab051656aa7c634ca358ac0524c4fcaa32434dc619be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5491d2ceb230101feab051656aa7c634ca358ac0524c4fcaa32434dc619be0->enter($__internal_9a5491d2ceb230101feab051656aa7c634ca358ac0524c4fcaa32434dc619be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9a5491d2ceb230101feab051656aa7c634ca358ac0524c4fcaa32434dc619be0->leave($__internal_9a5491d2ceb230101feab051656aa7c634ca358ac0524c4fcaa32434dc619be0_prof);

        
        $__internal_b03e4c329dce7fbf150442ee025a750bb5eaf1c38c06b216910fdd2739c383ed->leave($__internal_b03e4c329dce7fbf150442ee025a750bb5eaf1c38c06b216910fdd2739c383ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
