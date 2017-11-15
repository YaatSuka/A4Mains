<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_728d9780dd7e642fe13ed0f39f157b37b43209dc5720d51d981cdf36637cf7ab extends Twig_Template
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
        $__internal_2cac99d8d1cc71237b98b415253ff36e850f0f61ecd9d2f6b7be5f7b9e8cc64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cac99d8d1cc71237b98b415253ff36e850f0f61ecd9d2f6b7be5f7b9e8cc64a->enter($__internal_2cac99d8d1cc71237b98b415253ff36e850f0f61ecd9d2f6b7be5f7b9e8cc64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a53b11fe93be02c25e8d6bdca699aedb26ba7df2f55bd3299d88800bc69727ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53b11fe93be02c25e8d6bdca699aedb26ba7df2f55bd3299d88800bc69727ec->enter($__internal_a53b11fe93be02c25e8d6bdca699aedb26ba7df2f55bd3299d88800bc69727ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2cac99d8d1cc71237b98b415253ff36e850f0f61ecd9d2f6b7be5f7b9e8cc64a->leave($__internal_2cac99d8d1cc71237b98b415253ff36e850f0f61ecd9d2f6b7be5f7b9e8cc64a_prof);

        
        $__internal_a53b11fe93be02c25e8d6bdca699aedb26ba7df2f55bd3299d88800bc69727ec->leave($__internal_a53b11fe93be02c25e8d6bdca699aedb26ba7df2f55bd3299d88800bc69727ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
