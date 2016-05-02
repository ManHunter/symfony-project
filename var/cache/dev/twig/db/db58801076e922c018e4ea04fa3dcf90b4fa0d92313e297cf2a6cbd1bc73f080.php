<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ca56537a5ed3b2755e631d7c072a45f07539c90432c2026faf5cda615553cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65c95449fc3939c23cd07b84203872e41ecd0cceeff8ead9f791fd2da317fdd = $this->env->getExtension("native_profiler");
        $__internal_b65c95449fc3939c23cd07b84203872e41ecd0cceeff8ead9f791fd2da317fdd->enter($__internal_b65c95449fc3939c23cd07b84203872e41ecd0cceeff8ead9f791fd2da317fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b65c95449fc3939c23cd07b84203872e41ecd0cceeff8ead9f791fd2da317fdd->leave($__internal_b65c95449fc3939c23cd07b84203872e41ecd0cceeff8ead9f791fd2da317fdd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_13f1174ffd7219721c8607230616215fb0b875eba7a805d815050a243e69f4f3 = $this->env->getExtension("native_profiler");
        $__internal_13f1174ffd7219721c8607230616215fb0b875eba7a805d815050a243e69f4f3->enter($__internal_13f1174ffd7219721c8607230616215fb0b875eba7a805d815050a243e69f4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_13f1174ffd7219721c8607230616215fb0b875eba7a805d815050a243e69f4f3->leave($__internal_13f1174ffd7219721c8607230616215fb0b875eba7a805d815050a243e69f4f3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
