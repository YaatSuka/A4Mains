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
        $__internal_5f16af562fc30799157fd8d028ac35d7ff415a8d94542789f78a867d0d12cfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f16af562fc30799157fd8d028ac35d7ff415a8d94542789f78a867d0d12cfcb->enter($__internal_5f16af562fc30799157fd8d028ac35d7ff415a8d94542789f78a867d0d12cfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e5fe19ffdb5d161ad0eb8f571c89679117f83a4cacfc2854c5a67a89b75ffd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fe19ffdb5d161ad0eb8f571c89679117f83a4cacfc2854c5a67a89b75ffd42->enter($__internal_e5fe19ffdb5d161ad0eb8f571c89679117f83a4cacfc2854c5a67a89b75ffd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5f16af562fc30799157fd8d028ac35d7ff415a8d94542789f78a867d0d12cfcb->leave($__internal_5f16af562fc30799157fd8d028ac35d7ff415a8d94542789f78a867d0d12cfcb_prof);

        
        $__internal_e5fe19ffdb5d161ad0eb8f571c89679117f83a4cacfc2854c5a67a89b75ffd42->leave($__internal_e5fe19ffdb5d161ad0eb8f571c89679117f83a4cacfc2854c5a67a89b75ffd42_prof);

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
