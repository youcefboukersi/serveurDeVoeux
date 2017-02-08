<?php

/* @SRVDVServer/ChangePassword/changePassword.html.twig */
class __TwigTemplate_83f26a377d28d38cad9ec349abab2a1b9ed95a51c5fe03d4851534914c813fee extends Twig_Template
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
        $__internal_454e974bcc9dacda9c7d7691a6f6eeed5aaf8f2ac7c8cd0227be91dc5d5c0318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454e974bcc9dacda9c7d7691a6f6eeed5aaf8f2ac7c8cd0227be91dc5d5c0318->enter($__internal_454e974bcc9dacda9c7d7691a6f6eeed5aaf8f2ac7c8cd0227be91dc5d5c0318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_454e974bcc9dacda9c7d7691a6f6eeed5aaf8f2ac7c8cd0227be91dc5d5c0318->leave($__internal_454e974bcc9dacda9c7d7691a6f6eeed5aaf8f2ac7c8cd0227be91dc5d5c0318_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beb5279c6fd1bdca8e0d9322c406ed91c291bc06aa2bcc4a1f217d749fb250d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb5279c6fd1bdca8e0d9322c406ed91c291bc06aa2bcc4a1f217d749fb250d2->enter($__internal_beb5279c6fd1bdca8e0d9322c406ed91c291bc06aa2bcc4a1f217d749fb250d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_beb5279c6fd1bdca8e0d9322c406ed91c291bc06aa2bcc4a1f217d749fb250d2->leave($__internal_beb5279c6fd1bdca8e0d9322c406ed91c291bc06aa2bcc4a1f217d749fb250d2_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/ChangePassword/changePassword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
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
    {% include \"SRVDVServerBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/ChangePassword/changePassword.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
