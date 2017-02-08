<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f45a8644ead52c2fa8768ad0194da56902e8a9dd10aeee891b52591506382767 extends Twig_Template
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
        $__internal_7b07ff3da658606f6e83e04f3ca190821e34aad71229baafd4992dfac5356a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b07ff3da658606f6e83e04f3ca190821e34aad71229baafd4992dfac5356a23->enter($__internal_7b07ff3da658606f6e83e04f3ca190821e34aad71229baafd4992dfac5356a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7b07ff3da658606f6e83e04f3ca190821e34aad71229baafd4992dfac5356a23->leave($__internal_7b07ff3da658606f6e83e04f3ca190821e34aad71229baafd4992dfac5356a23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
