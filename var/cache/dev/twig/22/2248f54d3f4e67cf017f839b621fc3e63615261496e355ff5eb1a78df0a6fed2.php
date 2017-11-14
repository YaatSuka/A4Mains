<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_059dda5c41be9b9af45994e65a701884db855f583fab63107c947c4d68544e06 extends Twig_Template
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
        $__internal_abd27dc69c6ed0b1b76b7c2eb99470c2096c449181107390e2e9479d9574d0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd27dc69c6ed0b1b76b7c2eb99470c2096c449181107390e2e9479d9574d0be->enter($__internal_abd27dc69c6ed0b1b76b7c2eb99470c2096c449181107390e2e9479d9574d0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0c7c4d3cefface8c9d5d1ab754bd8b87a3704465f22152fbf59c5a9a31d73da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7c4d3cefface8c9d5d1ab754bd8b87a3704465f22152fbf59c5a9a31d73da5->enter($__internal_0c7c4d3cefface8c9d5d1ab754bd8b87a3704465f22152fbf59c5a9a31d73da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_abd27dc69c6ed0b1b76b7c2eb99470c2096c449181107390e2e9479d9574d0be->leave($__internal_abd27dc69c6ed0b1b76b7c2eb99470c2096c449181107390e2e9479d9574d0be_prof);

        
        $__internal_0c7c4d3cefface8c9d5d1ab754bd8b87a3704465f22152fbf59c5a9a31d73da5->leave($__internal_0c7c4d3cefface8c9d5d1ab754bd8b87a3704465f22152fbf59c5a9a31d73da5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
