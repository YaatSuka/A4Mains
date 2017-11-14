<?php

/* form_table_layout.html.twig */
class __TwigTemplate_516c203e88d5e8adc47d70e815f4023b4f8e255a289cda6390ae8c8e1c7a0542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38545f4b5a400993390a6fb252047b1149136a741b51c8099397731c0bb54869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38545f4b5a400993390a6fb252047b1149136a741b51c8099397731c0bb54869->enter($__internal_38545f4b5a400993390a6fb252047b1149136a741b51c8099397731c0bb54869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a103b8cadfac009e2873c14b4b61b7fb3ee2e045284456761bfcc8dabce73988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a103b8cadfac009e2873c14b4b61b7fb3ee2e045284456761bfcc8dabce73988->enter($__internal_a103b8cadfac009e2873c14b4b61b7fb3ee2e045284456761bfcc8dabce73988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_38545f4b5a400993390a6fb252047b1149136a741b51c8099397731c0bb54869->leave($__internal_38545f4b5a400993390a6fb252047b1149136a741b51c8099397731c0bb54869_prof);

        
        $__internal_a103b8cadfac009e2873c14b4b61b7fb3ee2e045284456761bfcc8dabce73988->leave($__internal_a103b8cadfac009e2873c14b4b61b7fb3ee2e045284456761bfcc8dabce73988_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6e644c8e2c72d66993d2a2a8232182656a8a2214c3ff543d969aae12993fe7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e644c8e2c72d66993d2a2a8232182656a8a2214c3ff543d969aae12993fe7b2->enter($__internal_6e644c8e2c72d66993d2a2a8232182656a8a2214c3ff543d969aae12993fe7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a51d870c75acc253cd99c0032537b5d3738a8184718042b4ff94b4eb5c20b5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51d870c75acc253cd99c0032537b5d3738a8184718042b4ff94b4eb5c20b5fe->enter($__internal_a51d870c75acc253cd99c0032537b5d3738a8184718042b4ff94b4eb5c20b5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a51d870c75acc253cd99c0032537b5d3738a8184718042b4ff94b4eb5c20b5fe->leave($__internal_a51d870c75acc253cd99c0032537b5d3738a8184718042b4ff94b4eb5c20b5fe_prof);

        
        $__internal_6e644c8e2c72d66993d2a2a8232182656a8a2214c3ff543d969aae12993fe7b2->leave($__internal_6e644c8e2c72d66993d2a2a8232182656a8a2214c3ff543d969aae12993fe7b2_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ceb00fdb03d2bbcda57ecf4e63c062008d6f6f51d7da56c89c263b4859251336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb00fdb03d2bbcda57ecf4e63c062008d6f6f51d7da56c89c263b4859251336->enter($__internal_ceb00fdb03d2bbcda57ecf4e63c062008d6f6f51d7da56c89c263b4859251336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_70cff5e91c4bdcadbe0675f2e4afc244fe418e396949caee9f16d7a69ff26677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cff5e91c4bdcadbe0675f2e4afc244fe418e396949caee9f16d7a69ff26677->enter($__internal_70cff5e91c4bdcadbe0675f2e4afc244fe418e396949caee9f16d7a69ff26677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_70cff5e91c4bdcadbe0675f2e4afc244fe418e396949caee9f16d7a69ff26677->leave($__internal_70cff5e91c4bdcadbe0675f2e4afc244fe418e396949caee9f16d7a69ff26677_prof);

        
        $__internal_ceb00fdb03d2bbcda57ecf4e63c062008d6f6f51d7da56c89c263b4859251336->leave($__internal_ceb00fdb03d2bbcda57ecf4e63c062008d6f6f51d7da56c89c263b4859251336_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_1891ff5c32a8181e21b6e351d199a1861435d2275db23ba8324425b593dcf6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1891ff5c32a8181e21b6e351d199a1861435d2275db23ba8324425b593dcf6b7->enter($__internal_1891ff5c32a8181e21b6e351d199a1861435d2275db23ba8324425b593dcf6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_fc771f50d384306d66ae994e35335ef1a6f4abe32e1fcffc47498c6304a91e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc771f50d384306d66ae994e35335ef1a6f4abe32e1fcffc47498c6304a91e36->enter($__internal_fc771f50d384306d66ae994e35335ef1a6f4abe32e1fcffc47498c6304a91e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_fc771f50d384306d66ae994e35335ef1a6f4abe32e1fcffc47498c6304a91e36->leave($__internal_fc771f50d384306d66ae994e35335ef1a6f4abe32e1fcffc47498c6304a91e36_prof);

        
        $__internal_1891ff5c32a8181e21b6e351d199a1861435d2275db23ba8324425b593dcf6b7->leave($__internal_1891ff5c32a8181e21b6e351d199a1861435d2275db23ba8324425b593dcf6b7_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ee0f2659ae70ec2890991560c4456fb4a6cb4b0ae65616d0815e18fdc7d4b2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0f2659ae70ec2890991560c4456fb4a6cb4b0ae65616d0815e18fdc7d4b2d1->enter($__internal_ee0f2659ae70ec2890991560c4456fb4a6cb4b0ae65616d0815e18fdc7d4b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a9639c77f64f124c9e876b0fb84d3cd422265a20425b95c1247371d98f2030bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9639c77f64f124c9e876b0fb84d3cd422265a20425b95c1247371d98f2030bf->enter($__internal_a9639c77f64f124c9e876b0fb84d3cd422265a20425b95c1247371d98f2030bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_a9639c77f64f124c9e876b0fb84d3cd422265a20425b95c1247371d98f2030bf->leave($__internal_a9639c77f64f124c9e876b0fb84d3cd422265a20425b95c1247371d98f2030bf_prof);

        
        $__internal_ee0f2659ae70ec2890991560c4456fb4a6cb4b0ae65616d0815e18fdc7d4b2d1->leave($__internal_ee0f2659ae70ec2890991560c4456fb4a6cb4b0ae65616d0815e18fdc7d4b2d1_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
