<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7966b37b777382d25b9d4543207bab74caeeb4982968d799344d8e761480be9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2c8e1935b6cdd16ec1aee1321bd7e6605d641a9295bcd0162651e1c939df14c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8e1935b6cdd16ec1aee1321bd7e6605d641a9295bcd0162651e1c939df14c7->enter($__internal_2c8e1935b6cdd16ec1aee1321bd7e6605d641a9295bcd0162651e1c939df14c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8e1935b6cdd16ec1aee1321bd7e6605d641a9295bcd0162651e1c939df14c7->leave($__internal_2c8e1935b6cdd16ec1aee1321bd7e6605d641a9295bcd0162651e1c939df14c7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_844bc30ec6ed5f843ba54175b3e2c5a422808f40ccc7f1253c3641aff54824cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844bc30ec6ed5f843ba54175b3e2c5a422808f40ccc7f1253c3641aff54824cf->enter($__internal_844bc30ec6ed5f843ba54175b3e2c5a422808f40ccc7f1253c3641aff54824cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_844bc30ec6ed5f843ba54175b3e2c5a422808f40ccc7f1253c3641aff54824cf->leave($__internal_844bc30ec6ed5f843ba54175b3e2c5a422808f40ccc7f1253c3641aff54824cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
