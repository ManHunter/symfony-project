<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_738068aae524e2c8584409d0a8cc3d1ef94e9c9b7c9a1281ffa8aec860dea234 extends Twig_Template
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
        $__internal_2f7b5cea68587e4a2ee26542e288e8c165841bcc3a1f178326e075197b0d5d2b = $this->env->getExtension("native_profiler");
        $__internal_2f7b5cea68587e4a2ee26542e288e8c165841bcc3a1f178326e075197b0d5d2b->enter($__internal_2f7b5cea68587e4a2ee26542e288e8c165841bcc3a1f178326e075197b0d5d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f7b5cea68587e4a2ee26542e288e8c165841bcc3a1f178326e075197b0d5d2b->leave($__internal_2f7b5cea68587e4a2ee26542e288e8c165841bcc3a1f178326e075197b0d5d2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
