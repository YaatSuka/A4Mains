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
        $__internal_c1367cdc81598423793bcec5d4ee9d5c9bf60635b90bd489b00401ee2b5ebbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1367cdc81598423793bcec5d4ee9d5c9bf60635b90bd489b00401ee2b5ebbb6->enter($__internal_c1367cdc81598423793bcec5d4ee9d5c9bf60635b90bd489b00401ee2b5ebbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/layout.html.twig"));

        $__internal_fa5a62e65d0248973254d0aa5e89743cb107ac2f20ede53a09c4e6bbd8b31f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5a62e65d0248973254d0aa5e89743cb107ac2f20ede53a09c4e6bbd8b31f49->enter($__internal_fa5a62e65d0248973254d0aa5e89743cb107ac2f20ede53a09c4e6bbd8b31f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AQMArt/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1367cdc81598423793bcec5d4ee9d5c9bf60635b90bd489b00401ee2b5ebbb6->leave($__internal_c1367cdc81598423793bcec5d4ee9d5c9bf60635b90bd489b00401ee2b5ebbb6_prof);

        
        $__internal_fa5a62e65d0248973254d0aa5e89743cb107ac2f20ede53a09c4e6bbd8b31f49->leave($__internal_fa5a62e65d0248973254d0aa5e89743cb107ac2f20ede53a09c4e6bbd8b31f49_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3aac445eea8185ddf36222977d8e32dae517baffc0bb5cba90b863bad1b76f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aac445eea8185ddf36222977d8e32dae517baffc0bb5cba90b863bad1b76f27->enter($__internal_3aac445eea8185ddf36222977d8e32dae517baffc0bb5cba90b863bad1b76f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_45aee6b6b9bc0db1b76d3b7a8da371f6e7a70b043d4d3e403bdb58c28fd9acef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45aee6b6b9bc0db1b76d3b7a8da371f6e7a70b043d4d3e403bdb58c28fd9acef->enter($__internal_45aee6b6b9bc0db1b76d3b7a8da371f6e7a70b043d4d3e403bdb58c28fd9acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AQMArtBundle:Menu:navBar"));
        echo "
";
        
        $__internal_45aee6b6b9bc0db1b76d3b7a8da371f6e7a70b043d4d3e403bdb58c28fd9acef->leave($__internal_45aee6b6b9bc0db1b76d3b7a8da371f6e7a70b043d4d3e403bdb58c28fd9acef_prof);

        
        $__internal_3aac445eea8185ddf36222977d8e32dae517baffc0bb5cba90b863bad1b76f27->leave($__internal_3aac445eea8185ddf36222977d8e32dae517baffc0bb5cba90b863bad1b76f27_prof);

    }

    // line 6
    public function block_flash($context, array $blocks = array())
    {
        $__internal_1725f10c6286b8dfc5061f8d75f59a40e4d756f0eaac98035944b97533a6a9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1725f10c6286b8dfc5061f8d75f59a40e4d756f0eaac98035944b97533a6a9e2->enter($__internal_1725f10c6286b8dfc5061f8d75f59a40e4d756f0eaac98035944b97533a6a9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_83496f1af422298acff7c5fbb5c1bc6a1144676de814a7b3df87e338868a9e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83496f1af422298acff7c5fbb5c1bc6a1144676de814a7b3df87e338868a9e4d->enter($__internal_83496f1af422298acff7c5fbb5c1bc6a1144676de814a7b3df87e338868a9e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

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
        
        $__internal_83496f1af422298acff7c5fbb5c1bc6a1144676de814a7b3df87e338868a9e4d->leave($__internal_83496f1af422298acff7c5fbb5c1bc6a1144676de814a7b3df87e338868a9e4d_prof);

        
        $__internal_1725f10c6286b8dfc5061f8d75f59a40e4d756f0eaac98035944b97533a6a9e2->leave($__internal_1725f10c6286b8dfc5061f8d75f59a40e4d756f0eaac98035944b97533a6a9e2_prof);

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
