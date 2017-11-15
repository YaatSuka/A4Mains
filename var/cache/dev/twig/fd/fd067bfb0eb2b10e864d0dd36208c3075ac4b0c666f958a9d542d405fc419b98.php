<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_78ff0edd317e929565d2993340b7a6e96a0551ac8c48f3a723e94acd4fc18eb8 extends Twig_Template
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
        $__internal_3d1873723a1e4eeb4862ca04d70e46618118830b577e40c9f81429b972b6e2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1873723a1e4eeb4862ca04d70e46618118830b577e40c9f81429b972b6e2b2->enter($__internal_3d1873723a1e4eeb4862ca04d70e46618118830b577e40c9f81429b972b6e2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2e7bc1a9b43c85e022089bb9e06ef758a396fc9e13ad644fb60ede92039a6d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7bc1a9b43c85e022089bb9e06ef758a396fc9e13ad644fb60ede92039a6d2a->enter($__internal_2e7bc1a9b43c85e022089bb9e06ef758a396fc9e13ad644fb60ede92039a6d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3d1873723a1e4eeb4862ca04d70e46618118830b577e40c9f81429b972b6e2b2->leave($__internal_3d1873723a1e4eeb4862ca04d70e46618118830b577e40c9f81429b972b6e2b2_prof);

        
        $__internal_2e7bc1a9b43c85e022089bb9e06ef758a396fc9e13ad644fb60ede92039a6d2a->leave($__internal_2e7bc1a9b43c85e022089bb9e06ef758a396fc9e13ad644fb60ede92039a6d2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
