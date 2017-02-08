<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f79b160fe11518f7c51e84295b45931b84ffd535b49cdcd0f1eb1342b0c48ffa extends Twig_Template
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
        $__internal_e4d4e38ba1de4596034c6f87dea71f15a7b6e68ed3657de884f72c7cd2765958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d4e38ba1de4596034c6f87dea71f15a7b6e68ed3657de884f72c7cd2765958->enter($__internal_e4d4e38ba1de4596034c6f87dea71f15a7b6e68ed3657de884f72c7cd2765958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e4d4e38ba1de4596034c6f87dea71f15a7b6e68ed3657de884f72c7cd2765958->leave($__internal_e4d4e38ba1de4596034c6f87dea71f15a7b6e68ed3657de884f72c7cd2765958_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
