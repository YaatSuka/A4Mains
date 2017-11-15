<?php

/* AQMUserBundle::layout.html.twig */
class __TwigTemplate_8c2e0fafffacfbf199115b0a68f2aacf8a6e1b4d9e3117c0958f5b2b6670e997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7340a467ed704afaf272c50ebeb77428fcb1e518eab223a78cd20997a7de940d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7340a467ed704afaf272c50ebeb77428fcb1e518eab223a78cd20997a7de940d->enter($__internal_7340a467ed704afaf272c50ebeb77428fcb1e518eab223a78cd20997a7de940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMUserBundle::layout.html.twig"));

        $__internal_69ab0a9948b9e6e4cabb2061d7376d2067a6d1663d3fe97acd66d0516b3553a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ab0a9948b9e6e4cabb2061d7376d2067a6d1663d3fe97acd66d0516b3553a4->enter($__internal_69ab0a9948b9e6e4cabb2061d7376d2067a6d1663d3fe97acd66d0516b3553a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7340a467ed704afaf272c50ebeb77428fcb1e518eab223a78cd20997a7de940d->leave($__internal_7340a467ed704afaf272c50ebeb77428fcb1e518eab223a78cd20997a7de940d_prof);

        
        $__internal_69ab0a9948b9e6e4cabb2061d7376d2067a6d1663d3fe97acd66d0516b3553a4->leave($__internal_69ab0a9948b9e6e4cabb2061d7376d2067a6d1663d3fe97acd66d0516b3553a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1580feab40f78d3f3e2b34b221084b66985094647c047b3202befed380b40f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1580feab40f78d3f3e2b34b221084b66985094647c047b3202befed380b40f16->enter($__internal_1580feab40f78d3f3e2b34b221084b66985094647c047b3202befed380b40f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_374c450858fdddbcfd894c880d30cec0a788f6d0e1cdfc2bee51e64d7b10bead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374c450858fdddbcfd894c880d30cec0a788f6d0e1cdfc2bee51e64d7b10bead->enter($__internal_374c450858fdddbcfd894c880d30cec0a788f6d0e1cdfc2bee51e64d7b10bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_374c450858fdddbcfd894c880d30cec0a788f6d0e1cdfc2bee51e64d7b10bead->leave($__internal_374c450858fdddbcfd894c880d30cec0a788f6d0e1cdfc2bee51e64d7b10bead_prof);

        
        $__internal_1580feab40f78d3f3e2b34b221084b66985094647c047b3202befed380b40f16->leave($__internal_1580feab40f78d3f3e2b34b221084b66985094647c047b3202befed380b40f16_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b433964301512e510360a8d63dea0816e6e8df051b4e8ee8ccd214c2ac95b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b433964301512e510360a8d63dea0816e6e8df051b4e8ee8ccd214c2ac95b91->enter($__internal_3b433964301512e510360a8d63dea0816e6e8df051b4e8ee8ccd214c2ac95b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71a3ae368885b8f94eb4e353900cd89493b0d2dbdbf222dceda32630faac95a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a3ae368885b8f94eb4e353900cd89493b0d2dbdbf222dceda32630faac95a5->enter($__internal_71a3ae368885b8f94eb4e353900cd89493b0d2dbdbf222dceda32630faac95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_71a3ae368885b8f94eb4e353900cd89493b0d2dbdbf222dceda32630faac95a5->leave($__internal_71a3ae368885b8f94eb4e353900cd89493b0d2dbdbf222dceda32630faac95a5_prof);

        
        $__internal_3b433964301512e510360a8d63dea0816e6e8df051b4e8ee8ccd214c2ac95b91->leave($__internal_3b433964301512e510360a8d63dea0816e6e8df051b4e8ee8ccd214c2ac95b91_prof);

    }

    public function getTemplateName()
    {
        return "AQMUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  89 => 14,  78 => 16,  75 => 14,  72 => 12,  63 => 9,  58 => 8,  53 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, message in app.session.flashbag.all() %}
        <div class=\"alert alert-{{ key }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "AQMUserBundle::layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\UserBundle/Resources/views/layout.html.twig");
    }
}
