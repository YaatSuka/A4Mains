<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_60d116840ff6af74d6dbd988f794ecfe14caaf0a6e8fd5768566af385bcd5137 extends Twig_Template
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
        $__internal_205925bf3f60b4620be9c2a81dd0840c6fc30a164da812a2072e550076288e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205925bf3f60b4620be9c2a81dd0840c6fc30a164da812a2072e550076288e91->enter($__internal_205925bf3f60b4620be9c2a81dd0840c6fc30a164da812a2072e550076288e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_525d1f881f88142c17fae7b4743b9803b6717cc23946499a25f12f929cf0789d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525d1f881f88142c17fae7b4743b9803b6717cc23946499a25f12f929cf0789d->enter($__internal_525d1f881f88142c17fae7b4743b9803b6717cc23946499a25f12f929cf0789d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_205925bf3f60b4620be9c2a81dd0840c6fc30a164da812a2072e550076288e91->leave($__internal_205925bf3f60b4620be9c2a81dd0840c6fc30a164da812a2072e550076288e91_prof);

        
        $__internal_525d1f881f88142c17fae7b4743b9803b6717cc23946499a25f12f929cf0789d->leave($__internal_525d1f881f88142c17fae7b4743b9803b6717cc23946499a25f12f929cf0789d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
