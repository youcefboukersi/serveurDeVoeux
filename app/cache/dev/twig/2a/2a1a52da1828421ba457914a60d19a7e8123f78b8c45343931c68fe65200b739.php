<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_015dc8e0d2f6af065e29d8f450795a40516241e6ae768afa1ce97b769d833afb extends Twig_Template
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
        $__internal_fdd505f15d144e7accb7dd44c2a87c9b8c168f72a24f88ccefd8c1837b1fb61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd505f15d144e7accb7dd44c2a87c9b8c168f72a24f88ccefd8c1837b1fb61b->enter($__internal_fdd505f15d144e7accb7dd44c2a87c9b8c168f72a24f88ccefd8c1837b1fb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fdd505f15d144e7accb7dd44c2a87c9b8c168f72a24f88ccefd8c1837b1fb61b->leave($__internal_fdd505f15d144e7accb7dd44c2a87c9b8c168f72a24f88ccefd8c1837b1fb61b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
