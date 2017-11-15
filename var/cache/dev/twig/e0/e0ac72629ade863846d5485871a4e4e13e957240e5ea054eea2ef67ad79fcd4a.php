<?php

/* AQMArtBundle:Categorie:index.html.twig */
class __TwigTemplate_901b277673fcd56b965a1dbb70c0c1e63909a5cdd8a3e025c0196dbcdd5afa34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Categorie:index.html.twig", 1);
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
        $__internal_857eb5beb56d7fa897f0729d3243cd09c2a7bab36f5e42cb4b2594d431f02e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857eb5beb56d7fa897f0729d3243cd09c2a7bab36f5e42cb4b2594d431f02e7b->enter($__internal_857eb5beb56d7fa897f0729d3243cd09c2a7bab36f5e42cb4b2594d431f02e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Categorie:index.html.twig"));

        $__internal_702f00ba8827e6a22b344acfbeb17eb07fd92f3103d8fed4eb64d1175b028ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702f00ba8827e6a22b344acfbeb17eb07fd92f3103d8fed4eb64d1175b028ad9->enter($__internal_702f00ba8827e6a22b344acfbeb17eb07fd92f3103d8fed4eb64d1175b028ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857eb5beb56d7fa897f0729d3243cd09c2a7bab36f5e42cb4b2594d431f02e7b->leave($__internal_857eb5beb56d7fa897f0729d3243cd09c2a7bab36f5e42cb4b2594d431f02e7b_prof);

        
        $__internal_702f00ba8827e6a22b344acfbeb17eb07fd92f3103d8fed4eb64d1175b028ad9->leave($__internal_702f00ba8827e6a22b344acfbeb17eb07fd92f3103d8fed4eb64d1175b028ad9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b39f84a1b33d93f9a722b9ee5ce1ffbbc27021b29957e537d082a06be9f54de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b39f84a1b33d93f9a722b9ee5ce1ffbbc27021b29957e537d082a06be9f54de->enter($__internal_3b39f84a1b33d93f9a722b9ee5ce1ffbbc27021b29957e537d082a06be9f54de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddc12b58f1889d045245deecd9039f8ee5081f64f6c67b92fa1a4c2bfa67f038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc12b58f1889d045245deecd9039f8ee5081f64f6c67b92fa1a4c2bfa67f038->enter($__internal_ddc12b58f1889d045245deecd9039f8ee5081f64f6c67b92fa1a4c2bfa67f038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddc12b58f1889d045245deecd9039f8ee5081f64f6c67b92fa1a4c2bfa67f038->leave($__internal_ddc12b58f1889d045245deecd9039f8ee5081f64f6c67b92fa1a4c2bfa67f038_prof);

        
        $__internal_3b39f84a1b33d93f9a722b9ee5ce1ffbbc27021b29957e537d082a06be9f54de->leave($__internal_3b39f84a1b33d93f9a722b9ee5ce1ffbbc27021b29957e537d082a06be9f54de_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Categorie:index.html.twig";
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
{% endblock %}", "AQMArtBundle:Categorie:index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Categorie/index.html.twig");
    }
}
