<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0a076dfc482f00dda4233078a20b9e84f5a2dd0d450459138550aa49629d53a7 extends Twig_Template
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
        $__internal_7e348b5176d6e736ffb34bd7771f40a04fe35e87e5e26df9d232356df01c9a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e348b5176d6e736ffb34bd7771f40a04fe35e87e5e26df9d232356df01c9a6f->enter($__internal_7e348b5176d6e736ffb34bd7771f40a04fe35e87e5e26df9d232356df01c9a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6880da30936e23552594a29bd09e1260d292c714236e321c71eca9bacc91a5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6880da30936e23552594a29bd09e1260d292c714236e321c71eca9bacc91a5d8->enter($__internal_6880da30936e23552594a29bd09e1260d292c714236e321c71eca9bacc91a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7e348b5176d6e736ffb34bd7771f40a04fe35e87e5e26df9d232356df01c9a6f->leave($__internal_7e348b5176d6e736ffb34bd7771f40a04fe35e87e5e26df9d232356df01c9a6f_prof);

        
        $__internal_6880da30936e23552594a29bd09e1260d292c714236e321c71eca9bacc91a5d8->leave($__internal_6880da30936e23552594a29bd09e1260d292c714236e321c71eca9bacc91a5d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
