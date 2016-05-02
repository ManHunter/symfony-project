<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f200f0e09688520eb1d37cda46d2633d4b3ec080f0201b833d19e07e012d043f extends Twig_Template
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
        $__internal_a56a2dd83d2b3ce0a6877509fa166cb013952d6cadae12b99c03ca47a7c1de72 = $this->env->getExtension("native_profiler");
        $__internal_a56a2dd83d2b3ce0a6877509fa166cb013952d6cadae12b99c03ca47a7c1de72->enter($__internal_a56a2dd83d2b3ce0a6877509fa166cb013952d6cadae12b99c03ca47a7c1de72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a56a2dd83d2b3ce0a6877509fa166cb013952d6cadae12b99c03ca47a7c1de72->leave($__internal_a56a2dd83d2b3ce0a6877509fa166cb013952d6cadae12b99c03ca47a7c1de72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
