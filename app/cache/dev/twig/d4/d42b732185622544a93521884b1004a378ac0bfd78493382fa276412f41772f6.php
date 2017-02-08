<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ac07ce52b1182a9f96360c5f7b72485fd65fd0f7f643e41b0c03c20cefa82a66 extends Twig_Template
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
        $__internal_b7a0ae4529c7bc34c0ca2eab59b481713dd6eeb82bcd26c73dda9a3746e6678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a0ae4529c7bc34c0ca2eab59b481713dd6eeb82bcd26c73dda9a3746e6678e->enter($__internal_b7a0ae4529c7bc34c0ca2eab59b481713dd6eeb82bcd26c73dda9a3746e6678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7a0ae4529c7bc34c0ca2eab59b481713dd6eeb82bcd26c73dda9a3746e6678e->leave($__internal_b7a0ae4529c7bc34c0ca2eab59b481713dd6eeb82bcd26c73dda9a3746e6678e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
