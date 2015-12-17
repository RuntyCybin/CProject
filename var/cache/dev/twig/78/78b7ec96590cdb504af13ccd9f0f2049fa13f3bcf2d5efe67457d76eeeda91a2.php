<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b485d02f35786d2f81a591a08a9e0d338688cc6a633d70061e7691f9b481112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab2ef23795ac9abf985386552f673918ae442d42622932d0b83b5c0b748cc34c = $this->env->getExtension("native_profiler");
        $__internal_ab2ef23795ac9abf985386552f673918ae442d42622932d0b83b5c0b748cc34c->enter($__internal_ab2ef23795ac9abf985386552f673918ae442d42622932d0b83b5c0b748cc34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab2ef23795ac9abf985386552f673918ae442d42622932d0b83b5c0b748cc34c->leave($__internal_ab2ef23795ac9abf985386552f673918ae442d42622932d0b83b5c0b748cc34c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41cc80953121dec342b758f6836f04b4405b7ed50e282c7f02e0572dcac4be52 = $this->env->getExtension("native_profiler");
        $__internal_41cc80953121dec342b758f6836f04b4405b7ed50e282c7f02e0572dcac4be52->enter($__internal_41cc80953121dec342b758f6836f04b4405b7ed50e282c7f02e0572dcac4be52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41cc80953121dec342b758f6836f04b4405b7ed50e282c7f02e0572dcac4be52->leave($__internal_41cc80953121dec342b758f6836f04b4405b7ed50e282c7f02e0572dcac4be52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_baa4bd983598674f2bcd43ffa524ab08a08bed29de4da364763977e36faf9e0e = $this->env->getExtension("native_profiler");
        $__internal_baa4bd983598674f2bcd43ffa524ab08a08bed29de4da364763977e36faf9e0e->enter($__internal_baa4bd983598674f2bcd43ffa524ab08a08bed29de4da364763977e36faf9e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_baa4bd983598674f2bcd43ffa524ab08a08bed29de4da364763977e36faf9e0e->leave($__internal_baa4bd983598674f2bcd43ffa524ab08a08bed29de4da364763977e36faf9e0e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc884d3da899e310b614c6c37b551cbb13b398aeb3c075a40ab222f717bf779d = $this->env->getExtension("native_profiler");
        $__internal_bc884d3da899e310b614c6c37b551cbb13b398aeb3c075a40ab222f717bf779d->enter($__internal_bc884d3da899e310b614c6c37b551cbb13b398aeb3c075a40ab222f717bf779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc884d3da899e310b614c6c37b551cbb13b398aeb3c075a40ab222f717bf779d->leave($__internal_bc884d3da899e310b614c6c37b551cbb13b398aeb3c075a40ab222f717bf779d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
