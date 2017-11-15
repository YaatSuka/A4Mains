<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_c16998deb6c0d4b11e062c8a84c7a0d87a82a1fb41eb31375acb50c36a0cf537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_f4fabddea7f955f112fb06ed2362b96e48aa30becc5517a815bb1d8e50e446f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fabddea7f955f112fb06ed2362b96e48aa30becc5517a815bb1d8e50e446f7->enter($__internal_f4fabddea7f955f112fb06ed2362b96e48aa30becc5517a815bb1d8e50e446f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_c6bdf7d4cb40bdb337e7d9428fa8653f08e4fc6598459e93057fa2b9a13f88ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bdf7d4cb40bdb337e7d9428fa8653f08e4fc6598459e93057fa2b9a13f88ac->enter($__internal_c6bdf7d4cb40bdb337e7d9428fa8653f08e4fc6598459e93057fa2b9a13f88ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4fabddea7f955f112fb06ed2362b96e48aa30becc5517a815bb1d8e50e446f7->leave($__internal_f4fabddea7f955f112fb06ed2362b96e48aa30becc5517a815bb1d8e50e446f7_prof);

        
        $__internal_c6bdf7d4cb40bdb337e7d9428fa8653f08e4fc6598459e93057fa2b9a13f88ac->leave($__internal_c6bdf7d4cb40bdb337e7d9428fa8653f08e4fc6598459e93057fa2b9a13f88ac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24feacff5f56bc0848d44d3c68c84eff0fd5c3dbe8a190fd41b28dd524b1336d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24feacff5f56bc0848d44d3c68c84eff0fd5c3dbe8a190fd41b28dd524b1336d->enter($__internal_24feacff5f56bc0848d44d3c68c84eff0fd5c3dbe8a190fd41b28dd524b1336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ebfaaa624e1186579a637bcabf1cb60ddd4f1f8969461e46fc00fdc8fa6491bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfaaa624e1186579a637bcabf1cb60ddd4f1f8969461e46fc00fdc8fa6491bf->enter($__internal_ebfaaa624e1186579a637bcabf1cb60ddd4f1f8969461e46fc00fdc8fa6491bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ebfaaa624e1186579a637bcabf1cb60ddd4f1f8969461e46fc00fdc8fa6491bf->leave($__internal_ebfaaa624e1186579a637bcabf1cb60ddd4f1f8969461e46fc00fdc8fa6491bf_prof);

        
        $__internal_24feacff5f56bc0848d44d3c68c84eff0fd5c3dbe8a190fd41b28dd524b1336d->leave($__internal_24feacff5f56bc0848d44d3c68c84eff0fd5c3dbe8a190fd41b28dd524b1336d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
