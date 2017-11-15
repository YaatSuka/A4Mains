<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_45b41fb44ca07513ed60d028596b7f4121434f63ea17c37619bc4b7b750850c3 extends Twig_Template
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
        $__internal_55b1fca1c551c9b1df0f17df0236b654b58bae2606927580bb3dc436f2cd2a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b1fca1c551c9b1df0f17df0236b654b58bae2606927580bb3dc436f2cd2a29->enter($__internal_55b1fca1c551c9b1df0f17df0236b654b58bae2606927580bb3dc436f2cd2a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b59ecf1d217fac4ccee9756b029650f0c31b9c69f56b226f1a34d103e270ea6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59ecf1d217fac4ccee9756b029650f0c31b9c69f56b226f1a34d103e270ea6a->enter($__internal_b59ecf1d217fac4ccee9756b029650f0c31b9c69f56b226f1a34d103e270ea6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_55b1fca1c551c9b1df0f17df0236b654b58bae2606927580bb3dc436f2cd2a29->leave($__internal_55b1fca1c551c9b1df0f17df0236b654b58bae2606927580bb3dc436f2cd2a29_prof);

        
        $__internal_b59ecf1d217fac4ccee9756b029650f0c31b9c69f56b226f1a34d103e270ea6a->leave($__internal_b59ecf1d217fac4ccee9756b029650f0c31b9c69f56b226f1a34d103e270ea6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
