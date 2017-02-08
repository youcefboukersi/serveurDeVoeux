<?php

/* @SRVDVServer/Registration/email.txt.twig */
class __TwigTemplate_0828387df5f4d69acea66ea214e8409dea9bd53045391ad541562d04bc656521 extends Twig_Template
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
        $__internal_44c0b7aab6a1c23811d5950473e2b8b88b738c9e5f27dfedb0e163a25364b595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c0b7aab6a1c23811d5950473e2b8b88b738c9e5f27dfedb0e163a25364b595->enter($__internal_44c0b7aab6a1c23811d5950473e2b8b88b738c9e5f27dfedb0e163a25364b595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_44c0b7aab6a1c23811d5950473e2b8b88b738c9e5f27dfedb0e163a25364b595->leave($__internal_44c0b7aab6a1c23811d5950473e2b8b88b738c9e5f27dfedb0e163a25364b595_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ca9308a76abe0dc4175c17d7cc2e368d105a2211a6e8b2784cca8d5acc3087f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9308a76abe0dc4175c17d7cc2e368d105a2211a6e8b2784cca8d5acc3087f9->enter($__internal_ca9308a76abe0dc4175c17d7cc2e368d105a2211a6e8b2784cca8d5acc3087f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_ca9308a76abe0dc4175c17d7cc2e368d105a2211a6e8b2784cca8d5acc3087f9->leave($__internal_ca9308a76abe0dc4175c17d7cc2e368d105a2211a6e8b2784cca8d5acc3087f9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_262d23a063f15f1f3a1c7ee5e38bc250437bd254b9dddc477604004b5e91f098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262d23a063f15f1f3a1c7ee5e38bc250437bd254b9dddc477604004b5e91f098->enter($__internal_262d23a063f15f1f3a1c7ee5e38bc250437bd254b9dddc477604004b5e91f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo "    ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_262d23a063f15f1f3a1c7ee5e38bc250437bd254b9dddc477604004b5e91f098->leave($__internal_262d23a063f15f1f3a1c7ee5e38bc250437bd254b9dddc477604004b5e91f098_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_25976950679d8c95bf30cd50b7a10b607673e014fcf9a83f3bdfee44c04dd65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25976950679d8c95bf30cd50b7a10b607673e014fcf9a83f3bdfee44c04dd65c->enter($__internal_25976950679d8c95bf30cd50b7a10b607673e014fcf9a83f3bdfee44c04dd65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_25976950679d8c95bf30cd50b7a10b607673e014fcf9a83f3bdfee44c04dd65c->leave($__internal_25976950679d8c95bf30cd50b7a10b607673e014fcf9a83f3bdfee44c04dd65c_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  65 => 10,  63 => 9,  57 => 8,  47 => 5,  45 => 4,  39 => 3,  32 => 13,  30 => 8,  28 => 3,  25 => 2,);
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
", "@SRVDVServer/Registration/email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
