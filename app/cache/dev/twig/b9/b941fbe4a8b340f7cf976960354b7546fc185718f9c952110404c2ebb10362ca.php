<?php

/* SRVDVServerBundle:Resetting:reset.html.twig */
class __TwigTemplate_908870486c6b08f07e0350f23035333883d2ab7f0c1a0d2ddbd16063c9ef73b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e26d9548fb5d19d099d700601a43037f006c86fbbd42d1e079a3a70fc8e33e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26d9548fb5d19d099d700601a43037f006c86fbbd42d1e079a3a70fc8e33e43->enter($__internal_e26d9548fb5d19d099d700601a43037f006c86fbbd42d1e079a3a70fc8e33e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26d9548fb5d19d099d700601a43037f006c86fbbd42d1e079a3a70fc8e33e43->leave($__internal_e26d9548fb5d19d099d700601a43037f006c86fbbd42d1e079a3a70fc8e33e43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d194d33f98bbce0113eea0932da025f969d0e0672dad2c86bfed4bc4516fd392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d194d33f98bbce0113eea0932da025f969d0e0672dad2c86bfed4bc4516fd392->enter($__internal_d194d33f98bbce0113eea0932da025f969d0e0672dad2c86bfed4bc4516fd392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:reset_content.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d194d33f98bbce0113eea0932da025f969d0e0672dad2c86bfed4bc4516fd392->leave($__internal_d194d33f98bbce0113eea0932da025f969d0e0672dad2c86bfed4bc4516fd392_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:reset.html.twig";
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
    {% include \"SRVDVServerBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/reset.html.twig");
    }
}
