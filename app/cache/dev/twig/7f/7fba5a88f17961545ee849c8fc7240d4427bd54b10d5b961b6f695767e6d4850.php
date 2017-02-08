<?php

/* @SRVDVServer/Resetting/checkEmail.html.twig */
class __TwigTemplate_26512bc814520a04383050d3ffa257b8e0af4c701b157aa6e7dbf901d5d9ce10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/checkEmail.html.twig", 1);
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
        $__internal_45ca4f106860f02c5726bf5246d8fa76eab32d7f5dcd82f754ff53bef0595b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ca4f106860f02c5726bf5246d8fa76eab32d7f5dcd82f754ff53bef0595b7c->enter($__internal_45ca4f106860f02c5726bf5246d8fa76eab32d7f5dcd82f754ff53bef0595b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ca4f106860f02c5726bf5246d8fa76eab32d7f5dcd82f754ff53bef0595b7c->leave($__internal_45ca4f106860f02c5726bf5246d8fa76eab32d7f5dcd82f754ff53bef0595b7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1170c44139a1d8f9f54578d1bd44b3d6623603cdf32e66d2d063b487f7f1b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1170c44139a1d8f9f54578d1bd44b3d6623603cdf32e66d2d063b487f7f1b85->enter($__internal_c1170c44139a1d8f9f54578d1bd44b3d6623603cdf32e66d2d063b487f7f1b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  <p>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
  </p>
";
        
        $__internal_c1170c44139a1d8f9f54578d1bd44b3d6623603cdf32e66d2d063b487f7f1b85->leave($__internal_c1170c44139a1d8f9f54578d1bd44b3d6623603cdf32e66d2d063b487f7f1b85_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/checkEmail.html.twig";
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
", "@SRVDVServer/Resetting/checkEmail.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
