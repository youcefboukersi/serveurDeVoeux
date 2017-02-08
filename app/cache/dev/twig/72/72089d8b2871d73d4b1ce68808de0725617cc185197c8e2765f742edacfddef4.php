<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6b57701f1811cbc3d6900cc62e0fd1ba0bd30c4cc280021da04f2ec16920b831 extends Twig_Template
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
        $__internal_f5f83867f811dc2d896aff6214d85e11cb51f4e0fb6ed97ac32f5ecbcd8f00e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f83867f811dc2d896aff6214d85e11cb51f4e0fb6ed97ac32f5ecbcd8f00e0->enter($__internal_f5f83867f811dc2d896aff6214d85e11cb51f4e0fb6ed97ac32f5ecbcd8f00e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f5f83867f811dc2d896aff6214d85e11cb51f4e0fb6ed97ac32f5ecbcd8f00e0->leave($__internal_f5f83867f811dc2d896aff6214d85e11cb51f4e0fb6ed97ac32f5ecbcd8f00e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
