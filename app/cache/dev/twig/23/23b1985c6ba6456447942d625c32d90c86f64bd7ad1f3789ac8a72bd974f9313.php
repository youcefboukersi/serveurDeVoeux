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
        $__internal_9feb6a175dff684122c7a1cad40c3fa5deccde246d028f7d372179384b78cc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feb6a175dff684122c7a1cad40c3fa5deccde246d028f7d372179384b78cc7d->enter($__internal_9feb6a175dff684122c7a1cad40c3fa5deccde246d028f7d372179384b78cc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9feb6a175dff684122c7a1cad40c3fa5deccde246d028f7d372179384b78cc7d->leave($__internal_9feb6a175dff684122c7a1cad40c3fa5deccde246d028f7d372179384b78cc7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c1de62b061fe668358cbed31ccce7539fbc0bb304c68bbfb3fff2217ba8a1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1de62b061fe668358cbed31ccce7539fbc0bb304c68bbfb3fff2217ba8a1b9->enter($__internal_7c1de62b061fe668358cbed31ccce7539fbc0bb304c68bbfb3fff2217ba8a1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7c1de62b061fe668358cbed31ccce7539fbc0bb304c68bbfb3fff2217ba8a1b9->leave($__internal_7c1de62b061fe668358cbed31ccce7539fbc0bb304c68bbfb3fff2217ba8a1b9_prof);

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
