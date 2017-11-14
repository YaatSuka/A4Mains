<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7ae090a40171d21ee1fad56fc40f11c8f70ddca2481137effb7478287b4fe2ad extends Twig_Template
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
        $__internal_c2bb9264205090bedf4ec8945cf40c326bc9f54690849ec1e8a54c9b5fd2cec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bb9264205090bedf4ec8945cf40c326bc9f54690849ec1e8a54c9b5fd2cec7->enter($__internal_c2bb9264205090bedf4ec8945cf40c326bc9f54690849ec1e8a54c9b5fd2cec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3a7a1e6833b4cd912b02c1e9bfc4c3a6d74a39dbf49ec39af01959e7d00f1880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7a1e6833b4cd912b02c1e9bfc4c3a6d74a39dbf49ec39af01959e7d00f1880->enter($__internal_3a7a1e6833b4cd912b02c1e9bfc4c3a6d74a39dbf49ec39af01959e7d00f1880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c2bb9264205090bedf4ec8945cf40c326bc9f54690849ec1e8a54c9b5fd2cec7->leave($__internal_c2bb9264205090bedf4ec8945cf40c326bc9f54690849ec1e8a54c9b5fd2cec7_prof);

        
        $__internal_3a7a1e6833b4cd912b02c1e9bfc4c3a6d74a39dbf49ec39af01959e7d00f1880->leave($__internal_3a7a1e6833b4cd912b02c1e9bfc4c3a6d74a39dbf49ec39af01959e7d00f1880_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
