<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_728d9780dd7e642fe13ed0f39f157b37b43209dc5720d51d981cdf36637cf7ab extends Twig_Template
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
        $__internal_c67b309aaf2e2c93cfc70ba23abd34c174faefe7b444e1961bf26c7fe5bfece9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67b309aaf2e2c93cfc70ba23abd34c174faefe7b444e1961bf26c7fe5bfece9->enter($__internal_c67b309aaf2e2c93cfc70ba23abd34c174faefe7b444e1961bf26c7fe5bfece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_884e7c4c33f59b00068cb452d833d15db7b8b76f111f1227efe77758d916e368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e7c4c33f59b00068cb452d833d15db7b8b76f111f1227efe77758d916e368->enter($__internal_884e7c4c33f59b00068cb452d833d15db7b8b76f111f1227efe77758d916e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c67b309aaf2e2c93cfc70ba23abd34c174faefe7b444e1961bf26c7fe5bfece9->leave($__internal_c67b309aaf2e2c93cfc70ba23abd34c174faefe7b444e1961bf26c7fe5bfece9_prof);

        
        $__internal_884e7c4c33f59b00068cb452d833d15db7b8b76f111f1227efe77758d916e368->leave($__internal_884e7c4c33f59b00068cb452d833d15db7b8b76f111f1227efe77758d916e368_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
