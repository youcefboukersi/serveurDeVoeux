<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdea25e688b7a672d3a5d647da5047328edc8fd0ad142c8b41c742a5be5aca5f extends Twig_Template
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
        $__internal_a74787e03ec9763f819b5f75eb7fbc300c27ed7e6f73658e643b5ccb6c50416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74787e03ec9763f819b5f75eb7fbc300c27ed7e6f73658e643b5ccb6c50416f->enter($__internal_a74787e03ec9763f819b5f75eb7fbc300c27ed7e6f73658e643b5ccb6c50416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a74787e03ec9763f819b5f75eb7fbc300c27ed7e6f73658e643b5ccb6c50416f->leave($__internal_a74787e03ec9763f819b5f75eb7fbc300c27ed7e6f73658e643b5ccb6c50416f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
