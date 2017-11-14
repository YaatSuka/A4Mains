<?php

/* base.html.twig */
class __TwigTemplate_ad431203ebdbe85b06f1c4d4b68154e4e91ecc92529b955b42373a33e8485a30 extends Twig_Template
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
        $__internal_4035a1b3a84a2f4d9c2a708d6fbb8d340b53b424bca6daf0250522ec3396205f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4035a1b3a84a2f4d9c2a708d6fbb8d340b53b424bca6daf0250522ec3396205f->enter($__internal_4035a1b3a84a2f4d9c2a708d6fbb8d340b53b424bca6daf0250522ec3396205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cc923e9e7c19ed4d934f976a6e0f614b8e2cda0d36b811be7bd1a2d1d3bd1928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc923e9e7c19ed4d934f976a6e0f614b8e2cda0d36b811be7bd1a2d1d3bd1928->enter($__internal_cc923e9e7c19ed4d934f976a6e0f614b8e2cda0d36b811be7bd1a2d1d3bd1928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4035a1b3a84a2f4d9c2a708d6fbb8d340b53b424bca6daf0250522ec3396205f->leave($__internal_4035a1b3a84a2f4d9c2a708d6fbb8d340b53b424bca6daf0250522ec3396205f_prof);

        
        $__internal_cc923e9e7c19ed4d934f976a6e0f614b8e2cda0d36b811be7bd1a2d1d3bd1928->leave($__internal_cc923e9e7c19ed4d934f976a6e0f614b8e2cda0d36b811be7bd1a2d1d3bd1928_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_973cf1bb716c5467c15e72a14ff0667e7f5869879d7f13e9bb681c34efaf259a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973cf1bb716c5467c15e72a14ff0667e7f5869879d7f13e9bb681c34efaf259a->enter($__internal_973cf1bb716c5467c15e72a14ff0667e7f5869879d7f13e9bb681c34efaf259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43186e3e7741bf7a2ef0f5723885cf33ae3ed00caf0a07d5686e439af27af666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43186e3e7741bf7a2ef0f5723885cf33ae3ed00caf0a07d5686e439af27af666->enter($__internal_43186e3e7741bf7a2ef0f5723885cf33ae3ed00caf0a07d5686e439af27af666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "À 4 Mains";
        
        $__internal_43186e3e7741bf7a2ef0f5723885cf33ae3ed00caf0a07d5686e439af27af666->leave($__internal_43186e3e7741bf7a2ef0f5723885cf33ae3ed00caf0a07d5686e439af27af666_prof);

        
        $__internal_973cf1bb716c5467c15e72a14ff0667e7f5869879d7f13e9bb681c34efaf259a->leave($__internal_973cf1bb716c5467c15e72a14ff0667e7f5869879d7f13e9bb681c34efaf259a_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_82a1fd5d269049535e770ee58634bc2cd12149d0dc53dd08a71ab898450bd0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a1fd5d269049535e770ee58634bc2cd12149d0dc53dd08a71ab898450bd0c0->enter($__internal_82a1fd5d269049535e770ee58634bc2cd12149d0dc53dd08a71ab898450bd0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ee1e1202d368a1cc8e36ede230cae4bf1f1e34d495841d8f82a7f71c4363fa69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1e1202d368a1cc8e36ede230cae4bf1f1e34d495841d8f82a7f71c4363fa69->enter($__internal_ee1e1202d368a1cc8e36ede230cae4bf1f1e34d495841d8f82a7f71c4363fa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aqmart/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ee1e1202d368a1cc8e36ede230cae4bf1f1e34d495841d8f82a7f71c4363fa69->leave($__internal_ee1e1202d368a1cc8e36ede230cae4bf1f1e34d495841d8f82a7f71c4363fa69_prof);

        
        $__internal_82a1fd5d269049535e770ee58634bc2cd12149d0dc53dd08a71ab898450bd0c0->leave($__internal_82a1fd5d269049535e770ee58634bc2cd12149d0dc53dd08a71ab898450bd0c0_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_570c5cf18bb1d611841755ddd6c30a786223d4159d470f179cdddbe730ecaf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570c5cf18bb1d611841755ddd6c30a786223d4159d470f179cdddbe730ecaf1b->enter($__internal_570c5cf18bb1d611841755ddd6c30a786223d4159d470f179cdddbe730ecaf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e20d7f5ae34ff24cca982109bac3f05f18866a934ad9889d80427530c578e376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20d7f5ae34ff24cca982109bac3f05f18866a934ad9889d80427530c578e376->enter($__internal_e20d7f5ae34ff24cca982109bac3f05f18866a934ad9889d80427530c578e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_e20d7f5ae34ff24cca982109bac3f05f18866a934ad9889d80427530c578e376->leave($__internal_e20d7f5ae34ff24cca982109bac3f05f18866a934ad9889d80427530c578e376_prof);

        
        $__internal_570c5cf18bb1d611841755ddd6c30a786223d4159d470f179cdddbe730ecaf1b->leave($__internal_570c5cf18bb1d611841755ddd6c30a786223d4159d470f179cdddbe730ecaf1b_prof);

    }

    // line 20
    public function block_flash($context, array $blocks = array())
    {
        $__internal_9023f60c2618614b23428a18e8f66b7736d1b90a96451a4608ddc2df1b3e62c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9023f60c2618614b23428a18e8f66b7736d1b90a96451a4608ddc2df1b3e62c5->enter($__internal_9023f60c2618614b23428a18e8f66b7736d1b90a96451a4608ddc2df1b3e62c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_0893d1d26f47c2378a140410e2d066cc0f3c3a78258b61a4bdea71481db84394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0893d1d26f47c2378a140410e2d066cc0f3c3a78258b61a4bdea71481db84394->enter($__internal_0893d1d26f47c2378a140410e2d066cc0f3c3a78258b61a4bdea71481db84394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        
        $__internal_0893d1d26f47c2378a140410e2d066cc0f3c3a78258b61a4bdea71481db84394->leave($__internal_0893d1d26f47c2378a140410e2d066cc0f3c3a78258b61a4bdea71481db84394_prof);

        
        $__internal_9023f60c2618614b23428a18e8f66b7736d1b90a96451a4608ddc2df1b3e62c5->leave($__internal_9023f60c2618614b23428a18e8f66b7736d1b90a96451a4608ddc2df1b3e62c5_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_09cbca7efff157adadf39377df08c5ccbfd50280d08be8067ecf40a50c4b859d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cbca7efff157adadf39377df08c5ccbfd50280d08be8067ecf40a50c4b859d->enter($__internal_09cbca7efff157adadf39377df08c5ccbfd50280d08be8067ecf40a50c4b859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14138f4970f739cb7499cff243d41d0a86baf9286e6d716f5a098b8cd57deab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14138f4970f739cb7499cff243d41d0a86baf9286e6d716f5a098b8cd57deab7->enter($__internal_14138f4970f739cb7499cff243d41d0a86baf9286e6d716f5a098b8cd57deab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14138f4970f739cb7499cff243d41d0a86baf9286e6d716f5a098b8cd57deab7->leave($__internal_14138f4970f739cb7499cff243d41d0a86baf9286e6d716f5a098b8cd57deab7_prof);

        
        $__internal_09cbca7efff157adadf39377df08c5ccbfd50280d08be8067ecf40a50c4b859d->leave($__internal_09cbca7efff157adadf39377df08c5ccbfd50280d08be8067ecf40a50c4b859d_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_19dfab205a5937af7c50bf3e6035a765aaa65a58c77aa718666fcca267dda4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19dfab205a5937af7c50bf3e6035a765aaa65a58c77aa718666fcca267dda4b1->enter($__internal_19dfab205a5937af7c50bf3e6035a765aaa65a58c77aa718666fcca267dda4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3c00c21c72deb016fd6bd4576fc58151efdfb564184dcfcd5aaa827cea5133a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c00c21c72deb016fd6bd4576fc58151efdfb564184dcfcd5aaa827cea5133a9->enter($__internal_3c00c21c72deb016fd6bd4576fc58151efdfb564184dcfcd5aaa827cea5133a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_3c00c21c72deb016fd6bd4576fc58151efdfb564184dcfcd5aaa827cea5133a9->leave($__internal_3c00c21c72deb016fd6bd4576fc58151efdfb564184dcfcd5aaa827cea5133a9_prof);

        
        $__internal_19dfab205a5937af7c50bf3e6035a765aaa65a58c77aa718666fcca267dda4b1->leave($__internal_19dfab205a5937af7c50bf3e6035a765aaa65a58c77aa718666fcca267dda4b1_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfc43278b1bb318c74a4097c9ca81c8d8ba91720bb0d4de12d2d067ab9d13bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc43278b1bb318c74a4097c9ca81c8d8ba91720bb0d4de12d2d067ab9d13bd5->enter($__internal_dfc43278b1bb318c74a4097c9ca81c8d8ba91720bb0d4de12d2d067ab9d13bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3d380746563f65f8a8e36e4a83cafbdafe39c4bdada6f94f63e07adcefc1041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d380746563f65f8a8e36e4a83cafbdafe39c4bdada6f94f63e07adcefc1041->enter($__internal_b3d380746563f65f8a8e36e4a83cafbdafe39c4bdada6f94f63e07adcefc1041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b3d380746563f65f8a8e36e4a83cafbdafe39c4bdada6f94f63e07adcefc1041->leave($__internal_b3d380746563f65f8a8e36e4a83cafbdafe39c4bdada6f94f63e07adcefc1041_prof);

        
        $__internal_dfc43278b1bb318c74a4097c9ca81c8d8ba91720bb0d4de12d2d067ab9d13bd5->leave($__internal_dfc43278b1bb318c74a4097c9ca81c8d8ba91720bb0d4de12d2d067ab9d13bd5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\app\\Resources\\views\\base.html.twig");
    }
}
