<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_846f4d6a5f140421227ef11888d3bc766854ea28cafa07c63abc4ef17a53a99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_29351d44539cb784fc52ea2430f1fea4f52a44458b5424060dbbe525373e6c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29351d44539cb784fc52ea2430f1fea4f52a44458b5424060dbbe525373e6c76->enter($__internal_29351d44539cb784fc52ea2430f1fea4f52a44458b5424060dbbe525373e6c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_dc7493c102ae28fe6e4bf8d4f594a6a4895945a08d1895d7790096b0b5b6df6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7493c102ae28fe6e4bf8d4f594a6a4895945a08d1895d7790096b0b5b6df6b->enter($__internal_dc7493c102ae28fe6e4bf8d4f594a6a4895945a08d1895d7790096b0b5b6df6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29351d44539cb784fc52ea2430f1fea4f52a44458b5424060dbbe525373e6c76->leave($__internal_29351d44539cb784fc52ea2430f1fea4f52a44458b5424060dbbe525373e6c76_prof);

        
        $__internal_dc7493c102ae28fe6e4bf8d4f594a6a4895945a08d1895d7790096b0b5b6df6b->leave($__internal_dc7493c102ae28fe6e4bf8d4f594a6a4895945a08d1895d7790096b0b5b6df6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e85eaaefe548a94206b9ad12bae2bd9bd9ff8643dc0dc1cb249cdf48244f481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e85eaaefe548a94206b9ad12bae2bd9bd9ff8643dc0dc1cb249cdf48244f481->enter($__internal_7e85eaaefe548a94206b9ad12bae2bd9bd9ff8643dc0dc1cb249cdf48244f481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60f35a584d69cdbdd80c22648649ed180eb32ef8b1569720a52b4efadd3a34a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f35a584d69cdbdd80c22648649ed180eb32ef8b1569720a52b4efadd3a34a9->enter($__internal_60f35a584d69cdbdd80c22648649ed180eb32ef8b1569720a52b4efadd3a34a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_60f35a584d69cdbdd80c22648649ed180eb32ef8b1569720a52b4efadd3a34a9->leave($__internal_60f35a584d69cdbdd80c22648649ed180eb32ef8b1569720a52b4efadd3a34a9_prof);

        
        $__internal_7e85eaaefe548a94206b9ad12bae2bd9bd9ff8643dc0dc1cb249cdf48244f481->leave($__internal_7e85eaaefe548a94206b9ad12bae2bd9bd9ff8643dc0dc1cb249cdf48244f481_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bafe17d7fe4cf50414bc857971bbf6bb705812e457be331eead1274a659874a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafe17d7fe4cf50414bc857971bbf6bb705812e457be331eead1274a659874a1->enter($__internal_bafe17d7fe4cf50414bc857971bbf6bb705812e457be331eead1274a659874a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9f4579553a05f29aea3b25c37ddff30a84af959e603d54e72222b8d62b5ebac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f4579553a05f29aea3b25c37ddff30a84af959e603d54e72222b8d62b5ebac->enter($__internal_e9f4579553a05f29aea3b25c37ddff30a84af959e603d54e72222b8d62b5ebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e9f4579553a05f29aea3b25c37ddff30a84af959e603d54e72222b8d62b5ebac->leave($__internal_e9f4579553a05f29aea3b25c37ddff30a84af959e603d54e72222b8d62b5ebac_prof);

        
        $__internal_bafe17d7fe4cf50414bc857971bbf6bb705812e457be331eead1274a659874a1->leave($__internal_bafe17d7fe4cf50414bc857971bbf6bb705812e457be331eead1274a659874a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
