<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c53be753b27148c3092f362f12f28f2a16953f9aae5ae1a304ec93b7d6b87f16 extends Twig_Template
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
        $__internal_356c3bb3ab5e14ecbf65e30a87d40e8cde29fe8b6235486caa067eb4db288b49 = $this->env->getExtension("native_profiler");
        $__internal_356c3bb3ab5e14ecbf65e30a87d40e8cde29fe8b6235486caa067eb4db288b49->enter($__internal_356c3bb3ab5e14ecbf65e30a87d40e8cde29fe8b6235486caa067eb4db288b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_356c3bb3ab5e14ecbf65e30a87d40e8cde29fe8b6235486caa067eb4db288b49->leave($__internal_356c3bb3ab5e14ecbf65e30a87d40e8cde29fe8b6235486caa067eb4db288b49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
