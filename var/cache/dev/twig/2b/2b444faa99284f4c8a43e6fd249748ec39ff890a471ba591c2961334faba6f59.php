<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_08df07ccea80d99d0dafb1c0c21f483831ab8fb6fef59f21390e3f5a3ee6df92 extends Twig_Template
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
        $__internal_6cce6453b542cf202765230e701dc5c770e9850dffb005cb4aa8bb41c9f2c567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cce6453b542cf202765230e701dc5c770e9850dffb005cb4aa8bb41c9f2c567->enter($__internal_6cce6453b542cf202765230e701dc5c770e9850dffb005cb4aa8bb41c9f2c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5ba1faf454a3e5505c47d87588e1e178a77c0c5e08d07ad3f6a7cb631d718e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba1faf454a3e5505c47d87588e1e178a77c0c5e08d07ad3f6a7cb631d718e60->enter($__internal_5ba1faf454a3e5505c47d87588e1e178a77c0c5e08d07ad3f6a7cb631d718e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6cce6453b542cf202765230e701dc5c770e9850dffb005cb4aa8bb41c9f2c567->leave($__internal_6cce6453b542cf202765230e701dc5c770e9850dffb005cb4aa8bb41c9f2c567_prof);

        
        $__internal_5ba1faf454a3e5505c47d87588e1e178a77c0c5e08d07ad3f6a7cb631d718e60->leave($__internal_5ba1faf454a3e5505c47d87588e1e178a77c0c5e08d07ad3f6a7cb631d718e60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
