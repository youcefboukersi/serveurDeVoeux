<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_33cc7927161325eea4db414192a369404ecef2a838f4c48e95378509149f6bed extends Twig_Template
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
        $__internal_070e6c27bc266fff7d5ad2662705cdfe49da6cc6f732976b702a3b9639bf33b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070e6c27bc266fff7d5ad2662705cdfe49da6cc6f732976b702a3b9639bf33b6->enter($__internal_070e6c27bc266fff7d5ad2662705cdfe49da6cc6f732976b702a3b9639bf33b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_070e6c27bc266fff7d5ad2662705cdfe49da6cc6f732976b702a3b9639bf33b6->leave($__internal_070e6c27bc266fff7d5ad2662705cdfe49da6cc6f732976b702a3b9639bf33b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
