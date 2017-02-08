<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b70208f127813febc1eaf7e2760bdcfc04f0262164e73a22b4849240eabf5524 extends Twig_Template
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
        $__internal_8356e15ce318ca074230c0b3d6efef8204624c706490cde1828a55b270b1dcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8356e15ce318ca074230c0b3d6efef8204624c706490cde1828a55b270b1dcc9->enter($__internal_8356e15ce318ca074230c0b3d6efef8204624c706490cde1828a55b270b1dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8356e15ce318ca074230c0b3d6efef8204624c706490cde1828a55b270b1dcc9->leave($__internal_8356e15ce318ca074230c0b3d6efef8204624c706490cde1828a55b270b1dcc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
