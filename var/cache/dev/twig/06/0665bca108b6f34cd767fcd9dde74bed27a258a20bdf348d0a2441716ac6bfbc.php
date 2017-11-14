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
        $__internal_a208e19c749a2a88c3e4bf4c85bfbb7404cd850fdecd572df5d46151c491c97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a208e19c749a2a88c3e4bf4c85bfbb7404cd850fdecd572df5d46151c491c97c->enter($__internal_a208e19c749a2a88c3e4bf4c85bfbb7404cd850fdecd572df5d46151c491c97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_46fb7597c12146aadf864eb4a0e45b94a46add76af72f664a67efdd00e0bc4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fb7597c12146aadf864eb4a0e45b94a46add76af72f664a67efdd00e0bc4bc->enter($__internal_46fb7597c12146aadf864eb4a0e45b94a46add76af72f664a67efdd00e0bc4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a208e19c749a2a88c3e4bf4c85bfbb7404cd850fdecd572df5d46151c491c97c->leave($__internal_a208e19c749a2a88c3e4bf4c85bfbb7404cd850fdecd572df5d46151c491c97c_prof);

        
        $__internal_46fb7597c12146aadf864eb4a0e45b94a46add76af72f664a67efdd00e0bc4bc->leave($__internal_46fb7597c12146aadf864eb4a0e45b94a46add76af72f664a67efdd00e0bc4bc_prof);

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
