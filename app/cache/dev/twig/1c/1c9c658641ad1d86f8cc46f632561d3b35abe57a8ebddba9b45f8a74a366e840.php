<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a96eab1ed8c373e7f8adfe3b9b7d4f8abb2c93b0e3602a875f2a2b2d1ac6e407 extends Twig_Template
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
        $__internal_c7e38222a933b71841e32e6a0410f7bd9b94fc0eae3f4523e96d8c7230fce2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e38222a933b71841e32e6a0410f7bd9b94fc0eae3f4523e96d8c7230fce2cd->enter($__internal_c7e38222a933b71841e32e6a0410f7bd9b94fc0eae3f4523e96d8c7230fce2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c7e38222a933b71841e32e6a0410f7bd9b94fc0eae3f4523e96d8c7230fce2cd->leave($__internal_c7e38222a933b71841e32e6a0410f7bd9b94fc0eae3f4523e96d8c7230fce2cd_prof);

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
", "@Framework/Form/button_row.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
