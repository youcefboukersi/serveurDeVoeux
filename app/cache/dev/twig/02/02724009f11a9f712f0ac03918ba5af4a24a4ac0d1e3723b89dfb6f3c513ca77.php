<?php

/* @SRVDVServer/Resetting/reset.html.twig */
class __TwigTemplate_50c40c867a4ee6204f4bafb59f8b2e06948e770f83bd0ac9eb12c11b1db6334c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/reset.html.twig", 1);
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
        $__internal_a924fa2a964cff1b899534f20fb245fa682abce2c68d8a676aec46d4c04531ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a924fa2a964cff1b899534f20fb245fa682abce2c68d8a676aec46d4c04531ec->enter($__internal_a924fa2a964cff1b899534f20fb245fa682abce2c68d8a676aec46d4c04531ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a924fa2a964cff1b899534f20fb245fa682abce2c68d8a676aec46d4c04531ec->leave($__internal_a924fa2a964cff1b899534f20fb245fa682abce2c68d8a676aec46d4c04531ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96979bc9a5bc2d2cedb96ca55d3efb162273ec3d17b64dbcdae30393b986965a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96979bc9a5bc2d2cedb96ca55d3efb162273ec3d17b64dbcdae30393b986965a->enter($__internal_96979bc9a5bc2d2cedb96ca55d3efb162273ec3d17b64dbcdae30393b986965a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:reset_content.html.twig", "@SRVDVServer/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_96979bc9a5bc2d2cedb96ca55d3efb162273ec3d17b64dbcdae30393b986965a->leave($__internal_96979bc9a5bc2d2cedb96ca55d3efb162273ec3d17b64dbcdae30393b986965a_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/reset.html.twig";
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
", "@SRVDVServer/Resetting/reset.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
