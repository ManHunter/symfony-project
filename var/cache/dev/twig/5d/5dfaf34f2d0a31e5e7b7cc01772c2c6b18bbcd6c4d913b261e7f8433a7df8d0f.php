<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4b5dfb727d1fb2c05003e7c3e2490832f0110966122881651b3aa402120364e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d89e4eee9eef93564ec3a9f47a00dfdffc3d0cacc2c940c39885d660f142cc0f = $this->env->getExtension("native_profiler");
        $__internal_d89e4eee9eef93564ec3a9f47a00dfdffc3d0cacc2c940c39885d660f142cc0f->enter($__internal_d89e4eee9eef93564ec3a9f47a00dfdffc3d0cacc2c940c39885d660f142cc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89e4eee9eef93564ec3a9f47a00dfdffc3d0cacc2c940c39885d660f142cc0f->leave($__internal_d89e4eee9eef93564ec3a9f47a00dfdffc3d0cacc2c940c39885d660f142cc0f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04b473ceb581550631f7db7284c568b77143fedcefb140b4dc502326f3de9039 = $this->env->getExtension("native_profiler");
        $__internal_04b473ceb581550631f7db7284c568b77143fedcefb140b4dc502326f3de9039->enter($__internal_04b473ceb581550631f7db7284c568b77143fedcefb140b4dc502326f3de9039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04b473ceb581550631f7db7284c568b77143fedcefb140b4dc502326f3de9039->leave($__internal_04b473ceb581550631f7db7284c568b77143fedcefb140b4dc502326f3de9039_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7cf215f98757ffdd398cd6be9b3c520d4268e06a1c682ece44616d40e6ea645 = $this->env->getExtension("native_profiler");
        $__internal_c7cf215f98757ffdd398cd6be9b3c520d4268e06a1c682ece44616d40e6ea645->enter($__internal_c7cf215f98757ffdd398cd6be9b3c520d4268e06a1c682ece44616d40e6ea645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7cf215f98757ffdd398cd6be9b3c520d4268e06a1c682ece44616d40e6ea645->leave($__internal_c7cf215f98757ffdd398cd6be9b3c520d4268e06a1c682ece44616d40e6ea645_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85718e23e2c5852c7f24fd9d3efd18846797a3d148a2d05d16e30b8e0b63f8d7 = $this->env->getExtension("native_profiler");
        $__internal_85718e23e2c5852c7f24fd9d3efd18846797a3d148a2d05d16e30b8e0b63f8d7->enter($__internal_85718e23e2c5852c7f24fd9d3efd18846797a3d148a2d05d16e30b8e0b63f8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85718e23e2c5852c7f24fd9d3efd18846797a3d148a2d05d16e30b8e0b63f8d7->leave($__internal_85718e23e2c5852c7f24fd9d3efd18846797a3d148a2d05d16e30b8e0b63f8d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
