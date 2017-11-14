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
        $__internal_1f82da371012c96ed008a04acc197e614acf93d9602ab0daf77f86c8ce2cf050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f82da371012c96ed008a04acc197e614acf93d9602ab0daf77f86c8ce2cf050->enter($__internal_1f82da371012c96ed008a04acc197e614acf93d9602ab0daf77f86c8ce2cf050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4c375df47e06a8bcb5f6502d40242f5403481b6ab6c8885fcb4f4a9ef8f8cd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c375df47e06a8bcb5f6502d40242f5403481b6ab6c8885fcb4f4a9ef8f8cd30->enter($__internal_4c375df47e06a8bcb5f6502d40242f5403481b6ab6c8885fcb4f4a9ef8f8cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1f82da371012c96ed008a04acc197e614acf93d9602ab0daf77f86c8ce2cf050->leave($__internal_1f82da371012c96ed008a04acc197e614acf93d9602ab0daf77f86c8ce2cf050_prof);

        
        $__internal_4c375df47e06a8bcb5f6502d40242f5403481b6ab6c8885fcb4f4a9ef8f8cd30->leave($__internal_4c375df47e06a8bcb5f6502d40242f5403481b6ab6c8885fcb4f4a9ef8f8cd30_prof);

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
