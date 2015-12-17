<?php

/* base.html.twig */
class __TwigTemplate_c55f1488aa0ab683344f60a93fa8698ed2d83fbaa144c9f2e3d801cf569e468a extends Twig_Template
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
        $__internal_a83cffdd740e390d3e0f00d901891c359881e7c390c833a2fe92169d78d00bd0 = $this->env->getExtension("native_profiler");
        $__internal_a83cffdd740e390d3e0f00d901891c359881e7c390c833a2fe92169d78d00bd0->enter($__internal_a83cffdd740e390d3e0f00d901891c359881e7c390c833a2fe92169d78d00bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_a83cffdd740e390d3e0f00d901891c359881e7c390c833a2fe92169d78d00bd0->leave($__internal_a83cffdd740e390d3e0f00d901891c359881e7c390c833a2fe92169d78d00bd0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd55e05b1fe6acfd0a0fa7d372b5ef2a919e391b41d4502ed71f3b84531658a1 = $this->env->getExtension("native_profiler");
        $__internal_dd55e05b1fe6acfd0a0fa7d372b5ef2a919e391b41d4502ed71f3b84531658a1->enter($__internal_dd55e05b1fe6acfd0a0fa7d372b5ef2a919e391b41d4502ed71f3b84531658a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd55e05b1fe6acfd0a0fa7d372b5ef2a919e391b41d4502ed71f3b84531658a1->leave($__internal_dd55e05b1fe6acfd0a0fa7d372b5ef2a919e391b41d4502ed71f3b84531658a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_237ace8905f0aa5ff383c3fdb27997ac4b05bf9ea4210a56d0b0f80c8d782354 = $this->env->getExtension("native_profiler");
        $__internal_237ace8905f0aa5ff383c3fdb27997ac4b05bf9ea4210a56d0b0f80c8d782354->enter($__internal_237ace8905f0aa5ff383c3fdb27997ac4b05bf9ea4210a56d0b0f80c8d782354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_237ace8905f0aa5ff383c3fdb27997ac4b05bf9ea4210a56d0b0f80c8d782354->leave($__internal_237ace8905f0aa5ff383c3fdb27997ac4b05bf9ea4210a56d0b0f80c8d782354_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f2639167e1ec01eee87ca436225ac464ed3729f57716a96730ea7fe73f1dd6b = $this->env->getExtension("native_profiler");
        $__internal_4f2639167e1ec01eee87ca436225ac464ed3729f57716a96730ea7fe73f1dd6b->enter($__internal_4f2639167e1ec01eee87ca436225ac464ed3729f57716a96730ea7fe73f1dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f2639167e1ec01eee87ca436225ac464ed3729f57716a96730ea7fe73f1dd6b->leave($__internal_4f2639167e1ec01eee87ca436225ac464ed3729f57716a96730ea7fe73f1dd6b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a58689938dc98a5c66ef96b2c50988c1eed33506026d694b49496ad307da5c96 = $this->env->getExtension("native_profiler");
        $__internal_a58689938dc98a5c66ef96b2c50988c1eed33506026d694b49496ad307da5c96->enter($__internal_a58689938dc98a5c66ef96b2c50988c1eed33506026d694b49496ad307da5c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a58689938dc98a5c66ef96b2c50988c1eed33506026d694b49496ad307da5c96->leave($__internal_a58689938dc98a5c66ef96b2c50988c1eed33506026d694b49496ad307da5c96_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
