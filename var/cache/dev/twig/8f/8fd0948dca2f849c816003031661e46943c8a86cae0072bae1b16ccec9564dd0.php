<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_985a0c9757aac39ab7c3db854d5b30dd6f94431f2e4377e13e0b236f35f66cb9 extends Twig_Template
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
        $__internal_5e2eaf37610928bc224eb3cd8f84f12e1a26e6524799c161e26755d8216b368a = $this->env->getExtension("native_profiler");
        $__internal_5e2eaf37610928bc224eb3cd8f84f12e1a26e6524799c161e26755d8216b368a->enter($__internal_5e2eaf37610928bc224eb3cd8f84f12e1a26e6524799c161e26755d8216b368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5e2eaf37610928bc224eb3cd8f84f12e1a26e6524799c161e26755d8216b368a->leave($__internal_5e2eaf37610928bc224eb3cd8f84f12e1a26e6524799c161e26755d8216b368a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
