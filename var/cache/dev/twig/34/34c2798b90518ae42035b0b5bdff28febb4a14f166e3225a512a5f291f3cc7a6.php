<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_21c2f64c43e303594c9de1a46652bb6b8957de26a073a5a42f3c7777eda7194f extends Twig_Template
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
        $__internal_b6be09b96780e1cc4feffe63034ec58633a4450b47b71750214426f2f8139caf = $this->env->getExtension("native_profiler");
        $__internal_b6be09b96780e1cc4feffe63034ec58633a4450b47b71750214426f2f8139caf->enter($__internal_b6be09b96780e1cc4feffe63034ec58633a4450b47b71750214426f2f8139caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b6be09b96780e1cc4feffe63034ec58633a4450b47b71750214426f2f8139caf->leave($__internal_b6be09b96780e1cc4feffe63034ec58633a4450b47b71750214426f2f8139caf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
