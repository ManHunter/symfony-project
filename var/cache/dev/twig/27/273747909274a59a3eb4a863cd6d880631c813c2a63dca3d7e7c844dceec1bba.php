<?php

/* ::base.html.twig */
class __TwigTemplate_000ad7d5aa2b870fa47ed3b0e794cfa009aa5023ea6197ddcf394e5e5c393124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f05eae55c5aa0e601dd7647cd76f68aab4fd0d60c9c88bc0f853b273a881f3c = $this->env->getExtension("native_profiler");
        $__internal_8f05eae55c5aa0e601dd7647cd76f68aab4fd0d60c9c88bc0f853b273a881f3c->enter($__internal_8f05eae55c5aa0e601dd7647cd76f68aab4fd0d60c9c88bc0f853b273a881f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_8f05eae55c5aa0e601dd7647cd76f68aab4fd0d60c9c88bc0f853b273a881f3c->leave($__internal_8f05eae55c5aa0e601dd7647cd76f68aab4fd0d60c9c88bc0f853b273a881f3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30a2fae403eae9498c870d70c2ea9e923098cd077b61b7d47b4ba7a7efade5b2 = $this->env->getExtension("native_profiler");
        $__internal_30a2fae403eae9498c870d70c2ea9e923098cd077b61b7d47b4ba7a7efade5b2->enter($__internal_30a2fae403eae9498c870d70c2ea9e923098cd077b61b7d47b4ba7a7efade5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30a2fae403eae9498c870d70c2ea9e923098cd077b61b7d47b4ba7a7efade5b2->leave($__internal_30a2fae403eae9498c870d70c2ea9e923098cd077b61b7d47b4ba7a7efade5b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed2ab02d9660086218fd21885f0f08e947862aac9c04224f0490f862aa0085e5 = $this->env->getExtension("native_profiler");
        $__internal_ed2ab02d9660086218fd21885f0f08e947862aac9c04224f0490f862aa0085e5->enter($__internal_ed2ab02d9660086218fd21885f0f08e947862aac9c04224f0490f862aa0085e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_ed2ab02d9660086218fd21885f0f08e947862aac9c04224f0490f862aa0085e5->leave($__internal_ed2ab02d9660086218fd21885f0f08e947862aac9c04224f0490f862aa0085e5_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e4cf7a7726958e592bcab3f5a4eab407f5c9fa2fb8f750d56b45c803d7aaa23 = $this->env->getExtension("native_profiler");
        $__internal_4e4cf7a7726958e592bcab3f5a4eab407f5c9fa2fb8f750d56b45c803d7aaa23->enter($__internal_4e4cf7a7726958e592bcab3f5a4eab407f5c9fa2fb8f750d56b45c803d7aaa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_4e4cf7a7726958e592bcab3f5a4eab407f5c9fa2fb8f750d56b45c803d7aaa23->leave($__internal_4e4cf7a7726958e592bcab3f5a4eab407f5c9fa2fb8f750d56b45c803d7aaa23_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db70e1ef331cce859b6834e1e665eda4dff0b25b1d3a0afc8ae51a204813e12d = $this->env->getExtension("native_profiler");
        $__internal_db70e1ef331cce859b6834e1e665eda4dff0b25b1d3a0afc8ae51a204813e12d->enter($__internal_db70e1ef331cce859b6834e1e665eda4dff0b25b1d3a0afc8ae51a204813e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db70e1ef331cce859b6834e1e665eda4dff0b25b1d3a0afc8ae51a204813e12d->leave($__internal_db70e1ef331cce859b6834e1e665eda4dff0b25b1d3a0afc8ae51a204813e12d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  97 => 15,  91 => 14,  82 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 24,  49 => 23,  47 => 14,  41 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
