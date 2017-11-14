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
        $__internal_fcc30e073ef8c55504f6eebcce0bd5c566e02f9d776ebe6d2c6c839102e7da97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc30e073ef8c55504f6eebcce0bd5c566e02f9d776ebe6d2c6c839102e7da97->enter($__internal_fcc30e073ef8c55504f6eebcce0bd5c566e02f9d776ebe6d2c6c839102e7da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4b1663849627373122363c3c77abb8eec58f95b4859de142c4602ddc4ed16523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1663849627373122363c3c77abb8eec58f95b4859de142c4602ddc4ed16523->enter($__internal_4b1663849627373122363c3c77abb8eec58f95b4859de142c4602ddc4ed16523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fcc30e073ef8c55504f6eebcce0bd5c566e02f9d776ebe6d2c6c839102e7da97->leave($__internal_fcc30e073ef8c55504f6eebcce0bd5c566e02f9d776ebe6d2c6c839102e7da97_prof);

        
        $__internal_4b1663849627373122363c3c77abb8eec58f95b4859de142c4602ddc4ed16523->leave($__internal_4b1663849627373122363c3c77abb8eec58f95b4859de142c4602ddc4ed16523_prof);

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
