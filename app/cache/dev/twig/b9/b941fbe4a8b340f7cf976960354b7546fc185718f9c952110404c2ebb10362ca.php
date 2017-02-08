<?php

/* SRVDVServerBundle:Resetting:reset.html.twig */
class __TwigTemplate_908870486c6b08f07e0350f23035333883d2ab7f0c1a0d2ddbd16063c9ef73b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 1);
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
        $__internal_87938fc37fa2268432cd62d8426cd0a8eb8a1751d8c9a959b8d30483eb057257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87938fc37fa2268432cd62d8426cd0a8eb8a1751d8c9a959b8d30483eb057257->enter($__internal_87938fc37fa2268432cd62d8426cd0a8eb8a1751d8c9a959b8d30483eb057257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87938fc37fa2268432cd62d8426cd0a8eb8a1751d8c9a959b8d30483eb057257->leave($__internal_87938fc37fa2268432cd62d8426cd0a8eb8a1751d8c9a959b8d30483eb057257_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_750b28314ab4be89000baf644074ede44e25077fc89b66f84b196666a910f9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750b28314ab4be89000baf644074ede44e25077fc89b66f84b196666a910f9c3->enter($__internal_750b28314ab4be89000baf644074ede44e25077fc89b66f84b196666a910f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:reset_content.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_750b28314ab4be89000baf644074ede44e25077fc89b66f84b196666a910f9c3->leave($__internal_750b28314ab4be89000baf644074ede44e25077fc89b66f84b196666a910f9c3_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {% include \"SRVDVServerBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/reset.html.twig");
    }
}
