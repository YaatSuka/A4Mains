<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bc4b00a7559fdb26870de699de690ccf628573348e8c55a8808d5ccf39ca264f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2ba6c273253e43b66f1c558c937b6a84a622b31d840a6374ee9f4f548967b6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba6c273253e43b66f1c558c937b6a84a622b31d840a6374ee9f4f548967b6e5->enter($__internal_2ba6c273253e43b66f1c558c937b6a84a622b31d840a6374ee9f4f548967b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2108ed36e541c28143680692c581973c14659cbf53d8797e58013925dad2145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2108ed36e541c28143680692c581973c14659cbf53d8797e58013925dad2145e->enter($__internal_2108ed36e541c28143680692c581973c14659cbf53d8797e58013925dad2145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba6c273253e43b66f1c558c937b6a84a622b31d840a6374ee9f4f548967b6e5->leave($__internal_2ba6c273253e43b66f1c558c937b6a84a622b31d840a6374ee9f4f548967b6e5_prof);

        
        $__internal_2108ed36e541c28143680692c581973c14659cbf53d8797e58013925dad2145e->leave($__internal_2108ed36e541c28143680692c581973c14659cbf53d8797e58013925dad2145e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b88c58d18ed3b2211de463461cf03a18f3062c43b19d18dd68ec63c99e368412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88c58d18ed3b2211de463461cf03a18f3062c43b19d18dd68ec63c99e368412->enter($__internal_b88c58d18ed3b2211de463461cf03a18f3062c43b19d18dd68ec63c99e368412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_241b3c6a07da22ee378bc4e503178fb0db062447844a5dc1a1b1fde6528801e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241b3c6a07da22ee378bc4e503178fb0db062447844a5dc1a1b1fde6528801e0->enter($__internal_241b3c6a07da22ee378bc4e503178fb0db062447844a5dc1a1b1fde6528801e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_241b3c6a07da22ee378bc4e503178fb0db062447844a5dc1a1b1fde6528801e0->leave($__internal_241b3c6a07da22ee378bc4e503178fb0db062447844a5dc1a1b1fde6528801e0_prof);

        
        $__internal_b88c58d18ed3b2211de463461cf03a18f3062c43b19d18dd68ec63c99e368412->leave($__internal_b88c58d18ed3b2211de463461cf03a18f3062c43b19d18dd68ec63c99e368412_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a72b160076553d2d1bfbbd45251c70c8e5a8837999a2ee8c1c647d058e87d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a72b160076553d2d1bfbbd45251c70c8e5a8837999a2ee8c1c647d058e87d9f->enter($__internal_3a72b160076553d2d1bfbbd45251c70c8e5a8837999a2ee8c1c647d058e87d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3984a727199c3f5cf792e0a67e3c2f7ed090ab0b342ed5bf33a9a0a54bc09817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3984a727199c3f5cf792e0a67e3c2f7ed090ab0b342ed5bf33a9a0a54bc09817->enter($__internal_3984a727199c3f5cf792e0a67e3c2f7ed090ab0b342ed5bf33a9a0a54bc09817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3984a727199c3f5cf792e0a67e3c2f7ed090ab0b342ed5bf33a9a0a54bc09817->leave($__internal_3984a727199c3f5cf792e0a67e3c2f7ed090ab0b342ed5bf33a9a0a54bc09817_prof);

        
        $__internal_3a72b160076553d2d1bfbbd45251c70c8e5a8837999a2ee8c1c647d058e87d9f->leave($__internal_3a72b160076553d2d1bfbbd45251c70c8e5a8837999a2ee8c1c647d058e87d9f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d87875f65487625298897e3ce55f174cc86a93fda2e164be6d2aca3e2caf8d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87875f65487625298897e3ce55f174cc86a93fda2e164be6d2aca3e2caf8d48->enter($__internal_d87875f65487625298897e3ce55f174cc86a93fda2e164be6d2aca3e2caf8d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b268689915358c3f7fcbc08510b226b87d874b4f84ee6921147e8121b3a77aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b268689915358c3f7fcbc08510b226b87d874b4f84ee6921147e8121b3a77aa9->enter($__internal_b268689915358c3f7fcbc08510b226b87d874b4f84ee6921147e8121b3a77aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b268689915358c3f7fcbc08510b226b87d874b4f84ee6921147e8121b3a77aa9->leave($__internal_b268689915358c3f7fcbc08510b226b87d874b4f84ee6921147e8121b3a77aa9_prof);

        
        $__internal_d87875f65487625298897e3ce55f174cc86a93fda2e164be6d2aca3e2caf8d48->leave($__internal_d87875f65487625298897e3ce55f174cc86a93fda2e164be6d2aca3e2caf8d48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
