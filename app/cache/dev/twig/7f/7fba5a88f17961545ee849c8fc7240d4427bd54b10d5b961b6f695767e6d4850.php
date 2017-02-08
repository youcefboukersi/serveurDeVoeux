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
        $__internal_6308c976601aff37853a7454c1f6b54dd810334860be17362e488781e3f3078a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6308c976601aff37853a7454c1f6b54dd810334860be17362e488781e3f3078a->enter($__internal_6308c976601aff37853a7454c1f6b54dd810334860be17362e488781e3f3078a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6308c976601aff37853a7454c1f6b54dd810334860be17362e488781e3f3078a->leave($__internal_6308c976601aff37853a7454c1f6b54dd810334860be17362e488781e3f3078a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c71a0aa4c7babbb04fba8390d35ece8a1602db53f6e9b49377b6c9a969350f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c71a0aa4c7babbb04fba8390d35ece8a1602db53f6e9b49377b6c9a969350f5->enter($__internal_8c71a0aa4c7babbb04fba8390d35ece8a1602db53f6e9b49377b6c9a969350f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  <p>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
  </p>
";
        
        $__internal_8c71a0aa4c7babbb04fba8390d35ece8a1602db53f6e9b49377b6c9a969350f5->leave($__internal_8c71a0aa4c7babbb04fba8390d35ece8a1602db53f6e9b49377b6c9a969350f5_prof);

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
