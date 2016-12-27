<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_81a4d286b069e2353a78f674e33664a29e1b50aa38944cf3295b72093ec3d492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_a0f3afc3e113d70fd2193f6611aad32e7872df5f42d72cc72dc8cfa8c546dcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f3afc3e113d70fd2193f6611aad32e7872df5f42d72cc72dc8cfa8c546dcae->enter($__internal_a0f3afc3e113d70fd2193f6611aad32e7872df5f42d72cc72dc8cfa8c546dcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f3afc3e113d70fd2193f6611aad32e7872df5f42d72cc72dc8cfa8c546dcae->leave($__internal_a0f3afc3e113d70fd2193f6611aad32e7872df5f42d72cc72dc8cfa8c546dcae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9c0ae7bc78249abf98e19b0089d853f5b9bd8bd97bed88b5651046ec1d8aebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c0ae7bc78249abf98e19b0089d853f5b9bd8bd97bed88b5651046ec1d8aebc->enter($__internal_f9c0ae7bc78249abf98e19b0089d853f5b9bd8bd97bed88b5651046ec1d8aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f9c0ae7bc78249abf98e19b0089d853f5b9bd8bd97bed88b5651046ec1d8aebc->leave($__internal_f9c0ae7bc78249abf98e19b0089d853f5b9bd8bd97bed88b5651046ec1d8aebc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
", "FOSUserBundle:Registration:checkEmail.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
