<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8736a511b777f32640693dab588eb9d94b9d860e274bcf4efa7da0851bb59358 extends Twig_Template
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
        $__internal_145fa070081104de541dea7ed1c78e55af9369fd825bad90904c49937f049aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145fa070081104de541dea7ed1c78e55af9369fd825bad90904c49937f049aae->enter($__internal_145fa070081104de541dea7ed1c78e55af9369fd825bad90904c49937f049aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d2c0a27e69c90b0d34c529d04951e904538fd4c3e5908834a7311aea0c244353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c0a27e69c90b0d34c529d04951e904538fd4c3e5908834a7311aea0c244353->enter($__internal_d2c0a27e69c90b0d34c529d04951e904538fd4c3e5908834a7311aea0c244353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_145fa070081104de541dea7ed1c78e55af9369fd825bad90904c49937f049aae->leave($__internal_145fa070081104de541dea7ed1c78e55af9369fd825bad90904c49937f049aae_prof);

        
        $__internal_d2c0a27e69c90b0d34c529d04951e904538fd4c3e5908834a7311aea0c244353->leave($__internal_d2c0a27e69c90b0d34c529d04951e904538fd4c3e5908834a7311aea0c244353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
