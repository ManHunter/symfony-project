<?php

/* security/login.html.twig */
class __TwigTemplate_e37dd53db0f1e4a5a0da5053331a60c789b9c7ba5e40aac7dd14d63642d7d85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49b6e4e6d3e30e06988d7926ee75c59dc01276c19d984c9608a8ac423825e515 = $this->env->getExtension("native_profiler");
        $__internal_49b6e4e6d3e30e06988d7926ee75c59dc01276c19d984c9608a8ac423825e515->enter($__internal_49b6e4e6d3e30e06988d7926ee75c59dc01276c19d984c9608a8ac423825e515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b6e4e6d3e30e06988d7926ee75c59dc01276c19d984c9608a8ac423825e515->leave($__internal_49b6e4e6d3e30e06988d7926ee75c59dc01276c19d984c9608a8ac423825e515_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77e86c9c3a1828622d823009b9d7d962c0b79c71f77725ad0a4d7c2549a5f03e = $this->env->getExtension("native_profiler");
        $__internal_77e86c9c3a1828622d823009b9d7d962c0b79c71f77725ad0a4d7c2549a5f03e->enter($__internal_77e86c9c3a1828622d823009b9d7d962c0b79c71f77725ad0a4d7c2549a5f03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
        <label for=\"password\">Password:</label>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"/>

        <button class=\"btn btn-primary\" type=\"submit\">Log In</button>
    </form>
";
        
        $__internal_77e86c9c3a1828622d823009b9d7d962c0b79c71f77725ad0a4d7c2549a5f03e->leave($__internal_77e86c9c3a1828622d823009b9d7d962c0b79c71f77725ad0a4d7c2549a5f03e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
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
