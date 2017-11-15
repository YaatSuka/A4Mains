<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_16673b1d7fbf772f8109f0d4a4802d340145bf0885ea44f21ba2f34a0e89be75 extends Twig_Template
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
        $__internal_4c04b51af87e5c703684b678b8935ff1d74719d7e029b499fe2c116769962108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c04b51af87e5c703684b678b8935ff1d74719d7e029b499fe2c116769962108->enter($__internal_4c04b51af87e5c703684b678b8935ff1d74719d7e029b499fe2c116769962108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a66dd62d8a608394125a9f03a05e6a2ad94cf9557a16f06e1bc1be89c850882e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66dd62d8a608394125a9f03a05e6a2ad94cf9557a16f06e1bc1be89c850882e->enter($__internal_a66dd62d8a608394125a9f03a05e6a2ad94cf9557a16f06e1bc1be89c850882e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4c04b51af87e5c703684b678b8935ff1d74719d7e029b499fe2c116769962108->leave($__internal_4c04b51af87e5c703684b678b8935ff1d74719d7e029b499fe2c116769962108_prof);

        
        $__internal_a66dd62d8a608394125a9f03a05e6a2ad94cf9557a16f06e1bc1be89c850882e->leave($__internal_a66dd62d8a608394125a9f03a05e6a2ad94cf9557a16f06e1bc1be89c850882e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
