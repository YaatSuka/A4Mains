<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d48cc69a778cb61b15c5b8fa0992317571aca559cee2c6cb38be818cf3697663 extends Twig_Template
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
        $__internal_5fe391fed486b40aadea4ddb4898f665474f372d83d7e9e524a0f84083391cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe391fed486b40aadea4ddb4898f665474f372d83d7e9e524a0f84083391cec->enter($__internal_5fe391fed486b40aadea4ddb4898f665474f372d83d7e9e524a0f84083391cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_990ba508eda50f3f4073acdb063055391335529b936a655453e6ca12b95524ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990ba508eda50f3f4073acdb063055391335529b936a655453e6ca12b95524ec->enter($__internal_990ba508eda50f3f4073acdb063055391335529b936a655453e6ca12b95524ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5fe391fed486b40aadea4ddb4898f665474f372d83d7e9e524a0f84083391cec->leave($__internal_5fe391fed486b40aadea4ddb4898f665474f372d83d7e9e524a0f84083391cec_prof);

        
        $__internal_990ba508eda50f3f4073acdb063055391335529b936a655453e6ca12b95524ec->leave($__internal_990ba508eda50f3f4073acdb063055391335529b936a655453e6ca12b95524ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
