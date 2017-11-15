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
        $__internal_a01ea5d9a316e12542652284c4da252f0ca44c1d9b5e1a32fd98fa02a5afd9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01ea5d9a316e12542652284c4da252f0ca44c1d9b5e1a32fd98fa02a5afd9bc->enter($__internal_a01ea5d9a316e12542652284c4da252f0ca44c1d9b5e1a32fd98fa02a5afd9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/index.html.twig"));

        $__internal_282a92279d500763058ef513928bdb9b5a361aa9c5dd05bc6ee5b61a3c6d899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282a92279d500763058ef513928bdb9b5a361aa9c5dd05bc6ee5b61a3c6d899b->enter($__internal_282a92279d500763058ef513928bdb9b5a361aa9c5dd05bc6ee5b61a3c6d899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01ea5d9a316e12542652284c4da252f0ca44c1d9b5e1a32fd98fa02a5afd9bc->leave($__internal_a01ea5d9a316e12542652284c4da252f0ca44c1d9b5e1a32fd98fa02a5afd9bc_prof);

        
        $__internal_282a92279d500763058ef513928bdb9b5a361aa9c5dd05bc6ee5b61a3c6d899b->leave($__internal_282a92279d500763058ef513928bdb9b5a361aa9c5dd05bc6ee5b61a3c6d899b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23ab9e6c381e0793b076080ecb4452af5659d035843ce6537f1fae28475bdefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ab9e6c381e0793b076080ecb4452af5659d035843ce6537f1fae28475bdefb->enter($__internal_23ab9e6c381e0793b076080ecb4452af5659d035843ce6537f1fae28475bdefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52eb1f13694fd63fd03c35ba08dbca76b01b3e1625834d1725c8dfb827e79179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52eb1f13694fd63fd03c35ba08dbca76b01b3e1625834d1725c8dfb827e79179->enter($__internal_52eb1f13694fd63fd03c35ba08dbca76b01b3e1625834d1725c8dfb827e79179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52eb1f13694fd63fd03c35ba08dbca76b01b3e1625834d1725c8dfb827e79179->leave($__internal_52eb1f13694fd63fd03c35ba08dbca76b01b3e1625834d1725c8dfb827e79179_prof);

        
        $__internal_23ab9e6c381e0793b076080ecb4452af5659d035843ce6537f1fae28475bdefb->leave($__internal_23ab9e6c381e0793b076080ecb4452af5659d035843ce6537f1fae28475bdefb_prof);

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
