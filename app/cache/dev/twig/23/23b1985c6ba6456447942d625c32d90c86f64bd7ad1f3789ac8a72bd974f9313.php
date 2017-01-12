<?php

/* SRVDVServerBundle:Resetting:request.html.twig */
class __TwigTemplate_06866b2e88b3d65e96a20f92ac374f6e9457897e739bc2476cca07449436a7ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 1);
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
        $__internal_e388f7fe035cb60c159d3d3d9f5bddc6bb3f2fd683394d4080a8f79551527391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e388f7fe035cb60c159d3d3d9f5bddc6bb3f2fd683394d4080a8f79551527391->enter($__internal_e388f7fe035cb60c159d3d3d9f5bddc6bb3f2fd683394d4080a8f79551527391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e388f7fe035cb60c159d3d3d9f5bddc6bb3f2fd683394d4080a8f79551527391->leave($__internal_e388f7fe035cb60c159d3d3d9f5bddc6bb3f2fd683394d4080a8f79551527391_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f758b8419a8c6ed2322dbc86c11e2e897eb2b05c03ee45803e39c7bd260a0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f758b8419a8c6ed2322dbc86c11e2e897eb2b05c03ee45803e39c7bd260a0d1->enter($__internal_6f758b8419a8c6ed2322dbc86c11e2e897eb2b05c03ee45803e39c7bd260a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6f758b8419a8c6ed2322dbc86c11e2e897eb2b05c03ee45803e39c7bd260a0d1->leave($__internal_6f758b8419a8c6ed2322dbc86c11e2e897eb2b05c03ee45803e39c7bd260a0d1_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:request.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request.html.twig");
    }
}
