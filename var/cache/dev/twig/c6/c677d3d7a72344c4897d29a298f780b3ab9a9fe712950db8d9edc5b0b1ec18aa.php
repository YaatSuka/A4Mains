<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b51207462b4cb843aa1f7430e01d2f6d348375c7dde21483f00a73b9728a8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1ed98c7ece5ec090bf2a360a56586ba70d4db635b6f9d7b4e40ca15c3808d96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed98c7ece5ec090bf2a360a56586ba70d4db635b6f9d7b4e40ca15c3808d96d->enter($__internal_1ed98c7ece5ec090bf2a360a56586ba70d4db635b6f9d7b4e40ca15c3808d96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a72af6d6eb4a030a1ab3f97ec0624f3411bd82e31cbcb0e6309b6bef30c06ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72af6d6eb4a030a1ab3f97ec0624f3411bd82e31cbcb0e6309b6bef30c06ecf->enter($__internal_a72af6d6eb4a030a1ab3f97ec0624f3411bd82e31cbcb0e6309b6bef30c06ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed98c7ece5ec090bf2a360a56586ba70d4db635b6f9d7b4e40ca15c3808d96d->leave($__internal_1ed98c7ece5ec090bf2a360a56586ba70d4db635b6f9d7b4e40ca15c3808d96d_prof);

        
        $__internal_a72af6d6eb4a030a1ab3f97ec0624f3411bd82e31cbcb0e6309b6bef30c06ecf->leave($__internal_a72af6d6eb4a030a1ab3f97ec0624f3411bd82e31cbcb0e6309b6bef30c06ecf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9216793111353c794b23092d810503c6f98182e34e32901e9998da1416e9f674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9216793111353c794b23092d810503c6f98182e34e32901e9998da1416e9f674->enter($__internal_9216793111353c794b23092d810503c6f98182e34e32901e9998da1416e9f674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21d76794673fcc17de272315d154499d6b81c572ef7bff8d61cecb5a3479a208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d76794673fcc17de272315d154499d6b81c572ef7bff8d61cecb5a3479a208->enter($__internal_21d76794673fcc17de272315d154499d6b81c572ef7bff8d61cecb5a3479a208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_21d76794673fcc17de272315d154499d6b81c572ef7bff8d61cecb5a3479a208->leave($__internal_21d76794673fcc17de272315d154499d6b81c572ef7bff8d61cecb5a3479a208_prof);

        
        $__internal_9216793111353c794b23092d810503c6f98182e34e32901e9998da1416e9f674->leave($__internal_9216793111353c794b23092d810503c6f98182e34e32901e9998da1416e9f674_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
