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
        $__internal_14a5ea2478fbf2811ca5ee13d8694cdcb842a9a4f28300aec7da2cb3cc46ef43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a5ea2478fbf2811ca5ee13d8694cdcb842a9a4f28300aec7da2cb3cc46ef43->enter($__internal_14a5ea2478fbf2811ca5ee13d8694cdcb842a9a4f28300aec7da2cb3cc46ef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ea8bb2f60e79557e61c1a376525f6a5e30d447a4e1e9618d56d05bba9c946a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8bb2f60e79557e61c1a376525f6a5e30d447a4e1e9618d56d05bba9c946a04->enter($__internal_ea8bb2f60e79557e61c1a376525f6a5e30d447a4e1e9618d56d05bba9c946a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_14a5ea2478fbf2811ca5ee13d8694cdcb842a9a4f28300aec7da2cb3cc46ef43->leave($__internal_14a5ea2478fbf2811ca5ee13d8694cdcb842a9a4f28300aec7da2cb3cc46ef43_prof);

        
        $__internal_ea8bb2f60e79557e61c1a376525f6a5e30d447a4e1e9618d56d05bba9c946a04->leave($__internal_ea8bb2f60e79557e61c1a376525f6a5e30d447a4e1e9618d56d05bba9c946a04_prof);

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
