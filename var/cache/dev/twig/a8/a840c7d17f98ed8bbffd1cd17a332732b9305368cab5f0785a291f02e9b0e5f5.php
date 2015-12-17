<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f6f8747d2724a4495d7ba341ba376ae888affbd41022070dc372eae4eb80b9d8 extends Twig_Template
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
        $__internal_6e7f518bd2ad1b7be2daedabdffc30a2ae124e0a8aae963cb7512f8bae126d72 = $this->env->getExtension("native_profiler");
        $__internal_6e7f518bd2ad1b7be2daedabdffc30a2ae124e0a8aae963cb7512f8bae126d72->enter($__internal_6e7f518bd2ad1b7be2daedabdffc30a2ae124e0a8aae963cb7512f8bae126d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6e7f518bd2ad1b7be2daedabdffc30a2ae124e0a8aae963cb7512f8bae126d72->leave($__internal_6e7f518bd2ad1b7be2daedabdffc30a2ae124e0a8aae963cb7512f8bae126d72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
