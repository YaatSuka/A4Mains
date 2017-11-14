<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d7f4f1cd917d21aa7ed05667907e9c59f0a65143cf69d28779d4739f7961cb56 extends Twig_Template
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
        $__internal_5a79df09e05dc5378701c17f907c5ac06f77baab8dbf9b50cd93228b93505495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a79df09e05dc5378701c17f907c5ac06f77baab8dbf9b50cd93228b93505495->enter($__internal_5a79df09e05dc5378701c17f907c5ac06f77baab8dbf9b50cd93228b93505495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ae40303cf368560d8d5362b7a6f597c92f44b2cddd1b0e2cdfa49c1964c06852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae40303cf368560d8d5362b7a6f597c92f44b2cddd1b0e2cdfa49c1964c06852->enter($__internal_ae40303cf368560d8d5362b7a6f597c92f44b2cddd1b0e2cdfa49c1964c06852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_5a79df09e05dc5378701c17f907c5ac06f77baab8dbf9b50cd93228b93505495->leave($__internal_5a79df09e05dc5378701c17f907c5ac06f77baab8dbf9b50cd93228b93505495_prof);

        
        $__internal_ae40303cf368560d8d5362b7a6f597c92f44b2cddd1b0e2cdfa49c1964c06852->leave($__internal_ae40303cf368560d8d5362b7a6f597c92f44b2cddd1b0e2cdfa49c1964c06852_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
