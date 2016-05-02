<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9e8ea34ddadaf520e6090f92ed791cacefa3b938b36f6c502066a6efa6669cb1 extends Twig_Template
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
        $__internal_f160b6088a6f20a428b95e055355b04fb884b630aa0c4ffd99a80cf6d59c072a = $this->env->getExtension("native_profiler");
        $__internal_f160b6088a6f20a428b95e055355b04fb884b630aa0c4ffd99a80cf6d59c072a->enter($__internal_f160b6088a6f20a428b95e055355b04fb884b630aa0c4ffd99a80cf6d59c072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f160b6088a6f20a428b95e055355b04fb884b630aa0c4ffd99a80cf6d59c072a->leave($__internal_f160b6088a6f20a428b95e055355b04fb884b630aa0c4ffd99a80cf6d59c072a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_711e22704cad21ad177770b3a15baecd5c6d907489df58a68f9d7df859a682de = $this->env->getExtension("native_profiler");
        $__internal_711e22704cad21ad177770b3a15baecd5c6d907489df58a68f9d7df859a682de->enter($__internal_711e22704cad21ad177770b3a15baecd5c6d907489df58a68f9d7df859a682de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_711e22704cad21ad177770b3a15baecd5c6d907489df58a68f9d7df859a682de->leave($__internal_711e22704cad21ad177770b3a15baecd5c6d907489df58a68f9d7df859a682de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61cfa770b72316e82dce975c8bc5f35e6e999dd5aa4967830decaf6c9865bd0b = $this->env->getExtension("native_profiler");
        $__internal_61cfa770b72316e82dce975c8bc5f35e6e999dd5aa4967830decaf6c9865bd0b->enter($__internal_61cfa770b72316e82dce975c8bc5f35e6e999dd5aa4967830decaf6c9865bd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61cfa770b72316e82dce975c8bc5f35e6e999dd5aa4967830decaf6c9865bd0b->leave($__internal_61cfa770b72316e82dce975c8bc5f35e6e999dd5aa4967830decaf6c9865bd0b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e0119a594407f9d558a642834557c00135f6d88740ed6d7808c808ab7912f26 = $this->env->getExtension("native_profiler");
        $__internal_5e0119a594407f9d558a642834557c00135f6d88740ed6d7808c808ab7912f26->enter($__internal_5e0119a594407f9d558a642834557c00135f6d88740ed6d7808c808ab7912f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e0119a594407f9d558a642834557c00135f6d88740ed6d7808c808ab7912f26->leave($__internal_5e0119a594407f9d558a642834557c00135f6d88740ed6d7808c808ab7912f26_prof);

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
