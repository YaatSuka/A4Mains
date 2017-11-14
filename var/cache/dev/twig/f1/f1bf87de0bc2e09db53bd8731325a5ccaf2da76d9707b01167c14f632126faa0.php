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
        $__internal_ad1957043f0a3b8bcef8ba256304196aff137654f1949f51b5fdbd9e45766739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1957043f0a3b8bcef8ba256304196aff137654f1949f51b5fdbd9e45766739->enter($__internal_ad1957043f0a3b8bcef8ba256304196aff137654f1949f51b5fdbd9e45766739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d7a5876aa149e66213bc4b781f7dce2c0b97d39ac8cbad42c0d82a52de719936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a5876aa149e66213bc4b781f7dce2c0b97d39ac8cbad42c0d82a52de719936->enter($__internal_d7a5876aa149e66213bc4b781f7dce2c0b97d39ac8cbad42c0d82a52de719936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1957043f0a3b8bcef8ba256304196aff137654f1949f51b5fdbd9e45766739->leave($__internal_ad1957043f0a3b8bcef8ba256304196aff137654f1949f51b5fdbd9e45766739_prof);

        
        $__internal_d7a5876aa149e66213bc4b781f7dce2c0b97d39ac8cbad42c0d82a52de719936->leave($__internal_d7a5876aa149e66213bc4b781f7dce2c0b97d39ac8cbad42c0d82a52de719936_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ccf616508c8aa9bf742553df9401e043580b43bcc1164fcc4a00dea325e1e926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf616508c8aa9bf742553df9401e043580b43bcc1164fcc4a00dea325e1e926->enter($__internal_ccf616508c8aa9bf742553df9401e043580b43bcc1164fcc4a00dea325e1e926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9291a764469215bd55711b723527f797bfd6e226c4192e3db2af37319ff345a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9291a764469215bd55711b723527f797bfd6e226c4192e3db2af37319ff345a5->enter($__internal_9291a764469215bd55711b723527f797bfd6e226c4192e3db2af37319ff345a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9291a764469215bd55711b723527f797bfd6e226c4192e3db2af37319ff345a5->leave($__internal_9291a764469215bd55711b723527f797bfd6e226c4192e3db2af37319ff345a5_prof);

        
        $__internal_ccf616508c8aa9bf742553df9401e043580b43bcc1164fcc4a00dea325e1e926->leave($__internal_ccf616508c8aa9bf742553df9401e043580b43bcc1164fcc4a00dea325e1e926_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2c34a717953b4d6f6f172632ef644ea1fb1af235a7a7884978e6123d238e8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c34a717953b4d6f6f172632ef644ea1fb1af235a7a7884978e6123d238e8d5->enter($__internal_f2c34a717953b4d6f6f172632ef644ea1fb1af235a7a7884978e6123d238e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74ddee1f85f242f3567b8836e5c301b1135198ba111a8610494e004fa7647c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ddee1f85f242f3567b8836e5c301b1135198ba111a8610494e004fa7647c62->enter($__internal_74ddee1f85f242f3567b8836e5c301b1135198ba111a8610494e004fa7647c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_74ddee1f85f242f3567b8836e5c301b1135198ba111a8610494e004fa7647c62->leave($__internal_74ddee1f85f242f3567b8836e5c301b1135198ba111a8610494e004fa7647c62_prof);

        
        $__internal_f2c34a717953b4d6f6f172632ef644ea1fb1af235a7a7884978e6123d238e8d5->leave($__internal_f2c34a717953b4d6f6f172632ef644ea1fb1af235a7a7884978e6123d238e8d5_prof);

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
