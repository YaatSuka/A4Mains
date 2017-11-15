<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a3ca5cd51d12261accb40fd4917e521c56a2b33845a914e21324f5e949e13394 extends Twig_Template
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
        $__internal_64e24c2f5889e9c5c6635c683e7e580d3ceb05cdf3f226d8a9e2f0942d6d6cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e24c2f5889e9c5c6635c683e7e580d3ceb05cdf3f226d8a9e2f0942d6d6cc0->enter($__internal_64e24c2f5889e9c5c6635c683e7e580d3ceb05cdf3f226d8a9e2f0942d6d6cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_662fe78e91412263f0b3ae2263107e8a9ae07b4662913fa6f864477e5ae9faed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662fe78e91412263f0b3ae2263107e8a9ae07b4662913fa6f864477e5ae9faed->enter($__internal_662fe78e91412263f0b3ae2263107e8a9ae07b4662913fa6f864477e5ae9faed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_64e24c2f5889e9c5c6635c683e7e580d3ceb05cdf3f226d8a9e2f0942d6d6cc0->leave($__internal_64e24c2f5889e9c5c6635c683e7e580d3ceb05cdf3f226d8a9e2f0942d6d6cc0_prof);

        
        $__internal_662fe78e91412263f0b3ae2263107e8a9ae07b4662913fa6f864477e5ae9faed->leave($__internal_662fe78e91412263f0b3ae2263107e8a9ae07b4662913fa6f864477e5ae9faed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
