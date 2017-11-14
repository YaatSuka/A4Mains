<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_36b9594fa6b60c1184b4e2b5508391b4834a57741f68c95c45aed8d2e477dc19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3dde2c83e168be1568d268774ede93815d92634fb53ac4a15486ec955c3b386d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dde2c83e168be1568d268774ede93815d92634fb53ac4a15486ec955c3b386d->enter($__internal_3dde2c83e168be1568d268774ede93815d92634fb53ac4a15486ec955c3b386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_c185cfb3cc902e8d26d67d39a8ac29e16c81c7a803a2c8a747bf312bb92660f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c185cfb3cc902e8d26d67d39a8ac29e16c81c7a803a2c8a747bf312bb92660f4->enter($__internal_c185cfb3cc902e8d26d67d39a8ac29e16c81c7a803a2c8a747bf312bb92660f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dde2c83e168be1568d268774ede93815d92634fb53ac4a15486ec955c3b386d->leave($__internal_3dde2c83e168be1568d268774ede93815d92634fb53ac4a15486ec955c3b386d_prof);

        
        $__internal_c185cfb3cc902e8d26d67d39a8ac29e16c81c7a803a2c8a747bf312bb92660f4->leave($__internal_c185cfb3cc902e8d26d67d39a8ac29e16c81c7a803a2c8a747bf312bb92660f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d510b2d7b95b8f23b0a91335cb3b5d55027912a6d1defa416f2728f0cdee1de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d510b2d7b95b8f23b0a91335cb3b5d55027912a6d1defa416f2728f0cdee1de6->enter($__internal_d510b2d7b95b8f23b0a91335cb3b5d55027912a6d1defa416f2728f0cdee1de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3249bae8e908da49c8bfb8f22ae520e93179d8a820b074eaf994e876a69869aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3249bae8e908da49c8bfb8f22ae520e93179d8a820b074eaf994e876a69869aa->enter($__internal_3249bae8e908da49c8bfb8f22ae520e93179d8a820b074eaf994e876a69869aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3249bae8e908da49c8bfb8f22ae520e93179d8a820b074eaf994e876a69869aa->leave($__internal_3249bae8e908da49c8bfb8f22ae520e93179d8a820b074eaf994e876a69869aa_prof);

        
        $__internal_d510b2d7b95b8f23b0a91335cb3b5d55027912a6d1defa416f2728f0cdee1de6->leave($__internal_d510b2d7b95b8f23b0a91335cb3b5d55027912a6d1defa416f2728f0cdee1de6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
