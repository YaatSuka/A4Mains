<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_09d20e62a89e8de68ad16fe99a2369f62e06f58df6ff578fde7c4b61d88747df extends Twig_Template
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
        $__internal_8d5f2b9348fdf28cd8a5e93991507c25b1645633e873bd9e6a432cb7d6678eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5f2b9348fdf28cd8a5e93991507c25b1645633e873bd9e6a432cb7d6678eb5->enter($__internal_8d5f2b9348fdf28cd8a5e93991507c25b1645633e873bd9e6a432cb7d6678eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d7d8048d9fa7bf77ae842ecb24070256b993384c8fbe5fc59072471bbbc7558f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d8048d9fa7bf77ae842ecb24070256b993384c8fbe5fc59072471bbbc7558f->enter($__internal_d7d8048d9fa7bf77ae842ecb24070256b993384c8fbe5fc59072471bbbc7558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8d5f2b9348fdf28cd8a5e93991507c25b1645633e873bd9e6a432cb7d6678eb5->leave($__internal_8d5f2b9348fdf28cd8a5e93991507c25b1645633e873bd9e6a432cb7d6678eb5_prof);

        
        $__internal_d7d8048d9fa7bf77ae842ecb24070256b993384c8fbe5fc59072471bbbc7558f->leave($__internal_d7d8048d9fa7bf77ae842ecb24070256b993384c8fbe5fc59072471bbbc7558f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
