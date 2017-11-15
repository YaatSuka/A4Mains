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
        $__internal_764e454c47093efc109b01af4ee503737205bb159702e904b13f3c1f416332b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764e454c47093efc109b01af4ee503737205bb159702e904b13f3c1f416332b3->enter($__internal_764e454c47093efc109b01af4ee503737205bb159702e904b13f3c1f416332b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5c270df7dc2cf9b9190d825661bb72d7ac5b2a69389aace9a5b74e80b5c4a175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c270df7dc2cf9b9190d825661bb72d7ac5b2a69389aace9a5b74e80b5c4a175->enter($__internal_5c270df7dc2cf9b9190d825661bb72d7ac5b2a69389aace9a5b74e80b5c4a175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_764e454c47093efc109b01af4ee503737205bb159702e904b13f3c1f416332b3->leave($__internal_764e454c47093efc109b01af4ee503737205bb159702e904b13f3c1f416332b3_prof);

        
        $__internal_5c270df7dc2cf9b9190d825661bb72d7ac5b2a69389aace9a5b74e80b5c4a175->leave($__internal_5c270df7dc2cf9b9190d825661bb72d7ac5b2a69389aace9a5b74e80b5c4a175_prof);

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
