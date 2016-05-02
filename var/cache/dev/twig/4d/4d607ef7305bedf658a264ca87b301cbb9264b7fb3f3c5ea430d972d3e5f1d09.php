<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2855aa36d3a6b83041f0f39ccf5330dcccde38bf8547ef8c929c139746bfbfbc extends Twig_Template
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
        $__internal_482c40b42f9c52de9fe717e0e2a1928851f6ffae284fe197f896603468e5fb88 = $this->env->getExtension("native_profiler");
        $__internal_482c40b42f9c52de9fe717e0e2a1928851f6ffae284fe197f896603468e5fb88->enter($__internal_482c40b42f9c52de9fe717e0e2a1928851f6ffae284fe197f896603468e5fb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_482c40b42f9c52de9fe717e0e2a1928851f6ffae284fe197f896603468e5fb88->leave($__internal_482c40b42f9c52de9fe717e0e2a1928851f6ffae284fe197f896603468e5fb88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
