<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cfb767c3c8a5b15277439e6b60b843f7dc06237ee763046990240357f75d2f66 extends Twig_Template
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
        $__internal_171a25771814bf14165148a8b3b2c1aede7e99cc005a1eb46555a8f1ee4f8bf5 = $this->env->getExtension("native_profiler");
        $__internal_171a25771814bf14165148a8b3b2c1aede7e99cc005a1eb46555a8f1ee4f8bf5->enter($__internal_171a25771814bf14165148a8b3b2c1aede7e99cc005a1eb46555a8f1ee4f8bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_171a25771814bf14165148a8b3b2c1aede7e99cc005a1eb46555a8f1ee4f8bf5->leave($__internal_171a25771814bf14165148a8b3b2c1aede7e99cc005a1eb46555a8f1ee4f8bf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
