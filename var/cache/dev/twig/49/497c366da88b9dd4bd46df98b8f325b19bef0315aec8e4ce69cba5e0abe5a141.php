<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f24be7e63f8c76b4f41c23d97743cc756d0002643c4a20ac7711d39996a521d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_8e28ac26c6b913428354fba1cc5d3091aa4ffe34417eca83209730e77e8c638e = $this->env->getExtension("native_profiler");
        $__internal_8e28ac26c6b913428354fba1cc5d3091aa4ffe34417eca83209730e77e8c638e->enter($__internal_8e28ac26c6b913428354fba1cc5d3091aa4ffe34417eca83209730e77e8c638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e28ac26c6b913428354fba1cc5d3091aa4ffe34417eca83209730e77e8c638e->leave($__internal_8e28ac26c6b913428354fba1cc5d3091aa4ffe34417eca83209730e77e8c638e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bb83a64e87a2c147a96dcabe3c0c3fe00904f52f21b74b7f40a1ced2be73664 = $this->env->getExtension("native_profiler");
        $__internal_7bb83a64e87a2c147a96dcabe3c0c3fe00904f52f21b74b7f40a1ced2be73664->enter($__internal_7bb83a64e87a2c147a96dcabe3c0c3fe00904f52f21b74b7f40a1ced2be73664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bb83a64e87a2c147a96dcabe3c0c3fe00904f52f21b74b7f40a1ced2be73664->leave($__internal_7bb83a64e87a2c147a96dcabe3c0c3fe00904f52f21b74b7f40a1ced2be73664_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4be5ca8a23d609a1649d78a6844d56bc111e6888e5c6f812dcf70c64ac13d548 = $this->env->getExtension("native_profiler");
        $__internal_4be5ca8a23d609a1649d78a6844d56bc111e6888e5c6f812dcf70c64ac13d548->enter($__internal_4be5ca8a23d609a1649d78a6844d56bc111e6888e5c6f812dcf70c64ac13d548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4be5ca8a23d609a1649d78a6844d56bc111e6888e5c6f812dcf70c64ac13d548->leave($__internal_4be5ca8a23d609a1649d78a6844d56bc111e6888e5c6f812dcf70c64ac13d548_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1936e9ce5e7bc58528a8da5a4e230486bad9f0815071d562dd1ce57030559066 = $this->env->getExtension("native_profiler");
        $__internal_1936e9ce5e7bc58528a8da5a4e230486bad9f0815071d562dd1ce57030559066->enter($__internal_1936e9ce5e7bc58528a8da5a4e230486bad9f0815071d562dd1ce57030559066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1936e9ce5e7bc58528a8da5a4e230486bad9f0815071d562dd1ce57030559066->leave($__internal_1936e9ce5e7bc58528a8da5a4e230486bad9f0815071d562dd1ce57030559066_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
