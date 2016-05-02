<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0c51f926b125d21f01552bcde9856428d9556d3e9a4803251f7e486956da11c4 extends Twig_Template
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
        $__internal_e12aca81dc16781a489a44b80608b16fdc9727d31c0bed0338c5bf402ec828d5 = $this->env->getExtension("native_profiler");
        $__internal_e12aca81dc16781a489a44b80608b16fdc9727d31c0bed0338c5bf402ec828d5->enter($__internal_e12aca81dc16781a489a44b80608b16fdc9727d31c0bed0338c5bf402ec828d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e12aca81dc16781a489a44b80608b16fdc9727d31c0bed0338c5bf402ec828d5->leave($__internal_e12aca81dc16781a489a44b80608b16fdc9727d31c0bed0338c5bf402ec828d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
