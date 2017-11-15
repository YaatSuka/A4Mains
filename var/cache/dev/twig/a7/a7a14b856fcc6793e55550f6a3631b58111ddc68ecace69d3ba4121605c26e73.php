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
        $__internal_368d4036ca8ade088963265b6f09a1aa337a13560ba7439698ab00c3ab2cf170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368d4036ca8ade088963265b6f09a1aa337a13560ba7439698ab00c3ab2cf170->enter($__internal_368d4036ca8ade088963265b6f09a1aa337a13560ba7439698ab00c3ab2cf170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_48baaf0f15a904ba96052799f7cdc7d12c536031665e540614ce1b163126a7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48baaf0f15a904ba96052799f7cdc7d12c536031665e540614ce1b163126a7c3->enter($__internal_48baaf0f15a904ba96052799f7cdc7d12c536031665e540614ce1b163126a7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_368d4036ca8ade088963265b6f09a1aa337a13560ba7439698ab00c3ab2cf170->leave($__internal_368d4036ca8ade088963265b6f09a1aa337a13560ba7439698ab00c3ab2cf170_prof);

        
        $__internal_48baaf0f15a904ba96052799f7cdc7d12c536031665e540614ce1b163126a7c3->leave($__internal_48baaf0f15a904ba96052799f7cdc7d12c536031665e540614ce1b163126a7c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a4bd3bd59444f3cbefe98f18a6403eedc3e53317e8d0d3de6353ebcb35fde8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4bd3bd59444f3cbefe98f18a6403eedc3e53317e8d0d3de6353ebcb35fde8b->enter($__internal_7a4bd3bd59444f3cbefe98f18a6403eedc3e53317e8d0d3de6353ebcb35fde8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92548bd9a6845be36514c0a00ce7f9d038fe537d610cf2049480a9809365a05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92548bd9a6845be36514c0a00ce7f9d038fe537d610cf2049480a9809365a05f->enter($__internal_92548bd9a6845be36514c0a00ce7f9d038fe537d610cf2049480a9809365a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "À 4 Mains";
        
        $__internal_92548bd9a6845be36514c0a00ce7f9d038fe537d610cf2049480a9809365a05f->leave($__internal_92548bd9a6845be36514c0a00ce7f9d038fe537d610cf2049480a9809365a05f_prof);

        
        $__internal_7a4bd3bd59444f3cbefe98f18a6403eedc3e53317e8d0d3de6353ebcb35fde8b->leave($__internal_7a4bd3bd59444f3cbefe98f18a6403eedc3e53317e8d0d3de6353ebcb35fde8b_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f6890dde7eb9df233124820f0032c6d1fe90d570fa30c532d3c6fe12d523571e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6890dde7eb9df233124820f0032c6d1fe90d570fa30c532d3c6fe12d523571e->enter($__internal_f6890dde7eb9df233124820f0032c6d1fe90d570fa30c532d3c6fe12d523571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_19c4d1a95546ea4d4be6931bcea9dba4244f01d96367f425c0b90e1f6e48c962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c4d1a95546ea4d4be6931bcea9dba4244f01d96367f425c0b90e1f6e48c962->enter($__internal_19c4d1a95546ea4d4be6931bcea9dba4244f01d96367f425c0b90e1f6e48c962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aqmart/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_19c4d1a95546ea4d4be6931bcea9dba4244f01d96367f425c0b90e1f6e48c962->leave($__internal_19c4d1a95546ea4d4be6931bcea9dba4244f01d96367f425c0b90e1f6e48c962_prof);

        
        $__internal_f6890dde7eb9df233124820f0032c6d1fe90d570fa30c532d3c6fe12d523571e->leave($__internal_f6890dde7eb9df233124820f0032c6d1fe90d570fa30c532d3c6fe12d523571e_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_be7cc3086c8abd514e7142fe71f58a7d4c17bf772df501c814a8b2100898e60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7cc3086c8abd514e7142fe71f58a7d4c17bf772df501c814a8b2100898e60d->enter($__internal_be7cc3086c8abd514e7142fe71f58a7d4c17bf772df501c814a8b2100898e60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_50e8ca2a5eaf0d670ac0044367207ece0add034d06407aed5824ab361ba41a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e8ca2a5eaf0d670ac0044367207ece0add034d06407aed5824ab361ba41a30->enter($__internal_50e8ca2a5eaf0d670ac0044367207ece0add034d06407aed5824ab361ba41a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_50e8ca2a5eaf0d670ac0044367207ece0add034d06407aed5824ab361ba41a30->leave($__internal_50e8ca2a5eaf0d670ac0044367207ece0add034d06407aed5824ab361ba41a30_prof);

        
        $__internal_be7cc3086c8abd514e7142fe71f58a7d4c17bf772df501c814a8b2100898e60d->leave($__internal_be7cc3086c8abd514e7142fe71f58a7d4c17bf772df501c814a8b2100898e60d_prof);

    }

    // line 20
    public function block_flash($context, array $blocks = array())
    {
        $__internal_02d90f9f75b9c3e8092d770cd050d4f1a3c916a6835d99377b594f84c8730143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d90f9f75b9c3e8092d770cd050d4f1a3c916a6835d99377b594f84c8730143->enter($__internal_02d90f9f75b9c3e8092d770cd050d4f1a3c916a6835d99377b594f84c8730143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_e250d1eb34683ac57907a9805c5f00602830c09d01094c81272f53bcdaf2c486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e250d1eb34683ac57907a9805c5f00602830c09d01094c81272f53bcdaf2c486->enter($__internal_e250d1eb34683ac57907a9805c5f00602830c09d01094c81272f53bcdaf2c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        
        $__internal_e250d1eb34683ac57907a9805c5f00602830c09d01094c81272f53bcdaf2c486->leave($__internal_e250d1eb34683ac57907a9805c5f00602830c09d01094c81272f53bcdaf2c486_prof);

        
        $__internal_02d90f9f75b9c3e8092d770cd050d4f1a3c916a6835d99377b594f84c8730143->leave($__internal_02d90f9f75b9c3e8092d770cd050d4f1a3c916a6835d99377b594f84c8730143_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eb601ffc81ae2cc90ca9361b65f183472ddc33e0977d9ad4e95faec9c84c7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb601ffc81ae2cc90ca9361b65f183472ddc33e0977d9ad4e95faec9c84c7bf->enter($__internal_6eb601ffc81ae2cc90ca9361b65f183472ddc33e0977d9ad4e95faec9c84c7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef7e64062171e8fff8b87348025a78bcd4c9e11a007ed74390a8141b864bacfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7e64062171e8fff8b87348025a78bcd4c9e11a007ed74390a8141b864bacfe->enter($__internal_ef7e64062171e8fff8b87348025a78bcd4c9e11a007ed74390a8141b864bacfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef7e64062171e8fff8b87348025a78bcd4c9e11a007ed74390a8141b864bacfe->leave($__internal_ef7e64062171e8fff8b87348025a78bcd4c9e11a007ed74390a8141b864bacfe_prof);

        
        $__internal_6eb601ffc81ae2cc90ca9361b65f183472ddc33e0977d9ad4e95faec9c84c7bf->leave($__internal_6eb601ffc81ae2cc90ca9361b65f183472ddc33e0977d9ad4e95faec9c84c7bf_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_016be2cea8b46eefc986f5e67df2ccb524dfae64701005f647ab6b289fda1e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016be2cea8b46eefc986f5e67df2ccb524dfae64701005f647ab6b289fda1e0c->enter($__internal_016be2cea8b46eefc986f5e67df2ccb524dfae64701005f647ab6b289fda1e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7362610557a5c5a6cf784f3548fc528fa7717a53a9ef82ade388fa39ad829482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7362610557a5c5a6cf784f3548fc528fa7717a53a9ef82ade388fa39ad829482->enter($__internal_7362610557a5c5a6cf784f3548fc528fa7717a53a9ef82ade388fa39ad829482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7362610557a5c5a6cf784f3548fc528fa7717a53a9ef82ade388fa39ad829482->leave($__internal_7362610557a5c5a6cf784f3548fc528fa7717a53a9ef82ade388fa39ad829482_prof);

        
        $__internal_016be2cea8b46eefc986f5e67df2ccb524dfae64701005f647ab6b289fda1e0c->leave($__internal_016be2cea8b46eefc986f5e67df2ccb524dfae64701005f647ab6b289fda1e0c_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e98dc150bb0e0ffb2a710a68b4475a1fdf06e1b285cd8a19995576b9189cfb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98dc150bb0e0ffb2a710a68b4475a1fdf06e1b285cd8a19995576b9189cfb59->enter($__internal_e98dc150bb0e0ffb2a710a68b4475a1fdf06e1b285cd8a19995576b9189cfb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec6922543734cbc6b3042318eb23117fb8cd39e20d2ebf369745f8c9bc999ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6922543734cbc6b3042318eb23117fb8cd39e20d2ebf369745f8c9bc999ae8->enter($__internal_ec6922543734cbc6b3042318eb23117fb8cd39e20d2ebf369745f8c9bc999ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec6922543734cbc6b3042318eb23117fb8cd39e20d2ebf369745f8c9bc999ae8->leave($__internal_ec6922543734cbc6b3042318eb23117fb8cd39e20d2ebf369745f8c9bc999ae8_prof);

        
        $__internal_e98dc150bb0e0ffb2a710a68b4475a1fdf06e1b285cd8a19995576b9189cfb59->leave($__internal_e98dc150bb0e0ffb2a710a68b4475a1fdf06e1b285cd8a19995576b9189cfb59_prof);

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
