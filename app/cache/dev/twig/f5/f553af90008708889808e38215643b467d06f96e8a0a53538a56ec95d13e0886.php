<?php

/* @SRVDVServer/Profile/show.html.twig */
class __TwigTemplate_4127a076dd34baefb5dd5d96f89a46122555cfa55491a52a1e0122cf5cf7b8af extends Twig_Template
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
        $__internal_ef5d432df59dfd3c0a398372034ad5c9c98e82bcad75f1b6c51c83a435530e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5d432df59dfd3c0a398372034ad5c9c98e82bcad75f1b6c51c83a435530e0b->enter($__internal_ef5d432df59dfd3c0a398372034ad5c9c98e82bcad75f1b6c51c83a435530e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5d432df59dfd3c0a398372034ad5c9c98e82bcad75f1b6c51c83a435530e0b->leave($__internal_ef5d432df59dfd3c0a398372034ad5c9c98e82bcad75f1b6c51c83a435530e0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_680cd55326fa039ebf50854a7fc89a1c063a796376365704c3e5d1471f28ee61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680cd55326fa039ebf50854a7fc89a1c063a796376365704c3e5d1471f28ee61->enter($__internal_680cd55326fa039ebf50854a7fc89a1c063a796376365704c3e5d1471f28ee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@SRVDVServer/Profile/show.html.twig", 4)->display($context);
        
        $__internal_680cd55326fa039ebf50854a7fc89a1c063a796376365704c3e5d1471f28ee61->leave($__internal_680cd55326fa039ebf50854a7fc89a1c063a796376365704c3e5d1471f28ee61_prof);

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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Profile/show.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
