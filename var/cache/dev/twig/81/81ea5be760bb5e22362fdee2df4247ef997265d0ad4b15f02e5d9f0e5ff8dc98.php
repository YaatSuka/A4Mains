<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f5da0b42d5cfbea48162dc655d361a2aac1f6ee45bf3628e8618e51d8780b706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5226f8ce05760fa49f0c8a9e21844514d494fb1dc84f568eb1ac2287de72af50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5226f8ce05760fa49f0c8a9e21844514d494fb1dc84f568eb1ac2287de72af50->enter($__internal_5226f8ce05760fa49f0c8a9e21844514d494fb1dc84f568eb1ac2287de72af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_63cd140298b3223f347f40c45a09c066ef2a604145170ce53918b7dc1a7d7fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cd140298b3223f347f40c45a09c066ef2a604145170ce53918b7dc1a7d7fe2->enter($__internal_63cd140298b3223f347f40c45a09c066ef2a604145170ce53918b7dc1a7d7fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5226f8ce05760fa49f0c8a9e21844514d494fb1dc84f568eb1ac2287de72af50->leave($__internal_5226f8ce05760fa49f0c8a9e21844514d494fb1dc84f568eb1ac2287de72af50_prof);

        
        $__internal_63cd140298b3223f347f40c45a09c066ef2a604145170ce53918b7dc1a7d7fe2->leave($__internal_63cd140298b3223f347f40c45a09c066ef2a604145170ce53918b7dc1a7d7fe2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_be72292e9aa88b72a2e4e010aa87cff3e65924f4792c9b60d18c33f9e7d392e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be72292e9aa88b72a2e4e010aa87cff3e65924f4792c9b60d18c33f9e7d392e9->enter($__internal_be72292e9aa88b72a2e4e010aa87cff3e65924f4792c9b60d18c33f9e7d392e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c43732d1633b9d4cbc921f94374f4394175b6e44beddfdc0e97e204764f87f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43732d1633b9d4cbc921f94374f4394175b6e44beddfdc0e97e204764f87f31->enter($__internal_c43732d1633b9d4cbc921f94374f4394175b6e44beddfdc0e97e204764f87f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_c43732d1633b9d4cbc921f94374f4394175b6e44beddfdc0e97e204764f87f31->leave($__internal_c43732d1633b9d4cbc921f94374f4394175b6e44beddfdc0e97e204764f87f31_prof);

        
        $__internal_be72292e9aa88b72a2e4e010aa87cff3e65924f4792c9b60d18c33f9e7d392e9->leave($__internal_be72292e9aa88b72a2e4e010aa87cff3e65924f4792c9b60d18c33f9e7d392e9_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef8e911937ebd942c2c5769a44a2cd2ba1aba849ac47299f64a9cdf3dcacb6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8e911937ebd942c2c5769a44a2cd2ba1aba849ac47299f64a9cdf3dcacb6eb->enter($__internal_ef8e911937ebd942c2c5769a44a2cd2ba1aba849ac47299f64a9cdf3dcacb6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c258d4439f9a0a121984aad3b5616dc0c21ed73563d561b5bc9b2e8a935779bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c258d4439f9a0a121984aad3b5616dc0c21ed73563d561b5bc9b2e8a935779bf->enter($__internal_c258d4439f9a0a121984aad3b5616dc0c21ed73563d561b5bc9b2e8a935779bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_c258d4439f9a0a121984aad3b5616dc0c21ed73563d561b5bc9b2e8a935779bf->leave($__internal_c258d4439f9a0a121984aad3b5616dc0c21ed73563d561b5bc9b2e8a935779bf_prof);

        
        $__internal_ef8e911937ebd942c2c5769a44a2cd2ba1aba849ac47299f64a9cdf3dcacb6eb->leave($__internal_ef8e911937ebd942c2c5769a44a2cd2ba1aba849ac47299f64a9cdf3dcacb6eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  89 => 14,  78 => 16,  75 => 14,  72 => 12,  63 => 9,  58 => 8,  53 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, message in app.session.flashbag.all() %}
        <div class=\"alert alert-{{ key }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
