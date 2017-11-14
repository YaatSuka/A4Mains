<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fc45f6db607d01dcce43333263f3db093cb1795d85bf842e9132e3999503f812 extends Twig_Template
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
        $__internal_94e476f7affcda9e4595175e0e21c5636f26fff6d0c3ff23773e082eb52c4b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e476f7affcda9e4595175e0e21c5636f26fff6d0c3ff23773e082eb52c4b63->enter($__internal_94e476f7affcda9e4595175e0e21c5636f26fff6d0c3ff23773e082eb52c4b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4efca450fb855ceb165ba8e2bf7f106f415a2312e717c0bb8d10817900b2f39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efca450fb855ceb165ba8e2bf7f106f415a2312e717c0bb8d10817900b2f39e->enter($__internal_4efca450fb855ceb165ba8e2bf7f106f415a2312e717c0bb8d10817900b2f39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_94e476f7affcda9e4595175e0e21c5636f26fff6d0c3ff23773e082eb52c4b63->leave($__internal_94e476f7affcda9e4595175e0e21c5636f26fff6d0c3ff23773e082eb52c4b63_prof);

        
        $__internal_4efca450fb855ceb165ba8e2bf7f106f415a2312e717c0bb8d10817900b2f39e->leave($__internal_4efca450fb855ceb165ba8e2bf7f106f415a2312e717c0bb8d10817900b2f39e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
