<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_60e43728d3226248448c711f77fe1e4da91d8dcd00429d9deefdc49e40261253 extends Twig_Template
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
        $__internal_3ed24cb30100acd06792f0030f39a5d42a68c898b9a5543738736a0c78a490b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed24cb30100acd06792f0030f39a5d42a68c898b9a5543738736a0c78a490b6->enter($__internal_3ed24cb30100acd06792f0030f39a5d42a68c898b9a5543738736a0c78a490b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_29a6c5eb2118b769a78260854244dfaec17f16dab110990a6e9fc7a4080318e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a6c5eb2118b769a78260854244dfaec17f16dab110990a6e9fc7a4080318e9->enter($__internal_29a6c5eb2118b769a78260854244dfaec17f16dab110990a6e9fc7a4080318e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3ed24cb30100acd06792f0030f39a5d42a68c898b9a5543738736a0c78a490b6->leave($__internal_3ed24cb30100acd06792f0030f39a5d42a68c898b9a5543738736a0c78a490b6_prof);

        
        $__internal_29a6c5eb2118b769a78260854244dfaec17f16dab110990a6e9fc7a4080318e9->leave($__internal_29a6c5eb2118b769a78260854244dfaec17f16dab110990a6e9fc7a4080318e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
