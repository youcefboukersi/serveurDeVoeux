<?php

/* @SRVDVServer/Resetting/request.html.twig */
class __TwigTemplate_3bf28a31e96035473232e8699d55ee260c033e4acb1a6d1ae92914ae4903d7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e47c19fed4089dbd541a4ef7700678ae2bf1aad4c01ef8bee08dc5bec2eb20c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47c19fed4089dbd541a4ef7700678ae2bf1aad4c01ef8bee08dc5bec2eb20c7->enter($__internal_e47c19fed4089dbd541a4ef7700678ae2bf1aad4c01ef8bee08dc5bec2eb20c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e47c19fed4089dbd541a4ef7700678ae2bf1aad4c01ef8bee08dc5bec2eb20c7->leave($__internal_e47c19fed4089dbd541a4ef7700678ae2bf1aad4c01ef8bee08dc5bec2eb20c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da4b84077807eefaafd73052ab6c15d850ea0f4dede853fd674c6f638aab178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4b84077807eefaafd73052ab6c15d850ea0f4dede853fd674c6f638aab178f->enter($__internal_da4b84077807eefaafd73052ab6c15d850ea0f4dede853fd674c6f638aab178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:request_content.html.twig", "@SRVDVServer/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_da4b84077807eefaafd73052ab6c15d850ea0f4dede853fd674c6f638aab178f->leave($__internal_da4b84077807eefaafd73052ab6c15d850ea0f4dede853fd674c6f638aab178f_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% block fos_user_content %}
    {% include \"SRVDVServerBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Resetting/request.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
