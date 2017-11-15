<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0c69f7a9779c463d7118b19640b8b22a9d6c32125d63ec4cd21ab7fc03497f52 extends Twig_Template
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
        $__internal_0bbcbd0634645421a96c5980c77bd038d7c7b5a2f2f10f272b803540a5496a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbcbd0634645421a96c5980c77bd038d7c7b5a2f2f10f272b803540a5496a17->enter($__internal_0bbcbd0634645421a96c5980c77bd038d7c7b5a2f2f10f272b803540a5496a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_55d303d60c218b7fde46a64ffff2689317816d384b8dccb79008eb30ff749844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d303d60c218b7fde46a64ffff2689317816d384b8dccb79008eb30ff749844->enter($__internal_55d303d60c218b7fde46a64ffff2689317816d384b8dccb79008eb30ff749844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0bbcbd0634645421a96c5980c77bd038d7c7b5a2f2f10f272b803540a5496a17->leave($__internal_0bbcbd0634645421a96c5980c77bd038d7c7b5a2f2f10f272b803540a5496a17_prof);

        
        $__internal_55d303d60c218b7fde46a64ffff2689317816d384b8dccb79008eb30ff749844->leave($__internal_55d303d60c218b7fde46a64ffff2689317816d384b8dccb79008eb30ff749844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
