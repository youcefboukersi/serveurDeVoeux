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
        $__internal_28a288aa11725d0f709fb24b5f0e3143f7c10b5da444c1452f16463ff146c35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a288aa11725d0f709fb24b5f0e3143f7c10b5da444c1452f16463ff146c35f->enter($__internal_28a288aa11725d0f709fb24b5f0e3143f7c10b5da444c1452f16463ff146c35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_28a288aa11725d0f709fb24b5f0e3143f7c10b5da444c1452f16463ff146c35f->leave($__internal_28a288aa11725d0f709fb24b5f0e3143f7c10b5da444c1452f16463ff146c35f_prof);

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
