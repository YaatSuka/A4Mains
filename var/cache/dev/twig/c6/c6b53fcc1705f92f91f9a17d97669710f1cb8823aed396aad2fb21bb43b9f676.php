<?php

/* @AQMArt/Article/index.html.twig */
class __TwigTemplate_4f1319fd2ace7bfaa926184987a7b8b262c15ca73ab5291a8fa41e0eeed9d7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@AQMArt/Article/index.html.twig", 1);
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
        $__internal_4c41f76dff508b31f36ea33f5ff6745b75fa6ac9551b3a493e8d4c5ed938e1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c41f76dff508b31f36ea33f5ff6745b75fa6ac9551b3a493e8d4c5ed938e1f5->enter($__internal_4c41f76dff508b31f36ea33f5ff6745b75fa6ac9551b3a493e8d4c5ed938e1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Article/index.html.twig"));

        $__internal_bc56359ee2f26fed3aedefdb627ad43e998fecd7a84394cc01c4d84f0dece915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc56359ee2f26fed3aedefdb627ad43e998fecd7a84394cc01c4d84f0dece915->enter($__internal_bc56359ee2f26fed3aedefdb627ad43e998fecd7a84394cc01c4d84f0dece915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c41f76dff508b31f36ea33f5ff6745b75fa6ac9551b3a493e8d4c5ed938e1f5->leave($__internal_4c41f76dff508b31f36ea33f5ff6745b75fa6ac9551b3a493e8d4c5ed938e1f5_prof);

        
        $__internal_bc56359ee2f26fed3aedefdb627ad43e998fecd7a84394cc01c4d84f0dece915->leave($__internal_bc56359ee2f26fed3aedefdb627ad43e998fecd7a84394cc01c4d84f0dece915_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0464bbe879ec43d2f13babc155ee31b366408945bf38ca95ba07f5bc59e5efe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0464bbe879ec43d2f13babc155ee31b366408945bf38ca95ba07f5bc59e5efe4->enter($__internal_0464bbe879ec43d2f13babc155ee31b366408945bf38ca95ba07f5bc59e5efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44e04121262c6ddd5492b8da4cb93f442af3856af4a362f541e3eb6ad0a37a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e04121262c6ddd5492b8da4cb93f442af3856af4a362f541e3eb6ad0a37a1f->enter($__internal_44e04121262c6ddd5492b8da4cb93f442af3856af4a362f541e3eb6ad0a37a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44e04121262c6ddd5492b8da4cb93f442af3856af4a362f541e3eb6ad0a37a1f->leave($__internal_44e04121262c6ddd5492b8da4cb93f442af3856af4a362f541e3eb6ad0a37a1f_prof);

        
        $__internal_0464bbe879ec43d2f13babc155ee31b366408945bf38ca95ba07f5bc59e5efe4->leave($__internal_0464bbe879ec43d2f13babc155ee31b366408945bf38ca95ba07f5bc59e5efe4_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Article/index.html.twig";
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
{% endblock %}", "@AQMArt/Article/index.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Article\\index.html.twig");
    }
}
