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
        $__internal_6e03594a81c6b434a5f7857513e9f759775634bd4c21893176df110c46568aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e03594a81c6b434a5f7857513e9f759775634bd4c21893176df110c46568aae->enter($__internal_6e03594a81c6b434a5f7857513e9f759775634bd4c21893176df110c46568aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e03594a81c6b434a5f7857513e9f759775634bd4c21893176df110c46568aae->leave($__internal_6e03594a81c6b434a5f7857513e9f759775634bd4c21893176df110c46568aae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0aacae1329a995b36f3255a63ab228c5a0dfbc297d644e8494f386238ddfc107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aacae1329a995b36f3255a63ab228c5a0dfbc297d644e8494f386238ddfc107->enter($__internal_0aacae1329a995b36f3255a63ab228c5a0dfbc297d644e8494f386238ddfc107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0aacae1329a995b36f3255a63ab228c5a0dfbc297d644e8494f386238ddfc107->leave($__internal_0aacae1329a995b36f3255a63ab228c5a0dfbc297d644e8494f386238ddfc107_prof);

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
