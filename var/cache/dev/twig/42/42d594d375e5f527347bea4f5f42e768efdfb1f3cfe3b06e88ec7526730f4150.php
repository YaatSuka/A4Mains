<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a347f395b34993775ef754ec05528d1a7fb3d53173e49c93a3e3c35cc716ff41 extends Twig_Template
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
        $__internal_cd90ce35a70a1085191870ba5786afde4271fa32410ad3c6e7afa157153b1948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd90ce35a70a1085191870ba5786afde4271fa32410ad3c6e7afa157153b1948->enter($__internal_cd90ce35a70a1085191870ba5786afde4271fa32410ad3c6e7afa157153b1948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c16aa926de48927c2b673f10980fb9eac3b1855e2a1db7c04494ac8804d59f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16aa926de48927c2b673f10980fb9eac3b1855e2a1db7c04494ac8804d59f8e->enter($__internal_c16aa926de48927c2b673f10980fb9eac3b1855e2a1db7c04494ac8804d59f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd90ce35a70a1085191870ba5786afde4271fa32410ad3c6e7afa157153b1948->leave($__internal_cd90ce35a70a1085191870ba5786afde4271fa32410ad3c6e7afa157153b1948_prof);

        
        $__internal_c16aa926de48927c2b673f10980fb9eac3b1855e2a1db7c04494ac8804d59f8e->leave($__internal_c16aa926de48927c2b673f10980fb9eac3b1855e2a1db7c04494ac8804d59f8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
