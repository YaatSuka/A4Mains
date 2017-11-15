<?php

/* @AQMArt/Menu/menu.html.twig */
class __TwigTemplate_7ab4332ffe9da84734c1e37cfc024bebbab3f4301522eecf6b26ae17006ac9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aebaaef10f52ec6b8f139c7e60ba5b2fc4c2bb6a84037cbf13dbbfee6b4951c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebaaef10f52ec6b8f139c7e60ba5b2fc4c2bb6a84037cbf13dbbfee6b4951c5->enter($__internal_aebaaef10f52ec6b8f139c7e60ba5b2fc4c2bb6a84037cbf13dbbfee6b4951c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Menu/menu.html.twig"));

        $__internal_6247e3aaa3aa64ca61d8315c91863a2945b08a1c0268c84bdf5bf771f3cc1f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6247e3aaa3aa64ca61d8315c91863a2945b08a1c0268c84bdf5bf771f3cc1f0a->enter($__internal_6247e3aaa3aa64ca61d8315c91863a2945b08a1c0268c84bdf5bf771f3cc1f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/Menu/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"bandeau\">
        <h1>À 4 Mains</h1> ";
        // line 4
        echo "    </div>
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\" title=\"Acceuil\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_homepage");
        echo "\"><i class=\"fa fa-home fa-2x\" aria-hidden=\"true\"></i></a></li>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 9
            echo "                <li><a href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
        ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_articles");
            echo "\">Gérer les articles</a></li>
                <li><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_categories");
            echo "\">Gérer les catégories</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        Mon compte <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"dropdown-header\">Connecté en tant que ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                        <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aqm_art_admin_profil_edit");
            echo "\">Editer mon profil</a></li>
                        <li><a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        ";
        }
        // line 28
        echo "    </div>
</nav>";
        
        $__internal_aebaaef10f52ec6b8f139c7e60ba5b2fc4c2bb6a84037cbf13dbbfee6b4951c5->leave($__internal_aebaaef10f52ec6b8f139c7e60ba5b2fc4c2bb6a84037cbf13dbbfee6b4951c5_prof);

        
        $__internal_6247e3aaa3aa64ca61d8315c91863a2945b08a1c0268c84bdf5bf771f3cc1f0a->leave($__internal_6247e3aaa3aa64ca61d8315c91863a2945b08a1c0268c84bdf5bf771f3cc1f0a_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/Menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  80 => 23,  76 => 22,  72 => 21,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  42 => 9,  38 => 8,  34 => 7,  29 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
    <div class=\"bandeau\">
        <h1>À 4 Mains</h1> {# Remplacer par image logo => Elodie ? #}
    </div>
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\" title=\"Acceuil\"><a href=\"{{ path('aqm_art_homepage') }}\"><i class=\"fa fa-home fa-2x\" aria-hidden=\"true\"></i></a></li>
            {% for categorie in categories %}
                <li><a href=\"#\">{{ categorie.libelle }}</a></li>
            {% endfor %}
        </ul>
        {% if is_granted('ROLE_ADMIN') %}
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ path('aqm_art_articles') }}\">Gérer les articles</a></li>
                <li><a href=\"{{ path('aqm_art_categories') }}\">Gérer les catégories</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        Mon compte <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"dropdown-header\">Connecté en tant que {{ app.user.username }}</li>
                        <li><a href=\"{{ path('aqm_art_admin_profil_edit') }}\">Editer mon profil</a></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        {% endif %}
    </div>
</nav>", "@AQMArt/Menu/menu.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\Menu\\menu.html.twig");
    }
}
