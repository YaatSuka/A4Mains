<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bfb790b2f9c6bc7403e50830c90b22db4ca89efd6df082e3470423db9bb0efef extends Twig_Template
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
        $__internal_5178995c7a4f35bf3902b04a112066ed8c9144c5d32ff84dc44d4f5aaaf739f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5178995c7a4f35bf3902b04a112066ed8c9144c5d32ff84dc44d4f5aaaf739f7->enter($__internal_5178995c7a4f35bf3902b04a112066ed8c9144c5d32ff84dc44d4f5aaaf739f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2e47db9fd9bba483dda557072361155eb1a13af7e16e86c256888ea80c302175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e47db9fd9bba483dda557072361155eb1a13af7e16e86c256888ea80c302175->enter($__internal_2e47db9fd9bba483dda557072361155eb1a13af7e16e86c256888ea80c302175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5178995c7a4f35bf3902b04a112066ed8c9144c5d32ff84dc44d4f5aaaf739f7->leave($__internal_5178995c7a4f35bf3902b04a112066ed8c9144c5d32ff84dc44d4f5aaaf739f7_prof);

        
        $__internal_2e47db9fd9bba483dda557072361155eb1a13af7e16e86c256888ea80c302175->leave($__internal_2e47db9fd9bba483dda557072361155eb1a13af7e16e86c256888ea80c302175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
