<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_01a1a109c85fb7109d1f68b9fcc37254b33965b6fee538afc899b18cc0bf6dba extends Twig_Template
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
        $__internal_645046ae109f511b458098b6bbe50c4a0b7e1f8a8c391ae8aa5dacf172ee470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645046ae109f511b458098b6bbe50c4a0b7e1f8a8c391ae8aa5dacf172ee470c->enter($__internal_645046ae109f511b458098b6bbe50c4a0b7e1f8a8c391ae8aa5dacf172ee470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_645046ae109f511b458098b6bbe50c4a0b7e1f8a8c391ae8aa5dacf172ee470c->leave($__internal_645046ae109f511b458098b6bbe50c4a0b7e1f8a8c391ae8aa5dacf172ee470c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
