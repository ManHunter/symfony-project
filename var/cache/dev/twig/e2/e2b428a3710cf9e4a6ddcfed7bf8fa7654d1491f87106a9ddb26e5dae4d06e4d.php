<?php

/* :security:login.html.twig */
class __TwigTemplate_f7d1c5394f5b87da28743b36d3a83ff6037ad60e7bdc2777babe6fda38ba97f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ff8593276dc97ecdf4bd25f997f827750cac7b028f30e1a928d358235636a9b = $this->env->getExtension("native_profiler");
        $__internal_8ff8593276dc97ecdf4bd25f997f827750cac7b028f30e1a928d358235636a9b->enter($__internal_8ff8593276dc97ecdf4bd25f997f827750cac7b028f30e1a928d358235636a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff8593276dc97ecdf4bd25f997f827750cac7b028f30e1a928d358235636a9b->leave($__internal_8ff8593276dc97ecdf4bd25f997f827750cac7b028f30e1a928d358235636a9b_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_60a5e75cd0e004f4cc4b8c9a6e147211d6b1e44d6db5e88f9058896333534b4e = $this->env->getExtension("native_profiler");
        $__internal_60a5e75cd0e004f4cc4b8c9a6e147211d6b1e44d6db5e88f9058896333534b4e->enter($__internal_60a5e75cd0e004f4cc4b8c9a6e147211d6b1e44d6db5e88f9058896333534b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 4
        echo "    ";
        $this->displayParentBlock("nav", $context, $blocks);
        echo "
";
        
        $__internal_60a5e75cd0e004f4cc4b8c9a6e147211d6b1e44d6db5e88f9058896333534b4e->leave($__internal_60a5e75cd0e004f4cc4b8c9a6e147211d6b1e44d6db5e88f9058896333534b4e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_292224cff7040cfc5fa9e307576a3ca45485db723909d00f247ac0ce5aba564e = $this->env->getExtension("native_profiler");
        $__internal_292224cff7040cfc5fa9e307576a3ca45485db723909d00f247ac0ce5aba564e->enter($__internal_292224cff7040cfc5fa9e307576a3ca45485db723909d00f247ac0ce5aba564e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
        <label for=\"password\">Password:</label>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"/>

        <button class=\"btn btn-primary\" type=\"submit\">Log In</button>
    </form>
";
        
        $__internal_292224cff7040cfc5fa9e307576a3ca45485db723909d00f247ac0ce5aba564e->leave($__internal_292224cff7040cfc5fa9e307576a3ca45485db723909d00f247ac0ce5aba564e_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  66 => 11,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block nav %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <form action="{{ path('login') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}"/>*/
/*         <label for="password">Password:</label>*/
/*         <input type="password" class="form-control" id="password" name="_password"/>*/
/* */
/*         <button class="btn btn-primary" type="submit">Log In</button>*/
/*     </form>*/
/* {% endblock %}*/
