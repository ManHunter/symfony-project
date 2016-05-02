<?php

/* :security:login.html.twig */
class __TwigTemplate_63690036bcafdccf511f284d0de580c0ca5df98b512e8ba5de826950a50b0d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_54475553a1f8d353ec388668f5f93fe5f03cedde64453d37adc35fcfa55ce4c6 = $this->env->getExtension("native_profiler");
        $__internal_54475553a1f8d353ec388668f5f93fe5f03cedde64453d37adc35fcfa55ce4c6->enter($__internal_54475553a1f8d353ec388668f5f93fe5f03cedde64453d37adc35fcfa55ce4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54475553a1f8d353ec388668f5f93fe5f03cedde64453d37adc35fcfa55ce4c6->leave($__internal_54475553a1f8d353ec388668f5f93fe5f03cedde64453d37adc35fcfa55ce4c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3db2a2a25bad2b9e28ecacd3ba305b0b9d93d9de86423eeba569422e4edf71c1 = $this->env->getExtension("native_profiler");
        $__internal_3db2a2a25bad2b9e28ecacd3ba305b0b9d93d9de86423eeba569422e4edf71c1->enter($__internal_3db2a2a25bad2b9e28ecacd3ba305b0b9d93d9de86423eeba569422e4edf71c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3db2a2a25bad2b9e28ecacd3ba305b0b9d93d9de86423eeba569422e4edf71c1->leave($__internal_3db2a2a25bad2b9e28ecacd3ba305b0b9d93d9de86423eeba569422e4edf71c1_prof);

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
