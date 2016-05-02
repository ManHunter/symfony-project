<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_da9c7d5daa8937e4956600a532123d4ed845f2d073b297840f20449345f17ea9 extends Twig_Template
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
        $__internal_d2cf5b1e321a88ca57834c0766c0248e197d1b9d6e6bc3ba1b921256f1e38e4f = $this->env->getExtension("native_profiler");
        $__internal_d2cf5b1e321a88ca57834c0766c0248e197d1b9d6e6bc3ba1b921256f1e38e4f->enter($__internal_d2cf5b1e321a88ca57834c0766c0248e197d1b9d6e6bc3ba1b921256f1e38e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d2cf5b1e321a88ca57834c0766c0248e197d1b9d6e6bc3ba1b921256f1e38e4f->leave($__internal_d2cf5b1e321a88ca57834c0766c0248e197d1b9d6e6bc3ba1b921256f1e38e4f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
