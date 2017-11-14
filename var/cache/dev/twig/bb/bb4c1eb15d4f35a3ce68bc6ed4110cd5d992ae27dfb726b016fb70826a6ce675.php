<?php

/* AQMArtBundle:Categorie:edit.html.twig */
class __TwigTemplate_335c90865d2f73cc965266f2b06900ac6a120a028d78696ab0ed6219b458007c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Categorie:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b60e3c076a74668df6c6060810a19e811ae163e4310e4a1801d05cf833dcbbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b60e3c076a74668df6c6060810a19e811ae163e4310e4a1801d05cf833dcbbe->enter($__internal_7b60e3c076a74668df6c6060810a19e811ae163e4310e4a1801d05cf833dcbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Categorie:edit.html.twig"));

        $__internal_a1bff374a0b6cafd482c25aa7083e0c01a9c3061110fd02041851e18b1174521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bff374a0b6cafd482c25aa7083e0c01a9c3061110fd02041851e18b1174521->enter($__internal_a1bff374a0b6cafd482c25aa7083e0c01a9c3061110fd02041851e18b1174521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b60e3c076a74668df6c6060810a19e811ae163e4310e4a1801d05cf833dcbbe->leave($__internal_7b60e3c076a74668df6c6060810a19e811ae163e4310e4a1801d05cf833dcbbe_prof);

        
        $__internal_a1bff374a0b6cafd482c25aa7083e0c01a9c3061110fd02041851e18b1174521->leave($__internal_a1bff374a0b6cafd482c25aa7083e0c01a9c3061110fd02041851e18b1174521_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_971ffa9bbddbc112eda8172dced82f4a56b0fe0488f22d08a060b99c1754cf7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971ffa9bbddbc112eda8172dced82f4a56b0fe0488f22d08a060b99c1754cf7a->enter($__internal_971ffa9bbddbc112eda8172dced82f4a56b0fe0488f22d08a060b99c1754cf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b25dd6c8db20614817786d4d05e5f67fcecd9d1601b62d423a3cc68858ce2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b25dd6c8db20614817786d4d05e5f67fcecd9d1601b62d423a3cc68858ce2da->enter($__internal_1b25dd6c8db20614817786d4d05e5f67fcecd9d1601b62d423a3cc68858ce2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"well\">
        <h2>Modifier une catégorie</h2>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "libelle", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Ordre"));
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "ordre", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "ordre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group form-inline\">
            <div class=\"col-sm-12 text-right actions\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "submit", array()), 'widget');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "reset", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>
";
        
        $__internal_1b25dd6c8db20614817786d4d05e5f67fcecd9d1601b62d423a3cc68858ce2da->leave($__internal_1b25dd6c8db20614817786d4d05e5f67fcecd9d1601b62d423a3cc68858ce2da_prof);

        
        $__internal_971ffa9bbddbc112eda8172dced82f4a56b0fe0488f22d08a060b99c1754cf7a->leave($__internal_971ffa9bbddbc112eda8172dced82f4a56b0fe0488f22d08a060b99c1754cf7a_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  99 => 25,  95 => 24,  87 => 19,  82 => 17,  78 => 16,  71 => 12,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AQMArtBundle::layout.html.twig' %}

{% block body %}
    <div class=\"well\">
        <h2>Modifier une catégorie</h2>
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
        {{ form_errors(form) }}
        <div class=\"form-group\">
            {{ form_label(form.libelle, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.libelle) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.libelle, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.libelle, \"Ordre\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.ordre) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.ordre, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group form-inline\">
            <div class=\"col-sm-12 text-right actions\">
                {{ form_widget(form.submit) }}
                {{ form_widget(form.reset) }}
            </div>
        </div>
        {{ form_rest(form) }}
    </div>
{% endblock %}", "AQMArtBundle:Categorie:edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Categorie/edit.html.twig");
    }
}
