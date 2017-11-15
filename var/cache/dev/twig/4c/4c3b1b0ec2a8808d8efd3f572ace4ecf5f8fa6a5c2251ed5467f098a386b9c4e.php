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
        $__internal_5f40a22b993dc93bf2f3e7b532d3e79e0b8b94501989d7440ab3ff1127e8eaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f40a22b993dc93bf2f3e7b532d3e79e0b8b94501989d7440ab3ff1127e8eaca->enter($__internal_5f40a22b993dc93bf2f3e7b532d3e79e0b8b94501989d7440ab3ff1127e8eaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_98fdf8babfae4ff3557ffa478c2a6852be2e191fcb9cc2afc107db8162df5a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fdf8babfae4ff3557ffa478c2a6852be2e191fcb9cc2afc107db8162df5a34->enter($__internal_98fdf8babfae4ff3557ffa478c2a6852be2e191fcb9cc2afc107db8162df5a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5f40a22b993dc93bf2f3e7b532d3e79e0b8b94501989d7440ab3ff1127e8eaca->leave($__internal_5f40a22b993dc93bf2f3e7b532d3e79e0b8b94501989d7440ab3ff1127e8eaca_prof);

        
        $__internal_98fdf8babfae4ff3557ffa478c2a6852be2e191fcb9cc2afc107db8162df5a34->leave($__internal_98fdf8babfae4ff3557ffa478c2a6852be2e191fcb9cc2afc107db8162df5a34_prof);

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
