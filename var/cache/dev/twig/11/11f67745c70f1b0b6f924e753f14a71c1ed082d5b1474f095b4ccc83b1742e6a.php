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
        $__internal_f5d550f827246a400daeee2807ae1df58c59d716e5035d49f9940614bc0e8c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d550f827246a400daeee2807ae1df58c59d716e5035d49f9940614bc0e8c77->enter($__internal_f5d550f827246a400daeee2807ae1df58c59d716e5035d49f9940614bc0e8c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_9413680a022110517ec22aaa894122369907134fd99e15389fc6838a5f4eb080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9413680a022110517ec22aaa894122369907134fd99e15389fc6838a5f4eb080->enter($__internal_9413680a022110517ec22aaa894122369907134fd99e15389fc6838a5f4eb080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f5d550f827246a400daeee2807ae1df58c59d716e5035d49f9940614bc0e8c77->leave($__internal_f5d550f827246a400daeee2807ae1df58c59d716e5035d49f9940614bc0e8c77_prof);

        
        $__internal_9413680a022110517ec22aaa894122369907134fd99e15389fc6838a5f4eb080->leave($__internal_9413680a022110517ec22aaa894122369907134fd99e15389fc6838a5f4eb080_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d886f0562c1f211520e90f24057538c9af4e5a1499b17b1e200cca0e7bfc5d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d886f0562c1f211520e90f24057538c9af4e5a1499b17b1e200cca0e7bfc5d26->enter($__internal_d886f0562c1f211520e90f24057538c9af4e5a1499b17b1e200cca0e7bfc5d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_41f36d28075a4ea9a8808032d47fb0a807c25750315ea2d9f6efbbb9530f3200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f36d28075a4ea9a8808032d47fb0a807c25750315ea2d9f6efbbb9530f3200->enter($__internal_41f36d28075a4ea9a8808032d47fb0a807c25750315ea2d9f6efbbb9530f3200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_41f36d28075a4ea9a8808032d47fb0a807c25750315ea2d9f6efbbb9530f3200->leave($__internal_41f36d28075a4ea9a8808032d47fb0a807c25750315ea2d9f6efbbb9530f3200_prof);

        
        $__internal_d886f0562c1f211520e90f24057538c9af4e5a1499b17b1e200cca0e7bfc5d26->leave($__internal_d886f0562c1f211520e90f24057538c9af4e5a1499b17b1e200cca0e7bfc5d26_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4acd9589ebe698ed29402a7ec967e201e57a2313f406dee114aee909969b35ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4acd9589ebe698ed29402a7ec967e201e57a2313f406dee114aee909969b35ec->enter($__internal_4acd9589ebe698ed29402a7ec967e201e57a2313f406dee114aee909969b35ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b7dfea25f76042e823dd04e41c827ba036ed956c0127db806b6aaeb1c4741462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dfea25f76042e823dd04e41c827ba036ed956c0127db806b6aaeb1c4741462->enter($__internal_b7dfea25f76042e823dd04e41c827ba036ed956c0127db806b6aaeb1c4741462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_b7dfea25f76042e823dd04e41c827ba036ed956c0127db806b6aaeb1c4741462->leave($__internal_b7dfea25f76042e823dd04e41c827ba036ed956c0127db806b6aaeb1c4741462_prof);

        
        $__internal_4acd9589ebe698ed29402a7ec967e201e57a2313f406dee114aee909969b35ec->leave($__internal_4acd9589ebe698ed29402a7ec967e201e57a2313f406dee114aee909969b35ec_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_33f5a6da0b0950eb3e0e34af2bb9aab451853a05a202608c449f97d0c9b22877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f5a6da0b0950eb3e0e34af2bb9aab451853a05a202608c449f97d0c9b22877->enter($__internal_33f5a6da0b0950eb3e0e34af2bb9aab451853a05a202608c449f97d0c9b22877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f3dff3776400d63f5b7bf676f292de69e8f3bd662a6d7a234dc7396f5188e84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dff3776400d63f5b7bf676f292de69e8f3bd662a6d7a234dc7396f5188e84e->enter($__internal_f3dff3776400d63f5b7bf676f292de69e8f3bd662a6d7a234dc7396f5188e84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_f3dff3776400d63f5b7bf676f292de69e8f3bd662a6d7a234dc7396f5188e84e->leave($__internal_f3dff3776400d63f5b7bf676f292de69e8f3bd662a6d7a234dc7396f5188e84e_prof);

        
        $__internal_33f5a6da0b0950eb3e0e34af2bb9aab451853a05a202608c449f97d0c9b22877->leave($__internal_33f5a6da0b0950eb3e0e34af2bb9aab451853a05a202608c449f97d0c9b22877_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bb4a23f362e1895438ac8353d9ac6a38a136bfc1ef3fcad2ad7c55f2b7fbe768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4a23f362e1895438ac8353d9ac6a38a136bfc1ef3fcad2ad7c55f2b7fbe768->enter($__internal_bb4a23f362e1895438ac8353d9ac6a38a136bfc1ef3fcad2ad7c55f2b7fbe768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1b6ba0b523c65d59a601a3c2968b34ce89c276bf2beaab96dbcfb9f7febbfeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6ba0b523c65d59a601a3c2968b34ce89c276bf2beaab96dbcfb9f7febbfeec->enter($__internal_1b6ba0b523c65d59a601a3c2968b34ce89c276bf2beaab96dbcfb9f7febbfeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1b6ba0b523c65d59a601a3c2968b34ce89c276bf2beaab96dbcfb9f7febbfeec->leave($__internal_1b6ba0b523c65d59a601a3c2968b34ce89c276bf2beaab96dbcfb9f7febbfeec_prof);

        
        $__internal_bb4a23f362e1895438ac8353d9ac6a38a136bfc1ef3fcad2ad7c55f2b7fbe768->leave($__internal_bb4a23f362e1895438ac8353d9ac6a38a136bfc1ef3fcad2ad7c55f2b7fbe768_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_77000d5a29471c24f9a7b53f096d5b5712962fe69c2f6bd025ec92e9db6539cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77000d5a29471c24f9a7b53f096d5b5712962fe69c2f6bd025ec92e9db6539cc->enter($__internal_77000d5a29471c24f9a7b53f096d5b5712962fe69c2f6bd025ec92e9db6539cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d4d82bd1c1ee07c76260b30eb1a9b9693d3d6321859dffeaf1a68126092a5bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d82bd1c1ee07c76260b30eb1a9b9693d3d6321859dffeaf1a68126092a5bc1->enter($__internal_d4d82bd1c1ee07c76260b30eb1a9b9693d3d6321859dffeaf1a68126092a5bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d4d82bd1c1ee07c76260b30eb1a9b9693d3d6321859dffeaf1a68126092a5bc1->leave($__internal_d4d82bd1c1ee07c76260b30eb1a9b9693d3d6321859dffeaf1a68126092a5bc1_prof);

        
        $__internal_77000d5a29471c24f9a7b53f096d5b5712962fe69c2f6bd025ec92e9db6539cc->leave($__internal_77000d5a29471c24f9a7b53f096d5b5712962fe69c2f6bd025ec92e9db6539cc_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_34f323e2907d72908b2303b78320b36a1d8427947642d58b8796fdf19ac5b159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f323e2907d72908b2303b78320b36a1d8427947642d58b8796fdf19ac5b159->enter($__internal_34f323e2907d72908b2303b78320b36a1d8427947642d58b8796fdf19ac5b159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_81967c1602a115e49ff1d9daf7b3ac5aa45ba3e65736825a9125d3bed97dc1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81967c1602a115e49ff1d9daf7b3ac5aa45ba3e65736825a9125d3bed97dc1bb->enter($__internal_81967c1602a115e49ff1d9daf7b3ac5aa45ba3e65736825a9125d3bed97dc1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_81967c1602a115e49ff1d9daf7b3ac5aa45ba3e65736825a9125d3bed97dc1bb->leave($__internal_81967c1602a115e49ff1d9daf7b3ac5aa45ba3e65736825a9125d3bed97dc1bb_prof);

        
        $__internal_34f323e2907d72908b2303b78320b36a1d8427947642d58b8796fdf19ac5b159->leave($__internal_34f323e2907d72908b2303b78320b36a1d8427947642d58b8796fdf19ac5b159_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_eb7c9a6bf9492da7abab4c2e71e5c8490f4433df1ae59969aafa4b672599aed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7c9a6bf9492da7abab4c2e71e5c8490f4433df1ae59969aafa4b672599aed3->enter($__internal_eb7c9a6bf9492da7abab4c2e71e5c8490f4433df1ae59969aafa4b672599aed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_919812682c28b4b04a5b6d1b42dbd81bf155b2efa0c2a02e31ab646d2c1acc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919812682c28b4b04a5b6d1b42dbd81bf155b2efa0c2a02e31ab646d2c1acc82->enter($__internal_919812682c28b4b04a5b6d1b42dbd81bf155b2efa0c2a02e31ab646d2c1acc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_919812682c28b4b04a5b6d1b42dbd81bf155b2efa0c2a02e31ab646d2c1acc82->leave($__internal_919812682c28b4b04a5b6d1b42dbd81bf155b2efa0c2a02e31ab646d2c1acc82_prof);

        
        $__internal_eb7c9a6bf9492da7abab4c2e71e5c8490f4433df1ae59969aafa4b672599aed3->leave($__internal_eb7c9a6bf9492da7abab4c2e71e5c8490f4433df1ae59969aafa4b672599aed3_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1e9ba6b9cb10b1122515a6b95d5169ee6c9ca8c115d7d694be5090a78ba43e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9ba6b9cb10b1122515a6b95d5169ee6c9ca8c115d7d694be5090a78ba43e5d->enter($__internal_1e9ba6b9cb10b1122515a6b95d5169ee6c9ca8c115d7d694be5090a78ba43e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_055a7e1ee24ed5e613b7783024361136993124ae9616d3078620beb1996c3796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055a7e1ee24ed5e613b7783024361136993124ae9616d3078620beb1996c3796->enter($__internal_055a7e1ee24ed5e613b7783024361136993124ae9616d3078620beb1996c3796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_055a7e1ee24ed5e613b7783024361136993124ae9616d3078620beb1996c3796->leave($__internal_055a7e1ee24ed5e613b7783024361136993124ae9616d3078620beb1996c3796_prof);

        
        $__internal_1e9ba6b9cb10b1122515a6b95d5169ee6c9ca8c115d7d694be5090a78ba43e5d->leave($__internal_1e9ba6b9cb10b1122515a6b95d5169ee6c9ca8c115d7d694be5090a78ba43e5d_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_81dc2122cd34b8dbaa0f31f01101b3b4e1721f1cc8861f871ea8b29c772d87da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dc2122cd34b8dbaa0f31f01101b3b4e1721f1cc8861f871ea8b29c772d87da->enter($__internal_81dc2122cd34b8dbaa0f31f01101b3b4e1721f1cc8861f871ea8b29c772d87da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5cafba9d6c947f5aca2934fcd2fce815b93cf9b917237d4d3cb46f4cff5f36c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cafba9d6c947f5aca2934fcd2fce815b93cf9b917237d4d3cb46f4cff5f36c0->enter($__internal_5cafba9d6c947f5aca2934fcd2fce815b93cf9b917237d4d3cb46f4cff5f36c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_5cafba9d6c947f5aca2934fcd2fce815b93cf9b917237d4d3cb46f4cff5f36c0->leave($__internal_5cafba9d6c947f5aca2934fcd2fce815b93cf9b917237d4d3cb46f4cff5f36c0_prof);

        
        $__internal_81dc2122cd34b8dbaa0f31f01101b3b4e1721f1cc8861f871ea8b29c772d87da->leave($__internal_81dc2122cd34b8dbaa0f31f01101b3b4e1721f1cc8861f871ea8b29c772d87da_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2aea29915729dabbc160672cfa5096201e223f002ffeac45d75c828ca5f6e8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aea29915729dabbc160672cfa5096201e223f002ffeac45d75c828ca5f6e8eb->enter($__internal_2aea29915729dabbc160672cfa5096201e223f002ffeac45d75c828ca5f6e8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_80138ee85eef2b872e3dc5faa25444216f08ffa14f57dfbdb751123efaa2350b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80138ee85eef2b872e3dc5faa25444216f08ffa14f57dfbdb751123efaa2350b->enter($__internal_80138ee85eef2b872e3dc5faa25444216f08ffa14f57dfbdb751123efaa2350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_80138ee85eef2b872e3dc5faa25444216f08ffa14f57dfbdb751123efaa2350b->leave($__internal_80138ee85eef2b872e3dc5faa25444216f08ffa14f57dfbdb751123efaa2350b_prof);

        
        $__internal_2aea29915729dabbc160672cfa5096201e223f002ffeac45d75c828ca5f6e8eb->leave($__internal_2aea29915729dabbc160672cfa5096201e223f002ffeac45d75c828ca5f6e8eb_prof);

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
