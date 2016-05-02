<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6374fe4614273470b9446f05c341a4ab5aab472814e0eff04c650797d4fc82f6 extends Twig_Template
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
        $__internal_78fee236944becea8d30e497d17dca2b50cf277179ac36c3818e437a2eb372b1 = $this->env->getExtension("native_profiler");
        $__internal_78fee236944becea8d30e497d17dca2b50cf277179ac36c3818e437a2eb372b1->enter($__internal_78fee236944becea8d30e497d17dca2b50cf277179ac36c3818e437a2eb372b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_78fee236944becea8d30e497d17dca2b50cf277179ac36c3818e437a2eb372b1->leave($__internal_78fee236944becea8d30e497d17dca2b50cf277179ac36c3818e437a2eb372b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
