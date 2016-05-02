<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7a1f0f0b9b2fa723dd179c2477f4d33f71789ea2431b93c2118553d8f0ad4111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca1240c8c4c98bccabd9bcdcb7222f68ad88759890bcd899d0f0e5d7c47c8d1c = $this->env->getExtension("native_profiler");
        $__internal_ca1240c8c4c98bccabd9bcdcb7222f68ad88759890bcd899d0f0e5d7c47c8d1c->enter($__internal_ca1240c8c4c98bccabd9bcdcb7222f68ad88759890bcd899d0f0e5d7c47c8d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ca1240c8c4c98bccabd9bcdcb7222f68ad88759890bcd899d0f0e5d7c47c8d1c->leave($__internal_ca1240c8c4c98bccabd9bcdcb7222f68ad88759890bcd899d0f0e5d7c47c8d1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
