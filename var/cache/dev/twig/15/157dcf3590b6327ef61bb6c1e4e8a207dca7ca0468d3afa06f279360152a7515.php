<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0571daf3134fe9d81089a9a60da1dca22e949365ab313448c9d06ea51a72bb01 extends Twig_Template
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
        $__internal_e6f5b1735cc45ab10dbd0d0193136199f3904b9c3dca03ded11d072a07841e2e = $this->env->getExtension("native_profiler");
        $__internal_e6f5b1735cc45ab10dbd0d0193136199f3904b9c3dca03ded11d072a07841e2e->enter($__internal_e6f5b1735cc45ab10dbd0d0193136199f3904b9c3dca03ded11d072a07841e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e6f5b1735cc45ab10dbd0d0193136199f3904b9c3dca03ded11d072a07841e2e->leave($__internal_e6f5b1735cc45ab10dbd0d0193136199f3904b9c3dca03ded11d072a07841e2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
