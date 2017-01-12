<?php

/* @SRVDVServer/Resetting/checkEmail.html.twig */
class __TwigTemplate_cfe4aba37c93054ad7048f61c5c65bfea20f176dee173414e42e5ac57a2252d2 extends Twig_Template
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
        $__internal_63b7d13344a8d0d1d22c4361718b466c6af61e450c26d2e914e53eca434e7df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b7d13344a8d0d1d22c4361718b466c6af61e450c26d2e914e53eca434e7df7->enter($__internal_63b7d13344a8d0d1d22c4361718b466c6af61e450c26d2e914e53eca434e7df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b7d13344a8d0d1d22c4361718b466c6af61e450c26d2e914e53eca434e7df7->leave($__internal_63b7d13344a8d0d1d22c4361718b466c6af61e450c26d2e914e53eca434e7df7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fd294add5c3a11c2eaebcb463d39f720114ec71d330bd05ad79f06bb5ac264c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd294add5c3a11c2eaebcb463d39f720114ec71d330bd05ad79f06bb5ac264c->enter($__internal_5fd294add5c3a11c2eaebcb463d39f720114ec71d330bd05ad79f06bb5ac264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5fd294add5c3a11c2eaebcb463d39f720114ec71d330bd05ad79f06bb5ac264c->leave($__internal_5fd294add5c3a11c2eaebcb463d39f720114ec71d330bd05ad79f06bb5ac264c_prof);

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
", "@SRVDVServer/Resetting/checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
