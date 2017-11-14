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
        $__internal_f5513c0367e23032587ece3c8a8a80b06b28da4479efefd761667b93586dcef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5513c0367e23032587ece3c8a8a80b06b28da4479efefd761667b93586dcef6->enter($__internal_f5513c0367e23032587ece3c8a8a80b06b28da4479efefd761667b93586dcef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_038bf8df9355ab602fefcc38c5090077d7739d5579dab5245d5f8daf1550910f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038bf8df9355ab602fefcc38c5090077d7739d5579dab5245d5f8daf1550910f->enter($__internal_038bf8df9355ab602fefcc38c5090077d7739d5579dab5245d5f8daf1550910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f5513c0367e23032587ece3c8a8a80b06b28da4479efefd761667b93586dcef6->leave($__internal_f5513c0367e23032587ece3c8a8a80b06b28da4479efefd761667b93586dcef6_prof);

        
        $__internal_038bf8df9355ab602fefcc38c5090077d7739d5579dab5245d5f8daf1550910f->leave($__internal_038bf8df9355ab602fefcc38c5090077d7739d5579dab5245d5f8daf1550910f_prof);

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
