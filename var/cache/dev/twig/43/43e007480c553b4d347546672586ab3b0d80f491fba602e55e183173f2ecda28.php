<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7ae090a40171d21ee1fad56fc40f11c8f70ddca2481137effb7478287b4fe2ad extends Twig_Template
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
        $__internal_297a8d1bbabb13c3ff9dd1d1e488a97b13e1e88945e923ea706f8bc609f4ea70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297a8d1bbabb13c3ff9dd1d1e488a97b13e1e88945e923ea706f8bc609f4ea70->enter($__internal_297a8d1bbabb13c3ff9dd1d1e488a97b13e1e88945e923ea706f8bc609f4ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_54e070ba05edaed57c8733f4303454965bcbb1b8c11b85d6e7daf656aa668a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e070ba05edaed57c8733f4303454965bcbb1b8c11b85d6e7daf656aa668a72->enter($__internal_54e070ba05edaed57c8733f4303454965bcbb1b8c11b85d6e7daf656aa668a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_297a8d1bbabb13c3ff9dd1d1e488a97b13e1e88945e923ea706f8bc609f4ea70->leave($__internal_297a8d1bbabb13c3ff9dd1d1e488a97b13e1e88945e923ea706f8bc609f4ea70_prof);

        
        $__internal_54e070ba05edaed57c8733f4303454965bcbb1b8c11b85d6e7daf656aa668a72->leave($__internal_54e070ba05edaed57c8733f4303454965bcbb1b8c11b85d6e7daf656aa668a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
