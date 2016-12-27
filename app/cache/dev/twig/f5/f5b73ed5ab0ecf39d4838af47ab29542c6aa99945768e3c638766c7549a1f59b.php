<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6a08dd6b2a2dc5ad511ab85f8222e85c5c3b9a4e8f640cfd79ba201943257032 extends Twig_Template
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
        $__internal_4913e9e8c8fa37b825617f7a7998e1ce20faece86fcd7704c58c1e72b8c8c24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4913e9e8c8fa37b825617f7a7998e1ce20faece86fcd7704c58c1e72b8c8c24f->enter($__internal_4913e9e8c8fa37b825617f7a7998e1ce20faece86fcd7704c58c1e72b8c8c24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4913e9e8c8fa37b825617f7a7998e1ce20faece86fcd7704c58c1e72b8c8c24f->leave($__internal_4913e9e8c8fa37b825617f7a7998e1ce20faece86fcd7704c58c1e72b8c8c24f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
