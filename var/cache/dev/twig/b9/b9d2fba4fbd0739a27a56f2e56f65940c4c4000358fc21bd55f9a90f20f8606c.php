<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_60e43728d3226248448c711f77fe1e4da91d8dcd00429d9deefdc49e40261253 extends Twig_Template
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
        $__internal_1b1a3b3f53418f1e4cc9e7b4a5bc81589d9da23540915f0efd77bf1e78bcbbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1a3b3f53418f1e4cc9e7b4a5bc81589d9da23540915f0efd77bf1e78bcbbfd->enter($__internal_1b1a3b3f53418f1e4cc9e7b4a5bc81589d9da23540915f0efd77bf1e78bcbbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_f88e52b08fee8e5f9e6684900b1285f42cf050df86ac07a56acec2ed2b784d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88e52b08fee8e5f9e6684900b1285f42cf050df86ac07a56acec2ed2b784d83->enter($__internal_f88e52b08fee8e5f9e6684900b1285f42cf050df86ac07a56acec2ed2b784d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_1b1a3b3f53418f1e4cc9e7b4a5bc81589d9da23540915f0efd77bf1e78bcbbfd->leave($__internal_1b1a3b3f53418f1e4cc9e7b4a5bc81589d9da23540915f0efd77bf1e78bcbbfd_prof);

        
        $__internal_f88e52b08fee8e5f9e6684900b1285f42cf050df86ac07a56acec2ed2b784d83->leave($__internal_f88e52b08fee8e5f9e6684900b1285f42cf050df86ac07a56acec2ed2b784d83_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
