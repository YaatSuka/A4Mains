<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0d7c490eb48b96e44bf2dca197a8681ba506dd387d5e9d59f197503e73967822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_a69077eddf574da7744fbf6faa4fad2a27ddf532c61a7addf25f132d0a86e272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69077eddf574da7744fbf6faa4fad2a27ddf532c61a7addf25f132d0a86e272->enter($__internal_a69077eddf574da7744fbf6faa4fad2a27ddf532c61a7addf25f132d0a86e272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_15daf2d6a68099e54dc7d3916b1d8595c12b8237b00cb436b060fcd3a0db2d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15daf2d6a68099e54dc7d3916b1d8595c12b8237b00cb436b060fcd3a0db2d8f->enter($__internal_15daf2d6a68099e54dc7d3916b1d8595c12b8237b00cb436b060fcd3a0db2d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a69077eddf574da7744fbf6faa4fad2a27ddf532c61a7addf25f132d0a86e272->leave($__internal_a69077eddf574da7744fbf6faa4fad2a27ddf532c61a7addf25f132d0a86e272_prof);

        
        $__internal_15daf2d6a68099e54dc7d3916b1d8595c12b8237b00cb436b060fcd3a0db2d8f->leave($__internal_15daf2d6a68099e54dc7d3916b1d8595c12b8237b00cb436b060fcd3a0db2d8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5a9ae66e295344b722e21f4ad7d21b798bc4220c3063d12675d90db104dba20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a9ae66e295344b722e21f4ad7d21b798bc4220c3063d12675d90db104dba20->enter($__internal_e5a9ae66e295344b722e21f4ad7d21b798bc4220c3063d12675d90db104dba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc38c88b4122b0d837f61ae1f87000608db8be3e599fb2c93ca22288025b510c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc38c88b4122b0d837f61ae1f87000608db8be3e599fb2c93ca22288025b510c->enter($__internal_bc38c88b4122b0d837f61ae1f87000608db8be3e599fb2c93ca22288025b510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bc38c88b4122b0d837f61ae1f87000608db8be3e599fb2c93ca22288025b510c->leave($__internal_bc38c88b4122b0d837f61ae1f87000608db8be3e599fb2c93ca22288025b510c_prof);

        
        $__internal_e5a9ae66e295344b722e21f4ad7d21b798bc4220c3063d12675d90db104dba20->leave($__internal_e5a9ae66e295344b722e21f4ad7d21b798bc4220c3063d12675d90db104dba20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef93ee5be56310f07cc7e58aa3d3f6696240893c2fb043eb0469bd3b94aa05cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef93ee5be56310f07cc7e58aa3d3f6696240893c2fb043eb0469bd3b94aa05cd->enter($__internal_ef93ee5be56310f07cc7e58aa3d3f6696240893c2fb043eb0469bd3b94aa05cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6af6cbcb956442fc6a69169d71017fafa3bb982b11f5387545e66a2e41b658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6af6cbcb956442fc6a69169d71017fafa3bb982b11f5387545e66a2e41b658a->enter($__internal_f6af6cbcb956442fc6a69169d71017fafa3bb982b11f5387545e66a2e41b658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6af6cbcb956442fc6a69169d71017fafa3bb982b11f5387545e66a2e41b658a->leave($__internal_f6af6cbcb956442fc6a69169d71017fafa3bb982b11f5387545e66a2e41b658a_prof);

        
        $__internal_ef93ee5be56310f07cc7e58aa3d3f6696240893c2fb043eb0469bd3b94aa05cd->leave($__internal_ef93ee5be56310f07cc7e58aa3d3f6696240893c2fb043eb0469bd3b94aa05cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
