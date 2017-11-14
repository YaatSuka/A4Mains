<?php

/* @AQMArt/layout.html.twig */
class __TwigTemplate_c5b2a5087c3466b4e8d704430daac12b8990cf76656d925fb0d49dbfdf606f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@AQMArt/layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'flash' => array($this, 'block_flash'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_165596df8c4ca737950975b4914cce8e5b32a665fb2e10a1c531c4af0a4c0355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165596df8c4ca737950975b4914cce8e5b32a665fb2e10a1c531c4af0a4c0355->enter($__internal_165596df8c4ca737950975b4914cce8e5b32a665fb2e10a1c531c4af0a4c0355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/layout.html.twig"));

        $__internal_f88582277962a5ade91d8535259eda574644b9b80ce5a906d49f01f7b16e4c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88582277962a5ade91d8535259eda574644b9b80ce5a906d49f01f7b16e4c1a->enter($__internal_f88582277962a5ade91d8535259eda574644b9b80ce5a906d49f01f7b16e4c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165596df8c4ca737950975b4914cce8e5b32a665fb2e10a1c531c4af0a4c0355->leave($__internal_165596df8c4ca737950975b4914cce8e5b32a665fb2e10a1c531c4af0a4c0355_prof);

        
        $__internal_f88582277962a5ade91d8535259eda574644b9b80ce5a906d49f01f7b16e4c1a->leave($__internal_f88582277962a5ade91d8535259eda574644b9b80ce5a906d49f01f7b16e4c1a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_fc8777e65b94a7296ce2912b2bbc766451750db62d853c88a1388628c1a9227d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8777e65b94a7296ce2912b2bbc766451750db62d853c88a1388628c1a9227d->enter($__internal_fc8777e65b94a7296ce2912b2bbc766451750db62d853c88a1388628c1a9227d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d1e97b261debdf0c518c16f597d7e916c4299774a185f08e7aa863d237797254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e97b261debdf0c518c16f597d7e916c4299774a185f08e7aa863d237797254->enter($__internal_d1e97b261debdf0c518c16f597d7e916c4299774a185f08e7aa863d237797254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AQMArtBundle:Menu:navBar"));
        echo "
";
        
        $__internal_d1e97b261debdf0c518c16f597d7e916c4299774a185f08e7aa863d237797254->leave($__internal_d1e97b261debdf0c518c16f597d7e916c4299774a185f08e7aa863d237797254_prof);

        
        $__internal_fc8777e65b94a7296ce2912b2bbc766451750db62d853c88a1388628c1a9227d->leave($__internal_fc8777e65b94a7296ce2912b2bbc766451750db62d853c88a1388628c1a9227d_prof);

    }

    // line 6
    public function block_flash($context, array $blocks = array())
    {
        $__internal_bc4e97f88d8f322567803455867505b2e15e8501fdbd9eeac1a20945d19fb00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4e97f88d8f322567803455867505b2e15e8501fdbd9eeac1a20945d19fb00f->enter($__internal_bc4e97f88d8f322567803455867505b2e15e8501fdbd9eeac1a20945d19fb00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_6ba51ab27baaacadd4ff2ed2f1742874a1b58f22f4d2205fbc385f321f2999b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba51ab27baaacadd4ff2ed2f1742874a1b58f22f4d2205fbc385f321f2999b8->enter($__internal_6ba51ab27baaacadd4ff2ed2f1742874a1b58f22f4d2205fbc385f321f2999b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "        <div class=\"alert alert-success\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6ba51ab27baaacadd4ff2ed2f1742874a1b58f22f4d2205fbc385f321f2999b8->leave($__internal_6ba51ab27baaacadd4ff2ed2f1742874a1b58f22f4d2205fbc385f321f2999b8_prof);

        
        $__internal_bc4e97f88d8f322567803455867505b2e15e8501fdbd9eeac1a20945d19fb00f->leave($__internal_bc4e97f88d8f322567803455867505b2e15e8501fdbd9eeac1a20945d19fb00f_prof);

    }

    public function getTemplateName()
    {
        return "@AQMArt/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 15,  97 => 14,  93 => 13,  90 => 12,  81 => 9,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block header %} {# A REFAIRE #}
    {{ render(controller('AQMArtBundle:Menu:navBar')) }}
{% endblock %}
{% block flash %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"alert alert-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
{% endblock %}", "@AQMArt/layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle\\Resources\\views\\layout.html.twig");
    }
}
