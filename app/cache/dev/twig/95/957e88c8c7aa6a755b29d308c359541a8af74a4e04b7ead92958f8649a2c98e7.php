<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3a8f4dfaa0008d9b5f702c0ca83a7fcf6c9de6489d0d89ab341cad33c6260df4 extends Twig_Template
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
        $__internal_acc4e5618346dbcd5b7126d38c963bf1ee9a7a825acd79c69251a6adf48d20cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc4e5618346dbcd5b7126d38c963bf1ee9a7a825acd79c69251a6adf48d20cc->enter($__internal_acc4e5618346dbcd5b7126d38c963bf1ee9a7a825acd79c69251a6adf48d20cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_acc4e5618346dbcd5b7126d38c963bf1ee9a7a825acd79c69251a6adf48d20cc->leave($__internal_acc4e5618346dbcd5b7126d38c963bf1ee9a7a825acd79c69251a6adf48d20cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
