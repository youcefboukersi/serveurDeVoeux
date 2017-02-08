<?php

/* SRVDVServerBundle:Registration:register.html.twig */
class __TwigTemplate_851c9f51edb5f5e3047e5eeb9bf573fb3dcee84edf8df72fc20dac67e8b9f400 extends Twig_Template
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
        $__internal_9719af0b8663cf53a6d219a6766d21569ad7296b41430db4ae30606532dd1185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9719af0b8663cf53a6d219a6766d21569ad7296b41430db4ae30606532dd1185->enter($__internal_9719af0b8663cf53a6d219a6766d21569ad7296b41430db4ae30606532dd1185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9719af0b8663cf53a6d219a6766d21569ad7296b41430db4ae30606532dd1185->leave($__internal_9719af0b8663cf53a6d219a6766d21569ad7296b41430db4ae30606532dd1185_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9306ea0d8b068de7ede4963ece12af0927cb8fb4244b9757e07f0e90c82bd71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9306ea0d8b068de7ede4963ece12af0927cb8fb4244b9757e07f0e90c82bd71f->enter($__internal_9306ea0d8b068de7ede4963ece12af0927cb8fb4244b9757e07f0e90c82bd71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "SRVDVServerBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_9306ea0d8b068de7ede4963ece12af0927cb8fb4244b9757e07f0e90c82bd71f->leave($__internal_9306ea0d8b068de7ede4963ece12af0927cb8fb4244b9757e07f0e90c82bd71f_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:register.html.twig";
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
    {% include \"SRVDVServerBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Registration:register.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register.html.twig");
    }
}
