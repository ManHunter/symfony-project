<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0607fe7449f768db4811c00d7639a80b18733f019b331bcbaf6897a12d8b9742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3a468cb87ce1aca1c127acabdc70cbd26afa27feafba2c5e9ca6a0a645df13bd = $this->env->getExtension("native_profiler");
        $__internal_3a468cb87ce1aca1c127acabdc70cbd26afa27feafba2c5e9ca6a0a645df13bd->enter($__internal_3a468cb87ce1aca1c127acabdc70cbd26afa27feafba2c5e9ca6a0a645df13bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a468cb87ce1aca1c127acabdc70cbd26afa27feafba2c5e9ca6a0a645df13bd->leave($__internal_3a468cb87ce1aca1c127acabdc70cbd26afa27feafba2c5e9ca6a0a645df13bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81f241f709344f21eb87770bf2f29e80ffd6d3434ca609c868a0095d009c8495 = $this->env->getExtension("native_profiler");
        $__internal_81f241f709344f21eb87770bf2f29e80ffd6d3434ca609c868a0095d009c8495->enter($__internal_81f241f709344f21eb87770bf2f29e80ffd6d3434ca609c868a0095d009c8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_81f241f709344f21eb87770bf2f29e80ffd6d3434ca609c868a0095d009c8495->leave($__internal_81f241f709344f21eb87770bf2f29e80ffd6d3434ca609c868a0095d009c8495_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72c21eb0f5cca0e5011ad2b090a035417e3e1f29c515fd1fbce808230882a70e = $this->env->getExtension("native_profiler");
        $__internal_72c21eb0f5cca0e5011ad2b090a035417e3e1f29c515fd1fbce808230882a70e->enter($__internal_72c21eb0f5cca0e5011ad2b090a035417e3e1f29c515fd1fbce808230882a70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72c21eb0f5cca0e5011ad2b090a035417e3e1f29c515fd1fbce808230882a70e->leave($__internal_72c21eb0f5cca0e5011ad2b090a035417e3e1f29c515fd1fbce808230882a70e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c4d62509801729c208cf3d199940a1162b3ddd5f18f95eea8b4aea6eb84baee = $this->env->getExtension("native_profiler");
        $__internal_2c4d62509801729c208cf3d199940a1162b3ddd5f18f95eea8b4aea6eb84baee->enter($__internal_2c4d62509801729c208cf3d199940a1162b3ddd5f18f95eea8b4aea6eb84baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2c4d62509801729c208cf3d199940a1162b3ddd5f18f95eea8b4aea6eb84baee->leave($__internal_2c4d62509801729c208cf3d199940a1162b3ddd5f18f95eea8b4aea6eb84baee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
