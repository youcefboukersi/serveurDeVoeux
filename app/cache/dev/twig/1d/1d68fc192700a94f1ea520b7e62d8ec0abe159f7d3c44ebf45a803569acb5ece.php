<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_39fe9da5d32113afe62178549bce54d0cb3e21762bcfbb75ff9c926adea2e68b extends Twig_Template
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
        $__internal_b15a1bf1165df8701d60dff1ebb31d982f51a68a195bf1149241ac9a3b588f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15a1bf1165df8701d60dff1ebb31d982f51a68a195bf1149241ac9a3b588f45->enter($__internal_b15a1bf1165df8701d60dff1ebb31d982f51a68a195bf1149241ac9a3b588f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b15a1bf1165df8701d60dff1ebb31d982f51a68a195bf1149241ac9a3b588f45->leave($__internal_b15a1bf1165df8701d60dff1ebb31d982f51a68a195bf1149241ac9a3b588f45_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
