<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_de38b227e9e1c5ee22629e5a9bddf1862c1cc38342a36e3418ad70f6c924e975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ef09fab963521239b48c96bf14ebbf5ddc27a25ebc6e5c67849d9879e62cb18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef09fab963521239b48c96bf14ebbf5ddc27a25ebc6e5c67849d9879e62cb18a->enter($__internal_ef09fab963521239b48c96bf14ebbf5ddc27a25ebc6e5c67849d9879e62cb18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_190ac273f7155c1bd3d1a066e04500dbf3c5e749eaa549a9d325887df383dc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190ac273f7155c1bd3d1a066e04500dbf3c5e749eaa549a9d325887df383dc88->enter($__internal_190ac273f7155c1bd3d1a066e04500dbf3c5e749eaa549a9d325887df383dc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef09fab963521239b48c96bf14ebbf5ddc27a25ebc6e5c67849d9879e62cb18a->leave($__internal_ef09fab963521239b48c96bf14ebbf5ddc27a25ebc6e5c67849d9879e62cb18a_prof);

        
        $__internal_190ac273f7155c1bd3d1a066e04500dbf3c5e749eaa549a9d325887df383dc88->leave($__internal_190ac273f7155c1bd3d1a066e04500dbf3c5e749eaa549a9d325887df383dc88_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8aa4755046eb6cf8a07c01959053c42c863c4c41d731b54ba27e2d294d75138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8aa4755046eb6cf8a07c01959053c42c863c4c41d731b54ba27e2d294d75138->enter($__internal_c8aa4755046eb6cf8a07c01959053c42c863c4c41d731b54ba27e2d294d75138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f604cd52d8d3df6ffeffb00f016a48c4389d8f143da518d01a7be5f03a641265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f604cd52d8d3df6ffeffb00f016a48c4389d8f143da518d01a7be5f03a641265->enter($__internal_f604cd52d8d3df6ffeffb00f016a48c4389d8f143da518d01a7be5f03a641265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f604cd52d8d3df6ffeffb00f016a48c4389d8f143da518d01a7be5f03a641265->leave($__internal_f604cd52d8d3df6ffeffb00f016a48c4389d8f143da518d01a7be5f03a641265_prof);

        
        $__internal_c8aa4755046eb6cf8a07c01959053c42c863c4c41d731b54ba27e2d294d75138->leave($__internal_c8aa4755046eb6cf8a07c01959053c42c863c4c41d731b54ba27e2d294d75138_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
