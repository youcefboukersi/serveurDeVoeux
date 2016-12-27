<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3acf69e8799e8939b3a3199e16a18edfecfc10f3a8d20993d9163c3446062f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8499afaf80c9968b58513bd459a50b3bd644414f9ca313a48fd2354d71459f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8499afaf80c9968b58513bd459a50b3bd644414f9ca313a48fd2354d71459f03->enter($__internal_8499afaf80c9968b58513bd459a50b3bd644414f9ca313a48fd2354d71459f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8499afaf80c9968b58513bd459a50b3bd644414f9ca313a48fd2354d71459f03->leave($__internal_8499afaf80c9968b58513bd459a50b3bd644414f9ca313a48fd2354d71459f03_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59164f427ccc93ded531cb46dcf1bcf68eb8c8331ee32de776abf9ed2e59b01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59164f427ccc93ded531cb46dcf1bcf68eb8c8331ee32de776abf9ed2e59b01b->enter($__internal_59164f427ccc93ded531cb46dcf1bcf68eb8c8331ee32de776abf9ed2e59b01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_59164f427ccc93ded531cb46dcf1bcf68eb8c8331ee32de776abf9ed2e59b01b->leave($__internal_59164f427ccc93ded531cb46dcf1bcf68eb8c8331ee32de776abf9ed2e59b01b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register.html.twig");
    }
}
