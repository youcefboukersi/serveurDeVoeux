<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4e3cdcc2d689080c65603f17c3b4f0f8f7c69166bca1dc5bcb15af779428dd84 extends Twig_Template
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
        $__internal_f90c35db2b7ea8396ce6e2dd943601d0d2d67efa9d028f25c6aef4b38e212703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90c35db2b7ea8396ce6e2dd943601d0d2d67efa9d028f25c6aef4b38e212703->enter($__internal_f90c35db2b7ea8396ce6e2dd943601d0d2d67efa9d028f25c6aef4b38e212703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f90c35db2b7ea8396ce6e2dd943601d0d2d67efa9d028f25c6aef4b38e212703->leave($__internal_f90c35db2b7ea8396ce6e2dd943601d0d2d67efa9d028f25c6aef4b38e212703_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
