<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b1efc03a6d566fb0a4a2a96a2c5a4162c5c28d24bb6556f29f05d5032aff78cd extends Twig_Template
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
        $__internal_8f9716892d2f435ee5dcabaeadfe69362bbf7d41fa25eea2852f0f51f021e0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9716892d2f435ee5dcabaeadfe69362bbf7d41fa25eea2852f0f51f021e0c6->enter($__internal_8f9716892d2f435ee5dcabaeadfe69362bbf7d41fa25eea2852f0f51f021e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4b4464d07b45ad7ccadea82893ff9015bf5eff51244b47f30ff86d1605ed1e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4464d07b45ad7ccadea82893ff9015bf5eff51244b47f30ff86d1605ed1e94->enter($__internal_4b4464d07b45ad7ccadea82893ff9015bf5eff51244b47f30ff86d1605ed1e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8f9716892d2f435ee5dcabaeadfe69362bbf7d41fa25eea2852f0f51f021e0c6->leave($__internal_8f9716892d2f435ee5dcabaeadfe69362bbf7d41fa25eea2852f0f51f021e0c6_prof);

        
        $__internal_4b4464d07b45ad7ccadea82893ff9015bf5eff51244b47f30ff86d1605ed1e94->leave($__internal_4b4464d07b45ad7ccadea82893ff9015bf5eff51244b47f30ff86d1605ed1e94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
