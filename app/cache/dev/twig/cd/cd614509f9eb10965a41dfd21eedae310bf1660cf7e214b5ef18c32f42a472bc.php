<?php

/* SRVDVServerBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_e2358764f4b53281b2d669d4773bf8362320a9fadcefae6abf8803f7f9c9c08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_292358c56c8b6d5e41e057ce379c94d59c147a7e778e43221e5150c0dfb2f911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292358c56c8b6d5e41e057ce379c94d59c147a7e778e43221e5150c0dfb2f911->enter($__internal_292358c56c8b6d5e41e057ce379c94d59c147a7e778e43221e5150c0dfb2f911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292358c56c8b6d5e41e057ce379c94d59c147a7e778e43221e5150c0dfb2f911->leave($__internal_292358c56c8b6d5e41e057ce379c94d59c147a7e778e43221e5150c0dfb2f911_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a742073daadaac2b1ec4190543bfbaeeb82c87c60746ca3f6bf13a2fe5f1479c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a742073daadaac2b1ec4190543bfbaeeb82c87c60746ca3f6bf13a2fe5f1479c->enter($__internal_a742073daadaac2b1ec4190543bfbaeeb82c87c60746ca3f6bf13a2fe5f1479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a742073daadaac2b1ec4190543bfbaeeb82c87c60746ca3f6bf13a2fe5f1479c->leave($__internal_a742073daadaac2b1ec4190543bfbaeeb82c87c60746ca3f6bf13a2fe5f1479c_prof);

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
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "SRVDVServerBundle:Resetting:checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
