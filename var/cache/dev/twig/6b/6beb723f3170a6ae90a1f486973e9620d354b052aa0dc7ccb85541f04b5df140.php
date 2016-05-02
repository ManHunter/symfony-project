<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fe4649f1323499d5be6c204b43fcdea6f140451d90b8f0e32e74e2b4d8e2c916 extends Twig_Template
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
        $__internal_b4bbeb707f91e8f805cd6ed9a906c813a85556164f4426df94219aed99086b10 = $this->env->getExtension("native_profiler");
        $__internal_b4bbeb707f91e8f805cd6ed9a906c813a85556164f4426df94219aed99086b10->enter($__internal_b4bbeb707f91e8f805cd6ed9a906c813a85556164f4426df94219aed99086b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b4bbeb707f91e8f805cd6ed9a906c813a85556164f4426df94219aed99086b10->leave($__internal_b4bbeb707f91e8f805cd6ed9a906c813a85556164f4426df94219aed99086b10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
