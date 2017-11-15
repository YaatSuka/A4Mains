<?php

/* AQMArtBundle:Article:index.html.twig */
class __TwigTemplate_314f32a6b5151e3eb61f7aaad096e233c69f309608c09be22273f45f20630638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Article:index.html.twig", 1);
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
        $__internal_a0a564461275e4902b1bd85db6f36b12b87aeea8a04fd0a3c3b3d60b9ebaca45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a564461275e4902b1bd85db6f36b12b87aeea8a04fd0a3c3b3d60b9ebaca45->enter($__internal_a0a564461275e4902b1bd85db6f36b12b87aeea8a04fd0a3c3b3d60b9ebaca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Article:index.html.twig"));

        $__internal_5bf3545cdd89ac2f5b024da21d7599cd7bcf0a154c94e451d667ba02ec2b7946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf3545cdd89ac2f5b024da21d7599cd7bcf0a154c94e451d667ba02ec2b7946->enter($__internal_5bf3545cdd89ac2f5b024da21d7599cd7bcf0a154c94e451d667ba02ec2b7946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a564461275e4902b1bd85db6f36b12b87aeea8a04fd0a3c3b3d60b9ebaca45->leave($__internal_a0a564461275e4902b1bd85db6f36b12b87aeea8a04fd0a3c3b3d60b9ebaca45_prof);

        
        $__internal_5bf3545cdd89ac2f5b024da21d7599cd7bcf0a154c94e451d667ba02ec2b7946->leave($__internal_5bf3545cdd89ac2f5b024da21d7599cd7bcf0a154c94e451d667ba02ec2b7946_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2221ca8c71a5d11c2b64b87e348eb6de1d5dd5c35a696eb69d28104a46e8d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2221ca8c71a5d11c2b64b87e348eb6de1d5dd5c35a696eb69d28104a46e8d6f->enter($__internal_f2221ca8c71a5d11c2b64b87e348eb6de1d5dd5c35a696eb69d28104a46e8d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d8637800c8e9dc1ee7ca58440505bd4ecfc68e6e494c6870fd1f39396a4eecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8637800c8e9dc1ee7ca58440505bd4ecfc68e6e494c6870fd1f39396a4eecc->enter($__internal_7d8637800c8e9dc1ee7ca58440505bd4ecfc68e6e494c6870fd1f39396a4eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"well\">
        <h2>Articles</h2>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_articles_add");
        echo "\" class=\"btn btn-success\">Ajouter un article</a>
        <table class=\"table table-striped\">
            <thead>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Image</th>
                <th>Actions</th>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "categorie", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "prix", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "etat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    <td>
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"40px\"/>
                    </td>
                    <td>
                        <a class=\"btn btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_articles_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Modifer</a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_articles_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_7d8637800c8e9dc1ee7ca58440505bd4ecfc68e6e494c6870fd1f39396a4eecc->leave($__internal_7d8637800c8e9dc1ee7ca58440505bd4ecfc68e6e494c6870fd1f39396a4eecc_prof);

        
        $__internal_f2221ca8c71a5d11c2b64b87e348eb6de1d5dd5c35a696eb69d28104a46e8d6f->leave($__internal_f2221ca8c71a5d11c2b64b87e348eb6de1d5dd5c35a696eb69d28104a46e8d6f_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  108 => 30,  104 => 29,  96 => 26,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  72 => 19,  68 => 18,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AQMArtBundle::layout.html.twig' %}

{% block body %}
    <div class=\"well\">
        <h2>Articles</h2>
        <a href=\"{{ path('aqm_art_articles_add') }}\" class=\"btn btn-success\">Ajouter un article</a>
        <table class=\"table table-striped\">
            <thead>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Image</th>
                <th>Actions</th>
            </thead>
            <tbody>
            {% for article in articles %}
                <tr>
                    <td>{{ article.nom }}</td>
                    <td>{{ article.categorie.libelle }}</td>
                    <td>{{ article.description }}</td>
                    <td>{{ article.prix }}</td>
                    <td>{{ article.etat.libelle }}</td>
                    <td>
                        <img src=\"{{ asset(article.image.webPath) }}\" alt=\"{{ article.image.alt }}\" width=\"40px\"/>
                    </td>
                    <td>
                        <a class=\"btn btn-success\" href=\"{{ path('aqm_art_articles_edit', { 'id': article.id }) }}\">Modifer</a>
                        <a class=\"btn btn-danger\" href=\"{{ path('aqm_art_articles_delete', { 'id': article.id }) }}\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "AQMArtBundle:Article:index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/Article/index.html.twig");
    }
}
