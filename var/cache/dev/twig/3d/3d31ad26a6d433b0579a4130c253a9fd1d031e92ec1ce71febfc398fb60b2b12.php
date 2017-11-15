<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f31b15809f33c43a4b2d10b6b12c4785ee716ff716dc5ce357a3fe9932d9b023 extends Twig_Template
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
        $__internal_36d5a0a18d060be40c46664f73c07d7f89feecc9ddd555d102f0384092d9c058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d5a0a18d060be40c46664f73c07d7f89feecc9ddd555d102f0384092d9c058->enter($__internal_36d5a0a18d060be40c46664f73c07d7f89feecc9ddd555d102f0384092d9c058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_939c8ab1a15fcb66eada022d96180ede19b30787605fbb620c00a21716321335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939c8ab1a15fcb66eada022d96180ede19b30787605fbb620c00a21716321335->enter($__internal_939c8ab1a15fcb66eada022d96180ede19b30787605fbb620c00a21716321335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_36d5a0a18d060be40c46664f73c07d7f89feecc9ddd555d102f0384092d9c058->leave($__internal_36d5a0a18d060be40c46664f73c07d7f89feecc9ddd555d102f0384092d9c058_prof);

        
        $__internal_939c8ab1a15fcb66eada022d96180ede19b30787605fbb620c00a21716321335->leave($__internal_939c8ab1a15fcb66eada022d96180ede19b30787605fbb620c00a21716321335_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
