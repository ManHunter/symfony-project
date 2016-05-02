<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bee53b8d7bdbb2f30b9ade7b5e4d5a9853a4d64a4158631a86f56715dd5d3c68 extends Twig_Template
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
        $__internal_4a32a7585dd31fdf91df7518a1732604d964bfcf0a6ceea3ee7349f1e4b6d15c = $this->env->getExtension("native_profiler");
        $__internal_4a32a7585dd31fdf91df7518a1732604d964bfcf0a6ceea3ee7349f1e4b6d15c->enter($__internal_4a32a7585dd31fdf91df7518a1732604d964bfcf0a6ceea3ee7349f1e4b6d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_4a32a7585dd31fdf91df7518a1732604d964bfcf0a6ceea3ee7349f1e4b6d15c->leave($__internal_4a32a7585dd31fdf91df7518a1732604d964bfcf0a6ceea3ee7349f1e4b6d15c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
