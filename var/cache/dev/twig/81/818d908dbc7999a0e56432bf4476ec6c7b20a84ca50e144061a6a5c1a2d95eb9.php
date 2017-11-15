<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fc45f6db607d01dcce43333263f3db093cb1795d85bf842e9132e3999503f812 extends Twig_Template
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
        $__internal_798a84d67e8a914d3041654442eea19d23f2254bee8240769282546cd1731026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798a84d67e8a914d3041654442eea19d23f2254bee8240769282546cd1731026->enter($__internal_798a84d67e8a914d3041654442eea19d23f2254bee8240769282546cd1731026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2f66f450981e4faae20198c85fc5c8805b70e34cbf7dd0319a23bb319652bb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f66f450981e4faae20198c85fc5c8805b70e34cbf7dd0319a23bb319652bb55->enter($__internal_2f66f450981e4faae20198c85fc5c8805b70e34cbf7dd0319a23bb319652bb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_798a84d67e8a914d3041654442eea19d23f2254bee8240769282546cd1731026->leave($__internal_798a84d67e8a914d3041654442eea19d23f2254bee8240769282546cd1731026_prof);

        
        $__internal_2f66f450981e4faae20198c85fc5c8805b70e34cbf7dd0319a23bb319652bb55->leave($__internal_2f66f450981e4faae20198c85fc5c8805b70e34cbf7dd0319a23bb319652bb55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
