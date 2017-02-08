<?php

/* @SRVDVServer/Resetting/email.txt.twig */
class __TwigTemplate_1caefcdaabc1a85ee082a2010a2ea9c79884539f606730c4e668f6b9e293752f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2502e77c6c2c7a55bae651e433f23c55f098a1ffd695261ed5142aafc9099671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2502e77c6c2c7a55bae651e433f23c55f098a1ffd695261ed5142aafc9099671->enter($__internal_2502e77c6c2c7a55bae651e433f23c55f098a1ffd695261ed5142aafc9099671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2502e77c6c2c7a55bae651e433f23c55f098a1ffd695261ed5142aafc9099671->leave($__internal_2502e77c6c2c7a55bae651e433f23c55f098a1ffd695261ed5142aafc9099671_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1694318a5aea02f46ad319a5affaa1a72bfbbbf672ac71acfc52d3e196387cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1694318a5aea02f46ad319a5affaa1a72bfbbbf672ac71acfc52d3e196387cfa->enter($__internal_1694318a5aea02f46ad319a5affaa1a72bfbbbf672ac71acfc52d3e196387cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
    ";
        
        $__internal_1694318a5aea02f46ad319a5affaa1a72bfbbbf672ac71acfc52d3e196387cfa->leave($__internal_1694318a5aea02f46ad319a5affaa1a72bfbbbf672ac71acfc52d3e196387cfa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fdb5409a3b8e3a17a86e2020f94c161903b17d63d1bb6b591276e364fdc61305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb5409a3b8e3a17a86e2020f94c161903b17d63d1bb6b591276e364fdc61305->enter($__internal_fdb5409a3b8e3a17a86e2020f94c161903b17d63d1bb6b591276e364fdc61305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_fdb5409a3b8e3a17a86e2020f94c161903b17d63d1bb6b591276e364fdc61305->leave($__internal_fdb5409a3b8e3a17a86e2020f94c161903b17d63d1bb6b591276e364fdc61305_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_230c192fb4b6eca200c0b18f1c7d990899a2cac71633328dc1ea950de9886ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230c192fb4b6eca200c0b18f1c7d990899a2cac71633328dc1ea950de9886ce4->enter($__internal_230c192fb4b6eca200c0b18f1c7d990899a2cac71633328dc1ea950de9886ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_230c192fb4b6eca200c0b18f1c7d990899a2cac71633328dc1ea950de9886ce4->leave($__internal_230c192fb4b6eca200c0b18f1c7d990899a2cac71633328dc1ea950de9886ce4_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  62 => 9,  60 => 8,  54 => 7,  44 => 4,  42 => 3,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
    {% autoescape false %}
        {{ 'resetting.email.subject'|trans }}
    {% endautoescape %}
{% endblock %}
{% block body_text %}
    {% autoescape false %}
        {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
    {% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@SRVDVServer/Resetting/email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
