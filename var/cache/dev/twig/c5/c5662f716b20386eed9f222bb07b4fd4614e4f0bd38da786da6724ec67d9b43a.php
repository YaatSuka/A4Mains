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
        $__internal_8b22807705ab6c6b27fc2532d8b3a13dd541913bcc0955c6133e415d6f24a9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b22807705ab6c6b27fc2532d8b3a13dd541913bcc0955c6133e415d6f24a9b1->enter($__internal_8b22807705ab6c6b27fc2532d8b3a13dd541913bcc0955c6133e415d6f24a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5df2e84f4e6fdce36b28342306e5ff5ec0828da86106df84f3b24af24f3f9d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df2e84f4e6fdce36b28342306e5ff5ec0828da86106df84f3b24af24f3f9d2e->enter($__internal_5df2e84f4e6fdce36b28342306e5ff5ec0828da86106df84f3b24af24f3f9d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b22807705ab6c6b27fc2532d8b3a13dd541913bcc0955c6133e415d6f24a9b1->leave($__internal_8b22807705ab6c6b27fc2532d8b3a13dd541913bcc0955c6133e415d6f24a9b1_prof);

        
        $__internal_5df2e84f4e6fdce36b28342306e5ff5ec0828da86106df84f3b24af24f3f9d2e->leave($__internal_5df2e84f4e6fdce36b28342306e5ff5ec0828da86106df84f3b24af24f3f9d2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa24e29dea5bd0330f8a61ab90790981da9d7f17e9a25cc7fba929f28ea6d857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa24e29dea5bd0330f8a61ab90790981da9d7f17e9a25cc7fba929f28ea6d857->enter($__internal_aa24e29dea5bd0330f8a61ab90790981da9d7f17e9a25cc7fba929f28ea6d857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee71d6c7910244da2f81bb550ff8d51c1ccecd64ceb1f072353bfb04e5694370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee71d6c7910244da2f81bb550ff8d51c1ccecd64ceb1f072353bfb04e5694370->enter($__internal_ee71d6c7910244da2f81bb550ff8d51c1ccecd64ceb1f072353bfb04e5694370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ee71d6c7910244da2f81bb550ff8d51c1ccecd64ceb1f072353bfb04e5694370->leave($__internal_ee71d6c7910244da2f81bb550ff8d51c1ccecd64ceb1f072353bfb04e5694370_prof);

        
        $__internal_aa24e29dea5bd0330f8a61ab90790981da9d7f17e9a25cc7fba929f28ea6d857->leave($__internal_aa24e29dea5bd0330f8a61ab90790981da9d7f17e9a25cc7fba929f28ea6d857_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95a2b9e0ca4a16a845b42b0b95060e1a291ea35756d22a71c16351765e3d6988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a2b9e0ca4a16a845b42b0b95060e1a291ea35756d22a71c16351765e3d6988->enter($__internal_95a2b9e0ca4a16a845b42b0b95060e1a291ea35756d22a71c16351765e3d6988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a0313ea1d4293529658992170b4b702274646b75602ab1dc413f25fefd8fea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0313ea1d4293529658992170b4b702274646b75602ab1dc413f25fefd8fea2->enter($__internal_8a0313ea1d4293529658992170b4b702274646b75602ab1dc413f25fefd8fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a0313ea1d4293529658992170b4b702274646b75602ab1dc413f25fefd8fea2->leave($__internal_8a0313ea1d4293529658992170b4b702274646b75602ab1dc413f25fefd8fea2_prof);

        
        $__internal_95a2b9e0ca4a16a845b42b0b95060e1a291ea35756d22a71c16351765e3d6988->leave($__internal_95a2b9e0ca4a16a845b42b0b95060e1a291ea35756d22a71c16351765e3d6988_prof);

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
