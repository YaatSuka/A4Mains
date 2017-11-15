<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ebafc9fa3ec83e7296a15ffcebaf2569b9b2431e442f2889fae03de3b4a087b3 extends Twig_Template
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
        $__internal_903cf46cc008a6b323312ec5bb4ade76767d71d8adb3b29300910f9b9ad655c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903cf46cc008a6b323312ec5bb4ade76767d71d8adb3b29300910f9b9ad655c1->enter($__internal_903cf46cc008a6b323312ec5bb4ade76767d71d8adb3b29300910f9b9ad655c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e4a62ce8ff6cae913a8d0dbcefebe5eb6e6759d501611bbefe0d1ca9153ec1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a62ce8ff6cae913a8d0dbcefebe5eb6e6759d501611bbefe0d1ca9153ec1ab->enter($__internal_e4a62ce8ff6cae913a8d0dbcefebe5eb6e6759d501611bbefe0d1ca9153ec1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_903cf46cc008a6b323312ec5bb4ade76767d71d8adb3b29300910f9b9ad655c1->leave($__internal_903cf46cc008a6b323312ec5bb4ade76767d71d8adb3b29300910f9b9ad655c1_prof);

        
        $__internal_e4a62ce8ff6cae913a8d0dbcefebe5eb6e6759d501611bbefe0d1ca9153ec1ab->leave($__internal_e4a62ce8ff6cae913a8d0dbcefebe5eb6e6759d501611bbefe0d1ca9153ec1ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
