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
        $__internal_7150256384fc12c86bebc9ffa9136e6d9de59b57c9a1483be96b629ce938491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7150256384fc12c86bebc9ffa9136e6d9de59b57c9a1483be96b629ce938491c->enter($__internal_7150256384fc12c86bebc9ffa9136e6d9de59b57c9a1483be96b629ce938491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d3160ec7f95162836b22666ba2846fbe3c196fe0790ac8f4d4b552223ae4aeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3160ec7f95162836b22666ba2846fbe3c196fe0790ac8f4d4b552223ae4aeb0->enter($__internal_d3160ec7f95162836b22666ba2846fbe3c196fe0790ac8f4d4b552223ae4aeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7150256384fc12c86bebc9ffa9136e6d9de59b57c9a1483be96b629ce938491c->leave($__internal_7150256384fc12c86bebc9ffa9136e6d9de59b57c9a1483be96b629ce938491c_prof);

        
        $__internal_d3160ec7f95162836b22666ba2846fbe3c196fe0790ac8f4d4b552223ae4aeb0->leave($__internal_d3160ec7f95162836b22666ba2846fbe3c196fe0790ac8f4d4b552223ae4aeb0_prof);

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
