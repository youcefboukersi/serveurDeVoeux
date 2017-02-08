<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c274704d89eff83c69684b6e967c15d637dedc4ea3438206d2590e79efb04a0d extends Twig_Template
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
        $__internal_a08a03f9adf9a6fd5a7a784d82b51193386212ceb29382bae3da92bff692f0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08a03f9adf9a6fd5a7a784d82b51193386212ceb29382bae3da92bff692f0e1->enter($__internal_a08a03f9adf9a6fd5a7a784d82b51193386212ceb29382bae3da92bff692f0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a08a03f9adf9a6fd5a7a784d82b51193386212ceb29382bae3da92bff692f0e1->leave($__internal_a08a03f9adf9a6fd5a7a784d82b51193386212ceb29382bae3da92bff692f0e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
