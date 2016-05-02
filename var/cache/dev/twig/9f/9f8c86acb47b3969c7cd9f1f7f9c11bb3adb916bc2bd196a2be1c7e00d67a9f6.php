<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1071b5c58d7ac3ca260d62b187e6385fda0a263484ff464986c208be251935b9 extends Twig_Template
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
        $__internal_c4a93361a0d82b649c2151c4a6ee2743952c8924879d2ab47e005c3f4c7e7920 = $this->env->getExtension("native_profiler");
        $__internal_c4a93361a0d82b649c2151c4a6ee2743952c8924879d2ab47e005c3f4c7e7920->enter($__internal_c4a93361a0d82b649c2151c4a6ee2743952c8924879d2ab47e005c3f4c7e7920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c4a93361a0d82b649c2151c4a6ee2743952c8924879d2ab47e005c3f4c7e7920->leave($__internal_c4a93361a0d82b649c2151c4a6ee2743952c8924879d2ab47e005c3f4c7e7920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
