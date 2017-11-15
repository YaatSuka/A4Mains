<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_9a9c167e78ab28a5630b2b92d2b11de6357f10e55707022750b1fcd7f33153ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52b9845383de9a2f73be4c7298d090daf8f3b6e0a3ed4d02a3646ef645547b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b9845383de9a2f73be4c7298d090daf8f3b6e0a3ed4d02a3646ef645547b5f->enter($__internal_52b9845383de9a2f73be4c7298d090daf8f3b6e0a3ed4d02a3646ef645547b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_1a2e6ddf0b82174688abbe05fc88380492cfc7da9ba776382fd2075f23dc6711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2e6ddf0b82174688abbe05fc88380492cfc7da9ba776382fd2075f23dc6711->enter($__internal_1a2e6ddf0b82174688abbe05fc88380492cfc7da9ba776382fd2075f23dc6711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b9845383de9a2f73be4c7298d090daf8f3b6e0a3ed4d02a3646ef645547b5f->leave($__internal_52b9845383de9a2f73be4c7298d090daf8f3b6e0a3ed4d02a3646ef645547b5f_prof);

        
        $__internal_1a2e6ddf0b82174688abbe05fc88380492cfc7da9ba776382fd2075f23dc6711->leave($__internal_1a2e6ddf0b82174688abbe05fc88380492cfc7da9ba776382fd2075f23dc6711_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51413b8eacb7600ffd6dd90803f9f3a5f130a6aebb2e21ed23dcae61230ebcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51413b8eacb7600ffd6dd90803f9f3a5f130a6aebb2e21ed23dcae61230ebcae->enter($__internal_51413b8eacb7600ffd6dd90803f9f3a5f130a6aebb2e21ed23dcae61230ebcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d3f7896933bf91e9290468f5bdc7889a76d4268561ff0f68d301e1b343beeea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3f7896933bf91e9290468f5bdc7889a76d4268561ff0f68d301e1b343beeea->enter($__internal_6d3f7896933bf91e9290468f5bdc7889a76d4268561ff0f68d301e1b343beeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6d3f7896933bf91e9290468f5bdc7889a76d4268561ff0f68d301e1b343beeea->leave($__internal_6d3f7896933bf91e9290468f5bdc7889a76d4268561ff0f68d301e1b343beeea_prof);

        
        $__internal_51413b8eacb7600ffd6dd90803f9f3a5f130a6aebb2e21ed23dcae61230ebcae->leave($__internal_51413b8eacb7600ffd6dd90803f9f3a5f130a6aebb2e21ed23dcae61230ebcae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
