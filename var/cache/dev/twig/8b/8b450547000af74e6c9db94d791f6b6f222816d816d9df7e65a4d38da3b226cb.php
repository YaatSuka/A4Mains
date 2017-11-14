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
        $__internal_8861e490d7187d040d24620b4d46994451325adb176f23f85b97206552486cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8861e490d7187d040d24620b4d46994451325adb176f23f85b97206552486cf1->enter($__internal_8861e490d7187d040d24620b4d46994451325adb176f23f85b97206552486cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_63253dec5049878ada1ca00484b9df2d2580ff252863d12c2ea3f737a182aa29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63253dec5049878ada1ca00484b9df2d2580ff252863d12c2ea3f737a182aa29->enter($__internal_63253dec5049878ada1ca00484b9df2d2580ff252863d12c2ea3f737a182aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8861e490d7187d040d24620b4d46994451325adb176f23f85b97206552486cf1->leave($__internal_8861e490d7187d040d24620b4d46994451325adb176f23f85b97206552486cf1_prof);

        
        $__internal_63253dec5049878ada1ca00484b9df2d2580ff252863d12c2ea3f737a182aa29->leave($__internal_63253dec5049878ada1ca00484b9df2d2580ff252863d12c2ea3f737a182aa29_prof);

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
