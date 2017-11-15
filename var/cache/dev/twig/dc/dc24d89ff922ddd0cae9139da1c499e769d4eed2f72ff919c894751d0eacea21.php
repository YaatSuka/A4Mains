<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bf46dbfb9b0b5e852b8891ccc464a8902536201fba1a4475f49672c9197e9f3e extends Twig_Template
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
        $__internal_0c33e7a483c35b23c20df6a9fe74b05b64d6d82cb42fb09b7c930eb72632350c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c33e7a483c35b23c20df6a9fe74b05b64d6d82cb42fb09b7c930eb72632350c->enter($__internal_0c33e7a483c35b23c20df6a9fe74b05b64d6d82cb42fb09b7c930eb72632350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d7e97f3256e0f3a0209e5916bc3a5ab26454df65329383c079a5f62f797d6d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e97f3256e0f3a0209e5916bc3a5ab26454df65329383c079a5f62f797d6d12->enter($__internal_d7e97f3256e0f3a0209e5916bc3a5ab26454df65329383c079a5f62f797d6d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0c33e7a483c35b23c20df6a9fe74b05b64d6d82cb42fb09b7c930eb72632350c->leave($__internal_0c33e7a483c35b23c20df6a9fe74b05b64d6d82cb42fb09b7c930eb72632350c_prof);

        
        $__internal_d7e97f3256e0f3a0209e5916bc3a5ab26454df65329383c079a5f62f797d6d12->leave($__internal_d7e97f3256e0f3a0209e5916bc3a5ab26454df65329383c079a5f62f797d6d12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
