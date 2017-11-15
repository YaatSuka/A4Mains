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
        $__internal_d1bd37f39614b7785fe2c969e11f298837b5550c7931210d8aa098df26fd1b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bd37f39614b7785fe2c969e11f298837b5550c7931210d8aa098df26fd1b7a->enter($__internal_d1bd37f39614b7785fe2c969e11f298837b5550c7931210d8aa098df26fd1b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_8269e0252399c9a6dafcd0a19f4f4d58a4aaf952c4487c13c431ccb675d82fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8269e0252399c9a6dafcd0a19f4f4d58a4aaf952c4487c13c431ccb675d82fac->enter($__internal_8269e0252399c9a6dafcd0a19f4f4d58a4aaf952c4487c13c431ccb675d82fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d1bd37f39614b7785fe2c969e11f298837b5550c7931210d8aa098df26fd1b7a->leave($__internal_d1bd37f39614b7785fe2c969e11f298837b5550c7931210d8aa098df26fd1b7a_prof);

        
        $__internal_8269e0252399c9a6dafcd0a19f4f4d58a4aaf952c4487c13c431ccb675d82fac->leave($__internal_8269e0252399c9a6dafcd0a19f4f4d58a4aaf952c4487c13c431ccb675d82fac_prof);

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
