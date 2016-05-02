<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_67a8ee7aab9cb2acf784d474f11e0610151742ca85e673ab7ed08a088f86730a extends Twig_Template
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
        $__internal_cbdf28046eb079ce9c3cb77740341530ec8136c2271c67c02fd01de1721cb06e = $this->env->getExtension("native_profiler");
        $__internal_cbdf28046eb079ce9c3cb77740341530ec8136c2271c67c02fd01de1721cb06e->enter($__internal_cbdf28046eb079ce9c3cb77740341530ec8136c2271c67c02fd01de1721cb06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cbdf28046eb079ce9c3cb77740341530ec8136c2271c67c02fd01de1721cb06e->leave($__internal_cbdf28046eb079ce9c3cb77740341530ec8136c2271c67c02fd01de1721cb06e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
