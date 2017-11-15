<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_666dadc657e564db55396141f6249fb0ec7b44fed100808558a2b594e6a0655b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_4f6d59ae289b64507d3b986f360b047e170aa82e9adc73901c25b9fbb3caaccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6d59ae289b64507d3b986f360b047e170aa82e9adc73901c25b9fbb3caaccf->enter($__internal_4f6d59ae289b64507d3b986f360b047e170aa82e9adc73901c25b9fbb3caaccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_4635e8d2c3c1556d9cc09a0a81495167f394dc22790710d4ca181b93c2bc6dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4635e8d2c3c1556d9cc09a0a81495167f394dc22790710d4ca181b93c2bc6dbf->enter($__internal_4635e8d2c3c1556d9cc09a0a81495167f394dc22790710d4ca181b93c2bc6dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6d59ae289b64507d3b986f360b047e170aa82e9adc73901c25b9fbb3caaccf->leave($__internal_4f6d59ae289b64507d3b986f360b047e170aa82e9adc73901c25b9fbb3caaccf_prof);

        
        $__internal_4635e8d2c3c1556d9cc09a0a81495167f394dc22790710d4ca181b93c2bc6dbf->leave($__internal_4635e8d2c3c1556d9cc09a0a81495167f394dc22790710d4ca181b93c2bc6dbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72a6b11b17886f7fa5083d9842b78be8b328d1cdc6dbb774b5213b2b38ad0c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a6b11b17886f7fa5083d9842b78be8b328d1cdc6dbb774b5213b2b38ad0c7e->enter($__internal_72a6b11b17886f7fa5083d9842b78be8b328d1cdc6dbb774b5213b2b38ad0c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7680d6b30a64b4c27b1cf6c4725243e903f7db5613226c17f05be45c94a275f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7680d6b30a64b4c27b1cf6c4725243e903f7db5613226c17f05be45c94a275f6->enter($__internal_7680d6b30a64b4c27b1cf6c4725243e903f7db5613226c17f05be45c94a275f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7680d6b30a64b4c27b1cf6c4725243e903f7db5613226c17f05be45c94a275f6->leave($__internal_7680d6b30a64b4c27b1cf6c4725243e903f7db5613226c17f05be45c94a275f6_prof);

        
        $__internal_72a6b11b17886f7fa5083d9842b78be8b328d1cdc6dbb774b5213b2b38ad0c7e->leave($__internal_72a6b11b17886f7fa5083d9842b78be8b328d1cdc6dbb774b5213b2b38ad0c7e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
