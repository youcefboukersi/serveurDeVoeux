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
        $__internal_76a05110aafbe5b020667349f08160be46fc527dab72c20a706a2af999a658c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a05110aafbe5b020667349f08160be46fc527dab72c20a706a2af999a658c5->enter($__internal_76a05110aafbe5b020667349f08160be46fc527dab72c20a706a2af999a658c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a05110aafbe5b020667349f08160be46fc527dab72c20a706a2af999a658c5->leave($__internal_76a05110aafbe5b020667349f08160be46fc527dab72c20a706a2af999a658c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f24bb1ba9bd2f9316398e0f25f468ca7beb3e2919505dde15c1584b7e06ef41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24bb1ba9bd2f9316398e0f25f468ca7beb3e2919505dde15c1584b7e06ef41a->enter($__internal_f24bb1ba9bd2f9316398e0f25f468ca7beb3e2919505dde15c1584b7e06ef41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Profile:show_content.html.twig", "@SRVDVServer/Profile/show.html.twig", 4)->display($context);
        
        $__internal_f24bb1ba9bd2f9316398e0f25f468ca7beb3e2919505dde15c1584b7e06ef41a->leave($__internal_f24bb1ba9bd2f9316398e0f25f468ca7beb3e2919505dde15c1584b7e06ef41a_prof);

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
