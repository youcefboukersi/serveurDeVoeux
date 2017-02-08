<?php

/* @SRVDVServer/Profile/edit.html.twig */
class __TwigTemplate_813950fe1c3a647da1b6ca87e86dea3d67a49b886a5e032d5807efc4616e83fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff71e23898cf2e7546b4b5183ece6221e0b4b6fe6de13a5a6a8ed68d570fff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff71e23898cf2e7546b4b5183ece6221e0b4b6fe6de13a5a6a8ed68d570fff8->enter($__internal_9ff71e23898cf2e7546b4b5183ece6221e0b4b6fe6de13a5a6a8ed68d570fff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9ff71e23898cf2e7546b4b5183ece6221e0b4b6fe6de13a5a6a8ed68d570fff8->leave($__internal_9ff71e23898cf2e7546b4b5183ece6221e0b4b6fe6de13a5a6a8ed68d570fff8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a3815b2869d0d7c4e5d3bb3eb72b88288687cbebf4c32218f588c2c82ed003c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3815b2869d0d7c4e5d3bb3eb72b88288687cbebf4c32218f588c2c82ed003c->enter($__internal_2a3815b2869d0d7c4e5d3bb3eb72b88288687cbebf4c32218f588c2c82ed003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SRVDVServerBundle:Profile:edit_content.html.twig", "@SRVDVServer/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2a3815b2869d0d7c4e5d3bb3eb72b88288687cbebf4c32218f588c2c82ed003c->leave($__internal_2a3815b2869d0d7c4e5d3bb3eb72b88288687cbebf4c32218f588c2c82ed003c_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Profile/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block fos_user_content %}
{% include \"SRVDVServerBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Profile/edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
