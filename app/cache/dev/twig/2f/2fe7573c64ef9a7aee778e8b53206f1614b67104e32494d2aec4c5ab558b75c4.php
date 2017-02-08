<?php

/* @SRVDVServer/Registration/checkEmail.html.twig */
class __TwigTemplate_6de77560ba9ddf8eb108bd3e9e46537c6d34b799008c07018cc34f0af2df400c extends Twig_Template
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
        $__internal_dc9d40b4f20bd6ee236650b3f0cb8a587d4ce322378ce3a510c5aafaa2b409a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d40b4f20bd6ee236650b3f0cb8a587d4ce322378ce3a510c5aafaa2b409a0->enter($__internal_dc9d40b4f20bd6ee236650b3f0cb8a587d4ce322378ce3a510c5aafaa2b409a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9d40b4f20bd6ee236650b3f0cb8a587d4ce322378ce3a510c5aafaa2b409a0->leave($__internal_dc9d40b4f20bd6ee236650b3f0cb8a587d4ce322378ce3a510c5aafaa2b409a0_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd9683d1dcfc358a194493e6bc1697975f5e8b2406b0d89680f0a0309e453da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9683d1dcfc358a194493e6bc1697975f5e8b2406b0d89680f0a0309e453da2->enter($__internal_cd9683d1dcfc358a194493e6bc1697975f5e8b2406b0d89680f0a0309e453da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cd9683d1dcfc358a194493e6bc1697975f5e8b2406b0d89680f0a0309e453da2->leave($__internal_cd9683d1dcfc358a194493e6bc1697975f5e8b2406b0d89680f0a0309e453da2_prof);

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
", "@SRVDVServer/Registration/checkEmail.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
