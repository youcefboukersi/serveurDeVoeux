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
        $__internal_0473e1080910189275b7bdf779a7d6d43f671f47f959afec6e820c85136891ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0473e1080910189275b7bdf779a7d6d43f671f47f959afec6e820c85136891ad->enter($__internal_0473e1080910189275b7bdf779a7d6d43f671f47f959afec6e820c85136891ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0473e1080910189275b7bdf779a7d6d43f671f47f959afec6e820c85136891ad->leave($__internal_0473e1080910189275b7bdf779a7d6d43f671f47f959afec6e820c85136891ad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb4a6ca1f7fd0482d7b51e6d229b8f5871dd0d86f983e288502bf829b8804022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4a6ca1f7fd0482d7b51e6d229b8f5871dd0d86f983e288502bf829b8804022->enter($__internal_eb4a6ca1f7fd0482d7b51e6d229b8f5871dd0d86f983e288502bf829b8804022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  <p>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
  </p>
";
        
        $__internal_eb4a6ca1f7fd0482d7b51e6d229b8f5871dd0d86f983e288502bf829b8804022->leave($__internal_eb4a6ca1f7fd0482d7b51e6d229b8f5871dd0d86f983e288502bf829b8804022_prof);

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
