<?php

/* SRVDVServerBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_f76bb977f00d040251c68b0e6a143ed27ff7e8ee0cf540037c22b90d32196cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_6b973f9116e2596a5e1e4a8b154e9ffbd60da71140bd75647ad0c4af5709af3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b973f9116e2596a5e1e4a8b154e9ffbd60da71140bd75647ad0c4af5709af3e->enter($__internal_6b973f9116e2596a5e1e4a8b154e9ffbd60da71140bd75647ad0c4af5709af3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b973f9116e2596a5e1e4a8b154e9ffbd60da71140bd75647ad0c4af5709af3e->leave($__internal_6b973f9116e2596a5e1e4a8b154e9ffbd60da71140bd75647ad0c4af5709af3e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21dfdce295c50a1167bfb830b132af40ca0dda31064edd8b58ad1ee144e446c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dfdce295c50a1167bfb830b132af40ca0dda31064edd8b58ad1ee144e446c3->enter($__internal_21dfdce295c50a1167bfb830b132af40ca0dda31064edd8b58ad1ee144e446c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_21dfdce295c50a1167bfb830b132af40ca0dda31064edd8b58ad1ee144e446c3->leave($__internal_21dfdce295c50a1167bfb830b132af40ca0dda31064edd8b58ad1ee144e446c3_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 6,  11 => 1,);
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
", "SRVDVServerBundle:Registration:checkEmail.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
