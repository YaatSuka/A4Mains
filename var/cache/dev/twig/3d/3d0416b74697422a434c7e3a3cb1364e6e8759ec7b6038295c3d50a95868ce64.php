<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_0667b8e777734142c31448acbe80a5975181ff36c895e3620e8601484d534337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e3af3b9b746d2122c36f129f272a6f46d4ef09d690eae3763f62ccb0ba7dbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3af3b9b746d2122c36f129f272a6f46d4ef09d690eae3763f62ccb0ba7dbdb->enter($__internal_6e3af3b9b746d2122c36f129f272a6f46d4ef09d690eae3763f62ccb0ba7dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_3fcd9690b5c95445425dbfd6246642027701af2214d491dca4a04280c23edc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcd9690b5c95445425dbfd6246642027701af2214d491dca4a04280c23edc7d->enter($__internal_3fcd9690b5c95445425dbfd6246642027701af2214d491dca4a04280c23edc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6e3af3b9b746d2122c36f129f272a6f46d4ef09d690eae3763f62ccb0ba7dbdb->leave($__internal_6e3af3b9b746d2122c36f129f272a6f46d4ef09d690eae3763f62ccb0ba7dbdb_prof);

        
        $__internal_3fcd9690b5c95445425dbfd6246642027701af2214d491dca4a04280c23edc7d->leave($__internal_3fcd9690b5c95445425dbfd6246642027701af2214d491dca4a04280c23edc7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
