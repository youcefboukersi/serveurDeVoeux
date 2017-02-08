<?php

/* SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_cc5e1b01fc1df7226c0cd070ce16494b5309799db0e92ec6b0686fe50f7e2fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_427b2103af503e2d064eda72eb2170cbc0d9451d901e6d89020b4dd84485e23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427b2103af503e2d064eda72eb2170cbc0d9451d901e6d89020b4dd84485e23f->enter($__internal_427b2103af503e2d064eda72eb2170cbc0d9451d901e6d89020b4dd84485e23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_427b2103af503e2d064eda72eb2170cbc0d9451d901e6d89020b4dd84485e23f->leave($__internal_427b2103af503e2d064eda72eb2170cbc0d9451d901e6d89020b4dd84485e23f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a24d1f4d23b1c9567019e7963a926731cf2799aaac26c9777756fc7f44d859c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a24d1f4d23b1c9567019e7963a926731cf2799aaac26c9777756fc7f44d859c->enter($__internal_3a24d1f4d23b1c9567019e7963a926731cf2799aaac26c9777756fc7f44d859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3a24d1f4d23b1c9567019e7963a926731cf2799aaac26c9777756fc7f44d859c->leave($__internal_3a24d1f4d23b1c9567019e7963a926731cf2799aaac26c9777756fc7f44d859c_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
