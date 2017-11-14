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
        $__internal_41a8e7b72abb7a34fc5882fb750b513ff7ebd2e6dcf004350301f0c8eed0d130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a8e7b72abb7a34fc5882fb750b513ff7ebd2e6dcf004350301f0c8eed0d130->enter($__internal_41a8e7b72abb7a34fc5882fb750b513ff7ebd2e6dcf004350301f0c8eed0d130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_db5ef4aeff91180e24c70afb2ca4fc1e0222f8c5b451ebb4ab4bc67d51b143b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5ef4aeff91180e24c70afb2ca4fc1e0222f8c5b451ebb4ab4bc67d51b143b1->enter($__internal_db5ef4aeff91180e24c70afb2ca4fc1e0222f8c5b451ebb4ab4bc67d51b143b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_41a8e7b72abb7a34fc5882fb750b513ff7ebd2e6dcf004350301f0c8eed0d130->leave($__internal_41a8e7b72abb7a34fc5882fb750b513ff7ebd2e6dcf004350301f0c8eed0d130_prof);

        
        $__internal_db5ef4aeff91180e24c70afb2ca4fc1e0222f8c5b451ebb4ab4bc67d51b143b1->leave($__internal_db5ef4aeff91180e24c70afb2ca4fc1e0222f8c5b451ebb4ab4bc67d51b143b1_prof);

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
