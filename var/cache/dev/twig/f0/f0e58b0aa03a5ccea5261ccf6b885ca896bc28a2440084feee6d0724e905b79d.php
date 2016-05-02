<?php

/* base.html.twig */
class __TwigTemplate_511d9add2ab4e2e77353fb5fdce348638843d263500000c620f57752d8e251b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4cf699cb72065966287911b0b1d5b84c271ef4f0d39ddf329d0f415dbeb900a = $this->env->getExtension("native_profiler");
        $__internal_e4cf699cb72065966287911b0b1d5b84c271ef4f0d39ddf329d0f415dbeb900a->enter($__internal_e4cf699cb72065966287911b0b1d5b84c271ef4f0d39ddf329d0f415dbeb900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('nav', $context, $blocks);
        // line 53
        echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "                    </div>
                </div>
            </div>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_e4cf699cb72065966287911b0b1d5b84c271ef4f0d39ddf329d0f415dbeb900a->leave($__internal_e4cf699cb72065966287911b0b1d5b84c271ef4f0d39ddf329d0f415dbeb900a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78abadbd784a1a6d49c144be7d856b6ca186d9d13d67046deec953cb2cc58319 = $this->env->getExtension("native_profiler");
        $__internal_78abadbd784a1a6d49c144be7d856b6ca186d9d13d67046deec953cb2cc58319->enter($__internal_78abadbd784a1a6d49c144be7d856b6ca186d9d13d67046deec953cb2cc58319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78abadbd784a1a6d49c144be7d856b6ca186d9d13d67046deec953cb2cc58319->leave($__internal_78abadbd784a1a6d49c144be7d856b6ca186d9d13d67046deec953cb2cc58319_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fa038abc18c8cb97ec3da5e7a73856d52e063462c5e2485d09301deb77d67e3 = $this->env->getExtension("native_profiler");
        $__internal_1fa038abc18c8cb97ec3da5e7a73856d52e063462c5e2485d09301deb77d67e3->enter($__internal_1fa038abc18c8cb97ec3da5e7a73856d52e063462c5e2485d09301deb77d67e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_1fa038abc18c8cb97ec3da5e7a73856d52e063462c5e2485d09301deb77d67e3->leave($__internal_1fa038abc18c8cb97ec3da5e7a73856d52e063462c5e2485d09301deb77d67e3_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f48c55852354a739fec341f9bb71bd429dd05050dbe9eaeaff2a4a8e30840870 = $this->env->getExtension("native_profiler");
        $__internal_f48c55852354a739fec341f9bb71bd429dd05050dbe9eaeaff2a4a8e30840870->enter($__internal_f48c55852354a739fec341f9bb71bd429dd05050dbe9eaeaff2a4a8e30840870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 15
        echo "            <nav class=\"navbar navbar-default navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Project name</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#about\">About</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li class=\"dropdown-header\">Nav header</li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li><a href=\"#\">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"../navbar/\">Default</a></li>
                            <li class=\"active\"><a href=\"./\">Static top <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"../navbar-fixed-top/\">Fixed top</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        ";
        
        $__internal_f48c55852354a739fec341f9bb71bd429dd05050dbe9eaeaff2a4a8e30840870->leave($__internal_f48c55852354a739fec341f9bb71bd429dd05050dbe9eaeaff2a4a8e30840870_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_46d4ab0c7a3e698ec99f6e0f38882b400573177d5224b2c2edb38543587bedea = $this->env->getExtension("native_profiler");
        $__internal_46d4ab0c7a3e698ec99f6e0f38882b400573177d5224b2c2edb38543587bedea->enter($__internal_46d4ab0c7a3e698ec99f6e0f38882b400573177d5224b2c2edb38543587bedea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "
                        ";
        
        $__internal_46d4ab0c7a3e698ec99f6e0f38882b400573177d5224b2c2edb38543587bedea->leave($__internal_46d4ab0c7a3e698ec99f6e0f38882b400573177d5224b2c2edb38543587bedea_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0d0d3b5d66982443bdc5fff959a0e401d6840f5d15bbb99bf03bd437a6fcd18 = $this->env->getExtension("native_profiler");
        $__internal_d0d0d3b5d66982443bdc5fff959a0e401d6840f5d15bbb99bf03bd437a6fcd18->enter($__internal_d0d0d3b5d66982443bdc5fff959a0e401d6840f5d15bbb99bf03bd437a6fcd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.12.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d0d0d3b5d66982443bdc5fff959a0e401d6840f5d15bbb99bf03bd437a6fcd18->leave($__internal_d0d0d3b5d66982443bdc5fff959a0e401d6840f5d15bbb99bf03bd437a6fcd18_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  174 => 64,  168 => 63,  160 => 58,  154 => 57,  110 => 15,  104 => 14,  95 => 8,  92 => 7,  86 => 6,  74 => 5,  65 => 67,  63 => 63,  58 => 60,  56 => 57,  50 => 53,  48 => 14,  42 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
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
/*         {% block nav %}*/
/*             <nav class="navbar navbar-default navbar-static-top">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="#">Project name</a>*/
/*                     </div>*/
/*                     <div id="navbar" class="navbar-collapse collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active"><a href="#">Home</a></li>*/
/*                             <li><a href="#about">About</a></li>*/
/*                             <li><a href="#contact">Contact</a></li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Action</a></li>*/
/*                                     <li><a href="#">Another action</a></li>*/
/*                                     <li><a href="#">Something else here</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li class="dropdown-header">Nav header</li>*/
/*                                     <li><a href="#">Separated link</a></li>*/
/*                                     <li><a href="#">One more separated link</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li><a href="../navbar/">Default</a></li>*/
/*                             <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>*/
/*                             <li><a href="../navbar-fixed-top/">Fixed top</a></li>*/
/*                         </ul>*/
/*                     </div><!--/.nav-collapse -->*/
/*                 </div>*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         {% block body %}*/
/* */
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery-1.12.3.js') }}"></script>*/
/*             <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
