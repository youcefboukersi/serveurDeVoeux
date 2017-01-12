<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a2780f9991b34b1329d497f2a9d2c15a18ed16cebda9f9e203dbb41dc4890e2c extends Twig_Template
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
        $__internal_71804b08b35e0526949c7cf04a5fea5a01be0baec2ec3c22c1962e22e7d10f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71804b08b35e0526949c7cf04a5fea5a01be0baec2ec3c22c1962e22e7d10f08->enter($__internal_71804b08b35e0526949c7cf04a5fea5a01be0baec2ec3c22c1962e22e7d10f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_71804b08b35e0526949c7cf04a5fea5a01be0baec2ec3c22c1962e22e7d10f08->leave($__internal_71804b08b35e0526949c7cf04a5fea5a01be0baec2ec3c22c1962e22e7d10f08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
