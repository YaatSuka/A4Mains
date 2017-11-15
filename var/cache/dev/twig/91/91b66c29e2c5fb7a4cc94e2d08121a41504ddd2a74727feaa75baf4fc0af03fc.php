<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5fb8d30f8c146d1d83c063ecf3a0e6b200ebec90bd075ece951f64ffcb2bd237 extends Twig_Template
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
        $__internal_fd6966cb31d4b0e784c64f9ea04c85f4c0b8357b8df1cd9cb731102b62d57f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6966cb31d4b0e784c64f9ea04c85f4c0b8357b8df1cd9cb731102b62d57f8e->enter($__internal_fd6966cb31d4b0e784c64f9ea04c85f4c0b8357b8df1cd9cb731102b62d57f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3f9366c417e9ba242e19366d3ec18a78dc966027ffe9080b2caaee526bedf53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9366c417e9ba242e19366d3ec18a78dc966027ffe9080b2caaee526bedf53d->enter($__internal_3f9366c417e9ba242e19366d3ec18a78dc966027ffe9080b2caaee526bedf53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fd6966cb31d4b0e784c64f9ea04c85f4c0b8357b8df1cd9cb731102b62d57f8e->leave($__internal_fd6966cb31d4b0e784c64f9ea04c85f4c0b8357b8df1cd9cb731102b62d57f8e_prof);

        
        $__internal_3f9366c417e9ba242e19366d3ec18a78dc966027ffe9080b2caaee526bedf53d->leave($__internal_3f9366c417e9ba242e19366d3ec18a78dc966027ffe9080b2caaee526bedf53d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
