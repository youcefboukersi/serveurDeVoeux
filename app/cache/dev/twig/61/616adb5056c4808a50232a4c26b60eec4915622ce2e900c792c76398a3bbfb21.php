<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_7cacce55d13d7e045106fd5ff3c247ba13995a554a7e8410d8972eb7dfb4700a extends Twig_Template
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
        $__internal_f00b794e8143a46115f512cbc9466da058e416914111ce769cb58e01b12e4cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00b794e8143a46115f512cbc9466da058e416914111ce769cb58e01b12e4cbe->enter($__internal_f00b794e8143a46115f512cbc9466da058e416914111ce769cb58e01b12e4cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f00b794e8143a46115f512cbc9466da058e416914111ce769cb58e01b12e4cbe->leave($__internal_f00b794e8143a46115f512cbc9466da058e416914111ce769cb58e01b12e4cbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
