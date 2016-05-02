<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_30dac6fe4b2eee9f3ff0cc73ae6273e975ff75bc7cf84f7315f96e18132cba85 extends Twig_Template
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
        $__internal_9d7fbabe3e2ea3f00adbe04bc4b0ecaeb673368cf166bce1c3a21332356326ad = $this->env->getExtension("native_profiler");
        $__internal_9d7fbabe3e2ea3f00adbe04bc4b0ecaeb673368cf166bce1c3a21332356326ad->enter($__internal_9d7fbabe3e2ea3f00adbe04bc4b0ecaeb673368cf166bce1c3a21332356326ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9d7fbabe3e2ea3f00adbe04bc4b0ecaeb673368cf166bce1c3a21332356326ad->leave($__internal_9d7fbabe3e2ea3f00adbe04bc4b0ecaeb673368cf166bce1c3a21332356326ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
