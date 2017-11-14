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
        $__internal_e8ebc485ed01f22b9741984360965fe6450c42d390d9a1de21209d884da894eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ebc485ed01f22b9741984360965fe6450c42d390d9a1de21209d884da894eb->enter($__internal_e8ebc485ed01f22b9741984360965fe6450c42d390d9a1de21209d884da894eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_10a9c4046c35bab6a07304b1a5ac012d9fe1371dc91dc56c8e883d5161d72e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a9c4046c35bab6a07304b1a5ac012d9fe1371dc91dc56c8e883d5161d72e28->enter($__internal_10a9c4046c35bab6a07304b1a5ac012d9fe1371dc91dc56c8e883d5161d72e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e8ebc485ed01f22b9741984360965fe6450c42d390d9a1de21209d884da894eb->leave($__internal_e8ebc485ed01f22b9741984360965fe6450c42d390d9a1de21209d884da894eb_prof);

        
        $__internal_10a9c4046c35bab6a07304b1a5ac012d9fe1371dc91dc56c8e883d5161d72e28->leave($__internal_10a9c4046c35bab6a07304b1a5ac012d9fe1371dc91dc56c8e883d5161d72e28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17c3b2d330b04d555c747558fea32d8f253463aab948da2fefbce340ec21246c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c3b2d330b04d555c747558fea32d8f253463aab948da2fefbce340ec21246c->enter($__internal_17c3b2d330b04d555c747558fea32d8f253463aab948da2fefbce340ec21246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6c15c220e2bc383449f459d0bed37b5d3da247e45df637afff2feb8bd5e5ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c15c220e2bc383449f459d0bed37b5d3da247e45df637afff2feb8bd5e5ead->enter($__internal_f6c15c220e2bc383449f459d0bed37b5d3da247e45df637afff2feb8bd5e5ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f6c15c220e2bc383449f459d0bed37b5d3da247e45df637afff2feb8bd5e5ead->leave($__internal_f6c15c220e2bc383449f459d0bed37b5d3da247e45df637afff2feb8bd5e5ead_prof);

        
        $__internal_17c3b2d330b04d555c747558fea32d8f253463aab948da2fefbce340ec21246c->leave($__internal_17c3b2d330b04d555c747558fea32d8f253463aab948da2fefbce340ec21246c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_58c6561532df6ea84e855cd0f0266cf80f79ba89f99bb7cc66f9ed6d0449769c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c6561532df6ea84e855cd0f0266cf80f79ba89f99bb7cc66f9ed6d0449769c->enter($__internal_58c6561532df6ea84e855cd0f0266cf80f79ba89f99bb7cc66f9ed6d0449769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97ff396616c85b8ac7567ab0650476ca2d559ff35a484ec0b8bb5374c6aed42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff396616c85b8ac7567ab0650476ca2d559ff35a484ec0b8bb5374c6aed42c->enter($__internal_97ff396616c85b8ac7567ab0650476ca2d559ff35a484ec0b8bb5374c6aed42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_97ff396616c85b8ac7567ab0650476ca2d559ff35a484ec0b8bb5374c6aed42c->leave($__internal_97ff396616c85b8ac7567ab0650476ca2d559ff35a484ec0b8bb5374c6aed42c_prof);

        
        $__internal_58c6561532df6ea84e855cd0f0266cf80f79ba89f99bb7cc66f9ed6d0449769c->leave($__internal_58c6561532df6ea84e855cd0f0266cf80f79ba89f99bb7cc66f9ed6d0449769c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2dd87941739967ad1ccf473bdc192d1211ec13e6bb58ccb48240a38b113faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2dd87941739967ad1ccf473bdc192d1211ec13e6bb58ccb48240a38b113faa->enter($__internal_3a2dd87941739967ad1ccf473bdc192d1211ec13e6bb58ccb48240a38b113faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a642279ae5182d3a1cf964cc37bf2e4c94367f4ea1acd56f3dde5856745e00cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a642279ae5182d3a1cf964cc37bf2e4c94367f4ea1acd56f3dde5856745e00cc->enter($__internal_a642279ae5182d3a1cf964cc37bf2e4c94367f4ea1acd56f3dde5856745e00cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a642279ae5182d3a1cf964cc37bf2e4c94367f4ea1acd56f3dde5856745e00cc->leave($__internal_a642279ae5182d3a1cf964cc37bf2e4c94367f4ea1acd56f3dde5856745e00cc_prof);

        
        $__internal_3a2dd87941739967ad1ccf473bdc192d1211ec13e6bb58ccb48240a38b113faa->leave($__internal_3a2dd87941739967ad1ccf473bdc192d1211ec13e6bb58ccb48240a38b113faa_prof);

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
