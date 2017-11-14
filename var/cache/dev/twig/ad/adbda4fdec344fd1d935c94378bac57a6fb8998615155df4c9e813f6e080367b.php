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
        $__internal_692e2ce0ca3711d6cfe201b1ce31048b7d1548d5817ebf66154cbb637998532b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692e2ce0ca3711d6cfe201b1ce31048b7d1548d5817ebf66154cbb637998532b->enter($__internal_692e2ce0ca3711d6cfe201b1ce31048b7d1548d5817ebf66154cbb637998532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_b4788ef53676e41f51e72d6470e9271f5b961126a3a6efd28b5872eec9ca43e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4788ef53676e41f51e72d6470e9271f5b961126a3a6efd28b5872eec9ca43e0->enter($__internal_b4788ef53676e41f51e72d6470e9271f5b961126a3a6efd28b5872eec9ca43e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692e2ce0ca3711d6cfe201b1ce31048b7d1548d5817ebf66154cbb637998532b->leave($__internal_692e2ce0ca3711d6cfe201b1ce31048b7d1548d5817ebf66154cbb637998532b_prof);

        
        $__internal_b4788ef53676e41f51e72d6470e9271f5b961126a3a6efd28b5872eec9ca43e0->leave($__internal_b4788ef53676e41f51e72d6470e9271f5b961126a3a6efd28b5872eec9ca43e0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a6c8428797aeb5eb497ae963fb6ccd8e446469a798349280d4f4229bea2f611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6c8428797aeb5eb497ae963fb6ccd8e446469a798349280d4f4229bea2f611->enter($__internal_1a6c8428797aeb5eb497ae963fb6ccd8e446469a798349280d4f4229bea2f611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b35fdcc8baf6d4cbc30026b6d2872d19153120ebd722e2e1745a7f4e620d457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b35fdcc8baf6d4cbc30026b6d2872d19153120ebd722e2e1745a7f4e620d457->enter($__internal_6b35fdcc8baf6d4cbc30026b6d2872d19153120ebd722e2e1745a7f4e620d457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6b35fdcc8baf6d4cbc30026b6d2872d19153120ebd722e2e1745a7f4e620d457->leave($__internal_6b35fdcc8baf6d4cbc30026b6d2872d19153120ebd722e2e1745a7f4e620d457_prof);

        
        $__internal_1a6c8428797aeb5eb497ae963fb6ccd8e446469a798349280d4f4229bea2f611->leave($__internal_1a6c8428797aeb5eb497ae963fb6ccd8e446469a798349280d4f4229bea2f611_prof);

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
