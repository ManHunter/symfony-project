<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9b5dbdfa948a0f695362a93c644a336336d9847d7977546f504b04f0ab268571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_50ff464604722a2ecb702ccfb974e4e64edfd5fa7ece2b2530eea86d70e97982 = $this->env->getExtension("native_profiler");
        $__internal_50ff464604722a2ecb702ccfb974e4e64edfd5fa7ece2b2530eea86d70e97982->enter($__internal_50ff464604722a2ecb702ccfb974e4e64edfd5fa7ece2b2530eea86d70e97982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ff464604722a2ecb702ccfb974e4e64edfd5fa7ece2b2530eea86d70e97982->leave($__internal_50ff464604722a2ecb702ccfb974e4e64edfd5fa7ece2b2530eea86d70e97982_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d54f09a00ec0b955c6bb605c1fb40844fe8f083500681907bfec53757644b5ec = $this->env->getExtension("native_profiler");
        $__internal_d54f09a00ec0b955c6bb605c1fb40844fe8f083500681907bfec53757644b5ec->enter($__internal_d54f09a00ec0b955c6bb605c1fb40844fe8f083500681907bfec53757644b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d54f09a00ec0b955c6bb605c1fb40844fe8f083500681907bfec53757644b5ec->leave($__internal_d54f09a00ec0b955c6bb605c1fb40844fe8f083500681907bfec53757644b5ec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f636784cdedb84b68fa149d0335bb0fc89fce012546e74fa31e0e3812b6c149d = $this->env->getExtension("native_profiler");
        $__internal_f636784cdedb84b68fa149d0335bb0fc89fce012546e74fa31e0e3812b6c149d->enter($__internal_f636784cdedb84b68fa149d0335bb0fc89fce012546e74fa31e0e3812b6c149d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f636784cdedb84b68fa149d0335bb0fc89fce012546e74fa31e0e3812b6c149d->leave($__internal_f636784cdedb84b68fa149d0335bb0fc89fce012546e74fa31e0e3812b6c149d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e757aae31f75dcab4fc6cd622b5bea96a0c9e46bf01661405607307d264a49cf = $this->env->getExtension("native_profiler");
        $__internal_e757aae31f75dcab4fc6cd622b5bea96a0c9e46bf01661405607307d264a49cf->enter($__internal_e757aae31f75dcab4fc6cd622b5bea96a0c9e46bf01661405607307d264a49cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e757aae31f75dcab4fc6cd622b5bea96a0c9e46bf01661405607307d264a49cf->leave($__internal_e757aae31f75dcab4fc6cd622b5bea96a0c9e46bf01661405607307d264a49cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
