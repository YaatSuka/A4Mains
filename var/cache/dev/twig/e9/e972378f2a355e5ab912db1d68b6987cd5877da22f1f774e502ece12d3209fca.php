<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_d939073c8e855f28fe26c6764dfd06038c9ca714639e1d9c3b4141de6b228dc5 extends Twig_Template
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
        $__internal_093ac16507367fa7bd578c198991515cb2f36f0993589dcf28485267add0354f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093ac16507367fa7bd578c198991515cb2f36f0993589dcf28485267add0354f->enter($__internal_093ac16507367fa7bd578c198991515cb2f36f0993589dcf28485267add0354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4aa5f5a9ac602972f8e8e8ecac5aae059d71d70d27e870c676a4d5db3a704e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa5f5a9ac602972f8e8e8ecac5aae059d71d70d27e870c676a4d5db3a704e0a->enter($__internal_4aa5f5a9ac602972f8e8e8ecac5aae059d71d70d27e870c676a4d5db3a704e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_093ac16507367fa7bd578c198991515cb2f36f0993589dcf28485267add0354f->leave($__internal_093ac16507367fa7bd578c198991515cb2f36f0993589dcf28485267add0354f_prof);

        
        $__internal_4aa5f5a9ac602972f8e8e8ecac5aae059d71d70d27e870c676a4d5db3a704e0a->leave($__internal_4aa5f5a9ac602972f8e8e8ecac5aae059d71d70d27e870c676a4d5db3a704e0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
