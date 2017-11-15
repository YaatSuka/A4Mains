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
        $__internal_68510002b055883ce9cb167c3cdf8c84a629576d9a720f6c07d6b3b39b50adea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68510002b055883ce9cb167c3cdf8c84a629576d9a720f6c07d6b3b39b50adea->enter($__internal_68510002b055883ce9cb167c3cdf8c84a629576d9a720f6c07d6b3b39b50adea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9d30d68b7429f3c7edc2fe7a381ecf7a242e24b9e00f43c924a08a20b955fa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d30d68b7429f3c7edc2fe7a381ecf7a242e24b9e00f43c924a08a20b955fa1e->enter($__internal_9d30d68b7429f3c7edc2fe7a381ecf7a242e24b9e00f43c924a08a20b955fa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_68510002b055883ce9cb167c3cdf8c84a629576d9a720f6c07d6b3b39b50adea->leave($__internal_68510002b055883ce9cb167c3cdf8c84a629576d9a720f6c07d6b3b39b50adea_prof);

        
        $__internal_9d30d68b7429f3c7edc2fe7a381ecf7a242e24b9e00f43c924a08a20b955fa1e->leave($__internal_9d30d68b7429f3c7edc2fe7a381ecf7a242e24b9e00f43c924a08a20b955fa1e_prof);

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
