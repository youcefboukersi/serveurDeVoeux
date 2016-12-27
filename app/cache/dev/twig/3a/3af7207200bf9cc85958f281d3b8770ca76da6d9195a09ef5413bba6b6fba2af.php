<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6b64a58d320d8444451b35ac39b7fb920d5a3f2f69219f3e447dd71c50973ed2 extends Twig_Template
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
        $__internal_eda1ee3eac6fa4f1cfcb89be1d75c2ff8978ccb8104d7b9033beeb722c4453f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda1ee3eac6fa4f1cfcb89be1d75c2ff8978ccb8104d7b9033beeb722c4453f3->enter($__internal_eda1ee3eac6fa4f1cfcb89be1d75c2ff8978ccb8104d7b9033beeb722c4453f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_eda1ee3eac6fa4f1cfcb89be1d75c2ff8978ccb8104d7b9033beeb722c4453f3->leave($__internal_eda1ee3eac6fa4f1cfcb89be1d75c2ff8978ccb8104d7b9033beeb722c4453f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
