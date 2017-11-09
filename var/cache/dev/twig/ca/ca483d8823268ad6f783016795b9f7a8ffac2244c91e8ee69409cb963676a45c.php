<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f105047b354efc8b735bf76a9266c0d36af85fb6d992e9fbd51ae88d75a78747 extends Twig_Template
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
        $__internal_77b44db522153957295efcf0b75b348fff0e6feb15f5f74506b94ceff0aa6e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b44db522153957295efcf0b75b348fff0e6feb15f5f74506b94ceff0aa6e73->enter($__internal_77b44db522153957295efcf0b75b348fff0e6feb15f5f74506b94ceff0aa6e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d6bdd173bb276e58c62a9d46b65c9f13f97824bfc617aee450b601ed5d0c390e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bdd173bb276e58c62a9d46b65c9f13f97824bfc617aee450b601ed5d0c390e->enter($__internal_d6bdd173bb276e58c62a9d46b65c9f13f97824bfc617aee450b601ed5d0c390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b44db522153957295efcf0b75b348fff0e6feb15f5f74506b94ceff0aa6e73->leave($__internal_77b44db522153957295efcf0b75b348fff0e6feb15f5f74506b94ceff0aa6e73_prof);

        
        $__internal_d6bdd173bb276e58c62a9d46b65c9f13f97824bfc617aee450b601ed5d0c390e->leave($__internal_d6bdd173bb276e58c62a9d46b65c9f13f97824bfc617aee450b601ed5d0c390e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_485703a7d427b0456094f862553559b08a54ecac1aef0e86ad41c9f96b981321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485703a7d427b0456094f862553559b08a54ecac1aef0e86ad41c9f96b981321->enter($__internal_485703a7d427b0456094f862553559b08a54ecac1aef0e86ad41c9f96b981321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7ba57b78536a979772b4dc9d99e225029a35db1ee3cdd78cd51ae05f42c2976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ba57b78536a979772b4dc9d99e225029a35db1ee3cdd78cd51ae05f42c2976->enter($__internal_f7ba57b78536a979772b4dc9d99e225029a35db1ee3cdd78cd51ae05f42c2976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7ba57b78536a979772b4dc9d99e225029a35db1ee3cdd78cd51ae05f42c2976->leave($__internal_f7ba57b78536a979772b4dc9d99e225029a35db1ee3cdd78cd51ae05f42c2976_prof);

        
        $__internal_485703a7d427b0456094f862553559b08a54ecac1aef0e86ad41c9f96b981321->leave($__internal_485703a7d427b0456094f862553559b08a54ecac1aef0e86ad41c9f96b981321_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac5c7e9ac48c7c5be9b467cba4f99c6eb0a3b58dfd5e8fc3414f8aa0f792101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5c7e9ac48c7c5be9b467cba4f99c6eb0a3b58dfd5e8fc3414f8aa0f792101f->enter($__internal_ac5c7e9ac48c7c5be9b467cba4f99c6eb0a3b58dfd5e8fc3414f8aa0f792101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd373325ca8c4b19c57b8dad8a455bbcad80f23e406c6cc15fcefdb64ed424db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd373325ca8c4b19c57b8dad8a455bbcad80f23e406c6cc15fcefdb64ed424db->enter($__internal_dd373325ca8c4b19c57b8dad8a455bbcad80f23e406c6cc15fcefdb64ed424db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd373325ca8c4b19c57b8dad8a455bbcad80f23e406c6cc15fcefdb64ed424db->leave($__internal_dd373325ca8c4b19c57b8dad8a455bbcad80f23e406c6cc15fcefdb64ed424db_prof);

        
        $__internal_ac5c7e9ac48c7c5be9b467cba4f99c6eb0a3b58dfd5e8fc3414f8aa0f792101f->leave($__internal_ac5c7e9ac48c7c5be9b467cba4f99c6eb0a3b58dfd5e8fc3414f8aa0f792101f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_65b4369ce92e6fd667ae817a9463f823934a5e3a31d0dce5b52de50d4a6cecae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b4369ce92e6fd667ae817a9463f823934a5e3a31d0dce5b52de50d4a6cecae->enter($__internal_65b4369ce92e6fd667ae817a9463f823934a5e3a31d0dce5b52de50d4a6cecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5755757e2d16e6da7d7b60851eed1824b5aa8de3bd928593c964ee5e1962be67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5755757e2d16e6da7d7b60851eed1824b5aa8de3bd928593c964ee5e1962be67->enter($__internal_5755757e2d16e6da7d7b60851eed1824b5aa8de3bd928593c964ee5e1962be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5755757e2d16e6da7d7b60851eed1824b5aa8de3bd928593c964ee5e1962be67->leave($__internal_5755757e2d16e6da7d7b60851eed1824b5aa8de3bd928593c964ee5e1962be67_prof);

        
        $__internal_65b4369ce92e6fd667ae817a9463f823934a5e3a31d0dce5b52de50d4a6cecae->leave($__internal_65b4369ce92e6fd667ae817a9463f823934a5e3a31d0dce5b52de50d4a6cecae_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
