<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4045a5978bb8b027555fd0a600bbfffbd3d9a2166baecb662bd57a96e9beff8a extends Twig_Template
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
        $__internal_dbca580bd9bebf446d0a37d5a4ae609c772257ffaec8ebaa805b8a6eb98b2ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbca580bd9bebf446d0a37d5a4ae609c772257ffaec8ebaa805b8a6eb98b2ee7->enter($__internal_dbca580bd9bebf446d0a37d5a4ae609c772257ffaec8ebaa805b8a6eb98b2ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dbca580bd9bebf446d0a37d5a4ae609c772257ffaec8ebaa805b8a6eb98b2ee7->leave($__internal_dbca580bd9bebf446d0a37d5a4ae609c772257ffaec8ebaa805b8a6eb98b2ee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
