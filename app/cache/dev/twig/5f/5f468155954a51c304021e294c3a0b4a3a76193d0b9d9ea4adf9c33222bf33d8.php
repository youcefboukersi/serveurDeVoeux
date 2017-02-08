<?php

/* @SRVDVServer/Profile/show.html.twig */
class __TwigTemplate_16a99eae77298ad8d73f512866a7633f14da6d7bce7622f65ecfbbce94f93f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SRVDVServer/Profile/show.html.twig", 1);
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
        $__internal_fdc1534c2f4416775406c7bdb0df315d52112bb28ea0f0679acb62cc4f8160d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc1534c2f4416775406c7bdb0df315d52112bb28ea0f0679acb62cc4f8160d9->enter($__internal_fdc1534c2f4416775406c7bdb0df315d52112bb28ea0f0679acb62cc4f8160d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdc1534c2f4416775406c7bdb0df315d52112bb28ea0f0679acb62cc4f8160d9->leave($__internal_fdc1534c2f4416775406c7bdb0df315d52112bb28ea0f0679acb62cc4f8160d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82450821f33c9f6e113cb7e3243d04b6cdb710cf7a0841c728373ffe1f1a52cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82450821f33c9f6e113cb7e3243d04b6cdb710cf7a0841c728373ffe1f1a52cf->enter($__internal_82450821f33c9f6e113cb7e3243d04b6cdb710cf7a0841c728373ffe1f1a52cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Profile:show_content.html.twig", "@SRVDVServer/Profile/show.html.twig", 4)->display($context);
        
        $__internal_82450821f33c9f6e113cb7e3243d04b6cdb710cf7a0841c728373ffe1f1a52cf->leave($__internal_82450821f33c9f6e113cb7e3243d04b6cdb710cf7a0841c728373ffe1f1a52cf_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Profile/show.html.twig";
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
", "@SRVDVServer/Profile/show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
