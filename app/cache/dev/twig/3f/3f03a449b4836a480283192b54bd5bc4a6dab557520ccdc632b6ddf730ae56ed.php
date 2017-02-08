<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_719e89091b23b34a3c5f90e7cde68d3fc851161343bbf231edebcf5bca96780c extends Twig_Template
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
        $__internal_8ead3bbf7a62a534f3edbf581cd57c4b9961dc4b630a9dcd344740e016c708d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ead3bbf7a62a534f3edbf581cd57c4b9961dc4b630a9dcd344740e016c708d5->enter($__internal_8ead3bbf7a62a534f3edbf581cd57c4b9961dc4b630a9dcd344740e016c708d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8ead3bbf7a62a534f3edbf581cd57c4b9961dc4b630a9dcd344740e016c708d5->leave($__internal_8ead3bbf7a62a534f3edbf581cd57c4b9961dc4b630a9dcd344740e016c708d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
