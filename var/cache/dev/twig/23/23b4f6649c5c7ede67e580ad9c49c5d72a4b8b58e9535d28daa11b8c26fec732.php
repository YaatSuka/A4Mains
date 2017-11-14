<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_88a212f27d2c2c0c72bb070eebf7a7f05a86435b270a5c87a407cb257739699f extends Twig_Template
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
        $__internal_e2903dbf6c3b91242363c06c20da798cb0f8cd37dc45b11f1a51bfb8afe54fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2903dbf6c3b91242363c06c20da798cb0f8cd37dc45b11f1a51bfb8afe54fb0->enter($__internal_e2903dbf6c3b91242363c06c20da798cb0f8cd37dc45b11f1a51bfb8afe54fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c75bbb08f2245333c388ed9cea38f98e35ea539e9cc9842bd86d67c5b71c9563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75bbb08f2245333c388ed9cea38f98e35ea539e9cc9842bd86d67c5b71c9563->enter($__internal_c75bbb08f2245333c388ed9cea38f98e35ea539e9cc9842bd86d67c5b71c9563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e2903dbf6c3b91242363c06c20da798cb0f8cd37dc45b11f1a51bfb8afe54fb0->leave($__internal_e2903dbf6c3b91242363c06c20da798cb0f8cd37dc45b11f1a51bfb8afe54fb0_prof);

        
        $__internal_c75bbb08f2245333c388ed9cea38f98e35ea539e9cc9842bd86d67c5b71c9563->leave($__internal_c75bbb08f2245333c388ed9cea38f98e35ea539e9cc9842bd86d67c5b71c9563_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
