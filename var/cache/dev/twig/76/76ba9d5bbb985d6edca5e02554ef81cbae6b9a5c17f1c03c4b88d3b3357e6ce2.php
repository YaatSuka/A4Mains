<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7160ceab0f0cf6d12a55ab7c8096ecc018d5b432ba766c32830784e9e915c13b extends Twig_Template
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
        $__internal_e25a4a7c485467a411701eb8b46e167b4974e634e82ced10bc22d7bba5fa5a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25a4a7c485467a411701eb8b46e167b4974e634e82ced10bc22d7bba5fa5a92->enter($__internal_e25a4a7c485467a411701eb8b46e167b4974e634e82ced10bc22d7bba5fa5a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6dce614db6486ae11ee3c60dd894c27b49390b08de8c28ab5bc7b2aaf9e52fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dce614db6486ae11ee3c60dd894c27b49390b08de8c28ab5bc7b2aaf9e52fc7->enter($__internal_6dce614db6486ae11ee3c60dd894c27b49390b08de8c28ab5bc7b2aaf9e52fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e25a4a7c485467a411701eb8b46e167b4974e634e82ced10bc22d7bba5fa5a92->leave($__internal_e25a4a7c485467a411701eb8b46e167b4974e634e82ced10bc22d7bba5fa5a92_prof);

        
        $__internal_6dce614db6486ae11ee3c60dd894c27b49390b08de8c28ab5bc7b2aaf9e52fc7->leave($__internal_6dce614db6486ae11ee3c60dd894c27b49390b08de8c28ab5bc7b2aaf9e52fc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
