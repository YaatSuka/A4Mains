<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_31e462a3db7bde08a6360b5d9acf19a73565fb5669bf8f7eee6378e5b7ee2007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_578d843978706df5d25334b92a8c67c0edddae1b751273d100769cd01a31200f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578d843978706df5d25334b92a8c67c0edddae1b751273d100769cd01a31200f->enter($__internal_578d843978706df5d25334b92a8c67c0edddae1b751273d100769cd01a31200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_94492859a78082b634be864e4591edfd1ac94e549e42b619c0cab90409c905f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94492859a78082b634be864e4591edfd1ac94e549e42b619c0cab90409c905f5->enter($__internal_94492859a78082b634be864e4591edfd1ac94e549e42b619c0cab90409c905f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578d843978706df5d25334b92a8c67c0edddae1b751273d100769cd01a31200f->leave($__internal_578d843978706df5d25334b92a8c67c0edddae1b751273d100769cd01a31200f_prof);

        
        $__internal_94492859a78082b634be864e4591edfd1ac94e549e42b619c0cab90409c905f5->leave($__internal_94492859a78082b634be864e4591edfd1ac94e549e42b619c0cab90409c905f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87881c3c12ec1679f5b3d5148321954be885a34238831c68b5c5f5c4790c3fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87881c3c12ec1679f5b3d5148321954be885a34238831c68b5c5f5c4790c3fcb->enter($__internal_87881c3c12ec1679f5b3d5148321954be885a34238831c68b5c5f5c4790c3fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49d0bde591834324ac678834d89389de3a356f3ae254e8e788e7e2a425e392ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d0bde591834324ac678834d89389de3a356f3ae254e8e788e7e2a425e392ed->enter($__internal_49d0bde591834324ac678834d89389de3a356f3ae254e8e788e7e2a425e392ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_49d0bde591834324ac678834d89389de3a356f3ae254e8e788e7e2a425e392ed->leave($__internal_49d0bde591834324ac678834d89389de3a356f3ae254e8e788e7e2a425e392ed_prof);

        
        $__internal_87881c3c12ec1679f5b3d5148321954be885a34238831c68b5c5f5c4790c3fcb->leave($__internal_87881c3c12ec1679f5b3d5148321954be885a34238831c68b5c5f5c4790c3fcb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1428b59dea0f68c736566fda6ca00ecd41e14f6fb763b896b82f4efe5fd9c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1428b59dea0f68c736566fda6ca00ecd41e14f6fb763b896b82f4efe5fd9c3c->enter($__internal_f1428b59dea0f68c736566fda6ca00ecd41e14f6fb763b896b82f4efe5fd9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3aafdb2c19ff58d7a5fb1f652573f875003f602835192ccae64c386191c88f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aafdb2c19ff58d7a5fb1f652573f875003f602835192ccae64c386191c88f37->enter($__internal_3aafdb2c19ff58d7a5fb1f652573f875003f602835192ccae64c386191c88f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3aafdb2c19ff58d7a5fb1f652573f875003f602835192ccae64c386191c88f37->leave($__internal_3aafdb2c19ff58d7a5fb1f652573f875003f602835192ccae64c386191c88f37_prof);

        
        $__internal_f1428b59dea0f68c736566fda6ca00ecd41e14f6fb763b896b82f4efe5fd9c3c->leave($__internal_f1428b59dea0f68c736566fda6ca00ecd41e14f6fb763b896b82f4efe5fd9c3c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4ff3bdce0c573e1806b662978bb8e972d85bda820840f587e54d652f23428d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ff3bdce0c573e1806b662978bb8e972d85bda820840f587e54d652f23428d4->enter($__internal_e4ff3bdce0c573e1806b662978bb8e972d85bda820840f587e54d652f23428d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_376b27aa65501e151db4a46b2d6bd04ba294ffbb1c54c6d2805b7280dc62b499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376b27aa65501e151db4a46b2d6bd04ba294ffbb1c54c6d2805b7280dc62b499->enter($__internal_376b27aa65501e151db4a46b2d6bd04ba294ffbb1c54c6d2805b7280dc62b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_376b27aa65501e151db4a46b2d6bd04ba294ffbb1c54c6d2805b7280dc62b499->leave($__internal_376b27aa65501e151db4a46b2d6bd04ba294ffbb1c54c6d2805b7280dc62b499_prof);

        
        $__internal_e4ff3bdce0c573e1806b662978bb8e972d85bda820840f587e54d652f23428d4->leave($__internal_e4ff3bdce0c573e1806b662978bb8e972d85bda820840f587e54d652f23428d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
