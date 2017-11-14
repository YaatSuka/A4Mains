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
        $__internal_b0958f08b7fe83381046915d7d9a9a6ffb4417615430a07b860d2ae773f2a2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0958f08b7fe83381046915d7d9a9a6ffb4417615430a07b860d2ae773f2a2d8->enter($__internal_b0958f08b7fe83381046915d7d9a9a6ffb4417615430a07b860d2ae773f2a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b656a1771c1b33fa9dd054bba86225fc48926a5f7cc1697c56e86ea48cafc574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b656a1771c1b33fa9dd054bba86225fc48926a5f7cc1697c56e86ea48cafc574->enter($__internal_b656a1771c1b33fa9dd054bba86225fc48926a5f7cc1697c56e86ea48cafc574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b0958f08b7fe83381046915d7d9a9a6ffb4417615430a07b860d2ae773f2a2d8->leave($__internal_b0958f08b7fe83381046915d7d9a9a6ffb4417615430a07b860d2ae773f2a2d8_prof);

        
        $__internal_b656a1771c1b33fa9dd054bba86225fc48926a5f7cc1697c56e86ea48cafc574->leave($__internal_b656a1771c1b33fa9dd054bba86225fc48926a5f7cc1697c56e86ea48cafc574_prof);

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
