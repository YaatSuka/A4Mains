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
        $__internal_2b8da461c989a66b5f7efbcde16cca70dff4fb6a24b74ab0edac5be92f15d72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8da461c989a66b5f7efbcde16cca70dff4fb6a24b74ab0edac5be92f15d72f->enter($__internal_2b8da461c989a66b5f7efbcde16cca70dff4fb6a24b74ab0edac5be92f15d72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0b213e7440eb69b8031b15b3e8cc9ab5dbbedbb96aec8d319be920b17c819833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b213e7440eb69b8031b15b3e8cc9ab5dbbedbb96aec8d319be920b17c819833->enter($__internal_0b213e7440eb69b8031b15b3e8cc9ab5dbbedbb96aec8d319be920b17c819833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2b8da461c989a66b5f7efbcde16cca70dff4fb6a24b74ab0edac5be92f15d72f->leave($__internal_2b8da461c989a66b5f7efbcde16cca70dff4fb6a24b74ab0edac5be92f15d72f_prof);

        
        $__internal_0b213e7440eb69b8031b15b3e8cc9ab5dbbedbb96aec8d319be920b17c819833->leave($__internal_0b213e7440eb69b8031b15b3e8cc9ab5dbbedbb96aec8d319be920b17c819833_prof);

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
