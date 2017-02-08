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
        $__internal_059bf9fe1d2d4f4809f44c00ab9d709881c6a97b3079ff38b7337c7adc3ec08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059bf9fe1d2d4f4809f44c00ab9d709881c6a97b3079ff38b7337c7adc3ec08a->enter($__internal_059bf9fe1d2d4f4809f44c00ab9d709881c6a97b3079ff38b7337c7adc3ec08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_059bf9fe1d2d4f4809f44c00ab9d709881c6a97b3079ff38b7337c7adc3ec08a->leave($__internal_059bf9fe1d2d4f4809f44c00ab9d709881c6a97b3079ff38b7337c7adc3ec08a_prof);

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
