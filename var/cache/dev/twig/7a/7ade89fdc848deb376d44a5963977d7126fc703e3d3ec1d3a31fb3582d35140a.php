<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d5ac89f3a9e6efc4fa830ff812850fc0a4f0b508fbf763724bd734ea6d6f8612 extends Twig_Template
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
        $__internal_c1618613e73f0064101be01826bae94346c0413cf4be03bbe26342c5c01bab8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1618613e73f0064101be01826bae94346c0413cf4be03bbe26342c5c01bab8a->enter($__internal_c1618613e73f0064101be01826bae94346c0413cf4be03bbe26342c5c01bab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8fff7872bad80c25dfc3b4fafeeff67acc93e2dfd507daf9b0837733def11064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fff7872bad80c25dfc3b4fafeeff67acc93e2dfd507daf9b0837733def11064->enter($__internal_8fff7872bad80c25dfc3b4fafeeff67acc93e2dfd507daf9b0837733def11064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c1618613e73f0064101be01826bae94346c0413cf4be03bbe26342c5c01bab8a->leave($__internal_c1618613e73f0064101be01826bae94346c0413cf4be03bbe26342c5c01bab8a_prof);

        
        $__internal_8fff7872bad80c25dfc3b4fafeeff67acc93e2dfd507daf9b0837733def11064->leave($__internal_8fff7872bad80c25dfc3b4fafeeff67acc93e2dfd507daf9b0837733def11064_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
