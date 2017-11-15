<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_033f38655fd25ef55567b108fcd4766581264c6b89fa1e09e74a93d68a9ab38c extends Twig_Template
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
        $__internal_f25073dd52a7d179ebffc15f34edf6355d76c6379c8ebb528574f458e25b2bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25073dd52a7d179ebffc15f34edf6355d76c6379c8ebb528574f458e25b2bfb->enter($__internal_f25073dd52a7d179ebffc15f34edf6355d76c6379c8ebb528574f458e25b2bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_07515d679256be940c91decd3e117ca399bb0579d1fa39d522a867e717bff9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07515d679256be940c91decd3e117ca399bb0579d1fa39d522a867e717bff9e2->enter($__internal_07515d679256be940c91decd3e117ca399bb0579d1fa39d522a867e717bff9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f25073dd52a7d179ebffc15f34edf6355d76c6379c8ebb528574f458e25b2bfb->leave($__internal_f25073dd52a7d179ebffc15f34edf6355d76c6379c8ebb528574f458e25b2bfb_prof);

        
        $__internal_07515d679256be940c91decd3e117ca399bb0579d1fa39d522a867e717bff9e2->leave($__internal_07515d679256be940c91decd3e117ca399bb0579d1fa39d522a867e717bff9e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
