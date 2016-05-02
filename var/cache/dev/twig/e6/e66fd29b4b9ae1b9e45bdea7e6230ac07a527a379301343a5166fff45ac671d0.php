<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_6fea142f1b9ab95d52b01759b579e0f1e7865b9382ee11e9751d4be45d1e46f1 extends Twig_Template
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
        $__internal_9d80aecc6c0e3eb4bbf2118af7f118a38cf4bda41078778b52fc11bb0e940ed3 = $this->env->getExtension("native_profiler");
        $__internal_9d80aecc6c0e3eb4bbf2118af7f118a38cf4bda41078778b52fc11bb0e940ed3->enter($__internal_9d80aecc6c0e3eb4bbf2118af7f118a38cf4bda41078778b52fc11bb0e940ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9d80aecc6c0e3eb4bbf2118af7f118a38cf4bda41078778b52fc11bb0e940ed3->leave($__internal_9d80aecc6c0e3eb4bbf2118af7f118a38cf4bda41078778b52fc11bb0e940ed3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
