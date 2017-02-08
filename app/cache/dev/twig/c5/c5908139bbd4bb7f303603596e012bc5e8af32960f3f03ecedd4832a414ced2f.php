<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8cba92828a9367a971c1ed3d8f60555ce4a11aab26e6fd50b05eb287c93a8031 extends Twig_Template
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
        $__internal_e42f7d2e45682ebe7b8581f252fd48e77e67041e6cde1e7904a0ea825e482112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42f7d2e45682ebe7b8581f252fd48e77e67041e6cde1e7904a0ea825e482112->enter($__internal_e42f7d2e45682ebe7b8581f252fd48e77e67041e6cde1e7904a0ea825e482112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e42f7d2e45682ebe7b8581f252fd48e77e67041e6cde1e7904a0ea825e482112->leave($__internal_e42f7d2e45682ebe7b8581f252fd48e77e67041e6cde1e7904a0ea825e482112_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
