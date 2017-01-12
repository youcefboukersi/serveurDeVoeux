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
        $__internal_66a76cdba78e00ab50da20922afa5e9a42b360f7a41fecf80c1c0ce9cc62e4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a76cdba78e00ab50da20922afa5e9a42b360f7a41fecf80c1c0ce9cc62e4e0->enter($__internal_66a76cdba78e00ab50da20922afa5e9a42b360f7a41fecf80c1c0ce9cc62e4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a76cdba78e00ab50da20922afa5e9a42b360f7a41fecf80c1c0ce9cc62e4e0->leave($__internal_66a76cdba78e00ab50da20922afa5e9a42b360f7a41fecf80c1c0ce9cc62e4e0_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5c5f413aa8fda3e49a8dc1e84df9ded9b175b76c03ba8f4df9e080261342280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c5f413aa8fda3e49a8dc1e84df9ded9b175b76c03ba8f4df9e080261342280->enter($__internal_a5c5f413aa8fda3e49a8dc1e84df9ded9b175b76c03ba8f4df9e080261342280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a5c5f413aa8fda3e49a8dc1e84df9ded9b175b76c03ba8f4df9e080261342280->leave($__internal_a5c5f413aa8fda3e49a8dc1e84df9ded9b175b76c03ba8f4df9e080261342280_prof);

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
