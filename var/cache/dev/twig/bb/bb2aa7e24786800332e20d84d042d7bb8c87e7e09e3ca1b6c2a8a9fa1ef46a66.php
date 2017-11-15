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
        $__internal_d93d74179295fab3f52d63584937dd31fecfb94812e71604196433ee8e9cf105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93d74179295fab3f52d63584937dd31fecfb94812e71604196433ee8e9cf105->enter($__internal_d93d74179295fab3f52d63584937dd31fecfb94812e71604196433ee8e9cf105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a219ce5463d9a1c1bd67e0fab1edc72fd2384d04c4ac5ae87c6b97df5b813c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a219ce5463d9a1c1bd67e0fab1edc72fd2384d04c4ac5ae87c6b97df5b813c6f->enter($__internal_a219ce5463d9a1c1bd67e0fab1edc72fd2384d04c4ac5ae87c6b97df5b813c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d93d74179295fab3f52d63584937dd31fecfb94812e71604196433ee8e9cf105->leave($__internal_d93d74179295fab3f52d63584937dd31fecfb94812e71604196433ee8e9cf105_prof);

        
        $__internal_a219ce5463d9a1c1bd67e0fab1edc72fd2384d04c4ac5ae87c6b97df5b813c6f->leave($__internal_a219ce5463d9a1c1bd67e0fab1edc72fd2384d04c4ac5ae87c6b97df5b813c6f_prof);

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
