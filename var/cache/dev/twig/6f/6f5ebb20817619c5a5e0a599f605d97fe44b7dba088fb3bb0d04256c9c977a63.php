<?php

/* AQMArtBundle:Article:add.html.twig */
class __TwigTemplate_72c09f7b11d32806c8d84d221f70895e4d65cd3e89624f45766909a24fbf85ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Article:add.html.twig", 1);
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
        $__internal_e54e25cb0d5a8383302df7447227ba3ae99e89d20ff727b6e3430bb13acf3a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54e25cb0d5a8383302df7447227ba3ae99e89d20ff727b6e3430bb13acf3a25->enter($__internal_e54e25cb0d5a8383302df7447227ba3ae99e89d20ff727b6e3430bb13acf3a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Article:add.html.twig"));

        $__internal_9f0d7193a02b5a9878fdc354ea4d76ef7cb8049f5c3322b3dcd005bca2bc8893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0d7193a02b5a9878fdc354ea4d76ef7cb8049f5c3322b3dcd005bca2bc8893->enter($__internal_9f0d7193a02b5a9878fdc354ea4d76ef7cb8049f5c3322b3dcd005bca2bc8893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e54e25cb0d5a8383302df7447227ba3ae99e89d20ff727b6e3430bb13acf3a25->leave($__internal_e54e25cb0d5a8383302df7447227ba3ae99e89d20ff727b6e3430bb13acf3a25_prof);

        
        $__internal_9f0d7193a02b5a9878fdc354ea4d76ef7cb8049f5c3322b3dcd005bca2bc8893->leave($__internal_9f0d7193a02b5a9878fdc354ea4d76ef7cb8049f5c3322b3dcd005bca2bc8893_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b080c1af721279635df659e1781ebdca6a77ef416dbc7ef38b45fa6622e46b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b080c1af721279635df659e1781ebdca6a77ef416dbc7ef38b45fa6622e46b82->enter($__internal_b080c1af721279635df659e1781ebdca6a77ef416dbc7ef38b45fa6622e46b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4880f33e0aa5fa73292eb4451bfc94a10e706a14be4074a823bbe506180474c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4880f33e0aa5fa73292eb4451bfc94a10e706a14be4074a823bbe506180474c7->enter($__internal_4880f33e0aa5fa73292eb4451bfc94a10e706a14be4074a823bbe506180474c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"well\">
        <h2>Ajouter un article</h2>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "nom", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description"));
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "description", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "prix", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prix"));
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "prix", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "categorie", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Catégorie"));
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "categorie", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "etat", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Etat"));
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "etat", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "image", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Image"));
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "image", array()), "file", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group form-inline\">
            <div class=\"col-sm-12 text-right actions\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "submit", array()), 'widget');
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "reset", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>
";
        
        $__internal_4880f33e0aa5fa73292eb4451bfc94a10e706a14be4074a823bbe506180474c7->leave($__internal_4880f33e0aa5fa73292eb4451bfc94a10e706a14be4074a823bbe506180474c7_prof);

        
        $__internal_b080c1af721279635df659e1781ebdca6a77ef416dbc7ef38b45fa6622e46b82->leave($__internal_b080c1af721279635df659e1781ebdca6a77ef416dbc7ef38b45fa6622e46b82_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  163 => 53,  159 => 52,  151 => 47,  146 => 45,  142 => 44,  135 => 40,  130 => 38,  126 => 37,  119 => 33,  114 => 31,  110 => 30,  103 => 26,  98 => 24,  94 => 23,  87 => 19,  82 => 17,  78 => 16,  71 => 12,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AQMArtBundle::layout.html.twig' %}

{% block body %}
    <div class=\"well\">
        <h2>Ajouter un article</h2>
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
        {{ form_errors(form) }}
        <div class=\"form-group\">
            {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.nom) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.description, \"Description\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.description) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.prix, \"Prix\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.prix) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.categorie, \"Catégorie\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.categorie) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.etat, \"Etat\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.etat) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.image.file, \"Image\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.image.file) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form.image.file, {'attr': {'class': 'form-control'}}) }}
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
{% endblock %}", "AQMArtBundle:Article:add.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Article/add.html.twig");
    }
}
