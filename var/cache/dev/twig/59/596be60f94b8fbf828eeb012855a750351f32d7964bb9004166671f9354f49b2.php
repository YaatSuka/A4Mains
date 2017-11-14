<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_274402e10d4109eff5d7a0f7dea56e947535ef63894dba4ac98c593b73c71e62 extends Twig_Template
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
        $__internal_22094dac218aa85ecfd1d5c39cbaadea423658160d028ac152512b77ad60edc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22094dac218aa85ecfd1d5c39cbaadea423658160d028ac152512b77ad60edc0->enter($__internal_22094dac218aa85ecfd1d5c39cbaadea423658160d028ac152512b77ad60edc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_92a21030567e3818391df063e976f8e2cf46033a5873551c3fa64bdfc2cd3a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a21030567e3818391df063e976f8e2cf46033a5873551c3fa64bdfc2cd3a0a->enter($__internal_92a21030567e3818391df063e976f8e2cf46033a5873551c3fa64bdfc2cd3a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_22094dac218aa85ecfd1d5c39cbaadea423658160d028ac152512b77ad60edc0->leave($__internal_22094dac218aa85ecfd1d5c39cbaadea423658160d028ac152512b77ad60edc0_prof);

        
        $__internal_92a21030567e3818391df063e976f8e2cf46033a5873551c3fa64bdfc2cd3a0a->leave($__internal_92a21030567e3818391df063e976f8e2cf46033a5873551c3fa64bdfc2cd3a0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
