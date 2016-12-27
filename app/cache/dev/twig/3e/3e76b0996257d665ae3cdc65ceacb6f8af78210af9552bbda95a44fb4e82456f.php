<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_73a9564429fd9fc758bebce75f5271c9404f0ad246d7816a9c0e4bfe2b37f901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bd0cdfcbfd0728a2562bfb70b2c1d6e62cb74abc2084da40777617dea938853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd0cdfcbfd0728a2562bfb70b2c1d6e62cb74abc2084da40777617dea938853->enter($__internal_3bd0cdfcbfd0728a2562bfb70b2c1d6e62cb74abc2084da40777617dea938853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd0cdfcbfd0728a2562bfb70b2c1d6e62cb74abc2084da40777617dea938853->leave($__internal_3bd0cdfcbfd0728a2562bfb70b2c1d6e62cb74abc2084da40777617dea938853_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b844e3e7bdcf475106de2246001740d8b998c22eb87ee3ef76d58d9ba3def5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b844e3e7bdcf475106de2246001740d8b998c22eb87ee3ef76d58d9ba3def5d->enter($__internal_7b844e3e7bdcf475106de2246001740d8b998c22eb87ee3ef76d58d9ba3def5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_7b844e3e7bdcf475106de2246001740d8b998c22eb87ee3ef76d58d9ba3def5d->leave($__internal_7b844e3e7bdcf475106de2246001740d8b998c22eb87ee3ef76d58d9ba3def5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
