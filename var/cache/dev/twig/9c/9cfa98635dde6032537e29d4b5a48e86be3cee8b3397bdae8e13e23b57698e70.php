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
        $__internal_49ea70506418cc618dd3c0270e462675e0097bef82d98ccec7f11b9435654ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ea70506418cc618dd3c0270e462675e0097bef82d98ccec7f11b9435654ccd->enter($__internal_49ea70506418cc618dd3c0270e462675e0097bef82d98ccec7f11b9435654ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8bef8af7b42fbdf82b002aad23925a625d0b476b65225665c7d3e81dfef20a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bef8af7b42fbdf82b002aad23925a625d0b476b65225665c7d3e81dfef20a60->enter($__internal_8bef8af7b42fbdf82b002aad23925a625d0b476b65225665c7d3e81dfef20a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_49ea70506418cc618dd3c0270e462675e0097bef82d98ccec7f11b9435654ccd->leave($__internal_49ea70506418cc618dd3c0270e462675e0097bef82d98ccec7f11b9435654ccd_prof);

        
        $__internal_8bef8af7b42fbdf82b002aad23925a625d0b476b65225665c7d3e81dfef20a60->leave($__internal_8bef8af7b42fbdf82b002aad23925a625d0b476b65225665c7d3e81dfef20a60_prof);

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
