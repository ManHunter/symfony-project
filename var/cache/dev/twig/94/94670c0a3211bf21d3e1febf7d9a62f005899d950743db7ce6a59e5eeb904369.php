<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d620544f533371bd42b9013e7855efd7f6fe36c0cb45f4a0249c135162702d9b extends Twig_Template
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
        $__internal_e800fa53d4305dd7431aa73c54c81f745b01d3c2380a6e1e214558d1d87d7bff = $this->env->getExtension("native_profiler");
        $__internal_e800fa53d4305dd7431aa73c54c81f745b01d3c2380a6e1e214558d1d87d7bff->enter($__internal_e800fa53d4305dd7431aa73c54c81f745b01d3c2380a6e1e214558d1d87d7bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e800fa53d4305dd7431aa73c54c81f745b01d3c2380a6e1e214558d1d87d7bff->leave($__internal_e800fa53d4305dd7431aa73c54c81f745b01d3c2380a6e1e214558d1d87d7bff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
