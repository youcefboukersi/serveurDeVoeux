<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a5ec3bd28f405310194078c0079806b09f13e9c1dc61fbe5e51b35f534716123 extends Twig_Template
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
        $__internal_1ccb35a981bd35ad42e8e94e2cb77652181c1e02f8157992d5736efc32e54a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccb35a981bd35ad42e8e94e2cb77652181c1e02f8157992d5736efc32e54a61->enter($__internal_1ccb35a981bd35ad42e8e94e2cb77652181c1e02f8157992d5736efc32e54a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1ccb35a981bd35ad42e8e94e2cb77652181c1e02f8157992d5736efc32e54a61->leave($__internal_1ccb35a981bd35ad42e8e94e2cb77652181c1e02f8157992d5736efc32e54a61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
