<?php

/* SRVDVServerBundle:Resetting:request.html.twig */
class __TwigTemplate_1b6d0c0cc5838676d2a6cceba06da2157716920b9662afb0c8d79aca8f4892ec extends Twig_Template
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
        $__internal_dd25c60f933cbccd6449c01c9cffc5275c06047619f8b0e8b53155231fd1a471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd25c60f933cbccd6449c01c9cffc5275c06047619f8b0e8b53155231fd1a471->enter($__internal_dd25c60f933cbccd6449c01c9cffc5275c06047619f8b0e8b53155231fd1a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd25c60f933cbccd6449c01c9cffc5275c06047619f8b0e8b53155231fd1a471->leave($__internal_dd25c60f933cbccd6449c01c9cffc5275c06047619f8b0e8b53155231fd1a471_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfd64a3a379c4856a2ac66046f260fa72ac10c66c2db5dcaf59971f49ae990a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd64a3a379c4856a2ac66046f260fa72ac10c66c2db5dcaf59971f49ae990a8->enter($__internal_bfd64a3a379c4856a2ac66046f260fa72ac10c66c2db5dcaf59971f49ae990a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:request_content.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bfd64a3a379c4856a2ac66046f260fa72ac10c66c2db5dcaf59971f49ae990a8->leave($__internal_bfd64a3a379c4856a2ac66046f260fa72ac10c66c2db5dcaf59971f49ae990a8_prof);

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
    {% include \"SRVDVServerBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request.html.twig");
    }
}
