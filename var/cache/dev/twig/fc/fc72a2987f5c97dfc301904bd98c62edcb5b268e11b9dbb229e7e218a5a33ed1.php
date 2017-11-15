<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_12e204dd05ad209e718e11fb8487d76f327ddc1a74f318d3782a1f4d77c2597a extends Twig_Template
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
        $__internal_bcc87ad772e155a8f2c1a487aa7122e18f68bdc0a20e4d63bc8f7de5fb5c4db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc87ad772e155a8f2c1a487aa7122e18f68bdc0a20e4d63bc8f7de5fb5c4db1->enter($__internal_bcc87ad772e155a8f2c1a487aa7122e18f68bdc0a20e4d63bc8f7de5fb5c4db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4e49b84603a97624c9cf9cd2a3146fa41c7da70857caac90a874a5b148d79e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e49b84603a97624c9cf9cd2a3146fa41c7da70857caac90a874a5b148d79e95->enter($__internal_4e49b84603a97624c9cf9cd2a3146fa41c7da70857caac90a874a5b148d79e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_bcc87ad772e155a8f2c1a487aa7122e18f68bdc0a20e4d63bc8f7de5fb5c4db1->leave($__internal_bcc87ad772e155a8f2c1a487aa7122e18f68bdc0a20e4d63bc8f7de5fb5c4db1_prof);

        
        $__internal_4e49b84603a97624c9cf9cd2a3146fa41c7da70857caac90a874a5b148d79e95->leave($__internal_4e49b84603a97624c9cf9cd2a3146fa41c7da70857caac90a874a5b148d79e95_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
