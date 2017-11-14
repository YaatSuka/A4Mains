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
        $__internal_ced118f80ba1f134766215740ec4af89cb2b9cd75c58c667367263ffdc2336ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced118f80ba1f134766215740ec4af89cb2b9cd75c58c667367263ffdc2336ae->enter($__internal_ced118f80ba1f134766215740ec4af89cb2b9cd75c58c667367263ffdc2336ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_55ad1dc60f11a11eb941d6700f6c9164289d506b4a3506de0a7ea29f6c4679f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ad1dc60f11a11eb941d6700f6c9164289d506b4a3506de0a7ea29f6c4679f5->enter($__internal_55ad1dc60f11a11eb941d6700f6c9164289d506b4a3506de0a7ea29f6c4679f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ced118f80ba1f134766215740ec4af89cb2b9cd75c58c667367263ffdc2336ae->leave($__internal_ced118f80ba1f134766215740ec4af89cb2b9cd75c58c667367263ffdc2336ae_prof);

        
        $__internal_55ad1dc60f11a11eb941d6700f6c9164289d506b4a3506de0a7ea29f6c4679f5->leave($__internal_55ad1dc60f11a11eb941d6700f6c9164289d506b4a3506de0a7ea29f6c4679f5_prof);

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
