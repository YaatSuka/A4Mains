<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5f0d48f36974bcd764090968b171e81f0d0247dd40bc35bec1b3d54b893b47e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_f19f44dd1c9db0aa2ea83357933a363df65194eb0187cfdde21ab17d3b107907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19f44dd1c9db0aa2ea83357933a363df65194eb0187cfdde21ab17d3b107907->enter($__internal_f19f44dd1c9db0aa2ea83357933a363df65194eb0187cfdde21ab17d3b107907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3b57c4f16b3f985d6fbcc2f699f43589056a131440079bb3c018c90ba94a567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b57c4f16b3f985d6fbcc2f699f43589056a131440079bb3c018c90ba94a567c->enter($__internal_3b57c4f16b3f985d6fbcc2f699f43589056a131440079bb3c018c90ba94a567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f19f44dd1c9db0aa2ea83357933a363df65194eb0187cfdde21ab17d3b107907->leave($__internal_f19f44dd1c9db0aa2ea83357933a363df65194eb0187cfdde21ab17d3b107907_prof);

        
        $__internal_3b57c4f16b3f985d6fbcc2f699f43589056a131440079bb3c018c90ba94a567c->leave($__internal_3b57c4f16b3f985d6fbcc2f699f43589056a131440079bb3c018c90ba94a567c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b1ed7f3daa52185846ea9d1dc8a613b4f5ed734b905298529a4530c54f5d290d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ed7f3daa52185846ea9d1dc8a613b4f5ed734b905298529a4530c54f5d290d->enter($__internal_b1ed7f3daa52185846ea9d1dc8a613b4f5ed734b905298529a4530c54f5d290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4859ec30a60de2f0a79a6a32d7627d47c397dd19eaaa2ccce53c9b552b7adc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4859ec30a60de2f0a79a6a32d7627d47c397dd19eaaa2ccce53c9b552b7adc91->enter($__internal_4859ec30a60de2f0a79a6a32d7627d47c397dd19eaaa2ccce53c9b552b7adc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4859ec30a60de2f0a79a6a32d7627d47c397dd19eaaa2ccce53c9b552b7adc91->leave($__internal_4859ec30a60de2f0a79a6a32d7627d47c397dd19eaaa2ccce53c9b552b7adc91_prof);

        
        $__internal_b1ed7f3daa52185846ea9d1dc8a613b4f5ed734b905298529a4530c54f5d290d->leave($__internal_b1ed7f3daa52185846ea9d1dc8a613b4f5ed734b905298529a4530c54f5d290d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83937583bec49931829be12cd049d1ba00b85bb7e7fd7d71b270914304eda88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83937583bec49931829be12cd049d1ba00b85bb7e7fd7d71b270914304eda88f->enter($__internal_83937583bec49931829be12cd049d1ba00b85bb7e7fd7d71b270914304eda88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e4a08a61a4c9fdd7c17c12f9f56833e3b823817b700e5c862c6ef276eb34dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4a08a61a4c9fdd7c17c12f9f56833e3b823817b700e5c862c6ef276eb34dd8->enter($__internal_1e4a08a61a4c9fdd7c17c12f9f56833e3b823817b700e5c862c6ef276eb34dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1e4a08a61a4c9fdd7c17c12f9f56833e3b823817b700e5c862c6ef276eb34dd8->leave($__internal_1e4a08a61a4c9fdd7c17c12f9f56833e3b823817b700e5c862c6ef276eb34dd8_prof);

        
        $__internal_83937583bec49931829be12cd049d1ba00b85bb7e7fd7d71b270914304eda88f->leave($__internal_83937583bec49931829be12cd049d1ba00b85bb7e7fd7d71b270914304eda88f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
