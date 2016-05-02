<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_16bcd449b027c860bed329a189460dfb751e246f8381a269c7ac4e49e151b66e extends Twig_Template
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
        $__internal_bb2ded1a88b67b8896b9d63583ed518dc3b207730076ce73f4d46ce2f5f97e49 = $this->env->getExtension("native_profiler");
        $__internal_bb2ded1a88b67b8896b9d63583ed518dc3b207730076ce73f4d46ce2f5f97e49->enter($__internal_bb2ded1a88b67b8896b9d63583ed518dc3b207730076ce73f4d46ce2f5f97e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bb2ded1a88b67b8896b9d63583ed518dc3b207730076ce73f4d46ce2f5f97e49->leave($__internal_bb2ded1a88b67b8896b9d63583ed518dc3b207730076ce73f4d46ce2f5f97e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
