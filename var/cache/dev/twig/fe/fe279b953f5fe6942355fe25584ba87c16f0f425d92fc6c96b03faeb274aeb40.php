<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0ce42af96901a379edec2fb6909b7bf3c9ed10ef706ebd7415ced3ac7b641d68 extends Twig_Template
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
        $__internal_cae6a57ce3faa4ca541ec557c60c60b2a29b62362d34ce00b135fc6cda9fcfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae6a57ce3faa4ca541ec557c60c60b2a29b62362d34ce00b135fc6cda9fcfe3->enter($__internal_cae6a57ce3faa4ca541ec557c60c60b2a29b62362d34ce00b135fc6cda9fcfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_69014fccc2fddb3148f3f9a4c9eb87260496023180400e523f068427f765e2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69014fccc2fddb3148f3f9a4c9eb87260496023180400e523f068427f765e2bb->enter($__internal_69014fccc2fddb3148f3f9a4c9eb87260496023180400e523f068427f765e2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cae6a57ce3faa4ca541ec557c60c60b2a29b62362d34ce00b135fc6cda9fcfe3->leave($__internal_cae6a57ce3faa4ca541ec557c60c60b2a29b62362d34ce00b135fc6cda9fcfe3_prof);

        
        $__internal_69014fccc2fddb3148f3f9a4c9eb87260496023180400e523f068427f765e2bb->leave($__internal_69014fccc2fddb3148f3f9a4c9eb87260496023180400e523f068427f765e2bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
