<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_52836461bc1fa8563758463dacc84355b36459a465439e6dfb9458ded3f213d5 extends Twig_Template
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
        $__internal_a0b93d3d955dec62c41cfd4dabe28b36b1a0f0c8ee46f247f4c1b40a626aeb27 = $this->env->getExtension("native_profiler");
        $__internal_a0b93d3d955dec62c41cfd4dabe28b36b1a0f0c8ee46f247f4c1b40a626aeb27->enter($__internal_a0b93d3d955dec62c41cfd4dabe28b36b1a0f0c8ee46f247f4c1b40a626aeb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if (twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText(twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_a0b93d3d955dec62c41cfd4dabe28b36b1a0f0c8ee46f247f4c1b40a626aeb27->leave($__internal_a0b93d3d955dec62c41cfd4dabe28b36b1a0f0c8ee46f247f4c1b40a626aeb27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if trace.function %}*/
/*     at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})*/
/* {% else %}*/
/*     at n/a*/
/* {% endif %}*/
/* {% if trace.file is defined and trace.line is defined %}*/
/*         in {{ trace.file }} line {{ trace.line }}*/
/* {% endif %}*/
/* */
