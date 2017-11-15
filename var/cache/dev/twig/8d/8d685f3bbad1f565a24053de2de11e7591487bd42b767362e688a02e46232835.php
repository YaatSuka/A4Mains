<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_815746a82508efd27345a454493b5364446b054465cd40cd80394602bd44dd49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd0933ffc465faded8138a36a8bf3178a0adfd64d2ab45dadc51a6c7ca24b306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0933ffc465faded8138a36a8bf3178a0adfd64d2ab45dadc51a6c7ca24b306->enter($__internal_cd0933ffc465faded8138a36a8bf3178a0adfd64d2ab45dadc51a6c7ca24b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_8831c94bfa7fbb7bcd052d0df13c8bee5146094256d85b372e4ec65cb60bf69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8831c94bfa7fbb7bcd052d0df13c8bee5146094256d85b372e4ec65cb60bf69d->enter($__internal_8831c94bfa7fbb7bcd052d0df13c8bee5146094256d85b372e4ec65cb60bf69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cd0933ffc465faded8138a36a8bf3178a0adfd64d2ab45dadc51a6c7ca24b306->leave($__internal_cd0933ffc465faded8138a36a8bf3178a0adfd64d2ab45dadc51a6c7ca24b306_prof);

        
        $__internal_8831c94bfa7fbb7bcd052d0df13c8bee5146094256d85b372e4ec65cb60bf69d->leave($__internal_8831c94bfa7fbb7bcd052d0df13c8bee5146094256d85b372e4ec65cb60bf69d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ca90d72ab449dd7e8f4a2a7357e771f5808b2967a670b88db1b9c8bb747bef06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca90d72ab449dd7e8f4a2a7357e771f5808b2967a670b88db1b9c8bb747bef06->enter($__internal_ca90d72ab449dd7e8f4a2a7357e771f5808b2967a670b88db1b9c8bb747bef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3d3caeb810463daf6c519188d75602e2c340db0013606e77376199bb1edbb1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3caeb810463daf6c519188d75602e2c340db0013606e77376199bb1edbb1bc->enter($__internal_3d3caeb810463daf6c519188d75602e2c340db0013606e77376199bb1edbb1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_3d3caeb810463daf6c519188d75602e2c340db0013606e77376199bb1edbb1bc->leave($__internal_3d3caeb810463daf6c519188d75602e2c340db0013606e77376199bb1edbb1bc_prof);

        
        $__internal_ca90d72ab449dd7e8f4a2a7357e771f5808b2967a670b88db1b9c8bb747bef06->leave($__internal_ca90d72ab449dd7e8f4a2a7357e771f5808b2967a670b88db1b9c8bb747bef06_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_87e520607d6b7d4ccb0deb64d559ad642e6f70cc355e52b3858c79ad33136814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e520607d6b7d4ccb0deb64d559ad642e6f70cc355e52b3858c79ad33136814->enter($__internal_87e520607d6b7d4ccb0deb64d559ad642e6f70cc355e52b3858c79ad33136814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1895abe311bd35e62eb3f36b115ccda6870d84727f4885b90e701a626469c53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1895abe311bd35e62eb3f36b115ccda6870d84727f4885b90e701a626469c53b->enter($__internal_1895abe311bd35e62eb3f36b115ccda6870d84727f4885b90e701a626469c53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_1895abe311bd35e62eb3f36b115ccda6870d84727f4885b90e701a626469c53b->leave($__internal_1895abe311bd35e62eb3f36b115ccda6870d84727f4885b90e701a626469c53b_prof);

        
        $__internal_87e520607d6b7d4ccb0deb64d559ad642e6f70cc355e52b3858c79ad33136814->leave($__internal_87e520607d6b7d4ccb0deb64d559ad642e6f70cc355e52b3858c79ad33136814_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_650052a22b82ae1b7fa3d2a489c5d29155546adf7876be349dee2a5f2e528ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650052a22b82ae1b7fa3d2a489c5d29155546adf7876be349dee2a5f2e528ef8->enter($__internal_650052a22b82ae1b7fa3d2a489c5d29155546adf7876be349dee2a5f2e528ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d05ab37d1eee457eb0aeae6a70fb385a53c79b4b4598bdcb2d7a716b8c2af179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05ab37d1eee457eb0aeae6a70fb385a53c79b4b4598bdcb2d7a716b8c2af179->enter($__internal_d05ab37d1eee457eb0aeae6a70fb385a53c79b4b4598bdcb2d7a716b8c2af179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d05ab37d1eee457eb0aeae6a70fb385a53c79b4b4598bdcb2d7a716b8c2af179->leave($__internal_d05ab37d1eee457eb0aeae6a70fb385a53c79b4b4598bdcb2d7a716b8c2af179_prof);

        
        $__internal_650052a22b82ae1b7fa3d2a489c5d29155546adf7876be349dee2a5f2e528ef8->leave($__internal_650052a22b82ae1b7fa3d2a489c5d29155546adf7876be349dee2a5f2e528ef8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
