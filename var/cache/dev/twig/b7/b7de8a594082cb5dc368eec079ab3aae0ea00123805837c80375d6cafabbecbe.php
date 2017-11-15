<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_fe9760c880c91bf1b400657b7dfef5eeb3f6ee5ed27b152544cad8585f249594 extends Twig_Template
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
        $__internal_7475476664a7f8bacf65fc6a05b8633fcd0a106960a18d00e4a01a1b59b464ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7475476664a7f8bacf65fc6a05b8633fcd0a106960a18d00e4a01a1b59b464ba->enter($__internal_7475476664a7f8bacf65fc6a05b8633fcd0a106960a18d00e4a01a1b59b464ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_854309e9045fd1a8bb87a29ea67f43e110ace8d5c4bd836ea0d855204c435076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854309e9045fd1a8bb87a29ea67f43e110ace8d5c4bd836ea0d855204c435076->enter($__internal_854309e9045fd1a8bb87a29ea67f43e110ace8d5c4bd836ea0d855204c435076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_7475476664a7f8bacf65fc6a05b8633fcd0a106960a18d00e4a01a1b59b464ba->leave($__internal_7475476664a7f8bacf65fc6a05b8633fcd0a106960a18d00e4a01a1b59b464ba_prof);

        
        $__internal_854309e9045fd1a8bb87a29ea67f43e110ace8d5c4bd836ea0d855204c435076->leave($__internal_854309e9045fd1a8bb87a29ea67f43e110ace8d5c4bd836ea0d855204c435076_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8638c704e3b1b2283d3c9ea413fd2245e9ce985ce8599b1f8816afaf9565282b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8638c704e3b1b2283d3c9ea413fd2245e9ce985ce8599b1f8816afaf9565282b->enter($__internal_8638c704e3b1b2283d3c9ea413fd2245e9ce985ce8599b1f8816afaf9565282b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42b82e5906807d60ffc83fbc51d6fc04189be9853a4145d2cff4b2b3f9655b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b82e5906807d60ffc83fbc51d6fc04189be9853a4145d2cff4b2b3f9655b62->enter($__internal_42b82e5906807d60ffc83fbc51d6fc04189be9853a4145d2cff4b2b3f9655b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_42b82e5906807d60ffc83fbc51d6fc04189be9853a4145d2cff4b2b3f9655b62->leave($__internal_42b82e5906807d60ffc83fbc51d6fc04189be9853a4145d2cff4b2b3f9655b62_prof);

        
        $__internal_8638c704e3b1b2283d3c9ea413fd2245e9ce985ce8599b1f8816afaf9565282b->leave($__internal_8638c704e3b1b2283d3c9ea413fd2245e9ce985ce8599b1f8816afaf9565282b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dce57e3c5e1848991dc994866d3e5795cd10e35260662fa20b42ba9012ba78ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce57e3c5e1848991dc994866d3e5795cd10e35260662fa20b42ba9012ba78ca->enter($__internal_dce57e3c5e1848991dc994866d3e5795cd10e35260662fa20b42ba9012ba78ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a49dcdb3162fb57b261f1d7d838529428361015ec4cfae00d4bad9d4d961f9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49dcdb3162fb57b261f1d7d838529428361015ec4cfae00d4bad9d4d961f9ae->enter($__internal_a49dcdb3162fb57b261f1d7d838529428361015ec4cfae00d4bad9d4d961f9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a49dcdb3162fb57b261f1d7d838529428361015ec4cfae00d4bad9d4d961f9ae->leave($__internal_a49dcdb3162fb57b261f1d7d838529428361015ec4cfae00d4bad9d4d961f9ae_prof);

        
        $__internal_dce57e3c5e1848991dc994866d3e5795cd10e35260662fa20b42ba9012ba78ca->leave($__internal_dce57e3c5e1848991dc994866d3e5795cd10e35260662fa20b42ba9012ba78ca_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa4d3e695348ec7459ac772a9154d8390d9a2ce9e7f65c8ff7c0edf6eb792ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa4d3e695348ec7459ac772a9154d8390d9a2ce9e7f65c8ff7c0edf6eb792ce->enter($__internal_8aa4d3e695348ec7459ac772a9154d8390d9a2ce9e7f65c8ff7c0edf6eb792ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8abe6f92d94ff30f4ed30b66ed79d489c65e532c680e530ce11de8cdea214647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abe6f92d94ff30f4ed30b66ed79d489c65e532c680e530ce11de8cdea214647->enter($__internal_8abe6f92d94ff30f4ed30b66ed79d489c65e532c680e530ce11de8cdea214647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8abe6f92d94ff30f4ed30b66ed79d489c65e532c680e530ce11de8cdea214647->leave($__internal_8abe6f92d94ff30f4ed30b66ed79d489c65e532c680e530ce11de8cdea214647_prof);

        
        $__internal_8aa4d3e695348ec7459ac772a9154d8390d9a2ce9e7f65c8ff7c0edf6eb792ce->leave($__internal_8aa4d3e695348ec7459ac772a9154d8390d9a2ce9e7f65c8ff7c0edf6eb792ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
