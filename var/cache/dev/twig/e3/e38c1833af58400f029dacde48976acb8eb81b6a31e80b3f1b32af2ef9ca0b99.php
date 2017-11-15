<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_58be7a80af90efcaa3772ac9ce926b0d5f5987625366dcfa17aa4b4fdff2c6ed extends Twig_Template
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
        $__internal_164320bf8a0a07d1bb3177f7a20687a086980862067ef345af61543cd9ab0bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164320bf8a0a07d1bb3177f7a20687a086980862067ef345af61543cd9ab0bc4->enter($__internal_164320bf8a0a07d1bb3177f7a20687a086980862067ef345af61543cd9ab0bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9e23dd7664e1c930def322cca8f6ed6c694089f9dcbbeb17aa28cc66ec980aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e23dd7664e1c930def322cca8f6ed6c694089f9dcbbeb17aa28cc66ec980aa4->enter($__internal_9e23dd7664e1c930def322cca8f6ed6c694089f9dcbbeb17aa28cc66ec980aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_164320bf8a0a07d1bb3177f7a20687a086980862067ef345af61543cd9ab0bc4->leave($__internal_164320bf8a0a07d1bb3177f7a20687a086980862067ef345af61543cd9ab0bc4_prof);

        
        $__internal_9e23dd7664e1c930def322cca8f6ed6c694089f9dcbbeb17aa28cc66ec980aa4->leave($__internal_9e23dd7664e1c930def322cca8f6ed6c694089f9dcbbeb17aa28cc66ec980aa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
