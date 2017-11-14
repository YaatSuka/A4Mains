<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3950736500e10ee201096e956b43e70a9fe17701c57b21d6cf0b5d69684be4dc extends Twig_Template
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
        $__internal_f33ae131297d4573bcf436883733e86faaf0b7d316e8a0b5bc105f168829de14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33ae131297d4573bcf436883733e86faaf0b7d316e8a0b5bc105f168829de14->enter($__internal_f33ae131297d4573bcf436883733e86faaf0b7d316e8a0b5bc105f168829de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5ef6e74b37d7a0c7c8f481c2d8212ca124082c379446b573c7a19b8624b86ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef6e74b37d7a0c7c8f481c2d8212ca124082c379446b573c7a19b8624b86ce2->enter($__internal_5ef6e74b37d7a0c7c8f481c2d8212ca124082c379446b573c7a19b8624b86ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f33ae131297d4573bcf436883733e86faaf0b7d316e8a0b5bc105f168829de14->leave($__internal_f33ae131297d4573bcf436883733e86faaf0b7d316e8a0b5bc105f168829de14_prof);

        
        $__internal_5ef6e74b37d7a0c7c8f481c2d8212ca124082c379446b573c7a19b8624b86ce2->leave($__internal_5ef6e74b37d7a0c7c8f481c2d8212ca124082c379446b573c7a19b8624b86ce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
