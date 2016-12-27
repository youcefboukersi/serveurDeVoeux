<?php

/* SRVDVServerBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_e2358764f4b53281b2d669d4773bf8362320a9fadcefae6abf8803f7f9c9c08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_df8e4632aa882d239796f02c33c590b986918c715ff6e71ef597415f59b2e09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8e4632aa882d239796f02c33c590b986918c715ff6e71ef597415f59b2e09f->enter($__internal_df8e4632aa882d239796f02c33c590b986918c715ff6e71ef597415f59b2e09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8e4632aa882d239796f02c33c590b986918c715ff6e71ef597415f59b2e09f->leave($__internal_df8e4632aa882d239796f02c33c590b986918c715ff6e71ef597415f59b2e09f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c60df59fd3929dafc1dbaf6f5484bd6df529c3dbc752f8611a74c82b054bb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c60df59fd3929dafc1dbaf6f5484bd6df529c3dbc752f8611a74c82b054bb01->enter($__internal_1c60df59fd3929dafc1dbaf6f5484bd6df529c3dbc752f8611a74c82b054bb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1c60df59fd3929dafc1dbaf6f5484bd6df529c3dbc752f8611a74c82b054bb01->leave($__internal_1c60df59fd3929dafc1dbaf6f5484bd6df529c3dbc752f8611a74c82b054bb01_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "SRVDVServerBundle:Resetting:checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
