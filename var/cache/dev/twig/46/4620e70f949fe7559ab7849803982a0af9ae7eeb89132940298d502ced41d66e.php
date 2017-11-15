<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_36c13d2e93512594f77a6599c3e4b2b03e788a7045521972acf6dfad91c47d41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a000dc3db6b020bb516ed60e56a3bd07b506537656c7cb3a694058c52f080b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a000dc3db6b020bb516ed60e56a3bd07b506537656c7cb3a694058c52f080b16->enter($__internal_a000dc3db6b020bb516ed60e56a3bd07b506537656c7cb3a694058c52f080b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7d9a9605792fc5d836fe436e583edfa85f413cc39642abf14f0adf02f302ce0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9a9605792fc5d836fe436e583edfa85f413cc39642abf14f0adf02f302ce0e->enter($__internal_7d9a9605792fc5d836fe436e583edfa85f413cc39642abf14f0adf02f302ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a000dc3db6b020bb516ed60e56a3bd07b506537656c7cb3a694058c52f080b16->leave($__internal_a000dc3db6b020bb516ed60e56a3bd07b506537656c7cb3a694058c52f080b16_prof);

        
        $__internal_7d9a9605792fc5d836fe436e583edfa85f413cc39642abf14f0adf02f302ce0e->leave($__internal_7d9a9605792fc5d836fe436e583edfa85f413cc39642abf14f0adf02f302ce0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_986ab631a3d5493c74fdf6c0a60a2c293b4e46111886392827e4109392444e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986ab631a3d5493c74fdf6c0a60a2c293b4e46111886392827e4109392444e80->enter($__internal_986ab631a3d5493c74fdf6c0a60a2c293b4e46111886392827e4109392444e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd1c5d284401ead2fdc61132d583a5c533ab5932432ba022c0de2bfa305eb3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1c5d284401ead2fdc61132d583a5c533ab5932432ba022c0de2bfa305eb3ce->enter($__internal_cd1c5d284401ead2fdc61132d583a5c533ab5932432ba022c0de2bfa305eb3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cd1c5d284401ead2fdc61132d583a5c533ab5932432ba022c0de2bfa305eb3ce->leave($__internal_cd1c5d284401ead2fdc61132d583a5c533ab5932432ba022c0de2bfa305eb3ce_prof);

        
        $__internal_986ab631a3d5493c74fdf6c0a60a2c293b4e46111886392827e4109392444e80->leave($__internal_986ab631a3d5493c74fdf6c0a60a2c293b4e46111886392827e4109392444e80_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f944024959ec9a6f684917811e82d0c58889c4c7a5b4e5893f91e20ddfec16d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f944024959ec9a6f684917811e82d0c58889c4c7a5b4e5893f91e20ddfec16d1->enter($__internal_f944024959ec9a6f684917811e82d0c58889c4c7a5b4e5893f91e20ddfec16d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0a1b48bede814a0446621e876a4506fe8e10bc70ea32bded02040371fcbec75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a1b48bede814a0446621e876a4506fe8e10bc70ea32bded02040371fcbec75->enter($__internal_e0a1b48bede814a0446621e876a4506fe8e10bc70ea32bded02040371fcbec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e0a1b48bede814a0446621e876a4506fe8e10bc70ea32bded02040371fcbec75->leave($__internal_e0a1b48bede814a0446621e876a4506fe8e10bc70ea32bded02040371fcbec75_prof);

        
        $__internal_f944024959ec9a6f684917811e82d0c58889c4c7a5b4e5893f91e20ddfec16d1->leave($__internal_f944024959ec9a6f684917811e82d0c58889c4c7a5b4e5893f91e20ddfec16d1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_101b7345a6bd1aac8c785ee08c9f0bdd7b7ca9b8503ca103d4b199d279152f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101b7345a6bd1aac8c785ee08c9f0bdd7b7ca9b8503ca103d4b199d279152f0f->enter($__internal_101b7345a6bd1aac8c785ee08c9f0bdd7b7ca9b8503ca103d4b199d279152f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57e68322b3e55a0bf932228fc5df562b840a20e4a22d2423db83ef2fafb6e5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e68322b3e55a0bf932228fc5df562b840a20e4a22d2423db83ef2fafb6e5d2->enter($__internal_57e68322b3e55a0bf932228fc5df562b840a20e4a22d2423db83ef2fafb6e5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57e68322b3e55a0bf932228fc5df562b840a20e4a22d2423db83ef2fafb6e5d2->leave($__internal_57e68322b3e55a0bf932228fc5df562b840a20e4a22d2423db83ef2fafb6e5d2_prof);

        
        $__internal_101b7345a6bd1aac8c785ee08c9f0bdd7b7ca9b8503ca103d4b199d279152f0f->leave($__internal_101b7345a6bd1aac8c785ee08c9f0bdd7b7ca9b8503ca103d4b199d279152f0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
