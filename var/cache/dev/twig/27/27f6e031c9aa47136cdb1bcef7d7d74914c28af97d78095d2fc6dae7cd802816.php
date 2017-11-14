<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8736a511b777f32640693dab588eb9d94b9d860e274bcf4efa7da0851bb59358 extends Twig_Template
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
        $__internal_e2f22681f3a7405bb08560472abf661c6250fe1f3b62c8f51c57818223c22ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f22681f3a7405bb08560472abf661c6250fe1f3b62c8f51c57818223c22ef8->enter($__internal_e2f22681f3a7405bb08560472abf661c6250fe1f3b62c8f51c57818223c22ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_99cca0bd2d291493d7881dd3eed15138672f1b8e4828114efb46c41e26c3f84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cca0bd2d291493d7881dd3eed15138672f1b8e4828114efb46c41e26c3f84c->enter($__internal_99cca0bd2d291493d7881dd3eed15138672f1b8e4828114efb46c41e26c3f84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e2f22681f3a7405bb08560472abf661c6250fe1f3b62c8f51c57818223c22ef8->leave($__internal_e2f22681f3a7405bb08560472abf661c6250fe1f3b62c8f51c57818223c22ef8_prof);

        
        $__internal_99cca0bd2d291493d7881dd3eed15138672f1b8e4828114efb46c41e26c3f84c->leave($__internal_99cca0bd2d291493d7881dd3eed15138672f1b8e4828114efb46c41e26c3f84c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
