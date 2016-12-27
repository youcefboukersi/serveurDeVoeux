<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c1bfa534536cd875c1e405ccc622d800a6ac3ee9384b0b3be7abc3a5ecea446e extends Twig_Template
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
        $__internal_80cca09657cac66651a2fe5eec7caf2247b93e1b6e41036a8c9fbb7443e04457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cca09657cac66651a2fe5eec7caf2247b93e1b6e41036a8c9fbb7443e04457->enter($__internal_80cca09657cac66651a2fe5eec7caf2247b93e1b6e41036a8c9fbb7443e04457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_80cca09657cac66651a2fe5eec7caf2247b93e1b6e41036a8c9fbb7443e04457->leave($__internal_80cca09657cac66651a2fe5eec7caf2247b93e1b6e41036a8c9fbb7443e04457_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f386b2d17c434b47a978a90928a1b784470cb8fa5a36e1439684c58a1b2d56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f386b2d17c434b47a978a90928a1b784470cb8fa5a36e1439684c58a1b2d56b->enter($__internal_1f386b2d17c434b47a978a90928a1b784470cb8fa5a36e1439684c58a1b2d56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_1f386b2d17c434b47a978a90928a1b784470cb8fa5a36e1439684c58a1b2d56b->leave($__internal_1f386b2d17c434b47a978a90928a1b784470cb8fa5a36e1439684c58a1b2d56b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ba6ce30d9ec7591fb72ee421aac2985372511af84d787a5ba2d0b74260ae4a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6ce30d9ec7591fb72ee421aac2985372511af84d787a5ba2d0b74260ae4a07->enter($__internal_ba6ce30d9ec7591fb72ee421aac2985372511af84d787a5ba2d0b74260ae4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ba6ce30d9ec7591fb72ee421aac2985372511af84d787a5ba2d0b74260ae4a07->leave($__internal_ba6ce30d9ec7591fb72ee421aac2985372511af84d787a5ba2d0b74260ae4a07_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9aeef285a2f944629232b458b5fcf993f3343c1f4bddbe49cc8eced9822bc63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aeef285a2f944629232b458b5fcf993f3343c1f4bddbe49cc8eced9822bc63b->enter($__internal_9aeef285a2f944629232b458b5fcf993f3343c1f4bddbe49cc8eced9822bc63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9aeef285a2f944629232b458b5fcf993f3343c1f4bddbe49cc8eced9822bc63b->leave($__internal_9aeef285a2f944629232b458b5fcf993f3343c1f4bddbe49cc8eced9822bc63b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
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
", "FOSUserBundle:Resetting:email.txt.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/email.txt.twig");
    }
}
