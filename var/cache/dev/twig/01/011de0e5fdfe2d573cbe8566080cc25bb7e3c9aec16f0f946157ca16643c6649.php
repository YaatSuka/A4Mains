<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1818dd0ad5a43806a4294893d0067db290cb6b5b3935cbfc9d9ef70f59e8dddf extends Twig_Template
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
        $__internal_c2f60d3fe80a81c62859cc695647606c834695734415fd9ff28b4c7e04d3c569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f60d3fe80a81c62859cc695647606c834695734415fd9ff28b4c7e04d3c569->enter($__internal_c2f60d3fe80a81c62859cc695647606c834695734415fd9ff28b4c7e04d3c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6dc57c792fbe6d4623e7c17f83a6c20de88680bbc8fd3a98f8e83b219d992458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc57c792fbe6d4623e7c17f83a6c20de88680bbc8fd3a98f8e83b219d992458->enter($__internal_6dc57c792fbe6d4623e7c17f83a6c20de88680bbc8fd3a98f8e83b219d992458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c2f60d3fe80a81c62859cc695647606c834695734415fd9ff28b4c7e04d3c569->leave($__internal_c2f60d3fe80a81c62859cc695647606c834695734415fd9ff28b4c7e04d3c569_prof);

        
        $__internal_6dc57c792fbe6d4623e7c17f83a6c20de88680bbc8fd3a98f8e83b219d992458->leave($__internal_6dc57c792fbe6d4623e7c17f83a6c20de88680bbc8fd3a98f8e83b219d992458_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
