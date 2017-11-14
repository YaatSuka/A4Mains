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
        $__internal_b0f153bde9e974d55a9fdbb4e11d2f2cc6e7703edd02c9e751a6011581596b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f153bde9e974d55a9fdbb4e11d2f2cc6e7703edd02c9e751a6011581596b4b->enter($__internal_b0f153bde9e974d55a9fdbb4e11d2f2cc6e7703edd02c9e751a6011581596b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_42795a2bb55f173a21193dd32f9e9217e5abd054694308be90e848f8b3684687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42795a2bb55f173a21193dd32f9e9217e5abd054694308be90e848f8b3684687->enter($__internal_42795a2bb55f173a21193dd32f9e9217e5abd054694308be90e848f8b3684687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b0f153bde9e974d55a9fdbb4e11d2f2cc6e7703edd02c9e751a6011581596b4b->leave($__internal_b0f153bde9e974d55a9fdbb4e11d2f2cc6e7703edd02c9e751a6011581596b4b_prof);

        
        $__internal_42795a2bb55f173a21193dd32f9e9217e5abd054694308be90e848f8b3684687->leave($__internal_42795a2bb55f173a21193dd32f9e9217e5abd054694308be90e848f8b3684687_prof);

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
