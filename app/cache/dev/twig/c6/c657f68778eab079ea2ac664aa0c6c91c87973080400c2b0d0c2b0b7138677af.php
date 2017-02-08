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
        $__internal_6e0e20d45cd926e4eb906f0bf0b622fc33404cffb37d2421c197844080093507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0e20d45cd926e4eb906f0bf0b622fc33404cffb37d2421c197844080093507->enter($__internal_6e0e20d45cd926e4eb906f0bf0b622fc33404cffb37d2421c197844080093507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0e20d45cd926e4eb906f0bf0b622fc33404cffb37d2421c197844080093507->leave($__internal_6e0e20d45cd926e4eb906f0bf0b622fc33404cffb37d2421c197844080093507_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49521a2b4e5120b1c06c6df53c681d0f27c745842b6ed4918e8331bdde7b563d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49521a2b4e5120b1c06c6df53c681d0f27c745842b6ed4918e8331bdde7b563d->enter($__internal_49521a2b4e5120b1c06c6df53c681d0f27c745842b6ed4918e8331bdde7b563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:request_content.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_49521a2b4e5120b1c06c6df53c681d0f27c745842b6ed4918e8331bdde7b563d->leave($__internal_49521a2b4e5120b1c06c6df53c681d0f27c745842b6ed4918e8331bdde7b563d_prof);

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
