<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_814003560ece35e2c0813ddf5b9772219c2018ce3d49b34eebbc0d91c4860245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_90cee7ab620a45686864fd61f44c80645078ae5af6ffda6517b4613b9aa61c97 = $this->env->getExtension("native_profiler");
        $__internal_90cee7ab620a45686864fd61f44c80645078ae5af6ffda6517b4613b9aa61c97->enter($__internal_90cee7ab620a45686864fd61f44c80645078ae5af6ffda6517b4613b9aa61c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90cee7ab620a45686864fd61f44c80645078ae5af6ffda6517b4613b9aa61c97->leave($__internal_90cee7ab620a45686864fd61f44c80645078ae5af6ffda6517b4613b9aa61c97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac09dea9cdfd6d7c9b9b37f0ba20551e438330e0b5b6864f17bb025bb0a669f9 = $this->env->getExtension("native_profiler");
        $__internal_ac09dea9cdfd6d7c9b9b37f0ba20551e438330e0b5b6864f17bb025bb0a669f9->enter($__internal_ac09dea9cdfd6d7c9b9b37f0ba20551e438330e0b5b6864f17bb025bb0a669f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ac09dea9cdfd6d7c9b9b37f0ba20551e438330e0b5b6864f17bb025bb0a669f9->leave($__internal_ac09dea9cdfd6d7c9b9b37f0ba20551e438330e0b5b6864f17bb025bb0a669f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77379483603f3acc808685d1f5392da89e30a0abde3b55177d52487fe62a6ae7 = $this->env->getExtension("native_profiler");
        $__internal_77379483603f3acc808685d1f5392da89e30a0abde3b55177d52487fe62a6ae7->enter($__internal_77379483603f3acc808685d1f5392da89e30a0abde3b55177d52487fe62a6ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_77379483603f3acc808685d1f5392da89e30a0abde3b55177d52487fe62a6ae7->leave($__internal_77379483603f3acc808685d1f5392da89e30a0abde3b55177d52487fe62a6ae7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
