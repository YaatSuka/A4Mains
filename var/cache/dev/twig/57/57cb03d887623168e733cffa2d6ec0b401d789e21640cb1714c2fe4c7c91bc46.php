<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_162b97bc37e1e3a44de8c3294774040c6d9ee73d094a6df37def94a9981e1804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f804bfcbb800289f34ae4d6cceeb26cf79d87789f4c43e643f1a9f45e79cd4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f804bfcbb800289f34ae4d6cceeb26cf79d87789f4c43e643f1a9f45e79cd4ed->enter($__internal_f804bfcbb800289f34ae4d6cceeb26cf79d87789f4c43e643f1a9f45e79cd4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d9cf3b6dc812b135acc6e0968c3e9abe392e7c364e127eaff02982fdb2f19e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cf3b6dc812b135acc6e0968c3e9abe392e7c364e127eaff02982fdb2f19e4d->enter($__internal_d9cf3b6dc812b135acc6e0968c3e9abe392e7c364e127eaff02982fdb2f19e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f804bfcbb800289f34ae4d6cceeb26cf79d87789f4c43e643f1a9f45e79cd4ed->leave($__internal_f804bfcbb800289f34ae4d6cceeb26cf79d87789f4c43e643f1a9f45e79cd4ed_prof);

        
        $__internal_d9cf3b6dc812b135acc6e0968c3e9abe392e7c364e127eaff02982fdb2f19e4d->leave($__internal_d9cf3b6dc812b135acc6e0968c3e9abe392e7c364e127eaff02982fdb2f19e4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd221cec2191e05c572f4ceb10b20a7caeffee319fc11a432a8bf524dcd3eee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd221cec2191e05c572f4ceb10b20a7caeffee319fc11a432a8bf524dcd3eee5->enter($__internal_fd221cec2191e05c572f4ceb10b20a7caeffee319fc11a432a8bf524dcd3eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4f85c9693af521521ba9e71e2d1bbbfb7cdb47867d1c0af7f1ea489faf24697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f85c9693af521521ba9e71e2d1bbbfb7cdb47867d1c0af7f1ea489faf24697->enter($__internal_c4f85c9693af521521ba9e71e2d1bbbfb7cdb47867d1c0af7f1ea489faf24697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c4f85c9693af521521ba9e71e2d1bbbfb7cdb47867d1c0af7f1ea489faf24697->leave($__internal_c4f85c9693af521521ba9e71e2d1bbbfb7cdb47867d1c0af7f1ea489faf24697_prof);

        
        $__internal_fd221cec2191e05c572f4ceb10b20a7caeffee319fc11a432a8bf524dcd3eee5->leave($__internal_fd221cec2191e05c572f4ceb10b20a7caeffee319fc11a432a8bf524dcd3eee5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
