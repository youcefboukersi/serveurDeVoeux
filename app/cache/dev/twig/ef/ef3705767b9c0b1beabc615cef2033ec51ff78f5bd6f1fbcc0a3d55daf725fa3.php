<?php

/* SRVDVServerBundle:Profile:show.html.twig */
class __TwigTemplate_d7c40a8e7d25903d40c27f7a28bce13352e6b18206bd95f20084b898c33806f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Profile:show.html.twig", 1);
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
        $__internal_353f9a5b93d69e92837e1d0a6ff0bbbd187612cbc99e5f4a34d27c3c62198bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353f9a5b93d69e92837e1d0a6ff0bbbd187612cbc99e5f4a34d27c3c62198bf8->enter($__internal_353f9a5b93d69e92837e1d0a6ff0bbbd187612cbc99e5f4a34d27c3c62198bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_353f9a5b93d69e92837e1d0a6ff0bbbd187612cbc99e5f4a34d27c3c62198bf8->leave($__internal_353f9a5b93d69e92837e1d0a6ff0bbbd187612cbc99e5f4a34d27c3c62198bf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1665e57ad945167536729b73a45561820f90bb85281986883ba5e45f3e69492c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1665e57ad945167536729b73a45561820f90bb85281986883ba5e45f3e69492c->enter($__internal_1665e57ad945167536729b73a45561820f90bb85281986883ba5e45f3e69492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Profile:show_content.html.twig", "SRVDVServerBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1665e57ad945167536729b73a45561820f90bb85281986883ba5e45f3e69492c->leave($__internal_1665e57ad945167536729b73a45561820f90bb85281986883ba5e45f3e69492c_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"SRVDVServerBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Profile:show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/show.html.twig");
    }
}
