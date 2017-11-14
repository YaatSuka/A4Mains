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
        $__internal_1d8c4aba0c134651c6b19c208f01faf5a4d7229e005a3f9743add1cb3a072507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8c4aba0c134651c6b19c208f01faf5a4d7229e005a3f9743add1cb3a072507->enter($__internal_1d8c4aba0c134651c6b19c208f01faf5a4d7229e005a3f9743add1cb3a072507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b2adad74b5ea4fc85d3c41527b6bf9813b5498ecbb79ca6f9504d6feb9410772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2adad74b5ea4fc85d3c41527b6bf9813b5498ecbb79ca6f9504d6feb9410772->enter($__internal_b2adad74b5ea4fc85d3c41527b6bf9813b5498ecbb79ca6f9504d6feb9410772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1d8c4aba0c134651c6b19c208f01faf5a4d7229e005a3f9743add1cb3a072507->leave($__internal_1d8c4aba0c134651c6b19c208f01faf5a4d7229e005a3f9743add1cb3a072507_prof);

        
        $__internal_b2adad74b5ea4fc85d3c41527b6bf9813b5498ecbb79ca6f9504d6feb9410772->leave($__internal_b2adad74b5ea4fc85d3c41527b6bf9813b5498ecbb79ca6f9504d6feb9410772_prof);

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
