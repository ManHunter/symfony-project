<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bbc8ee934f837ef7884835095bb5643ecb0abc0698493e4468fef80ed3bdf9b6 extends Twig_Template
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
        $__internal_69e24ce4dd3c6d789a410cb2f1a96aa7043411f5b617ca91dccb5213d47fbd7c = $this->env->getExtension("native_profiler");
        $__internal_69e24ce4dd3c6d789a410cb2f1a96aa7043411f5b617ca91dccb5213d47fbd7c->enter($__internal_69e24ce4dd3c6d789a410cb2f1a96aa7043411f5b617ca91dccb5213d47fbd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_69e24ce4dd3c6d789a410cb2f1a96aa7043411f5b617ca91dccb5213d47fbd7c->leave($__internal_69e24ce4dd3c6d789a410cb2f1a96aa7043411f5b617ca91dccb5213d47fbd7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
