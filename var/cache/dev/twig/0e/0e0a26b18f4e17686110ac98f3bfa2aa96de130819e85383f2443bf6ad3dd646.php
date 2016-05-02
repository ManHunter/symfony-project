<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fea66981539a6543769ee20fdd5a16441a196e79be9b18b0cfb167cd5298f08f extends Twig_Template
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
        $__internal_217d35c35adb5e6be8f527dd95c063bbeab5c4d3c337760724be0b6ab613c635 = $this->env->getExtension("native_profiler");
        $__internal_217d35c35adb5e6be8f527dd95c063bbeab5c4d3c337760724be0b6ab613c635->enter($__internal_217d35c35adb5e6be8f527dd95c063bbeab5c4d3c337760724be0b6ab613c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_217d35c35adb5e6be8f527dd95c063bbeab5c4d3c337760724be0b6ab613c635->leave($__internal_217d35c35adb5e6be8f527dd95c063bbeab5c4d3c337760724be0b6ab613c635_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
