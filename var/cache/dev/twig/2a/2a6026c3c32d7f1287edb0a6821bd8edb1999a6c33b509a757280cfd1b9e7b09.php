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
        $__internal_20e37108baf723dbcef36b69d90eada2041c7883409df5e39410d18e886344a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e37108baf723dbcef36b69d90eada2041c7883409df5e39410d18e886344a5->enter($__internal_20e37108baf723dbcef36b69d90eada2041c7883409df5e39410d18e886344a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_cd72dcb0529e4f69b44fdcec8de346aa7c35595ddca9eeea559a399e24e1b5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72dcb0529e4f69b44fdcec8de346aa7c35595ddca9eeea559a399e24e1b5ca->enter($__internal_cd72dcb0529e4f69b44fdcec8de346aa7c35595ddca9eeea559a399e24e1b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_20e37108baf723dbcef36b69d90eada2041c7883409df5e39410d18e886344a5->leave($__internal_20e37108baf723dbcef36b69d90eada2041c7883409df5e39410d18e886344a5_prof);

        
        $__internal_cd72dcb0529e4f69b44fdcec8de346aa7c35595ddca9eeea559a399e24e1b5ca->leave($__internal_cd72dcb0529e4f69b44fdcec8de346aa7c35595ddca9eeea559a399e24e1b5ca_prof);

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
