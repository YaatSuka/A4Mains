<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d48cc69a778cb61b15c5b8fa0992317571aca559cee2c6cb38be818cf3697663 extends Twig_Template
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
        $__internal_8499741cf9641ddfea8ce1c3075082c76d6f27e0ea33dd6d642f1b2764f6c392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8499741cf9641ddfea8ce1c3075082c76d6f27e0ea33dd6d642f1b2764f6c392->enter($__internal_8499741cf9641ddfea8ce1c3075082c76d6f27e0ea33dd6d642f1b2764f6c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_572270dbd0d83ac319ac4ca28116df8ed6a0487c328be16c3e06255c73d2c227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572270dbd0d83ac319ac4ca28116df8ed6a0487c328be16c3e06255c73d2c227->enter($__internal_572270dbd0d83ac319ac4ca28116df8ed6a0487c328be16c3e06255c73d2c227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8499741cf9641ddfea8ce1c3075082c76d6f27e0ea33dd6d642f1b2764f6c392->leave($__internal_8499741cf9641ddfea8ce1c3075082c76d6f27e0ea33dd6d642f1b2764f6c392_prof);

        
        $__internal_572270dbd0d83ac319ac4ca28116df8ed6a0487c328be16c3e06255c73d2c227->leave($__internal_572270dbd0d83ac319ac4ca28116df8ed6a0487c328be16c3e06255c73d2c227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
