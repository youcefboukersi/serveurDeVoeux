<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f2070e6b7e472499ed4064acd9082b5324df70e5bc89d10d2b303007c275d8c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_7bd31171b0b1a7ab7ca6f748b9c701449da8a75e3fa16f2d0d1b59f7c9dc0d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd31171b0b1a7ab7ca6f748b9c701449da8a75e3fa16f2d0d1b59f7c9dc0d39->enter($__internal_7bd31171b0b1a7ab7ca6f748b9c701449da8a75e3fa16f2d0d1b59f7c9dc0d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bd31171b0b1a7ab7ca6f748b9c701449da8a75e3fa16f2d0d1b59f7c9dc0d39->leave($__internal_7bd31171b0b1a7ab7ca6f748b9c701449da8a75e3fa16f2d0d1b59f7c9dc0d39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43218df53b362314a197a04695987c12b9f68a259133664fa18734d57575ddca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43218df53b362314a197a04695987c12b9f68a259133664fa18734d57575ddca->enter($__internal_43218df53b362314a197a04695987c12b9f68a259133664fa18734d57575ddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_43218df53b362314a197a04695987c12b9f68a259133664fa18734d57575ddca->leave($__internal_43218df53b362314a197a04695987c12b9f68a259133664fa18734d57575ddca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
