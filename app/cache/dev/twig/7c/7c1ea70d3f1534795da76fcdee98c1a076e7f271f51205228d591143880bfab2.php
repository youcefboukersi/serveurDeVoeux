<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a10a5caece253accfafc28df7bf0feadd71463ed5a659887ccbedb49e8f1a588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_002a4d1a73674a5d9232c4f75585c52be88f0c65cb1862e8887e853b50d178e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002a4d1a73674a5d9232c4f75585c52be88f0c65cb1862e8887e853b50d178e7->enter($__internal_002a4d1a73674a5d9232c4f75585c52be88f0c65cb1862e8887e853b50d178e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002a4d1a73674a5d9232c4f75585c52be88f0c65cb1862e8887e853b50d178e7->leave($__internal_002a4d1a73674a5d9232c4f75585c52be88f0c65cb1862e8887e853b50d178e7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36522b21e91c71634a2e88ebc815f1acbe4661a2716e5eb13d70d8fb6ea26bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36522b21e91c71634a2e88ebc815f1acbe4661a2716e5eb13d70d8fb6ea26bf9->enter($__internal_36522b21e91c71634a2e88ebc815f1acbe4661a2716e5eb13d70d8fb6ea26bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_36522b21e91c71634a2e88ebc815f1acbe4661a2716e5eb13d70d8fb6ea26bf9->leave($__internal_36522b21e91c71634a2e88ebc815f1acbe4661a2716e5eb13d70d8fb6ea26bf9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
