<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_85170ab23b1a08a7831b909a6c41148f4a020d9d0a8606130f6d239d92cf850a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a7f26e42fdb36b8730f9fd6199ac74c88f01e87e034156d2c9b0b1ea2ef56585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f26e42fdb36b8730f9fd6199ac74c88f01e87e034156d2c9b0b1ea2ef56585->enter($__internal_a7f26e42fdb36b8730f9fd6199ac74c88f01e87e034156d2c9b0b1ea2ef56585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f26e42fdb36b8730f9fd6199ac74c88f01e87e034156d2c9b0b1ea2ef56585->leave($__internal_a7f26e42fdb36b8730f9fd6199ac74c88f01e87e034156d2c9b0b1ea2ef56585_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02a14684fd86104efb68bfd99707001624ce69c064c73b8a00921084ea51feac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a14684fd86104efb68bfd99707001624ce69c064c73b8a00921084ea51feac->enter($__internal_02a14684fd86104efb68bfd99707001624ce69c064c73b8a00921084ea51feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_02a14684fd86104efb68bfd99707001624ce69c064c73b8a00921084ea51feac->leave($__internal_02a14684fd86104efb68bfd99707001624ce69c064c73b8a00921084ea51feac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
