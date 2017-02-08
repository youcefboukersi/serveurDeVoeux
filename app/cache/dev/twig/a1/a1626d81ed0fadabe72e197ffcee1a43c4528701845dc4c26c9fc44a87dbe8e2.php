<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_15bccf85e1f5058207078b56b5a96d6df4bca8dfd4d14d084de24b45acfc743e extends Twig_Template
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
        $__internal_3776c579075f397b552906a3f9f0c192ac58e32cdca729f089a8ebbea50d8fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3776c579075f397b552906a3f9f0c192ac58e32cdca729f089a8ebbea50d8fa0->enter($__internal_3776c579075f397b552906a3f9f0c192ac58e32cdca729f089a8ebbea50d8fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3776c579075f397b552906a3f9f0c192ac58e32cdca729f089a8ebbea50d8fa0->leave($__internal_3776c579075f397b552906a3f9f0c192ac58e32cdca729f089a8ebbea50d8fa0_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
