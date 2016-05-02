<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_17d80144fad77bf3636a6c28777e7bff36407b06d8481f4f3f3806be7ef84a92 extends Twig_Template
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
        $__internal_2e25b686158c78b257bda4c0da1f1800eb69b8db54e06156e73675a751e91e32 = $this->env->getExtension("native_profiler");
        $__internal_2e25b686158c78b257bda4c0da1f1800eb69b8db54e06156e73675a751e91e32->enter($__internal_2e25b686158c78b257bda4c0da1f1800eb69b8db54e06156e73675a751e91e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2e25b686158c78b257bda4c0da1f1800eb69b8db54e06156e73675a751e91e32->leave($__internal_2e25b686158c78b257bda4c0da1f1800eb69b8db54e06156e73675a751e91e32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
