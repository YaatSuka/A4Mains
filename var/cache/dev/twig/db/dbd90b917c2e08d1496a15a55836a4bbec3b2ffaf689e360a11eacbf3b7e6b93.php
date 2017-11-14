<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_40357b9b977a4fa286089b951039e0870a110e3ded80e8396abac4132fd30449 extends Twig_Template
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
        $__internal_dfda32605e91e82269339d28457ea2b88bd7a9db59074745bb8666dd8159e8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfda32605e91e82269339d28457ea2b88bd7a9db59074745bb8666dd8159e8ed->enter($__internal_dfda32605e91e82269339d28457ea2b88bd7a9db59074745bb8666dd8159e8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_763053580e48173bad482693e3b6eadfbcd92b3f0bbcd3baefa6874e4c46fb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763053580e48173bad482693e3b6eadfbcd92b3f0bbcd3baefa6874e4c46fb04->enter($__internal_763053580e48173bad482693e3b6eadfbcd92b3f0bbcd3baefa6874e4c46fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dfda32605e91e82269339d28457ea2b88bd7a9db59074745bb8666dd8159e8ed->leave($__internal_dfda32605e91e82269339d28457ea2b88bd7a9db59074745bb8666dd8159e8ed_prof);

        
        $__internal_763053580e48173bad482693e3b6eadfbcd92b3f0bbcd3baefa6874e4c46fb04->leave($__internal_763053580e48173bad482693e3b6eadfbcd92b3f0bbcd3baefa6874e4c46fb04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
