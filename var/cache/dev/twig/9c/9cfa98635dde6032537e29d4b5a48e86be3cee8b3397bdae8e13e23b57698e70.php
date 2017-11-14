<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_defc9b67b035ef4fb14284cd4b511b8e6a0a96095dd341a12e108ca030f0d84c extends Twig_Template
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
        $__internal_5cad0661ab0d7ce959d1d096008c414389ae9bbd3746ef28b9f42cd841434e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cad0661ab0d7ce959d1d096008c414389ae9bbd3746ef28b9f42cd841434e55->enter($__internal_5cad0661ab0d7ce959d1d096008c414389ae9bbd3746ef28b9f42cd841434e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8ba738117c0c5ff2b2349e37681352e384323b72004ea43dfbc30dfcb0b1e652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba738117c0c5ff2b2349e37681352e384323b72004ea43dfbc30dfcb0b1e652->enter($__internal_8ba738117c0c5ff2b2349e37681352e384323b72004ea43dfbc30dfcb0b1e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5cad0661ab0d7ce959d1d096008c414389ae9bbd3746ef28b9f42cd841434e55->leave($__internal_5cad0661ab0d7ce959d1d096008c414389ae9bbd3746ef28b9f42cd841434e55_prof);

        
        $__internal_8ba738117c0c5ff2b2349e37681352e384323b72004ea43dfbc30dfcb0b1e652->leave($__internal_8ba738117c0c5ff2b2349e37681352e384323b72004ea43dfbc30dfcb0b1e652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
