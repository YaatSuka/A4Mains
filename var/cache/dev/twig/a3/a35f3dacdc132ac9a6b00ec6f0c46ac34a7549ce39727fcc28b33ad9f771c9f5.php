<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4989b8452a72003bce8eb37aefd086a18f46882238472fb42a459c6abe1ee857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48a8968611adfc1e4b96288fb1345ae111b5af0c9627f84894e5755aee62d60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a8968611adfc1e4b96288fb1345ae111b5af0c9627f84894e5755aee62d60a->enter($__internal_48a8968611adfc1e4b96288fb1345ae111b5af0c9627f84894e5755aee62d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_bc5f0d07f30224a95507a4783da3231dbb6fd276b14027c198e345f00b9f3a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5f0d07f30224a95507a4783da3231dbb6fd276b14027c198e345f00b9f3a32->enter($__internal_bc5f0d07f30224a95507a4783da3231dbb6fd276b14027c198e345f00b9f3a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a8968611adfc1e4b96288fb1345ae111b5af0c9627f84894e5755aee62d60a->leave($__internal_48a8968611adfc1e4b96288fb1345ae111b5af0c9627f84894e5755aee62d60a_prof);

        
        $__internal_bc5f0d07f30224a95507a4783da3231dbb6fd276b14027c198e345f00b9f3a32->leave($__internal_bc5f0d07f30224a95507a4783da3231dbb6fd276b14027c198e345f00b9f3a32_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_070367d57dba625e4986129395f174eed11f329cff25a96ce2024443efec7dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070367d57dba625e4986129395f174eed11f329cff25a96ce2024443efec7dc6->enter($__internal_070367d57dba625e4986129395f174eed11f329cff25a96ce2024443efec7dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e90a8903d2d3ec4ed44e528b09351f7a5d379c2ea89366e448c9a1070d807b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90a8903d2d3ec4ed44e528b09351f7a5d379c2ea89366e448c9a1070d807b24->enter($__internal_e90a8903d2d3ec4ed44e528b09351f7a5d379c2ea89366e448c9a1070d807b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e90a8903d2d3ec4ed44e528b09351f7a5d379c2ea89366e448c9a1070d807b24->leave($__internal_e90a8903d2d3ec4ed44e528b09351f7a5d379c2ea89366e448c9a1070d807b24_prof);

        
        $__internal_070367d57dba625e4986129395f174eed11f329cff25a96ce2024443efec7dc6->leave($__internal_070367d57dba625e4986129395f174eed11f329cff25a96ce2024443efec7dc6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
