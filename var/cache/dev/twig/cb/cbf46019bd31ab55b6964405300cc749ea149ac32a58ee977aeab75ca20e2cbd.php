<?php

/* @AQMArt/Categorie/edit.html.twig */
class __TwigTemplate_eff0c1a3281f8acc1dbae52b919a24fe69674443110c9132a4d06c0141f48c85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Categorie/edit.html.twig", 1);
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
        $__internal_73f7049cb204ed12fac3022e5aae358767080d9e66f349255c7c88c1e3a8a90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f7049cb204ed12fac3022e5aae358767080d9e66f349255c7c88c1e3a8a90a->enter($__internal_73f7049cb204ed12fac3022e5aae358767080d9e66f349255c7c88c1e3a8a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/edit.html.twig"));

        $__internal_2293347929d29ef395754359774ade8f5f03529393d8e8cb9096f4b4e380d262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2293347929d29ef395754359774ade8f5f03529393d8e8cb9096f4b4e380d262->enter($__internal_2293347929d29ef395754359774ade8f5f03529393d8e8cb9096f4b4e380d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f7049cb204ed12fac3022e5aae358767080d9e66f349255c7c88c1e3a8a90a->leave($__internal_73f7049cb204ed12fac3022e5aae358767080d9e66f349255c7c88c1e3a8a90a_prof);

        
        $__internal_2293347929d29ef395754359774ade8f5f03529393d8e8cb9096f4b4e380d262->leave($__internal_2293347929d29ef395754359774ade8f5f03529393d8e8cb9096f4b4e380d262_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c3e08eb24f5b0e1f2a48815c7d78e98108c97d6f288e9a8b12cb386154992ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3e08eb24f5b0e1f2a48815c7d78e98108c97d6f288e9a8b12cb386154992ff->enter($__internal_0c3e08eb24f5b0e1f2a48815c7d78e98108c97d6f288e9a8b12cb386154992ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_103f38c0e931612bea3bbba6e4ef79eaeec19b195603ef82c773bf3e8987df71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103f38c0e931612bea3bbba6e4ef79eaeec19b195603ef82c773bf3e8987df71->enter($__internal_103f38c0e931612bea3bbba6e4ef79eaeec19b195603ef82c773bf3e8987df71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_103f38c0e931612bea3bbba6e4ef79eaeec19b195603ef82c773bf3e8987df71->leave($__internal_103f38c0e931612bea3bbba6e4ef79eaeec19b195603ef82c773bf3e8987df71_prof);

        
        $__internal_0c3e08eb24f5b0e1f2a48815c7d78e98108c97d6f288e9a8b12cb386154992ff->leave($__internal_0c3e08eb24f5b0e1f2a48815c7d78e98108c97d6f288e9a8b12cb386154992ff_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Categorie/edit.html.twig";
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
{% endblock %}", "@AQMArt/Categorie/edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Categorie\\edit.html.twig");
    }
}
