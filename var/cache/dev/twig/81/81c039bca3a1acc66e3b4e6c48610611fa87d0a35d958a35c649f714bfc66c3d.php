<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dedfeb64686122285e92c8e289d21bee2008b0a0da07491db070b94a2041dfac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1dab1910e188039f29d98e839fcc1e0490497de3fcf4cc3377040c21e8a3702b = $this->env->getExtension("native_profiler");
        $__internal_1dab1910e188039f29d98e839fcc1e0490497de3fcf4cc3377040c21e8a3702b->enter($__internal_1dab1910e188039f29d98e839fcc1e0490497de3fcf4cc3377040c21e8a3702b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dab1910e188039f29d98e839fcc1e0490497de3fcf4cc3377040c21e8a3702b->leave($__internal_1dab1910e188039f29d98e839fcc1e0490497de3fcf4cc3377040c21e8a3702b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdce6026411e0860c881dcc5f8b5997e7529bd9e5ef6300e234244fbd54fbe73 = $this->env->getExtension("native_profiler");
        $__internal_fdce6026411e0860c881dcc5f8b5997e7529bd9e5ef6300e234244fbd54fbe73->enter($__internal_fdce6026411e0860c881dcc5f8b5997e7529bd9e5ef6300e234244fbd54fbe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fdce6026411e0860c881dcc5f8b5997e7529bd9e5ef6300e234244fbd54fbe73->leave($__internal_fdce6026411e0860c881dcc5f8b5997e7529bd9e5ef6300e234244fbd54fbe73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eda3049cabd48a16fdb2a84c61fc751e624ff60eb152af92c6646f299e01bc6 = $this->env->getExtension("native_profiler");
        $__internal_9eda3049cabd48a16fdb2a84c61fc751e624ff60eb152af92c6646f299e01bc6->enter($__internal_9eda3049cabd48a16fdb2a84c61fc751e624ff60eb152af92c6646f299e01bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9eda3049cabd48a16fdb2a84c61fc751e624ff60eb152af92c6646f299e01bc6->leave($__internal_9eda3049cabd48a16fdb2a84c61fc751e624ff60eb152af92c6646f299e01bc6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
