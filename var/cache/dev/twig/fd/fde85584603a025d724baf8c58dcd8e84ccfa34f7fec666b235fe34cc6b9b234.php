<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6c6af6726d09b43f43fa7e64a537a8477df34526166d0fdb80cc3c6ddb2e99ce extends Twig_Template
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
        $__internal_c5d8bed06c43acb777aa4ddf65414b1c43ec3bd0c7a8ef7e2b35fbc22567e48a = $this->env->getExtension("native_profiler");
        $__internal_c5d8bed06c43acb777aa4ddf65414b1c43ec3bd0c7a8ef7e2b35fbc22567e48a->enter($__internal_c5d8bed06c43acb777aa4ddf65414b1c43ec3bd0c7a8ef7e2b35fbc22567e48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c5d8bed06c43acb777aa4ddf65414b1c43ec3bd0c7a8ef7e2b35fbc22567e48a->leave($__internal_c5d8bed06c43acb777aa4ddf65414b1c43ec3bd0c7a8ef7e2b35fbc22567e48a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
