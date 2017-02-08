<?php

/* SRVDVServerBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_84c5079b69d61450235d3742230dcc4f48491ec05aa0686b675753527f338a6f extends Twig_Template
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
        $__internal_79aed214b4203487c734ad42afef5bb1d49b0cae419b13c51d3d6b7725e1c276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aed214b4203487c734ad42afef5bb1d49b0cae419b13c51d3d6b7725e1c276->enter($__internal_79aed214b4203487c734ad42afef5bb1d49b0cae419b13c51d3d6b7725e1c276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79aed214b4203487c734ad42afef5bb1d49b0cae419b13c51d3d6b7725e1c276->leave($__internal_79aed214b4203487c734ad42afef5bb1d49b0cae419b13c51d3d6b7725e1c276_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c62e43790b87455f04e01201d8e02ff3551b6e532f0494cf6ac957f079d69cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c62e43790b87455f04e01201d8e02ff3551b6e532f0494cf6ac957f079d69cd->enter($__internal_1c62e43790b87455f04e01201d8e02ff3551b6e532f0494cf6ac957f079d69cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  <p>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
  </p>
";
        
        $__internal_1c62e43790b87455f04e01201d8e02ff3551b6e532f0494cf6ac957f079d69cd->leave($__internal_1c62e43790b87455f04e01201d8e02ff3551b6e532f0494cf6ac957f079d69cd_prof);

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
", "SRVDVServerBundle:Resetting:checkEmail.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
