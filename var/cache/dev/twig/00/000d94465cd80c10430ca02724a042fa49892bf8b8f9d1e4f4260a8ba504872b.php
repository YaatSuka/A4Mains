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
        $__internal_6165303fc4bf6bcb3b5a250a4f9ea135ab6570cb65d018124a63445f07f13ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6165303fc4bf6bcb3b5a250a4f9ea135ab6570cb65d018124a63445f07f13ff3->enter($__internal_6165303fc4bf6bcb3b5a250a4f9ea135ab6570cb65d018124a63445f07f13ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle::layout.html.twig"));

        $__internal_053c521fb0f95b753584d13209ce631057193820c3bbf63620f160245d03bde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053c521fb0f95b753584d13209ce631057193820c3bbf63620f160245d03bde4->enter($__internal_053c521fb0f95b753584d13209ce631057193820c3bbf63620f160245d03bde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6165303fc4bf6bcb3b5a250a4f9ea135ab6570cb65d018124a63445f07f13ff3->leave($__internal_6165303fc4bf6bcb3b5a250a4f9ea135ab6570cb65d018124a63445f07f13ff3_prof);

        
        $__internal_053c521fb0f95b753584d13209ce631057193820c3bbf63620f160245d03bde4->leave($__internal_053c521fb0f95b753584d13209ce631057193820c3bbf63620f160245d03bde4_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a211458d7fdc68892ddb82ed5d4299beefe24851b8f2545207d34bb3c058abb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a211458d7fdc68892ddb82ed5d4299beefe24851b8f2545207d34bb3c058abb9->enter($__internal_a211458d7fdc68892ddb82ed5d4299beefe24851b8f2545207d34bb3c058abb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_17025f59f605cd567141514e79bd9a13dcc619c7c2e7d0a7a7e61d8296a286b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17025f59f605cd567141514e79bd9a13dcc619c7c2e7d0a7a7e61d8296a286b7->enter($__internal_17025f59f605cd567141514e79bd9a13dcc619c7c2e7d0a7a7e61d8296a286b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AQMArtBundle:Menu:navBar"));
        echo "
";
        
        $__internal_17025f59f605cd567141514e79bd9a13dcc619c7c2e7d0a7a7e61d8296a286b7->leave($__internal_17025f59f605cd567141514e79bd9a13dcc619c7c2e7d0a7a7e61d8296a286b7_prof);

        
        $__internal_a211458d7fdc68892ddb82ed5d4299beefe24851b8f2545207d34bb3c058abb9->leave($__internal_a211458d7fdc68892ddb82ed5d4299beefe24851b8f2545207d34bb3c058abb9_prof);

    }

    // line 6
    public function block_flash($context, array $blocks = array())
    {
        $__internal_8c1ea2cf558de5b9821e38a16fcd44d43cf7de2a81b7fd74f13884ee28092219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1ea2cf558de5b9821e38a16fcd44d43cf7de2a81b7fd74f13884ee28092219->enter($__internal_8c1ea2cf558de5b9821e38a16fcd44d43cf7de2a81b7fd74f13884ee28092219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_118a2a21723189d4df9a7d53203790960edd9207f7ab61487351fe4adfee3686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118a2a21723189d4df9a7d53203790960edd9207f7ab61487351fe4adfee3686->enter($__internal_118a2a21723189d4df9a7d53203790960edd9207f7ab61487351fe4adfee3686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

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
        
        $__internal_118a2a21723189d4df9a7d53203790960edd9207f7ab61487351fe4adfee3686->leave($__internal_118a2a21723189d4df9a7d53203790960edd9207f7ab61487351fe4adfee3686_prof);

        
        $__internal_8c1ea2cf558de5b9821e38a16fcd44d43cf7de2a81b7fd74f13884ee28092219->leave($__internal_8c1ea2cf558de5b9821e38a16fcd44d43cf7de2a81b7fd74f13884ee28092219_prof);

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
