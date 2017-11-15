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
        $__internal_5e45032583a42aa0e7178baa16201059d5a78f8428a850a93047c6f405c6994a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e45032583a42aa0e7178baa16201059d5a78f8428a850a93047c6f405c6994a->enter($__internal_5e45032583a42aa0e7178baa16201059d5a78f8428a850a93047c6f405c6994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1d1d6048b50596831b130fc1f5abafe049970fe496c42d0b26f191aef2887dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d6048b50596831b130fc1f5abafe049970fe496c42d0b26f191aef2887dd7->enter($__internal_1d1d6048b50596831b130fc1f5abafe049970fe496c42d0b26f191aef2887dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e45032583a42aa0e7178baa16201059d5a78f8428a850a93047c6f405c6994a->leave($__internal_5e45032583a42aa0e7178baa16201059d5a78f8428a850a93047c6f405c6994a_prof);

        
        $__internal_1d1d6048b50596831b130fc1f5abafe049970fe496c42d0b26f191aef2887dd7->leave($__internal_1d1d6048b50596831b130fc1f5abafe049970fe496c42d0b26f191aef2887dd7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d11a20c902efd4d0d68e451dec31d00622a71ce52648189a02cc2624160adb4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11a20c902efd4d0d68e451dec31d00622a71ce52648189a02cc2624160adb4c->enter($__internal_d11a20c902efd4d0d68e451dec31d00622a71ce52648189a02cc2624160adb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e298084dd582df67b6511ba3f3c6a2e5cef5d016abaa7526bf02e2f6e468b641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e298084dd582df67b6511ba3f3c6a2e5cef5d016abaa7526bf02e2f6e468b641->enter($__internal_e298084dd582df67b6511ba3f3c6a2e5cef5d016abaa7526bf02e2f6e468b641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e298084dd582df67b6511ba3f3c6a2e5cef5d016abaa7526bf02e2f6e468b641->leave($__internal_e298084dd582df67b6511ba3f3c6a2e5cef5d016abaa7526bf02e2f6e468b641_prof);

        
        $__internal_d11a20c902efd4d0d68e451dec31d00622a71ce52648189a02cc2624160adb4c->leave($__internal_d11a20c902efd4d0d68e451dec31d00622a71ce52648189a02cc2624160adb4c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5229087af280c64dcb9ed8a6f43f75d6f9b80ffb388d6fd6d78b5e28262abc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5229087af280c64dcb9ed8a6f43f75d6f9b80ffb388d6fd6d78b5e28262abc43->enter($__internal_5229087af280c64dcb9ed8a6f43f75d6f9b80ffb388d6fd6d78b5e28262abc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49709df43fe7a71dbf13e75752581a897f53121dda45f981e4c5003cd9ebc1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49709df43fe7a71dbf13e75752581a897f53121dda45f981e4c5003cd9ebc1af->enter($__internal_49709df43fe7a71dbf13e75752581a897f53121dda45f981e4c5003cd9ebc1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_49709df43fe7a71dbf13e75752581a897f53121dda45f981e4c5003cd9ebc1af->leave($__internal_49709df43fe7a71dbf13e75752581a897f53121dda45f981e4c5003cd9ebc1af_prof);

        
        $__internal_5229087af280c64dcb9ed8a6f43f75d6f9b80ffb388d6fd6d78b5e28262abc43->leave($__internal_5229087af280c64dcb9ed8a6f43f75d6f9b80ffb388d6fd6d78b5e28262abc43_prof);

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
