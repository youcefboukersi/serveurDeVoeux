<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b3ec002464434b810de81b2532ca051e70dec6f3a60a800a506349e60d01247f extends Twig_Template
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
        $__internal_cc002f2a3a287cd112e6cc7886f58a1da64cb4479741cc51cf52155fc1c126d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc002f2a3a287cd112e6cc7886f58a1da64cb4479741cc51cf52155fc1c126d0->enter($__internal_cc002f2a3a287cd112e6cc7886f58a1da64cb4479741cc51cf52155fc1c126d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cc002f2a3a287cd112e6cc7886f58a1da64cb4479741cc51cf52155fc1c126d0->leave($__internal_cc002f2a3a287cd112e6cc7886f58a1da64cb4479741cc51cf52155fc1c126d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
