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
        $__internal_177187c1ba37fd191d27bdc3b576987e35937fe04dfca700195e0e7b94f94bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177187c1ba37fd191d27bdc3b576987e35937fe04dfca700195e0e7b94f94bb3->enter($__internal_177187c1ba37fd191d27bdc3b576987e35937fe04dfca700195e0e7b94f94bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177187c1ba37fd191d27bdc3b576987e35937fe04dfca700195e0e7b94f94bb3->leave($__internal_177187c1ba37fd191d27bdc3b576987e35937fe04dfca700195e0e7b94f94bb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d447314e0ba46f4cd204611ec10b1662236000df4c1b2089dee32d08d0a0b19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d447314e0ba46f4cd204611ec10b1662236000df4c1b2089dee32d08d0a0b19c->enter($__internal_d447314e0ba46f4cd204611ec10b1662236000df4c1b2089dee32d08d0a0b19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Profile:show_content.html.twig", "@SRVDVServer/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d447314e0ba46f4cd204611ec10b1662236000df4c1b2089dee32d08d0a0b19c->leave($__internal_d447314e0ba46f4cd204611ec10b1662236000df4c1b2089dee32d08d0a0b19c_prof);

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
