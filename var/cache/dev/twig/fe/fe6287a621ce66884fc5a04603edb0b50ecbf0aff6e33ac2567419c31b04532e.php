<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_012a0a60dff676c981ae87566044dcf6cb3530bbee660abd48e9cf5a5343fb7d extends Twig_Template
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
        $__internal_49161699e7d143e14419746f2f120694a8946b524ac2e9fc3a5fa15f84570139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49161699e7d143e14419746f2f120694a8946b524ac2e9fc3a5fa15f84570139->enter($__internal_49161699e7d143e14419746f2f120694a8946b524ac2e9fc3a5fa15f84570139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_45da4f5f522751eeeaf9b8b419c519389217c0a33fc6d4b31cffec9de727eab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45da4f5f522751eeeaf9b8b419c519389217c0a33fc6d4b31cffec9de727eab3->enter($__internal_45da4f5f522751eeeaf9b8b419c519389217c0a33fc6d4b31cffec9de727eab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_49161699e7d143e14419746f2f120694a8946b524ac2e9fc3a5fa15f84570139->leave($__internal_49161699e7d143e14419746f2f120694a8946b524ac2e9fc3a5fa15f84570139_prof);

        
        $__internal_45da4f5f522751eeeaf9b8b419c519389217c0a33fc6d4b31cffec9de727eab3->leave($__internal_45da4f5f522751eeeaf9b8b419c519389217c0a33fc6d4b31cffec9de727eab3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
