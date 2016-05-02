<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0ab134699c7d8fef400daf7f45c0de138814e3e03e9dc9253835df41d2529a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c39ac61a6968efdacc9761805cad6586ed45c6f8dd1839d9fe1a04f750505c8d = $this->env->getExtension("native_profiler");
        $__internal_c39ac61a6968efdacc9761805cad6586ed45c6f8dd1839d9fe1a04f750505c8d->enter($__internal_c39ac61a6968efdacc9761805cad6586ed45c6f8dd1839d9fe1a04f750505c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c39ac61a6968efdacc9761805cad6586ed45c6f8dd1839d9fe1a04f750505c8d->leave($__internal_c39ac61a6968efdacc9761805cad6586ed45c6f8dd1839d9fe1a04f750505c8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4f9776bded2ed4715c2bb01ad931d8bc22de486efaa5e9e9ce57a9bc0b71e32 = $this->env->getExtension("native_profiler");
        $__internal_c4f9776bded2ed4715c2bb01ad931d8bc22de486efaa5e9e9ce57a9bc0b71e32->enter($__internal_c4f9776bded2ed4715c2bb01ad931d8bc22de486efaa5e9e9ce57a9bc0b71e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c4f9776bded2ed4715c2bb01ad931d8bc22de486efaa5e9e9ce57a9bc0b71e32->leave($__internal_c4f9776bded2ed4715c2bb01ad931d8bc22de486efaa5e9e9ce57a9bc0b71e32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a5db1e31dab68eb47490a3a30385f5687ac7f6b9c2c6c16d760c6a3a21ce0e2 = $this->env->getExtension("native_profiler");
        $__internal_3a5db1e31dab68eb47490a3a30385f5687ac7f6b9c2c6c16d760c6a3a21ce0e2->enter($__internal_3a5db1e31dab68eb47490a3a30385f5687ac7f6b9c2c6c16d760c6a3a21ce0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a5db1e31dab68eb47490a3a30385f5687ac7f6b9c2c6c16d760c6a3a21ce0e2->leave($__internal_3a5db1e31dab68eb47490a3a30385f5687ac7f6b9c2c6c16d760c6a3a21ce0e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cf1a11f2ef837cfa907d25de9d66fccf076750c3ebaa03aafe64577d921ec3 = $this->env->getExtension("native_profiler");
        $__internal_33cf1a11f2ef837cfa907d25de9d66fccf076750c3ebaa03aafe64577d921ec3->enter($__internal_33cf1a11f2ef837cfa907d25de9d66fccf076750c3ebaa03aafe64577d921ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_33cf1a11f2ef837cfa907d25de9d66fccf076750c3ebaa03aafe64577d921ec3->leave($__internal_33cf1a11f2ef837cfa907d25de9d66fccf076750c3ebaa03aafe64577d921ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
