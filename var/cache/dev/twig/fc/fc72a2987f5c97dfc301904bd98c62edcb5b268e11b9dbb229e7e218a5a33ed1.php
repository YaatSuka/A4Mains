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
        $__internal_a924c3371446212072f6a543d1170a1b63bbceedb3d751c9c3df77d81b074486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a924c3371446212072f6a543d1170a1b63bbceedb3d751c9c3df77d81b074486->enter($__internal_a924c3371446212072f6a543d1170a1b63bbceedb3d751c9c3df77d81b074486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ca26067c613497f5069563d954176260708b736bd256ceb366b12ca48b8943e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca26067c613497f5069563d954176260708b736bd256ceb366b12ca48b8943e1->enter($__internal_ca26067c613497f5069563d954176260708b736bd256ceb366b12ca48b8943e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a924c3371446212072f6a543d1170a1b63bbceedb3d751c9c3df77d81b074486->leave($__internal_a924c3371446212072f6a543d1170a1b63bbceedb3d751c9c3df77d81b074486_prof);

        
        $__internal_ca26067c613497f5069563d954176260708b736bd256ceb366b12ca48b8943e1->leave($__internal_ca26067c613497f5069563d954176260708b736bd256ceb366b12ca48b8943e1_prof);

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
