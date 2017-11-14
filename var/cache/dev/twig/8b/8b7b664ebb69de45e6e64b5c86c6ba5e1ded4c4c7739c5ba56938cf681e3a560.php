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
        $__internal_42bcd9aaf88e30e941bfe064ed1c557118f1a9553058a0c8ebde9778b1a2a433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42bcd9aaf88e30e941bfe064ed1c557118f1a9553058a0c8ebde9778b1a2a433->enter($__internal_42bcd9aaf88e30e941bfe064ed1c557118f1a9553058a0c8ebde9778b1a2a433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c3d42a69e8cc764e7b70a8867342f75f59f7953d453a6f7e59f6de98f15d034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d42a69e8cc764e7b70a8867342f75f59f7953d453a6f7e59f6de98f15d034b->enter($__internal_c3d42a69e8cc764e7b70a8867342f75f59f7953d453a6f7e59f6de98f15d034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_42bcd9aaf88e30e941bfe064ed1c557118f1a9553058a0c8ebde9778b1a2a433->leave($__internal_42bcd9aaf88e30e941bfe064ed1c557118f1a9553058a0c8ebde9778b1a2a433_prof);

        
        $__internal_c3d42a69e8cc764e7b70a8867342f75f59f7953d453a6f7e59f6de98f15d034b->leave($__internal_c3d42a69e8cc764e7b70a8867342f75f59f7953d453a6f7e59f6de98f15d034b_prof);

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
