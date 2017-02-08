<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_eeba2fd958b30efd6a431d91324bd7cc0d86e0a45a41b57238ea32423f3801fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_49c4d0d30e56142a6c6507004efb0638bc7d70c126be32b7376b0bfdd7a2e7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c4d0d30e56142a6c6507004efb0638bc7d70c126be32b7376b0bfdd7a2e7e7->enter($__internal_49c4d0d30e56142a6c6507004efb0638bc7d70c126be32b7376b0bfdd7a2e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c4d0d30e56142a6c6507004efb0638bc7d70c126be32b7376b0bfdd7a2e7e7->leave($__internal_49c4d0d30e56142a6c6507004efb0638bc7d70c126be32b7376b0bfdd7a2e7e7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd3fbe7144cc2cf4fa12a7dd3b1bd644fba21f0ca6e83fb5922e6f4efa5876f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3fbe7144cc2cf4fa12a7dd3b1bd644fba21f0ca6e83fb5922e6f4efa5876f5->enter($__internal_dd3fbe7144cc2cf4fa12a7dd3b1bd644fba21f0ca6e83fb5922e6f4efa5876f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dd3fbe7144cc2cf4fa12a7dd3b1bd644fba21f0ca6e83fb5922e6f4efa5876f5->leave($__internal_dd3fbe7144cc2cf4fa12a7dd3b1bd644fba21f0ca6e83fb5922e6f4efa5876f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
