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
        $__internal_c190ade588885b1e3266e2bbc1038a0ee90384d39da8c3f5aff93779a97dcfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c190ade588885b1e3266e2bbc1038a0ee90384d39da8c3f5aff93779a97dcfb1->enter($__internal_c190ade588885b1e3266e2bbc1038a0ee90384d39da8c3f5aff93779a97dcfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a1bfebd579548d5633274d5747efbdb7dfe0812bbc572ebde9a2809727a0827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1bfebd579548d5633274d5747efbdb7dfe0812bbc572ebde9a2809727a0827->enter($__internal_1a1bfebd579548d5633274d5747efbdb7dfe0812bbc572ebde9a2809727a0827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c190ade588885b1e3266e2bbc1038a0ee90384d39da8c3f5aff93779a97dcfb1->leave($__internal_c190ade588885b1e3266e2bbc1038a0ee90384d39da8c3f5aff93779a97dcfb1_prof);

        
        $__internal_1a1bfebd579548d5633274d5747efbdb7dfe0812bbc572ebde9a2809727a0827->leave($__internal_1a1bfebd579548d5633274d5747efbdb7dfe0812bbc572ebde9a2809727a0827_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_baf13556373b8467f2afddd3039c5151186579774ae981cfc767f65d88379a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf13556373b8467f2afddd3039c5151186579774ae981cfc767f65d88379a0c->enter($__internal_baf13556373b8467f2afddd3039c5151186579774ae981cfc767f65d88379a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b46b932bff534250b7758db3d01fc7d04fcfe707dc91b3c2bea97a6c291ff539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46b932bff534250b7758db3d01fc7d04fcfe707dc91b3c2bea97a6c291ff539->enter($__internal_b46b932bff534250b7758db3d01fc7d04fcfe707dc91b3c2bea97a6c291ff539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "À 4 Mains";
        
        $__internal_b46b932bff534250b7758db3d01fc7d04fcfe707dc91b3c2bea97a6c291ff539->leave($__internal_b46b932bff534250b7758db3d01fc7d04fcfe707dc91b3c2bea97a6c291ff539_prof);

        
        $__internal_baf13556373b8467f2afddd3039c5151186579774ae981cfc767f65d88379a0c->leave($__internal_baf13556373b8467f2afddd3039c5151186579774ae981cfc767f65d88379a0c_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1b6c1e8a741368c2cf892533f8262c0b9f7967da49f043d9f68f8bf0e4e047b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6c1e8a741368c2cf892533f8262c0b9f7967da49f043d9f68f8bf0e4e047b5->enter($__internal_1b6c1e8a741368c2cf892533f8262c0b9f7967da49f043d9f68f8bf0e4e047b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_35c33b7d77002c3dd54c5f2cf046b2e8dfec89f8f888fb674ea0986e3f6ea757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c33b7d77002c3dd54c5f2cf046b2e8dfec89f8f888fb674ea0986e3f6ea757->enter($__internal_35c33b7d77002c3dd54c5f2cf046b2e8dfec89f8f888fb674ea0986e3f6ea757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aqmart/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_35c33b7d77002c3dd54c5f2cf046b2e8dfec89f8f888fb674ea0986e3f6ea757->leave($__internal_35c33b7d77002c3dd54c5f2cf046b2e8dfec89f8f888fb674ea0986e3f6ea757_prof);

        
        $__internal_1b6c1e8a741368c2cf892533f8262c0b9f7967da49f043d9f68f8bf0e4e047b5->leave($__internal_1b6c1e8a741368c2cf892533f8262c0b9f7967da49f043d9f68f8bf0e4e047b5_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_b486c523bb3578bb0997532b937c88953d8f07b4c479de2cd17725ed4433f8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b486c523bb3578bb0997532b937c88953d8f07b4c479de2cd17725ed4433f8c5->enter($__internal_b486c523bb3578bb0997532b937c88953d8f07b4c479de2cd17725ed4433f8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7ef89b8288070961dcbe29f3e0f29221b9346f43399b1dfb65ef013bea79c327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef89b8288070961dcbe29f3e0f29221b9346f43399b1dfb65ef013bea79c327->enter($__internal_7ef89b8288070961dcbe29f3e0f29221b9346f43399b1dfb65ef013bea79c327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_7ef89b8288070961dcbe29f3e0f29221b9346f43399b1dfb65ef013bea79c327->leave($__internal_7ef89b8288070961dcbe29f3e0f29221b9346f43399b1dfb65ef013bea79c327_prof);

        
        $__internal_b486c523bb3578bb0997532b937c88953d8f07b4c479de2cd17725ed4433f8c5->leave($__internal_b486c523bb3578bb0997532b937c88953d8f07b4c479de2cd17725ed4433f8c5_prof);

    }

    // line 20
    public function block_flash($context, array $blocks = array())
    {
        $__internal_179572390c8548aee998c198e4acefeca90d0d0399707ee3050467911861e09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179572390c8548aee998c198e4acefeca90d0d0399707ee3050467911861e09b->enter($__internal_179572390c8548aee998c198e4acefeca90d0d0399707ee3050467911861e09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_fa424d422b40181e7b22fcb4ee310615b7e51b2aaf5d34467cd6b9a0406b12e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa424d422b40181e7b22fcb4ee310615b7e51b2aaf5d34467cd6b9a0406b12e3->enter($__internal_fa424d422b40181e7b22fcb4ee310615b7e51b2aaf5d34467cd6b9a0406b12e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        
        $__internal_fa424d422b40181e7b22fcb4ee310615b7e51b2aaf5d34467cd6b9a0406b12e3->leave($__internal_fa424d422b40181e7b22fcb4ee310615b7e51b2aaf5d34467cd6b9a0406b12e3_prof);

        
        $__internal_179572390c8548aee998c198e4acefeca90d0d0399707ee3050467911861e09b->leave($__internal_179572390c8548aee998c198e4acefeca90d0d0399707ee3050467911861e09b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac3c439a9fd0264c539d37282d5b66a2c44ddf6b416319854488086bb6f0f655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3c439a9fd0264c539d37282d5b66a2c44ddf6b416319854488086bb6f0f655->enter($__internal_ac3c439a9fd0264c539d37282d5b66a2c44ddf6b416319854488086bb6f0f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b33596f5a50e5759caee14479803e59c693560aeb8158b66d9805c822c15d01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33596f5a50e5759caee14479803e59c693560aeb8158b66d9805c822c15d01b->enter($__internal_b33596f5a50e5759caee14479803e59c693560aeb8158b66d9805c822c15d01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b33596f5a50e5759caee14479803e59c693560aeb8158b66d9805c822c15d01b->leave($__internal_b33596f5a50e5759caee14479803e59c693560aeb8158b66d9805c822c15d01b_prof);

        
        $__internal_ac3c439a9fd0264c539d37282d5b66a2c44ddf6b416319854488086bb6f0f655->leave($__internal_ac3c439a9fd0264c539d37282d5b66a2c44ddf6b416319854488086bb6f0f655_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_40366f462f8bf58a2ed9c99b69419e8869c4ee8a93aa967342338a2c68868517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40366f462f8bf58a2ed9c99b69419e8869c4ee8a93aa967342338a2c68868517->enter($__internal_40366f462f8bf58a2ed9c99b69419e8869c4ee8a93aa967342338a2c68868517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e130eae538c8e2ed48f262bd14ef76681d976ff943cf6da5ac913db312813ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e130eae538c8e2ed48f262bd14ef76681d976ff943cf6da5ac913db312813ad2->enter($__internal_e130eae538c8e2ed48f262bd14ef76681d976ff943cf6da5ac913db312813ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_e130eae538c8e2ed48f262bd14ef76681d976ff943cf6da5ac913db312813ad2->leave($__internal_e130eae538c8e2ed48f262bd14ef76681d976ff943cf6da5ac913db312813ad2_prof);

        
        $__internal_40366f462f8bf58a2ed9c99b69419e8869c4ee8a93aa967342338a2c68868517->leave($__internal_40366f462f8bf58a2ed9c99b69419e8869c4ee8a93aa967342338a2c68868517_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b48d70e38a5e25840ee8cc0972c0fd8c5ed21153e28712f0ea223fd4595cf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b48d70e38a5e25840ee8cc0972c0fd8c5ed21153e28712f0ea223fd4595cf77->enter($__internal_6b48d70e38a5e25840ee8cc0972c0fd8c5ed21153e28712f0ea223fd4595cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_311673984b8167dc78cab56522cfbda06ba437073bf84d4c91d4e779940d0951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311673984b8167dc78cab56522cfbda06ba437073bf84d4c91d4e779940d0951->enter($__internal_311673984b8167dc78cab56522cfbda06ba437073bf84d4c91d4e779940d0951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_311673984b8167dc78cab56522cfbda06ba437073bf84d4c91d4e779940d0951->leave($__internal_311673984b8167dc78cab56522cfbda06ba437073bf84d4c91d4e779940d0951_prof);

        
        $__internal_6b48d70e38a5e25840ee8cc0972c0fd8c5ed21153e28712f0ea223fd4595cf77->leave($__internal_6b48d70e38a5e25840ee8cc0972c0fd8c5ed21153e28712f0ea223fd4595cf77_prof);

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
