<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6f3b27ecf9759616973033baa7db90b87d19b685dab5ad015aac5514749b6547 extends Twig_Template
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
        $__internal_fbeb3e01e753dda2e32aa5b07215a1105667a22985d53fae1fb7aee7219cdeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbeb3e01e753dda2e32aa5b07215a1105667a22985d53fae1fb7aee7219cdeb8->enter($__internal_fbeb3e01e753dda2e32aa5b07215a1105667a22985d53fae1fb7aee7219cdeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fbeb3e01e753dda2e32aa5b07215a1105667a22985d53fae1fb7aee7219cdeb8->leave($__internal_fbeb3e01e753dda2e32aa5b07215a1105667a22985d53fae1fb7aee7219cdeb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
