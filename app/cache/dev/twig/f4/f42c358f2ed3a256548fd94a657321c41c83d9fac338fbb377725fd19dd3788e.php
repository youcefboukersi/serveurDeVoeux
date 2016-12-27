<?php

/* SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_97e9e28557809a18bdbb154ea1cd32f7292260a94c35252d1bfa2349917df75d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_cbb8b5986b61c3613a88a96db655f2721f2852ff474dcbfd6d9868468a7e4503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb8b5986b61c3613a88a96db655f2721f2852ff474dcbfd6d9868468a7e4503->enter($__internal_cbb8b5986b61c3613a88a96db655f2721f2852ff474dcbfd6d9868468a7e4503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb8b5986b61c3613a88a96db655f2721f2852ff474dcbfd6d9868468a7e4503->leave($__internal_cbb8b5986b61c3613a88a96db655f2721f2852ff474dcbfd6d9868468a7e4503_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fb80bbb9c1cbe13fa0a860229f3710334609b1fa910422f12f22d228e000d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb80bbb9c1cbe13fa0a860229f3710334609b1fa910422f12f22d228e000d8c->enter($__internal_9fb80bbb9c1cbe13fa0a860229f3710334609b1fa910422f12f22d228e000d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9fb80bbb9c1cbe13fa0a860229f3710334609b1fa910422f12f22d228e000d8c->leave($__internal_9fb80bbb9c1cbe13fa0a860229f3710334609b1fa910422f12f22d228e000d8c_prof);

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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
