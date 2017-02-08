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
        $__internal_b2618d9aee052cf5f51cfcfe88bc3af258fc7c15dd5e7052ce5b593206fab3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2618d9aee052cf5f51cfcfe88bc3af258fc7c15dd5e7052ce5b593206fab3e9->enter($__internal_b2618d9aee052cf5f51cfcfe88bc3af258fc7c15dd5e7052ce5b593206fab3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b2618d9aee052cf5f51cfcfe88bc3af258fc7c15dd5e7052ce5b593206fab3e9->leave($__internal_b2618d9aee052cf5f51cfcfe88bc3af258fc7c15dd5e7052ce5b593206fab3e9_prof);

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
