<?php

/* @AQMArt/Categorie/add.html.twig */
class __TwigTemplate_4bfdd5c8b3e0b2cfdbf9d3c33a867051cc5ccea7d1dc64ba0fe1d58a35db5ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Categorie/add.html.twig", 1);
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
        $__internal_a7dbe6d13229340bccfb6ba59952902c8f81f54e6a639d9920413318dbe0c28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7dbe6d13229340bccfb6ba59952902c8f81f54e6a639d9920413318dbe0c28f->enter($__internal_a7dbe6d13229340bccfb6ba59952902c8f81f54e6a639d9920413318dbe0c28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/add.html.twig"));

        $__internal_3e32f7ed512414230417eb4e1426c8736395558ea123813c30cf83feae0ccdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e32f7ed512414230417eb4e1426c8736395558ea123813c30cf83feae0ccdf1->enter($__internal_3e32f7ed512414230417eb4e1426c8736395558ea123813c30cf83feae0ccdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7dbe6d13229340bccfb6ba59952902c8f81f54e6a639d9920413318dbe0c28f->leave($__internal_a7dbe6d13229340bccfb6ba59952902c8f81f54e6a639d9920413318dbe0c28f_prof);

        
        $__internal_3e32f7ed512414230417eb4e1426c8736395558ea123813c30cf83feae0ccdf1->leave($__internal_3e32f7ed512414230417eb4e1426c8736395558ea123813c30cf83feae0ccdf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f3bbd15309c9cd6e13095bf2ee96681b84f8653d386349c3daa8e1e42b99d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3bbd15309c9cd6e13095bf2ee96681b84f8653d386349c3daa8e1e42b99d03->enter($__internal_0f3bbd15309c9cd6e13095bf2ee96681b84f8653d386349c3daa8e1e42b99d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac389296951debed5f432c74ed63dfee29115924f3bcf9d655ee64dc538b2bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac389296951debed5f432c74ed63dfee29115924f3bcf9d655ee64dc538b2bea->enter($__internal_ac389296951debed5f432c74ed63dfee29115924f3bcf9d655ee64dc538b2bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"well\">
        <h2>Ajouter une catégorie</h2>
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
        
        $__internal_ac389296951debed5f432c74ed63dfee29115924f3bcf9d655ee64dc538b2bea->leave($__internal_ac389296951debed5f432c74ed63dfee29115924f3bcf9d655ee64dc538b2bea_prof);

        
        $__internal_0f3bbd15309c9cd6e13095bf2ee96681b84f8653d386349c3daa8e1e42b99d03->leave($__internal_0f3bbd15309c9cd6e13095bf2ee96681b84f8653d386349c3daa8e1e42b99d03_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Categorie/add.html.twig";
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
        <h2>Ajouter une catégorie</h2>
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
{% endblock %}", "@AQMArt/Categorie/add.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Categorie\\add.html.twig");
    }
}
