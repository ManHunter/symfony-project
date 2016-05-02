<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0d5f4bcb8fc36cb22a27a02c832c54ae554e2468bc6ce731dd5bd3520c335b30 extends Twig_Template
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
        $__internal_73d7f94619e5909016ea4188db9ae14b64bd4d75a6085d308b652564bf748c52 = $this->env->getExtension("native_profiler");
        $__internal_73d7f94619e5909016ea4188db9ae14b64bd4d75a6085d308b652564bf748c52->enter($__internal_73d7f94619e5909016ea4188db9ae14b64bd4d75a6085d308b652564bf748c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_73d7f94619e5909016ea4188db9ae14b64bd4d75a6085d308b652564bf748c52->leave($__internal_73d7f94619e5909016ea4188db9ae14b64bd4d75a6085d308b652564bf748c52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
