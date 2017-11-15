<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ebdef7015c991603cc85346e8675b0c8845e4f47382a283e12d3f9b400c543b0 extends Twig_Template
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
        $__internal_5452e9a3a299af0435bdae64ab8ca2d1902ef46bb09644296547efc56cc3b242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5452e9a3a299af0435bdae64ab8ca2d1902ef46bb09644296547efc56cc3b242->enter($__internal_5452e9a3a299af0435bdae64ab8ca2d1902ef46bb09644296547efc56cc3b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_13f7011895b379c5cdf9d4ef59b68f619eeb5cd0de561cf17232907f7ae6ab8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f7011895b379c5cdf9d4ef59b68f619eeb5cd0de561cf17232907f7ae6ab8d->enter($__internal_13f7011895b379c5cdf9d4ef59b68f619eeb5cd0de561cf17232907f7ae6ab8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5452e9a3a299af0435bdae64ab8ca2d1902ef46bb09644296547efc56cc3b242->leave($__internal_5452e9a3a299af0435bdae64ab8ca2d1902ef46bb09644296547efc56cc3b242_prof);

        
        $__internal_13f7011895b379c5cdf9d4ef59b68f619eeb5cd0de561cf17232907f7ae6ab8d->leave($__internal_13f7011895b379c5cdf9d4ef59b68f619eeb5cd0de561cf17232907f7ae6ab8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
