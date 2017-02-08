<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9bd386ed99645d4b6e12180737b05fbbf73bf74b512fac759f1734dbb8d8ac8b extends Twig_Template
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
        $__internal_30128896eaaac61135d9f9e37dcc3e4748902ae449ee4308a206851cf49c350b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30128896eaaac61135d9f9e37dcc3e4748902ae449ee4308a206851cf49c350b->enter($__internal_30128896eaaac61135d9f9e37dcc3e4748902ae449ee4308a206851cf49c350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_30128896eaaac61135d9f9e37dcc3e4748902ae449ee4308a206851cf49c350b->leave($__internal_30128896eaaac61135d9f9e37dcc3e4748902ae449ee4308a206851cf49c350b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
