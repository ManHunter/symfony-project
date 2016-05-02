<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c8a117ca7dcb6f781aef2f1817a6e74c9dcb16f4a0e36ca67bc7f1ae315d2913 extends Twig_Template
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
        $__internal_c90cb9d573479e44ce30219c3f1c64f1ee7e1e4666a974de682afea3154dd264 = $this->env->getExtension("native_profiler");
        $__internal_c90cb9d573479e44ce30219c3f1c64f1ee7e1e4666a974de682afea3154dd264->enter($__internal_c90cb9d573479e44ce30219c3f1c64f1ee7e1e4666a974de682afea3154dd264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c90cb9d573479e44ce30219c3f1c64f1ee7e1e4666a974de682afea3154dd264->leave($__internal_c90cb9d573479e44ce30219c3f1c64f1ee7e1e4666a974de682afea3154dd264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
