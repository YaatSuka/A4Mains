<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ad6173e551a24f9390da27a8862af78f7b1939bbcaaf4cc14611445886bfe4de extends Twig_Template
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
        $__internal_b6bc0117ee453c6b3167e29bff217b7f81f6f38d31e4a9019644447b9444d02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bc0117ee453c6b3167e29bff217b7f81f6f38d31e4a9019644447b9444d02b->enter($__internal_b6bc0117ee453c6b3167e29bff217b7f81f6f38d31e4a9019644447b9444d02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_36dfe60ed4a03bd8a166a40a2b596db16efd13b50bd53556736d884ca631240d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dfe60ed4a03bd8a166a40a2b596db16efd13b50bd53556736d884ca631240d->enter($__internal_36dfe60ed4a03bd8a166a40a2b596db16efd13b50bd53556736d884ca631240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b6bc0117ee453c6b3167e29bff217b7f81f6f38d31e4a9019644447b9444d02b->leave($__internal_b6bc0117ee453c6b3167e29bff217b7f81f6f38d31e4a9019644447b9444d02b_prof);

        
        $__internal_36dfe60ed4a03bd8a166a40a2b596db16efd13b50bd53556736d884ca631240d->leave($__internal_36dfe60ed4a03bd8a166a40a2b596db16efd13b50bd53556736d884ca631240d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
