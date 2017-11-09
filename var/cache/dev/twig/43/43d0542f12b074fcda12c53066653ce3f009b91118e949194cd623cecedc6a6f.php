<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab5718e8ca64c0de722fa4f718eb9151771c555f1a40b3ed650130e81765c2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5718e8ca64c0de722fa4f718eb9151771c555f1a40b3ed650130e81765c2cf->enter($__internal_ab5718e8ca64c0de722fa4f718eb9151771c555f1a40b3ed650130e81765c2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7e1d325c807100fef7511726f58b1a64192a758ec4d5ce5bc5ff68dace11f3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1d325c807100fef7511726f58b1a64192a758ec4d5ce5bc5ff68dace11f3e5->enter($__internal_7e1d325c807100fef7511726f58b1a64192a758ec4d5ce5bc5ff68dace11f3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ab5718e8ca64c0de722fa4f718eb9151771c555f1a40b3ed650130e81765c2cf->leave($__internal_ab5718e8ca64c0de722fa4f718eb9151771c555f1a40b3ed650130e81765c2cf_prof);

        
        $__internal_7e1d325c807100fef7511726f58b1a64192a758ec4d5ce5bc5ff68dace11f3e5->leave($__internal_7e1d325c807100fef7511726f58b1a64192a758ec4d5ce5bc5ff68dace11f3e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fdec731cf89638975495a07123f9d85773dd9636e5222d2777da4f91107ddce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdec731cf89638975495a07123f9d85773dd9636e5222d2777da4f91107ddce->enter($__internal_2fdec731cf89638975495a07123f9d85773dd9636e5222d2777da4f91107ddce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e047b13d89147be1e9b192bdc2c27d3dbdd2e3d9f4b6dcb8427ebb2d2f8eb430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e047b13d89147be1e9b192bdc2c27d3dbdd2e3d9f4b6dcb8427ebb2d2f8eb430->enter($__internal_e047b13d89147be1e9b192bdc2c27d3dbdd2e3d9f4b6dcb8427ebb2d2f8eb430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e047b13d89147be1e9b192bdc2c27d3dbdd2e3d9f4b6dcb8427ebb2d2f8eb430->leave($__internal_e047b13d89147be1e9b192bdc2c27d3dbdd2e3d9f4b6dcb8427ebb2d2f8eb430_prof);

        
        $__internal_2fdec731cf89638975495a07123f9d85773dd9636e5222d2777da4f91107ddce->leave($__internal_2fdec731cf89638975495a07123f9d85773dd9636e5222d2777da4f91107ddce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5f3300fe81b8ad4db1d0c501cd62e72a6c90fb877e3e53878e9ff5a895c79c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f3300fe81b8ad4db1d0c501cd62e72a6c90fb877e3e53878e9ff5a895c79c2->enter($__internal_e5f3300fe81b8ad4db1d0c501cd62e72a6c90fb877e3e53878e9ff5a895c79c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d3d156be9469e64e39cf5190b48ae4d6ec6f35ef703eeaea5f0f0dbb59a5cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3d156be9469e64e39cf5190b48ae4d6ec6f35ef703eeaea5f0f0dbb59a5cf9->enter($__internal_0d3d156be9469e64e39cf5190b48ae4d6ec6f35ef703eeaea5f0f0dbb59a5cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d3d156be9469e64e39cf5190b48ae4d6ec6f35ef703eeaea5f0f0dbb59a5cf9->leave($__internal_0d3d156be9469e64e39cf5190b48ae4d6ec6f35ef703eeaea5f0f0dbb59a5cf9_prof);

        
        $__internal_e5f3300fe81b8ad4db1d0c501cd62e72a6c90fb877e3e53878e9ff5a895c79c2->leave($__internal_e5f3300fe81b8ad4db1d0c501cd62e72a6c90fb877e3e53878e9ff5a895c79c2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2feb9467d1e54852bf46d079480c8611312e717e494ec6bade323e4a162a1d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2feb9467d1e54852bf46d079480c8611312e717e494ec6bade323e4a162a1d8f->enter($__internal_2feb9467d1e54852bf46d079480c8611312e717e494ec6bade323e4a162a1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a121c22c8fa1f85bf0c4725e7ba4ed90ade1060ac7413842db62456fd71d8d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a121c22c8fa1f85bf0c4725e7ba4ed90ade1060ac7413842db62456fd71d8d41->enter($__internal_a121c22c8fa1f85bf0c4725e7ba4ed90ade1060ac7413842db62456fd71d8d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a121c22c8fa1f85bf0c4725e7ba4ed90ade1060ac7413842db62456fd71d8d41->leave($__internal_a121c22c8fa1f85bf0c4725e7ba4ed90ade1060ac7413842db62456fd71d8d41_prof);

        
        $__internal_2feb9467d1e54852bf46d079480c8611312e717e494ec6bade323e4a162a1d8f->leave($__internal_2feb9467d1e54852bf46d079480c8611312e717e494ec6bade323e4a162a1d8f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2af1bb962242e16651274fa4e0717cf478c49ae71981f8ff453d50ff49a72aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2af1bb962242e16651274fa4e0717cf478c49ae71981f8ff453d50ff49a72aa->enter($__internal_c2af1bb962242e16651274fa4e0717cf478c49ae71981f8ff453d50ff49a72aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f61d5e5926de6dd51b7f7bf12fce54b3895d133fa6460a8061f8c5ac7e242c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61d5e5926de6dd51b7f7bf12fce54b3895d133fa6460a8061f8c5ac7e242c6c->enter($__internal_f61d5e5926de6dd51b7f7bf12fce54b3895d133fa6460a8061f8c5ac7e242c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f61d5e5926de6dd51b7f7bf12fce54b3895d133fa6460a8061f8c5ac7e242c6c->leave($__internal_f61d5e5926de6dd51b7f7bf12fce54b3895d133fa6460a8061f8c5ac7e242c6c_prof);

        
        $__internal_c2af1bb962242e16651274fa4e0717cf478c49ae71981f8ff453d50ff49a72aa->leave($__internal_c2af1bb962242e16651274fa4e0717cf478c49ae71981f8ff453d50ff49a72aa_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\app\\Resources\\views\\base.html.twig");
    }
}
