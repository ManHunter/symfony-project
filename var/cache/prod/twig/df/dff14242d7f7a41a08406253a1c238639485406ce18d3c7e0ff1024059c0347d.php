<?php

/* base.html.twig */
class __TwigTemplate_ceab448538eee4b330d9645c3c814f8db55c24e95c7389df9efaa213cf48f32f extends Twig_Template
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
        $__internal_59fe9a1b7d8da286291c7f890a3fe096a79dd6a2f1df4fb0eb63995214b12798 = $this->env->getExtension("native_profiler");
        $__internal_59fe9a1b7d8da286291c7f890a3fe096a79dd6a2f1df4fb0eb63995214b12798->enter($__internal_59fe9a1b7d8da286291c7f890a3fe096a79dd6a2f1df4fb0eb63995214b12798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 62
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_59fe9a1b7d8da286291c7f890a3fe096a79dd6a2f1df4fb0eb63995214b12798->leave($__internal_59fe9a1b7d8da286291c7f890a3fe096a79dd6a2f1df4fb0eb63995214b12798_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f77ca0ea8b418da8894ca76650fb206a95e2cc526fe67598b445520146f56b1 = $this->env->getExtension("native_profiler");
        $__internal_5f77ca0ea8b418da8894ca76650fb206a95e2cc526fe67598b445520146f56b1->enter($__internal_5f77ca0ea8b418da8894ca76650fb206a95e2cc526fe67598b445520146f56b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f77ca0ea8b418da8894ca76650fb206a95e2cc526fe67598b445520146f56b1->leave($__internal_5f77ca0ea8b418da8894ca76650fb206a95e2cc526fe67598b445520146f56b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8dec4052071533145810f12c11b89ee05c97cd79858e2ce5af8e1cd5dd4e2dea = $this->env->getExtension("native_profiler");
        $__internal_8dec4052071533145810f12c11b89ee05c97cd79858e2ce5af8e1cd5dd4e2dea->enter($__internal_8dec4052071533145810f12c11b89ee05c97cd79858e2ce5af8e1cd5dd4e2dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_8dec4052071533145810f12c11b89ee05c97cd79858e2ce5af8e1cd5dd4e2dea->leave($__internal_8dec4052071533145810f12c11b89ee05c97cd79858e2ce5af8e1cd5dd4e2dea_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_094bcbfbc1650e16d9ecf19201b83c52b03da5a0255e58ea32da50f2a7e805ae = $this->env->getExtension("native_profiler");
        $__internal_094bcbfbc1650e16d9ecf19201b83c52b03da5a0255e58ea32da50f2a7e805ae->enter($__internal_094bcbfbc1650e16d9ecf19201b83c52b03da5a0255e58ea32da50f2a7e805ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_094bcbfbc1650e16d9ecf19201b83c52b03da5a0255e58ea32da50f2a7e805ae->leave($__internal_094bcbfbc1650e16d9ecf19201b83c52b03da5a0255e58ea32da50f2a7e805ae_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_732dcd3efe11f7dfc4b51871584a8ec28a8f7725c53559c02aa11cf9494cec4a = $this->env->getExtension("native_profiler");
        $__internal_732dcd3efe11f7dfc4b51871584a8ec28a8f7725c53559c02aa11cf9494cec4a->enter($__internal_732dcd3efe11f7dfc4b51871584a8ec28a8f7725c53559c02aa11cf9494cec4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.12.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_732dcd3efe11f7dfc4b51871584a8ec28a8f7725c53559c02aa11cf9494cec4a->leave($__internal_732dcd3efe11f7dfc4b51871584a8ec28a8f7725c53559c02aa11cf9494cec4a_prof);

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
        return array (  161 => 64,  156 => 63,  150 => 62,  97 => 15,  91 => 14,  82 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 66,  49 => 62,  47 => 14,  41 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
/* */
/* */
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery-1.12.3.js') }}"></script>*/
/*             <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
