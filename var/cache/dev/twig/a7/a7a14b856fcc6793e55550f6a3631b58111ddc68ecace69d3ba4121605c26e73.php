<?php

/* ::base.html.twig */
class __TwigTemplate_ad61b6c10a2ed594ef14cda2b9996ec0ad156620647ae12c8bbbda7f01140758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'flash' => array($this, 'block_flash'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_800f434d33306fa8e274c8499d3575137b932d3228c42c7df4e7a74072b34841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800f434d33306fa8e274c8499d3575137b932d3228c42c7df4e7a74072b34841->enter($__internal_800f434d33306fa8e274c8499d3575137b932d3228c42c7df4e7a74072b34841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e516d6579619a5d700fc38cf8a348689aa9be7ac8c2254f8385ee8d2885e3d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e516d6579619a5d700fc38cf8a348689aa9be7ac8c2254f8385ee8d2885e3d49->enter($__internal_e516d6579619a5d700fc38cf8a348689aa9be7ac8c2254f8385ee8d2885e3d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('flash', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_800f434d33306fa8e274c8499d3575137b932d3228c42c7df4e7a74072b34841->leave($__internal_800f434d33306fa8e274c8499d3575137b932d3228c42c7df4e7a74072b34841_prof);

        
        $__internal_e516d6579619a5d700fc38cf8a348689aa9be7ac8c2254f8385ee8d2885e3d49->leave($__internal_e516d6579619a5d700fc38cf8a348689aa9be7ac8c2254f8385ee8d2885e3d49_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_add66418f7628e5f33c0c1e1dca4b9dd73c383ee7be6ba89e3ff6c1599ad53fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add66418f7628e5f33c0c1e1dca4b9dd73c383ee7be6ba89e3ff6c1599ad53fc->enter($__internal_add66418f7628e5f33c0c1e1dca4b9dd73c383ee7be6ba89e3ff6c1599ad53fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7578e8aa46ec83c93ce32679ce50b4103a44aa6d3f78227276a251ae734c384a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7578e8aa46ec83c93ce32679ce50b4103a44aa6d3f78227276a251ae734c384a->enter($__internal_7578e8aa46ec83c93ce32679ce50b4103a44aa6d3f78227276a251ae734c384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "À 4 Mains";
        
        $__internal_7578e8aa46ec83c93ce32679ce50b4103a44aa6d3f78227276a251ae734c384a->leave($__internal_7578e8aa46ec83c93ce32679ce50b4103a44aa6d3f78227276a251ae734c384a_prof);

        
        $__internal_add66418f7628e5f33c0c1e1dca4b9dd73c383ee7be6ba89e3ff6c1599ad53fc->leave($__internal_add66418f7628e5f33c0c1e1dca4b9dd73c383ee7be6ba89e3ff6c1599ad53fc_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e5aefe00a3aab91538a6243eadd7c8e0c80cfb12808350ea658c9879cf3ced64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aefe00a3aab91538a6243eadd7c8e0c80cfb12808350ea658c9879cf3ced64->enter($__internal_e5aefe00a3aab91538a6243eadd7c8e0c80cfb12808350ea658c9879cf3ced64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4a78d5dd300e7aeb5c01666147e03ad994eea979a4c0371137bdcb809ceec60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a78d5dd300e7aeb5c01666147e03ad994eea979a4c0371137bdcb809ceec60d->enter($__internal_4a78d5dd300e7aeb5c01666147e03ad994eea979a4c0371137bdcb809ceec60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aqmart/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_4a78d5dd300e7aeb5c01666147e03ad994eea979a4c0371137bdcb809ceec60d->leave($__internal_4a78d5dd300e7aeb5c01666147e03ad994eea979a4c0371137bdcb809ceec60d_prof);

        
        $__internal_e5aefe00a3aab91538a6243eadd7c8e0c80cfb12808350ea658c9879cf3ced64->leave($__internal_e5aefe00a3aab91538a6243eadd7c8e0c80cfb12808350ea658c9879cf3ced64_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_fe1b557720b00391c04637d49a6c626b932299dd409165914701c2ca65f8ecd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1b557720b00391c04637d49a6c626b932299dd409165914701c2ca65f8ecd5->enter($__internal_fe1b557720b00391c04637d49a6c626b932299dd409165914701c2ca65f8ecd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fb208be5d27ff47f16b3cbb0012da456eb2fcd7326c90c44cca2ccd43be81249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb208be5d27ff47f16b3cbb0012da456eb2fcd7326c90c44cca2ccd43be81249->enter($__internal_fb208be5d27ff47f16b3cbb0012da456eb2fcd7326c90c44cca2ccd43be81249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_fb208be5d27ff47f16b3cbb0012da456eb2fcd7326c90c44cca2ccd43be81249->leave($__internal_fb208be5d27ff47f16b3cbb0012da456eb2fcd7326c90c44cca2ccd43be81249_prof);

        
        $__internal_fe1b557720b00391c04637d49a6c626b932299dd409165914701c2ca65f8ecd5->leave($__internal_fe1b557720b00391c04637d49a6c626b932299dd409165914701c2ca65f8ecd5_prof);

    }

    // line 20
    public function block_flash($context, array $blocks = array())
    {
        $__internal_fa1efebf281fe0a4fa648e895b6ff40f197f3375238bc8313d066366dbef7f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1efebf281fe0a4fa648e895b6ff40f197f3375238bc8313d066366dbef7f32->enter($__internal_fa1efebf281fe0a4fa648e895b6ff40f197f3375238bc8313d066366dbef7f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_53adb8739f3e1a98f8b244515bbb8dbbd34fd673b307e7ccb8acb4043250c4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53adb8739f3e1a98f8b244515bbb8dbbd34fd673b307e7ccb8acb4043250c4df->enter($__internal_53adb8739f3e1a98f8b244515bbb8dbbd34fd673b307e7ccb8acb4043250c4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        
        $__internal_53adb8739f3e1a98f8b244515bbb8dbbd34fd673b307e7ccb8acb4043250c4df->leave($__internal_53adb8739f3e1a98f8b244515bbb8dbbd34fd673b307e7ccb8acb4043250c4df_prof);

        
        $__internal_fa1efebf281fe0a4fa648e895b6ff40f197f3375238bc8313d066366dbef7f32->leave($__internal_fa1efebf281fe0a4fa648e895b6ff40f197f3375238bc8313d066366dbef7f32_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a297af189a898f04a252f41bb95937ba4c7a4091ebd539aa0378fb449c0c5519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a297af189a898f04a252f41bb95937ba4c7a4091ebd539aa0378fb449c0c5519->enter($__internal_a297af189a898f04a252f41bb95937ba4c7a4091ebd539aa0378fb449c0c5519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_965e4ff13a2e3b4152350fac079938ca9a6c021dcf1831778206bce3bbabcdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965e4ff13a2e3b4152350fac079938ca9a6c021dcf1831778206bce3bbabcdf8->enter($__internal_965e4ff13a2e3b4152350fac079938ca9a6c021dcf1831778206bce3bbabcdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_965e4ff13a2e3b4152350fac079938ca9a6c021dcf1831778206bce3bbabcdf8->leave($__internal_965e4ff13a2e3b4152350fac079938ca9a6c021dcf1831778206bce3bbabcdf8_prof);

        
        $__internal_a297af189a898f04a252f41bb95937ba4c7a4091ebd539aa0378fb449c0c5519->leave($__internal_a297af189a898f04a252f41bb95937ba4c7a4091ebd539aa0378fb449c0c5519_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_118740a48ea6dffe95a1eaad6f7ce0c8f4fc8a3599de19515234fc428b89e65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118740a48ea6dffe95a1eaad6f7ce0c8f4fc8a3599de19515234fc428b89e65a->enter($__internal_118740a48ea6dffe95a1eaad6f7ce0c8f4fc8a3599de19515234fc428b89e65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_11d13433fc2a9b9cf38e3bd39f02d6195db1c008c4115af5405641f582512419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d13433fc2a9b9cf38e3bd39f02d6195db1c008c4115af5405641f582512419->enter($__internal_11d13433fc2a9b9cf38e3bd39f02d6195db1c008c4115af5405641f582512419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_11d13433fc2a9b9cf38e3bd39f02d6195db1c008c4115af5405641f582512419->leave($__internal_11d13433fc2a9b9cf38e3bd39f02d6195db1c008c4115af5405641f582512419_prof);

        
        $__internal_118740a48ea6dffe95a1eaad6f7ce0c8f4fc8a3599de19515234fc428b89e65a->leave($__internal_118740a48ea6dffe95a1eaad6f7ce0c8f4fc8a3599de19515234fc428b89e65a_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6cfd23fa82a116e23d25164a40040e92d30a21146ea0bd2898caddc312a7cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cfd23fa82a116e23d25164a40040e92d30a21146ea0bd2898caddc312a7cff->enter($__internal_e6cfd23fa82a116e23d25164a40040e92d30a21146ea0bd2898caddc312a7cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f8d393168dfdbb68f577397724196dcde170bbd98b104ab15c4210254995e11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d393168dfdbb68f577397724196dcde170bbd98b104ab15c4210254995e11b->enter($__internal_f8d393168dfdbb68f577397724196dcde170bbd98b104ab15c4210254995e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8d393168dfdbb68f577397724196dcde170bbd98b104ab15c4210254995e11b->leave($__internal_f8d393168dfdbb68f577397724196dcde170bbd98b104ab15c4210254995e11b_prof);

        
        $__internal_e6cfd23fa82a116e23d25164a40040e92d30a21146ea0bd2898caddc312a7cff->leave($__internal_e6cfd23fa82a116e23d25164a40040e92d30a21146ea0bd2898caddc312a7cff_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 23,  176 => 22,  159 => 21,  142 => 20,  125 => 19,  113 => 11,  108 => 10,  99 => 9,  81 => 5,  69 => 24,  66 => 23,  63 => 22,  60 => 21,  57 => 20,  55 => 19,  45 => 13,  42 => 9,  38 => 5,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}À 4 Mains{% endblock %}</title>
        {#{% stylesheets 'bundles/aqmart/css/style.css' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}#}
        {% block stylesheet %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/aqmart/css/style.css') }}\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        {% block header %}{% endblock %}
        {% block flash %}{% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\app/Resources\\views/base.html.twig");
    }
}
