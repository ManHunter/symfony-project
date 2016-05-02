<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cdcb5ba9454c901f2d3ddef7177268d5c013a0dd3fa5a1aa2d01be3bf081812a extends Twig_Template
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
        $__internal_22109d59171ccb3f3ae25820028d95b019f0b13c24efea79716aeff7e6e3c099 = $this->env->getExtension("native_profiler");
        $__internal_22109d59171ccb3f3ae25820028d95b019f0b13c24efea79716aeff7e6e3c099->enter($__internal_22109d59171ccb3f3ae25820028d95b019f0b13c24efea79716aeff7e6e3c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_22109d59171ccb3f3ae25820028d95b019f0b13c24efea79716aeff7e6e3c099->leave($__internal_22109d59171ccb3f3ae25820028d95b019f0b13c24efea79716aeff7e6e3c099_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
