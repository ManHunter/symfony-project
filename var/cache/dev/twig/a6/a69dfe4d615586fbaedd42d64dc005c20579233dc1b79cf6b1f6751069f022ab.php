<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b7d2adf6733646cc5b7f024a8c74fea8b5aad6277850d707c6f999f2c2e4742b extends Twig_Template
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
        $__internal_f8d18a2f6bf9642271e2d8c7e7dbadddbaa7f2d3c68867f9d42e891b5f99427b = $this->env->getExtension("native_profiler");
        $__internal_f8d18a2f6bf9642271e2d8c7e7dbadddbaa7f2d3c68867f9d42e891b5f99427b->enter($__internal_f8d18a2f6bf9642271e2d8c7e7dbadddbaa7f2d3c68867f9d42e891b5f99427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f8d18a2f6bf9642271e2d8c7e7dbadddbaa7f2d3c68867f9d42e891b5f99427b->leave($__internal_f8d18a2f6bf9642271e2d8c7e7dbadddbaa7f2d3c68867f9d42e891b5f99427b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
