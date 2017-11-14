<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1818dd0ad5a43806a4294893d0067db290cb6b5b3935cbfc9d9ef70f59e8dddf extends Twig_Template
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
        $__internal_efc42ac9178d48d939af2c85e82582c9055e87b0ee99fce5467a30edb8d6677b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc42ac9178d48d939af2c85e82582c9055e87b0ee99fce5467a30edb8d6677b->enter($__internal_efc42ac9178d48d939af2c85e82582c9055e87b0ee99fce5467a30edb8d6677b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ff4805ace2386ad19ae9e75f1e6b9598fca54b21b9c10260a128fd7af99715e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4805ace2386ad19ae9e75f1e6b9598fca54b21b9c10260a128fd7af99715e7->enter($__internal_ff4805ace2386ad19ae9e75f1e6b9598fca54b21b9c10260a128fd7af99715e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_efc42ac9178d48d939af2c85e82582c9055e87b0ee99fce5467a30edb8d6677b->leave($__internal_efc42ac9178d48d939af2c85e82582c9055e87b0ee99fce5467a30edb8d6677b_prof);

        
        $__internal_ff4805ace2386ad19ae9e75f1e6b9598fca54b21b9c10260a128fd7af99715e7->leave($__internal_ff4805ace2386ad19ae9e75f1e6b9598fca54b21b9c10260a128fd7af99715e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
