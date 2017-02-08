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
        $__internal_bc06710f7be6a2905103ef98799e1090601de99583135ec7645d9208c030dbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc06710f7be6a2905103ef98799e1090601de99583135ec7645d9208c030dbc3->enter($__internal_bc06710f7be6a2905103ef98799e1090601de99583135ec7645d9208c030dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_bc06710f7be6a2905103ef98799e1090601de99583135ec7645d9208c030dbc3->leave($__internal_bc06710f7be6a2905103ef98799e1090601de99583135ec7645d9208c030dbc3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55caaeaf7b8b776233cd0b456eee2c06ca4878acc14851817d0c282e4dd82450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55caaeaf7b8b776233cd0b456eee2c06ca4878acc14851817d0c282e4dd82450->enter($__internal_55caaeaf7b8b776233cd0b456eee2c06ca4878acc14851817d0c282e4dd82450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "SRVDVServerBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_55caaeaf7b8b776233cd0b456eee2c06ca4878acc14851817d0c282e4dd82450->leave($__internal_55caaeaf7b8b776233cd0b456eee2c06ca4878acc14851817d0c282e4dd82450_prof);

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
