<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b2939f28ff2f8cfe07bebe5604f21b22a5a4bdfafa265af5f37a3d649fc69d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9e5784b4349dc1b1d764f6536bc71b04d473c8a8c28e65ccd189eac0778b7be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5784b4349dc1b1d764f6536bc71b04d473c8a8c28e65ccd189eac0778b7be3->enter($__internal_9e5784b4349dc1b1d764f6536bc71b04d473c8a8c28e65ccd189eac0778b7be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_4f3b5d395a2ebe74eefd03161a2b36b944a35ce029ff112828ae1223927ca084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3b5d395a2ebe74eefd03161a2b36b944a35ce029ff112828ae1223927ca084->enter($__internal_4f3b5d395a2ebe74eefd03161a2b36b944a35ce029ff112828ae1223927ca084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5784b4349dc1b1d764f6536bc71b04d473c8a8c28e65ccd189eac0778b7be3->leave($__internal_9e5784b4349dc1b1d764f6536bc71b04d473c8a8c28e65ccd189eac0778b7be3_prof);

        
        $__internal_4f3b5d395a2ebe74eefd03161a2b36b944a35ce029ff112828ae1223927ca084->leave($__internal_4f3b5d395a2ebe74eefd03161a2b36b944a35ce029ff112828ae1223927ca084_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0da83ed78346334025e33d5b22232bdbcce604463223a15be10a6a61d272849e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da83ed78346334025e33d5b22232bdbcce604463223a15be10a6a61d272849e->enter($__internal_0da83ed78346334025e33d5b22232bdbcce604463223a15be10a6a61d272849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a3e233a982ac345877c520b4b773ac52eb1af452de42401e00c1d47effa736ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e233a982ac345877c520b4b773ac52eb1af452de42401e00c1d47effa736ed->enter($__internal_a3e233a982ac345877c520b4b773ac52eb1af452de42401e00c1d47effa736ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a3e233a982ac345877c520b4b773ac52eb1af452de42401e00c1d47effa736ed->leave($__internal_a3e233a982ac345877c520b4b773ac52eb1af452de42401e00c1d47effa736ed_prof);

        
        $__internal_0da83ed78346334025e33d5b22232bdbcce604463223a15be10a6a61d272849e->leave($__internal_0da83ed78346334025e33d5b22232bdbcce604463223a15be10a6a61d272849e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
