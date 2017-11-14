<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_dea8d1b8f6eabfd55388b52bf0f66dbe3364d1a852b419187263f627fb2a5cee extends Twig_Template
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
        $__internal_d46db78092a34cc2ed370b255c331284e537e00fd06e22c4e69c8e02a4c7eb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46db78092a34cc2ed370b255c331284e537e00fd06e22c4e69c8e02a4c7eb7b->enter($__internal_d46db78092a34cc2ed370b255c331284e537e00fd06e22c4e69c8e02a4c7eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_26eb6be520726b3e65d794f6e67f4d76cb8966acbe37c96807e51e722097126b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26eb6be520726b3e65d794f6e67f4d76cb8966acbe37c96807e51e722097126b->enter($__internal_26eb6be520726b3e65d794f6e67f4d76cb8966acbe37c96807e51e722097126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_d46db78092a34cc2ed370b255c331284e537e00fd06e22c4e69c8e02a4c7eb7b->leave($__internal_d46db78092a34cc2ed370b255c331284e537e00fd06e22c4e69c8e02a4c7eb7b_prof);

        
        $__internal_26eb6be520726b3e65d794f6e67f4d76cb8966acbe37c96807e51e722097126b->leave($__internal_26eb6be520726b3e65d794f6e67f4d76cb8966acbe37c96807e51e722097126b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
