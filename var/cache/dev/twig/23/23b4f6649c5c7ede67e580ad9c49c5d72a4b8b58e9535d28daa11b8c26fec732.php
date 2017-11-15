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
        $__internal_2fc1aac927eb2c06e02b102d648b107ae627f18e4e0f566bebbf2754b6be5210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc1aac927eb2c06e02b102d648b107ae627f18e4e0f566bebbf2754b6be5210->enter($__internal_2fc1aac927eb2c06e02b102d648b107ae627f18e4e0f566bebbf2754b6be5210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_80f09c414d949a8b75697cda4ed837bac8412910d9d052801f5b5481b1981ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f09c414d949a8b75697cda4ed837bac8412910d9d052801f5b5481b1981ae4->enter($__internal_80f09c414d949a8b75697cda4ed837bac8412910d9d052801f5b5481b1981ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2fc1aac927eb2c06e02b102d648b107ae627f18e4e0f566bebbf2754b6be5210->leave($__internal_2fc1aac927eb2c06e02b102d648b107ae627f18e4e0f566bebbf2754b6be5210_prof);

        
        $__internal_80f09c414d949a8b75697cda4ed837bac8412910d9d052801f5b5481b1981ae4->leave($__internal_80f09c414d949a8b75697cda4ed837bac8412910d9d052801f5b5481b1981ae4_prof);

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
