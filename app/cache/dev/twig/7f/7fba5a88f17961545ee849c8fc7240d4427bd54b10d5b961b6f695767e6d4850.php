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
        $__internal_ad023d0e8d9cea9b745ea4c4ed46771d684a9915ffb08e52ca40d50b8cd90975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad023d0e8d9cea9b745ea4c4ed46771d684a9915ffb08e52ca40d50b8cd90975->enter($__internal_ad023d0e8d9cea9b745ea4c4ed46771d684a9915ffb08e52ca40d50b8cd90975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad023d0e8d9cea9b745ea4c4ed46771d684a9915ffb08e52ca40d50b8cd90975->leave($__internal_ad023d0e8d9cea9b745ea4c4ed46771d684a9915ffb08e52ca40d50b8cd90975_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa1139c3eea180718ba595f7ab986d59d7883f797a13451aeae6d8e3e65e0f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1139c3eea180718ba595f7ab986d59d7883f797a13451aeae6d8e3e65e0f21->enter($__internal_aa1139c3eea180718ba595f7ab986d59d7883f797a13451aeae6d8e3e65e0f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  <p>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
  </p>
";
        
        $__internal_aa1139c3eea180718ba595f7ab986d59d7883f797a13451aeae6d8e3e65e0f21->leave($__internal_aa1139c3eea180718ba595f7ab986d59d7883f797a13451aeae6d8e3e65e0f21_prof);

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
