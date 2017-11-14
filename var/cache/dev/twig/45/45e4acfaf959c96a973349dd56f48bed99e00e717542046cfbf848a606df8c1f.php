<?php

/* AQMUserBundle::layout.html.twig */
class __TwigTemplate_8c2e0fafffacfbf199115b0a68f2aacf8a6e1b4d9e3117c0958f5b2b6670e997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMUserBundle::layout.html.twig", 1);
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
        $__internal_6899901b7ed4ae9a5e7b8b782965c920ecdf72e41b84c65fd650c665ec1e07e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6899901b7ed4ae9a5e7b8b782965c920ecdf72e41b84c65fd650c665ec1e07e1->enter($__internal_6899901b7ed4ae9a5e7b8b782965c920ecdf72e41b84c65fd650c665ec1e07e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMUserBundle::layout.html.twig"));

        $__internal_48dd6716db2613020c76f1f7e98f615dbe0803cd3c7b5afc88cab16ce5175919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dd6716db2613020c76f1f7e98f615dbe0803cd3c7b5afc88cab16ce5175919->enter($__internal_48dd6716db2613020c76f1f7e98f615dbe0803cd3c7b5afc88cab16ce5175919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6899901b7ed4ae9a5e7b8b782965c920ecdf72e41b84c65fd650c665ec1e07e1->leave($__internal_6899901b7ed4ae9a5e7b8b782965c920ecdf72e41b84c65fd650c665ec1e07e1_prof);

        
        $__internal_48dd6716db2613020c76f1f7e98f615dbe0803cd3c7b5afc88cab16ce5175919->leave($__internal_48dd6716db2613020c76f1f7e98f615dbe0803cd3c7b5afc88cab16ce5175919_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_52639c76a1d90461131620e5e3de5e45937863dd93fd6c636861f0c62a094ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52639c76a1d90461131620e5e3de5e45937863dd93fd6c636861f0c62a094ee1->enter($__internal_52639c76a1d90461131620e5e3de5e45937863dd93fd6c636861f0c62a094ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5829e41cb3923a7da9baea0f89200eac635acbfc22e7342da44991082b2bbd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5829e41cb3923a7da9baea0f89200eac635acbfc22e7342da44991082b2bbd9b->enter($__internal_5829e41cb3923a7da9baea0f89200eac635acbfc22e7342da44991082b2bbd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5829e41cb3923a7da9baea0f89200eac635acbfc22e7342da44991082b2bbd9b->leave($__internal_5829e41cb3923a7da9baea0f89200eac635acbfc22e7342da44991082b2bbd9b_prof);

        
        $__internal_52639c76a1d90461131620e5e3de5e45937863dd93fd6c636861f0c62a094ee1->leave($__internal_52639c76a1d90461131620e5e3de5e45937863dd93fd6c636861f0c62a094ee1_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_595f53797b5d5ddf977041f0124a87c55b390030b04f5d0f4c273ab638186b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595f53797b5d5ddf977041f0124a87c55b390030b04f5d0f4c273ab638186b55->enter($__internal_595f53797b5d5ddf977041f0124a87c55b390030b04f5d0f4c273ab638186b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3b00673b703039fa2796f431a8c7965fc936bfce27dc93aa45fcfb851dcb354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b00673b703039fa2796f431a8c7965fc936bfce27dc93aa45fcfb851dcb354->enter($__internal_d3b00673b703039fa2796f431a8c7965fc936bfce27dc93aa45fcfb851dcb354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_d3b00673b703039fa2796f431a8c7965fc936bfce27dc93aa45fcfb851dcb354->leave($__internal_d3b00673b703039fa2796f431a8c7965fc936bfce27dc93aa45fcfb851dcb354_prof);

        
        $__internal_595f53797b5d5ddf977041f0124a87c55b390030b04f5d0f4c273ab638186b55->leave($__internal_595f53797b5d5ddf977041f0124a87c55b390030b04f5d0f4c273ab638186b55_prof);

    }

    public function getTemplateName()
    {
        return "AQMUserBundle::layout.html.twig";
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

{% endblock %}", "AQMUserBundle::layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\UserBundle/Resources/views/layout.html.twig");
    }
}
