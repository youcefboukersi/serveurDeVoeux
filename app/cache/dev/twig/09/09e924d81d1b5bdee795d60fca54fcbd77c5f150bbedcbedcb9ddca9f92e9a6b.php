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
        $__internal_825177596de09b3848a3bc69316b859178e072880aabc7f0d3d4c66763ce6411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825177596de09b3848a3bc69316b859178e072880aabc7f0d3d4c66763ce6411->enter($__internal_825177596de09b3848a3bc69316b859178e072880aabc7f0d3d4c66763ce6411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_825177596de09b3848a3bc69316b859178e072880aabc7f0d3d4c66763ce6411->leave($__internal_825177596de09b3848a3bc69316b859178e072880aabc7f0d3d4c66763ce6411_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ce9d22823c8dc99bbf1db4cb29fc9d95927b584682f4c6ac182cf6a4e9d527c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9d22823c8dc99bbf1db4cb29fc9d95927b584682f4c6ac182cf6a4e9d527c0->enter($__internal_ce9d22823c8dc99bbf1db4cb29fc9d95927b584682f4c6ac182cf6a4e9d527c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
    ";
        
        $__internal_ce9d22823c8dc99bbf1db4cb29fc9d95927b584682f4c6ac182cf6a4e9d527c0->leave($__internal_ce9d22823c8dc99bbf1db4cb29fc9d95927b584682f4c6ac182cf6a4e9d527c0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bb9dc7daf10cb172bcc61935f295162745418e494eb79c78a96c8cffa976a370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9dc7daf10cb172bcc61935f295162745418e494eb79c78a96c8cffa976a370->enter($__internal_bb9dc7daf10cb172bcc61935f295162745418e494eb79c78a96c8cffa976a370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_bb9dc7daf10cb172bcc61935f295162745418e494eb79c78a96c8cffa976a370->leave($__internal_bb9dc7daf10cb172bcc61935f295162745418e494eb79c78a96c8cffa976a370_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_39411ba55f68d45f7d4937da571f892a1da4e30642db421055dc6d2ac77b0cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39411ba55f68d45f7d4937da571f892a1da4e30642db421055dc6d2ac77b0cbf->enter($__internal_39411ba55f68d45f7d4937da571f892a1da4e30642db421055dc6d2ac77b0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_39411ba55f68d45f7d4937da571f892a1da4e30642db421055dc6d2ac77b0cbf->leave($__internal_39411ba55f68d45f7d4937da571f892a1da4e30642db421055dc6d2ac77b0cbf_prof);

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
