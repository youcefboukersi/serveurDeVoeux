<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bb22a38efb4cf5a4268f50572363c22f75f67939ac6bcef7daa1b793d1ef1b2c extends Twig_Template
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
        $__internal_4806f68fcf7b1ef7da5b05a4980e26c73f9e4c782d3decc868e3252387d0d797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4806f68fcf7b1ef7da5b05a4980e26c73f9e4c782d3decc868e3252387d0d797->enter($__internal_4806f68fcf7b1ef7da5b05a4980e26c73f9e4c782d3decc868e3252387d0d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4806f68fcf7b1ef7da5b05a4980e26c73f9e4c782d3decc868e3252387d0d797->leave($__internal_4806f68fcf7b1ef7da5b05a4980e26c73f9e4c782d3decc868e3252387d0d797_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
