<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0a75b39565da363e97b2a5c12d016aa4eece59a9c669983d393b15dba10a0efe extends Twig_Template
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
        $__internal_c86b50e460a2380bd3cdd149c60472798b831a2a9fe99fb7ea6c97c09ebbdb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86b50e460a2380bd3cdd149c60472798b831a2a9fe99fb7ea6c97c09ebbdb05->enter($__internal_c86b50e460a2380bd3cdd149c60472798b831a2a9fe99fb7ea6c97c09ebbdb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9f0553adb37651313b0b1afdca6fb7a715b9718bebb502ac918ca7121a843c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0553adb37651313b0b1afdca6fb7a715b9718bebb502ac918ca7121a843c70->enter($__internal_9f0553adb37651313b0b1afdca6fb7a715b9718bebb502ac918ca7121a843c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c86b50e460a2380bd3cdd149c60472798b831a2a9fe99fb7ea6c97c09ebbdb05->leave($__internal_c86b50e460a2380bd3cdd149c60472798b831a2a9fe99fb7ea6c97c09ebbdb05_prof);

        
        $__internal_9f0553adb37651313b0b1afdca6fb7a715b9718bebb502ac918ca7121a843c70->leave($__internal_9f0553adb37651313b0b1afdca6fb7a715b9718bebb502ac918ca7121a843c70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
