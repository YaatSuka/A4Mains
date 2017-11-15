<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_dea8d1b8f6eabfd55388b52bf0f66dbe3364d1a852b419187263f627fb2a5cee extends Twig_Template
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
        $__internal_9d3eee97abeca41dd5418aeb9868363e73f0f605abf57d299ddf7e95f967b09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3eee97abeca41dd5418aeb9868363e73f0f605abf57d299ddf7e95f967b09e->enter($__internal_9d3eee97abeca41dd5418aeb9868363e73f0f605abf57d299ddf7e95f967b09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_918679448ce55e7cd5ceeacd3aa5d5bca46d62334b6d266fe02360630529ac4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918679448ce55e7cd5ceeacd3aa5d5bca46d62334b6d266fe02360630529ac4b->enter($__internal_918679448ce55e7cd5ceeacd3aa5d5bca46d62334b6d266fe02360630529ac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_9d3eee97abeca41dd5418aeb9868363e73f0f605abf57d299ddf7e95f967b09e->leave($__internal_9d3eee97abeca41dd5418aeb9868363e73f0f605abf57d299ddf7e95f967b09e_prof);

        
        $__internal_918679448ce55e7cd5ceeacd3aa5d5bca46d62334b6d266fe02360630529ac4b->leave($__internal_918679448ce55e7cd5ceeacd3aa5d5bca46d62334b6d266fe02360630529ac4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
