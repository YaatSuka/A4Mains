<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a347f395b34993775ef754ec05528d1a7fb3d53173e49c93a3e3c35cc716ff41 extends Twig_Template
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
        $__internal_0e0d84e1c018770eeab0847c9d0ed2b0d97079d09fbdc393ff067dab5a896a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0d84e1c018770eeab0847c9d0ed2b0d97079d09fbdc393ff067dab5a896a00->enter($__internal_0e0d84e1c018770eeab0847c9d0ed2b0d97079d09fbdc393ff067dab5a896a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_19fd080d70f5dbb874a8b819f69b9df41b6b3985eeac61b3391ed05981c5b31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fd080d70f5dbb874a8b819f69b9df41b6b3985eeac61b3391ed05981c5b31b->enter($__internal_19fd080d70f5dbb874a8b819f69b9df41b6b3985eeac61b3391ed05981c5b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0e0d84e1c018770eeab0847c9d0ed2b0d97079d09fbdc393ff067dab5a896a00->leave($__internal_0e0d84e1c018770eeab0847c9d0ed2b0d97079d09fbdc393ff067dab5a896a00_prof);

        
        $__internal_19fd080d70f5dbb874a8b819f69b9df41b6b3985eeac61b3391ed05981c5b31b->leave($__internal_19fd080d70f5dbb874a8b819f69b9df41b6b3985eeac61b3391ed05981c5b31b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
