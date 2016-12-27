<?php

/* @SRVDVServer/Registration/checkEmail.html.twig */
class __TwigTemplate_be459f761e6044372c43eee08196c537ade59716717bb6a0a4433aeec25a1156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SRVDVServer/Registration/checkEmail.html.twig", 1);
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
        $__internal_5d8936271c09f0677d5a301da6f83a37c43584738db71eb957c81c5bcf0e5ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8936271c09f0677d5a301da6f83a37c43584738db71eb957c81c5bcf0e5ef2->enter($__internal_5d8936271c09f0677d5a301da6f83a37c43584738db71eb957c81c5bcf0e5ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d8936271c09f0677d5a301da6f83a37c43584738db71eb957c81c5bcf0e5ef2->leave($__internal_5d8936271c09f0677d5a301da6f83a37c43584738db71eb957c81c5bcf0e5ef2_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_888337a8f9eb9395ccaacb5e9e9d1927bdc3c3aa8fae3a5b9609d25bf3b05e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888337a8f9eb9395ccaacb5e9e9d1927bdc3c3aa8fae3a5b9609d25bf3b05e08->enter($__internal_888337a8f9eb9395ccaacb5e9e9d1927bdc3c3aa8fae3a5b9609d25bf3b05e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_888337a8f9eb9395ccaacb5e9e9d1927bdc3c3aa8fae3a5b9609d25bf3b05e08->leave($__internal_888337a8f9eb9395ccaacb5e9e9d1927bdc3c3aa8fae3a5b9609d25bf3b05e08_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 6,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@SRVDVServer/Registration/checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
