<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3950736500e10ee201096e956b43e70a9fe17701c57b21d6cf0b5d69684be4dc extends Twig_Template
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
        $__internal_4798861c77e1a8fb363ccd7db5f90f6ca967ba6ea6a8d8e86abbe1571631b0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4798861c77e1a8fb363ccd7db5f90f6ca967ba6ea6a8d8e86abbe1571631b0c7->enter($__internal_4798861c77e1a8fb363ccd7db5f90f6ca967ba6ea6a8d8e86abbe1571631b0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e84ef8f69cedc4473a96200c16d564fe32567abda0fa874da700136183f0dc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84ef8f69cedc4473a96200c16d564fe32567abda0fa874da700136183f0dc79->enter($__internal_e84ef8f69cedc4473a96200c16d564fe32567abda0fa874da700136183f0dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4798861c77e1a8fb363ccd7db5f90f6ca967ba6ea6a8d8e86abbe1571631b0c7->leave($__internal_4798861c77e1a8fb363ccd7db5f90f6ca967ba6ea6a8d8e86abbe1571631b0c7_prof);

        
        $__internal_e84ef8f69cedc4473a96200c16d564fe32567abda0fa874da700136183f0dc79->leave($__internal_e84ef8f69cedc4473a96200c16d564fe32567abda0fa874da700136183f0dc79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
