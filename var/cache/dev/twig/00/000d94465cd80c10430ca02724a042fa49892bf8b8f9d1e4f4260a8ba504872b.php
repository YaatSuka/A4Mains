<?php

/* AQMArtBundle::layout.html.twig */
class __TwigTemplate_41275bdd7cef099e75edfe4e31bc424bad83c81073e7b8674cedb882754bd05c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AQMArtBundle::layout.html.twig", 1);
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
        $__internal_2e99053cb5290e70381372d0ae59f46c78677aa6b60899b48e24bf7c940f01f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e99053cb5290e70381372d0ae59f46c78677aa6b60899b48e24bf7c940f01f8->enter($__internal_2e99053cb5290e70381372d0ae59f46c78677aa6b60899b48e24bf7c940f01f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle::layout.html.twig"));

        $__internal_89c7fc30522df03c523c007fb303a09e95c1fb08e79ec2cd508d3326dd75f016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c7fc30522df03c523c007fb303a09e95c1fb08e79ec2cd508d3326dd75f016->enter($__internal_89c7fc30522df03c523c007fb303a09e95c1fb08e79ec2cd508d3326dd75f016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e99053cb5290e70381372d0ae59f46c78677aa6b60899b48e24bf7c940f01f8->leave($__internal_2e99053cb5290e70381372d0ae59f46c78677aa6b60899b48e24bf7c940f01f8_prof);

        
        $__internal_89c7fc30522df03c523c007fb303a09e95c1fb08e79ec2cd508d3326dd75f016->leave($__internal_89c7fc30522df03c523c007fb303a09e95c1fb08e79ec2cd508d3326dd75f016_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_00b36f394275ad219a5900d4fb8b281ce4623eff544b3a12fbeae4aeae972dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b36f394275ad219a5900d4fb8b281ce4623eff544b3a12fbeae4aeae972dc8->enter($__internal_00b36f394275ad219a5900d4fb8b281ce4623eff544b3a12fbeae4aeae972dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fe2fb8472dbd7a73cb5f19bd48e775906a0f21f2ad88c598b3cb6c0cb2f9dc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2fb8472dbd7a73cb5f19bd48e775906a0f21f2ad88c598b3cb6c0cb2f9dc2a->enter($__internal_fe2fb8472dbd7a73cb5f19bd48e775906a0f21f2ad88c598b3cb6c0cb2f9dc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AQMArtBundle:Menu:navBar"));
        echo "
";
        
        $__internal_fe2fb8472dbd7a73cb5f19bd48e775906a0f21f2ad88c598b3cb6c0cb2f9dc2a->leave($__internal_fe2fb8472dbd7a73cb5f19bd48e775906a0f21f2ad88c598b3cb6c0cb2f9dc2a_prof);

        
        $__internal_00b36f394275ad219a5900d4fb8b281ce4623eff544b3a12fbeae4aeae972dc8->leave($__internal_00b36f394275ad219a5900d4fb8b281ce4623eff544b3a12fbeae4aeae972dc8_prof);

    }

    // line 6
    public function block_flash($context, array $blocks = array())
    {
        $__internal_9821c9fa03b200b0c7421076abaebd17c4b23be60c29880008933d0c6a1c1e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9821c9fa03b200b0c7421076abaebd17c4b23be60c29880008933d0c6a1c1e7c->enter($__internal_9821c9fa03b200b0c7421076abaebd17c4b23be60c29880008933d0c6a1c1e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_7318f5aafb0a489b2b22d9bd96d61dce4334b0eebe618167e9b9533dcade45ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7318f5aafb0a489b2b22d9bd96d61dce4334b0eebe618167e9b9533dcade45ec->enter($__internal_7318f5aafb0a489b2b22d9bd96d61dce4334b0eebe618167e9b9533dcade45ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

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
        
        $__internal_7318f5aafb0a489b2b22d9bd96d61dce4334b0eebe618167e9b9533dcade45ec->leave($__internal_7318f5aafb0a489b2b22d9bd96d61dce4334b0eebe618167e9b9533dcade45ec_prof);

        
        $__internal_9821c9fa03b200b0c7421076abaebd17c4b23be60c29880008933d0c6a1c1e7c->leave($__internal_9821c9fa03b200b0c7421076abaebd17c4b23be60c29880008933d0c6a1c1e7c_prof);

    }

    public function getTemplateName()
    {
        return "AQMArtBundle::layout.html.twig";
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
{% endblock %}", "AQMArtBundle::layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\src\\AQM\\ArtBundle/Resources/views/layout.html.twig");
    }
}
