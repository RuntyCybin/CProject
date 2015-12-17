<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb58deac9c139c31704b385d0905b5bf31e53493992e515252e88508e4f7b769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2a7085513da39c178102d1e281772e37c5a77a1d8baa408cdf07556d33ca64c = $this->env->getExtension("native_profiler");
        $__internal_d2a7085513da39c178102d1e281772e37c5a77a1d8baa408cdf07556d33ca64c->enter($__internal_d2a7085513da39c178102d1e281772e37c5a77a1d8baa408cdf07556d33ca64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a7085513da39c178102d1e281772e37c5a77a1d8baa408cdf07556d33ca64c->leave($__internal_d2a7085513da39c178102d1e281772e37c5a77a1d8baa408cdf07556d33ca64c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_578313f0baa42c7dff936bd651bea7bb1cad49153a82a3716f86786110515434 = $this->env->getExtension("native_profiler");
        $__internal_578313f0baa42c7dff936bd651bea7bb1cad49153a82a3716f86786110515434->enter($__internal_578313f0baa42c7dff936bd651bea7bb1cad49153a82a3716f86786110515434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_578313f0baa42c7dff936bd651bea7bb1cad49153a82a3716f86786110515434->leave($__internal_578313f0baa42c7dff936bd651bea7bb1cad49153a82a3716f86786110515434_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54acae8fdde1f8c5c0efd102b5ff3bfd98dd17e6e061ec5b1d066eae8b9f52f3 = $this->env->getExtension("native_profiler");
        $__internal_54acae8fdde1f8c5c0efd102b5ff3bfd98dd17e6e061ec5b1d066eae8b9f52f3->enter($__internal_54acae8fdde1f8c5c0efd102b5ff3bfd98dd17e6e061ec5b1d066eae8b9f52f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54acae8fdde1f8c5c0efd102b5ff3bfd98dd17e6e061ec5b1d066eae8b9f52f3->leave($__internal_54acae8fdde1f8c5c0efd102b5ff3bfd98dd17e6e061ec5b1d066eae8b9f52f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c250472adbe17be4c9af192485d2992831c88d12979e0f6d01c4ed712979d44e = $this->env->getExtension("native_profiler");
        $__internal_c250472adbe17be4c9af192485d2992831c88d12979e0f6d01c4ed712979d44e->enter($__internal_c250472adbe17be4c9af192485d2992831c88d12979e0f6d01c4ed712979d44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c250472adbe17be4c9af192485d2992831c88d12979e0f6d01c4ed712979d44e->leave($__internal_c250472adbe17be4c9af192485d2992831c88d12979e0f6d01c4ed712979d44e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
