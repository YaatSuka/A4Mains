<?php

/* @AQMArt/Categorie/index.html.twig */
class __TwigTemplate_719b581ced108e58734ca3b24c320bcea7e7aad0a1cc7555e9ed4589a31c943a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Categorie/index.html.twig", 1);
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
        $__internal_5f70490cfbfa5527daac25a342124afbc5799d9e0ea3319007240dce91d615de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f70490cfbfa5527daac25a342124afbc5799d9e0ea3319007240dce91d615de->enter($__internal_5f70490cfbfa5527daac25a342124afbc5799d9e0ea3319007240dce91d615de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/index.html.twig"));

        $__internal_bd12ec848c6f473827cf2c702e4454889d06ec0591932a1a316033ddd9ddc9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd12ec848c6f473827cf2c702e4454889d06ec0591932a1a316033ddd9ddc9c7->enter($__internal_bd12ec848c6f473827cf2c702e4454889d06ec0591932a1a316033ddd9ddc9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f70490cfbfa5527daac25a342124afbc5799d9e0ea3319007240dce91d615de->leave($__internal_5f70490cfbfa5527daac25a342124afbc5799d9e0ea3319007240dce91d615de_prof);

        
        $__internal_bd12ec848c6f473827cf2c702e4454889d06ec0591932a1a316033ddd9ddc9c7->leave($__internal_bd12ec848c6f473827cf2c702e4454889d06ec0591932a1a316033ddd9ddc9c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d6ebae5df52259d748a0a95983ce67628515e404171013f8b6d7ce27a12601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d6ebae5df52259d748a0a95983ce67628515e404171013f8b6d7ce27a12601->enter($__internal_d2d6ebae5df52259d748a0a95983ce67628515e404171013f8b6d7ce27a12601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c27c849c1a631f3b488c678517c5bc25d49bd57261e28ce57418d72f216bc5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27c849c1a631f3b488c678517c5bc25d49bd57261e28ce57418d72f216bc5ff->enter($__internal_c27c849c1a631f3b488c678517c5bc25d49bd57261e28ce57418d72f216bc5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"well\">
        <h2>Catégories</h2>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_categories_add");
        echo "\" class=\"btn btn-success\">Ajouter une catégorie</a>
        <table class=\"table table-striped\">
            <thead>
                <th>Nom</th>
                <th>Ordre</th>
                <th>Actions</th>
            </thead>
            <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "ordre", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-success\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_categories_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()))), "html", null, true);
            echo "\">Modifer</a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_categories_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_c27c849c1a631f3b488c678517c5bc25d49bd57261e28ce57418d72f216bc5ff->leave($__internal_c27c849c1a631f3b488c678517c5bc25d49bd57261e28ce57418d72f216bc5ff_prof);

        
        $__internal_d2d6ebae5df52259d748a0a95983ce67628515e404171013f8b6d7ce27a12601->leave($__internal_d2d6ebae5df52259d748a0a95983ce67628515e404171013f8b6d7ce27a12601_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AQMArtBundle::layout.html.twig' %}

{% block body %}
    <div class=\"well\">
        <h2>Catégories</h2>
        <a href=\"{{ path('aqm_art_categories_add') }}\" class=\"btn btn-success\">Ajouter une catégorie</a>
        <table class=\"table table-striped\">
            <thead>
                <th>Nom</th>
                <th>Ordre</th>
                <th>Actions</th>
            </thead>
            <tbody>
            {% for categorie in categories %}
                <tr>
                    <td>{{ categorie.libelle }}</td>
                    <td>{{ categorie.ordre }}</td>
                    <td>
                        <a class=\"btn btn-success\" href=\"{{ path('aqm_art_categories_edit', { 'id': categorie.id }) }}\">Modifer</a>
                        <a class=\"btn btn-danger\" href=\"{{ path('aqm_art_categories_delete', { 'id': categorie.id }) }}\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "@AQMArt/Categorie/index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Categorie\\index.html.twig");
    }
}
