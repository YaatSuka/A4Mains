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
        $__internal_48de268a0bb19440a3261cc0709f4f945a8268865137b36103a236b9ea15fd1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48de268a0bb19440a3261cc0709f4f945a8268865137b36103a236b9ea15fd1c->enter($__internal_48de268a0bb19440a3261cc0709f4f945a8268865137b36103a236b9ea15fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9186821a065ce52dcc2cbefde08ce07f90e3378b8ba6ae98d40c1f1b7c3cea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9186821a065ce52dcc2cbefde08ce07f90e3378b8ba6ae98d40c1f1b7c3cea54->enter($__internal_9186821a065ce52dcc2cbefde08ce07f90e3378b8ba6ae98d40c1f1b7c3cea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_48de268a0bb19440a3261cc0709f4f945a8268865137b36103a236b9ea15fd1c->leave($__internal_48de268a0bb19440a3261cc0709f4f945a8268865137b36103a236b9ea15fd1c_prof);

        
        $__internal_9186821a065ce52dcc2cbefde08ce07f90e3378b8ba6ae98d40c1f1b7c3cea54->leave($__internal_9186821a065ce52dcc2cbefde08ce07f90e3378b8ba6ae98d40c1f1b7c3cea54_prof);

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
