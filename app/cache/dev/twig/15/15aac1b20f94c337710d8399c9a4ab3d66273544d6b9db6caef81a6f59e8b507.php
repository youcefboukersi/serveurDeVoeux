<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_416423021e0c0c21ae6bc13ccd42e07299f7120db1c3726ee21b4d1a59182399 extends Twig_Template
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
        $__internal_04f0b4a2328b0b68d5d5d3477af74d28726301dd6e5960974e24583d201c4974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f0b4a2328b0b68d5d5d3477af74d28726301dd6e5960974e24583d201c4974->enter($__internal_04f0b4a2328b0b68d5d5d3477af74d28726301dd6e5960974e24583d201c4974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_04f0b4a2328b0b68d5d5d3477af74d28726301dd6e5960974e24583d201c4974->leave($__internal_04f0b4a2328b0b68d5d5d3477af74d28726301dd6e5960974e24583d201c4974_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
