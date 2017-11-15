<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a14f942b553ac507f10d08c09488e8d72bf4359641a3f6eb01115b46efd543f extends Twig_Template
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
        $__internal_b5824aca7c6234459d59c27d0a017c56db9e945596a3dde48c2123de9b84268b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5824aca7c6234459d59c27d0a017c56db9e945596a3dde48c2123de9b84268b->enter($__internal_b5824aca7c6234459d59c27d0a017c56db9e945596a3dde48c2123de9b84268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1fb8867f6bfef022ac6f5482407f8c8da18b15f2179a7411b979cd6169965c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb8867f6bfef022ac6f5482407f8c8da18b15f2179a7411b979cd6169965c50->enter($__internal_1fb8867f6bfef022ac6f5482407f8c8da18b15f2179a7411b979cd6169965c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b5824aca7c6234459d59c27d0a017c56db9e945596a3dde48c2123de9b84268b->leave($__internal_b5824aca7c6234459d59c27d0a017c56db9e945596a3dde48c2123de9b84268b_prof);

        
        $__internal_1fb8867f6bfef022ac6f5482407f8c8da18b15f2179a7411b979cd6169965c50->leave($__internal_1fb8867f6bfef022ac6f5482407f8c8da18b15f2179a7411b979cd6169965c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
