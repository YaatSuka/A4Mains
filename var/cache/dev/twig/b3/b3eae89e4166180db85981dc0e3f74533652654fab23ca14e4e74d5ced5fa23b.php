<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c0759c8d70ce3204a0c476c76d3835aec9952cc3c17162520d32746fcfb8e50 extends Twig_Template
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
        $__internal_e17c2e62114a649616c9c43e2630d1b1dce8c6ed3571f499a00131511da4c39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17c2e62114a649616c9c43e2630d1b1dce8c6ed3571f499a00131511da4c39c->enter($__internal_e17c2e62114a649616c9c43e2630d1b1dce8c6ed3571f499a00131511da4c39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0aade0616da20ce50e7d4f0a223350df668c9fbc92fd94875fa4996142588b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aade0616da20ce50e7d4f0a223350df668c9fbc92fd94875fa4996142588b60->enter($__internal_0aade0616da20ce50e7d4f0a223350df668c9fbc92fd94875fa4996142588b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e17c2e62114a649616c9c43e2630d1b1dce8c6ed3571f499a00131511da4c39c->leave($__internal_e17c2e62114a649616c9c43e2630d1b1dce8c6ed3571f499a00131511da4c39c_prof);

        
        $__internal_0aade0616da20ce50e7d4f0a223350df668c9fbc92fd94875fa4996142588b60->leave($__internal_0aade0616da20ce50e7d4f0a223350df668c9fbc92fd94875fa4996142588b60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
