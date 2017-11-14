<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_def64170196e13c4b7b27169f0f4adea6b8451d28ce30836929e8f7dd46e667c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0759aeb1a213c1e3385cad754e4367b125b8268cc3cb088970a92fa083ee940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0759aeb1a213c1e3385cad754e4367b125b8268cc3cb088970a92fa083ee940->enter($__internal_d0759aeb1a213c1e3385cad754e4367b125b8268cc3cb088970a92fa083ee940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_35a180288b2ffee461b064e69bd3747b7eaff05256f1a462f154885c32c77685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a180288b2ffee461b064e69bd3747b7eaff05256f1a462f154885c32c77685->enter($__internal_35a180288b2ffee461b064e69bd3747b7eaff05256f1a462f154885c32c77685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_d0759aeb1a213c1e3385cad754e4367b125b8268cc3cb088970a92fa083ee940->leave($__internal_d0759aeb1a213c1e3385cad754e4367b125b8268cc3cb088970a92fa083ee940_prof);

        
        $__internal_35a180288b2ffee461b064e69bd3747b7eaff05256f1a462f154885c32c77685->leave($__internal_35a180288b2ffee461b064e69bd3747b7eaff05256f1a462f154885c32c77685_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1c33d51a9aa49ada7728e4b25689eb924728b21fbe4a2913ee7da31c7e8324f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c33d51a9aa49ada7728e4b25689eb924728b21fbe4a2913ee7da31c7e8324f6->enter($__internal_1c33d51a9aa49ada7728e4b25689eb924728b21fbe4a2913ee7da31c7e8324f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_04301881dfa3fd224bcc94a1c2cbcf0150cc4ad83d6745ee2f3478b08e29e5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04301881dfa3fd224bcc94a1c2cbcf0150cc4ad83d6745ee2f3478b08e29e5b7->enter($__internal_04301881dfa3fd224bcc94a1c2cbcf0150cc4ad83d6745ee2f3478b08e29e5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_04301881dfa3fd224bcc94a1c2cbcf0150cc4ad83d6745ee2f3478b08e29e5b7->leave($__internal_04301881dfa3fd224bcc94a1c2cbcf0150cc4ad83d6745ee2f3478b08e29e5b7_prof);

        
        $__internal_1c33d51a9aa49ada7728e4b25689eb924728b21fbe4a2913ee7da31c7e8324f6->leave($__internal_1c33d51a9aa49ada7728e4b25689eb924728b21fbe4a2913ee7da31c7e8324f6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9aa931cc17e6523993340723a04a374b516c7f1fcc1bf98bb3384c4f8f6adfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa931cc17e6523993340723a04a374b516c7f1fcc1bf98bb3384c4f8f6adfe3->enter($__internal_9aa931cc17e6523993340723a04a374b516c7f1fcc1bf98bb3384c4f8f6adfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6a9fa611192dfb3f52d06e4d988684ebe5f344c0a98f36279616783b10155053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9fa611192dfb3f52d06e4d988684ebe5f344c0a98f36279616783b10155053->enter($__internal_6a9fa611192dfb3f52d06e4d988684ebe5f344c0a98f36279616783b10155053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6a9fa611192dfb3f52d06e4d988684ebe5f344c0a98f36279616783b10155053->leave($__internal_6a9fa611192dfb3f52d06e4d988684ebe5f344c0a98f36279616783b10155053_prof);

        
        $__internal_9aa931cc17e6523993340723a04a374b516c7f1fcc1bf98bb3384c4f8f6adfe3->leave($__internal_9aa931cc17e6523993340723a04a374b516c7f1fcc1bf98bb3384c4f8f6adfe3_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9aada483f42f0bcbd3ae58edf103086e76bee004ff868a716ed89e1e1190bad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aada483f42f0bcbd3ae58edf103086e76bee004ff868a716ed89e1e1190bad5->enter($__internal_9aada483f42f0bcbd3ae58edf103086e76bee004ff868a716ed89e1e1190bad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6760fc9ae5c8ff8703ee8098e158047865b115898326272fcc1983b32d65a507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6760fc9ae5c8ff8703ee8098e158047865b115898326272fcc1983b32d65a507->enter($__internal_6760fc9ae5c8ff8703ee8098e158047865b115898326272fcc1983b32d65a507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_6760fc9ae5c8ff8703ee8098e158047865b115898326272fcc1983b32d65a507->leave($__internal_6760fc9ae5c8ff8703ee8098e158047865b115898326272fcc1983b32d65a507_prof);

        
        $__internal_9aada483f42f0bcbd3ae58edf103086e76bee004ff868a716ed89e1e1190bad5->leave($__internal_9aada483f42f0bcbd3ae58edf103086e76bee004ff868a716ed89e1e1190bad5_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4a77f0ea19ae7b7fdcc65163aeb221e0c7f1b8e678ffe725be985a793238acde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a77f0ea19ae7b7fdcc65163aeb221e0c7f1b8e678ffe725be985a793238acde->enter($__internal_4a77f0ea19ae7b7fdcc65163aeb221e0c7f1b8e678ffe725be985a793238acde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_74edbc05e8f734b4ceef76b834d0be8ed8291bd1042f39205de0a42e270af3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74edbc05e8f734b4ceef76b834d0be8ed8291bd1042f39205de0a42e270af3a7->enter($__internal_74edbc05e8f734b4ceef76b834d0be8ed8291bd1042f39205de0a42e270af3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_74edbc05e8f734b4ceef76b834d0be8ed8291bd1042f39205de0a42e270af3a7->leave($__internal_74edbc05e8f734b4ceef76b834d0be8ed8291bd1042f39205de0a42e270af3a7_prof);

        
        $__internal_4a77f0ea19ae7b7fdcc65163aeb221e0c7f1b8e678ffe725be985a793238acde->leave($__internal_4a77f0ea19ae7b7fdcc65163aeb221e0c7f1b8e678ffe725be985a793238acde_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6e825dc983e8141cbf3afa7cef377f8931fa4ea3b9707ff03704766299cb4d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e825dc983e8141cbf3afa7cef377f8931fa4ea3b9707ff03704766299cb4d4b->enter($__internal_6e825dc983e8141cbf3afa7cef377f8931fa4ea3b9707ff03704766299cb4d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3deb8c55b3df180c38ae8e18caf6ede6712392c9139e4cdd5a9f576f8c72253f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3deb8c55b3df180c38ae8e18caf6ede6712392c9139e4cdd5a9f576f8c72253f->enter($__internal_3deb8c55b3df180c38ae8e18caf6ede6712392c9139e4cdd5a9f576f8c72253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3deb8c55b3df180c38ae8e18caf6ede6712392c9139e4cdd5a9f576f8c72253f->leave($__internal_3deb8c55b3df180c38ae8e18caf6ede6712392c9139e4cdd5a9f576f8c72253f_prof);

        
        $__internal_6e825dc983e8141cbf3afa7cef377f8931fa4ea3b9707ff03704766299cb4d4b->leave($__internal_6e825dc983e8141cbf3afa7cef377f8931fa4ea3b9707ff03704766299cb4d4b_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f647b0b9c157ff6f2a8644a1b491422857f4100d76e27ce8679866c58ba53d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f647b0b9c157ff6f2a8644a1b491422857f4100d76e27ce8679866c58ba53d35->enter($__internal_f647b0b9c157ff6f2a8644a1b491422857f4100d76e27ce8679866c58ba53d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c8e77df601b374130a32a8eee9a84a60381cce18aa321292551bd965f54e4daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e77df601b374130a32a8eee9a84a60381cce18aa321292551bd965f54e4daa->enter($__internal_c8e77df601b374130a32a8eee9a84a60381cce18aa321292551bd965f54e4daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c8e77df601b374130a32a8eee9a84a60381cce18aa321292551bd965f54e4daa->leave($__internal_c8e77df601b374130a32a8eee9a84a60381cce18aa321292551bd965f54e4daa_prof);

        
        $__internal_f647b0b9c157ff6f2a8644a1b491422857f4100d76e27ce8679866c58ba53d35->leave($__internal_f647b0b9c157ff6f2a8644a1b491422857f4100d76e27ce8679866c58ba53d35_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_31df3144ead0b8168382cebc1f696af98b2c51ba0c61e01286377b06bb368b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31df3144ead0b8168382cebc1f696af98b2c51ba0c61e01286377b06bb368b45->enter($__internal_31df3144ead0b8168382cebc1f696af98b2c51ba0c61e01286377b06bb368b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_8a5a779388bb621f2880ff207e7f116fe98bca3b5d6144d57a0d739c07af7a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5a779388bb621f2880ff207e7f116fe98bca3b5d6144d57a0d739c07af7a6a->enter($__internal_8a5a779388bb621f2880ff207e7f116fe98bca3b5d6144d57a0d739c07af7a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8a5a779388bb621f2880ff207e7f116fe98bca3b5d6144d57a0d739c07af7a6a->leave($__internal_8a5a779388bb621f2880ff207e7f116fe98bca3b5d6144d57a0d739c07af7a6a_prof);

        
        $__internal_31df3144ead0b8168382cebc1f696af98b2c51ba0c61e01286377b06bb368b45->leave($__internal_31df3144ead0b8168382cebc1f696af98b2c51ba0c61e01286377b06bb368b45_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a2e97a15543e425f7eb2fa4fc10e334437e05756c07e22315c0488575926d617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e97a15543e425f7eb2fa4fc10e334437e05756c07e22315c0488575926d617->enter($__internal_a2e97a15543e425f7eb2fa4fc10e334437e05756c07e22315c0488575926d617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_92eb13ff0c8ae1273659bb60bebee4bffdbc855ef1ce2932891a1b845eca32ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92eb13ff0c8ae1273659bb60bebee4bffdbc855ef1ce2932891a1b845eca32ca->enter($__internal_92eb13ff0c8ae1273659bb60bebee4bffdbc855ef1ce2932891a1b845eca32ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_92eb13ff0c8ae1273659bb60bebee4bffdbc855ef1ce2932891a1b845eca32ca->leave($__internal_92eb13ff0c8ae1273659bb60bebee4bffdbc855ef1ce2932891a1b845eca32ca_prof);

        
        $__internal_a2e97a15543e425f7eb2fa4fc10e334437e05756c07e22315c0488575926d617->leave($__internal_a2e97a15543e425f7eb2fa4fc10e334437e05756c07e22315c0488575926d617_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_dc6a625eb3550847e948eccee27c2fcc2ff907cc9faebc1a7c7d36b6fcc75c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6a625eb3550847e948eccee27c2fcc2ff907cc9faebc1a7c7d36b6fcc75c61->enter($__internal_dc6a625eb3550847e948eccee27c2fcc2ff907cc9faebc1a7c7d36b6fcc75c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fbaa5e43ebc76f0bfa28cbd09b017bf9c69505db83e7c082b94a0e2abce56cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbaa5e43ebc76f0bfa28cbd09b017bf9c69505db83e7c082b94a0e2abce56cd9->enter($__internal_fbaa5e43ebc76f0bfa28cbd09b017bf9c69505db83e7c082b94a0e2abce56cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fbaa5e43ebc76f0bfa28cbd09b017bf9c69505db83e7c082b94a0e2abce56cd9->leave($__internal_fbaa5e43ebc76f0bfa28cbd09b017bf9c69505db83e7c082b94a0e2abce56cd9_prof);

        
        $__internal_dc6a625eb3550847e948eccee27c2fcc2ff907cc9faebc1a7c7d36b6fcc75c61->leave($__internal_dc6a625eb3550847e948eccee27c2fcc2ff907cc9faebc1a7c7d36b6fcc75c61_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0f70cfb3dcb661f88e0c1426a44eeabd1814da08bf3bfbbceb02d41e252926ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f70cfb3dcb661f88e0c1426a44eeabd1814da08bf3bfbbceb02d41e252926ff->enter($__internal_0f70cfb3dcb661f88e0c1426a44eeabd1814da08bf3bfbbceb02d41e252926ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_fe48364235e0baa2bae27bb481cd850758c33d8d736113ea6559d4a7932811c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe48364235e0baa2bae27bb481cd850758c33d8d736113ea6559d4a7932811c5->enter($__internal_fe48364235e0baa2bae27bb481cd850758c33d8d736113ea6559d4a7932811c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_fe48364235e0baa2bae27bb481cd850758c33d8d736113ea6559d4a7932811c5->leave($__internal_fe48364235e0baa2bae27bb481cd850758c33d8d736113ea6559d4a7932811c5_prof);

        
        $__internal_0f70cfb3dcb661f88e0c1426a44eeabd1814da08bf3bfbbceb02d41e252926ff->leave($__internal_0f70cfb3dcb661f88e0c1426a44eeabd1814da08bf3bfbbceb02d41e252926ff_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
