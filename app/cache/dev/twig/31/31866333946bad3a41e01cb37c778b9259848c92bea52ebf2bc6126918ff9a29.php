<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1113bfcdf72bbd5d185bf42ea9e5a1a0b4be0e2c9228eb8d20b6e1e0c03877f5 extends Twig_Template
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
        $__internal_efdc9f73b99cba0fd299e9bb5f68fcfc2b9f7c12bdbcbb287a5aa5880ecf4256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdc9f73b99cba0fd299e9bb5f68fcfc2b9f7c12bdbcbb287a5aa5880ecf4256->enter($__internal_efdc9f73b99cba0fd299e9bb5f68fcfc2b9f7c12bdbcbb287a5aa5880ecf4256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_efdc9f73b99cba0fd299e9bb5f68fcfc2b9f7c12bdbcbb287a5aa5880ecf4256->leave($__internal_efdc9f73b99cba0fd299e9bb5f68fcfc2b9f7c12bdbcbb287a5aa5880ecf4256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
