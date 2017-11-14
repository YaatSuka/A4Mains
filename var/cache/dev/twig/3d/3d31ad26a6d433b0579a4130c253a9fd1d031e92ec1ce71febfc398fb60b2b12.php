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
        $__internal_87fb58765cd681924eebc462585f63790396706790984d96b2776cb0b5c8fa23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fb58765cd681924eebc462585f63790396706790984d96b2776cb0b5c8fa23->enter($__internal_87fb58765cd681924eebc462585f63790396706790984d96b2776cb0b5c8fa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b8a71b6c3582bfa4b3ecc48e24b75b1cca0f02a5b2033d5688fa7c2bc4f95f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a71b6c3582bfa4b3ecc48e24b75b1cca0f02a5b2033d5688fa7c2bc4f95f53->enter($__internal_b8a71b6c3582bfa4b3ecc48e24b75b1cca0f02a5b2033d5688fa7c2bc4f95f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_87fb58765cd681924eebc462585f63790396706790984d96b2776cb0b5c8fa23->leave($__internal_87fb58765cd681924eebc462585f63790396706790984d96b2776cb0b5c8fa23_prof);

        
        $__internal_b8a71b6c3582bfa4b3ecc48e24b75b1cca0f02a5b2033d5688fa7c2bc4f95f53->leave($__internal_b8a71b6c3582bfa4b3ecc48e24b75b1cca0f02a5b2033d5688fa7c2bc4f95f53_prof);

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
