<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_de47bf9fd8976c3847ab0ca8625d28dd7b0a8a9b8b8ba6615ff8c6d7aeb56b92 extends Twig_Template
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
        $__internal_d70981ab3d2f57c8ea4cd17b2b5cab4aa86c93567f47e02f4935ed6830131d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70981ab3d2f57c8ea4cd17b2b5cab4aa86c93567f47e02f4935ed6830131d1b->enter($__internal_d70981ab3d2f57c8ea4cd17b2b5cab4aa86c93567f47e02f4935ed6830131d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d70981ab3d2f57c8ea4cd17b2b5cab4aa86c93567f47e02f4935ed6830131d1b->leave($__internal_d70981ab3d2f57c8ea4cd17b2b5cab4aa86c93567f47e02f4935ed6830131d1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
