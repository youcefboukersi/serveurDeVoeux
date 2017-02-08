<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2f05e29fe5684b76fb2494a0d8a1b88bb9f7f6efbd6f5244afa6ce25f80b0dfc extends Twig_Template
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
        $__internal_719483dcfe2eb5410c1e873e94cc6891daf9ee11dc1058b60d2130150012d2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719483dcfe2eb5410c1e873e94cc6891daf9ee11dc1058b60d2130150012d2ef->enter($__internal_719483dcfe2eb5410c1e873e94cc6891daf9ee11dc1058b60d2130150012d2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_719483dcfe2eb5410c1e873e94cc6891daf9ee11dc1058b60d2130150012d2ef->leave($__internal_719483dcfe2eb5410c1e873e94cc6891daf9ee11dc1058b60d2130150012d2ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
