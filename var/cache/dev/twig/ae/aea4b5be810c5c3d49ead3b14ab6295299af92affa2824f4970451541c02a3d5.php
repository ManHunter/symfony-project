<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f1734be340bfefa6ee8bf20b66ee928bd76e79effac2ca3ea4a9f16fad37ed1c extends Twig_Template
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
        $__internal_d1b97dd4cf7e9886a8d88a408aee3b22e9f4ef9b601a4b06bd69eda2c57a2836 = $this->env->getExtension("native_profiler");
        $__internal_d1b97dd4cf7e9886a8d88a408aee3b22e9f4ef9b601a4b06bd69eda2c57a2836->enter($__internal_d1b97dd4cf7e9886a8d88a408aee3b22e9f4ef9b601a4b06bd69eda2c57a2836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d1b97dd4cf7e9886a8d88a408aee3b22e9f4ef9b601a4b06bd69eda2c57a2836->leave($__internal_d1b97dd4cf7e9886a8d88a408aee3b22e9f4ef9b601a4b06bd69eda2c57a2836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
