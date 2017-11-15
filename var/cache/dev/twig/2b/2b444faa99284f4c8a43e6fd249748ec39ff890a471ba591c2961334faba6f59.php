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
        $__internal_2861283ed45bda5260030c214f40955b49a08b31496c8caf793ab75a21bfad01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2861283ed45bda5260030c214f40955b49a08b31496c8caf793ab75a21bfad01->enter($__internal_2861283ed45bda5260030c214f40955b49a08b31496c8caf793ab75a21bfad01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f818fac861c0225a74eaa67435fd1dc8663324b54c00088211fbfa6df2834a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f818fac861c0225a74eaa67435fd1dc8663324b54c00088211fbfa6df2834a1a->enter($__internal_f818fac861c0225a74eaa67435fd1dc8663324b54c00088211fbfa6df2834a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2861283ed45bda5260030c214f40955b49a08b31496c8caf793ab75a21bfad01->leave($__internal_2861283ed45bda5260030c214f40955b49a08b31496c8caf793ab75a21bfad01_prof);

        
        $__internal_f818fac861c0225a74eaa67435fd1dc8663324b54c00088211fbfa6df2834a1a->leave($__internal_f818fac861c0225a74eaa67435fd1dc8663324b54c00088211fbfa6df2834a1a_prof);

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
