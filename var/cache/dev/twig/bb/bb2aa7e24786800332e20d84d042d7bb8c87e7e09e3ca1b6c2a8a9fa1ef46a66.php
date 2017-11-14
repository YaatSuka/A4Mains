<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_052366874b140da8ce7b50e01d3ec439585f69ddb885c6a4c612a034d12a4d40 extends Twig_Template
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
        $__internal_ab44868d285a332bdc9c48b5e80ceb1bd95b323ded7a4b9b78c9dd80db090bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab44868d285a332bdc9c48b5e80ceb1bd95b323ded7a4b9b78c9dd80db090bc4->enter($__internal_ab44868d285a332bdc9c48b5e80ceb1bd95b323ded7a4b9b78c9dd80db090bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7f7dff03ad6f75e14a0e229d69e83f7cd177092a7121d77f5a9710e47258d1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7dff03ad6f75e14a0e229d69e83f7cd177092a7121d77f5a9710e47258d1e6->enter($__internal_7f7dff03ad6f75e14a0e229d69e83f7cd177092a7121d77f5a9710e47258d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ab44868d285a332bdc9c48b5e80ceb1bd95b323ded7a4b9b78c9dd80db090bc4->leave($__internal_ab44868d285a332bdc9c48b5e80ceb1bd95b323ded7a4b9b78c9dd80db090bc4_prof);

        
        $__internal_7f7dff03ad6f75e14a0e229d69e83f7cd177092a7121d77f5a9710e47258d1e6->leave($__internal_7f7dff03ad6f75e14a0e229d69e83f7cd177092a7121d77f5a9710e47258d1e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
