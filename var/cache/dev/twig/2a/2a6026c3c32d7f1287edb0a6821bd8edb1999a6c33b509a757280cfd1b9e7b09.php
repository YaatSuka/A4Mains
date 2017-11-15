<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_3420f8a896a7fb4cedafbc45a2eae2121e8768b8cfcca82f779291ba486134e6 extends Twig_Template
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
        $__internal_17003f874d78f84cfbe253bace2dcef3c08b4777c6f5ffde3c6e45ce088adf14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17003f874d78f84cfbe253bace2dcef3c08b4777c6f5ffde3c6e45ce088adf14->enter($__internal_17003f874d78f84cfbe253bace2dcef3c08b4777c6f5ffde3c6e45ce088adf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_9663c7e68b3f54f21f1761c88a0f9e18b2621c59b14181c742e091389cbfe0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9663c7e68b3f54f21f1761c88a0f9e18b2621c59b14181c742e091389cbfe0a6->enter($__internal_9663c7e68b3f54f21f1761c88a0f9e18b2621c59b14181c742e091389cbfe0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_17003f874d78f84cfbe253bace2dcef3c08b4777c6f5ffde3c6e45ce088adf14->leave($__internal_17003f874d78f84cfbe253bace2dcef3c08b4777c6f5ffde3c6e45ce088adf14_prof);

        
        $__internal_9663c7e68b3f54f21f1761c88a0f9e18b2621c59b14181c742e091389cbfe0a6->leave($__internal_9663c7e68b3f54f21f1761c88a0f9e18b2621c59b14181c742e091389cbfe0a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
