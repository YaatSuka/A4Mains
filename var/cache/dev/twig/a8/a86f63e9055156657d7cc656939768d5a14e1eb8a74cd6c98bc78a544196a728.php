<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6f74eb4a81f842e92eb40d7f69e21383e3176c486d1aee6dcf639d91b69e6a2a extends Twig_Template
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
        $__internal_0432dd367c23711fec7d8035c8fea2678d50fc312febae4269a92b8d4db5eac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0432dd367c23711fec7d8035c8fea2678d50fc312febae4269a92b8d4db5eac6->enter($__internal_0432dd367c23711fec7d8035c8fea2678d50fc312febae4269a92b8d4db5eac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9a915eeaeee5e7481595f4f001bdd9a301e9ae1ff8f123f6bb2014878484463e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a915eeaeee5e7481595f4f001bdd9a301e9ae1ff8f123f6bb2014878484463e->enter($__internal_9a915eeaeee5e7481595f4f001bdd9a301e9ae1ff8f123f6bb2014878484463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0432dd367c23711fec7d8035c8fea2678d50fc312febae4269a92b8d4db5eac6->leave($__internal_0432dd367c23711fec7d8035c8fea2678d50fc312febae4269a92b8d4db5eac6_prof);

        
        $__internal_9a915eeaeee5e7481595f4f001bdd9a301e9ae1ff8f123f6bb2014878484463e->leave($__internal_9a915eeaeee5e7481595f4f001bdd9a301e9ae1ff8f123f6bb2014878484463e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
