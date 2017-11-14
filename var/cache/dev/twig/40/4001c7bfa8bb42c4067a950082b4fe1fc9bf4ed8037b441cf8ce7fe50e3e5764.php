<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_565d210568227a1a65e7134b299fb1de8ac8cc6b48c37d20bfa4c4f6d83df10c extends Twig_Template
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
        $__internal_ca84be61f92a3eb3cb02f0ba550258608a736cc3a163e650b9fb5481de5261de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca84be61f92a3eb3cb02f0ba550258608a736cc3a163e650b9fb5481de5261de->enter($__internal_ca84be61f92a3eb3cb02f0ba550258608a736cc3a163e650b9fb5481de5261de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a29ab829d9acced5ab6051cf533eba426677d93339b507ec8f024d5fb933eeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29ab829d9acced5ab6051cf533eba426677d93339b507ec8f024d5fb933eeda->enter($__internal_a29ab829d9acced5ab6051cf533eba426677d93339b507ec8f024d5fb933eeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ca84be61f92a3eb3cb02f0ba550258608a736cc3a163e650b9fb5481de5261de->leave($__internal_ca84be61f92a3eb3cb02f0ba550258608a736cc3a163e650b9fb5481de5261de_prof);

        
        $__internal_a29ab829d9acced5ab6051cf533eba426677d93339b507ec8f024d5fb933eeda->leave($__internal_a29ab829d9acced5ab6051cf533eba426677d93339b507ec8f024d5fb933eeda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
