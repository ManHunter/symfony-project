<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_02922c90b9479d3cbc7f370329784ee9be4a79f7762d04bc2149da00bf148893 extends Twig_Template
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
        $__internal_cf061c21cf8bd29e8f6ca91fd858440688069a351f13c7d4be1de8ba3b6fead7 = $this->env->getExtension("native_profiler");
        $__internal_cf061c21cf8bd29e8f6ca91fd858440688069a351f13c7d4be1de8ba3b6fead7->enter($__internal_cf061c21cf8bd29e8f6ca91fd858440688069a351f13c7d4be1de8ba3b6fead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_cf061c21cf8bd29e8f6ca91fd858440688069a351f13c7d4be1de8ba3b6fead7->leave($__internal_cf061c21cf8bd29e8f6ca91fd858440688069a351f13c7d4be1de8ba3b6fead7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
