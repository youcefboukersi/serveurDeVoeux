<?php

/* SRVDVServerBundle:Profile:show_content.html.twig */
class __TwigTemplate_1b9353a37a0b3d28fb0b4cde131b46b9ad338e01bf49b45cb97d8f8690c7f74e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_874c020174914da8268e098d651897b8f67a0cee8b5f56df16613534b0ac15ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874c020174914da8268e098d651897b8f67a0cee8b5f56df16613534b0ac15ce->enter($__internal_874c020174914da8268e098d651897b8f67a0cee8b5f56df16613534b0ac15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_874c020174914da8268e098d651897b8f67a0cee8b5f56df16613534b0ac15ce->leave($__internal_874c020174914da8268e098d651897b8f67a0cee8b5f56df16613534b0ac15ce_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "SRVDVServerBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/show_content.html.twig");
    }
}
