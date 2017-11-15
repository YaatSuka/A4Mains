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
        $__internal_c92567f0937b70628cd4a0b4677f5b19bff32c7bbfd1b0636080d1c482548689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92567f0937b70628cd4a0b4677f5b19bff32c7bbfd1b0636080d1c482548689->enter($__internal_c92567f0937b70628cd4a0b4677f5b19bff32c7bbfd1b0636080d1c482548689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_751f5f78457149871489aabdd97d158446f81e887720890b2b74415143b4085d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751f5f78457149871489aabdd97d158446f81e887720890b2b74415143b4085d->enter($__internal_751f5f78457149871489aabdd97d158446f81e887720890b2b74415143b4085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92567f0937b70628cd4a0b4677f5b19bff32c7bbfd1b0636080d1c482548689->leave($__internal_c92567f0937b70628cd4a0b4677f5b19bff32c7bbfd1b0636080d1c482548689_prof);

        
        $__internal_751f5f78457149871489aabdd97d158446f81e887720890b2b74415143b4085d->leave($__internal_751f5f78457149871489aabdd97d158446f81e887720890b2b74415143b4085d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f175e1261d7b50792ea7c11240ed0e1ca08f65c8a092cf675d8ce7505a9e5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f175e1261d7b50792ea7c11240ed0e1ca08f65c8a092cf675d8ce7505a9e5e7->enter($__internal_5f175e1261d7b50792ea7c11240ed0e1ca08f65c8a092cf675d8ce7505a9e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d492bbe4711e41442f3ebba4cf54deeb89b51f09ab61cb02d48f0ce07ce030e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d492bbe4711e41442f3ebba4cf54deeb89b51f09ab61cb02d48f0ce07ce030e->enter($__internal_5d492bbe4711e41442f3ebba4cf54deeb89b51f09ab61cb02d48f0ce07ce030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5d492bbe4711e41442f3ebba4cf54deeb89b51f09ab61cb02d48f0ce07ce030e->leave($__internal_5d492bbe4711e41442f3ebba4cf54deeb89b51f09ab61cb02d48f0ce07ce030e_prof);

        
        $__internal_5f175e1261d7b50792ea7c11240ed0e1ca08f65c8a092cf675d8ce7505a9e5e7->leave($__internal_5f175e1261d7b50792ea7c11240ed0e1ca08f65c8a092cf675d8ce7505a9e5e7_prof);

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
