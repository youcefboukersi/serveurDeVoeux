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
        $__internal_63c0deae8d6ff7fbc68696dc58b302655307a3021e0ca2c52f31c2be7e437c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c0deae8d6ff7fbc68696dc58b302655307a3021e0ca2c52f31c2be7e437c87->enter($__internal_63c0deae8d6ff7fbc68696dc58b302655307a3021e0ca2c52f31c2be7e437c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_63c0deae8d6ff7fbc68696dc58b302655307a3021e0ca2c52f31c2be7e437c87->leave($__internal_63c0deae8d6ff7fbc68696dc58b302655307a3021e0ca2c52f31c2be7e437c87_prof);

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
