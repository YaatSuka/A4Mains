<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bd33135d8a364ebf7e2e061812715878ed7c5236d078604b6fab71e506e3d5de extends Twig_Template
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
        $__internal_23ec5bdf9d012b0ea1b797b4ccc9175b5fe58d44eca8e4ee2c55f33d1940decb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ec5bdf9d012b0ea1b797b4ccc9175b5fe58d44eca8e4ee2c55f33d1940decb->enter($__internal_23ec5bdf9d012b0ea1b797b4ccc9175b5fe58d44eca8e4ee2c55f33d1940decb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f7a6147b906c3b4ac5d28ac5655498f202fd80a124fa8737b339e22f0a4da4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a6147b906c3b4ac5d28ac5655498f202fd80a124fa8737b339e22f0a4da4d6->enter($__internal_f7a6147b906c3b4ac5d28ac5655498f202fd80a124fa8737b339e22f0a4da4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_23ec5bdf9d012b0ea1b797b4ccc9175b5fe58d44eca8e4ee2c55f33d1940decb->leave($__internal_23ec5bdf9d012b0ea1b797b4ccc9175b5fe58d44eca8e4ee2c55f33d1940decb_prof);

        
        $__internal_f7a6147b906c3b4ac5d28ac5655498f202fd80a124fa8737b339e22f0a4da4d6->leave($__internal_f7a6147b906c3b4ac5d28ac5655498f202fd80a124fa8737b339e22f0a4da4d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
