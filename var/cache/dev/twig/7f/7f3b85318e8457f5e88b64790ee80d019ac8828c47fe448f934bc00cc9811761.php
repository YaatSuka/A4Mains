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
        $__internal_14453fe85611062d24ce97ed6a28d8225000e8e81ee43313f87fcc2667d00309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14453fe85611062d24ce97ed6a28d8225000e8e81ee43313f87fcc2667d00309->enter($__internal_14453fe85611062d24ce97ed6a28d8225000e8e81ee43313f87fcc2667d00309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_822fc76e594e8fbd38f26e438f9f2ceacfa9afa93b5a976aadc9022c01589579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822fc76e594e8fbd38f26e438f9f2ceacfa9afa93b5a976aadc9022c01589579->enter($__internal_822fc76e594e8fbd38f26e438f9f2ceacfa9afa93b5a976aadc9022c01589579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_14453fe85611062d24ce97ed6a28d8225000e8e81ee43313f87fcc2667d00309->leave($__internal_14453fe85611062d24ce97ed6a28d8225000e8e81ee43313f87fcc2667d00309_prof);

        
        $__internal_822fc76e594e8fbd38f26e438f9f2ceacfa9afa93b5a976aadc9022c01589579->leave($__internal_822fc76e594e8fbd38f26e438f9f2ceacfa9afa93b5a976aadc9022c01589579_prof);

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
