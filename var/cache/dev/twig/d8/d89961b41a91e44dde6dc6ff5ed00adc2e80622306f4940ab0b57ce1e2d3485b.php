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
        $__internal_0814f4764d624f0a9bf5c2575020f4500b5eb68369ee5dca7bf25e4cd0bb9618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0814f4764d624f0a9bf5c2575020f4500b5eb68369ee5dca7bf25e4cd0bb9618->enter($__internal_0814f4764d624f0a9bf5c2575020f4500b5eb68369ee5dca7bf25e4cd0bb9618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3224c5463cd48469b35413fd238fbfdc3d9c7f8e1253a240084a81322e86642b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3224c5463cd48469b35413fd238fbfdc3d9c7f8e1253a240084a81322e86642b->enter($__internal_3224c5463cd48469b35413fd238fbfdc3d9c7f8e1253a240084a81322e86642b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0814f4764d624f0a9bf5c2575020f4500b5eb68369ee5dca7bf25e4cd0bb9618->leave($__internal_0814f4764d624f0a9bf5c2575020f4500b5eb68369ee5dca7bf25e4cd0bb9618_prof);

        
        $__internal_3224c5463cd48469b35413fd238fbfdc3d9c7f8e1253a240084a81322e86642b->leave($__internal_3224c5463cd48469b35413fd238fbfdc3d9c7f8e1253a240084a81322e86642b_prof);

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
