<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ad6173e551a24f9390da27a8862af78f7b1939bbcaaf4cc14611445886bfe4de extends Twig_Template
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
        $__internal_7795b3e1f2539d9353550cf7bed5e96bd8cdb068ce849fba433b4a080ef74869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7795b3e1f2539d9353550cf7bed5e96bd8cdb068ce849fba433b4a080ef74869->enter($__internal_7795b3e1f2539d9353550cf7bed5e96bd8cdb068ce849fba433b4a080ef74869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cfb9851a0aeab76dabb241a9cf49bd54c1750a95fe5562fa8223ac6e4e6d9a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb9851a0aeab76dabb241a9cf49bd54c1750a95fe5562fa8223ac6e4e6d9a43->enter($__internal_cfb9851a0aeab76dabb241a9cf49bd54c1750a95fe5562fa8223ac6e4e6d9a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7795b3e1f2539d9353550cf7bed5e96bd8cdb068ce849fba433b4a080ef74869->leave($__internal_7795b3e1f2539d9353550cf7bed5e96bd8cdb068ce849fba433b4a080ef74869_prof);

        
        $__internal_cfb9851a0aeab76dabb241a9cf49bd54c1750a95fe5562fa8223ac6e4e6d9a43->leave($__internal_cfb9851a0aeab76dabb241a9cf49bd54c1750a95fe5562fa8223ac6e4e6d9a43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
