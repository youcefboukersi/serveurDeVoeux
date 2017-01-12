<?php

/* SRVDVServerBundle:Default:accueil.html.twig */
class __TwigTemplate_d644855f0ef8273d6240f624b6362b95e52f0133af66e5c163b6cbaced2f3f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SRVDVServerBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d3fdf0a4198304370a29da9eb47dfcdf1eec3c1fe46bb8aacde13b7776eecea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3fdf0a4198304370a29da9eb47dfcdf1eec3c1fe46bb8aacde13b7776eecea->enter($__internal_9d3fdf0a4198304370a29da9eb47dfcdf1eec3c1fe46bb8aacde13b7776eecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3fdf0a4198304370a29da9eb47dfcdf1eec3c1fe46bb8aacde13b7776eecea->leave($__internal_9d3fdf0a4198304370a29da9eb47dfcdf1eec3c1fe46bb8aacde13b7776eecea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33c6beb879d5f0db438fab8eeeea76539ce6b2a3ac54d6035af19febfa24a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33c6beb879d5f0db438fab8eeeea76539ce6b2a3ac54d6035af19febfa24a9e->enter($__internal_a33c6beb879d5f0db438fab8eeeea76539ce6b2a3ac54d6035af19febfa24a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Hello ";
        // line 4
        echo twig_escape_filter($this->env, ($context["somme"] ?? $this->getContext($context, "somme")), "html", null, true);
        echo "!
";
        
        $__internal_a33c6beb879d5f0db438fab8eeeea76539ce6b2a3ac54d6035af19febfa24a9e->leave($__internal_a33c6beb879d5f0db438fab8eeeea76539ce6b2a3ac54d6035af19febfa24a9e_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}
{% block body%}

Hello {{ somme }}!
{% endblock %}

", "SRVDVServerBundle:Default:accueil.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Default/accueil.html.twig");
    }
}
