<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b0609e31db08fe80f034160e813b797ccf47ffb878ffab7b7f5405424067d022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f71d3c697c29441cfdd709faf1f9810be7b8d8a43f3933afc10105479783863d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71d3c697c29441cfdd709faf1f9810be7b8d8a43f3933afc10105479783863d->enter($__internal_f71d3c697c29441cfdd709faf1f9810be7b8d8a43f3933afc10105479783863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_bf3218e5abc2d9962baa2714a5895528323d6784c2541f869cda596ca9f9714f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3218e5abc2d9962baa2714a5895528323d6784c2541f869cda596ca9f9714f->enter($__internal_bf3218e5abc2d9962baa2714a5895528323d6784c2541f869cda596ca9f9714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f71d3c697c29441cfdd709faf1f9810be7b8d8a43f3933afc10105479783863d->leave($__internal_f71d3c697c29441cfdd709faf1f9810be7b8d8a43f3933afc10105479783863d_prof);

        
        $__internal_bf3218e5abc2d9962baa2714a5895528323d6784c2541f869cda596ca9f9714f->leave($__internal_bf3218e5abc2d9962baa2714a5895528323d6784c2541f869cda596ca9f9714f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
