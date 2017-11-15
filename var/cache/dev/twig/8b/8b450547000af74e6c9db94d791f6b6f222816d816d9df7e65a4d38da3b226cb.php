<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d6ac4c39a4154f66a32cf7379c01e687c4242adfb7f02e0232ad1389ee783a68 extends Twig_Template
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
        $__internal_d2fea2b714fd951ad05bdbfcd9fab274219b12af44e4000b482de799ebb7ec30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fea2b714fd951ad05bdbfcd9fab274219b12af44e4000b482de799ebb7ec30->enter($__internal_d2fea2b714fd951ad05bdbfcd9fab274219b12af44e4000b482de799ebb7ec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9872da6cfaf7dfc2c8013484cd5e4d433fe2bc667d69785218eaeee8f0c0b57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9872da6cfaf7dfc2c8013484cd5e4d433fe2bc667d69785218eaeee8f0c0b57a->enter($__internal_9872da6cfaf7dfc2c8013484cd5e4d433fe2bc667d69785218eaeee8f0c0b57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d2fea2b714fd951ad05bdbfcd9fab274219b12af44e4000b482de799ebb7ec30->leave($__internal_d2fea2b714fd951ad05bdbfcd9fab274219b12af44e4000b482de799ebb7ec30_prof);

        
        $__internal_9872da6cfaf7dfc2c8013484cd5e4d433fe2bc667d69785218eaeee8f0c0b57a->leave($__internal_9872da6cfaf7dfc2c8013484cd5e4d433fe2bc667d69785218eaeee8f0c0b57a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
