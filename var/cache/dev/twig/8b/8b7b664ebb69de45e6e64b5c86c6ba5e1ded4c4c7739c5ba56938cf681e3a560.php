<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0a620d1b66f7e384036df76ca5ccff095656d7f0f806e089dd7f3976f0883103 extends Twig_Template
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
        $__internal_f23ce69ed80cf2b12575cad76297dd10cfaf7a163159e9b67a5b900cccfe7f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23ce69ed80cf2b12575cad76297dd10cfaf7a163159e9b67a5b900cccfe7f9e->enter($__internal_f23ce69ed80cf2b12575cad76297dd10cfaf7a163159e9b67a5b900cccfe7f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6b11844c4920a045b064f346515ca138ecbfe6f9aa2502ec6483934c1714ad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b11844c4920a045b064f346515ca138ecbfe6f9aa2502ec6483934c1714ad6e->enter($__internal_6b11844c4920a045b064f346515ca138ecbfe6f9aa2502ec6483934c1714ad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f23ce69ed80cf2b12575cad76297dd10cfaf7a163159e9b67a5b900cccfe7f9e->leave($__internal_f23ce69ed80cf2b12575cad76297dd10cfaf7a163159e9b67a5b900cccfe7f9e_prof);

        
        $__internal_6b11844c4920a045b064f346515ca138ecbfe6f9aa2502ec6483934c1714ad6e->leave($__internal_6b11844c4920a045b064f346515ca138ecbfe6f9aa2502ec6483934c1714ad6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
