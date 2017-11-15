<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_300a627cbd97d1bd70ef3fab11d72316f6fba64cd278ecd2f8c00f1595f9f347 extends Twig_Template
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
        $__internal_4fa4bff85be2cb1caf90df8c8c4881e55b73265d9de0b142a1f8db6e013d176e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa4bff85be2cb1caf90df8c8c4881e55b73265d9de0b142a1f8db6e013d176e->enter($__internal_4fa4bff85be2cb1caf90df8c8c4881e55b73265d9de0b142a1f8db6e013d176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0cc98b8f5ee8b704b40f29d675cf698ba933db6038e04afeb30287da56ebb66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc98b8f5ee8b704b40f29d675cf698ba933db6038e04afeb30287da56ebb66f->enter($__internal_0cc98b8f5ee8b704b40f29d675cf698ba933db6038e04afeb30287da56ebb66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4fa4bff85be2cb1caf90df8c8c4881e55b73265d9de0b142a1f8db6e013d176e->leave($__internal_4fa4bff85be2cb1caf90df8c8c4881e55b73265d9de0b142a1f8db6e013d176e_prof);

        
        $__internal_0cc98b8f5ee8b704b40f29d675cf698ba933db6038e04afeb30287da56ebb66f->leave($__internal_0cc98b8f5ee8b704b40f29d675cf698ba933db6038e04afeb30287da56ebb66f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
