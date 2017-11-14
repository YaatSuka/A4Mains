<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d8ec28ecc29922f77ef7bca2845977ffec68b77984954d9a95d9085cb42e34ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_401f0144337acecbc2233dacd36acabb03a2ce171f55aed133a0c6614e1123c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401f0144337acecbc2233dacd36acabb03a2ce171f55aed133a0c6614e1123c2->enter($__internal_401f0144337acecbc2233dacd36acabb03a2ce171f55aed133a0c6614e1123c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_8b84710c8876a3932f4555f08bdbcf11b6f2e57eb05bce1bc4f9a41c0cba9314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b84710c8876a3932f4555f08bdbcf11b6f2e57eb05bce1bc4f9a41c0cba9314->enter($__internal_8b84710c8876a3932f4555f08bdbcf11b6f2e57eb05bce1bc4f9a41c0cba9314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_401f0144337acecbc2233dacd36acabb03a2ce171f55aed133a0c6614e1123c2->leave($__internal_401f0144337acecbc2233dacd36acabb03a2ce171f55aed133a0c6614e1123c2_prof);

        
        $__internal_8b84710c8876a3932f4555f08bdbcf11b6f2e57eb05bce1bc4f9a41c0cba9314->leave($__internal_8b84710c8876a3932f4555f08bdbcf11b6f2e57eb05bce1bc4f9a41c0cba9314_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e55e304727c28d73cef363e6bb88626486f823cd59b05fb369c434487fbd087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e55e304727c28d73cef363e6bb88626486f823cd59b05fb369c434487fbd087->enter($__internal_5e55e304727c28d73cef363e6bb88626486f823cd59b05fb369c434487fbd087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a8f0c8d62a55f568ade429ee6a872b431df41caf2b77bb63b5be9b8c171cb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8f0c8d62a55f568ade429ee6a872b431df41caf2b77bb63b5be9b8c171cb97->enter($__internal_3a8f0c8d62a55f568ade429ee6a872b431df41caf2b77bb63b5be9b8c171cb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3a8f0c8d62a55f568ade429ee6a872b431df41caf2b77bb63b5be9b8c171cb97->leave($__internal_3a8f0c8d62a55f568ade429ee6a872b431df41caf2b77bb63b5be9b8c171cb97_prof);

        
        $__internal_5e55e304727c28d73cef363e6bb88626486f823cd59b05fb369c434487fbd087->leave($__internal_5e55e304727c28d73cef363e6bb88626486f823cd59b05fb369c434487fbd087_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
