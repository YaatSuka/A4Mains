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
        $__internal_2b3f88d65fe85fb3491f073440cef0b0f17287672f047c65fe4d371ecf5df6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3f88d65fe85fb3491f073440cef0b0f17287672f047c65fe4d371ecf5df6e2->enter($__internal_2b3f88d65fe85fb3491f073440cef0b0f17287672f047c65fe4d371ecf5df6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3922873c18e47a973edac03b16effcf903caab87cbcff7d36e11ce6e5c6a1277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3922873c18e47a973edac03b16effcf903caab87cbcff7d36e11ce6e5c6a1277->enter($__internal_3922873c18e47a973edac03b16effcf903caab87cbcff7d36e11ce6e5c6a1277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2b3f88d65fe85fb3491f073440cef0b0f17287672f047c65fe4d371ecf5df6e2->leave($__internal_2b3f88d65fe85fb3491f073440cef0b0f17287672f047c65fe4d371ecf5df6e2_prof);

        
        $__internal_3922873c18e47a973edac03b16effcf903caab87cbcff7d36e11ce6e5c6a1277->leave($__internal_3922873c18e47a973edac03b16effcf903caab87cbcff7d36e11ce6e5c6a1277_prof);

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
