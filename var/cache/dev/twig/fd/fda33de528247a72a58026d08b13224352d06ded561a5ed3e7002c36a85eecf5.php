<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b55cb6884316a0cc37865cc29090f44099e2303113a8ad9918111c79f4bfe702 extends Twig_Template
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
        $__internal_9c034b8e4afb6a05a09fb9a94cadc06ae4f9765ea6ff685b6dd3c703722fa813 = $this->env->getExtension("native_profiler");
        $__internal_9c034b8e4afb6a05a09fb9a94cadc06ae4f9765ea6ff685b6dd3c703722fa813->enter($__internal_9c034b8e4afb6a05a09fb9a94cadc06ae4f9765ea6ff685b6dd3c703722fa813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9c034b8e4afb6a05a09fb9a94cadc06ae4f9765ea6ff685b6dd3c703722fa813->leave($__internal_9c034b8e4afb6a05a09fb9a94cadc06ae4f9765ea6ff685b6dd3c703722fa813_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
