<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_7a2df76872882c9b77dd81e29dda414ac45a22ab55f78551d204998d177fce1a extends Twig_Template
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
        $__internal_b385d8fbd1c79d464b6196cfbfbafc8e06df6edf19076728a59c9c1ef25553e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b385d8fbd1c79d464b6196cfbfbafc8e06df6edf19076728a59c9c1ef25553e0->enter($__internal_b385d8fbd1c79d464b6196cfbfbafc8e06df6edf19076728a59c9c1ef25553e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b385d8fbd1c79d464b6196cfbfbafc8e06df6edf19076728a59c9c1ef25553e0->leave($__internal_b385d8fbd1c79d464b6196cfbfbafc8e06df6edf19076728a59c9c1ef25553e0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e8e1ca2e969c7f3e67ae1ee11b3d48e6ec901bd16290cffbce9396fe8e22b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8e1ca2e969c7f3e67ae1ee11b3d48e6ec901bd16290cffbce9396fe8e22b98->enter($__internal_2e8e1ca2e969c7f3e67ae1ee11b3d48e6ec901bd16290cffbce9396fe8e22b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2e8e1ca2e969c7f3e67ae1ee11b3d48e6ec901bd16290cffbce9396fe8e22b98->leave($__internal_2e8e1ca2e969c7f3e67ae1ee11b3d48e6ec901bd16290cffbce9396fe8e22b98_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_803dfd671d13fd0b935101a4600b1b55ec8c7501b6add7180ceab642e4c30570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803dfd671d13fd0b935101a4600b1b55ec8c7501b6add7180ceab642e4c30570->enter($__internal_803dfd671d13fd0b935101a4600b1b55ec8c7501b6add7180ceab642e4c30570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_803dfd671d13fd0b935101a4600b1b55ec8c7501b6add7180ceab642e4c30570->leave($__internal_803dfd671d13fd0b935101a4600b1b55ec8c7501b6add7180ceab642e4c30570_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8f718b99ece940b014abee2d1e37a38d0487e1838534ebb43781ad4ad376af82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f718b99ece940b014abee2d1e37a38d0487e1838534ebb43781ad4ad376af82->enter($__internal_8f718b99ece940b014abee2d1e37a38d0487e1838534ebb43781ad4ad376af82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8f718b99ece940b014abee2d1e37a38d0487e1838534ebb43781ad4ad376af82->leave($__internal_8f718b99ece940b014abee2d1e37a38d0487e1838534ebb43781ad4ad376af82_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
