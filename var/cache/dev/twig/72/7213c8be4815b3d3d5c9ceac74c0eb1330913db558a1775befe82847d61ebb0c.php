<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_c75558bc225e72e7a20be518a66cabb0d4a29279e03ddfd465680a74a99dc475 extends Twig_Template
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
        $__internal_51044373c5845c7be2f13135d48ce66f4ed149ba8e75b09e2ba345c52cdff1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51044373c5845c7be2f13135d48ce66f4ed149ba8e75b09e2ba345c52cdff1dd->enter($__internal_51044373c5845c7be2f13135d48ce66f4ed149ba8e75b09e2ba345c52cdff1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_1d9c0d0eb1508be78ee9c4db63668d518decff49088e9d73142a4f578da86f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9c0d0eb1508be78ee9c4db63668d518decff49088e9d73142a4f578da86f43->enter($__internal_1d9c0d0eb1508be78ee9c4db63668d518decff49088e9d73142a4f578da86f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_51044373c5845c7be2f13135d48ce66f4ed149ba8e75b09e2ba345c52cdff1dd->leave($__internal_51044373c5845c7be2f13135d48ce66f4ed149ba8e75b09e2ba345c52cdff1dd_prof);

        
        $__internal_1d9c0d0eb1508be78ee9c4db63668d518decff49088e9d73142a4f578da86f43->leave($__internal_1d9c0d0eb1508be78ee9c4db63668d518decff49088e9d73142a4f578da86f43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
