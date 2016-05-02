<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ca1ab31551630356afb326a2059d91ef2b4bf35a842be47dfd5536cb78d3bc66 extends Twig_Template
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
        $__internal_4a6de959d8936ec9d1800c7a860b8c4d698b6bac60800dfe73588fd1e64a3422 = $this->env->getExtension("native_profiler");
        $__internal_4a6de959d8936ec9d1800c7a860b8c4d698b6bac60800dfe73588fd1e64a3422->enter($__internal_4a6de959d8936ec9d1800c7a860b8c4d698b6bac60800dfe73588fd1e64a3422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4a6de959d8936ec9d1800c7a860b8c4d698b6bac60800dfe73588fd1e64a3422->leave($__internal_4a6de959d8936ec9d1800c7a860b8c4d698b6bac60800dfe73588fd1e64a3422_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
