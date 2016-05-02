<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_420ed91070896c2f3c3efb1e4afe0886c739b19e1fb993992e32ea5ceaa7b43f extends Twig_Template
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
        $__internal_a9bb3371a8ca579c081ad3e0be1ca819484bdc1f6d3f6d221951f6d4df2c8120 = $this->env->getExtension("native_profiler");
        $__internal_a9bb3371a8ca579c081ad3e0be1ca819484bdc1f6d3f6d221951f6d4df2c8120->enter($__internal_a9bb3371a8ca579c081ad3e0be1ca819484bdc1f6d3f6d221951f6d4df2c8120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a9bb3371a8ca579c081ad3e0be1ca819484bdc1f6d3f6d221951f6d4df2c8120->leave($__internal_a9bb3371a8ca579c081ad3e0be1ca819484bdc1f6d3f6d221951f6d4df2c8120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
