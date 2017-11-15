<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f5da0b42d5cfbea48162dc655d361a2aac1f6ee45bf3628e8618e51d8780b706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_bc5fe7db650d2de6ebe63b68098f2c519a492efc37d7a4cc6ce231ebf2ef2bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5fe7db650d2de6ebe63b68098f2c519a492efc37d7a4cc6ce231ebf2ef2bda->enter($__internal_bc5fe7db650d2de6ebe63b68098f2c519a492efc37d7a4cc6ce231ebf2ef2bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_189993488cc765e6a13fce189dfa104017673fc60ff1197a7240b9cb471f0124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189993488cc765e6a13fce189dfa104017673fc60ff1197a7240b9cb471f0124->enter($__internal_189993488cc765e6a13fce189dfa104017673fc60ff1197a7240b9cb471f0124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5fe7db650d2de6ebe63b68098f2c519a492efc37d7a4cc6ce231ebf2ef2bda->leave($__internal_bc5fe7db650d2de6ebe63b68098f2c519a492efc37d7a4cc6ce231ebf2ef2bda_prof);

        
        $__internal_189993488cc765e6a13fce189dfa104017673fc60ff1197a7240b9cb471f0124->leave($__internal_189993488cc765e6a13fce189dfa104017673fc60ff1197a7240b9cb471f0124_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_029362a5b4965b3345ec9cc721e975654fed5ed30b0a755fae89234533622925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029362a5b4965b3345ec9cc721e975654fed5ed30b0a755fae89234533622925->enter($__internal_029362a5b4965b3345ec9cc721e975654fed5ed30b0a755fae89234533622925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4379958578a4618ff96c5a7760f09cb18826f9506ad4867b64cfb6ee413a1494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4379958578a4618ff96c5a7760f09cb18826f9506ad4867b64cfb6ee413a1494->enter($__internal_4379958578a4618ff96c5a7760f09cb18826f9506ad4867b64cfb6ee413a1494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4379958578a4618ff96c5a7760f09cb18826f9506ad4867b64cfb6ee413a1494->leave($__internal_4379958578a4618ff96c5a7760f09cb18826f9506ad4867b64cfb6ee413a1494_prof);

        
        $__internal_029362a5b4965b3345ec9cc721e975654fed5ed30b0a755fae89234533622925->leave($__internal_029362a5b4965b3345ec9cc721e975654fed5ed30b0a755fae89234533622925_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f846df3f359d21bff53875392959539e06a093f4fcdf60372e92284548c29ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f846df3f359d21bff53875392959539e06a093f4fcdf60372e92284548c29ba8->enter($__internal_f846df3f359d21bff53875392959539e06a093f4fcdf60372e92284548c29ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d9d96c71dacedbe665b86294ef2a8ab7c8b01b3002faad73a579a3a4a8975c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9d96c71dacedbe665b86294ef2a8ab7c8b01b3002faad73a579a3a4a8975c5->enter($__internal_2d9d96c71dacedbe665b86294ef2a8ab7c8b01b3002faad73a579a3a4a8975c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_2d9d96c71dacedbe665b86294ef2a8ab7c8b01b3002faad73a579a3a4a8975c5->leave($__internal_2d9d96c71dacedbe665b86294ef2a8ab7c8b01b3002faad73a579a3a4a8975c5_prof);

        
        $__internal_f846df3f359d21bff53875392959539e06a093f4fcdf60372e92284548c29ba8->leave($__internal_f846df3f359d21bff53875392959539e06a093f4fcdf60372e92284548c29ba8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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

{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
