<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_150021762a6c91e36e1462dfd434b3e759322c71d58d88d9da5d171e2339fcca extends Twig_Template
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
        $__internal_5cf67cf7b07ba53eb39b7f403d988e26ce6d9bd4c0b4ab6c8f10a4835d9e95c1 = $this->env->getExtension("native_profiler");
        $__internal_5cf67cf7b07ba53eb39b7f403d988e26ce6d9bd4c0b4ab6c8f10a4835d9e95c1->enter($__internal_5cf67cf7b07ba53eb39b7f403d988e26ce6d9bd4c0b4ab6c8f10a4835d9e95c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5cf67cf7b07ba53eb39b7f403d988e26ce6d9bd4c0b4ab6c8f10a4835d9e95c1->leave($__internal_5cf67cf7b07ba53eb39b7f403d988e26ce6d9bd4c0b4ab6c8f10a4835d9e95c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
