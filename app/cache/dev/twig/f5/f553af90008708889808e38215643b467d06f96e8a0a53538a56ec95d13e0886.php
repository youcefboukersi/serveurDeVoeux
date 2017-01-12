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
        $__internal_c0ea3a47c6314b00cb4aefa9d187661a270f787c1ddb8ef0f2b2ee54677bce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ea3a47c6314b00cb4aefa9d187661a270f787c1ddb8ef0f2b2ee54677bce02->enter($__internal_c0ea3a47c6314b00cb4aefa9d187661a270f787c1ddb8ef0f2b2ee54677bce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ea3a47c6314b00cb4aefa9d187661a270f787c1ddb8ef0f2b2ee54677bce02->leave($__internal_c0ea3a47c6314b00cb4aefa9d187661a270f787c1ddb8ef0f2b2ee54677bce02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb53d7f0476eacb88a0519a0076d988ff005666776a002fe881bc68078954d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb53d7f0476eacb88a0519a0076d988ff005666776a002fe881bc68078954d02->enter($__internal_cb53d7f0476eacb88a0519a0076d988ff005666776a002fe881bc68078954d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@SRVDVServer/Profile/show.html.twig", 4)->display($context);
        
        $__internal_cb53d7f0476eacb88a0519a0076d988ff005666776a002fe881bc68078954d02->leave($__internal_cb53d7f0476eacb88a0519a0076d988ff005666776a002fe881bc68078954d02_prof);

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
