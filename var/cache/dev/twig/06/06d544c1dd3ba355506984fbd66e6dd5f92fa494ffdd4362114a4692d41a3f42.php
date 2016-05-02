<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4b064337e4e9c208dabc0baaea64c2314e5e6485b4965a80b588037f3aee80a6 extends Twig_Template
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
        $__internal_501b21a5ceec364d2ce2cdda65ba99a62a315dfce6102cf6d75080a2af9ae0eb = $this->env->getExtension("native_profiler");
        $__internal_501b21a5ceec364d2ce2cdda65ba99a62a315dfce6102cf6d75080a2af9ae0eb->enter($__internal_501b21a5ceec364d2ce2cdda65ba99a62a315dfce6102cf6d75080a2af9ae0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_501b21a5ceec364d2ce2cdda65ba99a62a315dfce6102cf6d75080a2af9ae0eb->leave($__internal_501b21a5ceec364d2ce2cdda65ba99a62a315dfce6102cf6d75080a2af9ae0eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
