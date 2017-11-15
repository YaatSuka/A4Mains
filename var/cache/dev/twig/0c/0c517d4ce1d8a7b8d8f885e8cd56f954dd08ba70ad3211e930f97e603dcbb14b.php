<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_26acfb6e3f6aa8d2ee7cfe7e824126155b97da271ee728b8185baff76c4c5d90 extends Twig_Template
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
        $__internal_241d23cc3c8bc899dba185e5fc8e8e91d5be65d8e798dd3120b4264799b99673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241d23cc3c8bc899dba185e5fc8e8e91d5be65d8e798dd3120b4264799b99673->enter($__internal_241d23cc3c8bc899dba185e5fc8e8e91d5be65d8e798dd3120b4264799b99673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ec4e3d51db3ff25e40a8b4ef9eafecbca9bed7825ba63ae2de0f642d03239104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4e3d51db3ff25e40a8b4ef9eafecbca9bed7825ba63ae2de0f642d03239104->enter($__internal_ec4e3d51db3ff25e40a8b4ef9eafecbca9bed7825ba63ae2de0f642d03239104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_241d23cc3c8bc899dba185e5fc8e8e91d5be65d8e798dd3120b4264799b99673->leave($__internal_241d23cc3c8bc899dba185e5fc8e8e91d5be65d8e798dd3120b4264799b99673_prof);

        
        $__internal_ec4e3d51db3ff25e40a8b4ef9eafecbca9bed7825ba63ae2de0f642d03239104->leave($__internal_ec4e3d51db3ff25e40a8b4ef9eafecbca9bed7825ba63ae2de0f642d03239104_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
