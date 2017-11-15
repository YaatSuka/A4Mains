<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_71ce4c50c33149957d9998f204c898015a6f4c8550e722d4b4b4d63b066c0856 extends Twig_Template
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
        $__internal_2eedcc11fddb1bac85047ed4c1dab4bb28dc6c096e919c72d6613320e44181f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eedcc11fddb1bac85047ed4c1dab4bb28dc6c096e919c72d6613320e44181f4->enter($__internal_2eedcc11fddb1bac85047ed4c1dab4bb28dc6c096e919c72d6613320e44181f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_40fd4fa84b3d2e44c57a815d62d4a17c1999105b3f1c4d5c911e85a5f2cb7d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fd4fa84b3d2e44c57a815d62d4a17c1999105b3f1c4d5c911e85a5f2cb7d1a->enter($__internal_40fd4fa84b3d2e44c57a815d62d4a17c1999105b3f1c4d5c911e85a5f2cb7d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2eedcc11fddb1bac85047ed4c1dab4bb28dc6c096e919c72d6613320e44181f4->leave($__internal_2eedcc11fddb1bac85047ed4c1dab4bb28dc6c096e919c72d6613320e44181f4_prof);

        
        $__internal_40fd4fa84b3d2e44c57a815d62d4a17c1999105b3f1c4d5c911e85a5f2cb7d1a->leave($__internal_40fd4fa84b3d2e44c57a815d62d4a17c1999105b3f1c4d5c911e85a5f2cb7d1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
