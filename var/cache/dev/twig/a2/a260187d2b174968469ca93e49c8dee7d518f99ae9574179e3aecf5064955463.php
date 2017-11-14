<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_56f39f22daa01a9e8ea4e0af1522440a3f50a3b72f7c2a7534a2e415a49c615b extends Twig_Template
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
        $__internal_f4f97b1a8d4cb1ba6988ac96ae5fd60278703767a9bcd1809d859857d2ae92dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f97b1a8d4cb1ba6988ac96ae5fd60278703767a9bcd1809d859857d2ae92dc->enter($__internal_f4f97b1a8d4cb1ba6988ac96ae5fd60278703767a9bcd1809d859857d2ae92dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d0aca4a5db89318a8f2d1db759a72f75a8867fef5ffec1060c5f4c8961ebb2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0aca4a5db89318a8f2d1db759a72f75a8867fef5ffec1060c5f4c8961ebb2bd->enter($__internal_d0aca4a5db89318a8f2d1db759a72f75a8867fef5ffec1060c5f4c8961ebb2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_f4f97b1a8d4cb1ba6988ac96ae5fd60278703767a9bcd1809d859857d2ae92dc->leave($__internal_f4f97b1a8d4cb1ba6988ac96ae5fd60278703767a9bcd1809d859857d2ae92dc_prof);

        
        $__internal_d0aca4a5db89318a8f2d1db759a72f75a8867fef5ffec1060c5f4c8961ebb2bd->leave($__internal_d0aca4a5db89318a8f2d1db759a72f75a8867fef5ffec1060c5f4c8961ebb2bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
