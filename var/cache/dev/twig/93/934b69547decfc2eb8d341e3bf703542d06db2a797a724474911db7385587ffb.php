<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d3032f575ebcd22550ab07be0e342ec13b1930f8bfd8c7fb294d0e48cd3b32fc extends Twig_Template
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
        $__internal_78dba31e2609dbc06428ee2acc792c236937aa3edae7172e4113a4ba2ad153b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78dba31e2609dbc06428ee2acc792c236937aa3edae7172e4113a4ba2ad153b7->enter($__internal_78dba31e2609dbc06428ee2acc792c236937aa3edae7172e4113a4ba2ad153b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_59ac65ad832ba6d0827c47bd2c5e3960cdd16107e8d907ae56643f8da2b4ed03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ac65ad832ba6d0827c47bd2c5e3960cdd16107e8d907ae56643f8da2b4ed03->enter($__internal_59ac65ad832ba6d0827c47bd2c5e3960cdd16107e8d907ae56643f8da2b4ed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_78dba31e2609dbc06428ee2acc792c236937aa3edae7172e4113a4ba2ad153b7->leave($__internal_78dba31e2609dbc06428ee2acc792c236937aa3edae7172e4113a4ba2ad153b7_prof);

        
        $__internal_59ac65ad832ba6d0827c47bd2c5e3960cdd16107e8d907ae56643f8da2b4ed03->leave($__internal_59ac65ad832ba6d0827c47bd2c5e3960cdd16107e8d907ae56643f8da2b4ed03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
