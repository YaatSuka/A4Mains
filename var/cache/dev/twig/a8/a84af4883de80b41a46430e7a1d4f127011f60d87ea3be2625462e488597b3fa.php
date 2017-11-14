<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_300a627cbd97d1bd70ef3fab11d72316f6fba64cd278ecd2f8c00f1595f9f347 extends Twig_Template
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
        $__internal_9d2be6ca7fed30a91ab541c5db864f629447302b05ae12441650fc3438a8c99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2be6ca7fed30a91ab541c5db864f629447302b05ae12441650fc3438a8c99f->enter($__internal_9d2be6ca7fed30a91ab541c5db864f629447302b05ae12441650fc3438a8c99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7b3fd69c71f076726a9787bb352222def688bbebe8209e8b3b3dfab79b04ef9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3fd69c71f076726a9787bb352222def688bbebe8209e8b3b3dfab79b04ef9c->enter($__internal_7b3fd69c71f076726a9787bb352222def688bbebe8209e8b3b3dfab79b04ef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9d2be6ca7fed30a91ab541c5db864f629447302b05ae12441650fc3438a8c99f->leave($__internal_9d2be6ca7fed30a91ab541c5db864f629447302b05ae12441650fc3438a8c99f_prof);

        
        $__internal_7b3fd69c71f076726a9787bb352222def688bbebe8209e8b3b3dfab79b04ef9c->leave($__internal_7b3fd69c71f076726a9787bb352222def688bbebe8209e8b3b3dfab79b04ef9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
