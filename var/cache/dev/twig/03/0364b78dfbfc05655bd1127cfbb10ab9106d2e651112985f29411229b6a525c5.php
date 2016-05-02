<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_45a0db1000e07bccf62183ae13ca73b2216ca4d87482f3aeb306e6060f191a04 extends Twig_Template
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
        $__internal_b22afdd8db2a4a3b4b95c1256f1ac378ec5142a20f8c3b4f6e11b0134c7350a4 = $this->env->getExtension("native_profiler");
        $__internal_b22afdd8db2a4a3b4b95c1256f1ac378ec5142a20f8c3b4f6e11b0134c7350a4->enter($__internal_b22afdd8db2a4a3b4b95c1256f1ac378ec5142a20f8c3b4f6e11b0134c7350a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b22afdd8db2a4a3b4b95c1256f1ac378ec5142a20f8c3b4f6e11b0134c7350a4->leave($__internal_b22afdd8db2a4a3b4b95c1256f1ac378ec5142a20f8c3b4f6e11b0134c7350a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
