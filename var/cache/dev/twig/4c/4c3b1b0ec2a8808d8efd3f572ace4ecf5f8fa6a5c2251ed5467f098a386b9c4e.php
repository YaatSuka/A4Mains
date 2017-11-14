<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c8fae9739b84db87ab9df82065a7cf3de7ae05501961b32799bbc2a6ca4e1daa extends Twig_Template
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
        $__internal_95d5257c83e36b10a5aab17e4b79740ac115d67c53233da81ac52c2d718ad536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d5257c83e36b10a5aab17e4b79740ac115d67c53233da81ac52c2d718ad536->enter($__internal_95d5257c83e36b10a5aab17e4b79740ac115d67c53233da81ac52c2d718ad536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b90f0610277b736adde6497295d9eddacbc525b8a117483e6812c6c7bdf40ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90f0610277b736adde6497295d9eddacbc525b8a117483e6812c6c7bdf40ff0->enter($__internal_b90f0610277b736adde6497295d9eddacbc525b8a117483e6812c6c7bdf40ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_95d5257c83e36b10a5aab17e4b79740ac115d67c53233da81ac52c2d718ad536->leave($__internal_95d5257c83e36b10a5aab17e4b79740ac115d67c53233da81ac52c2d718ad536_prof);

        
        $__internal_b90f0610277b736adde6497295d9eddacbc525b8a117483e6812c6c7bdf40ff0->leave($__internal_b90f0610277b736adde6497295d9eddacbc525b8a117483e6812c6c7bdf40ff0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
