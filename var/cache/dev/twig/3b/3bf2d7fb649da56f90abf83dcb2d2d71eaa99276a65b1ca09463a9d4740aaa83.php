<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b1efc03a6d566fb0a4a2a96a2c5a4162c5c28d24bb6556f29f05d5032aff78cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_936f11986be655152c99245830f84673359c6ce985113922cedd3eaff5d062e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936f11986be655152c99245830f84673359c6ce985113922cedd3eaff5d062e8->enter($__internal_936f11986be655152c99245830f84673359c6ce985113922cedd3eaff5d062e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_85ef5238c58fbf1cfa81fa0fa950bd72df9a03d6c02741589a4bf43554bdad1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ef5238c58fbf1cfa81fa0fa950bd72df9a03d6c02741589a4bf43554bdad1f->enter($__internal_85ef5238c58fbf1cfa81fa0fa950bd72df9a03d6c02741589a4bf43554bdad1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_936f11986be655152c99245830f84673359c6ce985113922cedd3eaff5d062e8->leave($__internal_936f11986be655152c99245830f84673359c6ce985113922cedd3eaff5d062e8_prof);

        
        $__internal_85ef5238c58fbf1cfa81fa0fa950bd72df9a03d6c02741589a4bf43554bdad1f->leave($__internal_85ef5238c58fbf1cfa81fa0fa950bd72df9a03d6c02741589a4bf43554bdad1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
