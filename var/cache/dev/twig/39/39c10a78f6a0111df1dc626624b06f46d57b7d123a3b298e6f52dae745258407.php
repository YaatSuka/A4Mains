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
        $__internal_6983f1cc9c0576fa57f3da1c13ddba9f21790e68208542f77e680a94bbf5555b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6983f1cc9c0576fa57f3da1c13ddba9f21790e68208542f77e680a94bbf5555b->enter($__internal_6983f1cc9c0576fa57f3da1c13ddba9f21790e68208542f77e680a94bbf5555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a78610a1e90931f2f2df444ace8f4fc9b73639d00ed080562e44d6e624e706a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78610a1e90931f2f2df444ace8f4fc9b73639d00ed080562e44d6e624e706a2->enter($__internal_a78610a1e90931f2f2df444ace8f4fc9b73639d00ed080562e44d6e624e706a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_6983f1cc9c0576fa57f3da1c13ddba9f21790e68208542f77e680a94bbf5555b->leave($__internal_6983f1cc9c0576fa57f3da1c13ddba9f21790e68208542f77e680a94bbf5555b_prof);

        
        $__internal_a78610a1e90931f2f2df444ace8f4fc9b73639d00ed080562e44d6e624e706a2->leave($__internal_a78610a1e90931f2f2df444ace8f4fc9b73639d00ed080562e44d6e624e706a2_prof);

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
