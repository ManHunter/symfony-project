<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_67644998e405af7d8b7b982030ca77a45daf35e76650abfe0e7d0da6e513fa25 extends Twig_Template
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
        $__internal_d810846fc3a67c3e6c6aa5b4ba106f7f282c9c0a419276034c77bb062c70e7f9 = $this->env->getExtension("native_profiler");
        $__internal_d810846fc3a67c3e6c6aa5b4ba106f7f282c9c0a419276034c77bb062c70e7f9->enter($__internal_d810846fc3a67c3e6c6aa5b4ba106f7f282c9c0a419276034c77bb062c70e7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d810846fc3a67c3e6c6aa5b4ba106f7f282c9c0a419276034c77bb062c70e7f9->leave($__internal_d810846fc3a67c3e6c6aa5b4ba106f7f282c9c0a419276034c77bb062c70e7f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
