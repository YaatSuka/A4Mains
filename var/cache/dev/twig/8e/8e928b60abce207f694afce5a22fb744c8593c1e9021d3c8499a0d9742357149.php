<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_30f5537e12243606d3b5dbde6e691ed025f0ba9bd6b1894e757be61725c67010 extends Twig_Template
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
        $__internal_cf29eb6990852921b71d483a5fd6f92da303ff91ca3174933d0c3a4bc1a5e676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf29eb6990852921b71d483a5fd6f92da303ff91ca3174933d0c3a4bc1a5e676->enter($__internal_cf29eb6990852921b71d483a5fd6f92da303ff91ca3174933d0c3a4bc1a5e676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_295591b8c8ec658fd45fdf6fdfae1919872a5fe2412259cf698a80066ef2453d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295591b8c8ec658fd45fdf6fdfae1919872a5fe2412259cf698a80066ef2453d->enter($__internal_295591b8c8ec658fd45fdf6fdfae1919872a5fe2412259cf698a80066ef2453d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_cf29eb6990852921b71d483a5fd6f92da303ff91ca3174933d0c3a4bc1a5e676->leave($__internal_cf29eb6990852921b71d483a5fd6f92da303ff91ca3174933d0c3a4bc1a5e676_prof);

        
        $__internal_295591b8c8ec658fd45fdf6fdfae1919872a5fe2412259cf698a80066ef2453d->leave($__internal_295591b8c8ec658fd45fdf6fdfae1919872a5fe2412259cf698a80066ef2453d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
