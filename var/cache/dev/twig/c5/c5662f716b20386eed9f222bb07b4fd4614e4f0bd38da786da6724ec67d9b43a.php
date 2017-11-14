<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_670e84c20a79310d209d7728dfd6a820c3e90be391a4939395ecd200d5a26bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d439dfb39c8c4bc3044b19d5bf761dd44ab24890fa3be08fe9699a8ed0e64b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d439dfb39c8c4bc3044b19d5bf761dd44ab24890fa3be08fe9699a8ed0e64b1c->enter($__internal_d439dfb39c8c4bc3044b19d5bf761dd44ab24890fa3be08fe9699a8ed0e64b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6682c3071b7971e532c43afafa8ad66362409d13f1b31d340fadf84caf0f9710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6682c3071b7971e532c43afafa8ad66362409d13f1b31d340fadf84caf0f9710->enter($__internal_6682c3071b7971e532c43afafa8ad66362409d13f1b31d340fadf84caf0f9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d439dfb39c8c4bc3044b19d5bf761dd44ab24890fa3be08fe9699a8ed0e64b1c->leave($__internal_d439dfb39c8c4bc3044b19d5bf761dd44ab24890fa3be08fe9699a8ed0e64b1c_prof);

        
        $__internal_6682c3071b7971e532c43afafa8ad66362409d13f1b31d340fadf84caf0f9710->leave($__internal_6682c3071b7971e532c43afafa8ad66362409d13f1b31d340fadf84caf0f9710_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_530e74db955b24b5686ad3de5756cedf9fd95b13ef6e52d8846849643c506323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530e74db955b24b5686ad3de5756cedf9fd95b13ef6e52d8846849643c506323->enter($__internal_530e74db955b24b5686ad3de5756cedf9fd95b13ef6e52d8846849643c506323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d580666ef0e7e035e3a474baaf3ff6b1044914adbefa09db313008833969de12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d580666ef0e7e035e3a474baaf3ff6b1044914adbefa09db313008833969de12->enter($__internal_d580666ef0e7e035e3a474baaf3ff6b1044914adbefa09db313008833969de12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d580666ef0e7e035e3a474baaf3ff6b1044914adbefa09db313008833969de12->leave($__internal_d580666ef0e7e035e3a474baaf3ff6b1044914adbefa09db313008833969de12_prof);

        
        $__internal_530e74db955b24b5686ad3de5756cedf9fd95b13ef6e52d8846849643c506323->leave($__internal_530e74db955b24b5686ad3de5756cedf9fd95b13ef6e52d8846849643c506323_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_143d6cd994aeb416b1b94298c5921b96d7fd68a44db8ee36821311a93dc0ab2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143d6cd994aeb416b1b94298c5921b96d7fd68a44db8ee36821311a93dc0ab2c->enter($__internal_143d6cd994aeb416b1b94298c5921b96d7fd68a44db8ee36821311a93dc0ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df87c6ac380ef6949b9c7426583e40608e153fd3b58e5eec2bde0677680588da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df87c6ac380ef6949b9c7426583e40608e153fd3b58e5eec2bde0677680588da->enter($__internal_df87c6ac380ef6949b9c7426583e40608e153fd3b58e5eec2bde0677680588da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_df87c6ac380ef6949b9c7426583e40608e153fd3b58e5eec2bde0677680588da->leave($__internal_df87c6ac380ef6949b9c7426583e40608e153fd3b58e5eec2bde0677680588da_prof);

        
        $__internal_143d6cd994aeb416b1b94298c5921b96d7fd68a44db8ee36821311a93dc0ab2c->leave($__internal_143d6cd994aeb416b1b94298c5921b96d7fd68a44db8ee36821311a93dc0ab2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
