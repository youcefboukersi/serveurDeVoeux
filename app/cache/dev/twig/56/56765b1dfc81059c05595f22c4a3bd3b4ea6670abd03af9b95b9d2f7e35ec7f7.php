<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_553a6b4337a4c8dea8eb61c9f49e00050d298850d2afd6770acb5f77bf56eeb6 extends Twig_Template
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
        $__internal_f07731b4f736bb2e702c4a8c2d3f5b6e6ffc3dba1a77c7aa7e297421c65c1fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07731b4f736bb2e702c4a8c2d3f5b6e6ffc3dba1a77c7aa7e297421c65c1fc7->enter($__internal_f07731b4f736bb2e702c4a8c2d3f5b6e6ffc3dba1a77c7aa7e297421c65c1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f07731b4f736bb2e702c4a8c2d3f5b6e6ffc3dba1a77c7aa7e297421c65c1fc7->leave($__internal_f07731b4f736bb2e702c4a8c2d3f5b6e6ffc3dba1a77c7aa7e297421c65c1fc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
