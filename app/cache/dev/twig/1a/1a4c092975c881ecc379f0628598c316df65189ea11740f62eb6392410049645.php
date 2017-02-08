<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6ff460d35af7512a394020cbca8cfc32d28eb631149058fd76658ac002819597 extends Twig_Template
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
        $__internal_294f136fa7f1da70b50f7443686965c653348502c4a5663baf578799363ddfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294f136fa7f1da70b50f7443686965c653348502c4a5663baf578799363ddfd6->enter($__internal_294f136fa7f1da70b50f7443686965c653348502c4a5663baf578799363ddfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_294f136fa7f1da70b50f7443686965c653348502c4a5663baf578799363ddfd6->leave($__internal_294f136fa7f1da70b50f7443686965c653348502c4a5663baf578799363ddfd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
