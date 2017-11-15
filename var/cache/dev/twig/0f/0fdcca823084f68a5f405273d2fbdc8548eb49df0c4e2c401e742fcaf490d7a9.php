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
        $__internal_945db78afc91898a71ed7140a50571a3db514d26c34c4b7df99a362a931aa185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945db78afc91898a71ed7140a50571a3db514d26c34c4b7df99a362a931aa185->enter($__internal_945db78afc91898a71ed7140a50571a3db514d26c34c4b7df99a362a931aa185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_9fa62fc719293ee96e23a67f851db8897bd8871b9ba44b216d6e979786db2277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa62fc719293ee96e23a67f851db8897bd8871b9ba44b216d6e979786db2277->enter($__internal_9fa62fc719293ee96e23a67f851db8897bd8871b9ba44b216d6e979786db2277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_945db78afc91898a71ed7140a50571a3db514d26c34c4b7df99a362a931aa185->leave($__internal_945db78afc91898a71ed7140a50571a3db514d26c34c4b7df99a362a931aa185_prof);

        
        $__internal_9fa62fc719293ee96e23a67f851db8897bd8871b9ba44b216d6e979786db2277->leave($__internal_9fa62fc719293ee96e23a67f851db8897bd8871b9ba44b216d6e979786db2277_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e7eb4802ae8e952fe77d5c731c9cae13984970bc297c68708f2ca6e1d823e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7eb4802ae8e952fe77d5c731c9cae13984970bc297c68708f2ca6e1d823e06->enter($__internal_5e7eb4802ae8e952fe77d5c731c9cae13984970bc297c68708f2ca6e1d823e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_900e72c75e9c007cbe317e30c38d60dc1070ca0bd2ed6510d5b37404f8e3b199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900e72c75e9c007cbe317e30c38d60dc1070ca0bd2ed6510d5b37404f8e3b199->enter($__internal_900e72c75e9c007cbe317e30c38d60dc1070ca0bd2ed6510d5b37404f8e3b199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_900e72c75e9c007cbe317e30c38d60dc1070ca0bd2ed6510d5b37404f8e3b199->leave($__internal_900e72c75e9c007cbe317e30c38d60dc1070ca0bd2ed6510d5b37404f8e3b199_prof);

        
        $__internal_5e7eb4802ae8e952fe77d5c731c9cae13984970bc297c68708f2ca6e1d823e06->leave($__internal_5e7eb4802ae8e952fe77d5c731c9cae13984970bc297c68708f2ca6e1d823e06_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e7ec62ad24f084d2e98652534132bbc72cc6e41627d63e5fe477b9f2042e61a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ec62ad24f084d2e98652534132bbc72cc6e41627d63e5fe477b9f2042e61a1->enter($__internal_e7ec62ad24f084d2e98652534132bbc72cc6e41627d63e5fe477b9f2042e61a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ae48d415810c838d66e525bd2f513f2955ab8936e4d6aaaca5a93c4e9aa8dd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae48d415810c838d66e525bd2f513f2955ab8936e4d6aaaca5a93c4e9aa8dd6d->enter($__internal_ae48d415810c838d66e525bd2f513f2955ab8936e4d6aaaca5a93c4e9aa8dd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_ae48d415810c838d66e525bd2f513f2955ab8936e4d6aaaca5a93c4e9aa8dd6d->leave($__internal_ae48d415810c838d66e525bd2f513f2955ab8936e4d6aaaca5a93c4e9aa8dd6d_prof);

        
        $__internal_e7ec62ad24f084d2e98652534132bbc72cc6e41627d63e5fe477b9f2042e61a1->leave($__internal_e7ec62ad24f084d2e98652534132bbc72cc6e41627d63e5fe477b9f2042e61a1_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bf69c56113a55fd4ef5671f574c05c45191ef9609faba72823d34db9a647bc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf69c56113a55fd4ef5671f574c05c45191ef9609faba72823d34db9a647bc0b->enter($__internal_bf69c56113a55fd4ef5671f574c05c45191ef9609faba72823d34db9a647bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ae7de1186a2324876e5280f3bd63d5ff65dcd060486b5feaf60a4295727da92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7de1186a2324876e5280f3bd63d5ff65dcd060486b5feaf60a4295727da92a->enter($__internal_ae7de1186a2324876e5280f3bd63d5ff65dcd060486b5feaf60a4295727da92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ae7de1186a2324876e5280f3bd63d5ff65dcd060486b5feaf60a4295727da92a->leave($__internal_ae7de1186a2324876e5280f3bd63d5ff65dcd060486b5feaf60a4295727da92a_prof);

        
        $__internal_bf69c56113a55fd4ef5671f574c05c45191ef9609faba72823d34db9a647bc0b->leave($__internal_bf69c56113a55fd4ef5671f574c05c45191ef9609faba72823d34db9a647bc0b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b10c1f2b751a771ff91c29070e6396dcf601511c1f7d3ee94713685562a34a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10c1f2b751a771ff91c29070e6396dcf601511c1f7d3ee94713685562a34a1e->enter($__internal_b10c1f2b751a771ff91c29070e6396dcf601511c1f7d3ee94713685562a34a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_01dda3dfbb5f30aefd7ba6593e9ea0bf64294e90efdb95230d12a8f8beafcc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dda3dfbb5f30aefd7ba6593e9ea0bf64294e90efdb95230d12a8f8beafcc57->enter($__internal_01dda3dfbb5f30aefd7ba6593e9ea0bf64294e90efdb95230d12a8f8beafcc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_01dda3dfbb5f30aefd7ba6593e9ea0bf64294e90efdb95230d12a8f8beafcc57->leave($__internal_01dda3dfbb5f30aefd7ba6593e9ea0bf64294e90efdb95230d12a8f8beafcc57_prof);

        
        $__internal_b10c1f2b751a771ff91c29070e6396dcf601511c1f7d3ee94713685562a34a1e->leave($__internal_b10c1f2b751a771ff91c29070e6396dcf601511c1f7d3ee94713685562a34a1e_prof);

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
