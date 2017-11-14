<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bbec385e326c91f7b4f7550ab0805e1814ddfce3c1d10293ee0ba3a20f2b8412 extends Twig_Template
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
        $__internal_ae04b1d909682eafd47c3fd2e7d3db42011b3955d5b9d1075ac5c2f66563fd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae04b1d909682eafd47c3fd2e7d3db42011b3955d5b9d1075ac5c2f66563fd4d->enter($__internal_ae04b1d909682eafd47c3fd2e7d3db42011b3955d5b9d1075ac5c2f66563fd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_07ed2728ea0a7ffc9f56102307a0376d178e6246a006a34dcb43c51c59b73f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ed2728ea0a7ffc9f56102307a0376d178e6246a006a34dcb43c51c59b73f4d->enter($__internal_07ed2728ea0a7ffc9f56102307a0376d178e6246a006a34dcb43c51c59b73f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ae04b1d909682eafd47c3fd2e7d3db42011b3955d5b9d1075ac5c2f66563fd4d->leave($__internal_ae04b1d909682eafd47c3fd2e7d3db42011b3955d5b9d1075ac5c2f66563fd4d_prof);

        
        $__internal_07ed2728ea0a7ffc9f56102307a0376d178e6246a006a34dcb43c51c59b73f4d->leave($__internal_07ed2728ea0a7ffc9f56102307a0376d178e6246a006a34dcb43c51c59b73f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
