<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a73cd9b2ae87cf9a2191bc749a8456986a4e7232d9231e83c0505e6d8389b6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8fe772870bea2d705b2d1c534b6cb3ffa32028512fcc65dffcc7289fcfeb91df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe772870bea2d705b2d1c534b6cb3ffa32028512fcc65dffcc7289fcfeb91df->enter($__internal_8fe772870bea2d705b2d1c534b6cb3ffa32028512fcc65dffcc7289fcfeb91df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe772870bea2d705b2d1c534b6cb3ffa32028512fcc65dffcc7289fcfeb91df->leave($__internal_8fe772870bea2d705b2d1c534b6cb3ffa32028512fcc65dffcc7289fcfeb91df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e78e47663489785d9f67da4d10c91cb18b70d58d4ebf88d35d4fcfbb2c444049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78e47663489785d9f67da4d10c91cb18b70d58d4ebf88d35d4fcfbb2c444049->enter($__internal_e78e47663489785d9f67da4d10c91cb18b70d58d4ebf88d35d4fcfbb2c444049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_e78e47663489785d9f67da4d10c91cb18b70d58d4ebf88d35d4fcfbb2c444049->leave($__internal_e78e47663489785d9f67da4d10c91cb18b70d58d4ebf88d35d4fcfbb2c444049_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
