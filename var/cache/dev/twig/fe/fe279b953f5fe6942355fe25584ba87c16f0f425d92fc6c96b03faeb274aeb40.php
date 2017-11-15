<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0ce42af96901a379edec2fb6909b7bf3c9ed10ef706ebd7415ced3ac7b641d68 extends Twig_Template
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
        $__internal_d33781ad4c246a950a27eaadc0992b1a44c76ab01119c4228a4c5d5aa67a46e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33781ad4c246a950a27eaadc0992b1a44c76ab01119c4228a4c5d5aa67a46e3->enter($__internal_d33781ad4c246a950a27eaadc0992b1a44c76ab01119c4228a4c5d5aa67a46e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c90f98c2c7181ad02f31dd6dfff0e3de7288d7b5cea9c9595749307dc1ed2d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90f98c2c7181ad02f31dd6dfff0e3de7288d7b5cea9c9595749307dc1ed2d4f->enter($__internal_c90f98c2c7181ad02f31dd6dfff0e3de7288d7b5cea9c9595749307dc1ed2d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d33781ad4c246a950a27eaadc0992b1a44c76ab01119c4228a4c5d5aa67a46e3->leave($__internal_d33781ad4c246a950a27eaadc0992b1a44c76ab01119c4228a4c5d5aa67a46e3_prof);

        
        $__internal_c90f98c2c7181ad02f31dd6dfff0e3de7288d7b5cea9c9595749307dc1ed2d4f->leave($__internal_c90f98c2c7181ad02f31dd6dfff0e3de7288d7b5cea9c9595749307dc1ed2d4f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
