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
        $__internal_91c87a506b59583b8affd0a8378777158a2a9591137ef08e4cbb5c6e0ba69810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c87a506b59583b8affd0a8378777158a2a9591137ef08e4cbb5c6e0ba69810->enter($__internal_91c87a506b59583b8affd0a8378777158a2a9591137ef08e4cbb5c6e0ba69810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6960b29e5e2c0a320464644752ee31d369878ceb54189cabf33980ea3699ad80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6960b29e5e2c0a320464644752ee31d369878ceb54189cabf33980ea3699ad80->enter($__internal_6960b29e5e2c0a320464644752ee31d369878ceb54189cabf33980ea3699ad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c87a506b59583b8affd0a8378777158a2a9591137ef08e4cbb5c6e0ba69810->leave($__internal_91c87a506b59583b8affd0a8378777158a2a9591137ef08e4cbb5c6e0ba69810_prof);

        
        $__internal_6960b29e5e2c0a320464644752ee31d369878ceb54189cabf33980ea3699ad80->leave($__internal_6960b29e5e2c0a320464644752ee31d369878ceb54189cabf33980ea3699ad80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6cafec9a394ca5d55a983eee0d1906cff8cd2cb60909a5e4c207481688b9ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cafec9a394ca5d55a983eee0d1906cff8cd2cb60909a5e4c207481688b9ef7->enter($__internal_e6cafec9a394ca5d55a983eee0d1906cff8cd2cb60909a5e4c207481688b9ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be9ef5821da029bcbf5b2cc427919c407f974d254c40d924bdc9537c1473dc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9ef5821da029bcbf5b2cc427919c407f974d254c40d924bdc9537c1473dc4c->enter($__internal_be9ef5821da029bcbf5b2cc427919c407f974d254c40d924bdc9537c1473dc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be9ef5821da029bcbf5b2cc427919c407f974d254c40d924bdc9537c1473dc4c->leave($__internal_be9ef5821da029bcbf5b2cc427919c407f974d254c40d924bdc9537c1473dc4c_prof);

        
        $__internal_e6cafec9a394ca5d55a983eee0d1906cff8cd2cb60909a5e4c207481688b9ef7->leave($__internal_e6cafec9a394ca5d55a983eee0d1906cff8cd2cb60909a5e4c207481688b9ef7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_34fe6136d014e9bff1dd1298928edb130492fdcc6c82f570ff4e97dc13dc2294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fe6136d014e9bff1dd1298928edb130492fdcc6c82f570ff4e97dc13dc2294->enter($__internal_34fe6136d014e9bff1dd1298928edb130492fdcc6c82f570ff4e97dc13dc2294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d391a31030956f36530084d9bc73090758a5f47b5f2bc2365432ccc918658563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d391a31030956f36530084d9bc73090758a5f47b5f2bc2365432ccc918658563->enter($__internal_d391a31030956f36530084d9bc73090758a5f47b5f2bc2365432ccc918658563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d391a31030956f36530084d9bc73090758a5f47b5f2bc2365432ccc918658563->leave($__internal_d391a31030956f36530084d9bc73090758a5f47b5f2bc2365432ccc918658563_prof);

        
        $__internal_34fe6136d014e9bff1dd1298928edb130492fdcc6c82f570ff4e97dc13dc2294->leave($__internal_34fe6136d014e9bff1dd1298928edb130492fdcc6c82f570ff4e97dc13dc2294_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_af7f0ec9a939a8aafd5c7b843f286ffa940fed002e0337759e6e76dd4cbddfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7f0ec9a939a8aafd5c7b843f286ffa940fed002e0337759e6e76dd4cbddfc5->enter($__internal_af7f0ec9a939a8aafd5c7b843f286ffa940fed002e0337759e6e76dd4cbddfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f672d001f0aa71cb9fb16be87f35280cdfa4b5c36a35a0cb4d436faa92256ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f672d001f0aa71cb9fb16be87f35280cdfa4b5c36a35a0cb4d436faa92256ccf->enter($__internal_f672d001f0aa71cb9fb16be87f35280cdfa4b5c36a35a0cb4d436faa92256ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f672d001f0aa71cb9fb16be87f35280cdfa4b5c36a35a0cb4d436faa92256ccf->leave($__internal_f672d001f0aa71cb9fb16be87f35280cdfa4b5c36a35a0cb4d436faa92256ccf_prof);

        
        $__internal_af7f0ec9a939a8aafd5c7b843f286ffa940fed002e0337759e6e76dd4cbddfc5->leave($__internal_af7f0ec9a939a8aafd5c7b843f286ffa940fed002e0337759e6e76dd4cbddfc5_prof);

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
