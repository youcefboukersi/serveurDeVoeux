<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_92c32eca5509d6035d4d924ee192477e423a516f9fc2f05a224f6d167dca2876 extends Twig_Template
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
        $__internal_0f5a1b2e26421849720f192b7eba5e9f3e3671087271ddb02139fcf7b2d34197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5a1b2e26421849720f192b7eba5e9f3e3671087271ddb02139fcf7b2d34197->enter($__internal_0f5a1b2e26421849720f192b7eba5e9f3e3671087271ddb02139fcf7b2d34197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0f5a1b2e26421849720f192b7eba5e9f3e3671087271ddb02139fcf7b2d34197->leave($__internal_0f5a1b2e26421849720f192b7eba5e9f3e3671087271ddb02139fcf7b2d34197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
