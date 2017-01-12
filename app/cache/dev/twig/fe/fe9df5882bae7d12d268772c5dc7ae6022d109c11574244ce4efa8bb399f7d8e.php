<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4f7a0dfd32a976883299b59f8017bf94386823652b90143b7a25440a0ae2b144 extends Twig_Template
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
        $__internal_24d691683994bb591d702f7828f2e6287d75f3ddcf2680327210ab5b42fd7f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d691683994bb591d702f7828f2e6287d75f3ddcf2680327210ab5b42fd7f7e->enter($__internal_24d691683994bb591d702f7828f2e6287d75f3ddcf2680327210ab5b42fd7f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_24d691683994bb591d702f7828f2e6287d75f3ddcf2680327210ab5b42fd7f7e->leave($__internal_24d691683994bb591d702f7828f2e6287d75f3ddcf2680327210ab5b42fd7f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
