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
        $__internal_9869d4e3c6f3d5fff1a708fe586f741c5f2b453818aa075aace2a2fbc33a90c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9869d4e3c6f3d5fff1a708fe586f741c5f2b453818aa075aace2a2fbc33a90c2->enter($__internal_9869d4e3c6f3d5fff1a708fe586f741c5f2b453818aa075aace2a2fbc33a90c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c8376c4946e8c5e182f32bf953846a10666672ee3ebd40a2014bab0a079eda0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8376c4946e8c5e182f32bf953846a10666672ee3ebd40a2014bab0a079eda0a->enter($__internal_c8376c4946e8c5e182f32bf953846a10666672ee3ebd40a2014bab0a079eda0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9869d4e3c6f3d5fff1a708fe586f741c5f2b453818aa075aace2a2fbc33a90c2->leave($__internal_9869d4e3c6f3d5fff1a708fe586f741c5f2b453818aa075aace2a2fbc33a90c2_prof);

        
        $__internal_c8376c4946e8c5e182f32bf953846a10666672ee3ebd40a2014bab0a079eda0a->leave($__internal_c8376c4946e8c5e182f32bf953846a10666672ee3ebd40a2014bab0a079eda0a_prof);

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
