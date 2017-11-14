<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7d6aad03d6946d4dc0f204eff7ae9d64c10c9b4857719ad5679205bcb25f1046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69a259256b30d2d9f1f4638b1ee1cd463139caa532968a071c5bf91145e2ae63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a259256b30d2d9f1f4638b1ee1cd463139caa532968a071c5bf91145e2ae63->enter($__internal_69a259256b30d2d9f1f4638b1ee1cd463139caa532968a071c5bf91145e2ae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7311bad16950cc8247f36e4583ac558028d5c8129f1a663e8ece1924cd18db8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7311bad16950cc8247f36e4583ac558028d5c8129f1a663e8ece1924cd18db8e->enter($__internal_7311bad16950cc8247f36e4583ac558028d5c8129f1a663e8ece1924cd18db8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_69a259256b30d2d9f1f4638b1ee1cd463139caa532968a071c5bf91145e2ae63->leave($__internal_69a259256b30d2d9f1f4638b1ee1cd463139caa532968a071c5bf91145e2ae63_prof);

        
        $__internal_7311bad16950cc8247f36e4583ac558028d5c8129f1a663e8ece1924cd18db8e->leave($__internal_7311bad16950cc8247f36e4583ac558028d5c8129f1a663e8ece1924cd18db8e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4c388176230fca3a8cdc824fef759815aebdd838d1ed5f2ca6ab4ea253cb8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c388176230fca3a8cdc824fef759815aebdd838d1ed5f2ca6ab4ea253cb8a4->enter($__internal_a4c388176230fca3a8cdc824fef759815aebdd838d1ed5f2ca6ab4ea253cb8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ee35f99e5a7ebcfe68892a190721ab9d24682b318c846aa0fcfe35b106e09c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee35f99e5a7ebcfe68892a190721ab9d24682b318c846aa0fcfe35b106e09c5->enter($__internal_4ee35f99e5a7ebcfe68892a190721ab9d24682b318c846aa0fcfe35b106e09c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4ee35f99e5a7ebcfe68892a190721ab9d24682b318c846aa0fcfe35b106e09c5->leave($__internal_4ee35f99e5a7ebcfe68892a190721ab9d24682b318c846aa0fcfe35b106e09c5_prof);

        
        $__internal_a4c388176230fca3a8cdc824fef759815aebdd838d1ed5f2ca6ab4ea253cb8a4->leave($__internal_a4c388176230fca3a8cdc824fef759815aebdd838d1ed5f2ca6ab4ea253cb8a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
